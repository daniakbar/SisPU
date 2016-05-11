<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	/**
	 * Web
	 * 
	 * untuk check login dari database
	 */
	public function login($user, $pass)
  	{
		$this -> db -> select('id, username, password, status');
		$this -> db -> from('m_user');
		$this -> db -> where('username', $user);
		$this -> db -> where('status <> 0');
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
  	}
}