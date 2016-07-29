
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/datatables/dataTables.bootstrap.css">

<?php 
	$level = $this->session->userdata('level');
?>

<div class="box">
   <div class="box-body">
	<span onClick="window.location.reload()" class="btn btn-primary"><i class="fa fa-refresh"></i></span>
	<?php if ($level=='admin') { ?>
		<a href="#input" data-toggle="modal" class="btn btn-primary"> <i class="fa fa-plus-circle"></i> </a>
	<?php } ?>
	<hr>
	<table id="" class="table table-bordered table-striped">
		<?php $no=1; ?>
		<thead>
			<tr>
				<th>No.</th>
				<th>Username</th>
				<th>Nama Lengkap</th>
				<th>Last Login</th>
				<th>Level</th>
				<?php if ($level=='admin'){ ?>
					<th><center>Operasi</center></th>
				<?php } ?>
			</tr>
		</thead>	
		<tbody>
		<?php foreach ($item->result() as $r) { ?>
			<tr id="item<?php echo $r->id_operator ?>">
				<td width="10"><?php echo $no++."."; ?></td>
				<td><?php echo $r->username; ?></td>
				<td><?php echo $r->nama_lengkap; ?></td>
				<td><?php echo $r->last_login; ?></td>
				<td><?php echo $r->level; ?></td>

				<?php if ($level=='admin') { ?>
					<td align="center">
						<p href="#edit" data-toggle="modal" onclick="get_id(<?php echo $r->id_operator ?>)" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit"></span></p>
						<p href="" onclick="delete_item(<?php echo $r->id_operator ?>)" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash")></span></p>
					</td>
				<?php } ?>
				
				
			</tr>	
		<?php } ?>
		</tbody>
	</table>
	</div>
</div>	

<!-- DataTables -->
<script src="<?php echo base_url(); ?>template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>template/plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
	
