<?php 
class Reportsedia_model extends CI_Model {

	function show()
	{		
	$query = "SELECT a.id_barang, b.tanggal, a.nm_barang, a.tahun, b.jumlah, b.nm_satuan, b.harga, b.ket
			FROM tb_barang a, tb_brg_msk b, tb_brg_keluar c
			WHERE a.kd_barang=b.kd_barang and b.id_brg_msk=c.kd_barang";
		return $this->db->query($query);
	}
	
	function show_period($mulai,$selesai)
	{
		$query = "SELECT a.id_barang, b.tanggal, a.nm_barang, a.tahun, b.jumlah, b.nm_satuan, b.harga, b.ket
			FROM tb_barang a, tb_brg_msk b, tb_brg_keluar c
			WHERE a.kd_barang=b.kd_barang and b.id_brg_msk=c.kd_barang and c.tanggal BETWEEN '$mulai' and '$selesai'";
		return $this->db->query($query);
	}
}
?>	