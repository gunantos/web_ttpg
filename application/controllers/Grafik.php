<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Grafik extends AUTH_Controller {
	public function __construct() {
		parent::__construct();
		$CI = &get_instance();
		$this->load->model('M_grafik');
		
	}

	public function index() {
		$data['userdata'] 	= $this->userdata;
		//$data['dataMenu'] 	= $this->M_grafik->pnpberangkat();

		$data['page'] 		= "menu";
		$data['judul'] 		= "TTPG";
		$data['deskripsi'] 	= "Jakarta Electronic Ticketing Bus";
		$data['busberangkat'] 	= $this->M_grafik->busberangkat();
		$data['busdatang'] 	= $this->M_grafik->busdatang();
		$data['pnpberangkat'] 	= $this->M_grafik->pnpberangkat();
		$data['pnpdatang'] 	= $this->M_grafik->pnpdatang();
		$data['totalpnp'] 	= $this->M_grafik->totalpnp();
		
		$data['traveloka'] 	= $this->M_grafik->traveloka();
		$data['redbus'] 	= $this->M_grafik->redbus();
		$data['easybook'] 	= $this->M_grafik->easybook();
		$data['rongrit'] 	= $this->M_grafik->rongrit();
		$data['bustiket'] 	= $this->M_grafik->bustiket();
		$data['pahala_kencana'] 	= $this->M_grafik->pahala_kencana();
		$data['sinar_jaya'] 	= $this->M_grafik->sinar_jaya();
		$data['sumber_alam'] 	= $this->M_grafik->sumber_alam();
		$data['gunung_harta'] 	= $this->M_grafik->gunung_harta();
		$data['lorena'] 	= $this->M_grafik->lorena();
		$data['karina'] 	= $this->M_grafik->karina();
		$data['als'] 	= $this->M_grafik->als();
		$data['garuda_mas'] 	= $this->M_grafik->garuda_mas();
		$data['agra_mas'] 	= $this->M_grafik->agra_mas();
		$data['san'] 	= $this->M_grafik->san();
		$data['rosalia'] 	= $this->M_grafik->rosalia();
		$data['hiba'] 	= $this->M_grafik->hiba();
		$data['jaketbus'] 	= $this->M_grafik->jaketbus();
		$data['sejalan'] 	= $this->M_grafik->sejalan();

		$this->template->views('grafik/index', $data);
	}
	


}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */