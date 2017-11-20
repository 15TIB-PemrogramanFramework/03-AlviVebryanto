<?php  $this->load->view('templates/Header');?>
<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">
		<label>Nama Anggota :</label>
		<select class="form-control" name="id_anggota">
			<?php foreach ($id_anggota as $key => $value) {
			if ($nama_anggota==$value -> id_anggota) {
				?>
			<option selected value="<?php echo $value->id_anggota; ?>"><?php echo $value->nama;?></option>
			 <?php }else{ ?>
			 <option value="<?php echo $value->id_anggota; ?>"><?php echo $value->nama;?></option>
			 <?php	
			}}?>
		</select>
	</div>
	<div class="form-group">
		<label>Modul :</label>
		<input type="text" name="modul" class="form-control"
		placeholder="Inputkan modul"  value="<?php echo $modul; ?>">
	</div>
	<div class="form-group">
		<label>Tanggal Sumbangan :</label>
		<input type="date" name="tanggal_sumbangan" class="form-control"
		placeholder="Inputkan tanggal_sumbangan"  value="<?php echo $tanggal_sumbangan; ?>">
	</div>
	<div class="form-group">
		<label>Jumlah Sumbangan :</label>
		<input type="text" name="jumlah_sumbangan" class="form-control"
		placeholder="Inputkan jumlah_sumbangan"  value="<?php echo $jumlah_sumbangan; ?>">
	</div>
	<input type="hidden" name="id_sumbangan" value="<?php echo $id_sumbangan; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
	<?php  $this->load->view('templates/Footer');?>