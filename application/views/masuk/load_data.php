<link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/datatables/dataTables.bootstrap.css">

<div class="box">
   <div class="box-body">
	<span onClick="window.location.reload()" class="btn btn-primary"><i class="fa fa-refresh"></i></span>
	<a href="#input" data-toggle="modal" class="btn btn-primary"> <i class="fa fa-plus-circle"></i> </a>
	
	<hr>	
	<table id="" class="table table-bordered table-striped">		
			<?php 

			$no=1; 
			$total = "";
			?>
			<thead>	
			<tr>
				<th>No.</th>
				<th>Tanggal</th>
				<th>Dari</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Satuan</th>
				<th><center>Harga</center></th>				
				<th>Kegiatan</th>
				<th>Kategori</th>
				<th><center>Sub Total</center></th>					
				<th>Keterangan</th> 
				<th><center>Operasi</center></th>		
			</tr>
			</thead>
		<tbody>
		<?php foreach ($item->result() as $r) { ?>
			<tr id="item<?php echo $r->id_brg_msk ?>">
				<td width="10"><?php echo $no++."."; ?></td>
				<td><?php echo $r->tanggal; ?></td>
				<td><?php echo $r->dari; ?></td>
				<td><?php echo $r->nm_barang; ?></td>
				<td><?php echo $jml = $r->jumlah; ?></td>
				<td><?php echo $r->nm_satuan; ?></td>
				<td><?php echo $hrg = $r->harga; ?></td>
				<td><?php echo $r->nm_kegiatan; ?></td>
				<td><?php echo $r->nm_kategori; ?></td>
				<td><?php $sub_total = $jml * $hrg; echo $sub_total;?></td>
				<td><?php echo $r->ket; ?></td>

				<td align="center" width="200">	
				    <p href="#edit" data-toggle="modal" onclick="get_id(<?php echo $r->id_brg_msk; ?>)" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit"></span></p>			
					<p href="" onclick="delete_item(<?php echo $r->id_brg_msk; ?>)" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></p>

				</td>	
			</tr>
		<?php 

		$total += $sub_total; 

	}
		 ?>
			<tr>
				<td colspan="9">Total</td>
				<td align="right"><b><?php echo "Rp. "; echo @$total>0?number_format(@$total,2,',','.'):'0'; ?></b></td>
			</tr>
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