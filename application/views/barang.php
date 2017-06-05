
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/tables/datatables/datatables.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/forms/selects/select2.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/pages/datatables_basic.js') ?>"></script>

	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active"><a href="<?= base_url('superuser/barang') ?>">Barang</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Data Barang</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-heading">
							<a href="<?= base_url('superuser/barang/create') ?>"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-reading"></i></b> Tambah Barang</button></a>
						</div>
						<table class="table datatable-basic">
							<thead>
								<tr>
									<th style="width: 10%">ID Barang</th>
									<th style="width: 20%">Nama Barang</th>
									<th>Harga Barang</th>
									<th>Stok Barang</th>
									<th>Tgl Masuk</th>
									<th>Tgl Keluar</th>
									<th style="width: 10%" class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
							<?php  
								foreach ($barang as $result):
							?>
								<tr>
									<td><?= $result->id_barang ?></td>
									<td><a href="<?= base_url('superuser/barang/update/'.$result->id_barang) ?>"><?= $result->nm_barang ?></a></td>
									<td><?= $result->hrg_barang ?></td>
									<td><?= $result->stok_brg ?></td>
									<td><?= $result->waktu_masuk ?></td>
									<td><?= $result->waktu_keluar ?></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>
												
												<ul class="dropdown-menu dropdown-menu-right">
													
													<li><a href="<?= base_url('superuser/barang/update/'.$result->id_barang) ?>"><i class="icon-pencil7"></i> Edit Barang</a></li>
													<li><a href="javascript:void(0)" onclick="deleteIt(this)" data-url="<?= base_url('superuser/barang/deleted/'.$result->id_barang) ?>"><i class="icon-trash"></i> Hapus Barang</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->					
				</div>
				<!-- /content area -->

			</div>
