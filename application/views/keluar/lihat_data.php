<?php include 'form.php'; ?>
<body onload="load_data()"> </body>
<script type="text/javascript"> 
	function load_data()
	{
		$.ajax({
			type:"GET",
			url :"keluar/item",
			data:"",
			success:function(html){
				$("#list").html(html);
			}
		});
	}

	function add_keluar()
	{
		var tanggal		 = $("#tanggal").val();
		var nm_pegawai	 = $("#nm_pegawai").val();
		var kd_barang    = $("#kd_barang").val();
		var jumlah		 = $("#jumlah").val();
		var nm_ruang     = $("#nm_ruang").val();
		var ket 	     = $("#ket").val();
			
		if (tanggal=='') {
			$("#tanggal").focus();
		}else if (nm_pegawai==''){
			$("#nm_pegawai").focus();
			}else if (kd_barang==''){
			$("#kd_barang").focus();
			}else if (jumlah==''){
			$("#jumlah").focus();
			}else if (nm_ruang==''){
			$("#nm_ruang").focus();
			}else if (ket==''){
			$("#ket").focus();
			} else	{
				$.ajax({
				type:"GET",
				url :"keluar/insert",
				data:"tanggal="+tanggal+"&nm_pegawai="+nm_pegawai+"&kd_barang="+kd_barang+"&jumlah="+jumlah+"&nm_ruang="+nm_ruang+"&ket="+ket,
					success:function(html){
					load_data();
					$('#form').trigger("reset");
					}
							});
			
									}	
	}

	function get_id(id_keluar)
	{
		$.ajax({
			type:"GET",
			url :"keluar/get_id",
			data:"id_keluar="+id_keluar,
			success:function(html){
				$("#edit").html(html);
			}
		})
	}

	function detail()
	{
		$.ajax({
			type:"GET",
			url	:"keluar/detail",
			data:"id_keluar="+id_keluar,
			success:function(html){
				$("#read").html(html);
			}
		})
	}

	function save()
	{
		var id_keluar	 = $("#id_keluar").val();
		var tanggal		 = $("#tanggal").val();
		var nm_pegawai	 = $("#nm_pegawai").val();
		var kd_barang    = $("#kd_barang").val();
		var jumlah		 = $("#jumlah").val();
		var nm_ruang     = $("#nm_ruang").val();
		var ket 	     = $("#ket").val();
		$.ajax({
			type:"GET",
			url :"keluar/save_update",
			data:"id_keluar="+id_keluar+"&tanggal="+tanggal+"&nm_pegawai="+nm_pegawai+"&kd_barang="+kd_barang+"&jumlah="+jumlah+"&nm_ruang="+nm_ruang+"&ket="+ket,
			success:function(html){
				load_data();
				alert("Data tersimpan");
			}
		})
	}	

	function delete_item(id_keluar)
	{
		$.ajax({
				type:"GET",
				url :"keluar/delete",
				data:"id_keluar="+id_keluar,
				success:function(html){
					$("#keluar_item"+id_keluar).hide(400);
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

	
	
	

		



	



