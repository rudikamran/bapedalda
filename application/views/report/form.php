<div class="" id="" >

		<div class="modal-body">
		<form class="form-horizontal" method="POST" action="<?php base_url('report/lap_masuk') ?>">
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
	<form class="form-horizontal" target="_blank" method="GET" action="<?php base_url('report/cetak') ?>">
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
				<th>Dari</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
				<th>Satuan</th>
				<th><center>Harga</center></th>				
				<th>Kegiatan</th>
				<th>Kategori</th>
				<th><center>Jumlah Biaya</center></th>					
				<th>Keterangan</th> 	
			</tr>
			</thead>
		<tbody>
		<?php foreach (@$record->result() as $r) { ?>
			<tr id="record<?php echo $r->id_brg_msk ?>">
				<td width="10"><?php echo $no++."."; ?></td>
				<td><?php echo $r->tanggal; ?></td>
				<td><?php echo $r->dari; ?></td>
				<td><?php echo $r->nm_barang; ?></td>
				<td><?php echo $msk = $r->masuk; ?></td>
				<td><?php echo $r->nm_satuan; ?></td>
				<td><?php echo $hrg = $r->harga; ?></td>
				<td><?php echo $r->nm_kegiatan; ?></td>
				<td><?php echo $r->nm_kategori; ?></td>
				<td><?php @$sub_total = $msk * $hrg; echo @$sub_total;?></td>
				<td><?php echo $r->ket; ?></td>				
			</tr>
		<?php 

		@$total += @$sub_total; 

	}
		 ?>
			<tr>
				<td colspan="9">Total</td>
				<td align="right"><b><?php echo "Rp. "; echo @$total>0?number_format(@$total,2,',','.'):'0'; ?></b></td>
			</tr>
		</tbody>
		<tr>
			
			<td>
				<a target="_blank" href="<?php echo site_url('report/cetak?mulai='.$mulai.'&selesai='.$selesai.'');?>" name="cetak_pdf" id="cetak_pdf" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-print"></span></a>
			</td>
		</tr>
	</table>
</form>
	</div>
</div>
