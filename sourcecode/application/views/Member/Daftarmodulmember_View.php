<?php
date_default_timezone_set('Asia/Jakarta');
?>

<!DOCTYPE HTML>
<!--
    Projection by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
	<title>PusOn</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="<?php echo base_url ('assets/css/main.css');?>" />
</head>
<body style="background-image: url(<?php echo base_url ('assets/images/perpus.jpg');?>)"/>

	<!-- Header -->
	<header id="header" >
		<div class="inner">

			<a href="index.html" class="logo" style="font-size: 20px"><strong style="font-size: 50px">PusOn</strong> pustaka Online</a>
			<nav id="nav">
				<a href="<?php echo site_url('Member');?>">Home</a>
				<a href="<?php echo site_url('Contact');?>">Contact Us</a>			
				<br>			
				<li class="pull-left"><a href="<?php echo site_url('Member'); ?>"><i class="fa fa-arrow-left"></i> kembali</a>
				</li>
			</nav>
			<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		</div>
	</header>
	<!-- Banner -->
	<section id="banner">
		<div class="inner">
			<table id="example" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th style="color: white;">nama</th>
						<th style="color: white;">Judul Modul</th>
						<th style="color: white;">tanggal_minjam</th>
						<th style="color: white;">tanggal_kembali</th>
						<th style="color: white;">Keterlambatan</th>
						<th style="color: white;">Jumlah</th>
					</tr>
				</thead>

				<?php 
				foreach ($Daftarmodulmember as $key => $value) {
					?>
					<tr>
						<th style="color: white;"><?php echo $value->nama; ?></th>
						<th style="color: white;"><?php echo $value->modul; ?></th>
						<th style="color: white;"><?php echo $value->tanggal_minjam; ?></th>	
						<th style="color: white;"><?php echo $value->tanggal_kembali; ?></th>
						<th style="color: white;">


							<?php 

							$denda = 1000;

							$tanggal_kembali = $value->tanggal_kembali;
							$tanggal_sekarang = date('Y-m-d');

							$selisih = strtotime($tanggal_sekarang)-strtotime($tanggal_kembali);
							$selisih2= -($selisih/86400);
							$selisih1 = $selisih/86400;
							$denda = $selisih1*$denda;

							if ($selisih1 >=1) {
								echo "<font color='red'>Terlambat $selisih1 Hari  <br>(Rp $denda)</font>";
				# code...
							}
							else
							{
								echo " Hari Ke ".$selisih2;
							}

							?>
						</th>

						<th style="color: white;"><?php echo $value->jumlah; ?></th>
					</tr>
					<?php }?>

			</table>
			<br>
			<br>
			<br>
			<br>

			<div style="color: white;">		
			<br>	
				  Copyright &copy PusOn <br> <?php echo date("d-m-y H:i:s"); ?>
				
			</div>
		</div>
	</section>


	<!-- Three -->



	<!-- Footer -->


	<!-- Scripts -->
	<script src="<?php echo base_url ('assets/js/jquery.min.js');?>"></script>
	<script src="<?php echo base_url ('assets/js/skel.min.js');?>"></script>
	<script src="<?php echo base_url ('assets/js/util.js');?>"></script>
	<script src="<?php echo base_url ('assets/js/main.js');?>"></script>

</body>
</html>

