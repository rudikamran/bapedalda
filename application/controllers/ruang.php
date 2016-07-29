<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('ruang_model');
		check_session();
	}

	public function index()
	{
		$data['title']    = "Daftar Ruang";
		$this->template->load('template','ruang/lihat_data',$data);
	}

	public function item()
	{   
		$data['item']     = $this->ruang_model->show(); 
		$this->load->view('ruang/load_data', $data);
	}

	public function insert()
	{
		$this->ruang_model->insert();	
	}

	public function get_id()
	{
		$id_ruang = $_GET['id_ruang'];
		$data['r']        = $this->ruang_model->get_id($id_ruang)->row_array();
		$this->load->view('ruang/form_edit', $data);
	}

	public function save_update()
	{
		$this->ruang_model->update();
	}

	public function delete()
	{
		$id_ruang= $_GET['id_ruang'];
		$this->ruang_model->delete($id_ruang);
	}



}
