<?php 
/**
* 

*/
class Buku_Model extends CI_Model
{

	public $nama_table 	= 'buku';
	public $id_buku 	= 'id_buku';
	public $order		= 'ASC';
	
	function __construct()
	{
		parent::__construct();
		
	}

	function ambil_data()
	{
		$this->db->order_by($this->id_buku,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	function get_option() {
		$this->db->select('*');
		$this->db->from('buku');
		$query = $this->db->get();
		return $query->result();
	}

	function ambil_data_id($id_buku)
	{
		$this->db->where($this->id_buku,$id_buku);
		return $this->db->get($this->nama_table)->row();
	}


	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table,$data);
	
	}

	function hapus_data($id_buku)
	{
		$this->db->where($this->id_buku,$id_buku);
		return $this->db->delete($this->nama_table);
	
	}

	function edit_data($id_buku,$data)
	{
		$this->db->where($this->id_buku,$id_buku);
		return $this->db->update($this->nama_table,$data);
	}

	
}
 ?>