<?php $this->load->view('templates/Header');?>
<div class="row">
	<div class="col-md-12 text-right">
	<a href="<?php echo site_url('Anggota/tambah'); ?>" 
		class="btn btn-primary" style="margin-top: 20px; margin-bottom: 20px"><i class="fa fa-plus"></i>Tambah</a>
</div>

<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>nama</th>
			<th>Password</th>
			<th>Tempat Lahir</th>
			<th>Tanggal Lahir</th>
			<th>Jenis Kelamin</th>
			<th>Aksi</th>
</tr>
</thead>
<tbody>
	<?php foreach ($Anggota as $key => $value) {?>
	<tr>
			<th><?php echo $value->id_anggota; ?></th>
			<th><?php echo $value->nama; ?></th>	
			<th><?php echo $value->password; ?></th>	
			<th><?php echo $value->tempat_lahir; ?></th>
			<th><?php echo $value->tanggal_lahir; ?></th>
			<th><?php echo $value->jk; ?></th>
			<th>
				<a onclick="return confirm('Anda Yakin Akan Menghapus Data ini ... ?')" href="<?php echo site_url('Anggota/delete/'.$value->id_anggota); ?>" class="btn btn-danger">
					<i class="fa fa-trash"></i>
				</a>
				<a onclick="return confirm('Anda Yakin Akan Mengedit Data ini ... ?')" href="<?php echo site_url('Anggota/update/'.$value->id_anggota); ?>" class="btn btn-warning">
					<i class="fa fa-pencil"></i>
				</a>
			</th>
		</tr>
		<?php }?>
</tbody>
</table>
</div>

<?$this->load->view('templates/Footer');?>

<script type="text/javascript">
	$(document).ready(function() {
	$('#example').DataTable();
} );
</script>