	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Administrator</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/icons/icomoon/styles.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/core.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/components.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/css/colors.css') ?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/js/sweetalert.min.css') ?>" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	
	<!-- Core JS files -->
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/loaders/pace.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/core/libraries/jquery.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/core/libraries/bootstrap.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/loaders/blockui.min.js') ?>"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/visualization/d3/d3.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/visualization/d3/d3_tooltip.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/forms/styling/switchery.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/forms/styling/uniform.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/forms/selects/bootstrap_multiselect.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/ui/moment/moment.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/pickers/daterangepicker.js') ?>"></script>

	<script type="text/javascript" src="<?= base_url('assets/js/core/app.js') ?>"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?= base_url('superuser') ?>"><img src="<?= base_url('assets/images/website/config/logo/codeigniter-logo.png') ?>" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
				
			</ul>

			<p class="navbar-text"><a href="{{base_url()}}"><span class="label bg-success">Online</span></a></p>

			<ul class="nav navbar-nav navbar-right">

				

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?= base_url('assets/images/placeholder.jpg') ?>" alt="">
						<span><?=  $this->session->userdata('nama'); ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="<?= base_url('auth/keluar') ?>"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="<?php echo base_url('') ?>assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo $this->session->userdata('nama'); ?></span>
									
								</div>

								
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								
								
								<!-- /main -->

								<!-- Forms -->
								<li class="navigation-header"><span>Manajemen Warehouse</span> <i class="icon-menu" title="Manajemen Mata Pelajaran"></i></li>
								<li class="<?php echo match($menu,'barang','active') ?>">
									<a href="<?php echo base_url('superuser/barang') ?>"><i class="icon-database"></i> <span>BARANG</span></a>
								</li>
								<li class="<?= match($menu,'supplier','active') ?>"><a href="<?= base_url('superuser/supplier') ?>"><i class="icon-home"></i> <span>SUPPLIER</span></a></li>
								<li class="<?= match($menu,'sopir','active') ?>"><a href="<?= base_url('superuser/sopir') ?>"><i class="icon-truck"></i> <span>SOPIR</span></a></li>
								<li class="<?= match($menu,'agen','active') ?>"><a href="<?= base_url('superuser/agen') ?>"><i class="icon-office"></i> <span>AGEN</span></a></li>
								<li class="<?= match($menu,'pengirim','active') ?>"><a href="<?= base_url('superuser/pengirim') ?>"><i class="icon-file-text"></i> <span>SURAT JALAN</span></a></li>
								<li class="<?= match($menu,'surat_terima','active') ?>"><a href="<?= base_url('superuser/surat_terima') ?>"><i class="icon-file-text"></i> <span>BARANG MASUK</span></a></li>
								<!-- /forms -->
							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			
			
			<!-- /main content -->


