<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?= base_url('superuser') ?>"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="<?= base_url('superuser/barang') ?>">Barang</a></li>
							<li class="active"><?= ($type=="create") ? 'Tambah Data Barang' : 'Perbarui Data Barang' ?></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah data Barang</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" id="form_barang" action="<?= ($type=='create') ? base_url('superuser/barang/created') : base_url('superuser/barang/updated/'.$barang->id_barang) ?>" method="post">
								<fieldset class="content-group">
									<div class="form-group">
										<label class="control-label col-lg-2">Kode Barang</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="id_barang" value="<?=  ($type=='create') ? '' : $barang->id_barang  ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Nama Barang</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="nm_barang" value="<?=  ($type=='create') ? '' : $barang->nm_barang  ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Stok Barang</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="stok_brg" value="<?=  ($type=='create') ? '' : $barang->stok_brg  ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Harga Barang</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="hrg_barang" value="<?=  ($type=='create') ? '' : $barang->hrg_barang  ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Dari Supplier</label>
										<div class="col-lg-4">
										<select required class="select-search" name="id_supp">
											<optgroup label="Pilih Supplier">
												<option value="">Pilih</option>
												<?php foreach ($id_supp as $result): ?>
													<option 
														<?php  
															if ($type=='update')
																if ($barang->id_supp==$result->id_supp) {
																	echo "selected";
																}
														?>
														value="<?= $result->id_supp ?>"><?= $result->nm_supp ?>
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