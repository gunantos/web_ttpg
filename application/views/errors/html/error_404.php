 <?php 
  if (!function_exists('base_url')) {
    function base_url($url='') {
        return config_item('base_url').$url;
    }
 }
	$dir = APPPATH . DIRECTORY_SEPARATOR .'views'. DIRECTORY_SEPARATOR .'template'. DIRECTORY_SEPARATOR;
	include($dir. 'header.php');
	include($dir. 'menu.php');
 ?>
  <main class="mt-4" id="main" style="margin-top: 140px !important">
    <section id="blogs" class="mb-2">
		<div class="container">
				<div class="text-center">
				<h2>NOT FOUND</h2>
				<p> Halaman yang anda cari tidak ditemukan</p>
				<button class="btn btn-primary" onclick="history.back()">Kembali</button>
			</div>
		</div>
    </section>
</main>
 <?php
	include($dir. 'footer.php');
 ?>