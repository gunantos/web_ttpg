<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_monitoring extends CI_Model {

	function __construct()
		{
			parent::__construct();
			$CI = &get_instance();
			//checkAksesModule();
			$this->db2 = $CI->load->database('database_kedua', TRUE);
		}
			
	function busberangkat()
		{
			$datenow=date("Y-m-d");
			$hitung ="SELECT count(kode) as ttl FROM terminal_jadwal WHERE status = '2' AND tanggal ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
	function pnpberangkat()
		{
			$datenow=date("Y-m-d");
			$hitung ="SELECT sum(pnp) as ttl FROM terminal_jadwal WHERE status = '2' AND tanggal ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		
	function busdatang()
		{
			$datenow=date("Y-m-d");
			$hitung ="SELECT count(kode) as ttl FROM terminal_retribusi WHERE status = '1' AND tanggal ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function pnpdatang()
		{
			$datenow=date("Y-m-d");
			$hitung ="SELECT sum(pnp) as ttl FROM terminal_retribusi WHERE status = '1' AND tanggal ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function totalpnp()
		{
			$datenow=date("Y-m-d");
			$hitung ="SELECT((SELECT sum(pnp) as ttl FROM terminal_retribusi WHERE status = '1' AND tanggal ='".$datenow."') + (SELECT sum(pnp) as ttl FROM terminal_jadwal WHERE status = '2' AND tanggal ='".$datenow."'))";
			
		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		
		


}