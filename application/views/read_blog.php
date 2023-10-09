 <?php 
 $this->load->view('template/header');
 $this->load->view('template/menu');
 ?>
<main class="read-blog-content" id="main">
    <section id="blogs" class="mb-2">
		<div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                    <h3><strong><?= $read->title ?></strong></h3>
                    <small><?= toDateIndonesia($read->created_at) ?></small>
                    <br>
                    <hr>
                    <img src="<?= $this->config->item('admin_url').$read->images ?>" alt="<?= $read->title ?>" style="max-height: 440px; width: 100%" />
                    <br>
                    <br>
                    <?= $read->content ?>
                    <div class="card mt-4">
                        <div class="card-body" style="padding: 5px !important">
                            <div class="da-share-html da-fb da-vk da-tw da-pi da-ok da-gp float-left"></div>
                            <div class="float-right mt-2 mr-2">
                                <span class="badge badge-pill badge-succes"><i class="fa fa-eye"></i> <?= ($read->view + 1) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4" style="padding-top: 80px">
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
</main>
 
<?php $this->load->view('template/footer', ['js'=>base_url('assets/js/jquery.da-share.js'), 'js_teks'=>""]) ?>