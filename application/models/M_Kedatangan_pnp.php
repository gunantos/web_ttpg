<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kedatangan_pnp extends CI_Model {

	function __construct()
			{
			parent::__construct();
			$CI = &get_instance();
			//checkAksesModule();
			$this->db2 = $CI->load->database('database_kedua', TRUE);
			}
			
	function get_total_datangpnp($where='')
			{
				$this->db2->select('sum(pnp) as total');
				if($where != ''){ 
					$this->db2->where($where);
					}
				$get = $this->db2->get('terminal_retribusi');
				return ($get ? ($get->num_rows() > 0 ? $get->row()->total : 0) : 0);
			}
					
	function get_total_berangkatpnp($where='')
			{
						$this->db2->select('sum(pnp) as total');
						if($where != ''){ 
							$this->db2->where($where);
							}
						$get = $this->db2->get('terminal_jadwal');
						return ($get ? ($get->num_rows() > 0 ? $get->row()->total : 0) : 0);
			}
			
			function get_total_datangbus($where='')
			{
				$this->db2->select('count(kode) as total');
				if($where != ''){ 
					$this->db2->where($where);
					}
				$get = $this->db2->get('terminal_retribusi');
				return ($get ? ($get->num_rows() > 0 ? $get->row()->total : 0) : 0);
			}
					
	function get_total_berangkatbus($where='')
			{
						$this->db2->select('count(kode) as total');
						if($where != ''){ 
							$this->db2->where($where);
							}
						$get = $this->db2->get('terminal_jadwal');
						return ($get ? ($get->num_rows() > 0 ? $get->row()->total : 0) : 0);
			}
			
			function get_total($where='')
			{
						$this->db2->select('sum(pnp) as total');
						if($where != ''){ 
							$this->db2->where($where);
							}
						$get = $this->db2->get('terminal_jadwal');
						return ($get ? ($get->num_rows() > 0 ? $get->row()->total : 0) : 0);
			}
			function get_total1($where='')
			{
						$this->db2->select('count(kode) as total');
						if($where != ''){ 
							$this->db2->where($where);
							}
						$get = $this->db2->get('terminal_jadwal');
						return ($get ? ($get->num_rows() > 0 ? $get->row()->total : 0) : 0);
			}
			
			function select_all(){
			$tgl = $this->input->get('tanggal');
			$tgl = empty($tgl) ? date('Y-m-d') : $tgl;
			$hitung ="SELECT * FROM terminal_jadwal WHERE tanggal ='".$tgl."'";

		    $hasil=$this->db2->query($hitung);
			return $hasil->result();
		
		}
			

}