
<section class="content">
  <div class="box">
          <div class="box box-primary">
            <div class="box-header  with-border">
              <h5 class="box-title">Laporan Penumpang AKAP Berangkat dan Datang di Terminal Terpadu Pulo Gebang</h5>
            </div>
			
		<div class="table-responsive">
			<table id="table" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">

				<?php
						
						$this->load->model('M_grafik1');
						//$tgl_berangkat=$_POST['tgl_berangkat'];
						$bln = date('m');
						$thn = date('Y');
							$ttl = cal_days_in_month(CAL_GREGORIAN, $bln, $thn);
							$th =''; $td='';$berangkat=''; $datang='';
							for($i=1; $i<=$ttl; $i++)
							{
								
								$_berangkat = $this->M_grafik1->get_total_berangkatpnp(array('YEAR(tanggal)'=>$thn, 'month(tanggal)'=>$bln, 'day(tanggal)'=>$i, 'status'=>'2'));
								$berangkat .= '<td>'. ($_berangkat > 0 ? number_format($_berangkat) : '') .'</td>';
								$b = ($_berangkat > 0 ? $_berangkat : 0);
								
								$_datang = $this->M_grafik1->get_total_datangpnp(array('YEAR(tanggal)'=>$thn, 'month(tanggal)'=>$bln, 'day(tanggal)'=>$i, 'status'=>'1'));
								$datang .= '<td>'. ($_datang > 0 ? number_format($_datang) : '') .'</td>';
								$d = ($_datang > 0 ? $_datang : 0);
								
								$th .= '<th>'. ($i) .'</th>';
								$td .= '<td>'. ($b > 0 || $d > 0 ? number_format($b + $d) : '') .'</td>';
								
								
							
								
							}
							$total_berangkat = $this->M_grafik1->get_total_berangkatpnp(array('year(tanggal)'=>$thn, 'month(tanggal)'=>$bln, 'status'=>'2'));
							$total_datang = $this->M_grafik1->get_total_datangpnp(array('year(tanggal)'=>$thn, 'month(tanggal)'=>$bln, 'status'=>'1'));
							
						
							
							
							echo ' <thead><tr><th>TANGGAL</th>'. $th .'<th>Total</th></tr></thead>
									<tbody>
									<tr><td><b>TOTAL PNP</b></td>'. $td .'<td ><b>'. number_format($total_berangkat + $total_datang) .'</b></td></tr>
									<tr><td><b>Keberangkatan </b></td>'. $berangkat .'<td><b>'. number_format($total_berangkat) .'</b></td></tr>
									<tr><td><b>Kedatangan </b></td>'. $datang.'<td ><b>'. number_format($total_datang) .'</b></td></tr>
									
									
									
									</tbody>';
?>
			</table>
			</div>
			</div>
		</div>

<section class="content">
  <div class="box">
          <div class="box box-primary">
            <div class="box-header  with-border">
              <h5 class="box-title">Laporan Bus Berangkat dan Datang di Terminal Terpadu Pulo Gebang</h5>
            </div>
			
		<div class="table-responsive">
			<table id="table" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">

				<?php
						
						$this->load->model('M_grafik1');
						//$tanggal=$_POST['tanggal'];
						$bln = date('m');
						$thn = date('Y');
							$ttl = cal_days_in_month(CAL_GREGORIAN, $bln, $thn);
							$th =''; $td='';$berangkat=''; $datang='';
							for($i=1; $i<=$ttl; $i++)
							{
								
								$_berangkat = $this->M_grafik1->get_total_berangkatbus(array('YEAR(tanggal)'=>$thn, 'month(tanggal)'=>$bln, 'day(tanggal)'=>$i, 'status'=>'2'));
								$b = ($_berangkat > 0 ? $_berangkat : 0);
								$berangkat .= '<td>'. ($_berangkat > 0 ? number_format($_berangkat) : '') .'</td>';
								
								$_datang = $this->M_grafik1->get_total_datangbus(array('YEAR(tanggal)'=>$thn, 'month(tanggal)'=>$bln, 'day(tanggal)'=>$i, 'status'=>'1'));
								$datang .= '<td>'. ($_datang > 0 ? number_format($_datang) : '') .'</td>';
								$d = ($_datang > 0 ? $_datang : 0);
								
								$th .= '<th>'. ($i) .'</th>';
								$td .= '<td>'. ($b > 0 || $d > 0 ? number_format($b + $d) : '') .'</td>';
								
								
								
							
								
							}
							$total_berangkat = $this->M_grafik1->get_total_berangkatbus(array('year(tanggal)'=>$thn, 'month(tanggal)'=>$bln, 'status'=>'2'));
							$total_datang = $this->M_grafik1->get_total_datangbus(array('year(tanggal)'=>$thn, 'month(tanggal)'=>$bln, 'status'=>'1'));
							
						
							
							
							echo ' <thead><tr><th>TANGGAL</th>'. $th .'<th>Total</th></tr></thead>
									<tbody>
									<tr><td><b>TOTAL BUS</b></td>'. $td .'<td ><b>'. number_format($total_berangkat + $total_datang) .'</b></td></tr>
									<tr><td><b>Keberangkatan </b></td>'. $berangkat .'<td><b>'. number_format($total_berangkat) .'</b></td></tr>
									<tr><td><b>Kedatangan </b></td>'. $datang.'<td ><b>'. number_format($total_datang) .'</b></td></tr>
									
									
									
									</tbody>';
?>
			</table>
			</div>
			</div>
		</div>
</div>			</section>

