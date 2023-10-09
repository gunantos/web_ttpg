<section id="berangkat-datang" class="about">
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
      
       <thead><tr><th>NAMA PO</th><th>TUJUAN</th><th>NOPOL</th><th>JAM</th><th>STATUS</th></tr></thead>
       <tbody id="bodi-berangkat"></tbody>
     
     </table>
</div>
<div class="tab-pane table-responsive" id="datang" role="tabpanel" aria-labelledby="datang-tab">
<table class="table" id="table-datang">
       <thead><tr><th>NAMA PO</th><th>ASAL</th><th>NOPOL</th><th>JAM</th><th>STATUS</th></tr></thead>
       <tbody id="bodi-datang"></tbody>
     </table>
</div>
     </div>
</div>
    </section>