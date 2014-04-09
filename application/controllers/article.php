<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class article extends CI_Controller {
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
		$this->_data['page_title'] = '文章管理';
		//class="active"
		$this->_data['article_active'] = 'active';
		$this->load->view('article',$this->_data);
	}
	public function write()
	{
		/** set title */
		$this->_data['page_title'] = '撰写新文章';
		$this->_data['article_write_active'] = 'active';
		$this->load->view('write_post',$this->_data);
	}
	public function show()
	{
		/** set title ，博客文章全文显示*/
		$this->_data['page_title'] = '我的博客-标题';
		$this->load->view('show_article',$this->_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */