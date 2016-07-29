<body onload="load_data()"></body>
<script type="text/javascript">

function load_data()
{
	$.ajax({
		type:"GET",
		url :"ruang/item",
		data:"",
		success:function(html){
			$("#list").html(html);
		}
	})
}

function add_ruang()
{
	var nm_ruang = $("#nm_ruang").val();
			$.ajax({
			type:"GET",
			url :"ruang/insert",
			data:"nm_ruang="+nm_ruang,
			success:function(html){
				load_data();
				$('#form_input').trigger("reset");	
			}
		})
	
}

function get_id(id_ruang)
{
	$.ajax({
		type:"GET",
		url :"ruang/get_id",
		data:"id_ruang="+id_ruang,
		success:function(html){
			$("#edit").html(html);
		}
	})
}

function update()
{
	var id_ruang = $("#id_ruang").val();
	var nm_ruang = $("#nm_ruang").val();
			$.ajax({
			type:"GET",
			url :"ruang/save_update",
			data:"id_ruang="+id_ruang+"&nm_ruang="+nm_ruang,
			success:function(html){
				load_data();
				alert("Update Sukses");
			}
		})
	
}

function delete_item(id_ruang)
{
	$.ajax({
		type:"GET",
		url :"ruang/delete",
		data:"id_ruang="+id_ruang,
		success:function(html){
			$("#item"+id_ruang).hide(400);
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

