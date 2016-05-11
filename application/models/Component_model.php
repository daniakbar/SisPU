<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Component_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Web
	 * 
	 * untuk mengambil data rumah negara
	 */
	
	/**
	 * Web
	 * 
	 * untuk mengambil attribute form input rumah negara
	 */

	//lembaga
	public function getlembaga()
	{
		$query = $this->db->query('select * from m_lembaga where status <> 0');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function savelembaga()
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'lembaga' => $this -> input -> post('lembaga'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->insert('m_lembaga', $data);
		
		return true;
	}

	public function updatelembaga($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'lembaga' => $this -> input -> post('lembaga'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->where('id', $id);
		$this->db->update('m_lembaga', $data);
		
		return true;
	}

	public function deletelembaga($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'status' => 0
		  );

		//insert ke database
		$this->db->where('id', $id);
		$this->db->update('m_lembaga', $data);
		
		return true;
	}
	//end of lembaga

	//tipe
	public function gettipe()
	{
		$query = $this->db->query('select * from m_tipe where status <> 0');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function savetipe()
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'tipe' => $this -> input -> post('tipe'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->insert('m_tipe', $data);
		
		return true;
	}

	public function updatetipe($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'tipe' => $this -> input -> post('tipe'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->where('id', $id);
		$this->db->update('m_tipe', $data);
		
		return true;
	}

	public function deletetipe($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'status' => 0
		  );

		//insert ke database
		$this->db->where('id', $id);
		$this->db->update('m_tipe', $data);
		
		return true;
	}
	//end of tipe

	//konstruksi
	public function getkonstruksi()
	{
		$query = $this->db->query('select * from m_konstruksi where status <> 0');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function savekonstruksi()
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'konstruksi' => $this -> input -> post('konstruksi'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->insert('m_konstruksi', $data);
		
		return true;
	}

	public function updatekonstruksi($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'konstruksi' => $this -> input -> post('konstruksi'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->where('id', $id);
		$this->db->update('m_konstruksi', $data);
		
		return true;
	}

	public function deletekonstruksi($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'status' => 0
		  );

		//insert ke database
		$this->db->where('id', $id);
		$this->db->update('m_konstruksi', $data);
		
		return true;
	}
	//end of konstruksi

	/**
	 * lokasi arsip
	 */

	//ruangan
	public function getruangan()
	{
		$query = $this->db->query('select * from m_arsip_ruangan where status <> 0');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function saveruangan()
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'ruangan' => $this -> input -> post('ruangan'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->insert('m_arsip_ruangan', $data);
		
		return true;
	}

	public function updateruangan($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'ruangan' => $this -> input -> post('ruangan'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->where('ruangan', $id);
		$this->db->update('m_arsip_ruangan', $data);
		
		return true;
	}

	public function deleteruangan($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'status' => 0
		  );

		//insert ke database
		$this->db->where('ruangan', $id);
		$this->db->update('m_arsip_ruangan', $data);
		
		return true;
	}
	//end of ruangan

	//rollpact
	public function getrollpact()
	{
		$query = $this->db->query('select * from m_arsip_rollpact where status <> 0');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function saverollpact()
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'rollpact' => $this -> input -> post('rollpact'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->insert('m_arsip_rollpact', $data);
		
		return true;
	}

	public function updaterollpact($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'rollpact' => $this -> input -> post('rollpact'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->where('rollpact', $id);
		$this->db->update('m_arsip_rollpact', $data);
		
		return true;
	}

	public function deleterollpact($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'status' => 0
		  );

		//insert ke database
		$this->db->where('rollpact', $id);
		$this->db->update('m_arsip_rollpact', $data);
		
		return true;
	}
	//end of rollpact

	//lemari
	public function getlemari()
	{
		$query = $this->db->query('select * from m_arsip_lemari where status <> 0');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function savelemari()
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'lemari' => $this -> input -> post('lemari'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->insert('m_arsip_lemari', $data);
		
		return true;
	}

	public function updatelemari($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'lemari' => $this -> input -> post('lemari'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->where('lemari', $id);
		$this->db->update('m_arsip_lemari', $data);
		
		return true;
	}

	public function deletelemari($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'status' => 0
		  );

		//insert ke database
		$this->db->where('lemari', $id);
		$this->db->update('m_arsip_lemari', $data);
		
		return true;
	}
	//end of lemari

	//rak
	public function getrak()
	{
		$query = $this->db->query('select * from m_arsip_rak where status <> 0');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function saverak()
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'rak' => $this -> input -> post('rak'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->insert('m_arsip_rak', $data);
		
		return true;
	}

	public function updaterak($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'rak' => $this -> input -> post('rak'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->where('rak', $id);
		$this->db->update('m_arsip_rak', $data);
		
		return true;
	}

	public function deleterak($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'status' => 0
		  );

		//insert ke database
		$this->db->where('rak', $id);
		$this->db->update('m_arsip_rak', $data);
		
		return true;
	}
	//end of rak

	//box
	public function getbox()
	{
		$query = $this->db->query('select * from m_arsip_box where status <> 0');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function savebox()
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'box' => $this -> input -> post('box'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->insert('m_arsip_box', $data);
		
		return true;
	}

	public function updatebox($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'box' => $this -> input -> post('box'),
		  'status' => 1
		  );

		//insert ke database
		$this->db->where('box', $id);
		$this->db->update('m_arsip_box', $data);
		
		return true;
	}

	public function deletebox($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'status' => 0
		  );

		//insert ke database
		$this->db->where('box', $id);
		$this->db->update('m_arsip_box', $data);
		
		return true;
	}
	//end of box
	
	public function getattribute()
  	{
  		$data = array();
		$data['lembaga'] = $this->getlembaga();
		$data['tipe'] = $this->gettipe();
		$data['konstruksi'] = $this->getkonstruksi();
		$data['ruangan'] = $this->getruangan();
		$data['rollpact'] = $this->getrollpact();
		$data['lemari'] = $this->getlemari();
		$data['rak'] = $this->getrak();
		$data['box'] = $this->getbox();

		return $data;
  	}  	
}