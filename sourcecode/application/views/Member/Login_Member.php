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
    <body style="background-image: url(<?php echo base_url ('assets/images/perpustakaan.jpg');?>)"/>

        <!-- Header -->
            <header id="header">
                <div class="inner">
                   <header>
                        <h1 style="color: white; font-size: 50px;">Welcome to PusOn</h1>
                    </header>
                </div>
            </header>

        <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <h3>Sign In</h3>

                     <form role="form" action="<?php echo base_url('Login_Member') ?>" method="POST">
                        <div class="field half ">
                            <input name="nama" id="nama" type="text" placeholder="Username" style="background-color:gray;">
                        </div>
                        <br>
                        <div class="field half">
                            <input name="password" id="password" type="password" placeholder="Password" style="background-color: gray;">
                        </div>
                        <ul class="actions">
                            <li><input value="Login" class="button alt" type="submit"></li>
                        </ul>
                    </form>
                   <h5 style="color: white;"> silahkan melakukan registrasi jika belum mempunyai akun 
                      <a href="<?php echo site_url('Registrasi_Member/tambah'); ?>" 
                                        class="button alt" style="margin-top: 20px; margin-bottom: 20px;">Registrasi</a>
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