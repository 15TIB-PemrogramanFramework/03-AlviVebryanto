<?php  $this->load->view('templates/Header');?>
<form action="<?php echo $aksi; ?>" method="POST">
	<div class="form-group">
		<label>Nama Buku :</label>
		<select class="form-control" name="id_buku">
			<?php foreach ($id_buku as $key => $value) { 
				if ($nama_buku==$value -> id_buku) {
				?>
			<option selected value="<?php echo $value->id_buku; ?>"><?php echo $value->judul;?></option>
			 <?php }else{?>
			  <option value="<?php echo $value->id_buku; ?>"><?php echo $value->judul;?></option>
			  <?php
			}
			} ?>
		</select>
	</div>

	<div class="form-group">
		<label>Nama Anggota :</label>
		<select class="form-control" name="id_anggota">
			<?php foreach ($id_anggota as $key => $value) { 
				if ($nama_anggota==$value -> id_anggota) {
				?>
			<option selected value="<?php echo $value->id_anggota; ?>"><?php echo $value->nama;?></option>
			 <?php }else{ ?>
			 <option value="<?php echo $value->id_anggota; ?>"><?php echo $value->nama;?></option>
			 <?php }}?>
		</select>
	</div>
	
	<div class="form-group">
		<label>Tanggal Pinjam :</label>
		<input type="date" name="tanggal_pinjam" class="form-control"
		placeholder="Inputkan tanggal_pinjam"  value="<?php echo $tanggal_pinjam; ?>">
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
	<input type="hidden" name="id_pinjam" value="<?php echo $id_pinjam; ?>">
	<button class="btn btn-primary" type="submit"><?php echo $button; ?></button>
</form>
	<?php  $this->load->view('templates/Footer');?>