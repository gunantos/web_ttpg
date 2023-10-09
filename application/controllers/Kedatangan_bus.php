<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kedatangan_bus extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$CI = &get_instance();
		$this->load->model('M_Kedatangan_bus');
		$db2 = $this->load->database('database_kedua', TRUE);
		
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['dataMenu'] 	= $this->M_Kedatangan_bus->select_all();

		$data['page'] 		= "menu";
		$data['judul'] 		= "TTPG";
		$data['deskripsi'] 	= "Jakarta Electronic Ticketing Bus";
		

		$this->template->views('kedatangan/bus', $data);
	}
	


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */