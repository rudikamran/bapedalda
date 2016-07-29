<?php 
class Satuan_model extends CI_Model {

	function show()
	{
		$query = "SELECT *from tb_satuan";
		return $this->db->query($query);
	}

	function insert()
	{
		$nm_satuan  = $_GET['nm_satuan'];
				
		$data = array('id_satuan'=>null, 'nm_satuan'=>$nm_satuan);
		$this->db->insert('tb_satuan', $data);
	}

	function get_id($id_satuan)
	{
		$param = array('id_satuan'=>$id_satuan);
		return $this->db->get_where('tb_satuan', $param);
	}

	function update()
	{
		$id_satuan   = $_GET['id_satuan'];
		$nm_satuan   = $_GET['nm_satuan'];
		
		$data = array('nm_satuan'=>$nm_satuan);
		$this->db->where('id_satuan', $id_satuan);
		$this->db->update('tb_satuan', $data);
	}

	function delete($id_satuan)
	{
		return $this->db->delete('tb_satuan', array('id_satuan'=>$id_satuan));
	}


}


?>