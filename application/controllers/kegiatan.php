<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kegiatan_model');
		check_session();
	}

	public function index()
	{
		$data['title']    = "Daftar Kegiatan";
		$this->template->load('template','kegiatan/lihat_data',$data);
	}

	public function item()
	{   
		
		$data['item']     = $this->kegiatan_model->show(); 
		$this->load->view('kegiatan/load_data', $data);
	}

	public function insert()
	{
		$this->kegiatan_model->insert();	
	}

	public function get_id()
	{
		$id_kegiatan = $_GET['id_kegiatan'];
		$data['r']        = $this->kegiatan_model->get_id($id_kegiatan)->row_array();
		$this->load->view('kegiatan/form_edit', $data);
	}

	public function save_update()
	{
		$this->kegiatan_model->update();
	}

	public function delete()
	{
		$id_kegiatan= $_GET['id_kegiatan'];
		$this->kegiatan_model->delete($id_kegiatan);
	}



}
