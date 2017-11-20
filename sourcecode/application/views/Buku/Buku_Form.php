
<?php  $this->load->view('templates/Header');?>
<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">
		<label>JUDUL :</label>
		<input type="text" name="judul" class="form-control"
		placeholder="Inputkan judul" required value="<?php echo $judul; ?>">
	</div>
	<div class="form-group">
		<label>PENGARANG :</label>
		<input type="text" name="pengarang" class="form-control"
		placeholder="Inputkan pengarang" required value="<?php echo 
		$pengarang; ?>">
	</div>
	<div class="form-group">
		<label>PENERBIT :</label>
		<input type="text" name="penerbit" class="form-control"
		placeholder="Inputkan penerbit"  value="<?php echo $penerbit; ?>">
	</div>
	<div class="form-group">
		<label>JUMLAH :</label>
		<input type="text" name="jumlah" class="form-control"
		placeholder="Inputkan jumlah"  value="<?php echo $jumlah; ?>">
	</div>
	<input type="hidden" name="id_buku" value="<?php echo $id_buku; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
	<?php  $this->load->view('templates/Footer');?>