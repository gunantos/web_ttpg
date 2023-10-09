<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik1 extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$CI = &get_instance();
		$this->load->model('M_grafik1');
		
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		//$data['dataMenu'] 	= $this->M_grafik1->pnpberangkat();

		$data['page'] 		= "menu";
		$data['judul'] 		= "TTPG";
		$data['deskripsi'] 	= "Jakarta Electronic Ticketing Bus";
		

		$this->template->views('grafik1/index', $data);
	}
	


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */