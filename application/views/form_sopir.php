<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?= base_url('superuser') ?>"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="<?= base_url('superuser/sopir') ?>">Sopir</a></li>
							<li class="active"><?= ($type=="create") ? 'Tambah Data Sopir' : 'Perbarui Data Sopir' ?></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah data Sopir</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" id="form_sopir" action="<?= ($type=='create') ? base_url('superuser/sopir/created') : base_url('superuser/sopir/updated/'.$sopir->id_sopir) ?>" method="post">
								<fieldset class="content-group">
									<div class="form-group">
										<label class="control-label col-lg-2">ID Sopir</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="id_sopir" value="<?=  ($type=='create') ? '' : $sopir->id_sopir  ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Nama Sopir</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="nma_sopir" value="<?=  ($type=='create') ? '' : $sopir->nma_sopir  ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Alamat</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="alamat" value="<?=  ($type=='create') ? '' : $sopir->alamat  ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Tgl Lahir</label>
										<div class="col-lg-10">
											<input type="date" class="form-control" name="tgl_lahir" value="<?=  ($type=='create') ? '' : $sopir->tgl_lahir  ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Telpon</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="telp" value="<?=  ($type=='create') ? '' : $sopir->telpon  ?>" required>
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