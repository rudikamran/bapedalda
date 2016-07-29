<div class="modal fade" id="input" role="dialog">
<div class="modal-dialog">
	<div class="modal-content">
		<form action="" id="form" class="form-horizontal">
			<div class="modal-header">
				<h4>Permintaan</h4>
			</div>
			<div class="modal-body">
				<div class="form-group">
					<label for="tanggal" class="col-lg-3 control-label">Tanggal :</label>
					<div class="col-lg-9"><input type="date" id="tanggal" class="form-control" placeholder="Tanggal" autofocus></div>
				</div>	
				<div class="form-group">
					<label for="nm_pegawai" class="col-lg-3 control-label">Nama Pegawai :</label>
					<div class="col-lg-9"><input type="text" id="nm_pegawai" class="form-control" placeholder="Nama Pegawai" autofocus></div>
				</div>	
				<div class="form-group">
					<label for="kd_barang" class="col-lg-3 control-label">Nama Barang :</label>
					<div class="col-lg-9">
						<select id="kd_barang" name="kd_barang" class="form-control">
						<option>-Pilih-</option>
							<?php 
							$query = "SELECT pd.*, b.kd_barang, b.nm_barang
								 FROM tb_brg_msk as pd , tb_barang as b
								 WHERE pd.kd_barang = b.kd_barang and jumlah>0 ORDER by pd.tanggal DESC";
							$barang = $this->db->query($query);
							foreach ($barang->result() as $r) { ?>
								<option value="<?php echo $r->id_brg_msk; ?>"><?php echo $r->nm_barang; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>				
				<div class="form-group">
					<label for="harga" class="col-lg-3 control-label">Jumlah:</label>
					<div class="col-lg-9"><input type="text" id="jumlah" class="form-control" placeholder="Jumlah"></div>
				</div>
				
				<div class="form-group">
					<label for="nm_ruang" class="col-lg-3 control-label">Ruang :</label>
					<div class="col-lg-9">
						<select  id="nm_ruang" name="nm_ruang" class="form-control">
						<option>-Ruang-</option>
							<?php 
							$ruang = $this->db->get('tb_ruang');
							foreach ($ruang->result() as $r) { ?>
								<option value="<?php echo $r->nm_ruang; ?>"><?php echo $r->nm_ruang; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>	
			
				<div class="form-group">
					<label for="ket" class="col-lg-3 control-label">Ket:</label>
					<div class="col-lg-9"><input type="text" id="ket" class="form-control" placeholder="Keterangan"></div>
				</div>	
		
			</div>

			<div class="modal-footer">
				<a href="#" class="btn btn-default btn-sm" data-dismiss="modal">Batal</a>
				<button type="button" onclick="add_keluar()" id="add" class="btn btn-primary btn-sm" data-dismiss="modal">Tambah Barang</button>
			</div>
		</form>
	</div>
</div>
</div> <!-- end show modal -->