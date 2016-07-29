<?php 
class Reportkeluar_model extends CI_Model {

	function show()
	{
		 $query = "SELECT * FROM tb_barang a, tb_brg_msk b, tb_brg_keluar c
			WHERE a.kd_barang=b.kd_barang and b.id_brg_msk=c.kd_barang";
		return $this->db->query($query);
	}

	function show_period($mulai,$selesai)
	{
		 $query = "SELECT * FROM tb_barang a, tb_brg_msk b, tb_brg_keluar c
			WHERE a.kd_barang=b.kd_barang and b.id_brg_msk=c.kd_barang and c.tanggal BETWEEN '$mulai' and '$selesai'";
		return $this->db->query($query);
	}
}
?>