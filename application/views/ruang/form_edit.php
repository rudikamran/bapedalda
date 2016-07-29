<div class="modal-dialog">
	<div class="modal-content">
		<form action="" class="form-horizontal">
			<div class="modal-header">
				<h4>Tambah Ruang</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="id_ruang" value="<?php echo $r['id_ruang']; ?>">
				<div class="form-group">
					<label for="nm_ruang" class="control-label col-lg-3">Nama Ruang :</label>
					<div class="col-lg-9"><input type="text" id="nm_ruang" value="<?php echo $r['nm_ruang'] ?>" class="form-control" placeholder="Nama Ruang"></div>
				</div>
			</div>
			<div class="modal-footer">
				<p class="btn btn-default btn-sm" data-dismiss="modal">Tutup</p>
				<button type="button" onclick="update()" class="btn btn-primary btn-sm" data-dismiss="modal">Simpan</button>
			</div>
		</form>
	</div>
</div>	