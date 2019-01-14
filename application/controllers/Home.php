<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		// $this->load->model('Login_model');
		$this->load->model('Home_model');
	}
	function index(){

		$user_id = $this->session->userdata('id');
		if ($user_id != NULL) {
			$data['title'] = "Home";
			$this->load->view('includes/header',$data);
			$data['get_all_post'] = $this->Home_model->select_all_post();
			$this->load->view('home', $data);
			$this->load->view('includes/footer');
		}else{
			redirect('login_controller');
		}

		
	}


}
?>