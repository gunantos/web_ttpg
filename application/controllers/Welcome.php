<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{	
		$penginapan = $this->getPenginapan();
		$blog = $this->blog();
		$config = $this->get_config();
		$configs = [];
		if (isset($config->status) && $config->status) {
			$configs = $config->data;
		}
		$this->load->view('index', ['pria'=>$penginapan['pria'], 'wanita'=>$penginapan['wanita'], 'tamu'=>$penginapan['tamu'], 'blog'=>$blog, 'config'=>$configs]);
	}

	private function blog() {
		$get = $this->db->limit(7)->order_by('created_at DESC')->get('website.blogs');
		$get_populer = $this->db->limit(7)->order_by('view DESC')->get('website.blogs');
		$populer = [];
		$baru = [];
		if ($get) {
			$baru = $get->result();
		}
		if ($get_populer) {
			$populer= $get_populer->result();
		}
		return ['baru'=>$baru, 'populer'=>$populer];
	}

	private function getPenginapan() {
		$get = $this->db->from('penginapan.data_kamar')->get();
	    $wanita = [];
	    $pria = [];
	    if ($get) {
	        $pria = $get->result_array();
	    }
	    $get2 = $this->db->from('penginapan.data_kamar_wanita')->get();
	    if ($get2) {
	        $wanita = $get2->result_array();
	    }
	    $get3 = $this->db->where('DATE(tanggal_checkin)', date('Y-m-d'))->where('tanggal_checkout is NULL', null, false)->get('penginapan.penginapan');
	    $tamu = [];
	    if ($get3){
	        $tamu = $get3->result_array();
	    }
	    $this->session->set_userdata('tamu', $tamu);
		return ['pria'=>$pria, 'wanita'=>$wanita, 'tamu'=>$tamu];
	}

	public function get_config() {
		$date = $this->input->get('date');
		$date = (empty($date) ? date('Y-m-d'): $date);
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => $this->config->item('admin_url') .'api/web/settings',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"Authorization: Bearer 2|dU55dVAXlbbSrFiKetwoKguuS646XgVLYYlUe19I9c1af06a"
		),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		$hasil = json_decode($response);
		return $hasil;
	}

	public function get_pis()
	{
		$date = $this->input->get('date');
		$date = (empty($date) ? date('Y-m-d'): $date);
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.terminalpulogebang.com/pis-baru?date=". $date,
	#	CURLOPT_URL => "http://Localhost/API-TTPG/pis-baru?date=". $date,
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"X-TTPG-KEY: e10adc3949ba59abbe56e057f20f883e"
		),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		$hasil = json_decode($response);
		header('Content-Type: application/json');
		echo json_encode($hasil);
	}

	function email(){
		$to = $this->input->post('email');
		$name = $this->input->post('name');
		$tentang = $this->input->post('subject');
		$teks = $this->input->post('message');
		$config = [
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.gmail.com',
			'smtp_user' => 'morait.test@gmail.com',
			'smtp_pass' => 'Test123@',
			'smtp_port' => 465,
			'crlf'      => "\r\n",
			'newline'   => "\r\n",
			'useragent'=> 'Website TTPG'
		];
		$b = '<p>Email FROM <strong>'. $name .'</strong></p>
				<p>Email: '. $to .'</p>
				<p>'. $teks .'</p>';
		$this->load->library('email', $config);
		$this->email->from($to, $name);
		$this->email->subject('[Web TTPG] '. $tentang);
		$this->email->message($b);
		$this->email->to('gunanto.simamora@gmail.com');
		if ($this->email->send()) {
            echo 'Sukses! email berhasil dikirim.';
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
	}
}
