<div class="modal-dialog">
	<div class="modal-content">
		<form action="" class="form-horizontal">
			<div class="modal-header">
				<h4>Edit Satuan</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="id_satuan" value="<?php echo $r['id_satuan']; ?>">
				<div class="form-group">
					<label for="nm_satuan" class="control-label col-lg-3">Nama Satuan :</label>
					<div class="col-lg-9"><input type="text" id="nm_satuan" value="<?php echo $r['nm_satuan'] ?>" class="form-control" placeholder="Nama Satuan"></div>
				</div>
			</div>
			<div class="modal-footer">
				<p class="btn btn-default btn-sm" data-dismiss="modal">Tutup</p>
				<button type="button" onclick="update()" class="btn btn-primary btn-sm" data-dismiss="modal">Simpan</button>
			</div>
		</form>
	</div>
</div>	