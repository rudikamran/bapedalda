<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('operator_model');
	}

	public function login()
	{
		remember();
		if (isset($_POST['login'])) {
			$data = array('username' => $this->input->post('username', TRUE),
						  'password' => md5($this->input->post('password', TRUE))
			);
			$this->load->model('admin_model');
			$hasil = $this->admin_model->cek_admin($data);

			//proses login
			if ($hasil->num_rows() == 1) {
				
			foreach ($hasil->result() as $sess) {
				$sess_data['status_login'] = 'aktif';
				$sess_data['username'] = $sess->username;
				$sess_data['password'] = $sess->password;
				$sess_data['level'] = $sess->level;
				$sess_data['logged_in'] = "logged_in";
				$this->session->set_userdata($sess_data);
				}
				//update last login
			$this->db->where('username', $sess->username);
			$this->db->update('tb_operator', array('last_login'=>date('Y-m-d')));
				redirect('dashboard');

			} else {
				redirect('auth/login');
			}
	
		} else {
			$this->load->view('form_login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('auth/login');
	}


}

?>