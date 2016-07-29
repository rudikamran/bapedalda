<body onload="load_data()"></body>
<script type="text/javascript">

function load_data()
{
	$.ajax({
		type:"GET",
		url :"kategori/item",
		data:"",
		success:function(html){
			$("#list").html(html);
		}
	})
}

function add()
{
	var nama_kategori  = $("#nama_kategori").val();
	if (nama_kategori=='') {
		$("#nama_kategori").focus();
	} else {
		$.ajax({
			type:"GET",
			url :"kategori/create",
			data:"nama_kategori="+nama_kategori,
			success:function(html){
				load_data();
				$('#form_input').trigger("reset");
			}
		})
	}
}

function get_id(id)
{
	$.ajax({
		type:"GET",
		url :"kategori/get_id",
		data:"id="+id,
		success:function(html){
			$("#edit").html(html);
		}
	})
}

function update()
{
	var id 		      = $("#id").val();
	var nama_kategori = $("#nama_kategori").val();
	if (nama_kategori=='') {
		$("#nama_kategori").focus();
	} else {
		$.ajax({
			type:"GET",
			url :"kategori/update",
			data:"id="+id+"&nama_kategori="+nama_kategori,
			success:function(html){
				load_data();
				alert("Update Sukses");
			}
		})
	}
}

function delete_item(id)
{
	$.ajax({
		type:"GET",
		url :"kategori/delete",
		data:"id="+id,
		success:function(html){
			$("#item"+id).hide(400);
		}
	})
}

</script>


<div id="edit" class="modal fade" role="dialog">
	<!-- load form edit -->
</div>

<div id="list">
	<!-- load data kategori -->
</div>

<div id="input" class="modal fade" role="dialog">
	<?php include 'form_input.php'; ?>
</div>
