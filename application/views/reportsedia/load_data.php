
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
		    	<th>Tahun</th>
       		<th>Sisa Persediaan</th>	
        	<th>Satuan</th>
        	<th>Harga Satuan</th>
        	<th>Keterangan</th>			
			</tr>
			</thead>			
		<tbody>
		<?php foreach ($item->result() as $r) { ?>
		  <tr id="item<?php echo $r->id_barang ?>">
			    <td width="10"><?php echo $no++."."; ?></td>
          <td><?php echo $r->tanggal; ?></td>
			    <td><?php echo $r->nm_barang; ?></td>
			    <td><?php echo $r->tahun; ?></td>
         	<td><?php echo $jml = $r->jumlah; ?></td>
        	<td><?php echo $r->nm_satuan; ?></td>
        	<td><?php echo $hrg = $r->harga; ?></td>
       		<td><?php echo $r->ket; ?></td>				
			</tr>	

				<?php 
  		  	$total += $hrg; 	
   				 } ?>

   		   	<tr>
       			 <td colspan="6">Total</td>
      			 <td align="left"><b><?php echo "Rp. "; echo @$total>0?number_format(@$total,2,',','.'):'0'; ?></b></td>
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