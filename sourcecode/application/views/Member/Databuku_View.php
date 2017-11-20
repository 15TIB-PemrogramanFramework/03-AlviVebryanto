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
			<th style="color: white;">ID</th>
			<th style="color: white;">Judul Buku</th>
			<th style="color: white;">Pengarang</th>
			<th style="color: white;">Penerbit</th>
			<th style="color: white;">Jumlah</th>
</tr>
</thead>
<tbody>
	<?php foreach ($Databuku as $key => $value) {?>
	<tr>
			<th style="color: white;"><?php echo $value->id_buku; ?></th>
			<th style="color: white;"><?php echo $value->judul; ?></th>	
			<th style="color: white;"><?php echo $value->pengarang; ?></th>
			<th style="color: white;"><?php echo $value->penerbit; ?></th>
			<th style="color: white;"><?php echo $value->jumlah; ?></th>
		</tr>
		<?php }?>
</tbody>
</table>


	<br>
				<br>
				<br>
				<br>

				<div style="color: white;">
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
