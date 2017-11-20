<?php $this->load->view('templates/Header');?>
<div class="row">
	<div class="col-md-12 text-right">
		<a href="<?php echo site_url('Minjam/tambah'); ?>" 
			class="btn btn-primary" style="margin-top: 20px; margin-bottom: 20px"><i class="fa fa-plus"></i>Tambah</a>
		</div>

		<div class="row">
			<table id="example" class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>nama</th>
						<th>Judul Modul</th>
						<th>tanggal_minjam</th>
						<th>tanggal_kembali</th>
						<th>Keterlambatan</th>
						<th>Jumlah</th>
						<th>aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($Minjam as $key => $value) {
						?>
						<tr>
							<th><?php echo $value->nama; ?></th>
							<th><?php echo $value->modul; ?></th>
							<th><?php echo $value->tanggal_minjam; ?></th>	
							<th><?php echo $value->tanggal_kembali; ?></th>
							<th>

								
								<?php 

								$denda = 1000;

								$tanggal_kembali = $value->tanggal_kembali;
								$tanggal_sekarang = date('Y-m-d');

								$selisih = strtotime($tanggal_sekarang)-strtotime($tanggal_kembali);
								$selisih2= -($selisih/86400);
								$selisih1 = $selisih/86400;
								$denda = $selisih1*$denda;

								if ($selisih1 >=1) {
									echo "<font color='red'>Terlambat $selisih1 Hari  <br>(Rp $denda)</font>";
				# code...
								}
								else
								{
									echo " Hari Ke ".$selisih2;
								}

								?>
							</th>

							<th><?php echo $value->jumlah; ?></th>
							<th>
				<a onclick="return confirm('Anda Yakin Akan Menghapus Data ini ... ?')" href="<?php echo site_url('Minjam/delete/'.$value->id_minjam.'/'.$value->jumlah.'/'.$value->id_sumbangan); ?>" class="btn btn-danger">
					<i class="fa fa-trash"></i>
				</a>
				<a onclick="return confirm('Anda Yakin Akan Mengedit Data ini ... ?')" href="<?php echo site_url('Minjam/update/'.$value->id_minjam.'/'.$value->id_sumbangan.'/'.$value->id_anggota); ?>" class="btn btn-warning">
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