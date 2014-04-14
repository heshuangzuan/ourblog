<?php
//
//  article_model.php
//  article Model
//
//  Created by LiQiang on 3/24/14.
//
class Article_model extends CI_Model {
	//添加文章
	public function add_art($data)
	
	{
		
		 $this->load->helper('security');
		 return $this->db->insert('posts', $data);
		
	}
	//获取用户文章
	public  function s_user_art($uid)
	{
	    $data = array();

        $data = $this->db->get_where('posts', array('author_id' => $uid));
 

        return  $data->result_array();
		}
	
	//获取所有文章按照日期就行排序
	public function s_new_art()
	{
		$data = array();
		$data = $this->db->query('SELECT * FROM posts ORDER BY pid DESC LIMIT 0 , 5 ');
		return  $data->result_array();
		
	}
}
?>