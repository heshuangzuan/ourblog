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
	
		//获取所有文章按照日期就行排序
	public function s_list_art($number)
	{
		$prenumber = $number + 5;
		$data = array();
		$data = $this->db->query('SELECT * FROM posts ORDER BY pid DESC LIMIT '.$number.' ,'.$prenumber);
		return  $data->result_array();
		
	}
	//删除文章
	public function d_art($art_id)
	
	{
		$this->load->helper('security');
		$qr ="DELETE FROM posts WHERE posts.pid = '".$art_id."' LIMIT 1";
		$data = $this->db->query($qr);
		//$data = mysql_affected_rows();
		if($data)
		{
			return true;
		}
		else
		return false;	
	}
	//获取文章id内容
	public  function s_art_art($pid)
	{
	    $data = array();

        $data = $this->db->get_where('posts', array('pid' => $pid));

        return  $data->row_array();
		}
	//更新文章
	public function update_art($data,$pid)
	{
		$this->load->helper('security');
		return $this->db->update('posts', $data,array('pid' => $pid));
	}
	//添加评论
	public function add_comments($data)
	{
		 $this->load->helper('security');
		 return $this->db->insert('comments', $data);
		
		}
	//展示评论
	public function show_comments($art_id)
	{
		$this->load->helper('security');
		$data = $this->db->get_where('comments', array('pid' => $art_id));
		return  $data->result_array();
	}
	//获取作者ID
	public function get_author_id($pid)
	{
		$this->load->helper('security');
		$data = $this->db->query('SELECT author_id FROM posts where pid='.$pid);
		return  $data->row_array();
		}
	
}
?>