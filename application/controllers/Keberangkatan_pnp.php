<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keberangkatan_pnp extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$CI = &get_instance();
		$this->load->model('M_Keberangkatan_pnp');
		$db2 = $this->load->database('database_kedua', TRUE);
		
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['dataMenu'] 	= $this->M_Keberangkatan_pnp->select_all();

		$data['page'] 		= "menu";
		$data['judul'] 		= "TTPG";
		$data['deskripsi'] 	= "Jakarta Electronic Ticketing Bus";
		

		$this->template->views('keberangkatan/penumpang', $data);
	}
	


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */