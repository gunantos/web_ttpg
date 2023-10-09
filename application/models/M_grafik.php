<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_grafik extends CI_Model {

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
			$hitung ="SELECT sum(pnp) as ttl FROM terminal_retribusi WHERE status = '1' AND tanggal ='".$datenow."'";
		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function traveloka(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '24' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function redbus(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '25' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function easybook(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '26' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function rongrit(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '58' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function sejalan(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '28' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function bustiket(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '27' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function pahala_kencana(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '29' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function sinar_jaya(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '33' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function sumber_alam(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '41' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function gunung_harta(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '36' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function lorena(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '30' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function karina(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '2' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function als(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '43' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function garuda_mas(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '52' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function agra_mas(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '49' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function san(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '37' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function rosalia(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '32' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function hiba(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '45' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
			function jaketbus(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE id_user = '999' AND tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}
		
		function select_all(){
		$datenow=date("Y-m-d");
		$hitung ="SELECT count(noreg) as ttl FROM boarding WHERE  tgl_berangkat ='".$datenow."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		}

}