<?php 
 /**
 * 
 */
 class Buku extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Buku_Model');
 		date_default_timezone_set('asia/jakarta');
 	}


 	function index()
 	{
 		//print_r($this->buku_model->ambil_data());
 		$data['Buku']=$this->Buku_Model->ambil_data();
 		$this->load->view('Buku/Buku_View',$data);

 	}

 	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('Buku/tambah_aksi'),
 			'judul' => set_value('judul'),
 			'pengarang' => set_value('pengarang'),
 			'penerbit' => set_value('penerbit'),
 			'jumlah' => set_value('jumlah'),
 			'id_buku' => set_value('id_buku'),
 			'button' => 'Tambah'

 		);
 		$this->load->view('Buku/Buku_Form',$data);
 	}

 	function tambah_aksi()
 	{
 		$data=array(
 			'judul' => $this->input->post('judul'),
 			'pengarang' => $this->input->post('pengarang'),
 			'penerbit' => $this->input->post('penerbit'),
 			'jumlah' => $this->input->post('jumlah'),
 		);
 		$this->Buku_Model->tambah_data($data);
 		redirect(site_url('Buku'));
 	}

 	function delete($id_buku)
 	{
 		$this->Buku_Model->hapus_data($id_buku);
 		redirect(site_url('Buku'));
 	}

 	function update($id_buku)
 	{
 		$buku=$this->Buku_Model->ambil_data_id($id_buku);
 		$data=array(
 			'aksi' => site_url('Buku/update_aksi'),
 			'judul' => set_value('judul',$buku->judul),
 			'pengarang' => set_value('pengarang',$buku->pengarang),
 			'penerbit' => set_value('penerbit',$buku->penerbit),
 			'jumlah' => set_value('jumlah',$buku->jumlah),
 			'id_buku' => set_value('id_buku',$buku->id_buku),
 			'button' => 'edit'

 		);

 		$this->load->view('Buku/Buku_Form',$data);
 		
 	}

 	function update_aksi()
 	{
 		$data=array(
 			'judul' => $this->input->post('judul'),
 			'pengarang' => $this->input->post('pengarang'),
 			'penerbit' => $this->input->post('penerbit'),
 			'jumlah' => $this->input->post('jumlah'),
 		);
 		$id_buku=$this->input->post('id_buku');

 		$this->Buku_Model->edit_data($id_buku,$data);
 		redirect(site_url('Buku'));
 	}


 }

 ?>