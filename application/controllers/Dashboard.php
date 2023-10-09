<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();	
		$this->load->model('M_menu');
		$db2 = $this->load->database('database_kedua', TRUE);
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['dataMenu'] 	= $this->M_menu->select_all();

		$data['page'] 		= "menu";
		$data['judul'] 		= "Data Menu";
		$data['deskripsi'] 	= "List Data Menu";

		
		$this->template->views('dashboard', $data);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}