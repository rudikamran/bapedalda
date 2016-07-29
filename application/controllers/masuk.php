<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('masuk_model');	
		check_session();
	}

	public function index()
	{
		$data['title']    = 'Barang Masuk'; 
		$this->template->load('template','masuk/lihat_data',$data);
	}

	public function item()
	{   
		$data['item']     = $this->masuk_model->show(); 
		$this->load->view('masuk/load_data', $data);
	}

	public function insert()
	{
		$this->masuk_model->insert();	
	}

	public function get_id()
	{
		$kd_barang = $_GET['kd_barang'];
		$data['r']  = $this->masuk_model->get_id($kd_barang)->row_array();
		$this->load->view('masuk/form_edit', $data);
	}

	public function detail()
	{
		$this->masuk_model->detail();	
	}

	public function save_update()
	{
		$this->masuk_model->update();
	}

	public function delete()
	{
		$id_brg_msk= $_GET['id_brg_msk'];
		$this->masuk_model->delete($id_brg_msk);
	}

	public function cetak()
	{
		$this->load->library('pdfgenerator');
 
		$data['item']     = $this->masuk_model->show();
	    $html = $this->load->view('masuk/cetak', $data, true);
	    
	    $this->pdfgenerator->generate($html,'laporanbarangmasuk');
	}

	

}

?>