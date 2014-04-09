<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//
//  Auth.php
//  Auth Libraries
//
//  Created by zuanzuan on 4/9/14.
//
class Auth {
    /**
     * 用户
     *
     * @access private
     */
    private $_user = array();

    /**
     * 是否已经登录
     *
     * @access private
     */
    private $_hasLogin = NULL;

    /**
     * CI 句柄
     *
     * @access private
     */
    private $_CI;

    /**
     * 构造函数
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        $this->_CI = &get_instance();

        $this->_CI->load->model('User_model', 'user');

        $this->_user = unserialize($this->_CI->session->userdata('user'));

        log_message('debug', "zuanzuan: Authentication library Class Initialized");
    }

    /**
     * 判断用户是否已经登录
     *
     * @access public
     * @return BOOL 是否已经登录
     */
    public function has_login()
    {
        if (NULL !== $this->_hasLogin) return $this->_hasLogin;
        else
        {
            // var_dump($this->_user);

            if (!empty($this->_user) && NULL !== $this->_user['uid'])
            {
                $user = $this->_CI->user->get_user_by_id($this->_user['uid']);

                if ($user && $user['token'] === $this->_user['token'])
                {
/*
                    $user['activated'] = time();

                    $this->_CI->user->update_user($this->_user['uid'], $user);
*/

                    return $this->_hasLogin = TRUE;
                }
            }
            return $this->_hasLogin = FALSE;
        }
    }
    
    /**
     * 处理用户退出
     *
     * @access public
     * @return void
     */
    public function process_logout()
    {
        $this->_CI->session->sess_destroy();

        redirect();
    }

    /**
     * 处理用户登录
     *
     * @access public
     * @param $user 用户信息
     * @return BOOL 是否成功
     */
    public function process_login($user, $auto_login)
    {
        $this->_user = $user;
/*         $this->_user['activated'] = now(); */
        $this->_user['token'] = $this->generate_token();
/*         $this->_user['illegal_count'] = 0; */
        if (TRUE === $auto_login)
        {
/*             $identifier = $this->_user['identifier']; */
            $token = $this->_user['token'];
/*             $timeout = $this->generate_timeout(); */
/*             $this->_user['timeout'] = $timeout; */

            // echo 'identifier = ' . $identifier . '<br />';
            // echo 'token = ' . $token . '<br />';
            // echo 'timeout = ' . $timeout . '<br />';
        }
        else
        {
            // $this->_CI->session->sess_destroy();
/*             $this->delete_auth_cookie(); */
        }

        if ($this->_CI->user->update_user($this->_user['uid'], $this->_user))
        {
            $this->_user = $this->_CI->user->get_user_by_id($user['uid']);
            $this->_set_session();
            $this->_hasLogin = TRUE;

            return TRUE;
        }
        return FALSE;
    }

    /**
     * 设置 Session
     *
     * @access private
     * @return void
     */
    private function _set_session()
    {
        $session_data = array('user' => serialize($this->_user));

        $this->_CI->session->set_userdata($session_data);
    }

    /**
     * 生成 Token
     *
     * @access public
     * @return String Token
     */
    public function generate_token()
    {
        return sha1(now() . rand());
    }

    /**
     * 可逆加密算法
     *
     * @param $data
     * @param $key
     * @access public
     * @return string
     */
    public function encrypt($data, $key)
    {
        $key    =   md5($key);
        $x      =   0;
        $len    =   strlen($data);
        $l      =   strlen($key);
        for ($i = 0; $i < $len; $i++)
        {
            if ($x == $l)
            {
                $x = 0;
            }
            @$char .= $key{$x};
            $x++;
        }
        for ($i = 0; $i < $len; $i++)
        {
            @$str .= chr(ord($data{$i}) + (ord($char{$i})) % 256);
        }
        return base64_encode($str);
    }

    /**
     * 可逆解密算法
     *
     * @param $data
     * @param $key
     * @access public
     * @return string
     */
    public function decrypt($data, $key)
    {
        $key = md5($key);
        $x = 0;
        $data = base64_decode($data);
        $len = strlen($data);
        $l = strlen($key);
        for ($i = 0; $i < $len; $i++)
        {
            if ($x == $l)
            {
                $x = 0;
            }
            @$char .= substr($key, $x, 1);
            $x++;
        }
        for ($i = 0; $i < $len; $i++)
        {
            if (ord(substr($data, $i, 1)) < ord(substr($char, $i, 1)))
            {
                $str .= chr((ord(substr($data, $i, 1)) + 256) - ord(substr($char, $i, 1)));
            }
            else
            {
                @$str .= chr(ord(substr($data, $i, 1)) - ord(substr($char, $i, 1)));
            }
        }
        return $str;
    }
}

/* End of file Auth.php */
/* Location: ./application/libraries/Auth.php */