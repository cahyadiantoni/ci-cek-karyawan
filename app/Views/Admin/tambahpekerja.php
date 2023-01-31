<?php 
	echo view('Admin/header.php');
?>
<?php foreach($data_pekerjaan_filter as $pekerjaan): ?>
<section class="content-header">
	<h1>
		Kelola Data
		<small><?= $pekerjaan->nama_pekerjaan ?></small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="<?= base_url() ?>">
				<i class="fa fa-home"></i>
				<b>Bina Safety Indonesia</b>
			</a>
		</li>
	</ol>
</section>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<!-- general form elements -->
			<div class="box box-info">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Pekerja</h3>
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
				<!-- form start -->
				<form action="<?= base_url('data-pekerja/simpan') . "/" . $pekerjaan->id_pekerjaan ?>" method="post" enctype="multipart/form-data">
					<div class="box-body">
	

						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Pekerja" required>
						</div>

						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type='date' name="tgl_lahir" id="tgl_lahir" class="form-control" required>
						</div>

						<div class="form-group">
							<label>Pekerjaan</label>
							<input type="text" name="operator" id="operator" class="form-control" placeholder="operator" required>
						</div>

						<div class="form-group">
							<label>Keterangan</label>
							<input type="text" class="form-control" placeholder="<?= $pekerjaan->nama_pekerjaan ?>" readonly>
							<input type="hidden" name="keterangan" id="keterangan" class="form-control" value="<?= $pekerjaan->id_pekerjaan ?>" readonly>
						</div>

						<div class="form-group">
							<label>Nomor NPWP</label>
							<input type="text" name="no_npwp" id="no_npwp" class="form-control" placeholder="Nomor NPWP">
						</div>

						<div class="form-group">
							<label>Nama Perusahaan</label>
							<input type="text" name="nama_perusahaan" id="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan">
						</div>

						<div class="form-group">
							<label>Alamat Perusahaan</label>
							<input type="text" name="alamat_perusahaan" id="alamat_perusahaan" class="form-control" placeholder="Alamat Perusahaan">
						</div>

					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
						<a href="<?= base_url('data-pekerja') ?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>
<?php endforeach ?>
<?php 
	echo view('Admin/footer.php');
?>