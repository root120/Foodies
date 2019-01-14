<?php

class Login_model extends CI_Model
{
	

	function insert_data($data) 
	{
		$this->db->insert("tbl_user", $data);
		
	}

	function can_login($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('tbl_user');
		if($query->num_rows() > 0)
		{
			return true;
		}
		else{
			return false;
		}
	}

	function get_id($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('tbl_user');

		$result = $query->result();
 		return $result;
	}

	function fetch_data($email, $password){
		$this->db->select('Id');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$query = $this->db->get('tbl_user');

		return $query;

	}

}
?>