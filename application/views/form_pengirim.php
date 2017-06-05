<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?= base_url('superuser') ?>"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="<?= base_url('superuser/pengirim') ?>">Pengiriman Barang</a></li>
							<li class="active"><?= ($type=="create") ? 'Tambah Data Pengiriman Barang' : 'Perbarui Data Pengiriman Barang' ?></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah Data Pengiriman Barang</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" id="form_pengirim" action="<?= ($type=='create') ? base_url('superuser/pengirim/created') : base_url('superuser/pengirim/updated/'.$detail_pengirim->id_pengirim) ?>" method="post">
								<fieldset class="content-group">
									<div class="form-group">
										<label class="control-label col-lg-2">ID Pengiriman</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="id_pengirim" value="<?=  ($type=='create') ? '' : $detail_pengirim->id_pengirim  ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Nama Sopir</label>
										<div class="col-lg-4">
										<select required class="select-search" name="id_sopir">
											<optgroup label="Pilih Sopir">
												<option value="">Pilih</option>
												<?php foreach ($sopir as $result): ?>
													<option 
														<?php  
															if ($type=='update')
																if ($pengirim->id_sopir==$result->id_sopir) {
																	echo "selected";
																}
														?>
														value="<?= $result->id_sopir ?>"><?= $result->nma_sopir ?>
													</option>
												<?php endforeach; ?>
											</optgroup>
										</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Barang</label>
										<div class="col-lg-4">
										<select required class="select-search" name="id_barang">
											<optgroup label="Pilih Barang">
												<option value="">Pilih</option>
												<?php foreach ($barang as $result): ?>
													<option 
														<?php  
															if ($type=='update')
																if ($detail_pengirim->id_barang==$result->id_barang) {
																	echo "selected";
																}
														?>
														value="<?= $result->id_barang ?>"><?= $result->nm_barang ?>
													</option>
												<?php endforeach; ?>
											</optgroup>
										</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Jumlah Barang</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="jumlah" value="<?=  ($type=='create') ? '' : $detail_pengirim->jumlah  ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Ke Agen</label>
										<div class="col-lg-4">
										<select required class="select-search" name="id_agen">
											<optgroup label="Pilih Supplier">
												<option value="">Pilih</option>
												<?php foreach ($agen as $result): ?>
													<option 
														<?php  
															if ($type=='update')
																if ($pengirim->id_agen==$result->id_agen) {
																	echo "selected";
																}
														?>
														value="<?= $result->id_agen ?>"><?= $result->nma_agen ?>
													</option>
												<?php endforeach; ?>
											</optgroup>
										</select>
										</div>
									</div>
									
								</fieldset>
								<div class="text-right">
									<button type="submit" class="btn btn-primary"><?= ($type=='create') ? 'Simpan' : 'Edit' ?> <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</form>
						</div>
					</div>
					<!-- /form horizontal -->
				</div>
			</div>