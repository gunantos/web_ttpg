

<section class="content">
  <div class="box">
        <div class="box-header with-border">
          <div align="left"><h4><b>Dashboard Jumlah Penumpang Per Hari ini Berdasarkan Integrasi Agregator </b></h4></div>

          <div class="box-tools pull-right"> 
          </div>
        </div>
<!-- /.box-header -->
<div class="box-body dataTables_wrapper"> 
     <div class="row">
             <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php foreach ($traveloka as $hs){ echo $hs->ttl; }?></h3>
                  <p>Traveloka</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('traveloka') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
			<div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                     <h3><?php foreach ($redbus as $hs){ echo $hs->ttl; }?></h3>

                  <p>Redbus</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('redbus') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
			<div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                   <h3><?php foreach ($easybook as $hs){ echo $hs->ttl; }?></h3>

                  <p>Easybook</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('easybook') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
			<div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php foreach ($rongrit as $hs){ echo $hs->ttl; }?></h3>

                  <p>Rongrit</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('rongrit') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
			<div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php foreach ($sejalan as $hs){ echo $hs->ttl; }?></h3>

                  <p>Sejalan</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('sejalan') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
			<div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php foreach ($bustiket as $hs){ echo $hs->ttl; }?></h3>

                  <p>Bus Tiket</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('bustiket') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
						<div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?php foreach ($jaketbus as $hs){ echo $hs->ttl; }?></h3>

                  <p>Jaketbus</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('jaketbus') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
						<div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                   <h3><?php foreach ($select_all as $hs){ echo $hs->ttl; }?></h3>

                  <p>Total</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('all') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
     </div>
</div>
			
<div class="box-header with-border">
     <div align="left"><h4><b>Dashboard Jumlah Penumpang Per Hari ini Berdasarkan PO yang Memiliki Sistem Mandiri</b></h4></div>

          <div class="box-tools pull-right"> 
          </div>
        </div>
		
		
		 <div class="box-body dataTables_wrapper"> 
             <div class="row">
             <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                  <h3><?php foreach ($pahala_kencana as $hs){ echo $hs->ttl; }?></h3>

                  <p>Pahala Kencana</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
			 <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php foreach ($sinar_jaya as $hs){ echo $hs->ttl; }?></h3>

                  <p>Sinar Jaya</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
			  <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-fuchsia">
                <div class="inner">
                 <h3><?php foreach ($sumber_alam as $hs){ echo $hs->ttl; }?></h3>

                  <p>Sumber Alam</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			   
			<div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                <h3><?php foreach ($gunung_harta as $hs){ echo $hs->ttl; }?></h3>

                  <p>Gunung Harta</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            </div>
			
			<div class="row">
             <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                    <h3><?php foreach ($lorena as $hs){ echo $hs->ttl; }?></h3>

                  <p>Lorena</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
			
             <div class="col-lg-3 col-xs-3">
              <!-- small box -->
               <div class="small-box bg-yellow">
                <div class="inner">
                      <h3><?php foreach ($karina as $hs){ echo $hs->ttl; }?></h3>

                  <p>Karina</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
			
             <div class="col-lg-3 col-xs-3">
              <!-- small box -->
             <div class="small-box bg-fuchsia">
                <div class="inner">
                  <h3><?php foreach ($als as $hs){ echo $hs->ttl; }?></h3>

                  <p>A L S</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
		
             <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                 <h3><?php foreach ($garuda_mas as $hs){ echo $hs->ttl; }?></h3>

                  <p>Garuda Mas</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- /.box-body -->
			</div>
			
			<div class="row">
             <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-primary">
                <div class="inner">
                    <h3><?php foreach ($agra_mas as $hs){ echo $hs->ttl; }?></h3>

                  <p>AGRA MAS</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
			
             <div class="col-lg-3 col-xs-3">
              <!-- small box -->
               <div class="small-box bg-yellow">
                <div class="inner">
                   <h3><?php foreach ($san as $hs){ echo $hs->ttl; }?></h3>

                  <p>SAN</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
			
		
             <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-fuchsia">
                <div class="inner">
                 <h3><?php foreach ($rosalia as $hs){ echo $hs->ttl; }?></h3>

                  <p>Rosalia</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
			 <div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                   <h3><?php foreach ($hiba as $hs){ echo $hs->ttl; }?></h3>
				  
				  <p>Hiba Grup</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- /.box-body -->
			</div>
			


			</div>
			</div>


   <!-- /.box -->
</section>



