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
        
		/** set title */
		$this->_data['page_title'] = '文章管理';
		//class="active"
		$this->_data['article_active'] = 'active';
		$this->load->view('article',$this->_data);
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
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */