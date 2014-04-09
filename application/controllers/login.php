<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//
//  login.php
//  Login Controller
//
//  Created by zuanzuan on 3/24/14.
//
class Login extends CI_Controller {

	private $_data = array();
	
    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('User_model', 'user');
        $this->load->library('form_validation');
        $this->load->library('auth');
    }
    
    /**
     * 默认执行函数
     */
	public function index()
	{
	    $this->form_validation->set_rules('username', '帐号', 'trim|required|max_length[255]|strtolower|xss_clean');
        $this->form_validation->set_rules('password', '密码', 'required|min_length[6]|max_length[16]|md5|xss_clean|callback_password_check[username]');

        if (FALSE === $this->form_validation->run())
        {
            $this->_data['page_title'] = '登陆';
            $this->load->view('login', $this->_data);
        }
        else
        {
            $user = $this->input->post('password');

            if ($this->auth->process_login($user, FALSE))
            {
                redirect('article');
            }
            // $this->load->view('login');
        }
	}
	
    /**
     * Password Callback
     *
     * @access public
     * @return BOOL/array 假/用户信息
     */
    public function password_check($password, $login_name_field)
    {
        $login_name = $this->input->post($login_name_field, TRUE);
/*         $login_type = valid_email($login_name) ? 'email' : 'mobile'; */

        $user = $this->user->validate_user('name', $login_name, $password);
        if (!empty($user))
        {
            return $user;
        }
        else
        {
            // sleep(1);
            $this->session->set_flashdata('login_error', 'TRUE');
        }

        $this->form_validation->set_message('password_check', '%s错误');
        return FALSE;
    }
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */