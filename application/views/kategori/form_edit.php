
<div class="modal-dialog">
	<div class="modal-content">
		<form action="" class="form-horizontal">
			<div class="modal-header">
				<h4>Edit Kategori</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="id" value="<?php echo $r['id_kategori']; ?>">
				<div class="form-group">
					<label for="nama_kategori" class="col-lg-3 control-label">Nama Kategori :</label>
					<div class="col-lg-9"><input type="text" id="nm_kategori" value="<?php echo $r['nama_kategori']; ?>" class="form-control" placeholder="Nama kategori" autofocus></div>
				</div>
			</div>
			<div class="modal-footer">
				<p class="btn btn-default btn-sm" data-dismiss="modal">Tutup</p>
				<button type="button" onclick="update()" class="btn btn-primary btn-sm" data-dismiss="modal">Simpan</button>
			</div>
		</form>	
	</div>
</div>