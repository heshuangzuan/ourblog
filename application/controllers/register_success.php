<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register_success extends CI_Controller {
	private $_data = array();
    /**
     * ���캯��
     */
    public function __construct()
    {
        parent::__construct();
	
    }
	public function index()
	{
		/** set title */
		$this->_data['page_title'] = 'ע��ɹ�';
		$this->load->view('register_success',$this->_data);
	}
}