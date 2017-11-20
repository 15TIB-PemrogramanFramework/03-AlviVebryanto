<?php 
/**
* 

*/
class Datamodul_Model extends CI_Model
{

	public $nama_table 	= 'sumbangan';
	public $id_sumbangan	= 'id_sumbangan';
	public $order		= 'ASC';
	
	function __construct()
	{
		parent::__construct();
		
	}

	function ambil_data()
	{
		$this->db->order_by($this->id_sumbangan,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	function get_option() {
		$this->db->select('*');
		$this->db->from('sumbangan');
		$query = $this->db->get();
		return $query->result();
	}


	function ambil_data_id($id_sumbangan)
	{
		$this->db->where($this->id_sumbangan,$id_sumbangan);
		return $this->db->get($this->nama_table)->row();
	}


	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table,$data);
	
	}

	function hapus_data($id_sumbangan)
	{
		$this->db->where($this->id_sumbangan,$id_sumbangan);
		return $this->db->delete($this->nama_table);
	
	}

	function edit_data($id_sumbangan,$data)
	{
		$this->db->where($this->id_sumbangan,$id_sumbangan);
		return $this->db->update($this->nama_table,$data);
	}

	function datamodul() 
	{
		$this->db->select('sumbangan.id_sumbangan, anggota.nama, sumbangan.modul, sumbangan.tanggal_sumbangan, sumbangan.jumlah_sumbangan');
		$this->db->from('sumbangan','anggota');
		$this->db->join('anggota',' sumbangan.id_anggota=anggota.id_anggota');
		//$this->db->where('anggota.id_anggota',$id_anggota)

		$query = $this->db->get();
		if ($query->num_rows() >0) {
			foreach ($query -> result() as $data) {
				

				$datamodul[]=$data;
			}
			return $datamodul;
			}
			}
 }

 ?>