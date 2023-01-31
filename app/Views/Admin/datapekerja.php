<?php 
	echo view('Admin/header.php');
?>
<section class="content-header">
	<h1>
		Kelola Data
		<small> <?php foreach ($data_pekerjaan_filter as $p): ?> <?= $p->nama_pekerjaan ?> </small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="../index.php">
				<i class="fa fa-home"></i>
				<b>Bina Safety Indonesia</b>
			</a>
		</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">
	<div class="box box-primary">
		<div class="box-header with-border">
			<a href="<?= base_url('data-pekerja/tambah') . "/" . $p->id_pekerjaan ?>" title="Tambah Data" class="btn btn-primary">
				<i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
			<div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse">
					<i class="fa fa-minus"></i>
				</button>
				<button type="button" class="btn btn-box-tool" data-widget="remove">
					<i class="fa fa-remove"></i>
				</button>
			</div>
		</div>
		<!-- /.box-header -->
		<div class="box-body">
			<div class="table-responsive">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Tgl Lahir</th>
							<th>Operator</th>
							<th>Keterangan</th>
							<th>NPWP</th>
							<th>Perusahaan</th>
							<th>Alamat Perusahaan</th>
							<th>Kelola</th>
						</tr>
					</thead>
					<tbody>

						<?php
                  $no = 1;
                  foreach ($data_pekerja as $data) : 
                ?>

						<tr>
							<td>
								<?php echo $no++; ?>
							</td>
							<td>
								<?php echo $data->nama; ?>
							</td>
							<td>
								<?php echo $data->tgl_lahir; ?>
							</td>
							<td>
								<?php echo $data->operator; ?>
							</td>
							<td>
								<?= $p->nama_pekerjaan;?>
							</td>
							<td>
								<?php echo $data->npwp; ?>
							</td>
							<td>
								<?php echo $data->nama_pt; ?>
							</td>
							<td>
								<?php echo $data->alamat_pt; ?>
							</td>

							<td>
								<a href="<?= base_url('data-pekerja/ubah') . "/" . $data->id_pekerja; ?>" title="Ubah"
								 class="btn btn-success">
									<i class="glyphicon glyphicon-edit"></i>
								</a>
								<a href="?page=MyApp/del_ahlik3&kode=<?php echo $data->id_pekerja; ?>" onclick="return confirm('Yakin Hapus Data Ini ?')"
								 title="Hapus" class="btn btn-danger">
									<i class="glyphicon glyphicon-trash"></i>
							</td>
						</tr>
						<?php
                  endforeach;
                  endforeach
                ?>
					</tbody>

				</table>
			</div>
		</div>
	</div>
</section>

<?php 
	echo view('Admin/footer.php');
?>