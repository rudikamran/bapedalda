<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportrekap extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('reportrekap_model');	
		check_session();
	}

	public function item()
	{   
		$data['item']     = $this->reportrekap_model->show(); 
		$this->load->view('reportrekap/load_data', $data);
	}

	public function lap_rekap()
	{
		$data['title']	="Laporan Rekapitulasi Barang";
		$mulai			=$this->input->post('mulai');
		$selesai		=$this->input->post('selesai');
		
		
			if ($mulai=='' or $selesai==''){
				$data['record']=$this->reportrekap_model->show();
				$this->template->load('template','reportrekap/form',$data);
			} else {
				$data['mulai']		=$mulai;
				$data['selesai']	=$selesai;
				$data['record']		=$this->reportrekap_model->show_period($mulai,$selesai);
				$this->template->load('template','reportrekap/form',$data);
			}
		
	}

	public function index()
	{
		$data['title']	="Laporan Rekapitulasi Barang";
		$mulai			=$this->input->post('mulai');
		$selesai		=$this->input->post('selesai');
		$data['mulai']		=$mulai;
		$data['selesai']	=$selesai;
		
			if ($mulai=='' or $selesai==''){
				$data['record']=$this->reportrekap_model->show();
				$this->template->load('template','reportrekap/form',$data);
			} else {
				$data['mulai']		=$mulai;
				$data['selesai']	=$selesai;
				$data['record']		=$this->reportrekap_model->show_period($mulai,$selesai);
				$this->template->load('template','reportrekap/form',$data);
			}
		
	}
	public function cetak()
	{
		$this->load->library('pdfgenerator');
		$mulai			=$this->input->get('mulai');
		$selesai		=$this->input->get('selesai');
 		if ($mulai=='' or $selesai==''){
				$data['item']     = $this->reportrekap_model->show();
	    		$html = $this->load->view('reportrekap/cetak', $data, true);
			} else {
				$data['item']     = $this->reportrekap_model->show_period($mulai,$selesai);
	    		$html = $this->load->view('reportrekap/cetak', $data, true);
			}
		
	    
	    $this->pdfgenerator->generate($html,'laporanbarangrekap');
	}
		
}

?>