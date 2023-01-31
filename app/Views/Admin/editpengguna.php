<?php 
	echo view('Admin/header.php');
?>
<?php foreach($data_pengguna as $data_cek) : ?>
<section class="content-header">
	<h1>
		Pengguna Sistem
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="<?= base_url() ?>">
				<i class="fa fa-home"></i>
				<b>Binasafety Indonesia</b>
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
					<h3 class="box-title">Ubah Pengguna</h3>
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
				<form action="<?= base_url('data-pengguna/edit') ?>" method="post" enctype="multipart/form-data">
					<div class="box-body">

						<div class="form-group">
							<input type='hidden' class="form-control" name="id_pengguna" value="<?= $data_cek->id_pengguna; ?>"
							 readonly/>
						</div>

						<div class="form-group">
							<label>Nama Pengguna</label>
							<input class="form-control" name="nama_pengguna" value="<?= $data_cek->nama_pengguna; ?>"
							/>
						</div>

						<div class="form-group">
							<label>Username</label>
							<input class="form-control" name="username" value="<?= $data_cek->username; ?>"
							/>
						</div>

						<div class="form-group">
							<label for="exampleInputPassword1">Password Baru</label>
							<input type="text" class="form-control" name="password_baru" />
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<input type="submit" name="Ubah" value="Ubah" class="btn btn-success">
						<a href="<?= base_url("data-pengguna") ?>" title="Kembali" class="btn btn-warning">Batal</a>
					</div>
				</form>
			</div>
			<!-- /.box -->
</section>
<?php endforeach ?>

<?php 
	echo view('Admin/footer.php');
?>