<?php
//
//  user_model.php
//  User Model
//
//  Created by zuanzuan on 3/24/14.
//
class User_model extends CI_Model {

    /**
     * 通过 ID 获取单个用户信息
     *
     * @param $uid 用户ID
     * @return array 用户信息
     */
    public function get_user_by_id($uid)
    {
        $data = array();

        $this->db->select('*')
             	 ->from('users')
             	 ->where('uid', $uid);
        $query = $this->db->get();
        if (1 === $query->num_rows())
        {
            $data = $query->row_array();
        }
        $query->free_result();

        return $data;
    }
    
    /**
     * 添加一个用户
     *
     * @param $data 用户信息
     * @return BOOL 成功与否
     */
    public function add_user($data)
    {
//         $this->load->helper('security');
//         $this->load->library('auth');
// 
//         $this->db->insert('users', $data);
    }
    
    /**
     * 修改用户信息
     *
     * @access public
     * @param $uid 用户ID
     * @param $data 用户信息
     * @return BOOL 成功与否
     */
    public function update_user($uid, $data)
    {
 //        if (isset($data['userID'])) unset($data['userID']);
// 
//         $this->db->where('user_base.userId', $uid);
//         $this->db->where('user_base.userId = user_info.userId');
//         $this->db->update('user_base as user_base, user_info as user_info', $data);
// 
//         return $this->db->affected_rows() > 0 ? TRUE : FALSE;
    }
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */