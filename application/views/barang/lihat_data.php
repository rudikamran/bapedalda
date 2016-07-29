<body onload="load_data()"> </body>
<script type="text/javascript"> 
	function load_data()
	{
		$.ajax({
			type:"GET",
			url :"barang/item",
			data:"",
			success:function(html){
				$("#list").html(html);
			}
		});
	}

	function add_barang()
	{
		var kd_barang    = $("#kd_barang").val();
		var nm_barang    = $("#nm_barang").val();
		var tahun          = $("#tahun").val();
		
		if (kd_barang=='') {
			$("#kd_barang").focus();
		} else if (nm_barang=='') {
			$("#nm_barang").focus();
		} else if (tahun=='') {
			$("#tahun").focus();
		} else	{
			$.ajax({
				type:"GET",
				url :"barang/insert",
				data:"kd_barang="+kd_barang+"&nm_barang="+nm_barang+"&tahun="+tahun,
				success:function(html){
					load_data();
					$('#form_input').trigger("reset");
				}
			});
			
		}	
	}

	function get_id(id_barang)
	{
		$.ajax({
			type:"GET",
			url :"barang/get_id",
			data:"id_barang="+id_barang,
			success:function(html){
				$("#edit").html(html);
			}
		})
	}

	function save()
	{
		var id_barang	 = $("#id_barang").val();
		var kd_barang    = $("#kd_barang").val();
		var nm_barang    = $("#nm_barang").val();
		var tahun          = $("#tahun").val();
		$.ajax({
			type:"GET",
			url :"barang/save_update",
			data:"id_barang="+id_barang+"&kd_barang="+kd_barang+"&nm_barang="+nm_barang+"&tahun="+tahun,
			success:function(html){
				load_data();
				alert("Data tersimpan");
			}
		})
	}	

	function delete_item(id_barang)
	{
		$.ajax({
				type:"GET",
				url :"barang/delete",
				data:"id_barang="+id_barang,
				success:function(html){
					$("#barang_item"+id_barang).hide(400);
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

	
	<?php include 'form_input.php'; ?>
	

		



	



