<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Monitoring extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$CI = &get_instance();
		$this->load->model('M_monitoring');
		$this->db2 = $CI->load->database('database_kedua', TRUE);
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		//$data['dataMenu'] 	= $this->M_monitoring->select_all();

		$data['page'] 		= "menu";
		$data['judul'] 		= "TTPG";
		$data['deskripsi'] 	= "Jakarta Electronic Ticketing Bus";
		$data['busberangkat'] 	= $this->M_monitoring->busberangkat();
		$data['busdatang'] 	= $this->M_monitoring->busdatang();
		$data['pnpberangkat'] 	= $this->M_monitoring->pnpberangkat();
		$data['pnpdatang'] 	= $this->M_monitoring->pnpdatang();
		$data['totalpnp'] 	= $this->M_monitoring->totalpnp();
		
		$this->template->views('monitoring/index', $data);
	}

}
