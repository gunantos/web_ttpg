<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$CI = &get_instance();
		$this->load->model('M_menu');
		$this->db2 = $CI->load->database('database_kedua', TRUE);
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['select_all'] 	= $this->M_menu->select_all();

		$data['page'] 		= "menu";
		$data['judul'] 		= "TTPG";
		$data['deskripsi'] 	= "Jakarta Electronic Ticketing Bus";
		
		//* data traveloka	
		$data['traveloka'] 	= $this->M_menu->traveloka();
		$data['redbus'] 	= $this->M_menu->redbus();
		$data['easybook'] 	= $this->M_menu->easybook();
		$data['rongrit'] 	= $this->M_menu->rongrit();
		$data['bustiket'] 	= $this->M_menu->bustiket();
		$data['pahala_kencana'] 	= $this->M_menu->pahala_kencana();
		$data['sinar_jaya'] 	= $this->M_menu->sinar_jaya();
		$data['sumber_alam'] 	= $this->M_menu->sumber_alam();
		$data['gunung_harta'] 	= $this->M_menu->gunung_harta();
		$data['lorena'] 	= $this->M_menu->lorena();
		$data['karina'] 	= $this->M_menu->karina();
		$data['als'] 	= $this->M_menu->als();
		$data['garuda_mas'] 	= $this->M_menu->garuda_mas();
		$data['agra_mas'] 	= $this->M_menu->agra_mas();
		$data['san'] 	= $this->M_menu->san();
		$data['rosalia'] 	= $this->M_menu->rosalia();
		$data['hiba'] 	= $this->M_menu->hiba();
		$data['jaketbus'] 	= $this->M_menu->jaketbus();
		$data['sejalan'] 	= $this->M_menu->sejalan();
		
		
		$this->template->views('dashboard', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */