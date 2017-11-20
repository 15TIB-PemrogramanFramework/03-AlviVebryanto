<?php $this->load->view('templates/Header');?>
<div class="row">
	<div class="col-md-12 text-right">
		<a href="<?php echo site_url('Sumbangan/tambah'); ?>" 
			class="btn btn-primary" style="margin-top: 20px; margin-bottom: 20px"><i class="fa fa-plus"></i>Tambah</a>
		</div>

		<div class="row">
			<table id="example" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>nama</th>
						<th>Modul</th>
						<th>tanggal sumbangan</th>
						<th>Jumlah sumbangan</th>
						<th>aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($Sumbangan as $key => $value) {
						?>
						<tr>
							<th><?php echo $value->nama; ?></th>
							<th><?php echo $value->modul; ?></th>
							<th><?php echo $value->tanggal_sumbangan; ?></th>	
							<th><?php echo $value->jumlah_sumbangan; ?></th>
							<th>
				<a onclick="return confirm('Anda Yakin Akan Menghapus Data ini ... ?')" href="<?php echo site_url('Sumbangan/delete/'.$value->id_sumbangan); ?>" class="btn btn-danger">
					<i class="fa fa-trash"></i>
				</a>
				<a onclick="return confirm('Anda Yakin Akan Mengedit Data ini ... ?')" href="<?php echo site_url('Sumbangan/update/'.$value->id_sumbangan.'/'.$value->id_anggota); ?>" class="btn btn-warning">
					<i class="fa fa-pencil"></i>
				</a>
			</th>
		</tr>
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