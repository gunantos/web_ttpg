 <?php
   $url=$_SERVER['REQUEST_URI'];
  # header("Refresh: 10; URL=$url");
   
?>

<section class="content">
  <div class="box">
        <div class="box-header with-border">
          <div align="left"><h4><b>Data Integrasi Aplikator </b></h4></div>

          <div class="box-tools pull-right"> 
          </div>
        </div>
            <!-- /.box-header -->
             <!-- /.box-header -->
             <div class="box-body dataTables_wrapper"> 
   <!-- /.box -->
   <div class="panel panel-primary">
    <div class="panel-heading">
        <h9 class="panel-title"><i class="icon-book"></i> Data Integrasi Aplikator (Harian)</h9>
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
			$this->load->model('M_Lap_bus_harian');
			$this->db2 = $CI->load->database('database_kedua', TRUE);
			$bln = empty($bln) ? date('m') : $bln;
			$thn = date('Y');
				$ttl = cal_days_in_month(CAL_GREGORIAN, $bln, $thn);
                $traveloka = [];
                $redbus = [];
                $easybook = [];
                $rongrit = [];
                $sejalan = [];
                $bustiket = [];
                $jaketsbuss = [];
				
                for ($i=0; $i < $ttl; $i++){
                    array_push($traveloka, 0);
                    array_push($redbus, 0);
                    array_push($easybook, 0);
                    array_push($rongrit, 0);
                    array_push($sejalan, 0);
                    array_push($bustiket, 0);
					array_push($jaketsbuss, 0);
                   
                }
				
                $this->db2->select('COUNT(id_user) as total,  DAY(tgl_berangkat) as tgl, id_user');
                $this->db2->where('MONTH(tgl_berangkat)', $bln);
                $this->db2->from('boarding');
                $this->db2->group_by('tgl, id_user');
                $gets = $this->db2->get();
                foreach($gets->result() as $key) {
                    $t = (int) $key->tgl - 1;
                    switch ((int) $key->id_user) {
                        case 24:
                            $traveloka[$t] = (int) $key->total;
                        break;
                        case 25:
                            $redbus[$t] = (int) $key->total;
                        break;
                        case 26:
                            $easybook[$t] = (int) $key->total;
                        break;
                        case 58:
                            $rongrit[$t] = (int) $key->total;
                        break;
                        case 28:
                            $sejalan[$t] = (int) $key->total;
                        break;
                        case 27:
                            $bustiket[$t] = (int) $key->total;
                        break;
						case 999:
                            $jaketsbuss[$t] = (int) $key->total;
                        break;
                       
                    }
                }
            ?>
			</div>


      <div class="panel panel-primary">
        <div class="panel-heading">
          <h9 class="panel-title"><i class="icon-book"></i>Data Integrasi Aplikator (Bulanan)</h9>
        </div>

    <div id="chart-bulan" style="width:100%; height:400px;"></div>
    <?php 
    $this->db2->select('count(id_user) as total, MONTH(tgl_berangkat) as bln, id_user');
    $this->db2->where('YEAR(tgl_berangkat)', date('Y'));
    $this->db2->group_by('bln, id_user');
    $get = $this->db2->get('boarding');
    $traveloka_bln = [];
    $redbus_bln = [];
    $easybook_bln = [];
    $rongrit_bln = [];
    $sejalan_bln = [];
    $bustiket_bln = [];
	$jaketsbuss_bln = [];
	
    for ($i=0; $i < 12; $i++){
        array_push($traveloka_bln, 0);
        array_push($redbus_bln, 0);
        array_push($easybook_bln, 0);
        array_push($rongrit_bln, 0);
        array_push($sejalan_bln, 0);
        array_push($bustiket_bln, 0);
		array_push($jaketsbuss_bln, 0);
      
    }
    foreach($get->result() as $key) {
        $bln = ((int) $key->bln -1);
        switch ((int) $key->id_user) {
            case 24:
                $traveloka_bln[$bln] = (int) $key->total;
            break;
            case 25:
                $redbus_bln[$bln] = (int) $key->total;
            break;
            case 26:
                $easybook_bln[$bln] = (int) $key->total;
            break;
            case 58:
                $rongrit_bln[$bln] = (int) $key->total;
            break;
            case 27:
                $bustiket_bln[$bln] = (int) $key->total;
            break;
            case 28:
                $sejalan_bln[$bln] = (int) $key->total;
            break;
			case 999:
                $jaketsbuss_bln[$bln] = (int) $key->total;
            break;
           
        }
    }
            ?>
		  </div> 
      </table>
    </div> <!-- /container -->
	
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h9 class="panel-title"><i class="icon-book"></i>Data Integrasi Aplikator Terkini</h9>
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
            $traveloka_ = 0;
            $redbus_ = 0;
            $easybook_ =0 ;
            $rongrit_ = 0;
            $sejalan_ = 0;
            $bustiket_ = 0;
            $jaketsbuss_ = 0;
			
            $get3 = $this->db2->get();
            foreach($get3->result() as $key) {
                    switch ((int) $key->id_user) {
                        case 24:
                            $traveloka_ = (int) $key->total;
                        break;
                        case 25:
                            $redbus_ = (int) $key->total;
                        break;
                        case 26:
                            $easybook_ = (int) $key->total;
                        break;
                        case 58:
                            $rongrit_ = (int) $key->total;
                        break;
                        case 28:
                            $sejalan_ = (int) $key->total;
                        break;
                        case 27:
                            $bustiket_ = (int) $key->total;
                        break;
						case 999:
                            $jaketsbuss_ = (int) $key->total;
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
                text: 'Grafik Penumpang Harian'
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
                name: 'Traveloka',
                data: <?= json_encode($traveloka) ?>
            },{
                name: 'Redbus',
                data: <?= json_encode($redbus) ?>
            },{
                name: 'Easybook',
                data: <?= json_encode($easybook) ?>
            },{
                name: 'Rongrit',
                data: <?= json_encode($rongrit) ?>
            },{
                name: 'Sejalan',
                data: <?= json_encode($sejalan) ?>
            },{
                name: 'Bustiket',
                data: <?= json_encode($bustiket) ?>
            },{
                name: 'Jaketbus',
                data: <?= json_encode($jaketsbuss) ?>
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
                name: 'Traveloka',
                data: <?= json_encode($traveloka_bln) ?>
            },{
                name: 'Redbus',
                data: <?= json_encode($redbus_bln) ?>
            },{
                name: 'Easybook',
                data: <?= json_encode($easybook_bln) ?>
            },{
                name: 'Rongrit',
                data: <?= json_encode($rongrit_bln) ?>
            },{
                name: 'Sejalan',
                data: <?= json_encode($sejalan_bln) ?>
            },{
                name: 'Bustiket',
                data: <?= json_encode($bustiket_bln) ?>
            },	{
                name: 'Jaketbus',
                data: <?= json_encode($jaketsbuss_bln) ?>
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
                categories: ['Traveloka', 'Redbus', 'Easybook', 'Rongrit', 'Sejalan', 'Bustiket', 'Jaketbus']
            },
            yAxis: {
                title: {
                    text: ''
                }
            },
            series: [{
                name: 'PNP',
                data: [<?= json_encode($traveloka_) ?>, <?= json_encode($redbus_) ?>, <?= json_encode($easybook_) ?>, <?= json_encode($rongrit_) ?>, <?= json_encode($sejalan_) ?>, <?= json_encode($bustiket_) ?>,  <?= json_encode($jaketsbuss_) ?>]
            },
        ]
        });
    });
</script>