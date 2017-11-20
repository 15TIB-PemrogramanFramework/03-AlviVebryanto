<?php 
 /**
 * 
 */
 class Pinjam extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Pinjam_Model');
 		$this->load->model('Buku_Model');
 		$this->load->model('Anggota_Model');
 		date_default_timezone_set('asia/jakarta');
 	}


 	function index()
 	{
 		//print_r($this->buku_model->ambil_data());
 		$data['Pinjam']=$this->Pinjam_Model->pinjam();
 		$this->load->view('Pinjam/Pinjam_View',$data);

 	}

 	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('Pinjam/tambah_aksi'),
 			'tanggal_pinjam' => set_value('tanggal_pinjam'),
 			'tanggal_kembali' => set_value('tanggal_kembali'),
 			'jumlah' => set_value('jumlah'),
 			'id_buku' => $this->Buku_Model->get_option(),
 			'id_anggota' => $this->Anggota_Model->get_option(),
 			'id_pinjam' => set_value('id_pinjam'),
 			'button' => 'Tambah'

 		);
 		$this->load->view('Pinjam/Pinjam_Form',$data);
 	}

 	function tambah_aksi()
 	{
 		$data=array(
 			'id_anggota' => $this->input->post('id_anggota'),
 			'id_buku' => $this->input->post('id_buku'),
 			'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
 			'tanggal_kembali' => $this->input->post('tanggal_kembali'),
 			'jumlah' => $this->input->post('jumlah'),
 		);
 		$this->Pinjam_Model->tambah_data($data);
 		$barang=$this->Buku_Model->ambil_data_id($this->input->post('id_buku'));
 		$stok=$barang->jumlah - $this->input->post('jumlah');

 		$data1=array(
 			'jumlah' => $stok);
 		$this->Buku_Model->edit_data($this->input->post('id_buku'), $data1);

 		redirect(site_url('Pinjam'));
 	}

 	function delete($id_pinjam, $jumlah, $id_buku)
 	{
 		$barang=$this->Buku_Model->ambil_data_id($id_buku);
 		$stok=$barang->jumlah + $jumlah;

 		$data1=array(
 			'jumlah' => $stok);
 		$this->Buku_Model->edit_data($id_buku, $data1);
 		$this->Pinjam_Model->hapus_data($id_pinjam);
 		redirect(site_url('Pinjam'));
 	}

 	function update($id_pinjam,$id_buku,$id_anggota)
 	{
 		$pinjam=$this->Pinjam_Model->ambil_data_id($id_pinjam);
 		$data=array(
 			'aksi' => site_url('Pinjam/update_aksi'),
 			'tanggal_pinjam' => set_value('tanggal_pinjam',$pinjam->tanggal_pinjam),
 			'tanggal_kembali' => set_value('tanggal_kembali',$pinjam->tanggal_kembali),
 			'jumlah' => set_value('jumlah',$pinjam->jumlah),
 			'id_buku' => $this->Buku_Model->get_option(),
 			'id_anggota' => $this->Anggota_Model->get_option(),
 			'id_pinjam' => set_value('id_pinjam',$pinjam->id_pinjam),
 			'nama_buku' => $id_buku,
 			'nama_anggota' => $id_anggota,
 			'button' => 'edit'

 		);

 		$this->load->view('Pinjam/Pinjam_Form',$data);
 		
 	}

 	function update_aksi()
 	{
 		$data=array(
 			'id_buku' => $this->input->post('id_buku'),
 			'id_anggota' => $this->input->post('id_anggota'),
 			'tanggal_pinjam' => $this->input->post('tanggal_pinjam'),
 			'tanggal_kembali' => $this->input->post('tanggal_kembali'),
 			'jumlah' => $this->input->post('jumlah'),
 		);
 		$id_pinjam=$this->input->post('id_pinjam');

 		$this->Pinjam_Model->edit_data($id_pinjam,$data);
 		redirect(site_url('Pinjam'));
 	}

 }

 

 ?>