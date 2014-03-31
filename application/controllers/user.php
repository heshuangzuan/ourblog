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
    /**
     * Ĭ��ִ�к���
     */
	public function index()
	{
		$this->_data['page_title'] = '�û�����';
		$this->_data['page_listuser_active'] = 'active';//�û�����
 		$this->load->view('listuser',$this->_data);
	}
    /**
     * �޸��û�
     */
	public function edit()
	{
		/** set title */
		$this->_data['page_title'] = '�޸��û�';
		//class="active"
		$this->_data['page_listuser_active'] = 'active';//�û�����
		$this->load->view('edituser',$this->_data);
	}
    /**
     * ������Ϣ
     */
	public function userinfo()
	{
		/** set title */
		$this->_data['page_title'] = '������Ϣ';
		//class="active"
		$this->_data['page_personalinfo_active'] = 'active';
		$this->load->view('userinfo',$this->_data);
	}
    /**
     * �޸�����
     */
	public function changepwd()
	{
		/** set title */
		$this->_data['page_title'] = '�޸�����';
		//class="active"
		$this->_data['page_changepwd_active'] = 'active';
		$this->load->view('changepwd',$this->_data);
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */