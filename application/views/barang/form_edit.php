<div class="modal-dialog">
	<div class="modal-content">
		<form action="" class="form-horizontal">
			<div class="modal-header">
				<h4>Edit Barang</h4>
			</div>
			<input type="hidden" id="id_barang" value="<?php echo $r['id_barang']; ?>">
			<div class="modal-body">
				<div class="form-group">
					<label for="kode_barang" class="col-lg-3 control-label">Kode Barang :</label>
					<div class="col-lg-9"><input type="text" id="kd_barang" value="<?php echo $r['kd_barang']; ?>" class="form-control" readonly></div>
				</div>
				<div class="form-group">
					<label for="nama_barang" class="col-lg-3 control-label">Nama Barang :</label>
					<div class="col-lg-9"><input type="text" id="nm_barang" value="<?php echo $r['nm_barang']; ?>" class="form-control" required></div>
				</div>
				<div class="form-group">
					<label for="nama_barang" class="col-lg-3 control-label">Tahun :</label>
					<div class="col-lg-9"><input type="text" id="tahun" value="<?php echo $r['tahun']; ?>" class="form-control" required></div>
				</div>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-default btn-sm" data-dismiss="modal">Batal</a>
				<button type="button" onclick="save()" class="btn btn-primary btn-sm" data-dismiss="modal">Simpan</button>	
			</div>
		</form>
	</div>
</div>