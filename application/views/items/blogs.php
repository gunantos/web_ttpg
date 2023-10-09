<section id="blogs" class="mb-2">
      <div class="container">
     <div class="row">
    <!--Ik gebruik hieronder alleen het middiv omdat dat de enige info is die ik wil vervangen-->
    <div class="col-lg-7  col-md-12 col-12" id="middiv">
      <div id="myCarousel" class="carousel slide" data-ride="carousel" align="center">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <?php
            $list_item = '';
            $ke = 0;
            foreach($blog['baru'] as $key) {
              if ($ke < 5) {
                echo '<div class="carousel-item '. ($ke == 0 ? 'active' : '') .'">
                      <a href="'. base_url('blog/'.$key->url) .'">
                      <img src="'. $this->config->item('admin_url').$key->images .'" alt="'. $key->title .'" style="width:100%;">
                      <div class="carousel-caption d-none d-md-block">
                        <small><b>'. toDateIndonesia($key->created_at) .'</b></small>
                        <h4>'. $key->title .'</h4>
                      </div>
                      </a>
                    </div>';
                    $list_item .= '<li class="list-inline-item '. ($ke == 0 ? 'active' : '') .'">
                                    <a id="carousel-selector-'. $ke .'" class="selected" data-slide-to="'. $ke .'" data-target="#myCarousel">
                                        <img src="'. $this->config->item('admin_url').$key->images .'" class="img-fluid" />
                                        <span class="card-body text-left text-black" style="color: #000">'. $key->title .'</span>
                                    </a>
                                  </li>';
              }
              $ke++;
            }
          ?>
        </div>


        <!-- Indicators -->
        <ol class="carousel-indicators list-inline">
          <?= $list_item ?>
         </ol>
      </div>
    </div>
   <div class="col-12 col-md-12 col-lg-5" id="tab-list-news">
              <ul class="nav nav-tabs nav-fill custom" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">TERBARU</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">POPULER</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <?php
                     foreach($blog['baru'] as $key) {
                       echo '<a href="'. base_url('blog/'.$key->url) .'" class="list-group-item custom">
                              <div class="row">
                                <div class="col-xs-4 no-padding">
                                  <img src="'. $this->config->item('admin_url').$key->images .'" class="img-responsive padding-right-10">
                                </div>
                                <div class="col-xs-8 no-padding pl-2">
                                  <div style="overflow: hidden;height: 57px;">
                                    <h6 class="no-margin"><span style="color: #000000;">'. $key->title .'</span></h6>
                                  </div>
                                </div>  
                              </div>
                            </a>';
                     }
                  ?>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  <?php
                     foreach($blog['populer'] as $key) {
                       echo '<a href="'. base_url($key->url) .'" class="list-group-item custom">
                              <div class="row">
                                <div class="col-xs-4 no-padding">
                                  <img src="'. $this->config->item('admin_url').$key->images .'" class="img-responsive padding-right-10">
                                </div>
                                <div class="col-xs-8 no-padding pl-2">
                                  <div style="overflow: hidden;height: 57px;">
                                    <h6 class="no-margin"><span style="color: #000000;">'. $key->title .'</span></h6>
                                  </div>
                                </div>  
                              </div>
                            </a>';
                     }
                  ?>
                </div>
          </div>
    </div>
</div>
  </div>
</section>