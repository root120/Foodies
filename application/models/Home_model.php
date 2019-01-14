<?php 

 class Home_model extends CI_Model
 {
 	
 	function save_post_information($postedData, $url)
 	{
 		$information = array(
 			'user_id'   => $this->session->userdata('id'),
 			'post' => $postedData['user_post'],
 			'date' => date('Y-m-d h:i:s')
 		);
 		if($url!=="")
 		{
 			$information['image'] = $url;
 		}
 		$query = $this->db->insert('tbl_user_posts', $information);

 		if($query){
 			return true;
 		}
 		else return false;

 	}

 	function save_profile_information($updatedProfile, $url)
 	{
 		$information = array(
 			'id'   => $this->session->userdata('id'),
 			'work' => $updatedProfile['work'],
 			'dob' => $updatedProfile['dob'],
 			'location' => $updatedProfile['location'],
 		);
 		if($url!=="")
 		{
 			$information['image'] = $url;
 		}
 		$query = $this->db->insert('tbl_user_profile', $information);

 		if($query){
 			return true;
 		}
 		else return false;

 	}

 	function select_all_post()
 	{
 		$this->db->select('*');
 		$this->db->from('tbl_user_posts');
 		$this->db->join('tbl_user', 'tbl_user_posts.user_id = tbl_user.Id');
 		$this->db->order_by("post_id", "desc");
 		$query = $this->db->get();
 		$result = $query->result();
 		return $result;
 	}
 }

?> 