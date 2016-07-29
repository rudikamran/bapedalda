<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('operator_model');
		check_session();
	}

	public function index()
	{
		$data['title'] = 'Daftar Operator';
		$this->template->load('template','operator/lihat_data', $data);
	}

	public function item()
	{
		$data['item']  = $this->operator_model->show(); 
		$this->load->view('operator/load_data', $data);
	}

	public function create()
	{
		$this->operator_model->create();
		redirect ('operator');
	}

	public function get_id()
	{
		$id_operator         = $_GET['id_operator'];
		$data['r']  = $this->operator_model->get_one($id_operator)->row_array();
		$this->load->view('operator/form_edit', $data);
	}

	public function update()
	{
		$this->operator_model->update();
	}

	public function delete()
	{
		$id_operator   = $_GET['id_operator'];
		$this->operator_model->delete($id_operator);
		redirect('operator');

	}

}

?>