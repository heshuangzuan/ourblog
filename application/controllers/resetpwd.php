<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//
//  login.php
//  Login Controller
//
//  Created by zuanzuan on 3/24/14.
//
class Resetpwd extends CI_Controller {

	private $_data = array();
    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * 默认执行函数
     */
	public function index()
	{
		$this->_data['page_title'] = '重置密码';
 		$this->load->view('resetpwd',$this->_data);
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */