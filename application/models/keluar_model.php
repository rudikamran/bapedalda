<?php 
class Keluar_model extends CI_Model {

	function show()
	{
		 $query = "SELECT * FROM tb_barang a, tb_brg_msk b, tb_brg_keluar c
			WHERE a.kd_barang=b.kd_barang and b.id_brg_msk=c.kd_barang";
		// $query = "SELECT pd.*, b.kd_barang, b.nm_barang
		// 		 FROM tb_brg_msk as pd , tb_barang as b
		// 		 WHERE pd.kd_barang = b.kd_barang";

		// $query = "SELECT b.kode_barang, b.nama_barang, pd.*
		// 		 FROM tb_pembelian_detail as pd, tb_barang as b
		// 		 WHERE pd.id_barang=b.id_barang and pd.status=0";


		return $this->db->query($query);
	}

	function insert()
	{		
		$tanggal	= $_GET['tanggal'];
		$nm_pegawai =$_GET['nm_pegawai'];
		$kd_barang  = $_GET['kd_barang'];
		$jumlah		= $_GET['jumlah'];		
		$nm_ruang = $_GET['nm_ruang'];
		$ket 	    = $_GET['ket'];
		
		$data = array('id_keluar'=>null, 'tanggal'=>$tanggal, 'nm_pegawai'=>$nm_pegawai, 'kd_barang'=>$kd_barang, 'jumlah'=>$jumlah, 'nm_ruang'=>$nm_ruang, 'ket'=>$ket);
		$this->db->insert('tb_brg_keluar', $data);
	}

	function get_id($id_keluar)
	{
		$param = array('id_keluar'=>$id_keluar);
		return $this->db->get_where('tb_brg_keluar', $param);
	}

	function update()
	{
		$id_keluar	= $_GET['id_keluar'];
		$tanggal	= $_GET['tanggal'];
		$nm_pegawai = $_GET['nm_pegawai'];
		$kd_barang  = $_GET['kd_barang'];
		$jumlah		= $_GET['jumlah'];		
		$nm_ruang   = $_GET['nm_ruang'];
		$ket 	    = $_GET['ket'];
		
		$data = array('tanggal'=>$tanggal, 'nm_pegawai'=>$nm_pegawai, 'kd_barang'=>$kd_barang, 'jumlah'=>$jumlah,'nm_ruang'=>$nm_ruang, 'ket'=>$ket);
		$this->db->where('id_keluar', $id_keluar);
		$this->db->update('tb_brg_keluar', $data);
	}

	function delete($id_keluar)
	{
		return $this->db->delete('tb_brg_keluar', array('id_keluar'=>$id_keluar));
	}


}


?>