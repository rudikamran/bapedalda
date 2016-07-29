<link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/datatables/dataTables.bootstrap.css">

<div class="box">
   <div class="box-body">
	<span onClick="window.location.reload()" class="btn btn-primary"><i class="fa fa-refresh"></i></span>
	<a href="#input" data-toggle="modal" class="btn btn-primary"> <i class="fa fa-plus-circle"></i> </a>
	<a target="_blank" href="<?php echo site_url('reportkeluar/cetak');?>" name="cetak_pdf" id="cetak_pdf" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-print"></span></a>
	<hr>	
	<table id="" class="table table-bordered table-striped">		
			<?php 

			$no=1; 
			?>
			<thead>	
			<tr>
				<th>No.</th>
				<th>Tanggal</th>
				<th>Nama Pegawai</th>
				<th>Nama Barang</th>			
				<th>Jumlah</th>
				<th>Ruang</th>				
				<th>Keterangan</th> 
				<th><center>Operasi</center></th>		
			</tr>
			</thead>
		<tbody>
		<?php foreach ($item->result() as $r) { ?>
			<tr id="item<?php echo $r->id_keluar ?>">
				<td width="10"><?php echo $no++."."; ?></td>
				<td><?php echo $r->tanggal; ?></td>
				<td><?php echo $r->nm_pegawai; ?></td>
				<td><?php echo $r->nm_barang; ?></td>
				<td><?php echo $r->jumlah; ?></td>
				<td><?php echo $r->nm_ruang; ?></td>
				<td><?php echo $r->ket; ?></td>

				<td align="center" width="200">
					<a href="" onclick="delete_item(<?php echo $r->id_keluar; ?>)" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>


				</td>	
			</tr>
		<?php 

	}
		 ?>
			
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