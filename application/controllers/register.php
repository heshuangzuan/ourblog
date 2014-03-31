<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//
//  login.php
//  Login Controller
//
//  Created by zuanzuan on 3/24/14.
//
class Register extends CI_Controller {

	private $_data = array();
    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('User_model', 'user');
    }
    
    /**
     * 默认执行函数
     */
	public function index()
	{
		// $data = array();
// 		$data['name'] = 'zuanzuan';
// 		$data['password'] = '123123';
// 		$data['email'] = 'heshuangzuan@icloud.com';
// 		echo $this->user->add_user($data);
// 		
// 		$data = $this->user->get_user_by_id(1);
// 		var_dump($data);

// 		echo $this->user->update_user(1, array('name' => 'papapa'));
		$this->_data['page_title'] = '注册';
 		$this->load->view('register',$this->_data);
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */