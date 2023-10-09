<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Integrasi_po extends AUTH_Controller {

	function __construct() {
		parent::__construct();	
		$CI = &get_instance();
		$this->load->model('M_Integrasi_po');
		$db2 = $this->load->database('database_kedua', TRUE);
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['dataMenu'] 	= $this->M_Integrasi_po->select_all();

		$data['page'] 		= "menu";
		$data['judul'] 		= "Data Menu";
		$data['deskripsi'] 	= "List Data Menu";

		
		$this->template->views('integrasi_po/index', $data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}