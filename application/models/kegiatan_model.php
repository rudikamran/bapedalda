<?php 
class Kegiatan_model extends CI_Model {

	function show()
	{
		$query = "SELECT *from tb_kegiatan";
		return $this->db->query($query);
	}

	function insert()
	{
		$nm_kegiatan  = $_GET['nm_kegiatan'];
				
		$data = array('id_kegiatan'=>null, 'nm_kegiatan'=>$nm_kegiatan);
		$this->db->insert('tb_kegiatan', $data);
	}

	function get_id($id_kegiatan)
	{
		$param = array('id_kegiatan'=>$id_kegiatan);
		return $this->db->get_where('tb_kegiatan', $param);
	}

	function update()
	{
		$id_kegiatan   = $_GET['id_kegiatan'];
		$nm_kegiatan   = $_GET['nm_kegiatan'];
		
		$data = array('nm_kegiatan'=>$nm_kegiatan);
		$this->db->where('id_kegiatan', $id_kegiatan);
		$this->db->update('tb_kegiatan', $data);
	}

	function delete($id_kegiatan)
	{
		return $this->db->delete('tb_kegiatan', array('id_kegiatan'=>$id_kegiatan));
	}


}


?>