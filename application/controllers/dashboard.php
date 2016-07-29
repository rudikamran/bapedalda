<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		check_session();
	}

	public function index()
	{
		$data['title'] = "Dashboard";
		//$this->template->load('template/header.php');
		$data['user'] = 'rudi';
		//$this->load->view('dashboard', $data);
		$this->template->load('template', 'dashboard', $data);
		
		//$this->template->load('template/header','dashboard', $data);
		//$this->template->load('template/footer','dashboard');
	}

	
}
