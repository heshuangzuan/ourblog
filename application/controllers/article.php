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
	$this->load->library('Auth');
	$this->load->library('form_validation');
	$this->load->model('Article_model');
	$this->load->model('User_model');
    }
	public function index()
	{
	    $this->load->library('auth');
	    if (!$this->auth->has_login()) redirect();
        $user = unserialize($this->session->userdata('user'));
       // var_dump($user);
        //exit();
        
		if($this->auth->has_login())
		{
			$this->_data['article_active'] = 'active';
			$this->_data['page_title'] = '���¹���';
			$this->_data['user_name'] = $user['name'];	//����û���		
			$this->_data['art_array'] = $this->Article_model->s_user_art($user['uid']); //��ѯ����������һά����
			 // var_dump($this->_data);
			 // exit();
			$this->load->view('article',$this->_data);
		}
	}
	public function write()
	{
		/** set title */

			$this->_data['page_title'] = '׫д������';
			$this->_data['article_write_active'] = 'active';
			$this->load->view('write_post',$this->_data);

	}
	//����չʾ
	public function show($art_id)
	{
		//var_dump($art_id);
		// exit();
		/** set title ����������ȫ����ʾ*/
		
		$this->_data['page_title'] = '�ҵĲ���-����';
		$this->_data['art_array'] = $this->Article_model->s_art_art($art_id);
		$this->_data['user_array'] = $this->User_model->get_user_by_id(($this->_data['art_array']['author_id']));
		if($this->auth->has_login())
		{ 
			$this->_data['user_login']= true; //�����û��Ƿ��¼��Ϣ���Ա��������
			$this->load->view('show_article',$this->_data);
		}
		else
		{
			$this->_data['user_login']= false;
			$this->load->view('show_article',$this->_data);
			
			}
	}
	//�������  ����post����δ���
	public function insert_art()
	{
		if($this->auth->has_login())
		{
			 $user = unserialize($this->session->userdata('user'));
		         		  $data = array(
            	 		   'title' => $this->input->post('titlle'),
  	 		  	   			'text' => $this->input->post('body'),
							'allow_comment' => '1',
							'status'=>'0',
							'author_id' => $user['uid'],
                            'created'=>now(),
							'modified'=>'0',
							'deleted'=>'0'
          			 		 );
          		 		 $success = $this->Article_model->add_art($data);
						 if($success)
						 {
							 $this->_data['page_title'] = '���·����ɹ�';
							 $this->load->view('insert_art',$this->_data);
						 }
		}
		}
		//ɾ������
		public function dellete_art($art_id)
		{
			if($this->auth->has_login())
			{
				$success = $this->Article_model->d_art($art_id);
				if($success)
				{
					
					redirect('/article','location');
				}
				else
				{
					show_404();
				}
				
			 }
			
			
		}
		//��������
		public function update_artitlle($art_id)
		{
			if($this->auth->has_login())
			{
          		 		$this->_data['art_array'] = $this->Article_model->s_art_art($art_id);
						$this->_data['page_title'] = '���±༭';
						$this->_data['article_write_active'] = 'active';
							//	var_dump($this->_data );
							// exit();
						$this->load->view('article_update',$this->_data);
			}
			
		}
		//��Ӹ�������
		public function add_update_article($pid)
		{
			if($this->auth->has_login())
			{
				 $user = unserialize($this->session->userdata('user'));
		         		  $data = array(
            	 		   'title' => $this->input->post('titlle'),
  	 		  	   			'text' => $this->input->post('body'),
							'allow_comment' => '1',
							'status'=>'0',
							'author_id' => $user['uid'],
                            //'created'=>now(),
							'modified'=>now(),
							'deleted'=>'0'
          			 		 );
          		 		 $success = $this->Article_model->update_art($data,$pid);
						 if($success)
						 {
							 $this->_data['page_title'] = '���¸��³ɹ�';
							 $this->load->view('insert_art',$this->_data);
						 }
			}
		}
		//��������ID�������
		public function add_coments($art_id)
		{
			$data = array();
			if($this->auth->has_login())
			{
				//�û��ѵ�¼�򡣻�ȡ��¼�û���id
				$user = unserialize($this->session->userdata('user'));

				$data = array
					(
						'text' => $this->input->post('body'),//��������
						'author_id'=>$this->User_model->get_user_by_id(($this->_data['art_array']['author_id'])), //����ID
						'owner_id' =>$user['uid'], //����ID
						'pid'=> $art_id,
						'status'=> '1',
						'created'=> now(),
					);
					
			}
			else
			{ 
			//δ��¼�����ȡ�û������䣬ip��ַ��
				$data = array(
				'email' =>$this->input->post('body'),
				'text' => $this->input->post('body'),//��������
				'ip' => $_SERVER["REMOTE_ADDR"],
				'pid'=> $art_id,
				'status'=> '1',
				'created'=> now(),
				
				);
				
						
			}
			$success = $this->Article_model->add_comments($data);
			
			if($success)
			{
				redirect('article/show/'.$art_id,'location');
			}
			else
			{
				redirect('article/show/'.$art_id,'location');
			}
			

			
		}
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */