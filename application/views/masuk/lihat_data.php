<?php include 'form.php'; ?>
<body onload="load_data()"> </body>
<script type="text/javascript"> 
	function load_data()
	{
		$.ajax({
			type:"GET",
			url :"masuk/item",
			data:"",
			success:function(html){
				$("#list").html(html);
			}
		});
	}

	function add_brg_msk()
	{
		var tanggal		 = $("#tanggal").val();
		var dari		 = $("#dari").val();
		var kd_barang    = $("#kd_barang").val();
		var jumlah		 = $("#jumlah").val();
		var nm_satuan	 = $("#nm_satuan").val();
		var harga	     = $("#harga").val();
		var nm_kegiatan  = $("#nm_kegiatan").val();
		var nm_kategori  = $("#nm_kategori").val();
		var ket 	     = $("#ket").val();
			
		if (tanggal=='') {
			$("#tanggal").focus();			
			}else if (dari==''){
			$("#dari").focus();
			}else if (kd_barang==''){
			$("#kd_barang").focus();
			}else if (jumlah==''){
			$("#jumlah").focus();
			}else if (nm_satuan==''){
			$("#nm_satuan").focus();
			}else if (harga==''){
			$("#harga").focus();
			}else if (nm_kegiatan==''){
			$("#nm_kegiatan").focus();
		    }else if (nm_kategori==''){
			$("#nm_kategori").focus();
			}else if (ket==''){
			$("#ket").focus();
			} else	{
				$.ajax({
				type:"GET",
				url :"masuk/insert",
				data:"tanggal="+tanggal+"&dari="+dari+"&kd_barang="+kd_barang+"&jumlah="+jumlah+"&nm_satuan="+nm_satuan+"&harga="+harga+"&nm_kegiatan="+nm_kegiatan+"&nm_kategori="+nm_kategori+"&ket="+ket,
					success:function(html){
					load_data();
					$('#form').trigger("reset");
					}
							});
			
									}	
	}

	function get_id(kd_barang)
	{
		$.ajax({
			type:"GET",
			url :"masuk/get_id",
			data:"kd_barang="+kd_barang,
			success:function(html){
				$("#edit").html(html);
			}
		})
	}

	function detail()
	{
		$.ajax({
			type:"GET",
			url	:"masuk/detail",
			data:"kd_barang="+kd_barang,
			success:function(html){
				$("#read").html(html);
			}
		})
	}

	function save()
	{
		var id_brg_msk   = $("#id_brg_msk").val();
		var tanggal		 = $("#tanggal").val();	
		var dari		 = $("#dari").val();	
		var kd_barang    = $("#kd_barang").val();
		var jumlah		 = $("#jumlah").val();
		var nm_satuan	 = $("#nm_satuan").val();
		var harga	     = $("#harga").val();
		var nm_kegiatan  = $("#nm_kegiatan").val();
		var nm_kategori  = $("#nm_kategori").val();
		var ket 	     = $("#ket").val();
		$.ajax({
			type:"GET",
			url :"masuk/save_update",
			data:"id_brg_msk="+id_brg_msk+"&tanggal="+tanggal+"&dari="+dari+"&kd_barang="+kd_barang+"&jumlah="+jumlah+"&nm_satuan="+nm_satuan+"&harga="+harga+"&nm_kegiatan="+nm_kegiatan+"&nm_kategori="+nm_kategori+"&ket="+ket,
			success:function(html){
				load_data();
				alert("Data tersimpan");
			}
		})
	}	

	function delete_item(id_brg_msk)
	{
		$.ajax({
				type:"GET",
				url :"masuk/delete",
				data:"id_brg_msk="+id_brg_msk,
				success:function(html){
					$("#masuk_item"+id_brg_msk).hide(400);
				}
			})
	}
</script> <!-- end script javascript -->



	<div id="edit" class="modal fade" role="dialog">
		<!-- load form edit -->
	</div>

	<div id="list">
		<!-- load data barang -->
	</div>

	
	
	

		



	



