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
	$this->load->library('Auth');
	$this->load->library('form_validation');
	 $this->load->model('Article_model');
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
			$this->_data['page_title'] = '文章管理';
			$this->_data['user_name'] = $user['name'];	//添加用户名		
			$this->_data['art_array'] = $this->Article_model->s_user_art($user['uid']); //查询结果数组加入一维数组
			 // var_dump($this->_data);
			 // exit();
			$this->load->view('article',$this->_data);
		}
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
		//var_dump($art_id);
		// exit();
		/** set title ，博客文章全文显示*/
		$this->_data['page_title'] = '我的博客-标题';
		$this->load->view('show_article',$this->_data);
	}
	//文章添加  中文post乱码未解决
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
							 $this->_data['page_title'] = '文章发布成功';
							 $this->load->view('insert_art',$this->_data);
						 }
		}
		}
		//删除文章
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
		//更新文章
		public function update_artitlle($art_id)
		{
			if($this->auth->has_login())
			{
          		 		$this->_data['art_array'] = $this->Article_model->s_art_art($art_id);
						$this->_data['page_title'] = '文章编辑';
						$this->_data['article_write_active'] = 'active';
							//	var_dump($this->_data );
							// exit();
						$this->load->view('article_update',$this->_data);
			}
			
		}
		//添加更新文章
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
							 $this->_data['page_title'] = '文章更新成功';
							 $this->load->view('insert_art',$this->_data);
						 }
			}
		}
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */