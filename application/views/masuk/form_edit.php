<div class="modal-dialog">
	<div class="modal-content">
		<form action="" class="form-horizontal">
			<div class="modal-header">
				<h4>Edit Barang Masuk</h4>
			</div>
			<input type="hidden" id="id_brg_msk" value="<?php echo $r['id_brg_msk']; ?>">
			<div class="modal-body">
				<div class="form-group">
					<label for="tanggal" class="col-lg-3 control-label">Tanggal :</label>
					<div class="col-lg-9"><input type="date" id="tanggal" value="<?php echo $r['tanggal']; ?>" class="form-control" placeholder="Tanggal" autofocus></div>
				</div>	
				<div class="form-group">
					<label for="dari" class="col-lg-3 control-label">Dari :</label>
					<div class="col-lg-9"><input type="text" id="dari" value="<?php echo $r['dari']; ?>" class="form-control" placeholder="Dari" autofocus></div>
				</div>	
				<div class="form-group">
					<label for="kd_barang" class="col-lg-3 control-label">Kode Barang :</label>
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
					<div class="col-lg-9"><input type="text" id="jumlah" value="" class="form-control" placeholder="Jumlah"></div>
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
					<div class="col-lg-9"><input type="text" id="harga" value="" class="form-control" placeholder="Harga"></div>
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
					<div class="col-lg-9"><input type="text" id="ket" value="" class="form-control" placeholder="Keterangan"></div>
				</div>

			</div>		
				<div class="modal-footer">
				<a href="#" class="btn btn-default btn-sm" data-dismiss="modal">Batal</a>
				<button type="button" onclick="save()" class="btn btn-primary btn-sm" data-dismiss="modal">Simpan</button>	
			</div>
		</form>
	</div>
</div>