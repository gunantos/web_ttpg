<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_profil extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$CI = &get_instance();
		//checkAksesModule();
		$this->db2 = $CI->load->database('database_kedua', TRUE);
	}

	public function update($data, $id) {
		$this->db->where("id", $id);
		$this->db->update("admin", $data);

		return $this->db->affected_rows();
	}

	public function select($id = '') {
		if ($id != '') {
			$this->db->where('id', $id);
		}

		$data = $this->db->get('admin');

		return $data->row();
	}
}

/* End of file M_profil.php */
/* Location: ./application/models/M_profil.php */