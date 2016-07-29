<?php 
class Ruang_model extends CI_Model {

	function show()
	{
		$query = "SELECT *from tb_ruang";
		return $this->db->query($query);
	}

	function insert()
	{
		$nm_ruang  = $_GET['nm_ruang'];
				
		$data = array('id_ruang'=>null, 'nm_ruang'=>$nm_ruang);
		$this->db->insert('tb_ruang', $data);
	}

	function get_id($id_ruang)
	{
		$param = array('id_ruang'=>$id_ruang);
		return $this->db->get_where('tb_ruang', $param);
	}

	function update()
	{
		$id_ruang   = $_GET['id_ruang'];
		$nm_ruang   = $_GET['nm_ruang'];
		
		$data = array('nm_ruang'=>$nm_ruang);
		$this->db->where('id_ruang', $id_ruang);
		$this->db->update('tb_ruang', $data);
	}

	function delete($id_ruang)
	{
		return $this->db->delete('tb_ruang', array('id_ruang'=>$id_ruang));
	}


}


?>