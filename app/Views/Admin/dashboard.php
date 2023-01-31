<?php 
	echo view('Admin/header.php');
?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Dashboard
		<small>Administrator</small>
	</h1>
</section>

<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<?php foreach($data_pekerjaan as $p): ?>
	<div class="row">
		
		<a href="<?= base_url("data-pekerja") ?>/<?= $p->id_pekerjaan ?>" class="small-box">
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-blue">
				<div class="inner">
				<h4>
						<?= "Data"; ?>
					</h4>
					<p><?= $p->nama_pekerjaan ?></p>
				</div>
				<div class="icon">
					<i class="<?= $p->icon ?>"></i>
				</div>
					<!-- <i class="fa fa-arrow-circle-right"></i> -->
			</div>
		</div>
		</a>
	</div>
	<?php endforeach ?>
</section>
		
<?php 
	echo view('Admin/footer.php');
?>