<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller
{

	function __construct()
		{
			parent::__construct();
			$this->load->model('Home_model');
		}

	function index()
	{
		if($this->session->userdata('id') >0)
		{
			$data = [];
			$data['title'] = 'Home';
			$this->load->view('includes/header', $data);
			$data['get_all_post'] = $this->Home_model->select_all_post();
			$this->load->view('home', $data);
			$this->load->view('includes/footer');
		}
		else{
			redirect(base_url().'index.php/Login_controller');
		}
	}

	function add_post()
	{
		$postedData = $this->input->post(NULL);
		$url = $this->_food_image();
		$this->Home_model->save_post_information($postedData, $url);
		$data = array();
		$data['msg'] = "Succesfully.";

		redirect(base_url().'index.php/Home_controller');

	}

	private function _food_image()
	{
		$type = explode('.', $_FILES["food_image"]["name"]);
		$type = $type[count($type)-1];
		$name = uniqid(rand()).'.'.$type;
		$url  = './uploads/user_pictures/'.$name;

		if( in_array($type, array("PNG", "JPG", "JPEG", "GIF", "png", "jpg", "jpeg", "gif")))
		{
			if(is_uploaded_file($_FILES["food_image"]["tmp_name"])){
				if(move_uploaded_file($_FILES["food_image"]["tmp_name"], $url))
					return $name;
			}
			else
				return FALSE;
			return true;
		}
		else return false;
	}

	function settings_profile()
	{
		$updatedProfile = $this->input->post(NULL);
		$url = $this->_profile_image();
		$this->Home_model->save_profile_information($updatedProfile, $url);
		redirect(base_url().'index.php/Home_controller');

	}

	private function _profile_image()
	{
		$type = explode('.', $_FILES["profile_image"]["name"]);
		$type = $type[count($type)-1];
		$name = uniqid(rand()).'.'.$type;
		$url  = './uploads/user_profile_pictures/'.$name;

		if( in_array($type, array("PNG", "JPG", "JPEG", "GIF", "png", "jpg", "jpeg", "gif")))
		{
			if(is_uploaded_file($_FILES["profile_image"]["tmp_name"])){
				if(move_uploaded_file($_FILES["profile_image"]["tmp_name"], $url))
					return $name;
			}
			else
				return FALSE;
			return true;
		}
		else return false;
	}
		
}
?>