<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller{

	public function __construct() {
		parent:: __construct();
		$this->load->model('kategori_model');
		check_session();
	}

	public function index()
	{
		$data['title'] = 'Daftar Kategori'; 
		$this->template->load('template','kategori/lihat_data', $data);
	}

	public function item()
	{
		$data['item'] = $this->kategori_model->show();
		$this->load->view('kategori/load_data', $data);
	}

	public function get_id()
	{
		$id_kategori      = $_GET['id_kategori'];
		$data['r']        = $this->kategori_model->get_one($id_kategori)->row_array();
		$this->load->view('kategori/form_edit', $data);
	}

	public function create()
	{
		$this->kategori_model->create();
	}

	public function update()
	{
		$this->kategori_model->update();
	}

	public function delete()
	{
		$id_kategori = $_GET['id_kategori'];
		$this->kategori_model->delete($id_kategori);
	}

}

?>