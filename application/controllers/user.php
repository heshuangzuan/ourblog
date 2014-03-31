<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//
//  login.php
//  Login Controller
//
//  Created by zuanzuan on 3/24/14.
//
class user extends CI_Controller {

	private $_data = array();
    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();
	
	$this->_data['article_write_active'] = '';//写文章
	$this->_data['article_active'] = '';//文章管理
	$this->_data['page_listuser_active'] = '';//用户管理
	$this->_data['page_personalinfo_active'] = '';//个人信息
	$this->_data['page_changepwd_active'] = '';//修改密码
    }
    /**
     * 默认执行函数
     */
	public function index()
	{
		$this->_data['page_title'] = '用户管理';
		$this->_data['page_listuser_active'] = 'active';//用户管理
 		$this->load->view('listuser',$this->_data);
	}
    /**
     * 修改用户
     */
	public function edit()
	{
		/** set title */
		$this->_data['page_title'] = '修改用户';
		//class="active"
		$this->_data['page_listuser_active'] = 'active';//用户管理
		$this->load->view('edituser',$this->_data);
	}
    /**
     * 个人信息
     */
	public function userinfo()
	{
		/** set title */
		$this->_data['page_title'] = '个人信息';
		//class="active"
		$this->_data['page_personalinfo_active'] = 'active';
		$this->load->view('userinfo',$this->_data);
	}
    /**
     * 修改密码
     */
	public function changepwd()
	{
		/** set title */
		$this->_data['page_title'] = '修改密码';
		//class="active"
		$this->_data['page_changepwd_active'] = 'active';
		$this->load->view('changepwd',$this->_data);
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */