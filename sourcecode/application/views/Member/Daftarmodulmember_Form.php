<?php  $this->load->view('templates/Header');?>
<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">
		<label>Judul Modul :</label>
		<select class="form-control" name="id_sumbangan">
			<?php foreach ($id_sumbangan as $key => $value) { ?>
			<option value="<?php echo $value->id_sumbangan; ?>"><?php echo $value->modul;?></option>
			 <?php } ?>
		</select>
	</div>

	<div class="form-group">
		<label>Nama Anggota :</label>
		<select class="form-control" name="id_anggota">
			<?php foreach ($id_anggota as $key => $value) { ?>
			<option value="<?php echo $value->id_anggota; ?>"><?php echo $value->nama;?></option>
			 <?php } ?>
		</select>
	</div>
	
	<div class="form-group">
		<label>Tanggal minjam :</label>
		<input type="date" name="tanggal_minjam" class="form-control"
		placeholder="Inputkan tanggal_minjam"  value="<?php echo $tanggal_minjam; ?>">
	</div>
	<div class="form-group">
		<label>Tanggal kembali :</label>
		<input type="date" name="tanggal_kembali" class="form-control"
		placeholder="Inputkan tanggal_kembali"  value="<?php echo $tanggal_kembali; ?>">
	</div>
	<div class="form-group">
		<label>Jumlah :</label>
		<input type="text" name="jumlah" class="form-control"
		placeholder="Inputkan jumlah"  value="<?php echo $jumlah; ?>">
	</div>
	<input type="hidden" name="id_minjam" value="<?php echo $id_minjam; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
	<?php  $this->load->view('templates/Footer');?>