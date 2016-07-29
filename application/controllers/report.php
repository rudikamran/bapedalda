<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('report_model');	
		check_session();
	}

	public function item()
	{   
		$data['item']     = $this->report_model->show(); 
		$this->load->view('report/load_data', $data);
	}

	public function lap_masuk()
	{
		$data['title']	="Laporan Penerimaan Barang";
		$mulai			=$this->input->post('mulai');
		$selesai		=$this->input->post('selesai');
		
		
			if ($mulai=='' or $selesai==''){
				$data['record']=$this->report_model->show();
				$this->template->load('template','report/form',$data);
			} else {
				$data['mulai']		=$mulai;
				$data['selesai']	=$selesai;
				$data['record']		=$this->report_model->show_period($mulai,$selesai);
				$this->template->load('template','report/form',$data);
			}
		
	}

	public function index()
	{
		$data['title']	="Laporan Penerimaan Barang";
		$mulai			=$this->input->post('mulai');
		$selesai		=$this->input->post('selesai');
		$data['mulai']		=$mulai;
		$data['selesai']	=$selesai;
		
			if ($mulai=='' or $selesai==''){
				$data['record']=$this->report_model->show();
				$this->template->load('template','report/form',$data);
			} else {
				$data['mulai']		=$mulai;
				$data['selesai']	=$selesai;
				$data['record']		=$this->report_model->show_period($mulai,$selesai);
				$this->template->load('template','report/form',$data);
			}
		
	}
	public function cetak()
	{
		$this->load->library('pdfgenerator');
		$mulai			=$this->input->get('mulai');
		$selesai		=$this->input->get('selesai');
 		if ($mulai=='' or $selesai==''){
				$data['item']     = $this->report_model->show();
	    		$html = $this->load->view('report/cetak', $data, true);
			} else {
				$data['item']     = $this->report_model->show_period($mulai,$selesai);
	    		$html = $this->load->view('report/cetak', $data, true);
			}
		
	    
	    $this->pdfgenerator->generate($html,'laporanbarangmasuk');
	}
		
}

?>