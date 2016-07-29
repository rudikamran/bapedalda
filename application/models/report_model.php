<?php 
class Report_model extends CI_Model {

	function show()
	{		
		$query = "SELECT pd.*, b.kd_barang, b.nm_barang, pd.jumlah+c.jumlah as masuk
				 FROM tb_brg_msk as pd , tb_barang as b , tb_brg_keluar as c
				 WHERE pd.kd_barang = b.kd_barang and pd.id_brg_msk=c.kd_barang";

		return $this->db->query($query);
	}
	
	function show_period($mulai,$selesai)
	{
		$query = "SELECT pd.*, b.kd_barang, b.nm_barang, pd.jumlah+c.jumlah as masuk
				 FROM tb_brg_msk as pd , tb_barang as b , tb_brg_keluar as c
				 WHERE pd.kd_barang = b.kd_barang and pd.id_brg_msk=c.kd_barang and pd.tanggal BETWEEN '$mulai' and '$selesai' GROUP by pd.kd_barang ";

		return $this->db->query($query);
	}
}
?>	