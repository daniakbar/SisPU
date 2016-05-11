<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','user',TRUE);
	}

	public function index()
	{
		if($this->session->userdata('session'))
   		{
   			//If no session, redirect to login page
     		redirect('dashboard', 'refresh');
   		}

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');

		if($this -> form_validation -> run() === false)
		{
			$this->load->view('login');
		}
		else
		{
			redirect('dashboard', 'refresh');
		}
	}

	function check_database($password)
	{
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');

		//query the database
		$result = $this->user->login($username, $password);

		if($result)
		{
			$user = $result[0];
			if(password_verify($password, $user->password))
			{
				$sess_array = array();
				$sess_array = array(
					'username' => $user->username,
					'id' => $user->id
					);
				$this->session->set_userdata('session', $sess_array);
				return TRUE;
			}
			else
			{
				$this->form_validation->set_message('check_database', 'Password salah');
				return false;
			}
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Username atau password salah');
			return false;
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('session');
		session_destroy();
		redirect('login', 'refresh');
	}
}
