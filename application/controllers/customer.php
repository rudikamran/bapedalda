<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('customer_model');
		check_session();
	}

	public function index()
	{
		$data['title'] = 'Data Customer'; 
		$this->template->load('template','customer/lihat_data', $data);
	}

	public function item()
	{
		$data['item'] = $this->customer_model->show(); 
		$this->load->view('customer/load_data', $data);
	}

	public function create()
	{
		$this->customer_model->create();
	}

	public function get_id()
	{
		$id               = $_GET['id'];
		$data['r']        = $this->customer_model->get_one($id)->row_array();
		$this->load->view('customer/form_edit', $data);
	}

	public function update()
	{
		$this->customer_model->update();
	}

	public function delete()
	{
		$id  = $_GET['id'];
		$this->customer_model->delete($id);
	}

}

?>