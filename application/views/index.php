 <?php 
 $this->load->view('template/header');
 $this->load->view('template/menu');
 $this->load->view('items/carousel', ['config'=>$config]);
 ?>
 

  <main id="main">
    <?php
      $this->load->view('items/blogs', ['blog'=>$blog]);
      $this->load->view('items/pis', ['config'=>$config]);
      $this->load->view('items/aboutus', ['config'=>$config]);
      $this->load->view('items/daftarpo', ['config'=>$config]);
      $this->load->view('items/integrasi', ['config'=>$config]);
      $this->load->view('items/angkot', ['config'=>$config]);
      $this->load->view('items/galery', ['config'=>$config]);
      $this->load->view('items/struktur', ['config'=>$config]);
      $this->load->view('items/tupoksi', ['config'=>$config]);
      $this->load->view('items/penginapan', ['config'=>$config]);
      $this->load->view('items/contactus', ['config'=>$config]);
    ?>


  </main><!-- End #main -->

<?php $this->load->view('template/footer') ?>