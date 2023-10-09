 <section id="hero">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner embed-responsive embed-responsive-21by9" role="listbox">
        <?php
            $get = $this->db->where('active', 1)->order_by('short_no ASC')->get('website.corousels');
            if ($get) {
                $result = $get->result();
                if (is_array($result)) {
                    $ke = 0;
                    foreach($result as $key) {
                        echo '<div class="carousel-item embed-responsive-item '. ($ke == 0 ? 'active' : '') .'" style="background-image: url('. $this->config->item('admin_url').$key->images .')">
                                <div class="carousel-container">
                                    <div class="container">
                                    </div>
                                </div>
                                </div>';
                        $ke++;
                    }
                }
            }
        ?>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
</div>
  </section><!-- End Hero -->