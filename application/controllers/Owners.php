<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owners extends CI_Controller{
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model('mod_restaurent');
	 }

	 function index()
	 {
	 	$data = [];
		$data['title'] = "Owner";
		$this->load->view('includes/header',$data);
		$this->load->view('owners');
		$this->load->view('includes/footer');
	 }

	 function add_restaurent()
	 { 
	 		$postedData =$this->input->post(NULL);
	 		$url =  $this->_res_image();
			$this->mod_restaurent->save_restaurent_info($postedData,$url);
			$sdata = array();
			$sdata['msg'] = "Restaurent Save Successfully.";
			
			redirect('Owners/index');
	 }

	 private  function _res_image()
	    {
			$type = explode('.', $_FILES["res_image"]["name"]);
			$type = $type[count($type)-1];
			$name = uniqid(rand()).'.'.$type;
			$url  = './uploads/restaurents/'.$name;
			if( in_array($type,  array("PNG", "JPG", "JPEG", "GIF", "png", "jpg", "jpeg", "gif")) )
			{
				if( is_uploaded_file($_FILES["res_image"]["tmp_name"]) )
				{
					if(move_uploaded_file($_FILES["res_image"]["tmp_name"], $url))
						return $name;				}
				else
				{
					return FALSE;
				}
				return TRUE;
			}
			else
			{
				return FALSE;
			}
	    }




}