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
        &copy; Copyright <strong><span>TTPG</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="<?= base_url() ?>">Terminal Terpadu Pulo Gebang</a>
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
        <img src="#" class="img-fluid img-modal" style="min-height: 225px" alt="Responsive image">
      </div>
    </div>
  </div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/jquery.easing/jquery.easing.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/php-email-form/validate.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/owl.carousel/owl.carousel.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/isotope-layout/isotope.pkgd.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/venobox/venobox.min.js') ?>"></script>
  <script type="text/javascript" src="<?= base_url('assets/vendor/datatable/datatables.min.js') ?>"></script>
          <script>var BASE_URL = "<?= base_url() ?>";</script>
  <!-- Template Main JS File -->
  <script src="<?= base_url('assets/js/main.js?v='. uniqid()) ?>"></script>
<!-- Template Main JS File -->
<script src="<?= base_url('assets/js/jadwal.js') ?>"></script>
<?php 
  if (isset($js)) {
    if (is_array($js)) {
      for($i = 0; $i < sizeof($js); $i++) {
        echo '<script src="'.$js[$i] .'"></script>';
      }
    }else{
       echo '<script src="'.$js .'"></script>';
    }
  }
  if (isset($js_teks)) {
    echo '<script>'. $js_teks .'</script>';
  }
?>
</body>

</html>