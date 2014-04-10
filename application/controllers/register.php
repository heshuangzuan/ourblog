<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//
//  register.php
//  Register Controller
//
//  Created by zuanzuan on 3/24/14.
//
class Register extends CI_Controller {

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
    }
    
    /**
     * Ĭ��ִ�к���
     */
    public function index()
    {
        $this->form_validation->set_rules('username', '�û���', 'trim|required|max_length[64]|xss_clean|callback_username_check');
        $this->form_validation->set_rules('password', '����', 'required|min_length[6]|max_length[16]|xss_clean');
        $this->form_validation->set_rules('confirm_password', '����ȷ��', 'required|min_length[6]|max_length[16]|xss_clean|matches[password]');
        $this->form_validation->set_rules('email', '����', 'trim|required|max_length[255]|strtolower|valid_email|xss_clean');

        if (FALSE === $this->form_validation->run())
        {
            $this->_data['page_title'] = 'ע��';
            $this->load->view('register', $this->_data);
        }
        else
        {
            $data = array(
                'name' => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'email' => $this->input->post('email')
            );
            $success = $this->user->add_user($data);
            
            if ($success)
            {
                $this->load->view('login');
            }
            else
            {
                redirect('register');
            }

        }
    }
    
    /**
     * Username Callback
     *
     * @return BOOL
     */
    public function username_check($name)
    {
        if ($this->user->check_exist('name', $name))
        {
            $this->form_validation->set_message('username_check', '�û��Ѵ���');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
    }
}

/* End of file register.php */
/* Location: ./application/controllers/register.php */