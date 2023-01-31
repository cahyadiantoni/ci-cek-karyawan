<?php 
	echo view('Admin/header.php');
?>
<?php foreach($data_pekerja as $data_cek) : ?>
<section class="content-header">
	<h1>
		Kelola Data
		<small>Data Ahli K3</small>
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
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Ubah Pekerja</h3>
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
				<form action="<?= base_url('data-pekerja/edit') . "/" . $data_cek->id_pekerja ?>" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<div class="form-group">
							<input type='hidden' class="form-control" name="id_pekerja" value="<?php echo $data_cek->id_pekerja; ?>"
							 readonly/>
						</div>

						<div class="form-group">
							<label>Nama</label>
							<input type='text' class="form-control" name="nama" value="<?php echo $data_cek->nama; ?>" required
							/>
						</div>

						<div class="form-group">
							<label>Tanggal Lahir</label>
							<input type='date' name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?php echo $data_cek->tgl_lahir; ?>" required>
						</div>

						<div class="form-group">
							<label>Operator</label>
							<input type='text' class="form-control" name="operator" value="<?php echo $data_cek->operator; ?>" required
							/>
						</div>
						
						<div class="form-group">
							<!-- <label>Keterangan</label> -->
							<input type="hidden" name="keterangan" id="keterangan" class="form-control" readonly value="<?= $data_cek->pekerjaan_id ?>" placeholder="Ahli K3">
						</div>

						<div class="form-group">
							<label>Nomor NPWP</label>
							<input type='text' class="form-control" name="npwp" value="<?php echo $data_cek->npwp; ?>" required />
						</div>

						<div class="form-group">
							<label>Nama Perusahaan</label>
							<input type='text' class="form-control" name="nama_pt" value="<?php echo $data_cek->nama_pt; ?>" required />
						</div>

						<div class="form-group">
							<label>Alamat Perusahaan</label>
							<input type='text' class="form-control" name="alamat_pt" value="<?php echo $data_cek->alamat_pt; ?>" required />
						</div>


					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="<?= base_url('data-pekerja') . "/" . $data_cek->pekerjaan_id ?>" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>
<?php endforeach ?>
<?php 
	echo view('Admin/footer.php');
?>