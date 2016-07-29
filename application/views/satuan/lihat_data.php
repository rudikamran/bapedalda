<body onload="load_data()"></body>
<script type="text/javascript">

function load_data()
{
	$.ajax({
		type:"GET",
		url :"satuan/item",
		data:"",
		success:function(html){
			$("#list").html(html);
		}
	})
}

function add_satuan()
{
	var nm_satuan = $("#nm_satuan").val();
			$.ajax({
			type:"GET",
			url :"satuan/insert",
			data:"nm_satuan="+nm_satuan,
			success:function(html){
				load_data();
				$('#form_input').trigger("reset");	
			}
		})
	
}

function get_id(id_satuan)
{
	$.ajax({
		type:"GET",
		url :"satuan/get_id",
		data:"id_satuan="+id_satuan,
		success:function(html){
			$("#edit").html(html);
		}
	})
}

function update()
{
	var id_satuan = $("#id_satuan").val();
	var nm_satuan = $("#nm_satuan").val();
			$.ajax({
			type:"GET",
			url :"satuan/save_update",
			data:"id_satuan="+id_satuan+"&nm_satuan="+nm_satuan,
			success:function(html){
				load_data();
				alert("Update Sukses");
			}
		})
	
}

function delete_item(id_satuan)
{
	$.ajax({
		type:"GET",
		url :"satuan/delete",
		data:"id_satuan="+id_satuan,
		success:function(html){
			$("#item"+id_satuan).hide(400);
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

