<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Satuan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('satuan_model');
		check_session();
	}

	public function index()
	{
		$data['title']    = "Daftar Satuan";
		$this->template->load('template','satuan/lihat_data',$data);
	}

	public function item()
	{   		
		$data['item']     = $this->satuan_model->show(); 
		$this->load->view('satuan/load_data', $data);
	}

	public function insert()
	{
		$this->satuan_model->insert();	
	}

	public function get_id()
	{
		$id_satuan = $_GET['id_satuan'];		
		$data['r']        = $this->satuan_model->get_id($id_satuan)->row_array();
		$this->load->view('satuan/form_edit', $data);
	}

	public function save_update()
	{
		$this->satuan_model->update();
	}

	public function delete()
	{
		$id_satuan= $_GET['id_satuan'];
		$this->satuan_model->delete($id_satuan);
	}



}
