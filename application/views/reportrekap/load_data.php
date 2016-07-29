
<link rel="stylesheet" href="<?php echo base_url(); ?>template/plugins/datatables/dataTables.bootstrap.css">

<div class="box">
   <div class="box-body">	
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
			<th>Nama Barang</th>
			<th>Harga Satuan</th>
			<th>Masuk</th>
       		<th>Keluar</th>	
        	<th>Sisa</th>
        	<th><center>Sub Total</center></th>
		</tr>
		</thead>			
		<tbody>
		<?php foreach ($record->result() as $r) { ?>
			<tr id="record<?php echo $r->id_barang ?>">
				<td width="10"><?php echo $no++."."; ?></td>
				<td><?php echo $r->tanggal; ?></td>
				<td><?php echo $r->nm_barang; ?></td>
				<td><?php echo $hrg = $r->harga; ?></td>
				<td><?php echo $msk = $r->masuk; ?></td>
        		<td><?php echo $r->keluar; ?></td>
       			<td><?php echo $r->sisa; ?></td>
				<td><?php @$sub_total = $msk * $hrg; echo @$sub_total;?></td>			
			</tr>	

				<?php 
  		  		$total += $hrg; 
   				 } ?>
   			<tr>
       			 <td colspan="7">Total</td>
      			 <td align="right"><b><?php echo "Rp. "; echo @$total>0?number_format(@$total,2,',','.'):'0'; ?></b></td>
        		<td></td>
      		</tr>
		</tbody>
			<tr>			
			<td>
				<a target="_blank" href="<?php echo site_url('reportrekap/cetak?mulai='.$mulai.'&selesai='.$selesai.'');?>" name="cetak_pdf" id="cetak_pdf" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-print"></span></a>
			</td>
			</tr>

	</table>
</form>
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