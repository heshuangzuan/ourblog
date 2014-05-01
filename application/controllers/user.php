<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//
//  user.php
//  User Controller
//
//  Created by zuanzuan on 3/24/14.
//
class User extends CI_Controller {

	private $_data = array();
	
    /**
     * ���캯��
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('User_model', 'user');
        $this->load->library('form_validation');
        $this->load->helper('email');
        
    	$this->_data['article_write_active'] = '';//д����
    	$this->_data['article_active'] = '';//���¹���
    	$this->_data['page_listuser_active'] = '';//�û�����
    	$this->_data['page_personalinfo_active'] = '';//������Ϣ
    	$this->_data['page_changepwd_active'] = '';//�޸�����
    }
    
    /**
     * Ĭ��ִ�к���
     */
	public function index()
	{
		$this->_data['page_title'] = '�û�����';
		$this->_data['page_listuser_active'] = 'active';//�û�����
 		$this->load->view('listuser',$this->_data);
	}
	
    /**
     * �޸��û�
     */
	public function edit()
	{
		/** set title */
		$this->_data['page_title'] = '�޸��û�';
		//class="active"
		$this->_data['page_listuser_active'] = 'active';//�û�����
		$this->load->view('edituser',$this->_data);
	}
	
    /**
     * ������Ϣ
     */
	public function userinfo()
	{
        $this->load->library('auth');
	    if (!$this->auth->has_login()) redirect();
        $user = unserialize($this->session->userdata('user'));
        $user = $this->user->get_user_by_id($user['uid']);
        $this->form_validation->set_rules('email', '����', 'trim|required|max_length[255]|strtolower|valid_email|xss_clean');

        if (FALSE === $this->form_validation->run())
        {
            /** set title */
            $this->_data['page_title'] = '������Ϣ';
            //class="active"
            $this->_data['page_personalinfo_active'] = 'active';
            
            $this->_data['username'] = $user['name'];
            $this->_data['email'] = $user['email'];
            $this->load->view('userinfo', $this->_data);
        }
        else
        {
            $data = array(
                'email' => $this->input->post('email')          
            );

            $success = $this->user->update_user($user['uid'], $data);
            
            if ($success)
            {
                redirect('user/userinfo');
            }
            else
            {
                redirect('user/userinfo');
            }

        }
	}
	
    /**
     * �޸�����
     */
	public function changepwd()
	{
        $this->load->library('auth');
	    if (!$this->auth->has_login()) redirect();
        $user = unserialize($this->session->userdata('user'));
        
        $this->form_validation->set_rules('oldPassword', '������', 'required|min_length[6]|max_length[16]|xss_clean|callback_password_check');
        $this->form_validation->set_rules('newPassword', '������', 'required|min_length[6]|max_length[16]|xss_clean');
        $this->form_validation->set_rules('confirmPassword', '����ȷ��', 'required|min_length[6]|max_length[16]|xss_clean|matches[newPassword]');

        if (FALSE === $this->form_validation->run())
        {
            /** set title */
            $this->_data['page_title'] = '�޸�����';
            // class="active"
            $this->_data['page_changepwd_active'] = 'active';
            
            $this->load->view('changepwd', $this->_data);
        }
        else
        {
            $this->load->helper('security');

            $data = array(
                'password' => do_hash($this->input->post('confirmPassword'), 'md5')        
            );

            $success = $this->user->update_user($user['uid'], $data);
            
            if ($success)
            {
                redirect('login/logout');
            }
            else
            {
                redirect('user/changepwd');
            }

        }
	}
	
    /**
     * Password Callback
     *
     * @return BOOL
     */
    public function password_check($oldPassword)
    {
        $this->load->helper('security');
        $user = unserialize($this->session->userdata('user'));
        
        if (do_hash($oldPassword, 'md5') != $user['password'])
        {
            $this->form_validation->set_message('password_check', '���������');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */