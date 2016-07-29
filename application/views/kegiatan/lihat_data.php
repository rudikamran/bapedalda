<body onload="load_data()"></body>
<script type="text/javascript">

function load_data()
{
	$.ajax({
		type:"GET",
		url :"kegiatan/item",
		data:"",
		success:function(html){
			$("#list").html(html);
		}
	})
}

function add_kegiatan()
{
	var nm_kegiatan = $("#nm_kegiatan").val();
			$.ajax({
			type:"GET",
			url :"kegiatan/insert",
			data:"nm_kegiatan="+nm_kegiatan,
			success:function(html){
				load_data();
				$('#form_input').trigger("reset");	
			}
		})
	
}

function get_id(id_kegiatan)
{
	$.ajax({
		type:"GET",
		url :"kegiatan/get_id",
		data:"id_kegiatan="+id_kegiatan,
		success:function(html){
			$("#edit").html(html);
		}
	})
}

function update()
{
	var id_kegiatan = $("#id_kegiatan").val();
	var nm_kegiatan = $("#nm_kegiatan").val();
			$.ajax({
			type:"GET",
			url :"kegiatan/save_update",
			data:"id_kegiatan="+id_kegiatan+"&nm_kegiatan="+nm_kegiatan,
			success:function(html){
				load_data();
				alert("Update Sukses");
			}
		})
	
}

function delete_item(id_kegiatan)
{
	$.ajax({
		type:"GET",
		url :"kegiatan/delete",
		data:"id_kegiatan="+id_kegiatan,
		success:function(html){
			$("#item"+id_kegiatan).hide(400);
		}
	})
}

</script>


<div id="edit" class="modal fade" role="dialog">
	<!-- load form edit -->
</div>

<div id="list">
	<!-- load data supplier -->
</div>

<div id="input" class="modal fade" role="dialog">
	<?php include 'form_input.php'; ?>
</div>

