<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_booking extends CI_Model {

	function __construct()
			{
			parent::__construct();
			$CI = &get_instance();
			//checkAksesModule();
			$this->db2 = $CI->load->database('database_kedua', TRUE);
			}
			
	
		public function select_all() {
		$this->db2->select('noreg');
		$this->db2->from('boarding');
		$data = $this->db2->get();

		return $data->result();
	}


}