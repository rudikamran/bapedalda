<?php 
class Masuk_model extends CI_Model {

	function show()
	{
		$query = "SELECT pd.*, b.kd_barang, b.nm_barang
				 FROM tb_brg_msk as pd , tb_barang as b
				 WHERE pd.kd_barang = b.kd_barang";

		return $this->db->query($query);
	}
	
	function show_period($mulai,$selesai)
	{
		$query = "SELECT pd.*, b.kd_barang, b.nm_barang
				 FROM tb_brg_msk as pd , tb_barang as b
				 WHERE pd.kd_barang = b.kd_barang and pd.tanggal BETWEEN '$mulai' and '$selesai' GROUP by pd.kd_barang ";

		return $this->db->query($query);
	}

	function insert()
	{		
		$tanggal	= $_GET['tanggal'];
		$dari	    = $_GET['dari'];
		$kd_barang  = $_GET['kd_barang'];
		$jumlah		= $_GET['jumlah'];
		$nm_satuan	= $_GET['nm_satuan'];
		$harga	    = $_GET['harga'];
		$nm_kegiatan = $_GET['nm_kegiatan'];
		$nm_kategori = $_GET['nm_kategori'];
		$ket 	    = $_GET['ket'];
		
		$data = array('id_brg_msk'=>null,'dari'=>$dari,'tanggal'=>$tanggal, 'kd_barang'=>$kd_barang, 'jumlah'=>$jumlah, 'nm_satuan'=>$nm_satuan, 'harga'=>$harga, 'nm_kegiatan'=>$nm_kegiatan, 'nm_kategori'=>$nm_kategori, 'ket'=>$ket);
		$this->db->insert('tb_brg_msk', $data);
	}

	function get_id($id_brg_msk)
	{
		$param = array('id_brg_msk'=>$id_brg_msk);
		return $this->db->get_where('tb_brg_msk', $param);
	}

	function update()
	{
		$id_brg_msk	= $_GET['id_brg_msk'];
		$tanggal	= $_GET['tanggal'];
		$dari	    = $_GET['dari'];
		$kd_barang  = $_GET['kd_barang'];
		$jumlah		= $_GET['jumlah'];
		$nm_satuan	= $_GET['nm_satuan'];
		$harga		= $_GET['harga'];
		$nm_kegiatan = $_GET['nm_kegiatan'];
		$nm_kategori = $_GET['nm_kategori'];
		$ket 	    = $_GET['ket'];
		
		$data = array('tanggal'=>$tanggal,'dari'=>$dari,'kd_barang'=>$kd_barang, 'jumlah'=>$jumlah, 'nm_satuan'=>$nm_satuan, 'harga'=>$harga,'nm_kegiatan'=>$nm_kegiatan, 'nm_kategori'=>$nm_kategori, 'ket'=>$ket);
		$this->db->where('id_brg_msk', $id_brg_msk);
		$this->db->update('tb_brg_msk', $data);
	}

	function delete($id_brg_msk)
	{
		return $this->db->delete('tb_brg_msk', array('id_brg_msk'=>$id_brg_msk));
	}


}


?>