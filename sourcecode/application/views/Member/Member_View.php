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
		<link rel="stylesheet"  href="<?php echo base_url ('assets/css/main.css');?>" />
	</head>
	<body style="background-image: url(<?php echo base_url ('assets/images/perpus.jpg');?>)"/>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo" style="font-size: 20px"><strong style="font-size: 50px">PusOn</strong> pustaka Online</a>
					<nav id="nav">
						<a href="<?php echo site_url('Member');?>">Home</a>
						<a href="<?php echo site_url('Contact');?>">Contact Us</a>			
		<li><a href="<?php echo site_url('Login_Member/logout'); ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</li>
					</nav>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome to PusOn</h1>
						
					</header>

					<div class="flex ">
						<div>
							
						</div>

						<div>
							<span class="icon fa-user"></span>
							<h3><a href="<?php echo site_url('Databuku'); ?>">Data Buku</a></h3>

							<br>

							<br>

							<span class="icon fa-book"></span>
							<h3><a href="<?php echo site_url('Daftarbukumember/index/'.$this->session->userdata('nama')); ?>"> Data Peminjaman Buku</a></h3>
						</div>

						<div>
							<span class="icon fa-user"></span>
							<h3><a href="<?php echo site_url('Datamodul'); ?>">Data Modul</a></h3>

							<br>
							<br>
						
							<span class="icon fa-book"></span>
							
							<h3><a href="<?php echo site_url('Daftarmodulmember/index/'.$this->session->userdata('nama')); ?>">Data Peminjaman Modul</a></h3>
						</div>
						<div>
							
						</div>
					</div>
					
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