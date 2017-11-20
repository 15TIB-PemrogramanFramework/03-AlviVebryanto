<?php 

 if ( ! defined("BASEPATH")) exit("No direct script access allowed");

	function generate_sidemenu()
	{
		
		return '<li>
		<a href="'.site_url('home').'"><i class="fa fa-home"></i> Home</a>
	</li><li>
		<a href="'.site_url('buku').'"><i class="fa fa-book"></i>Data Buku</a>
	</li><li>
		<a href="'.site_url('sumbangan').'"><i class="fa fa-book"></i>Modul</a>
	</li><li>
		<a href="'.site_url('anggota').'"><i class="fa fa-user"></i>Data anggota</a>
	</li><li>
		<a href="'.site_url('pinjam').'"><i class="fa fa-user"></i>Data pinjam Buku</a>
	</li><li>
		<a href="'.site_url('minjam').'"><i class="fa fa-user"></i>Data pinjam modul</a>
	</li>';
	}
	?>

