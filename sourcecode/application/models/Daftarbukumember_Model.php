<?php 
/**
* 

*/
class Daftarbukumember_Model extends CI_Model
{

	public $nama_table 	= 'pinjam';
	public $id_pinjam 	= 'id_pinjam';
	public $order		= 'ASC';
	public $nama 		= 'nama';
	
	function __construct()
	{
		parent::__construct();
		
	}

	function ambil_data()
	{
		$this->db->order_by($this->id_pinjam,$this->order);
		return $this->db->get($this->nama_table)->result();
	}


	function daftarbukumember($nama) 
	{
		$this->db->select('pinjam.id_pinjam, anggota.nama, buku.judul, pinjam.tanggal_pinjam, pinjam.tanggal_kembali,pinjam.jumlah');
		$this->db->from('pinjam','anggota','buku');
		$this->db->join('buku', 'pinjam.id_buku=buku.id_buku');
		$this->db->join('anggota',' pinjam.id_anggota=anggota.id_anggota');
		$this->db->where('anggota.nama',$nama);

		$query = $this->db->get();
		if ($query->num_rows() >0) {
			foreach ($query -> result() as $data) {
				

				$daftarbukumember[]=$data;
			}
			return $daftarbukumember;
			}
			else{
				$daftarbukumember = 'Data Kosong';
			return $daftarbukumember;
			}
			}

	function cekrelasi($id_anggota)
	{
		$this->db->where('id_anggota',$id_anggota);
		return $this->db->get($this->nama_table)->result();
	}
			}
 
 

 ?>