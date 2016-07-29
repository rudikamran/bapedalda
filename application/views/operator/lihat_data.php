<body onload="load_data()"></body>
<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">

function load_data()
{
	$.ajax({
		type:"GET",
		url :"operator/item",
		data:"",
		success:function(html){
			$("#list").html(html);
		}
	})
}

function add()
{
	var nama_lengkap   = $("#nama_lengkap").val();
	var username       = $("#username").val();
	var password       = $("#password").val();
	var level          = $("#level").val();
	if (nama_lengkap=='') {
		$("#nama_lengkap").focus();
	} else if (username=='') {
		$("#username").focus();
	} else if (password=='') {
		$("#password").focus();
	} else {
		$.ajax({
			type:"GET",
			url :"operator/create",
			data:"nama_lengkap="+nama_lengkap+"&username="+username+"&password="+password+"&level="+level,
			success:function(html){
				load_data();
				$("#form_input").trigger("reset");
			}
		})
	}
}

function get_id(id_operator)
{
	$.ajax({
		type:"GET",
		url :"operator/get_id",
		data:"id_operator="+id_operator,
		success:function(html){
			$("#edit").html(html);
		}
	})
}

function update()
{
	var id_operator     = $("#id_operator").val();
	var nama_lengkap    = $("#nama_lengkap").val();
	var username        = $("#username").val();
	var password        = $("#password").val();
	var level           = $("#level").val();
	  
		$.ajax({
			type:"GET",
			url :"operator/update",
			data:"id_operator="+id_operator+"&nama_lengkap="+nama_lengkap+"&username="+username+"&password="+password+"&level="+level,
			success:function(html){
				load_data();
				alert("Update Sukses");
			}
		});
	
}

function delete_item(id_operator)
{
	$.ajax({
		type:"GET",
		url :"operator/delete",
		data:"id_operator="+id_operator,
		success:function(html){
			$("#item"+id_operator).hide(400);
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