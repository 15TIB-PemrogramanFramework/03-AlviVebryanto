<?php 
 /**
 * 
 */
 class Daftarmodulmember extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Daftarmodulmember_Model');
 		$this->load->model('Sumbangan_Model');
 		$this->load->model('Anggota_Model');
 		date_default_timezone_set('asia/jakarta');
 	}


 	function index($nama)
 	{	
 		$id_anggota=$this->Anggota_Model->ambil_nama($nama);
 		$cekrelasi=$this->Daftarmodulmember_Model->cekrelasi($id_anggota->id_anggota);
 		if (!empty($cekrelasi)){
 			//print_r($this->buku_model->ambil_data());
 		$data['Daftarmodulmember']=$this->Daftarmodulmember_Model->daftarmodulmember($nama);
 		$this->load->view('Member/Daftarmodulmember_View',$data);	
 	}
 	else{
 		$data['notif']='anda belum meminjam modul, silahkan hubungi admin';
 		$this->load->view('Member/Notifikasi',$data);
 	}

 	}

 	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('Daftarmodulmember/tambah_aksi'),
 			'tanggal_minjam' => set_value('tanggal_minjam'),
 			'tanggal_kembali' => set_value('tanggal_kembali'),
 			'jumlah' => set_value('jumlah'),
 			'id_sumbangan' => $this->Sumbangan_Model->get_option(),
 			'id_anggota' => $this->Anggota_Model->get_option(),
 			'id_minjam' => set_value('id_minjam'),
 			'button' => 'Tambah'

 		);
 		$this->load->view('Member/Daftarmodulmember_Form',$data);
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
 		$this->Daftarmodulmember_Model->tambah_data($data);
 		redirect(site_url('Daftarmodulmember'));
 	}

 	function delete($id_minjam)
 	{
 		$this->Minjam_Model->hapus_data($id_minjam);
 		redirect(site_url('Daftarmodulmember'));
 	}

 	function update($id_minjam)
 	{
 		$buku=$this->Daftarmodulmember_Model->ambil_data_id($id_minjam);
 		$data=array(
 			'aksi' => site_url('Daftarmodulmember/update_aksi'),
 			'tanggal_minjam' => set_value('tanggal_minjam',$buku->tanggal_minjam),
 			'tanggal_kembali' => set_value('tanggal_kembali',$buku->tanggal_kembali),
 			'jumlah' => set_value('jumlah',$buku->jumlah),
 			'id_sumbangan' => $this->Sumbangan_Model->get_option(),
 			'id_anggota' => $this->Anggota_Model->get_option(),
 			'id_minjam' => set_value('id_minjam',$buku->id_minjam),
 			'button' => 'edit'

 		);

 		$this->load->view('Member/Daftarmodulmember_Form',$data);
 		
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

 		$this->Daftarmodulmember_Model->edit_data($id_minjam,$data);
 		redirect(site_url('Minjam'));
 	}

 }

 

 ?>

