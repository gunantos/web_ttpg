<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_boarding extends CI_Model {

		function __construct()
			{
			parent::__construct();
			$CI = &get_instance();
			//checkAksesModule();
			$this->db2 = $CI->load->database('database_kedua', TRUE);
			}
			
	public function get_total($where='')
	{
			$this->db2->select('count(id_po) as total');
			if($where != ''){ 
				$this->db2->where($where);
				}
			$get = $this->db2->get('boarding');
			return ($get ? ($get->num_rows() > 0 ? $get->row()->total : 0) : 0);
		}


}