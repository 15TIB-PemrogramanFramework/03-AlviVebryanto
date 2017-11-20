<?php 
 /**
 * 
 */
 class Daftarbukumember extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Daftarbukumember_Model');
 		$this->load->model('Anggota_Model');
 		date_default_timezone_set('asia/jakarta');
 	}


 	function index($nama)
 	{
 		$id_anggota=$this->Anggota_Model->ambil_nama($nama);
 		$cekrelasi=$this->Daftarbukumember_Model->cekrelasi($id_anggota->id_anggota);
 		if (!empty($cekrelasi)){
 			//print_r($this->buku_model->ambil_data());
 		$data['Daftarbukumember']=$this->Daftarbukumember_Model->daftarbukumember($nama);
 		$this->load->view('Member/Daftarbukumember_View',$data);	
 	}
 	else{
 		$data['notif']='anda belum meminjam buku, silahkan hubungi admin';
 		$this->load->view('Member/Notifikasi',$data);
 	}

 }
}
 

 ?>