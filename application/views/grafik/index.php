<body>
<div class="container">
<div class="row">
  <div class="col-md-6 bg">
 <h2 align="center"  class="style1" style="background:#3c8dbc"><strong>Grafik Harian Bus</strong></h2>
<div id="echart_pie" style="height:400px;"></div>

    <!-- Chart.js -->
    <script src="<?php echo base_url(); ?>./assets/bower_components/charts/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>./assets/bower_components/charts/echarts.min.js"></script>
  <script> 
 // Desain Grafik
 
  var echartPie = echarts.init(document.getElementById('echart_pie'));
      echartPie.setOption({
        tooltip: {
          trigger: 'item',
          formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
          x: 'center',           y: 'bottom',
// kategorinya samakan dengan isi database
          data: ['Bus Berangkat', 'Bus datang']
        },
        toolbox: {
          show: true,
          feature: {
            magicType: {
              show: true,
              type: ['pie', 'funnel'],
              option: {
                funnel: {
                  x: '25%',
                  width: '50%',
                  funnelAlign: 'left',
                  max: 500
                }
              }
            },
            restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        calculable: true,
        series: [{
          type: 'pie',
          radius: '55%',
          center: ['50%', '48%'],
          data:
          [{
            value: <?php foreach ($busberangkat as $hs){ echo $hs->ttl; }?>,
            name: 'busberangkat'
          }, {
           value: <?php foreach ($busdatang as $hs){ echo $hs->ttl; }?>,
            name: 'busdatang'
          }
		  ],
        }]
      });

      var dataStyle = {
        normal: {
          label: {
            show: false
          },
          labelLine: {
            show: false
          }
        }       };
</script> 
</div>
<div class="col-md-6 bg">
 <h2 align="center"  class="style1" style="background:#3c8dbc"><strong>Grafik Harian Penumpang </strong></h2>
<div id="echart_pie1" style="height:400px;"></div>

    <!-- Chart.js -->
    <script src="<?php echo base_url(); ?>./assets/bower_components/charts/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>./assets/bower_components/charts/echarts.min.js"></script>
  <script> 
 // Desain Grafik
 
  var echartPie = echarts.init(document.getElementById('echart_pie1'));
      echartPie.setOption({
        tooltip: {
          trigger: 'item',
          formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
          x: 'center',           y: 'bottom',
// kategorinya samakan dengan isi database
          data: ['PNP Berangkat', 'PNP datang']
        },
        toolbox: {
          show: true,
          feature: {
            magicType: {
              show: true,
              type: ['pie', 'funnel'],
              option: {
                funnel: {
                  x: '25%',
                  width: '50%',
                  funnelAlign: 'left',
                  max: 500
                }
              }
            },
            restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        calculable: true,
        series: [{
          type: 'pie',
          radius: '55%',
          center: ['50%', '48%'],
          data:
          [{
            value: <?php foreach ($pnpberangkat as $hs){ echo $hs->ttl; }?>,
            name: 'pnpberangkat'
          }, {
           value: <?php foreach ($pnpdatang as $hs){ echo $hs->ttl; }?>,
            name: 'pnpdatang'
          }
		  ],
        }]
      });

      var dataStyle = {
        normal: {
          label: {
            show: false
          },
          labelLine: {
            show: false
          }
        }       };
</script> 
</body>
</div>
<head>

	<script type="text/javascript" src="assets/plugins/chart.js/Chart.js"></script>
</head>
<body>
	<style type="text/css">
	body{
		font-family: roboto;
	}
 
	table{
		margin: 0px auto;
	}
	</style>
 
 
	<center>
		<h2>GRAFIK INTEGRASI DATA TERMINAL PULO GEBANG</h2>
	</center>
 

	<div style="width: 1200;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
	<br/>
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ["Traveloka", "Redbus", "Easybook", "Sejalan", "Rongit", "Tiket Bus",
				"Hiba Putra", "Jaket Bus","Pahala Kencana", "Sinar jaya", "Sumber Alam",
				"Gunung Harta", "Lorena", "Karina", "ALS", "Rosalia Indah", "Agra Mas", 
				"Garuda Mas","SAN"],
				datasets: [{
					label: '',
					data: [
					<?php foreach ($traveloka as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($redbus as $hs){ echo $hs->ttl; }?>, 
					<?php foreach ($easybook as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($sejalan as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($rongrit as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($bustiket as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($hiba as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($jaketbus as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($pahala_kencana as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($sinar_jaya as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($sumber_alam as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($gunung_harta as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($lorena as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($karina as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($als as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($rosalia as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($agra_mas as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($garuda_mas as $hs){ echo $hs->ttl; }?>,
					<?php foreach ($san as $hs){ echo $hs->ttl; }?>
					],
					backgroundColor: [
					"#ff6384",
					"#36a2eb",
					"#cc65fe",
					"#ffce56",
					"#f38b4a",
					"#56d798",
					"#ff8397",
					"#6970d5",
					"#f38b4a",
					"#f6aa7a",
					"#cc65fe",
					"#8b4af3",
					"#fbdcc8",
					"#4af38b",
					"#f3e04a",
					"#f34a5d",
					
					"#4af38b",
					"#f3e04a",
					"#f34a5d",
					],
					borderColor: [
					
					  "#f38b4a",
					  "#56d798",
					  "#ff8397",
					  "#6970d5"
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>

</html>