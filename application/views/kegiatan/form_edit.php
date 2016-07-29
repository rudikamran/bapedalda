<div class="modal-dialog">
	<div class="modal-content">
		<form action="" class="form-horizontal">
			<div class="modal-header">
				<h4>Edit Kegiatan</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="id_kegiatan" value="<?php echo $r['id_kegiatan']; ?>">
				<div class="form-group">
					<label for="nm_kegiatan" class="control-label col-lg-3">Nama Kegiatan :</label>
					<div class="col-lg-9"><input type="text" id="nm_kegiatan" value="<?php echo $r['nm_kegiatan'] ?>" class="form-control" placeholder="Nama Kegiatan"></div>
				</div>
			</div>
			<div class="modal-footer">
				<p class="btn btn-default btn-sm" data-dismiss="modal">Tutup</p>
				<button type="button" onclick="update()" class="btn btn-primary btn-sm" data-dismiss="modal">Simpan</button>
			</div>
		</form>
	</div>
</div>	