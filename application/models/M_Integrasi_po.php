<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Integrasi_po extends CI_Model {

	function __construct()
			{
			parent::__construct();
			$CI = &get_instance();
			//checkAksesModule();
			$this->db2 = $CI->load->database('database_kedua', TRUE);
			}
			
	
		
		function select_all(){
			$tgl = $this->input->get('tgl_berangkat');
			$tgl = empty($tgl) ? date('Y-m-d') : $tgl;
			$hitung ="SELECT * FROM boarding WHERE tgl_berangkat ='".$tgl."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		
		}

}