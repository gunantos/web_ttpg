    <section id="struktur" class="struktur section-bg p-1">
      <div class="container">

        <div class="section-title">
          <h2><?= isset($config->struktur->title) ? $config->struktur->title : '' ?></h2>
          <p><?= isset($config->struktur->description) ? $config->struktur->description : '' ?></p>
            <img src="<?= $this->config->item('admin_url') . $config->struktur->content ?>" class="img-fluid" alt="">
        </div>

      </div>
    </section><!-- End Team Section -->