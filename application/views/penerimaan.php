<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Terminal Terpadu Pulo Gebang - Penerimaan</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/vendor/datatable/datatables.min.css"/>
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?v=<?= uniqid() ?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Green - v2.2.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto  d-none d-lg-block"><a href="index.html">Terminal Terpadu<br>Pulo Gebang</a></h1>
      <h1 class="logo mr-auto  d-block d-sm-block d-md-none d-lg-none"><a href="index.html">TTPG</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#home">Home</a></li>
          <li><a href="#about">Tentang Terminal</a></li>
          <li><a href="#why-us">Bus Akap</a></li>
          <li><a href="#portfolio">Galery Terminal</a></li>
          <li><a href="#team">Angkutan Perkotaan</a></li>
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="https://play.google.com/store/apps/details?id=com.trontransportation.jaketbustron" target="_blank" class="get-started-btn scrollto">Download Jaketbus</a>
     
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="home">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner embed-responsive embed-responsive-21by9" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item embed-responsive-item active" style="background-image: url(assets/img/slide/ttpg.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Terminal Terpadu<span> Pulo Gebang</span></h2>

              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item embed-responsive-item" style="background-image: url(assets/img/slide/keberangkatan.jpg)">
          <div class="carousel-container">
            <div class="container">
               <h2 class="animate__animated animate__fadeInDown">Terminal Terpadu<span> Pulo Gebang</span></h2>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item embed-responsive-item" style="background-image: url(assets/img/slide/pulo2.jpeg)">
          <div class="carousel-container">
            <div class="container">

              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

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

  <main id="main">

    <section id="berangkat-datang" class="about">+
    <div class="section-title">
          <h2>Data Keberangkatan dan Kedatangan Bus AKAP</h2>
          
          </div>
          
    <div class="container">
    <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
    <li class="cols-4 col-md-4 content">
      <a class="nav-link active" id="berangkat-tab" data-toggle="tab" href="#berangkat" role="tab" aria-controls="berangkat" aria-selected="true">BERANGKAT</a>
    </li>
    <li class="cols-4 col-md-4 content">
    <input class="form-control" id="tgl" style="border: 1px solid #5cb874" type="date" value="<?= date('Y-m-d') ?>">
    </li>
    <li class="cols-4 col-md-4 content">
      <a class="nav-link" id="datang-tab" data-toggle="tab" href="#datang" role="tab" aria-controls="datang" aria-selected="true">DATANG</a>
    </li>

</ul>
<br><br>
<div class="tab-content">
    <div class="tab-pane active table-responsive" id="berangkat" role="tabpanel" aria-labelledby="berangkat-tab">
      <table class="table" id="table-berangkat">
      
       <thead><tr><th>NAMA PO</th><th>TUJUAN</th><th>NOPOL</th><th>TANGGAL</th><th>JAM</th><th>STATUS</th><th>PINTU</th></tr></thead>
       <tbody id="bodi-berangkat"></tbody>
     
     </table>
</div>
<div class="tab-pane table-responsive" id="datang" role="tabpanel" aria-labelledby="datang-tab">
<table class="table" id="table-datang">
       <thead><tr><th>NAMA PO</th><th>ASAL</th><th>NOPOL</th><th>TANGGAL</th><th>JAM</th><th>STATUS</th><th>PINTU</th></tr></thead>
       <tbody id="bodi-datang"></tbody>
     </table>
</div>
     </div>
</div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Terminal Terpadu Pulo Gebang</h3>
      <p>Jl Sejajar Sisi Tol Timur KM 2 Pulo Gebang Cakung Kota Administrasi Jakarta Timur.</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Terminal Terpadu Pulo Gebang</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Terminal Terpadu Pulo Gebang</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <div id="mymodal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      <button type="button" class="close float-right" style="    position: absolute;
    right: 20px;
    top: 10px;" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <img src="..." class="img-fluid img-modal" style="min-height: 225px" alt="Responsive image">
      </div>
    </div>
  </div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script type="text/javascript" src="assets/vendor/datatable/datatables.min.js"></script>
          <script>var BASE_URL = "<?= base_url() ?>";</script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/jadwal.js?v=<?= uniqid() ?>"></script>
</body>

</html>