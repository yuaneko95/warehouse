	<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?= base_url('superuser') ?>"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="<?= base_url('superuser/surat_terima') ?>">Barang Masuk</a></li>
							<li class="active"><?= ($type=="create") ? 'Tambah Barang Masuk' : 'Perbarui Barang Masuk' ?></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah data Barang Masuk</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
						<!-- <h1><?= var_dump($this->input->post('jumlah')); ?></h1> -->
							<form class="form-horizontal" id="form_terima" action="<?= ($type=='create') ? base_url('superuser/surat_terima/created') : base_url('superuser/surat_terima/updated/'.$terima->id_terima)  ?>" method="post">
								<fieldset class="content-group">
									<div class="form-group">
										<label class="control-label col-lg-2">ID Terima</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="id_terima" value="<?= ($type=='create') ? '' : $terima->id_terima  ?>" required>
										</div>
									</div>
									
									<div class="form-group">
										<label class="control-label col-lg-2">Nama Barang</label>
										<div class="col-lg-4">
										<select required class="select-search form-control" name="id_barang">
											<optgroup label="">
												<option value="">Pilih</option>
												<?php  
													foreach ($barang as $result):
												?>
													<option 
														<?php 
															if ($type=='update') 
																if ($detail_terima->id_barang==$result->id_barang) {
																		echo "selected";
																	}	
														?>
														value="<?= $result->id_barang ?>"><?= $result->nm_barang ?>
													</option>
												<?php  
													endforeach;
												?>
											</optgroup>
										</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Dari Supplier</label>
										<div class="col-lg-4">
										<select required class="select-search form-control" name="id_supp">
											<optgroup label="">
												<option value="">Pilih</option>
												<?php  
													foreach ($supplier as $result):
												?>
													<option 
														<?php  
															if ($type=='update') 
																if ($terima->id_supp==$result->id_supp) {
																		echo "selected";
																	}	
														?>
														value="<?= $result->id_supp ?>"><?= $result->nm_supp ?>
													</option>
												<?php  
													endforeach;
												?>
											</optgroup>
										</select>
										</div>
									</div>
									<!-- <div class="form-group">
										<label class="control-label col-lg-2">Tgl Masuk</label>
										<div class="col-lg-4">
											<input type="date" class="form-control" name="tgl_masuk" value="<?= ($type=='create') ? '' : $pengirim->tgl_masuk  ?>" required>
										</div>
									</div> -->
									<div class="form-group">
										<label class="control-label col-lg-2">Jumlah</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="Jumlah" value="<?= ($type=='create') ? '' : $detail_terima->Jumlah  ?>" required>
										</div>
									</div>
								</fieldset>
								<div class="text-right">
									<button type="submit" class="btn btn-primary"><?= ($type=='create') ? 'Simpan' : 'Edit'  ?><i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</form>
						</div>
					</div>
					<!-- /form horizontal -->
				</div>
			</div>
	
