<?php 
 /**
 * 
 */
 class Registrasi extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Admin_Model');
 		date_default_timezone_set('asia/jakarta');
 	}

 	function index()
 	{
 		//print_r($this->buku_model->ambil_data());
 		$data['Registrasi']=$this->Admin_Model->ambil_data();

 	}

 	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('Registrasi/tambah_aksi'),
 			'password' => set_value('password'),
 			'username_admin' => set_value('username_admin'),
 			'button' => 'Tambah'

 		);
 		$this->load->view('Admin/Register',$data);
 	}

 	function tambah_aksi()
 	{
 		$data=array(
 			'username_admin' => $this->input->post('username_admin'),
 			'password' => $this->input->post('password'),
 		);
 		$this->Admin_Model->tambah_data($data);
 		redirect(site_url('Login'));
 	}

 }

 ?>