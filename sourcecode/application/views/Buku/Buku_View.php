<?php $this->load->view('templates/Header');?>
<div class="row">
	<div class="col-md-12 text-right">
	<a href="<?php echo site_url('Buku/tambah'); ?>" 
		class="btn btn-primary" style="margin-top: 20px; margin-bottom: 20px"><i class="fa fa-plus"></i>Tambah</a>
</div>

<div class="row">
<table id="example" class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th>Jumlah</th>
			<th>Aksi</th>
</tr>
</thead>
<tbody>
	<?php foreach ($Buku as $key => $value) {?>
	<tr>
			<th><?php echo $value->id_buku; ?></th>
			<th><?php echo $value->judul; ?></th>	
			<th><?php echo $value->pengarang; ?></th>
			<th><?php echo $value->penerbit; ?></th>
			<th><?php echo $value->jumlah; ?></th>
			<th>
				<a onclick="return confirm('Anda Yakin Akan Menghapus Data ini ... ?')" href="<?php echo site_url('Buku/delete/'.$value->id_buku); ?>" class="btn btn-danger">
					<i class="fa fa-trash"></i>
				</a>
				<a onclick="return confirm('Anda Yakin Akan Mengedit Data ini ... ?')" href="<?php echo site_url('Buku/update/'.$value->id_buku); ?>" class="btn btn-warning">
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