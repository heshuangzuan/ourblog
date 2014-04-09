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
    }
    
    /**
     * 默认执行函数
     */
	public function index()
	{
        $success = $this->user->validate_user('name', 'papapa', '123123');
        
	    if (!$success) {
    	    echo '对的';
	    }
	    else {
	    
    	    echo '不对不对';
	    }
	    
		$this->_data['page_title'] = '登陆';
 		$this->load->view('login', $this->_data);
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */