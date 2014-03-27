<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articlewrite extends CI_Controller {
	private $_data = array();
	public function index()
	{
		/** set title */
		$this->_data['page_title'] = '×«Ð´ÐÂÎÄÕÂ';
		$this->load->view('admin/header',$this->_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */