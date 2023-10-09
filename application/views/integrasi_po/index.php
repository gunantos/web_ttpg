 <?php
   $url=$_SERVER['REQUEST_URI'];
  # header("Refresh: 10; URL=$url");
   
?>

<section class="content">
  <div class="box">
        <div class="box-header with-border">
          <div align="left"><h4><b>Integrasi Data PO Yang Memiliki Sistem Sendiri </b></h4></div>

          <div class="box-tools pull-right"> 
          </div>
        </div>
            <!-- /.box-header -->
             <!-- /.box-header -->
             <div class="box-body dataTables_wrapper"> 
   <!-- /.box -->
   <div class="panel panel-primary">
    <div class="panel-heading">
        <h9 class="panel-title"><i class="icon-book"></i> Data Integrasi (Harian)</h9>
    <div class="col-sm-4 pull-right">
        <form method="get" action="">
            <div class="input-group">
                <select class="form-control" name="bulan">
                <?php
                
                    $bln=$this->input->get('bulan');
                    if (empty($bln)) {
                        if (!empty($this->input->get('tanggal'))) {
                            $bln = date('m', strtotime($this->input->get('tanggal')));
                        }
                    }
                    $bln = (empty($bln) ? date('m') : $bln);
                    $bln= (int) $bln;
                    $arrbln = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    for($i=0; $i < 12; $i++) {
                        echo '<option '. (($i + 1) == $bln ? ' selected ' : '') .'value="'. ($i + 1) .'">'. $arrbln[$i] .'</option>';
                    }
                ?>
                </select><span class="input-group-btn">
                <button class="btn btn-default" type="submit">GO</button>
                </span>
                </div>
                </form>
            </div>
    </div>

    <div id="chart-harian" style="width:100%; height:400px;"></div>

    <?php 
			$CI = &get_instance();
			$this->load->model('M_Integrasi_po');
			$this->db2 = $CI->load->database('database_kedua', TRUE);
			$bln = empty($bln) ? date('m') : $bln;
			$thn = date('Y');
				$ttl = cal_days_in_month(CAL_GREGORIAN, $bln, $thn);
                $pahala_kencana = [];
                $sinarjaya = [];
                $sumber_alam = [];
                $gunung_harta = [];
                $lorena = [];
                $karina = [];
                $als = [];
				$garuda_mas = [];
				$agra_mas = [];
				$san = [];
				$rosalia = [];
				$hibautama = [];
				
                for ($i=0; $i < $ttl; $i++){
                    array_push($pahala_kencana, 0);
                    array_push($sinarjaya, 0);
                    array_push($sumber_alam, 0);
                    array_push($gunung_harta, 0);
                    array_push($lorena, 0);
                    array_push($karina, 0);
					array_push($als, 0);
					array_push($garuda_mas, 0);
					array_push($agra_mas, 0);
					array_push($san, 0);
					array_push($rosalia, 0);
					array_push($hibautama, 0);
					
                }
				
                $this->db2->select('COUNT(id_user) as total,  DAY(tgl_berangkat) as tgl, id_user');
                $this->db2->where('MONTH(tgl_berangkat)', $bln);
                $this->db2->from('boarding');
                $this->db2->group_by('tgl, id_user');
                $gets = $this->db2->get();
                foreach($gets->result() as $key) {
                    $t = (int) $key->tgl - 1;
                    switch ((int) $key->id_user) {
                        case 29:
                            $pahala_kencana[$t] = (int) $key->total;
                        break;
                        case 33:
                            $sinarjaya[$t] = (int) $key->total;
                        break;
                        case 41:
                            $sumber_alam[$t] = (int) $key->total;
                        break;
                        case 36:
                            $gunung_harta[$t] = (int) $key->total;
                        break;
                        case 30:
                            $lorena[$t] = (int) $key->total;
                        break;
                        case 2:
                            $karina[$t] = (int) $key->total;
                        break;
						case 42:
                            $als[$t] = (int) $key->total;
                        break;
						case 52:
                            $garuda_mas[$t] = (int) $key->total;
                        break;
						case 49:
                            $agra_mas[$t] = (int) $key->total;
                        break;
						case 37:
                            $san[$t] = (int) $key->total;
                        break;
						case 32:
                            $rosalia[$t] = (int) $key->total;
                        break;
						case 45:
                            $hibautama[$t] = (int) $key->total;
                        break;
						
	                       
                    }
                }
            ?>
			</div>


      <div class="panel panel-primary">
        <div class="panel-heading">
          <h9 class="panel-title"><i class="icon-book"></i>Data Integrasi (Bulanan)</h9>
        </div>

    <div id="chart-bulan" style="width:100%; height:400px;"></div>
    <?php 
    $this->db2->select('count(id_user) as total, MONTH(tgl_berangkat) as bln, id_user');
    $this->db2->where('YEAR(tgl_berangkat)', date('Y'));
    $this->db2->group_by('bln, id_user');
    $get = $this->db2->get('boarding');
    $pahala_kencana_bln = [];
    $sinarjaya_bln = [];
    $sumber_alam_bln = [];
    $gunung_harta_bln = [];
    $lorena_bln = [];
    $karina_bln = [];
	$als_bln = [];
	$garuda_mas_bln = [];
	$agra_mas_bln = [];
	$san_bln = [];
	$rosalia_bln = [];
	$hibautama_bln = [];
	
    for ($i=0; $i < 12; $i++){
        array_push($pahala_kencana_bln, 0);
        array_push($sinarjaya_bln, 0);
        array_push($sumber_alam_bln, 0);
        array_push($gunung_harta_bln, 0);
        array_push($lorena_bln, 0);
        array_push($karina_bln, 0);
		array_push($als_bln, 0);
		array_push($garuda_mas_bln, 0);
		array_push($agra_mas_bln, 0);
		array_push($san_bln, 0);
		array_push($rosalia_bln, 0);
		array_push($hibautama_bln, 0);
      
    }
    foreach($get->result() as $key) {
        $bln = ((int) $key->bln -1);
        switch ((int) $key->id_user) {
            case 29:
                $pahala_kencana_bln[$bln] = (int) $key->total;
            break;
            case 33:
                $sinarjaya_bln[$bln] = (int) $key->total;
            break;
            case 41:
                $sumber_alam_bln[$bln] = (int) $key->total;
            break;
            case 36:
                $gunung_harta_bln[$bln] = (int) $key->total;
            break;
            case 2:
                $lorena_bln[$bln] = (int) $key->total;
            break;
            case 30:
                $karina_bln[$bln] = (int) $key->total;
            break;
			case 43:
                $als_bln[$bln] = (int) $key->total;
            break;
			case 52:
                $garuda_mas_bln[$bln] = (int) $key->total;
            break;
			case 49:
                $agra_mas_bln[$bln] = (int) $key->total;
            break;
			case 37:
                $san_bln[$bln] = (int) $key->total;
            break;
			case 32:
                $rosalia_bln[$bln] = (int) $key->total;
            break;
			case 45:
                $hibautama_bln[$bln] = (int) $key->total;
            break;
           
        }
    }
            ?>
		  </div> 
      </table>
    </div> <!-- /container -->
	
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h9 class="panel-title"><i class="icon-book"></i>Data Integrasi Terkini</h9>
        </div>

		<form method="get">
    <?php 
    
    $tgl = $this->input->get('tgl_berangkat');
    $tgl = empty($tgl) ? date('Y-m-d') : $tgl;
    ?>
			<label>PILIH TANGGAL</label>
			<input type="date" value="<?= $tgl ?>" name="tgl_berangkat">
			<input type="submit" value="FILTER">
		</form>
 
		<div class="box-body"><div id="bar-pnp" style="width:100%; height:400px;"></div>
			<?php 
			$no = 1;
			
			
            if(!empty($tgl)) {
                $this->db2->where('boarding.tgl_berangkat', $tgl);
            }else{
                $this->db2->where('boarding.tgl_berangkat', date('Y-m-d'));
            }
            $this->db2->select('COUNT(jlh_pnp) as total,  DAY(tgl_berangkat) as tgl, id_user');
            $this->db2->from('boarding');
			$this->db2->group_by('tgl, id_user');
            $pahala_kencana_ = 0;
            $sinarjaya_ = 0;
            $sumber_alam_ =0 ;
            $gunung_harta_ = 0;
            $lorena_ = 0;
            $karina_ = 0;
            $als_ = 0;
			$garuda_mas_ = 0;
			$agra_mas_ = 0;
			$san_ = 0;
			$rosalia_ = 0;
			$hibautama_ = 0;
			
            $get3 = $this->db2->get();
            foreach($get3->result() as $key) {
                    switch ((int) $key->id_user) {
                        case 29:
                            $pahala_kencana_ = (int) $key->total;
                        break;
                        case 33:
                            $sinarjaya_ = (int) $key->total;
                        break;
                        case 41:
                            $sumber_alam_ = (int) $key->total;
                        break;
                        case 36:
                            $gunung_harta_ = (int) $key->total;
                        break;
                        case 30:
                            $lorena_ = (int) $key->total;
                        break;
						
                        case 2:
                            $karina_ = (int) $key->total;
                        break;
						case 43:
                            $als_ = (int) $key->total;
                        break;
						case 52:
						$garuda_mas_ = (int) $key->total;
                        break;
						case 49:
						$agra_mas_ = (int) $key->total;
                        break;
						case 37:
						$san_ = (int) $key->total;
                        break;
						case 32:
						$rosalia_ = (int) $key->total;
                        break;
						case 45:
						$hibautama_ = (int) $key->total;
                        break;
                       
                    }
            }
			?>
			</div>

		  </section>

<div id="container" style="width:100%; height:400px;"></div>
<script src="https://code.highcharts.com/highcharts.js"></script>

<script>
"use strict"
var arrTgl = []
for(let i = 0; i < 31; i++){
    arrTgl.push(i+1)
} 
document.addEventListener('DOMContentLoaded', function () {
        var myChart = Highcharts.chart('chart-harian', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Grafik Integrasi Data PO Harian'
            },
            xAxis: {
                categories: arrTgl
            },
            yAxis: {
                title: {
                    text: 'Jumlah Penumpang'
                }
            },
            series: [{
                name: 'Pahala Kencana',
                data: <?= json_encode($pahala_kencana) ?>
            },{
                name: 'Sinarjaya',
                data: <?= json_encode($sinarjaya) ?>
            },{
                name: 'sumber_alam',
                data: <?= json_encode($sumber_alam) ?>
            },{
                name: 'gunung_harta',
                data: <?= json_encode($gunung_harta) ?>
            },{
                name: 'lorena',
                data: <?= json_encode($lorena) ?>
            },{
                name: 'karina',
                data: <?= json_encode($karina) ?>
            },{
                name: 'Als',
                data: <?= json_encode($als) ?>
            },{
                name: 'Garuda Mas',
                data: <?= json_encode($garuda_mas) ?>
            },{
                name: 'Agra MAs',
                data: <?= json_encode($agra_mas) ?>
            },{
                name: 'San',
                data: <?= json_encode($san) ?>
            },{
                name: 'Rosalia',
                data: <?= json_encode($rosalia) ?>
            },{
                name: 'Hiba',
                data: <?= json_encode($hibautama) ?>
            },
        ]
        });

        var myChart = Highcharts.chart('chart-bulan', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Grafik Penumpang Bulanan'
            },
            xAxis: {
                categories: arrTgl
            },
            yAxis: {
                title: {
                    text: 'Jumlah Penumpang'
                }
            },
            series: [{
                name: 'Pahala Kencana',
                data: <?= json_encode($pahala_kencana_bln) ?>
            },{
                name: 'Sinarjaya',
                data: <?= json_encode($sinarjaya_bln) ?>
            },{
                name: 'sumber_alam',
                data: <?= json_encode($sumber_alam_bln) ?>
            },{
                name: 'gunung_harta',
                data: <?= json_encode($gunung_harta_bln) ?>
            },{
                name: 'lorena',
                data: <?= json_encode($lorena_bln) ?>
            },{
                name: 'karina',
                data: <?= json_encode($karina_bln) ?>
            },{
                name: 'Als',
                data: <?= json_encode($als_bln) ?>
            },{
                name: 'Garuda Mas',
                data: <?= json_encode($garuda_mas_bln) ?>
            },{
                name: 'Agra MAs',
                data: <?= json_encode($agra_mas_bln) ?>
            },{
                name: 'San',
                data: <?= json_encode($san_bln) ?>
            },{
                name: 'Rosalia',
                data: <?= json_encode($rosalia_bln) ?>
            },{
                name: 'Hiba',
                data: <?= json_encode($hibautama_bln) ?>
            },			
        ]
        });
        var myChart = Highcharts.chart('bar-pnp', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'TOTAL PENUMPANG PER TANGGAL'
            },
            xAxis: {
                categories: ['Pahala Kencana', 'Sinar jaya', 'Sumber Alam', 'Gunung Harta', 'Lorena', 'Karina', 'ALS', 'Garuda Mas', 'Agra Mas', 'San', 'Rosalia', 'Hiba']
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            series: [{
                name: 'PNP',
                data: [<?= json_encode($pahala_kencana_) ?>, <?= json_encode($sinarjaya_) ?>, <?= json_encode($sumber_alam_) ?>, <?= json_encode($gunung_harta_) ?>, <?= json_encode($lorena_) ?>, <?= json_encode($karina_) ?>,  <?= json_encode($als_) ?>,  <?= json_encode($garuda_mas_) ?>,  <?= json_encode($agra_mas_) ?>,  <?= json_encode($san_) ?>,  <?= json_encode($rosalia_) ?>,  <?= json_encode($hibautama_) ?>]
            },
        ]
        });
    });
</script>
</script>