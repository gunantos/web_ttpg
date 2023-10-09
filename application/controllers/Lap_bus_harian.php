<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_bus_harian extends AUTH_Controller {

	function __construct() {
		parent::__construct();	
		$CI = &get_instance();
		$this->load->model('M_Lap_bus_harian');
		$db2 = $this->load->database('database_kedua', TRUE);
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['dataMenu'] 	= $this->M_Lap_bus_harian->select_all();

		$data['page'] 		= "menu";
		$data['judul'] 		= "Data Menu";
		$data['deskripsi'] 	= "List Data Menu";

		
		$this->template->views('Lap_bus_harian/index', $data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}