<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Home_model');
	}

	function index(){
		$this->load->view('start');
		$this->load->view('includes/footer');
	}

	public function form_validation()
	{

		$this->load->library('form_validation');
		$this->form_validation->set_rules("first_name", "First Name", 'required');
		$this->form_validation->set_rules("last_name", "Last Name", 'required|alpha');

		if($this->input->post("password") === $this->input->post("re_password")){

		if($this->form_validation->run())
		{

			$data = array(
				"first_name"  	=>$this->input->post("first_name"),
				"last_name"  	=>$this->input->post("last_name"),
				"email"  		=>$this->input->post("email"),
				"password"  	=>md5($this->input->post("password")),

			);

			$this->Login_model->insert_data($data);
			$this->session->set_flashdata('error', 'please try again, you missing something');
				$this->index();
		}
		else{
			echo "its not work";

		}
	}
	else{
		$this->session->set_flashdata('error', 'please try again, you missing something');
			redirect(site_url()."/Login_controller");

	}

	} 

	public function login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules("email", "Email", 'required');
		$this->form_validation->set_rules("password", "Password", 'required');

		if($this->form_validation->run()){

			$email 			= $this->input->post('email');
			$password 		= md5($this->input->post('password'));

			if($this->Login_model->can_login($email, $password))
			{

				$result = $this->Login_model->get_id($email, $password);
				foreach($result as $value) {
					$session_data['id'] = $value->Id;
					$session_data['last_name'] = $value->last_name;
					$session_data['first_name'] = $value->first_name;
					$session_data['email'] = $value->email;
				}
				$this->session->set_userdata($session_data);

				redirect('/home');
			}
			else{
				$this->session->set_flashdata('error', 'invalid username or password');
				$this->index();

			}

		}
		else{
			echo "kaam oise na";
		}
	}

	function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('last_name');
		$this->session->unset_userdata('first_name');
		$this->session->unset_userdata('email');
		redirect("/Login_controller");
	}

}
?>