<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class article extends CI_Controller {
	private $_data = array();
    /**
     * ���캯��
     */
    public function __construct()
    {
        parent::__construct();
	
	$this->_data['article_write_active'] = '';//д����
	$this->_data['article_active'] = '';//���¹���
	$this->_data['page_listuser_active'] = '';//�û�����
	$this->_data['page_personalinfo_active'] = '';//������Ϣ
	$this->_data['page_changepwd_active'] = '';//�޸�����
    }
	public function index()
	{
		/** set title */
		$this->_data['page_title'] = '���¹���';
		//class="active"
		$this->_data['article_active'] = 'active';
		$this->load->view('article',$this->_data);
	}
	public function write()
	{
		/** set title */
		$this->_data['page_title'] = '׫д������';
		$this->_data['article_write_active'] = 'active';
		$this->load->view('write_post',$this->_data);
	}
	public function show()
	{
		/** set title ����������ȫ����ʾ*/
		$this->_data['page_title'] = '�ҵĲ���-����';
		$this->load->view('show_article',$this->_data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */