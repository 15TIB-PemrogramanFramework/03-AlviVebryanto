<?php 
 /**
 * 
 */
 class Registrasi_Member extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Anggota_Model');
 		date_default_timezone_set('asia/jakarta');
 	}

 	function index()
 	{
 		//print_r($this->buku_model->ambil_data());
 		$data['Registrasi_Member']=$this->Anggota_Model->ambil_data();

 	}

 	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('Registrasi_Member/tambah_aksi'),
 			'nama' => set_value('nama'),
 			'password' => set_value('password'),
 			'tempat_lahir' => set_value('tempat_lahir'),
 			'tanggal_lahir' => set_value('tanggal_lahir'),
 			'jk' => set_value('jk'),
 			'id_anggota' => set_value('id_anggota'),
 			'button' => 'Tambah'

 		);
 		$this->load->view('Member/Register',$data);
 	}

 	function tambah_aksi()
 	{
 		$data=array(
 			'nama' => $this->input->post('nama'),
 			'password' => $this->input->post('password'),
 			'tempat_lahir' => $this->input->post('tempat_lahir'),
 			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
 			'jk' => $this->input->post('jk'),
 		);
 		$this->Anggota_Model->tambah_data($data);
 		redirect(site_url('Login_Member'));
 	}


 }

 ?>