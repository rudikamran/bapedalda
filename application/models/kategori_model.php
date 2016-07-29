<?php 
class Kategori_model extends CI_Model {
	
	function show()
	{
		return $this->db->query("SELECT * from tb_kategori order by id_kategori desc");
	}

	function show_paging($page)

	{
		return $this->db->query("SELECT * from tb_kategori limit $page,5");
	}

	function create()
	{
		$nm_kategori = $_GET['nm_kategori'];
		$data        = array('nm_kategori'=>$nm_kategori);
		$this->db->insert('tb_kategori', $data);
	}

	function update()
	{
		$id_kategori = $_GET['id_kategori'];
		$nm_kategori = $_GET['nm_kategori'];

		$data = array('nm_kategori'=>$nm_kategori);
		$this->db->where('id_kategori', $id_kategori);
		$this->db->update('tb_kategori', $data);
	}

	function get_one($id_kategori)
	{
		$param = array('id_kategori'=>$id_kategori);
		return $this->db->get_where('tb_kategori', $param);
	}

	function delete($id_kategori)
	{
		//cara2
		return $this->db->delete('tb_kategori', array('id_kategori'=>$id_kategori));
		//cara1
		//$this->db->where('id_kategori', $id);
		//$this->db->delete('tb_kategori');
	}
}

?>