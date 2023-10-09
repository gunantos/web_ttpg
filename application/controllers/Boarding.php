<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boarding extends AUTH_Controller {

	function __construct()
			{
			parent::__construct();
			$CI = &get_instance();
			//checkAksesModule();
			$this->load->model('M_boarding');
			$this->db2 = $CI->load->database('database_kedua', TRUE);
			}
			
	public function index() {
		$data['userdata'] 	= $this->userdata;
		$data['dataBoarding'] 	= $this->M_boarding->get_total();

		$data['page'] 		= "menu";
		$data['judul'] 		= "Data Menu";
		$data['deskripsi'] 	= "List Data Menu";

		
		$this->template->views('boarding/index', $data);
	}
	
	function data()
		{

			// nama table
			$table      = 'boarding';
			// nama PK

			 $select = 'noreg, tgl_berangkat, jam_berangkat, id_po, id_tujuan, id_user,status';
			 $tgl_berangkat = date('Y-m-d');
			 $get = $this->db2->select($select)->where('tgl_berangkat', $tgl_berangkat)->get($table);
			 $recordsTotal = $get->num_rows();
			 $start = 0; 
			 $length = 0;
			 if ( isset($request['start']) && $request['length'] != -1 ) {
					$start  = intval($request['start']);
					$length = intval($request['length']);
			}
			if($length > 0)
				{
					$getdb = $this->db2->select($select)->where('tgl_berangkat', $tgl_berangkat)->order_by('jam_berangkat DESC')->limit($start, $length)->get($table);
				}else{
					$getdb = $get;
				}
			$data = array();
			 if ($getdb->num_rows() > 0)
			 {
				foreach($getdb->result() as $value)
				{
					$data[] = array('noreg'=>$value->noreg, 'id_po'=>$value->id_po, 'id_tujuan'=>$value->id_tujuan,'id_user'=>$value->id_user, 
										   'tgl_berangkat'=>$value->tgl_berangkat, 'jam_berangkat'=>$value->jam_berangkat, 'status'=>$value->status, 'aksi'=>'
										   
										   <a href="'. base_url() .'boarding/edit/'. $value->noreg .'" type="button" class="btn btn-xs btn-primary"> <i class="fa fa-edit"></i></a>
										   <a href="'. base_url() .'boarding/delete/'. $value->noreg .'" type="button" class="btn btn-xs btn-danger"> <i class="fa fa-times fa fa-white"></i></a>');

										   }
			 }
			 
			  echo json_encode(array("draw"            => isset ( $request['draw'] ) ?
						intval( $request['draw'] ) :
						0,
					"recordsTotal"    => intval( $recordsTotal ),
					"recordsFiltered" => intval( $getdb->num_rows() ),
					"data"            => $data
				));

		}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}