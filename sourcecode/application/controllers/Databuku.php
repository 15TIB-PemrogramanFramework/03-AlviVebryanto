<?php 
 /**
 * 
 */
 class Databuku extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('Databuku_Model');
 		date_default_timezone_set('asia/jakarta');
 	}


 	function index()
 	{
 		//print_r($this->buku_model->ambil_data());
 		$data['Databuku']=$this->Databuku_Model->ambil_data();
 		$this->load->view('Member/Databuku_View',$data);

 }
}

 ?>