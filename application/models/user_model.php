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
     * @param $uid
     * @return Array 用户信息
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
     * 通过 ID 获取单个用户名
     *
     * @param $uid
     * @return Array 用户名
     */
	    public function get_username_by_id($uid)
    {
        $data = array();

        $this->db->select('name')
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
     * @return BOOL
     */
    public function add_user($data)
    {
        $this->load->helper('security');

		$data['password'] = do_hash($data['password'], 'md5');
		$data['status'] = 0;
		$data['created'] = now();
		$data['deleted'] = 0;
		
        return $this->db->insert('users', $data);
    }
    
    /**
     * 修改用户信息
     *
     * @param $uid
     * @param $data 用户信息
     * @return BOOL
     */
    public function update_user($uid, $data)
    {
    	$this->db->where('uid', $uid);
    	$this->db->update('users', $data);
		return $this->db->affected_rows() > 0 ? TRUE : FALSE;
    }
    
    /**
     * 检查是否存在用户
     *
     * @param $value 值
     * @return BOOL 成功与否
     */
    public function check_exist($key='name', $value='')
    {
        if (!empty($value))
        {
            $this->db->select('uid')->from('users')->where($key, $value);
            $query = $this->db->get();
            $num = $query->num_rows();
            $query->free_result();

            return $num > 0 ? TRUE : FALSE;
        }
        return FALSE;
    }
    
    /**
     * 检查用户是否通过验证
     *
     * @param $key { username }
     * @param $value 值
     * @param $password 密码
     * @return FALSE/array 否/用户信息
     */
    public function validate_user($key = 'name', $value = '', $password)
    {
        $matched = FALSE;

        if (!empty($value))
        {
            $this->db->where($key, $value);
            $query = $this->db->get('users');

            if (1 === $query->num_rows())
            {
                $data = $query->row_array();
            }

            if (!empty($data))
            {
                $matched = $password === $data['password'] ? $data : FALSE;

                if (FALSE === $matched)
                {
                    // update the illegal_count
                }
            }

            $query->free_result();
        }

        return $matched;
    }
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */