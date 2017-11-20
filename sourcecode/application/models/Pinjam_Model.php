<?php 
/**
* 

*/
class Pinjam_Model extends CI_Model
{

	public $nama_table 	= 'pinjam';
	public $id_pinjam 	= 'id_pinjam';
	public $order		= 'ASC';
	
	function __construct()
	{
		parent::__construct();
		
	}

	function ambil_data()
	{
		$this->db->order_by($this->id_pinjam,$this->order);
		return $this->db->get($this->nama_table)->result();
	}


	function ambil_data_id($id_pinjam)
	{
		$this->db->where($this->id_pinjam,$id_pinjam);
		return $this->db->get($this->nama_table)->row();
	}


	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table,$data);
	
	}

	function hapus_data($id_pinjam)
	{
		$this->db->where($this->id_pinjam,$id_pinjam);
		return $this->db->delete($this->nama_table);
	
	}

	function edit_data($id_pinjam,$data)
	{
		$this->db->where($this->id_pinjam,$id_pinjam);
		return $this->db->update($this->nama_table,$data);
	}

	function pinjam() 
	{
		$this->db->select('pinjam.id_anggota,pinjam.id_pinjam, anggota.nama, buku.judul, pinjam.tanggal_pinjam, pinjam.tanggal_kembali,pinjam.jumlah,pinjam.id_buku');
		$this->db->from('pinjam','anggota','buku');
		$this->db->join('buku', 'pinjam.id_buku=buku.id_buku');
		$this->db->join('anggota',' pinjam.id_anggota=anggota.id_anggota');
		//$this->db->where('anggota.id_anggota',$id_anggota)

		$query = $this->db->get();
		if ($query->num_rows() >0) {
			foreach ($query -> result() as $data) {
				

				$pinjam[]=$data;
			}
			return $pinjam;
			}
			}
 }

 ?>