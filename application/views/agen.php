<script type="text/javascript" src="<?= base_url('assets/js/plugins/tables/datatables/datatables.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/forms/selects/select2.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/pages/datatables_basic.js') ?>"></script>
	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active"><a href="<?= base_url('superuser/agen') ?>">Agen</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Data Agen</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-heading">
							<a href="<?= base_url('superuser/agen/create') ?>"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-reading"></i></b> Tambah Agen</button></a>
						</div>
						<table class="table datatable-basic">
							<thead>
								<tr>
									<th style="width: 10%">ID Agen</th>
									<th style="width: 20%">Nama Agen</th>
									<th>Alamat</th>
									<th>Telpon</th>
									<th style="width: 10%" class="text-center">Actions</th>
								</tr>
							</thead>
							<tbody>
							<?php  
								foreach ($agen as $result):
							?>
								<tr>
									<td><?= $result->id_agen ?></td>
									<td><a href="<?= base_url('superuser/agen/update/'.$result->id_agen) ?>"><?= $result->nma_agen ?></a></td>
									<td><?= $result->alamat_agen ?></td>
									<td><?= $result->telp_agen ?></td>
									<td class="text-center">
										<ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>
												
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="<?= base_url('superuser/agen/create') ?>"><i class=" icon-add"></i> Tambah Agen</a></li>
													<!-- <li><a href="{{base_url('superuser/soal/list/'.$result->id_bab)}}"><i class=" icon-file-text"></i> Detail Barang</a></li> -->
													<li><a href="<?= base_url('superuser/agen/update/'.$result->id_agen) ?>"><i class="icon-pencil7"></i> Edit Agen</a></li>
													<li><a href="javascript:void(0)" onclick="deleteIt(this)" data-url="<?php echo base_url('superuser/agen/deleted/'.$result->id_agen) ?>"><i class="icon-trash"></i> Hapus Agen</a></li>
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