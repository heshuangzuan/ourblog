<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class help extends CI_Controller {
	private $_data = array();
	public function index()
	{
		/** set title */
		$this->_data['page_title'] = '°ïÖú';
		$this->load->view('admin/help',$this->_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */