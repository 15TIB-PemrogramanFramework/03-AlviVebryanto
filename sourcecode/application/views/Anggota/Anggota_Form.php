
<?php  
$this->load->view('templates/Header');
?>
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
	<?php  $this->load->view('templates/Footer');?>
