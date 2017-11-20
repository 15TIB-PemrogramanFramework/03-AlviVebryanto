<?php 
/**
* 

*/
class Minjam_Model extends CI_Model
{

	public $nama_table 	= 'minjam';
	public $id_minjam 	= 'id_minjam';
	public $order		= 'ASC';
	
	function __construct()
	{
		parent::__construct();
		
	}

	function ambil_data()
	{
		$this->db->order_by($this->id_minjam,$this->order);
		return $this->db->get($this->nama_table)->result();
	}


	function ambil_data_id($id_minjam)
	{
		$this->db->where($this->id_minjam,$id_minjam);
		return $this->db->get($this->nama_table)->row();
	}


	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table,$data);
	
	}

	function hapus_data($id_minjam)
	{
		$this->db->where($this->id_minjam,$id_minjam);
		return $this->db->delete($this->nama_table);
	
	}

	function edit_data($id_minjam,$data)
	{
		$this->db->where($this->id_minjam,$id_minjam);
		return $this->db->update($this->nama_table,$data);
	}

	function minjam() 
	{
		$this->db->select('minjam.id_anggota,minjam.id_minjam, anggota.nama, sumbangan.modul, minjam.tanggal_minjam, minjam.tanggal_kembali,minjam.jumlah, minjam.id_sumbangan');
		$this->db->from('minjam','anggota','sumbangan');
		$this->db->join('sumbangan', 'minjam.id_sumbangan=sumbangan.id_sumbangan');
		$this->db->join('anggota',' minjam.id_anggota=anggota.id_anggota');
		//$this->db->where('anggota.id_anggota',$id_anggota)

		$query = $this->db->get();
		
		if ($query->num_rows()>0) {
			foreach ($query -> result() as $data) {
				

				$minjam[]=$data;
			}
			return $minjam;
			
			}

 }
}

 ?>