<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Admin_model extends CI_Model {

		public function cek_admin($data) {
			$query = $this->db->get_where('tb_operator', $data);
			return $query;
		}



	public function getsequrity()
	{
		$nidn = $this->session->userdata('username');
		if(empty($username))
		{
			$this->session->sess_destroy();
			redirect('auth/login');
		}
	}

}
	

?>