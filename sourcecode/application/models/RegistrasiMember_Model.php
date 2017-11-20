<?php 
/**
* 

*/
class RegistrasiMember_Model extends CI_Model
{

	public $nama_table 	= 'anggota';
	public $id_anggota 	= 'id_anggota';
	public $order		= 'ASC';
	
	function __construct()
	{
		parent::__construct();
		
	}

	function ambil_data()
	{
		$this->db->order_by($this->id_anggota,$this->order);
		return $this->db->get($this->nama_table)->result();
	}


	function ambil_data_id($id_anggota)
	{
		$this->db->where($this->id_anggota,$id_anggota);
		return $this->db->get($this->nama_table)->row();
	}


	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table,$data);
	
	}


	
}
 ?>