<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rumah_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Web
	 * 
	 * untuk mengambil data rumah negara
	 */
	public function getrumah()
	{
		$query = $this->db->query('select * from view_rumah');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function getdetailrumah($id)
	{
		$query = $this->db->query('select * from view_rumah inner join t_arsip on view_rumah.id=t_arsip.id_rumah where view_rumah.id='.$id);

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

	public function getdetailrumahedit($id)
	{
		$query = $this->db->query('select * from view_rumah_edit where id='.$id);

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}

  	/**
	 * Web
	 * 
	 * untuk menginput rumahnegara
	 */
	public function save()
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'hdno' => $this -> input -> post('hdno'),
		  'alamat' => $this -> input -> post('alamat'),
		  'nama' => $this -> input -> post('nama'),
		  'lembaga' => $this -> input -> post('lembaga'),
		  'jml_lantai' => $this -> input -> post('lantai'),
		  'konstruksi' => $this -> input -> post('konstruksi'),
		  'tipe' => $this -> input -> post('tipe'),
		  'tahun_bangunan' => $this -> input -> post('tahunbangunan'),
		  'sumber_bangunan' => $this -> input -> post('sumberbangunan'),
		  'harga_bangunan' => $this -> input -> post('hargabangunan'),
		  'luas_bangunan' => $this -> input -> post('luasbangunan'),
		  'tahun_tanah' => $this -> input -> post('tahuntanah'),
		  'sumber_tanah' => $this -> input -> post('sumbertanah'),
		  'harga_tanah' => $this -> input -> post('hargatanah'),
		  'luas_tanah' => $this -> input -> post('luastanah'),
		  'status_rumah' => 1
		  );

		//insert ke database
		$this->db->set('tgl_input', 'now()', false);
		$this->db->insert('t_rumah', $data);
		
		//ambil id dari produk yang tadi diinsertkan (id autoincrement)
		$lastid = $this->db->insert_id();

		$data = array(
		 	'id_rumah' => $lastid,
			'no_sk' => $this -> input -> post('nosk'),
			'tgl_sk' => date('Y/m/d', strtotime($this -> input -> post('tglsk'))),
			'lokasi_sk' => $this->getlokasi(
				$this -> input -> post('berkasruangansk'),
				$this -> input -> post('berkasrollpactsk'),
				$this -> input -> post('berkaslemarisk'),
				$this -> input -> post('berkasraksk'),
				$this -> input -> post('berkasboxsk')
				),
			'status_sk' => $this -> input -> post('statussk'),
			'no_sip' => $this -> input -> post('nosip'),
			'tgl_sip' => date('Y/m/d', strtotime($this -> input -> post('tglsip'))),
			'lokasi_sip' => $this->getlokasi(
				$this -> input -> post('berkasruangansip'),
				$this -> input -> post('berkasrollpactsip'),
				$this -> input -> post('berkaslemarisip'),
				$this -> input -> post('berkasraksip'),
				$this -> input -> post('berkasboxsip')
				),
			'status_sip' => $this -> input -> post('statussip'),
			'no_pengalihanhak' => $this -> input -> post('noph'),
			'tgl_pengalihanhak' => date('Y/m/d', strtotime($this -> input -> post('tglph'))),
			'lokasi_pengalihanhak' => $this->getlokasi(
				$this -> input -> post('berkasruanganph'),
				$this -> input -> post('berkasrollpactph'),
				$this -> input -> post('berkaslemariph'),
				$this -> input -> post('berkasrakph'),
				$this -> input -> post('berkasboxph')
				),
			'status_pengalihanhak' => $this -> input -> post('statusph'),
			'no_kontrak' => $this -> input -> post('nokontrak'),
			'tgl_kontrak' => date('Y/m/d', strtotime($this -> input -> post('tglkontrak'))),
			'lokasi_kontrak' =>$this->getlokasi(
				$this -> input -> post('berkasruangankontrak'),
				$this -> input -> post('berkasrollpactkontrak'),
				$this -> input -> post('berkaslemarikontrak'),
				$this -> input -> post('berkasrakkontrak'),
				$this -> input -> post('berkasboxkontrak')
				),
			'status_kontrak' => $this -> input -> post('statuskontrak'),
			'no_sktl' => $this -> input -> post('nosktl'),
			'tgl_sktl' => date('Y/m/d', strtotime($this -> input -> post('tglsktl'))),
			'lokasi_sktl' => $this->getlokasi(
				$this -> input -> post('berkasruangansktl'),
				$this -> input -> post('berkasrollpactsktl'),
				$this -> input -> post('berkaslemarisktl'),
				$this -> input -> post('berkasraksktl'),
				$this -> input -> post('berkasboxsktl')
				),
			'status_sktl' => $this -> input -> post('statussktl'),
			'no_hak' => $this -> input -> post('nohm'),
			'tgl_hak' => date('Y/m/d', strtotime($this -> input -> post('tglhm'))),
			'lokasi_hak' => $this->getlokasi(
				$this -> input -> post('berkasruanganhm'),
				$this -> input -> post('berkasrollpacthm'),
				$this -> input -> post('berkaslemarihm'),
				$this -> input -> post('berkasrakhm'),
				$this -> input -> post('berkasboxhm')
				),
			'status_hak' => $this -> input -> post('statushm')
		  );

		//insert ke database
		$this->db->insert('t_arsip', $data);
		
		return true;
	}

	function getlokasi($ruangan, $rollpact, $lemari, $rak, $box)
	{
		return $ruangan.'.'.$rollpact.'.'.$lemari.'.'.$rak.'.'.$box;
	}

	/**
	 * Web
	 * 
	 * untuk menginput rumahnegara
	 */
	public function update($id)
	{
		//ambil data admin yang menginputkan data
		/*$data_session = $this->session->userdata('session');
		$id_user = $data_session['id_user'];*/
		
		$data = array(
		  'hdno' => $this -> input -> post('hdno'),
		  'alamat' => $this -> input -> post('alamat'),
		  'nama' => $this -> input -> post('nama'),
		  'lembaga' => $this -> input -> post('lembaga'),
		  'jml_lantai' => $this -> input -> post('lantai'),
		  'konstruksi' => $this -> input -> post('konstruksi'),
		  'tipe' => $this -> input -> post('tipe'),
		  'tahun_bangunan' => $this -> input -> post('tahunbangunan'),
		  'sumber_bangunan' => $this -> input -> post('sumberbangunan'),
		  'harga_bangunan' => $this -> input -> post('hargabangunan'),
		  'luas_bangunan' => $this -> input -> post('luasbangunan'),
		  'tahun_tanah' => $this -> input -> post('tahuntanah'),
		  'sumber_tanah' => $this -> input -> post('sumbertanah'),
		  'harga_tanah' => $this -> input -> post('hargatanah'),
		  'luas_tanah' => $this -> input -> post('luastanah')
		  );

		//insert ke database
		$this->db->where('id', $id);
		$this->db->update('t_rumah', $data);
		
		$data = array(
		 	'no_sk' => $this -> input -> post('nosk'),
			'tgl_sk' => date('Y/m/d', strtotime($this -> input -> post('tglsk'))),
			'lokasi_sk' => $this->getlokasi(
				$this -> input -> post('berkasruangansk'),
				$this -> input -> post('berkasrollpactsk'),
				$this -> input -> post('berkaslemarisk'),
				$this -> input -> post('berkasraksk'),
				$this -> input -> post('berkasboxsk')
				),
			'status_sk' => $this -> input -> post('statussk'),
			'no_sip' => $this -> input -> post('nosip'),
			'tgl_sip' => date('Y/m/d', strtotime($this -> input -> post('tglsip'))),
			'lokasi_sip' => $this->getlokasi(
				$this -> input -> post('berkasruangansip'),
				$this -> input -> post('berkasrollpactsip'),
				$this -> input -> post('berkaslemarisip'),
				$this -> input -> post('berkasraksip'),
				$this -> input -> post('berkasboxsip')
				),
			'status_sip' => $this -> input -> post('statussip'),
			'no_pengalihanhak' => $this -> input -> post('noph'),
			'tgl_pengalihanhak' => date('Y/m/d', strtotime($this -> input -> post('tglph'))),
			'lokasi_pengalihanhak' => $this->getlokasi(
				$this -> input -> post('berkasruanganph'),
				$this -> input -> post('berkasrollpactph'),
				$this -> input -> post('berkaslemariph'),
				$this -> input -> post('berkasrakph'),
				$this -> input -> post('berkasboxph')
				),
			'status_pengalihanhak' => $this -> input -> post('statusph'),
			'no_kontrak' => $this -> input -> post('nokontrak'),
			'tgl_kontrak' => date('Y/m/d', strtotime($this -> input -> post('tglkontrak'))),
			'lokasi_kontrak' =>$this->getlokasi(
				$this -> input -> post('berkasruangankontrak'),
				$this -> input -> post('berkasrollpactkontrak'),
				$this -> input -> post('berkaslemarikontrak'),
				$this -> input -> post('berkasrakkontrak'),
				$this -> input -> post('berkasboxkontrak')
				),
			'status_kontrak' => $this -> input -> post('statuskontrak'),
			'no_sktl' => $this -> input -> post('nosktl'),
			'tgl_sktl' => date('Y/m/d', strtotime($this -> input -> post('tglsktl'))),
			'lokasi_sktl' => $this->getlokasi(
				$this -> input -> post('berkasruangansktl'),
				$this -> input -> post('berkasrollpactsktl'),
				$this -> input -> post('berkaslemarisktl'),
				$this -> input -> post('berkasraksktl'),
				$this -> input -> post('berkasboxsktl')
				),
			'status_sktl' => $this -> input -> post('statussktl'),
			'no_hak' => $this -> input -> post('nohm'),
			'tgl_hak' => date('Y/m/d', strtotime($this -> input -> post('tglhm'))),
			'lokasi_hak' => $this->getlokasi(
				$this -> input -> post('berkasruanganhm'),
				$this -> input -> post('berkasrollpacthm'),
				$this -> input -> post('berkaslemarihm'),
				$this -> input -> post('berkasrakhm'),
				$this -> input -> post('berkasboxhm')
				),
			'status_hak' => $this -> input -> post('statushm')
		  );

		//insert ke database
		$this->db->where('id_rumah', $id);
		$this->db->update('t_arsip', $data);
		
		return true;
	}  	
}