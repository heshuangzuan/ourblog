<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class article extends CI_Controller {
	private $_data = array();

	public function index()
	{
		/** set title */
		$this->_data['page_title'] = '���¹���';
		//class="active"
		$this->_data['article_write_active'] = '';
		$this->_data['article_active'] = 'active';
		$this->load->view('admin/article',$this->_data);
	}
	public function write()
	{
		/** set title */
		$this->_data['page_title'] = '׫д������';
		$this->_data['article_active'] = '';
		$this->_data['article_write_active'] = 'active';
		$this->load->view('admin/write_post',$this->_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */