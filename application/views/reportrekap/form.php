<div class="" id="" >

		<div class="modal-body">
		<form class="form-horizontal" method="POST" action="<?php base_url('reportrekap/lap_rekap') ?>">
				<div class="form-group">
					<label for="mulai" class="col-lg-1 control-label">Mulai</label>
					<div class="col-lg-3"><input type="date" name="mulai" id="mulai" class="form-control" placeholder="" autofocus></div>
				</div>	
				<div class="form-group">
					<label for="selesai" class="col-lg-1 control-label">Selesai </label>
					<div class="col-lg-3"><input type="date" name="selesai" id="selesai" class="form-control" placeholder="selesai" autofocus></div>
				</div>	
				<div class="form-group">
					<div class="col-lg-5 col-lg-offset-1">
					<button type="submit" name="tgl" class="btn btn-primary btn-sm" data-dismiss="modal">Lihat</button>
					</div>
				</div>				
			
		</form>
		</div>
</div>

<div class="box" >
   <div class="box-body">	
	<hr>	
	<form class="form-horizontal" target="_blank" method="GET" action="<?php base_url('reportrekap/cetak') ?>">
	<input type="hidden" name="mulai" value="<?php echo $mulai ?>">
	<input type="hidden" name="selesai" value="<?php echo $selesai ?>">
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
        	<th>Jumlah Biaya</th>
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
				<td><?php @$sub_total = $sisa * $hrg; echo @$sub_total;?></td>			
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