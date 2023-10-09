<?php
	// MSG
	function show_msg($content='', $type='success', $icon='fa-info-circle', $size='14px') {
		if ($content != '') {
			return  '<p class="box-msg">
				      <div class="info-box alert-' .$type .'">
					      <div class="info-box-icon">
					      	<i class="fa ' .$icon .'"></i>
					      </div>
					      <div class="info-box-content" style="font-size:' .$size .'">
				        	' .$content
				      	.'</div>
					  </div>
				    </p>';
		}
	}

	function show_succ_msg($content='', $size='14px') {
		if ($content != '') {
			return   '<p class="box-msg">
				      <div class="info-box alert-success">
					      <div class="info-box-icon">
					      	<i class="fa fa-check-circle"></i>
					      </div>
					      <div class="info-box-content" style="font-size:' .$size .'">
				        	' .$content
				      	.'</div>
					  </div>
				    </p>';
		}
	}

	function show_err_msg($content='', $size='14px') {
		if ($content != '') {
			return   '<p class="box-msg">
				      <div class="info-box alert-error">
					      <div class="info-box-icon">
					      	<i class="fa fa-warning"></i>
					      </div>
					      <div class="info-box-content" style="font-size:' .$size .'">
				        	' .$content
				      	.'</div>
					  </div>
				    </p>';
		}
	}

	// MODAL
	function show_my_modal($content='', $id='', $data='', $size='md') {
		$_ci = &get_instance();

		if ($content != '') {
			$view_content = $_ci->load->view($content, $data, TRUE);

			return '<div class="modal fade" id="' .$id .'" role="dialog">
					  <div class="modal-dialog modal-' .$size .'" role="document">
					    <div class="modal-content">
					        ' .$view_content .'
					    </div>
					  </div>
					</div>';
		}
	}

	function show_my_confirm($id='', $class='', $title='Konfirmasi', $yes = 'Ya', $no = 'Tidak') {
		$_ci = &get_instance();

		if ($id != '') {
			echo   '<div class="modal fade" id="' .$id .'" role="dialog">
					  <div class="modal-dialog modal-md" role="document">
					    <div class="modal-content">
					        <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
						      <h3 style="display:block; text-align:center;">' .$title .'</h3>
						      
						      <div class="col-md-6">
						        <button class="form-control btn btn-primary ' .$class .'"> <i class="glyphicon glyphicon-ok-sign"></i> ' .$yes .'</button>
						      </div>
						      <div class="col-md-6">
						        <button class="form-control btn btn-danger" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> ' .$no .'</button>
						      </div>
						    </div>
					    </div>
					  </div>
					</div>';
		}
	}

		function getId($tabel,$id)
	{
		$ci=& get_instance();
		$q = $ci->db->query("select MAX(".$id.") as kd_max from ".$tabel."");
		$kd = "";
		if($q->num_rows()>0)
		{
			foreach($q->result() as $k)
			{
				$tmp = ((int)$k->kd_max)+1;
				$kd = sprintf("%09s", $tmp);
			}
		}
		else
		{
			$kd = "000000001";
		}
		return $kd;
	}
	
		function buat_kode($tabel,$id)   {

			  $this->db->select('RIGHT(tbl_po.id_po,4) as kode', FALSE);
			  $this->db->order_by('id_po','DESC');    
			  $this->db->limit(1);    
			  $query = $this->db->get('tbl_po');      //cek dulu apakah ada sudah ada kode di tabel.    
			  if($query->num_rows() <> 0){      
			   //jika kode ternyata sudah ada.      
			   $data = $query->row();      
			   $kode = intval($data->kode) + 1;    
			  }
			  else {      
			   //jika kode belum ada      
			   $kode = 1;    
			  }

			  $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
			  $kodejadi = "PO".$kodemax;    // hasilnya ODJ-9921-0001 dst.
			  return $kodejadi;  
		}


		function cmb_dinamis($name, $table, $field, $pk, $selected=null, $extra=null)
		{
			$ci   = get_instance();
			$cmb  = "<select name='$name' class='form-control' $extra>";

			$data = $ci->db->get($table)->result();
			foreach ($data as $row) {
				$cmb .= "<option value='".$row->$pk."'";
				//Apabila $selected bernilai sama dengan nilai $pk maka akan bernilai selected selain itu akan bernilai null
				$cmb .= $selected == $row->$pk ? 'selected' : '';
				$cmb .= ">".$row->$field."</option>";
			}
			$cmb .= "</select>";

			return $cmb;
		}
		
		function number_format_short( $n, $precision = 1 ) {
			if ($n < 900) {
				// 0 - 900
				$n_format = number_format($n, $precision);
				$suffix = '';
			} else if ($n < 900000) {
				// 0.9k-850k
				$n_format = number_format($n / 1000, $precision);
				$suffix = 'K';
			} else if ($n < 900000000) {
				// 0.9m-850m
				$n_format = number_format($n / 1000000, $precision);
				$suffix = 'M';
			} else if ($n < 900000000000) {
				// 0.9b-850b
				$n_format = number_format($n / 1000000000, $precision);
				$suffix = 'B';
			} else {
				// 0.9t+
				$n_format = number_format($n / 1000000000000, $precision);
				$suffix = 'T';
			}
		 
			if ( $precision > 0 ) {
				$dotzero = '.' . str_repeat( '0', $precision );
				$n_format = str_replace( $dotzero, '', $n_format );
			}
		 
			return $n_format . $suffix;
		}

	

 function findArray($jk, $id, $tamu) {
     if (empty($tamu) || sizeof($tamu) < 1) {
         if (isset($_SESSION['tamu'])) {
             $tamu = $_SESSION['tamu'];
         }
     }
     foreach($tamu as $key) {
            if (strtolower($key['jenis_kelamin'])==strtolower($jk) && $key['id_kamar'] == $id) {
                return $key;
            }
        }
        return false;
    }
     function ceckIsi($jk, $id,$tamu) {
         $cek = findArray($jk, $id, $tamu);
        if ($cek) {
            return 'isi';
        }
        return 'kosong';
    }
    function getIdPesan($jk, $id, $tamu) {
        $cek = findArray($jk, $id, $tamu);
        if ($cek) {
            return $cek['id'];
        }
        return 0;
    }
	if (!function_exists('toDateIndonesia')) {
		function toDateIndonesia($tgl) {
			$wibDatetime = strtotime($tgl);
			$namaHari = [
				'Sunday'    => 'Minggu',
				'Monday'    => 'Senin',
				'Tuesday'   => 'Selasa',
				'Wednesday' => 'Rabu',
				'Thursday'  => 'Kamis',
				'Friday'    => 'Jumat',
				'Saturday'  => 'Sabtu',
			];

			$namaBulan = [
				'January'   => 'Januari',
				'February'  => 'Februari',
				'March'     => 'Maret',
				'April'     => 'April',
				'May'       => 'Mei',
				'June'      => 'Juni',
				'July'      => 'Juli',
				'August'    => 'Agustus',
				'September' => 'September',
				'October'   => 'Oktober',
				'November'  => 'November',
				'December'  => 'Desember',
			];
			
			return  $namaHari[date("l", $wibDatetime)] . ', ' . date("d", $wibDatetime) . ' ' . $namaBulan[date("F", $wibDatetime)] . ' ' . date("Y", $wibDatetime);
		}
	}
	if (!function_exists('titleToUrl')) {
		function titleToUrl($url) {
			$url = strtolower($url);
			$url = strip_tags($url);
			$url = stripslashes($url);
			$url = html_entity_decode($url);

			# Remove quotes (can't, etc.)
			$url = str_replace('\'', '', $url);

			# Replace non-alpha numeric with hyphens
			$match = '/[^a-z0-9]+/';
			$replace = '-';
			$url = preg_replace($match, $replace, $url);

			$url = trim($url, '-');

			return $url;
		}
	}
?>