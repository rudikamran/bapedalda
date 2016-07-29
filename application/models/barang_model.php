<?php 
class Barang_model extends CI_Model {

	function show()
	{
		$query = "SELECT * from tb_barang";
		return $this->db->query($query);
	}

	function show_period()
	{
		$query = "SELECT a.nm_barang, a.tahun, b.jumlah, b.nm_satuan, b.harga, b.ket
			FROM tb_barang a, tb_brg_msk b, tb_brg_keluar c
			WHERE a.kd_barang=b.kd_barang and b.id_brg_msk=c.kd_barang";
		return $this->db->query($query);
	}

	function insert()
	{
		$kd_barang  = $_GET['kd_barang'];
		$nm_barang  = $_GET['nm_barang'];
		$tahun      = $_GET['tahun'];
		
		$data = array('id_barang'=>null, 'kd_barang'=>$kd_barang, 'nm_barang'=>$nm_barang, 'tahun'=>$tahun);
		$this->db->insert('tb_barang', $data);
	}

	function get_id($id_barang)
	{
		$param = array('id_barang'=>$id_barang);
		return $this->db->get_where('tb_barang', $param);
	}

	function update()
	{
		$id_barang   = $_GET['id_barang'];
		$kd_barang   = $_GET['kd_barang'];
		$nm_barang   = $_GET['nm_barang'];
		$tahun		 = $_GET['tahun'];
		
		$data = array('kd_barang'=>$kd_barang, 'nm_barang'=>$nm_barang, 'tahun'=>$tahun);
		$this->db->where('id_barang', $id_barang);
		$this->db->update('tb_barang', $data);
	}

	function delete($id_barang)
	{
		return $this->db->delete('tb_barang', array('id_barang'=>$id_barang));
	}


}


?>