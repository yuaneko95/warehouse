<script type="text/javascript" src="<?= base_url('assets/js/plugins/tables/datatables/datatables.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/plugins/forms/selects/select2.min.js') ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/js/pages/datatables_basic.js') ?>"></script>
<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active"><a href="datatable_basic.html">Surat Masuk</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Data Surat Masuk</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-heading">
							<a href="<?= base_url('superuser/surat_terima/create') ?>"><button type="button" class="btn bg-teal-400 btn-labeled"><b><i class="icon-reading"></i></b> Tambah Barang Masuk</button></a>
						</div>
						<table class="table datatable-basic">
							<thead>
								<tr>
									<th style="width: 10%">No</th>
									<th>Dari Supplier</th>
									<th>Barang Yang Masuk</th>
									<th>Jumlah Yang Masuk</th>
									<!-- <th>Tgl Masuk</th> -->
									<th style="width: 10%" class="text-center" align="center">Actions</th>
								</tr>
							</thead>
							<tbody>
							<?php 
								foreach ($detail_terima as $key => $result):
							?>
								<tr>
									<td><?= $key+1 ?></td>
									<td><?= $result->nm_supp?></td>
									<td><?= $result->nm_barang ?></td>
									<td><?= $result->jumlah ?></td>
									<!-- <td><?= $result->waktu_masuk ?></td> -->
									<td class="text-center">
										<a href="<?= base_url('superuser/surat_terima/detail/'.$result->id_terima) ?>" class="btn btn-primary" style="margin-left: -40px"><i class="glyphicon glyphicon-print"> Cetak</i></a>
										<!-- <a href="" class="btn btn-success"><i class="glyphicon glyphicon-list"> Detail</i></a> -->
										
										<!-- <ul class="icons-list">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													<i class="icon-menu9"></i>
												</a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><a href="<?= base_url('superuser/surat_terima/create') ?>"><i class=" icon-add"></i> Tambah Pengirim</a></li>
													<li><a href="{{base_url('superuser/soal/list/'.$result->id_bab)}}"><i class=" icon-file-text"></i> Detail Barang</a></li>
													<li><a href="<?= base_url('superuser/surat_terima/update/'.$result->id_terima) ?>"><i class="icon-pencil7"></i> Edit Pengirim</a></li>
													<li><a href="javascript:void(0)" onclick="deleteIt(this)" data-url="<?php echo base_url('superuser/surat_terima/deleted/'.$result->id_terima) ?>"><i class="icon-trash"></i> Hapus Pengirim</a></li>
												</ul>
											</li>
										</ul> -->
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