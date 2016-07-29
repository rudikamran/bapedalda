<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class keluar extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('keluar_model');	
		check_session();
	}

	public function index()
	{
		$data['title']    = 'Barang keluar'; 
		$this->template->load('template','keluar/lihat_data',$data);
	}

	public function item()
	{   
		$data['item']     = $this->keluar_model->show(); 
		$this->load->view('keluar/load_data', $data);
	}

	public function insert()
	{
		$this->keluar_model->insert();	
	}

	public function get_id()
	{
		$id_keluar = $_GET['id_keluar'];
		$data['r']        = $this->keluar_model->get_id($id_keluar)->row_array();
		$this->load->view('keluar/form_edit', $data);
	}

	public function detail()
	{
		$this->keluar_model->detail();	
	}

	public function save_update()
	{
		$this->keluar_model->update();
	}

	public function delete()
	{
		$id_keluar= $_GET['id_keluar'];
		$this->keluar_model->delete($id_keluar);
	}

	public function cetak()
	{
		$this->load->library('pdfgenerator');
 
		$data['item']     = $this->keluar_model->show();
	    $html = $this->load->view('keluar/cetak', $data, true);
	    
	    $this->pdfgenerator->generate($html,'laporanbarangkeluar');
	}

		
}

?>