<?php 
/**
* 

*/
class Anggota_Model extends CI_Model
{

	public $nama_table 	= 'anggota';
	public $id_anggota 	= 'id_anggota';
	public $order		= 'ASC';
	
	function __construct()
	{
		parent::__construct();
		
	}

	function login($nama,$password)
	{
		$this->db->where('nama',$nama);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table)->row();
	}


	function ambil_data()
	{
		$this->db->order_by($this->id_anggota,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	function ambil_nama($nama)
	{
		$this->db->where('nama',$nama);
		return $this->db->get($this->nama_table)->row();
	}

	function get_option() {
		$this->db->select('*');
		$this->db->from('anggota');
		$query = $this->db->get();
		return $query->result();
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

	function hapus_data($id_anggota)
	{
		$this->db->where($this->id_anggota,$id_anggota);
		return $this->db->delete($this->nama_table);
	
	}

	function edit_data($id_anggota,$data)
	{
		$this->db->where($this->id_anggota,$id_anggota);
		return $this->db->update($this->nama_table,$data);
	}

	
}
 ?>