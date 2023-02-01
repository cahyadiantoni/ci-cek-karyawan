<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BinaSafetyIndonesia</title>
	<link rel="icon" href="<?= base_url("dist/img/BSI.png")?>">
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.min.css")?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?= base_url("plugins/datatables/dataTables.bootstrap.css")?>">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?= base_url("plugins/select2/select2.min.css")?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url("dist/css/AdminLTE.min.css")?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?= base_url("dist/css/skins/_all-skins.min.css")?>">

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="hold-transition skin-green sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">

		<header class="main-header">
			<!-- Logo -->
			<a href="<?= base_url() ?>" class="logo">
				<span class="logo-lg">
					<img src="<?= base_url("dist/img/BSI.png")?>" width="70px">
					<b>BSI</b>
				</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu">
							<a class="dropdown-toggle">
								<span>
									<b>
										PT. Bina Safety Indonesia (BSI)
									</b>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>

		<!-- =============================================== -->

		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<b>
					<div class="user-panel">
						<div class="pull-left image">
							<img src="<?= base_url("dist/img/avatar2.png")?>" class="img-circle" alt="User Image">
						</div>
						<div class="pull-left info">
							<p>
								<?= session()->nama_pengguna ?>
							</p>
							<span class="label label-warning">
								Administrator
							</span>
						</div>
					</div>
					</br>
					<!-- /.search form -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header">MAIN NAVIGATION</li>

						<!-- Level  -->
							<li class="treeview">
								<a href="<?= base_url("admin") ?>">
									<i class="fa fa-dashboard"></i>
									<span>Dashboard</span>
									<span class="pull-right-container">
									</span>
								</a>
							</li>

							<?php foreach ($data_pekerjaan as $p) : ?>
								<li class="treeview">
									<a href="<?= base_url("data-pekerja") ?>/<?= $p->id_pekerjaan ?>">
										<i class="<?= $p->icon ?>"></i>
										<span><?= $p->nama_pekerjaan ?></span>
										<span class="pull-right-container">
										</span>
									</a>
								</li>
							<?php endforeach ?>

							<li class="header">SETTING</li>

							<li class="treeview">
								<a href="<?= base_url('data-pengguna') ?>">
									<i class="fa fa-user"></i>
									<span>Pengguna Sistem</span>
									<span class="pull-right-container">
									</span>
								</a>
							</li>

							<li>
								<a href="<?= base_url('logout') ?>" onclick="return confirm('Anda yakin untuk logout ?')">
									<i class="fa fa-sign-out"></i>
									<span>Logout</span>
									<span class="pull-right-container"></span>
								</a>
							</li>

			</section>
			<!-- /.sidebar -->
		</aside>
		<div class="content-wrapper">
            <section class="content">