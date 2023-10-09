
<section class="content">
  <div class="box">
        <div class="box-header with-border">
          <div align="left"><h4><b>Informasi Keberangkatan  Penumpang di Terminal Terpadu Pulo Gebang </b></h4></div>

          <div class="box-tools pull-right"> 
          </div>
        </div>
            <!-- /.box-header -->
             <!-- /.box-header -->
             <div class="box-body dataTables_wrapper"> 
   <!-- /.box -->
   <div class="panel panel-primary">
    <div class="panel-heading">
        <h9 class="panel-title"><i class="icon-book"></i> Data Keberangkatan Penumpang (Harian)</h9>
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
							$this->load->model('M_Keberangkatan_pnp');
							$this->db2 = $CI->load->database('database_kedua', TRUE);
							$bln = empty($bln) ? date('m') : $bln;
							$thn = date('Y');
							$ttl = cal_days_in_month(CAL_GREGORIAN, $bln, $thn);
							
								$datang = [];
                
				
                for ($i=0; $i < $ttl; $i++){
                  
                    array_push($datang, 0);
					
                }
    
   
                $this->db2->select('SUM(pnp) as total,  DAY(tanggal) as tgl, status');
                $this->db2->where('MONTH(tanggal)', $bln);
                $this->db2->from('terminal_jadwal');
                $this->db2->group_by('tgl, status');
                $gets = $this->db2->get();
                foreach($gets->result() as $key) {
                    $t = (int) $key->tgl - 1;
                    switch ((int) $key->status) {
                       
                        case 2:
                            $datang[$t] = (int) $key->total;
                        break; 
                    }
                }
            ?>
			</div>
	
            <div class="panel panel-primary">
        <div class="panel-heading">
          <h9 class="panel-title"><i class="icon-book"></i>Data Keberangkatan Penumpang AKAP (Bulanan)</h9>
        </div>

    <div id="chart-bulan" style="width:100%; height:400px;"></div>
    <?php 
    $this->db2->select('sum(pnp) as total, MONTH(tanggal) as bln, status');
    $this->db2->where('YEAR(tanggal)', date('Y'));
    $this->db2->group_by('bln, status');
    $get = $this->db2->get('terminal_jadwal');
    $Keberangkatan_bln = [];
	
    for ($i=0; $i < 12; $i++){
        array_push($Keberangkatan_bln, 0);
      
    }
    foreach($get->result() as $key) {
        $bln = ((int) $key->bln -1);
        switch ((int) $key->status) {
            case 2:
                $Keberangkatan_bln[$bln] = (int) $key->total;
            break;
           
           
        }
    }
            ?>
		  </div> 
      </table>
    </div> <!-- /container -->
		
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
                text: 'Grafik Keberangkatan Penumpang'
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
              
                name: 'Keberangkatan',
                data: <?= json_encode($datang) ?>
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
                name: 'Keberangkatan Penumpang Bus AKAP',
                data: <?= json_encode($Keberangkatan_bln) ?>
            },			
        ]
        });

		});
	</script>
</div>	
</div>		
</section>	

