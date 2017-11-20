<?php 
/**
* 

*/
class Databuku_Model extends CI_Model
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

	
}
 ?>