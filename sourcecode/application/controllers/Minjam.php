<?php 
 /**
 * 
 */
 class Minjam extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Minjam_Model');
 		$this->load->model('Sumbangan_Model');
 		$this->load->model('Anggota_Model');
 		date_default_timezone_set('asia/jakarta');
 	}


 	function index()
 	{
 		//print_r($this->buku_model->ambil_data());
 		$data['Minjam']=$this->Minjam_Model->minjam();
 		$this->load->view('Minjam/Minjam_View',$data);

 	}

 	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('Minjam/tambah_aksi'),
 			'tanggal_minjam' => set_value('tanggal_minjam'),
 			'tanggal_kembali' => set_value('tanggal_kembali'),
 			'jumlah' => set_value('jumlah'),
 			'id_sumbangan' => $this->Sumbangan_Model->get_option(),
 			'id_anggota' => $this->Anggota_Model->get_option(),
 			'id_minjam' => set_value('id_minjam'),
 			'button' => 'Tambah'

 		);
 		$this->load->view('Minjam/Minjam_Form',$data);
 	}

 	function tambah_aksi()
 	{
 		$data=array(
 			'id_anggota' => $this->input->post('id_anggota'),
 			'id_sumbangan' => $this->input->post('id_sumbangan'),
 			'tanggal_minjam' => $this->input->post('tanggal_minjam'),
 			'tanggal_kembali' => $this->input->post('tanggal_kembali'),
 			'jumlah' => $this->input->post('jumlah'),
 		);
 		$this->Minjam_Model->tambah_data($data);
 		$barang=$this->Sumbangan_Model->ambil_data_id($this->input->post('id_sumbangan'));
 		$stok=$barang->jumlah_sumbangan - $this->input->post('jumlah');

 		$data1=array(
 			'jumlah_sumbangan' => $stok);
 		$this->Sumbangan_Model->edit_data($this->input->post('id_sumbangan'), $data1);

 		redirect(site_url('Minjam'));
 	}

 	function delete($id_minjam, $jumlah, $id_sumbangan)
 	{
 		
 		$barang=$this->Sumbangan_Model->ambil_data_id($id_sumbangan);
 		$stok=$barang->jumlah_sumbangan + $jumlah;

 		$data1=array(
 			'jumlah_sumbangan' => $stok);
 		$this->Sumbangan_Model->edit_data($id_sumbangan, $data1);
 		$this->Minjam_Model->hapus_data($id_minjam);
 		redirect(site_url('Minjam'));
 	}

 	function update($id_minjam, $id_sumbangan,$id_anggota)
 	{
 		$buku=$this->Minjam_Model->ambil_data_id($id_minjam);
 		$data=array(
 			'aksi' => site_url('Minjam/update_aksi'),
 			'tanggal_minjam' => set_value('tanggal_minjam',$buku->tanggal_minjam),
 			'tanggal_kembali' => set_value('tanggal_kembali',$buku->tanggal_kembali),
 			'jumlah' => set_value('jumlah',$buku->jumlah),
 			'id_sumbangan' => $this->Sumbangan_Model->get_option(),
 			'id_anggota' => $this->Anggota_Model->get_option(),
 			'id_minjam' => set_value('id_minjam',$buku->id_minjam),
 			'nama_modul' => $id_sumbangan,
 			'nama_anggota' => $id_anggota,
 			'button' => 'edit'

 		);

 		$this->load->view('Minjam/Minjam_Form',$data);
 		
 	}

 	function update_aksi()
 	{
 		$data=array(
 			'id_sumbangan' => $this->input->post('id_sumbangan'),
 			'id_anggota' => $this->input->post('id_anggota'),
 			'tanggal_minjam' => $this->input->post('tanggal_minjam'),
 			'tanggal_kembali' => $this->input->post('tanggal_kembali'),
 			'jumlah' => $this->input->post('jumlah'),
 		);
 		$id_minjam=$this->input->post('id_minjam');

 		$this->Minjam_Model->edit_data($id_minjam,$data);
 		redirect(site_url('Minjam'));
 	}

 }

 

 ?>