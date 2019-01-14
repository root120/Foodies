<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurents extends CI_Controller{
	public function __construct()
	{
	    parent::__construct();
	    $this->load->model('mod_restaurent');
	 }
	function index(){
		$data = [];
		$data['title'] = "Restaurents";
		$this->load->view('includes/header',$data);
		$data['get_restaurents'] = $this->mod_restaurent->select_all_restaurents();
		$this->load->view('all_restaurent',$data);
		$this->load->view('includes/footer');
	}

	function bujhon_bari(){
		$this->load->view('includes/header');
		$this->load->view('single_res');
		$this->load->view('includes/footer');
	}

}
?>