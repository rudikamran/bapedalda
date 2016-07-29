<div class="" id="" >

		<div class="modal-body">
		<form class="form-horizontal" method="POST" action="<?php base_url('reportkeluar/lap_keluar') ?>">
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
<div class="box">
   <div class="box-body">	
	<hr>	
	<form class="form-horizontal" target="_blank" method="GET" action="<?php base_url('reportkeluar/cetak') ?>">
	<input type="hidden" name="mulai" value="<?php echo $mulai ?>">
	<input type="hidden" name="selesai" value="<?php echo $selesai ?>">
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
			</tr>
			</thead>
		<tbody>
		<?php foreach ($record->result() as $r) { ?>
			<tr id="record<?php echo $r->id_keluar ?>">
				<td width="10"><?php echo $no++."."; ?></td>
				<td><?php echo $r->tanggal; ?></td>
				<td><?php echo $r->nm_pegawai; ?></td>
				<td><?php echo $r->nm_barang; ?></td>
				<td><?php echo $r->jumlah; ?></td>
				<td><?php echo $r->nm_ruang; ?></td>
				<td><?php echo $r->ket; ?></td>

				
			</tr>
		<?php 

	}
		 ?>
			
		</tbody>
		<tr>
			<td>
					<a target="_blank" href="<?php echo site_url('reportkeluar/cetak?mulai='.$mulai.'&selesai='.$selesai.'');?>" name="cetak_pdf" id="cetak_pdf" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-print"></span></a>
				</td>	
		</tr>
	</table>

	</div>
</div>	