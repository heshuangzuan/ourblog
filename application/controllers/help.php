<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class help extends CI_Controller {
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
	public function index()
	{
		/** set title */
		$this->_data['page_title'] = '帮助';
		$this->load->view('help',$this->_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */