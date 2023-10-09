<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card extends CI_Controller {
    private $api_url = 'http://103.53.1.114:3030/';

	public function _remap($method, $params = array()) {
		if ($method == 'index') {
			die(show_404());
		}
		return $this->show_manifest($method, $params);
	}

	public function show_manifest($idcard='') {
		if (empty($idcard)) {
			show_404();
		}
		$qid = strtolower($this->input->get('qid'));
		$f= strtolower($this->input->get('f'));
		if (empty($qid) || empty($f)) {
			show_404();
		}
		if ($qid !== 'bmsttpg') {
			show_404();
		}
		if ($f != 'card') {
			show_404();
		}
		$data = [
			'data' => $this->getData($idcard)
		];
		$this->load->view('card', $data);
	}

    private function getData($idcard) {
		$curl = curl_init();
		curl_setopt_array($curl, array(
		CURLOPT_URL => 'http://192.168.1.243:3030/berangkat?idcard='. $idcard .'&$sort[updated]=-1',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => "",
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => "GET",
		CURLOPT_HTTPHEADER => array(
			"X-TTPG-KEY: MFSNJFdxYREMeGdfZprIAIp8eczJJrNT"
		),
		));

		$response = curl_exec($curl);
		curl_close($curl);
		$hasil = json_decode($response);
		return json_encode($hasil);
    }

}