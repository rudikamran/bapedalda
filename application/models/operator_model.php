<?php 
class Operator_model extends CI_Model {

	function login($username, $password)
	{
		$chek = $this->db->get_where('tb_operator', array('username'=>$username, 'password'=>md5($password)) );
		if ($chek->num_rows()) {
			return 1;
		} else {
			return 0;
		}
	}

	function show()
	{
		return $this->db->query("SELECT * from tb_operator order by nama_lengkap asc");
	}

	function create()
	{
		$nama_lengkap     = $_GET['nama_lengkap'];
		$username         = $_GET['username'];
		$password         = $_GET['password'];
		$level            = $_GET['level'];
		$data     = array('nama_lengkap'=>$nama_lengkap, 'username'=>$username, 'password'=>md5($password), 'level'=>$level);
		$this->db->insert('tb_operator', $data);
	}

	function get_one($id_operator)
	{
		$param = array('id_operator'=>$id_operator);
		return $this->db->get_where('tb_operator', $param);
	}

	function update()
	{
		$id_operator       = $_GET['id_operator'];
		$nama_lengkap      = $_GET['nama_lengkap'];
		$username          = $_GET['username'];
		$password          = $_GET['password'];
		$level             = $_GET['level'];

		if (empty($password)) {
			$data = array('nama_lengkap'=>$nama_lengkap,'username'=>$username, 'level'=>$level);
		} else {
			$data = array('nama_lengkap'=>$nama_lengkap,'username'=>$username, 'password'=>md5($password), 'level'=>$level);
		}

		$this->db->where('id_operator', $id_operator);
		$this->db->update('tb_operator', $data);
	}

	function delete($id_operator)
	{
		return $this->db->delete('tb_operator', array('id_operator'=>$id_operator));
	}


}
?>