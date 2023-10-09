 <section id="integrasi" class="integrasi">
      <div class="container">

        <div class="section-title">
          <h2><?= isset($config->integrasi->title) ? $config->integrasi->title : '' ?></h2>
          
          <p><?= isset($config->integrasi->description) ? $config->integrasi->description : '' ?></p>
        </div>

        <div class="owl-carousel clients-carousel">
          <img src="assets/img/clients/traveloka.jpg" alt="">
          <img src="assets/img/clients/redbus.jpg" alt="">
          <img src="assets/img/clients/easy.png" alt="">
          <img src="assets/img/clients/bosbis.png" alt="">
		      <img src="assets/img/clients/sejalan.png" alt="">
          <img src="assets/img/clients/bustiket.png" alt="">

          </div>

          <?php
            if (isset($config->video)) {
                if (isset($config->video->view) && $config->video->view) {
                    echo '<video class="embed-responsive" width="1200px" height="600px" controls>
                            <source src="'. $config->video->content .'" type="video/mp4">
                            <source src="video.mp4" type="video/mp4">
                        </video>';
                }
            }
          

          ?>
        

      </div>
    </section><!-- End Our Clients Section -->