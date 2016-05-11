<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//$this->output->enable_profiler(TRUE);
		if(!$this->session->userdata('session'))
   		{
   			//If no session, redirect to login page
     		redirect('login', 'refresh');
   		}
	}

	public function index()
	{
		$data['content'] = $this->load->view('dashboard', '', true);
		$this->load->view('header', $data);
	}
}
