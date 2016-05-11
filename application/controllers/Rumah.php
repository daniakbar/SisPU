<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumah extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('rumah_model', 'rumah', true);
		$this->load->model('component_model', 'comp', true);	
		
		//$this->output->enable_profiler(TRUE);

		if(!$this->session->userdata('session'))
   		{
   			//If no session, redirect to login page
     		redirect('login', 'refresh');
   		}
	}

	public function index()
	{
		$data['rumah'] = $this->rumah->getrumah();
		$data['content'] = $this->load->view('view-rumah', $data, true);
		$this->load->view('header', $data);
	}

	public function detail($id)
	{
		$data['rumah'] = $this->rumah->getdetailrumah($id)[0];
		$data['content'] = $this->load->view('detail-rumah', $data, true);
		$this->load->view('header', $data);
	}

	public function add()
	{
		$this->form_validation->set_rules('hdno', 'HDNO', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Penghuni', 'trim|required');
		$this->form_validation->set_rules('luasbangunan', 'Luas Bangunan', 'trim|required');
		$this->form_validation->set_rules('luastanah', 'Luas Tanah', 'trim|required');
		$this->form_validation->set_rules('hargabangunan', 'Harga Bangunan', 'trim|required');
		$this->form_validation->set_rules('hargatanah', 'Harga Tanah', 'trim|required');
		$this->form_validation->set_rules('tahunbangunan', 'Tahun Bangunan', 'trim|required');
		$this->form_validation->set_rules('tahuntanah', 'Tahun Tanah', 'trim|required');
		$this->form_validation->set_rules('sumbertanah', 'Sumber Tanah', 'trim|required');
		$this->form_validation->set_rules('sumberbangunan', 'Sumber Bangunan', 'trim|required');
		/*$this->form_validation->set_rules('nosk', 'Username', 'trim|required');
		$this->form_validation->set_rules('tglsk', 'Username', 'trim|required');
		$this->form_validation->set_rules('nosip', 'Username', 'trim|required');
		$this->form_validation->set_rules('tglsip', 'Username', 'trim|required');
		$this->form_validation->set_rules('noph', 'Username', 'trim|required');
		$this->form_validation->set_rules('tglph', 'Username', 'trim|required');
		$this->form_validation->set_rules('nokontrak', 'Username', 'trim|required');
		$this->form_validation->set_rules('tglkontrak', 'Username', 'trim|required');
		$this->form_validation->set_rules('nosktl', 'Username', 'trim|required');
		$this->form_validation->set_rules('tglsktl', 'Username', 'trim|required');
		$this->form_validation->set_rules('nohm', 'Username', 'trim|required');
		$this->form_validation->set_rules('tglhm', 'Username', 'trim|required');*/
		//$this->form_validation->set_rules('angsuranpertama', 'Username', 'trim|required');
		//$this->form_validation->set_rules('angsuranperbulan', 'Username', 'trim|required');
		//$this->form_validation->set_rules('angsuranterakhir', 'Username', 'trim|required');
		//$this->form_validation->set_rules('lamaangsuran', 'Username', 'trim|required');

		if($this->form_validation->run() === false)
		{
			$data['attribute'] = $this->comp->getattribute();
			$data['content'] = $this->load->view('form-rumah', $data, true);
			$this->load->view('header', $data);
		}
		else
		{
			$this->rumah->save();
			redirect('rumah','refresh');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('hdno', 'HDNO', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
		$this->form_validation->set_rules('nama', 'Nama Penghuni', 'trim|required');
		$this->form_validation->set_rules('luasbangunan', 'Luas Bangunan', 'trim|required');
		$this->form_validation->set_rules('luastanah', 'Luas Tanah', 'trim|required');
		$this->form_validation->set_rules('hargabangunan', 'Harga Bangunan', 'trim|required');
		$this->form_validation->set_rules('hargatanah', 'Harga Tanah', 'trim|required');
		$this->form_validation->set_rules('tahunbangunan', 'Tahun Bangunan', 'trim|required');
		$this->form_validation->set_rules('tahuntanah', 'Tahun Tanah', 'trim|required');
		$this->form_validation->set_rules('sumbertanah', 'Sumber Tanah', 'trim|required');
		$this->form_validation->set_rules('sumberbangunan', 'Sumber Bangunan', 'trim|required');
		/*$this->form_validation->set_rules('nosk', 'Username', 'trim|required');
		$this->form_validation->set_rules('tglsk', 'Username', 'trim|required');
		$this->form_validation->set_rules('nosip', 'Username', 'trim|required');
		$this->form_validation->set_rules('tglsip', 'Username', 'trim|required');
		$this->form_validation->set_rules('noph', 'Username', 'trim|required');
		$this->form_validation->set_rules('tglph', 'Username', 'trim|required');
		$this->form_validation->set_rules('nokontrak', 'Username', 'trim|required');
		$this->form_validation->set_rules('tglkontrak', 'Username', 'trim|required');
		$this->form_validation->set_rules('nosktl', 'Username', 'trim|required');
		$this->form_validation->set_rules('tglsktl', 'Username', 'trim|required');
		$this->form_validation->set_rules('nohm', 'Username', 'trim|required');
		$this->form_validation->set_rules('tglhm', 'Username', 'trim|required');*/
		//$this->form_validation->set_rules('angsuranpertama', 'Username', 'trim|required');
		//$this->form_validation->set_rules('angsuranperbulan', 'Username', 'trim|required');
		//$this->form_validation->set_rules('angsuranterakhir', 'Username', 'trim|required');
		//$this->form_validation->set_rules('lamaangsuran', 'Username', 'trim|required');

		if($this->form_validation->run() === false)
		{
			$data['rumah'] = $this->rumah->getdetailrumahedit($id)[0];
			$data['attribute'] = $this->comp->getattribute();
			$data['content'] = $this->load->view('edit-rumah', $data, true);
			$this->load->view('header', $data);
		}
		else
		{
			$this->rumah->update($id);
			redirect('rumah','refresh');
		}
	}
}
