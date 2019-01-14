<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Res_controller extends CI_Controller{
	function index(){
		$this->load->view('includes/header');
		$this->load->view('All_restaurent');
		$this->load->view('includes/footer');
	}

	function bujhon_bari(){
		$this->load->view('includes/header');
		$this->load->view('single_res');
		$this->load->view('includes/footer');
	}

}
?>