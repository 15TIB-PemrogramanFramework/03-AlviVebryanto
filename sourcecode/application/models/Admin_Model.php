<?php

class Admin_Model extends CI_Model
{

	public $nama_table 	= 'admin';
	public $username_admin	= 'username_admin';
	public $order		= 'ASC';
	
	function __construct()
	{
		parent::__construct();
		
	}

	function cek_login($username_admin,$password)
	{
		$this->db->where('username_admin',$username_admin);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->username_admin,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	function ambil_data_id($username_admin)
	{
		$this->db->where($this->username_admin,$username_admin);
		return $this->db->get($this->nama_table)->row();
	}


	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table,$data);
	
	}

	
}
 ?>