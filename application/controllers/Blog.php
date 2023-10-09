<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	public function index()
	{	
        return redirect('/');
	}

    public function read($title) {
        if (empty($title)) {
            return redirect('/');
        }
        $title = titleToUrl($title);
        $get = $this->db->where('url', $title)->get('website.blogs');
        if ($get) {
            if ($get->num_rows() > 0) {
                $row = $get->row();
                $ipAddress = $this->input->ip_address();
                 $cookieName = 'blog_' . $row->id;
                if (!$this->input->cookie($cookieName)) {
                    $cookieValue = time();
                    setcookie($cookieName, $cookieValue, time() + 3600); 
                    $this->db->set('view', 'view+1', false)->where('id', $row->id)->update('website.blogs');
                }
                return $this->load->view('read_blog', ['blog'=>$this->info(), 'read'=>$row]);
            }
        }
        return show_404();
    }
    
    private function info() {
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
}