<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	private $_data = array();
    /**
     * 构造函数
     */
    public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
		$this->load->model('Article_model');
		
		$this->_data['page_title'] = '毕业设计-博客系统';
		$this->_data['art_array'] = $this->Article_model->s_new_art();
		$this->load->view('index',$this->_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */