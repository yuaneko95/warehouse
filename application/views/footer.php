	</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
</body>
	
	<script type="text/javascript" src="<?php echo base_url('') ?>assets/js/core/libraries/jquery_ui/interactions.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('') ?>assets/js/plugins/forms/selects/select2.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('') ?>assets/js/pages/form_inputs.js"></script>
	<script type="text/javascript" src="<?php echo base_url('') ?>assets/js/pages/form_select2.js"></script>

	<script type="text/javascript" src="<?php echo base_url('') ?>assets/js/cak-js.js"></script>
	<script type="text/javascript" src="<?php echo base_url('') ?>assets/js/sweetalert.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url('') ?>assets/js/pages/dashboard.js"></script>
	<script type="text/javascript" src="<?php echo base_url('') ?>assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('') ?>assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="<?php echo base_url('') ?>assets/js/plugins/pickers/daterangepicker.js"></script>
	
	<script type="text/javascript">
		function deleteIt(that){
		swal({   
			title: "Apa Anda Yakin ?",   
			text: "Anda Akan Menghapus Data Ini",   
			type: "warning",   
			showCancelButton: true,   
			confirmButtonColor: "#DD6B55",   
			confirmButtonText: "Ya, Hapus Data!",   
			closeOnConfirm: false 
		}, function(){   
			swal({   
					title: "Deleted",   
					text: "Data Anda Telah Di Hapus",   
					type: "success"
			},function(){
				redirect($(that).attr('data-url'));
			}); 
			
		});	
	}
	</script>

	<script type="text/javascript">
	$("#form_barang").submit(function(e){
			e.preventDefault();
			var formData = new FormData( $("#form_barang")[0] );

			$.ajax({
				url: 		$("#form_barang").attr('action'),
				type: 	"POST",
				data:  		new FormData(this),
          		processData: false,
          		contentType: false,
				beforeSend: function(){
					blockMessage($('#form_barang'),'Please Wait , <?= ($type =="create") ? "Menambahkan Barang" : "Memperbarui Barang" ?>','#fff');		
				}
			})
			.done(function(data){
				$('#form_barang').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '<?= ($type =="create") ? "Barang Di Buatkan" : "Barang Di Perbarui"  ?>'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("<?= base_url('superuser/barang') ?>");		
						return;
					}
				});
			})
			.fail(function() {
			    $('#form_barang').unblock();
				sweetAlert({
					title: 	"Opss!",
					text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
					type: 	"error",
				},
				function(){
					
				});
			 })
			
		})
	</script>

	<script type="text/javascript">
	$("#form_supplier").submit(function(e){
			e.preventDefault();
			var formData = new FormData( $("#form_supplier")[0] );

			$.ajax({
				url: 		$("#form_supplier").attr('action'),
				type: 	"POST",
				data:  		new FormData(this),
          		processData: false,
          		contentType: false,
				beforeSend: function(){
					blockMessage($('#form_supplier'),'Please Wait , <?= ($type =="create") ? "Menambahkan Supplier" : "Memperbarui Supplier" ?>','#fff');		
				}
			})
			.done(function(data){
				$('#form_supplier').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '<?= ($type =="create") ? "Supplier Di Buatkan" : "Supplier Di Perbarui"  ?>'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("<?= base_url('superuser/supplier') ?>");		
						return;
					}
				});
			})
			.fail(function() {
			    $('#form_supplier').unblock();
				sweetAlert({
					title: 	"Opss!",
					text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
					type: 	"error",
				},
				function(){
					
				});
			 })
			
		})
	</script>

	<script type="text/javascript">
	$("#form_agen").submit(function(e){
			e.preventDefault();
			var formData = new FormData( $("#form_agen")[0] );

			$.ajax({
				url: 		$("#form_agen").attr('action'),
				type: 	"POST",
				data:  		new FormData(this),
          		processData: false,
          		contentType: false,
				beforeSend: function(){
					blockMessage($('#form_agen'),'Please Wait , <?= ($type =="create") ? "Menambahkan Agen" : "Memperbarui Agen" ?>','#fff');		
				}
			})
			.done(function(data){
				$('#form_agen').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '<?= ($type =="create") ? "Agen Di Buatkan" : "Agen Di Perbarui"  ?>'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("<?= base_url('superuser/agen') ?>");		
						return;
					}
				});
			})
			.fail(function() {
			    $('#form_agen').unblock();
				sweetAlert({
					title: 	"Opss!",
					text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
					type: 	"error",
				},
				function(){
					
				});
			 })
			
		})
	</script>

	<script type="text/javascript">
	$("#form_pengirim").submit(function(e){
			e.preventDefault();
			var formData = new FormData( $("#form_pengirim")[0] );

			$.ajax({
				url: 		$("#form_pengirim").attr('action'),
				type: 	"POST",
				data:  		new FormData(this),
          		processData: false,
          		contentType: false,
				beforeSend: function(){
					blockMessage($('#form_pengirim'),'Please Wait , <?= ($type =="create") ? "Menambahkan Pengiriman" : "Memperbarui Pengiriman" ?>','#fff');		
				}
			})
			.done(function(data){
				$('#form_pengirim').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '<?= ($type =="create") ? "Pengiriman Di Buatkan" : "Pengiriman Di Perbarui"  ?>'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("<?= base_url('superuser/pengirim') ?>");		
						return;
					}
				});
			})
			.fail(function() {
			    $('#form_pengirim').unblock();
				sweetAlert({
					title: 	"Opss!",
					text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
					type: 	"error",
				},
				function(){
					
				});
			 })
			
		})
	</script>

	<script type="text/javascript">
	$("#form_sopir").submit(function(e){
			e.preventDefault();
			var formData = new FormData( $("#form_sopir")[0] );

			$.ajax({
				url: 		$("#form_sopir").attr('action'),
				type: 	"POST",
				data:  		new FormData(this),
          		processData: false,
          		contentType: false,
				beforeSend: function(){
					blockMessage($('#form_sopir'),'Please Wait , <?= ($type =="create") ? "Menambahkan Sopir" : "Memperbarui Sopir" ?>','#fff');		
				}
			})
			.done(function(data){
				$('#form_sopir').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '<?= ($type =="create") ? "Sopir Di Buatkan" : "Sopir Di Perbarui"  ?>'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("<?= base_url('superuser/sopir') ?>");		
						return;
					}
				});
			})
			.fail(function() {
			    $('#form_sopir').unblock();
				sweetAlert({
					title: 	"Opss!",
					text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
					type: 	"error",
				},
				function(){
					
				});
			 })
			
		})
	</script>
	<script type="text/javascript">
	$("#form_terima").submit(function(e){
			e.preventDefault();
			var formData = new FormData( $("#form_terima")[0] );

			$.ajax({
				url: 		$("#form_terima").attr('action'),
				type: 	"POST",
				data:  		new FormData(this),
          		processData: false,
          		contentType: false,
				beforeSend: function(){
					blockMessage($('#form_terima'),'Please Wait , <?= ($type =="create") ? "Menambahkan Barang Masuk" : "Memperbarui Barang Masuk" ?>','#fff');		
				}
			})
			.done(function(data){
				$('#form_terima').unblock();
				sweetAlert({
					title: 	((data.auth==false) ? "Opps!" : '<?= ($type =="create") ? "Barang Masuk Di Buatkan" : "Barang Masuk Di Perbarui"  ?>'),
					text: 	data.msg,
					type: 	((data.auth==false) ? "error" : "success"),
				},
				function(){
					if(data.auth!=false){
						redirect("<?= base_url('superuser/surat_terima') ?>");		
						return;
					}
				});
			})
			.fail(function() {
			    $('#form_terima').unblock();
				sweetAlert({
					title: 	"Opss!",
					text: 	"Ada Yang Salah! , Silahkan Coba Lagi Nanti",
					type: 	"error",
				},
				function(){
					
				});
			 })
			
		})
	</script>
	<script type="text/javascript">
		function bulk_delete()
		{
		    var id_barang = [];
		    $(".data-check:checked").each(function() {
		            id_barang.push(this.value);
		    });
		    if(id_barang.length > 0)
		    {
		        if(confirm('Are you sure you want to create report this '+id_barang.length+' data?'))
		        {
		            $.ajax({
		                type: "POST",
		                data: {id:id_barang},
		                url: "<?php echo site_url('superuser/ajax_bulk_report')?>",
		                dataType: "JSON",
		                success: function(data)
		                {
		                    if(data.status)
		                    {
		                        reload_table();
		                    }
		                    else
		                    {
		                        alert('Failed.');
		                    }
		                    
		                },
		                error: function (jqXHR, textStatus, errorThrown)
		                {
		                    alert('Error deleting data');
		                }
		            });
		        }
		    }
		    else
		    {
		        alert('no data selected');
		    }
		}

		function reload_table()
		{
		    table.ajax.reload(null,false); //reload datatable ajax 
		}
	</script>
</html>