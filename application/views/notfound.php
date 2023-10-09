 <?php 

 $this->load->view('template/header');
 $this->load->view('template/menu');
 ?>
  <main id="main">
    <section id="blogs" class="mb-2">
        <h4>NOT FOUND</ht>
        <p> Halaman yang anda cari tidak ditemukan</p>
        <button class="btn btn-primary" onclick="history.back()">Kembali</button>
    </section>
</main>
 <?php
 $this->load->view('template/footer');
 ?>