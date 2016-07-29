<div class="modal fade" id="input" role="dialog">
<div class="modal-dialog">
	<div class="modal-content">
	<?php echo validation_errors(); ?>
		<form action="" id="form_input" class="form-horizontal">
			<div class="modal-header">
				<h4>Tambah Barang</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="kd_barang" class="col-lg-3 control-label">Kode Barang :</label>
					<div class="col-lg-9"><input type="text" id="kd_barang" class="form-control" placeholder="Kode Barang" autofocus required></div>
				</div>		
				<div class="form-group">
					<label for="nama_barang" class="col-lg-3 control-label">Nama Barang :</label>
					<div class="col-lg-9"><input type="text" id="nm_barang" class="form-control" placeholder="Nama Barang" autofocus></div>
				</div>				
				<div class="form-group">
					<label for="harga" class="col-lg-3 control-label">Tahun :</label>
					<div class="col-lg-9"><input type="text" id="tahun" class="form-control" id="" placeholder="Tahun"></div>
				</div>
		
			</div>

			<div class="modal-footer">
				<a href="#" class="btn btn-default btn-sm" data-dismiss="modal">Batal</a>
				<button type="button" onclick="add_barang()" id="add" class="btn btn-primary btn-sm" data-dismiss="modal">Tambah Barang</button>
			</div>
		</form>
	</div>
</div>
</div> <!-- end show modal -->