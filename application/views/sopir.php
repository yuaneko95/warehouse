<script type="text/javascript" src="<?= base_url('assets/js/plugins/tables/datatables/datatables.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/forms/selects/select2.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/pages/datatables_basic.js') ?>"></script>
	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active"><a href="<?= base_url('superuser/sopir') ?>">Sopir</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Data Sopir</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-heading">
							<a href="<?= base_url('superuser/sopir/create') ?>"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-reading"></i></b> Tambah Sopir</button></a>
						</div>
						<table class="table datatable-basic">
							<thead>
								<tr>
									<th style="width: 10%">ID Sopir</th>
									<th style="width: 20%">Nama Sopir</th>
									<th>Alamat</th>
									<th>Tgl Lahir</th>
									<th>Telpon</th>
									<th style="width: 10%" class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
							<?php  
								foreach ($sopir as $result):
							?>
								<tr>
									<td><?= $result->id_sopir ?></td>
									<td><a href="<?= base_url('superuser/sopir/update/'.$result->id_sopir) ?>"><?= $result->nma_sopir ?></a></td>
									<td><?= $result->alamat ?></td>
									<td><?= $result->tgl_lahir ?></td>
									<td><?= $result->telpon ?></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>
												
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="<?= base_url('superuser/sopir/create') ?>"><i class=" icon-add"></i> Tambah Sopir</a></li>
													<!-- <li><a href="{{base_url('superuser/soal/list/'.$result->id_bab)}}"><i class=" icon-file-text"></i> Detail Barang</a></li> -->
													<li><a href="<?= base_url('superuser/sopir/update/'.$result->id_sopir) ?>"><i class="icon-pencil7"></i> Edit Sopir</a></li>
													<li><a href="javascript:void(0)" onclick="deleteIt(this)" data-url="<?php echo base_url('superuser/sopir/deleted/'.$result->id_sopir) ?>"><i class="icon-trash"></i> Hapus Sopir</a></li>
												</ul>
											</li>
										</ul>
									</td>
								</tr>
							<?php  
								endforeach;
							?>
							</tbody>
						</table>
					</div>
					<!-- /basic datatable -->					
				</div>
				<!-- /content area -->

			</div>