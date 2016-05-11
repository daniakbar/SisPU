<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Component extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('component_model', 'comp', true);
		
		$this->output->enable_profiler(TRUE);

		if(!$this->session->userdata('session'))
   		{
   			//If no session, redirect to login page
     		redirect('login', 'refresh');
   		}
	}

	public function viewlembaga()
	{
		$this->form_validation->set_rules('lembaga', 'Lembaga', 'trim|required');

		if($this->form_validation->run() === false)
		{
			$data['lembaga'] = $this->comp->getlembaga();
			$data['content'] = $this->load->view('component/view-lembaga', $data, true);
			$this->load->view('header', $data);
		}
		else
		{
			if($this->input->post("submit") !== null)
			{
				if($this->input->post("submit") == "add")
				{
					$this->comp->savelembaga();
					redirect('component/viewlembaga','refresh');
				}
				else
				{
					$this->comp->updatelembaga($this->input->post("id"));
					redirect('component/viewlembaga','refresh');
				}
			}
		}
	}

	public function viewkonstruksi()
	{
		$this->form_validation->set_rules('konstruksi', 'Lembaga', 'trim|required');

		if($this->form_validation->run() === false)
		{
			$data['konstruksi'] = $this->comp->getkonstruksi();
			$data['content'] = $this->load->view('component/view-konstruksi', $data, true);
			$this->load->view('header', $data);
		}
		else
		{
			if($this->input->post("submit") !== null)
			{
				if($this->input->post("submit") == "add")
				{
					$this->comp->savekonstruksi();
					redirect('component/viewkonstruksi','refresh');
				}
				else
				{
					$this->comp->updatekonstruksi($this->input->post("id"));
					redirect('component/viewkonstruksi','refresh');
				}
			}
		}
	}

	public function viewtipe()
	{
		$this->form_validation->set_rules('tipe', 'Lembaga', 'trim|required');

		if($this->form_validation->run() === false)
		{
			$data['tipe'] = $this->comp->gettipe();
			$data['content'] = $this->load->view('component/view-tipe', $data, true);
			$this->load->view('header', $data);
		}
		else
		{
			if($this->input->post("submit") !== null)
			{
				if($this->input->post("submit") == "add")
				{
					$this->comp->savetipe();
					redirect('component/viewtipe','refresh');
				}
				else
				{
					$this->comp->updatetipe($this->input->post("id"));
					redirect('component/viewtipe','refresh');
				}
			}
		}
	}

	public function viewarsipruangan()
	{
		$this->form_validation->set_rules('ruangan', 'Lembaga', 'trim|required');

		if($this->form_validation->run() === false)
		{
			$data['ruangan'] = $this->comp->getruangan();
			$data['content'] = $this->load->view('component/view-arsip-ruangan', $data, true);
			$this->load->view('header', $data);
		}
		else
		{
			if($this->input->post("submit") !== null)
			{
				if($this->input->post("submit") == "add")
				{
					$this->comp->saveruangan();
					redirect('component/viewarsipruangan','refresh');
				}
				else
				{
					$this->comp->updateruangan($this->input->post("id"));
					redirect('component/viewarsipruangan','refresh');
				}
			}
		}
	}

	public function viewarsiprollpact()
	{
		$this->form_validation->set_rules('rollpact', 'Lembaga', 'trim|required');

		if($this->form_validation->run() === false)
		{
			$data['rollpact'] = $this->comp->getrollpact();
			$data['content'] = $this->load->view('component/view-arsip-rollpact', $data, true);
			$this->load->view('header', $data);
		}
		else
		{
			if($this->input->post("submit") !== null)
			{
				if($this->input->post("submit") == "add")
				{
					$this->comp->saverollpact();
					redirect('component/viewarsiprollpact','refresh');
				}
				else
				{
					$this->comp->updaterollpact($this->input->post("id"));
					redirect('component/viewarsiprollpact','refresh');
				}
			}
		}
	}

	public function viewarsiplemari()
	{
		$this->form_validation->set_rules('lemari', 'Lembaga', 'trim|required');

		if($this->form_validation->run() === false)
		{
			$data['lemari'] = $this->comp->getlemari();
			$data['content'] = $this->load->view('component/view-arsip-lemari', $data, true);
			$this->load->view('header', $data);
		}
		else
		{
			if($this->input->post("submit") !== null)
			{
				if($this->input->post("submit") == "add")
				{
					$this->comp->savelemari();
					redirect('component/viewarsiplemari','refresh');
				}
				else
				{
					$this->comp->updatelemari($this->input->post("id"));
					redirect('component/viewarsiplemari','refresh');
				}
			}
		}
	}

	public function viewarsiprak()
	{
		$this->form_validation->set_rules('rak', 'Lembaga', 'trim|required');

		if($this->form_validation->run() === false)
		{
			$data['rak'] = $this->comp->getrak();
			$data['content'] = $this->load->view('component/view-arsip-rak', $data, true);
			$this->load->view('header', $data);
		}
		else
		{
			if($this->input->post("submit") !== null)
			{
				if($this->input->post("submit") == "add")
				{
					$this->comp->saverak();
					redirect('component/viewarsiprak','refresh');
				}
				else
				{
					$this->comp->updaterak($this->input->post("id"));
					redirect('component/viewarsiprak','refresh');
				}
			}
		}
	}

	public function viewarsipbox()
	{
		$this->form_validation->set_rules('box', 'Lembaga', 'trim|required');

		if($this->form_validation->run() === false)
		{
			$data['box'] = $this->comp->getbox();
			$data['content'] = $this->load->view('component/view-arsip-box', $data, true);
			$this->load->view('header', $data);
		}
		else
		{
			if($this->input->post("submit") !== null)
			{
				if($this->input->post("submit") == "add")
				{
					$this->comp->savebox();
					redirect('component/viewarsipbox','refresh');
				}
				else
				{
					$this->comp->updatebox($this->input->post("id"));
					redirect('component/viewarsipbox','refresh');
				}
			}
		}
	}
}
