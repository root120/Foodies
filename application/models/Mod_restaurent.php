<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mod_restaurent extends CI_Model{

	//getging all restaurent from restaurents table
	public function select_all_restaurents()
	{
		$this->db->select('*');
    $this->db->from('restaurents');
		$query = $this->db->get();
		$result =  $query->result();
		return $result;
	}

	function save_restaurent_info($postedData,$url)
	{
		$attr = array(
                'owner_id' =>1,
                'res_name' => $postedData['res_name'],
                'res_desc' => $postedData['res_desc'],
                'res_address' => $postedData['res_address'],
              );
          if($url!==""){
            $attr['res_image']=$url;
          }
          $query= $this->db->insert('restaurents',$attr);
         if($query){
          return true;  
         }else{
          return false;
        }
	}
	
}
?>