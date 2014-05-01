<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//
//  listuser.php
//  Listuser Controller
//
//  Created by zuanzuan on 3/24/14.
//
class Listuser extends CI_Controller {

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
    	$this->load->library('auth');
	    if (!$this->auth->has_login()) redirect();
        $user = unserialize($this->session->userdata('user'));
        if ($user['isAdmin'] != 1) redirect();
        
        
		$this->_data['page_title'] = '�û�����';
		$this->_data['page_listuser_active'] = 'active';//�û�����
 		$this->load->view('listuser', $this->_data);
	}
}

/* End of file listuser.php */
/* Location: ./application/controllers/listuser.php */