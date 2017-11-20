<?php 
 /**
 * 
 */
 class Anggota extends CI_Controller
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
 		$data['Anggota']=$this->Anggota_Model->ambil_data();
 		$this->load->view('Anggota/Anggota_View',$data);

 	}

 	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('Anggota/tambah_aksi'),
 			'nama' => set_value('nama'),
 			'password' => set_value('password'),
 			'tempat_lahir' => set_value('tempat_lahir'),
 			'tanggal_lahir' => set_value('tanggal_lahir'),
 			'jk' => set_value('jk'),
 			'id_anggota' => set_value('id_anggota'),
 			'button' => 'Tambah'

 		);
 		$this->load->view('Anggota/Anggota_Form',$data);
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
 		redirect(site_url('Anggota'));
 	}

 	function delete($id_anggota)
 	{
 		$this->Anggota_Model->hapus_data($id_anggota);
 		redirect(site_url('Anggota'));
 	}

 	function update($id_anggota)
 	{
 		$buku=$this->Anggota_Model->ambil_data_id($id_anggota);
 		$data=array(
 			'aksi' => site_url('Anggota/update_aksi'),
 			'nama' => set_value('nama',$buku->nama),
 			'password' => set_value('password',$buku->password),
 			'tempat_lahir' => set_value('tempat_lahir',$buku->tempat_lahir),
 			'tanggal_lahir' => set_value('tanggal_lahir',$buku->tanggal_lahir),
 			'jk' => set_value('jk',$buku->jk),
 			'id_anggota' => set_value('id_anggota',$buku->id_anggota),
 			'button' => 'edit'

 		);

 		$this->load->view('Anggota/Anggota_Form',$data);
 		
 	}

 	function update_aksi()
 	{
 		$data=array(
 			'nama' => $this->input->post('nama'),
 			'password' => $this->input->post('password'),
 			'tempat_lahir' => $this->input->post('tempat_lahir'),
 			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
 			'jk' => $this->input->post('jk'),
 			
 		);
 		$id_anggota=$this->input->post('id_anggota');

 		$this->Anggota_Model->edit_data($id_anggota,$data);
 		redirect(site_url('Anggota'));
 	}


 }

 ?>