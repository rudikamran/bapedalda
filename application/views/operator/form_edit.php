<div class="modal-dialog">
	<div class="modal-content">
		<form action="" class="form-horizontal">
			<div class="modal-header">
				<h4>Edit Operator</h4>
			</div>
			<div class="modal-body">
				<input type="hidden" id="id_operator" value="<?php echo $r['id_operator']; ?>">
				<div class="form-group">
					<label for="nama_lengkap" class="col-lg-3 control-label">Nama Lengkap :</label>
					<div class="col-lg-9"><input type="text" id="nama_lengkap" value="<?php echo $r['nama_lengkap'] ?>" class="form-control" placeholder="Nama lengkap"></div>
				</div>
				<div class="form-group">
					<label for="username" class="col-lg-3 control-label">Username :</label>
					<div class="col-lg-9"><input type="text" id="username" value="<?php echo $r['username'] ?>" class="form-control" placeholder="Username"></div>
				</div>
				<div class="form-group">
					<label for="password" class="col-lg-3 control-label">Password :</label>
					<div class="col-lg-9"><input type="text" id="password" class="form-control" placeholder="New password"></div>
				</div>
				<div class="form-group">
					<label for="level" class="col-lg-3 control-label">Level :</label>
					<div class="col-lg-9">
						<select id="level" class="form-control">
							<option value="pegawai">pegawai</option>
							<option value="admin" <?php echo $r['level']=='admin'?'selected':''; ?> >admin</option>
						</select>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<p class="btn btn-default btn-sm" data-dismiss="modal">Tutup</p>
				<button type="button" onclick="update()" class="btn btn-primary btn-sm" data-dismiss="modal">Simpan</button>
			</div>
		</form>
	</div>
</div>