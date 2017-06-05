<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="<?= base_url('superuser') ?>"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="<?= base_url('superuser/supplier') ?>">Supplier</a></li>
							<li class="active"><?= ($type=="create") ? 'Tambah Data Supplier' : 'Perbarui Data Supplier' ?></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->
				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Tambah data Supplier</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" id="form_supplier" action="<?= ($type=='create') ? base_url('superuser/supplier/created') : base_url('superuser/supplier/updated/'.$id_supp->id_supp) ?>" method="post">
								<fieldset class="content-group">
									<div class="form-group">
										<label class="control-label col-lg-2">ID Supplier</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="id_supplier" value="<?=  ($type=='create') ? '' : $id_supp->id_supp  ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Nama Supplier</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="nma_supp" value="<?=  ($type=='create') ? '' : $id_supp->nm_supp  ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Alamat</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="alamat_supp" value="<?=  ($type=='create') ? '' : $id_supp->alamat_supp  ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-lg-2">Telpon</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" name="telp_supp" value="<?=  ($type=='create') ? '' : $id_supp->telp_supp  ?>" required>
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