<link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/datatables/dataTables.bootstrap.css">

<div class="box">
   <div class="box-body">
	<span onClick="window.location.reload()" class="btn btn-primary"><i class="fa fa-refresh"></i></span>
	<a href="#input" data-toggle="modal" class="btn btn-primary"> <i class="fa fa-plus-circle"></i> </a>
	<hr>	
	<table id="example2" class="table table-bordered table-striped">		
			<?php $no=1; ?>
			<thead>
			<tr>
				<th>No.</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Tahun</th>		
				<th><center>Operasi</center></th>		
			</tr>
			</thead>			
		<tbody>
		<?php foreach ($item->result() as $r) { ?>
			<tr id="item<?php echo $r->id_barang ?>">
				<td width="10"><?php echo $no++."."; ?></td>
				<td><?php echo $r->kd_barang; ?></td>
				<td><?php echo $r->nm_barang; ?></td>
				<td><?php echo $r->tahun; ?></td>
				<td align="center" width="200">
					<p href="#edit" data-toggle="modal" onclick="get_id(<?php echo $r->id_barang; ?>)" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit"></span></p>
					<p href="" onclick="delete_item(<?php echo $r->id_barang ?>)" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></p>
				</td>	
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