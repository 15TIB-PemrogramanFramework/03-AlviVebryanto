<?php 
 /**
 * 
 */
 class Datamodul extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Datamodul_Model');
 		$this->load->model('Anggota_Model');
 		date_default_timezone_set('asia/jakarta');
 	}


 	function index()
 	{
 		//print_r($this->buku_model->ambil_data());
 		$data['Datamodul']=$this->Datamodul_Model->datamodul();
 		$this->load->view('Member/Datamodul_View',$data);

 	}

 	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('Datamodul/tambah_aksi'),
 			'modul' => set_value('modul'),
 			'tanggal_sumbangan' => set_value('tanggal_sumbangan'),
 			'jumlah_sumbangan' => set_value('jumlah_sumbangan'),
 			'id_anggota' => $this->Anggota_Model->get_option(),
 			'id_sumbangan' => set_value('id_sumbangan'),
 			'button' => 'Tambah'

 		);
 		$this->load->view('Member/Datamodul_Form',$data);
 	}

 	function tambah_aksi()
 	{
 		$data=array(
 			'id_anggota' => $this->input->post('id_anggota'),
 			'modul' => $this->input->post('modul'),
 			'tanggal_sumbangan' => $this->input->post('tanggal_sumbangan'),
 			'jumlah_sumbangan' => $this->input->post('jumlah_sumbangan'),
 		);
 		$this->Datamodul_Model->tambah_data($data);
 		redirect(site_url('Datamodul'));
 	}

 	function delete($id_sumbangan)
 	{
 		$this->Datamodul_Model->hapus_data($id_sumbangan);
 		redirect(site_url('Datamodul'));
 	}

 	function update($id_sumbangan)
 	{
 		$buku=$this->Datamodul_Model->ambil_data_id($id_sumbangan);
 		$data=array(
 			'aksi' => site_url('Datamodul/update_aksi'),
 			'modul' => set_value('modul',$buku->modul),
 			'tanggal_sumbangan' => set_value('tanggal_sumbangan',$buku->tanggal_sumbangan),
 			'jumlah_sumbangan' => set_value('jumlah_sumbangan',$buku->jumlah_sumbangan),
 			'id_anggota' => $this->Anggota_Model->get_option(),
 			'id_sumbangan' => set_value('id_sumbangan',$buku->id_sumbangan),
 			'button' => 'edit'

 		);

 		$this->load->view('Member/Datamodul_Form',$data);
 		
 	}

 	function update_aksi()
 	{
 		$data=array(
 			'id_anggota' => $this->input->post('id_anggota'),
 			'modul' => $this->input->post('modul'),
 			'tanggal_sumbangan' => $this->input->post('tanggal_sumbangan'),
 			'jumlah_sumbangan' => $this->input->post('jumlah_sumbangan'),
 		);
 		$id_sumbangan=$this->input->post('id_sumbangan');

 		$this->Datamodul_Model->edit_data($id_sumbangan,$data);
 		redirect(site_url('Datamodul'));
 	}

 }

 

 ?>