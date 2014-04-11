<?php
//
//  article_model.php
//  article Model
//
//  Created by LiQiang on 3/24/14.
//
class Article_model extends CI_Model {
	
	public function add_art($data)
	
	{
		
		 $this->load->helper('security');
		
		 return $this->db->insert('posts', $data);
		
		}
}
?>