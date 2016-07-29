<div class="modal fade" id="input" role="dialog">
<div class="modal-dialog">
	<div class="modal-content">
		<form action="" id="form" class="form-horizontal">
			<div class="modal-header">
				<h4>Tambah Barang Masuk</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="tanggal" class="col-lg-3 control-label">Tanggal :</label>
					<div class="col-lg-9"><input type="date" id="tanggal" class="form-control" placeholder="Tanggal" autofocus></div>
				</div>	
				<div class="form-group">
					<label for="dari" class="col-lg-3 control-label">Dari :</label>
					<div class="col-lg-9"><input type="text" id="dari" class="form-control" placeholder="Dari" autofocus></div>
				</div>	
				<div class="form-group">
					<label for="kd_barang" class="col-lg-3 control-label">Nama Barang :</label>
					<div class="col-lg-9">
						<select id="kd_barang" name="kd_barang" class="form-control">
						<option>-Pilih-</option>
							<?php 
							$barang = $this->db->get('tb_barang');
							foreach ($barang->result() as $r) { ?>
								<option value="<?php echo $r->kd_barang; ?>"><?php echo $r->nm_barang; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>				
				<div class="form-group">
					<label for="harga" class="col-lg-3 control-label">Jumlah:</label>
					<div class="col-lg-9"><input type="text" id="jumlah" class="form-control" id="" placeholder="Jumlah"></div>
				</div>
				<div class="form-group">
					<label for="nm_satuan" class="col-lg-3 control-label">Satuan :</label>
					<div class="col-lg-9">
						<select id="nm_satuan" name="nm_satuan" class="form-control">
						<option>-Satuan-</option>
							<?php 
							$satuan = $this->db->get('tb_satuan');
							foreach ($satuan->result() as $r) { ?>
								<option value="<?php echo $r->nm_satuan; ?>"><?php echo $r->nm_satuan; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>	
				<div class="form-group">
					<label for="harga" class="col-lg-3 control-label">Harga:</label>
					<div class="col-lg-9"><input type="text" id="harga" class="form-control" id="" placeholder="Harga"></div>
				</div>
				<div class="form-group">
					<label for="nm_kegiatan" class="col-lg-3 control-label">Kegiatan :</label>
					<div class="col-lg-9">
						<select  id="nm_kegiatan" name="nm_kegiatan" class="form-control">
						<option>-Kegiatan-</option>
							<?php 
							$kegiatan = $this->db->get('tb_kegiatan');
							foreach ($kegiatan->result() as $r) { ?>
								<option value="<?php echo $r->nm_kegiatan; ?>"><?php echo $r->nm_kegiatan; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>	
				<div class="form-group">
					<label for="nm_kategori" class="col-lg-3 control-label">Kategori :</label>
					<div class="col-lg-9">
						<select id="nm_kategori"  name="nm_kategori" class="form-control">
						<option>-Kategori-</option>
							<?php 
							$kategori = $this->db->get('tb_kategori');
							foreach ($kategori->result() as $r) { ?>
								<option value="<?php echo $r->nm_kategori; ?>"><?php echo $r->nm_kategori; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="ket" class="col-lg-3 control-label">Ket:</label>
					<div class="col-lg-9"><input type="text" id="ket" class="form-control" id="" placeholder="Keterangan"></div>
				</div>	
		
			</div>

			<div class="modal-footer">
				<a href="#" class="btn btn-default btn-sm" data-dismiss="modal">Batal</a>
				<button type="button" onclick="add_brg_msk()" id="add" class="btn btn-primary btn-sm" data-dismiss="modal">Tambah Barang</button>
			</div>
		</form>
	</div>
</div>
</div> <!-- end show modal -->