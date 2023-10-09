

<section class="content">
  <div class="box">
        <div class="box-header with-border">
          <div align="left"><h4><b>Dashboard Jumlah Bus dan Penumpang di Terminal Terpadu Pulo Gebang </b></h4></div>

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
				<h3><?php foreach ($pnpberangkat as $hs){ echo $hs->ttl; }?></h3>
                  <p>Pnp Berangkat</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
			<div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
					<h3><?php foreach ($pnpdatang as $hs){ echo $hs->ttl; }?></h3>
                  <p>Pnp Datang</p>
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
				
                  <h3><?php foreach ($busberangkat as $hs){ echo $hs->ttl; }?></h3>

                  <p>Bus Berangkat</p>
                </div>
                <div class="icon">
                  <i class="fa fa-id-badge"></i>
                </div>
                <a href="<?php echo site_url('') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
			
			<div class="col-lg-3 col-xs-3">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                   <h3><?php foreach ($busdatang as $hs){ echo $hs->ttl; }?></h3>

                  <p>Bus Datang</p>
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



