<?php 
class Reportrekap_model extends CI_Model {

	function show()
	{		
	$query = "SELECT a.id_barang, b.tanggal, a.nm_barang, b.harga, b.jumlah+c.jumlah as masuk, c.jumlah as keluar, b.jumlah+c.jumlah-c.jumlah as sisa
			FROM tb_barang a, tb_brg_msk b, tb_brg_keluar c
			WHERE a.kd_barang=b.kd_barang and b.id_brg_msk=c.kd_barang";
		return $this->db->query($query);
	}
	
	function show_period($mulai,$selesai)
	{
		$query = "SELECT a.id_barang, b.tanggal, a.nm_barang, b.harga, b.jumlah+c.jumlah as masuk, c.jumlah as keluar, b.jumlah+c.jumlah-c.jumlah as sisa
			FROM tb_barang a, tb_brg_msk b, tb_brg_keluar c
			WHERE a.kd_barang=b.kd_barang and b.id_brg_msk=c.kd_barang and c.tanggal BETWEEN '$mulai' and '$selesai'";
		return $this->db->query($query);
	}
}
?>	