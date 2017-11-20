<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PusOn</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body style="background-color: grey">
 <section id="banner">
                <div class="inner">
            <div class="col-md-4 col-md-offset-4">                
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register</h3>
                    </div>
                    <div class="panel-body">
                     <form action="<?php echo $aksi; ?>" method="POST">
    <div class="form-group">
        <label>nama :</label>
        <input type="text" name="nama" class="form-control"
        placeholder="Inputkan nama" required value="<?php echo 
        $nama; ?>">
    </div>
    <div class="form-group">
        <label>Password :</label>
        <input type="password" name="password" class="form-control"
        placeholder="Inputkan password" required value="<?php echo 
        $password; ?>">
    </div>
    <div class="form-group">
        <label>TEMPAT LAHIR :</label>
        <input type="text" name="tempat_lahir" class="form-control"
        placeholder="Inputkan tempat lahir"  value="<?php echo $tempat_lahir; ?>">
    </div>
    <div class="form-group">
        <label>TANGGAL_LAHIR :</label>
        <input type="date" name="tanggal_lahir" class="form-control"
        placeholder="Inputkan tanggal lahir"  value="<?php echo $tanggal_lahir; ?>">
    </div>
    <div class="form-group">
        <label>JENIS KELAMIN :</label>
        <select class="form-control" name="jk">
            <option value="laki-laki">Laki-Laki</option>
            <option value="perempuan">Perempuan</option>
        </select>
        <!--<input type="text" name="jk" class="form-control"
        placeholder="Inputkan jenis kelamin"  value="<?php echo $jk; ?>"> -->
    </div>
    <input type="hidden" name="id_anggota" value="<?php echo $id_anggota; ?>">
    <button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
</section>
</body>


      <!-- jQuery -->
            <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="<?php echo base_url() ?>assets/vendor/metisMenu/metisMenu.min.js"></script>

            <!-- Custom Theme JavaScript -->
            <script src="<?php echo base_url() ?>assets/js/sb-admin-2.js"></script>

        </body>

        </html>
