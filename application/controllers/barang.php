<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('barang_model');
        $this->load->library('form_validation');
		check_session();
	}

	public function index()
	{

		$data['title']    = "Daftar Barang";
		$this->template->load('template','barang/lihat_data',$data);
	

	}

	public function item()
	{   
		$data['item']     = $this->barang_model->show(); 
		$this->load->view('barang/load_data', $data);
	}

	public function insert()
	{
		$this->barang_model->insert();	
		$this->form_validation->set_rules('kd_barang','Kode Barang','trim|required');
		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
			echo "False";
		}
	}

	public function get_id()
	{
		$id_barang = $_GET['id_barang'];
		$data['r']        = $this->barang_model->get_id($id_barang)->row_array();
		$this->load->view('barang/form_edit', $data);
	}

	public function save_update()
	{
		$this->barang_model->update();

	}

	public function delete()
	{
		$id_barang= $_GET['id_barang'];
		$this->barang_model->delete($id_barang);
	}

	public function cetak()
	{
		$this->load->library('pdfgenerator');
 
		$data['item']     = $this->barang_model->show_period();
	    $html = $this->load->view('barang/cetak', $data, true);
	    
	    $this->pdfgenerator->generate($html,'laporan-persediaan-barang');
	}

}
