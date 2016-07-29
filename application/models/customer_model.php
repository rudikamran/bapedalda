<?php 
class Customer_model extends CI_Model {

	function show()
	{
		return $this->db->query("SELECT * from tb_customer order by id_customer desc");
	}

	function create()
	{
		$nama   = $_GET['nama_cust'];
		$alamat = $_GET['alamat'];
		$telp   = $_GET['telp'];
		
		$data = array('kode_customer'=>kode_customer(), 'nama_customer'=>$nama, 'alamat'=>$alamat, 'telp'=>$telp);
		$this->db->insert('tb_customer', $data);
	}

	function get_one($id)
	{
		$param = array('id_customer'=>$id);
		return $this->db->get_where('tb_customer', $param);
	}

	function get_id_by_name($nama)
	{
		$param = array('nama_customer'=>$nama);
		return $this->db->get_where('tb_customer', $param);
	}

	function update()
	{
		$id     = $_GET['id'];
		$nama   = $_GET['nama_cust'];
		$alamat = $_GET['alamat'];
		$telp   = $_GET['telp'];
		$data   = array('nama_customer'=>$nama, 'alamat'=>$alamat, 'telp'=>$telp);
		
		$this->db->where('id_customer', $id);
		$this->db->update('tb_customer', $data);
	}

	function delete($id)
	{
		return $this->db->delete('tb_customer', array('id_customer'=>$id));
	}


}
?>