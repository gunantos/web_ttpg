<style>
   .table-penginapan th,.table-penginapan td {
  border-style:solid;
  border-color: #000;
  line-height: 100px;
  height: 100px;
  padding: 6px!important;
  margin: 10px;
}
.tengah {
    padding: 0 !important;
    line-height: 10px !important;
    height: 10px!important;
}
.tembok {
    background-color: #000;
}
.pintu {
     border-bottom-style: hidden !important;
     border-top-style: hidden !important;
    border-right-style: hidden !important;
    background-image: url('<?= base_url('assets/pintu.png') ?>');
    background-size: 100% 90%;
    background-repeat: no-repeat;
}
.kamar-pria {
    background-size: 90% 90%;
    background-repeat: no-repeat;
    background-position: center;
}
.kamar-wanita {
    background-size:  90% 90%;
    background-repeat: no-repeat;
    background-position: center;
}
.wc-pria {
    background-image: url('<?= base_url('assets/wc_pria.png') ?>');
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center;
}
.wc-wanita {
    background-image: url('<?= base_url('assets/wc_wanita.png') ?>');
    background-size:contain;
    background-repeat: no-repeat;
    background-position: center;
}
div.kamar-wanita {
    width: 200px;
    height: 200px;
}
.klik {
    cursor: pointer !important;
}
.kamar-pria.kosong {
    background-image: url('<?= base_url('assets/pria.png') ?>');
   
}
.kamar-pria.isi {
    background-image: url('<?= base_url('assets/pria-select.png') ?>');
   
} 
.kamar-wanita.kosong {
    background-image: url('<?= base_url('assets/wanita.png') ?>');
}
.kamar-wanita.isi {
    background-image: url('<?= base_url('assets/wanita-select.png') ?>');
   
} 
.border-top {
    border-top: 4px solid #00bcd4 !important;
}
.border-left {
    border-left: 4px solid #00bcd4 !important;
}
.border-right {
    border-right: 4px solid #00bcd4 !important;
}
.hidden-right {
    border-right-style: hidden !important;
}
.hidden-left {
    border-left-style: hidden !important;
}
.hidden-top {
    border-top-style: hidden !important;
}
.hidden-bottom {
    border-bottom-style: hidden !important;
}
.jalan {
    padding: 0 !important;
    line-height: 10px !important;
    height: 50px!important;
}
.no-border{
    border-style: hidden !important;
}
.td-label {
    height: 5px !important;
    line-height: 5px !important;
    text-align: center !important;
    font-weight: bold;
}
.td-label .wanita{
    color: #fdc521;
}
.td-label .pria{
    color: #0dbaa2;
}
.td-label.wanita.isi{
    color: #ba0d2e;
}
.td-label.pria.isi{
    color: #ba0d2e;
}
</style>
<section id="penginapan" class="contact p-2 text-cente">
        <div class="container">

        <div class="section-title">
          <h2><?= $config->penginapan->title ?></h2>
          <p><?= $config->penginapan->description ?></p>
        </div>
        <div class="card" style="width: 100%">
            <div class="card-body table-responsive">
        <table class="table table-borderless table-penginapan">
            <tr>
                <td class="klik border-left kamar-<?= strtolower($wanita[0]['jenis_kelamin']) ?> <?= ceckIsi( $wanita[0]['jenis_kelamin'], 1, $tamu) ?>" data-nokamar="<?=  $wanita[0]['nomor_kamar'] ?>" id="g-<?=$wanita[0]['jenis_kelamin']?>-1" data-pesan="<?= getIdPesan( $wanita[0]['jenis_kelamin'], 1, $tamu) ?>" data-id="1" data-jk="<?= $wanita[0]['jenis_kelamin'] ?>"></td>
                <td class="klik kamar-<?= strtolower($wanita[1]['jenis_kelamin']) ?> <?= ceckIsi( $wanita[1]['jenis_kelamin'], 2, $tamu) ?>" data-nokamar="<?=  $wanita[1]['nomor_kamar'] ?>" id="g-<?=$wanita[1]['jenis_kelamin']?>-2" data-pesan="<?= getIdPesan( $wanita[1]['jenis_kelamin'], 2, $tamu) ?>" data-id="2" data-jk="<?= $wanita[1]['jenis_kelamin'] ?>"></td>
                <td class="klik kamar-<?= strtolower($wanita[2]['jenis_kelamin']) ?> <?= ceckIsi( $wanita[2]['jenis_kelamin'], 3, $tamu) ?>" data-nokamar="<?=  $wanita[2]['nomor_kamar'] ?>" id="g-<?=$wanita[2]['jenis_kelamin']?>-3" data-pesan="<?= getIdPesan( $wanita[2]['jenis_kelamin'], 3, $tamu) ?>" data-id="3" data-jk="<?= $wanita[2]['jenis_kelamin'] ?>"></td>
                <td class="klik kamar-<?= strtolower($wanita[3]['jenis_kelamin']) ?> <?= ceckIsi( $wanita[3]['jenis_kelamin'], 4, $tamu) ?>" data-nokamar="<?=  $wanita[3]['nomor_kamar'] ?>" id="g-<?=$wanita[3]['jenis_kelamin']?>-4" data-pesan="<?= getIdPesan( $wanita[3]['jenis_kelamin'], 4, $tamu) ?>" data-id="4" data-jk="<?= $wanita[3]['jenis_kelamin'] ?>"></td>
                <td class="klik kamar-<?= strtolower($wanita[4]['jenis_kelamin']) ?> <?= ceckIsi( $wanita[4]['jenis_kelamin'], 5, $tamu) ?>" data-nokamar="<?=  $wanita[4]['nomor_kamar'] ?>" id="g-<?=$wanita[4]['jenis_kelamin']?>-5" data-pesan="<?= getIdPesan( $wanita[4]['jenis_kelamin'], 5, $tamu) ?>" data-id="5" data-jk="<?= $wanita[4]['jenis_kelamin'] ?>"></td>
                <td class="klik kamar-<?= strtolower($wanita[5]['jenis_kelamin']) ?> <?= ceckIsi( $wanita[5]['jenis_kelamin'], 6, $tamu) ?>" data-nokamar="<?=  $wanita[5]['nomor_kamar'] ?>" id="g-<?=$wanita[5]['jenis_kelamin']?>-6" data-pesan="<?= getIdPesan( $wanita[5]['jenis_kelamin'], 6, $tamu) ?>" data-id="6" data-jk="<?= $wanita[5]['jenis_kelamin'] ?>"></td>
                <td class="klik kamar-<?= strtolower($wanita[6]['jenis_kelamin']) ?> <?= ceckIsi( $wanita[6]['jenis_kelamin'], 7, $tamu) ?>" data-nokamar="<?=  $wanita[6]['nomor_kamar'] ?>" id="g-<?=$wanita[6]['jenis_kelamin']?>-7" data-pesan="<?= getIdPesan( $wanita[6]['jenis_kelamin'],7, $tamu) ?>" data-id="7" data-jk="<?= $wanita[6]['jenis_kelamin'] ?>"></td>
                <td class="klik border-right kamar-<?= strtolower($wanita[7]['jenis_kelamin']) ?> <?= ceckIsi( $wanita[7]['jenis_kelamin'], 8, $tamu) ?>" data-nokamar="<?=  $wanita[7]['nomor_kamar'] ?>" id="g-<?=$wanita[7]['jenis_kelamin']?>-8" data-pesan="<?= getIdPesan( $wanita[7]['jenis_kelamin'],8, $tamu) ?>" data-id="8" data-jk="<?= $wanita[7]['jenis_kelamin'] ?>"></td>
                <td class="klik kamar-<?= strtolower($pria[8]['jenis_kelamin']) ?> <?= ceckIsi($pria[8]['jenis_kelamin'], 9, $tamu) ?>" data-nokamar="<?= $pria[8]['jenis_kelamin'] ?>" id="g-<?=$pria[8]['jenis_kelamin']?>-9" data-pesan="<?= getIdPesan($pria[8]['jenis_kelamin'], 9, $tamu) ?>" data-id="9" data-jk="<?= $pria[8]['jenis_kelamin'] ?>"></td>
                <td class="klik kamar-<?= strtolower($pria[7]['jenis_kelamin']) ?> <?= ceckIsi($pria[7]['jenis_kelamin'], 8, $tamu) ?>" data-nokamar="<?= $pria[7]['jenis_kelamin'] ?>"  id="g-<?=$pria[7]['jenis_kelamin']?>-8" data-pesan="<?= getIdPesan($pria[7]['jenis_kelamin'], 8, $tamu) ?>" data-id="8" data-jk="<?= $pria[7]['jenis_kelamin'] ?>"></td>
            </tr>
             <tr>
                <td class="klik border-left td-label wanita <?= ceckIsi('wanita', 1, $tamu) ?>" id="l-<?=$wanita[0]['jenis_kelamin']?>-1" data-nokamar="<?= $wanita[0]['jenis_kelamin'] ?>" data-pesan="<?= getIdPesan( $wanita[5]['jenis_kelamin'], 1, $tamu) ?>" data-id="1" data-jk="<?= $wanita[0]['jenis_kelamin'] ?>"><?= $wanita[0]['nomor_kamar'] ?></td>
                <td class="klik td-label wanita <?= ceckIsi('wanita', 2, $tamu) ?>" id="l-<?=$wanita[1]['jenis_kelamin']?>-2" data-nokamar="<?= $wanita[1]['jenis_kelamin'] ?>" data-pesan="<?= getIdPesan( $wanita[5]['jenis_kelamin'], 2, $tamu) ?>" data-id="2" data-jk="<?= $wanita[1]['jenis_kelamin'] ?>"><?= $wanita[1]['nomor_kamar'] ?></td>
                <td class="klik td-label wanita <?= ceckIsi('wanita', 3, $tamu) ?>" id="l-<?=$wanita[2]['jenis_kelamin']?>-3" data-nokamar="<?= $wanita[2]['jenis_kelamin'] ?>" data-pesan="<?= getIdPesan( $wanita[5]['jenis_kelamin'], 3, $tamu) ?>" data-id="3" data-jk="<?= $wanita[2]['jenis_kelamin'] ?>"><?= $wanita[2]['nomor_kamar'] ?></td>
                <td class="klik td-label wanita <?= ceckIsi('wanita', 4, $tamu) ?>" id="l-<?=$wanita[3]['jenis_kelamin']?>-4" data-nokamar="<?= $wanita[3]['jenis_kelamin'] ?>" data-pesan="<?= getIdPesan( $wanita[5]['jenis_kelamin'], 4, $tamu) ?>" data-id="4" data-jk="<?= $wanita[3]['jenis_kelamin'] ?>"><?= $wanita[3]['nomor_kamar'] ?></td>
                <td class="klik td-label wanita <?= ceckIsi('wanita', 5, $tamu) ?>" id="l-<?=$wanita[4]['jenis_kelamin']?>-5" data-nokamar="<?= $wanita[4]['jenis_kelamin'] ?>" data-pesan="<?= getIdPesan( $wanita[5]['jenis_kelamin'], 5, $tamu) ?>" data-id="5" data-jk="<?= $wanita[4]['jenis_kelamin'] ?>"><?= $wanita[4]['nomor_kamar'] ?></td>
                <td class="klik td-label wanita <?= ceckIsi('wanita', 6, $tamu) ?>" id="l-<?=$wanita[5]['jenis_kelamin']?>-6" data-nokamar="<?= $wanita[5]['jenis_kelamin'] ?>" data-pesan="<?= getIdPesan( $wanita[5]['jenis_kelamin'], 6, $tamu) ?>" data-id="6" data-jk="<?= $wanita[5]['jenis_kelamin'] ?>"><?= $wanita[5]['nomor_kamar'] ?></td>
                <td class="klik td-label wanita <?= ceckIsi('wanita', 7, $tamu) ?>" id="l-<?=$wanita[6]['jenis_kelamin']?>-7" data-nokamar="<?= $wanita[6]['jenis_kelamin'] ?>" data-pesan="<?= getIdPesan( $wanita[5]['jenis_kelamin'], 7, $tamu) ?>" data-id="7" data-jk="<?= $wanita[6]['jenis_kelamin'] ?>"><?= $wanita[6]['nomor_kamar'] ?></td>
                <td class="klik border-right td-label wanita <?= ceckIsi('wanita', 8, $tamu) ?>" id="l-<?=$wanita[7]['jenis_kelamin']?>-8" data-nokamar="<?= $wanita[7]['jenis_kelamin'] ?>" data-pesan="<?= getIdPesan( $wanita[5]['jenis_kelamin'], 8, $tamu) ?>" data-id="8" data-jk="<?= $wanita[7]['jenis_kelamin'] ?>"><?= $wanita[7]['nomor_kamar'] ?></td>
                <td class="klik td-label pria <?= ceckIsi('pria', 8, $tamu) ?>" id="l-<?=$pria[8]['jenis_kelamin']?>-9" data-nokamar="<?= $pria[8]['nomor_kamar'] ?>" data-pesan="<?= getIdPesan($pria[8]['jenis_kelamin'], 9, $tamu) ?>" data-id="9" data-jk="<?= $pria[8]['jenis_kelamin'] ?>"><?= $pria[8]['nomor_kamar'] ?></td>
                <td class="klik td-label pria <?= ceckIsi('pria', 7, $tamu) ?>" id="l-<?=$pria[7]['jenis_kelamin']?>-8" data-nokamar="<?= $pria[7]['nomor_kamar'] ?>>"  data-pesan="<?= getIdPesan($pria[7]['jenis_kelamin'], 8, $tamu) ?>" data-id="8" data-jk="<?= $pria[7]['jenis_kelamin'] ?>"><?= $pria[7]['nomor_kamar'] ?></td>
            </tr>
            <tr><td colspan="8" class=" border-left border-right" style="height: 20px"></td><td colspan="2" style="height: 20px"></td></tr>
            <tr><td colspan="5" class="border-top" style="height: 20px" style="height: 20px"></td><td style="height: 20px"></td><td colspan="2" class="border-top" style="height: 20px"></td><td colspan="2" style="height: 20px"></td></tr>
            <tr>
                <td class="klik  td-label pria" id="l-<?=$pria[0]['jenis_kelamin']?>-1" data-nokamar="<?= $pria[0]['nomor_kamar'] ?>"  data-pesan="<?= getIdPesan($pria[0]['jenis_kelamin'], 1, $tamu) ?>" data-id="1" data-jk="<?= $pria[0]['jenis_kelamin'] ?>"><?= $pria[0]['nomor_kamar'] ?></td>
                <td class="klik  td-label pria" id="l-<?=$pria[1]['jenis_kelamin']?>-2" data-nokamar="<?= $pria[1]['nomor_kamar'] ?>"  data-pesan="<?= getIdPesan($pria[1]['jenis_kelamin'], 2, $tamu) ?>" data-id="2" data-jk="<?= $pria[1]['jenis_kelamin'] ?>"><?= $pria[1]['nomor_kamar'] ?></td>
                <td class="klik  td-label pria" id="l-<?=$pria[2]['jenis_kelamin']?>-3" data-nokamar="<?= $pria[2]['nomor_kamar'] ?>"  data-pesan="<?= getIdPesan($pria[2]['jenis_kelamin'], 3, $tamu) ?>" data-id="3" data-jk="<?= $pria[2]['jenis_kelamin'] ?>"><?= $pria[2]['nomor_kamar'] ?></td>
                <td class="klik  td-label pria" id="l-<?=$pria[3]['jenis_kelamin']?>-4" data-nokamar="<?= $pria[3]['nomor_kamar'] ?>"  data-pesan="<?= getIdPesan($pria[3]['jenis_kelamin'], 4, $tamu) ?>" data-id="4" data-jk="<?= $pria[3]['jenis_kelamin'] ?>"><?= $pria[3]['nomor_kamar'] ?></td>
                <td class="klik  td-label pria" id="l-<?=$pria[4]['jenis_kelamin']?>-5" data-nokamar="<?= $pria[4]['nomor_kamar'] ?>"  data-pesan="<?= getIdPesan($pria[4]['jenis_kelamin'], 5, $tamu) ?>" data-id="4" data-jk="<?= $pria[4]['jenis_kelamin'] ?>"><?= $pria[4]['nomor_kamar'] ?></td>
                <td class="klik  td-label hidden-top hidden-bottom hidden-right"></td>
                <td colspan="2"  class="hidden-top  td-label"></td>
                <td class="klik   td-label pria" id="l-<?=$pria[5]['jenis_kelamin']?>-6" data-nokamar="<?= $pria[5]['nomor_kamar'] ?>"  data-pesan="<?= getIdPesan($pria[5]['jenis_kelamin'], 6, $tamu) ?>" data-id="5" data-jk="<?= $pria[5]['jenis_kelamin'] ?>"><?= $pria[5]['nomor_kamar'] ?></td>
                <td class="klik   td-label pria" id="l-<?=$pria[6]['jenis_kelamin']?>-7" data-nokamar="<?= $pria[6]['nomor_kamar'] ?>"  data-pesan="<?= getIdPesan($pria[6]['jenis_kelamin'], 7, $tamu) ?>" data-id="6" data-jk="<?= $pria[6]['jenis_kelamin'] ?>"><?= $pria[6]['nomor_kamar'] ?></td>
            </tr>
            <tr>
                <td class="klik  kamar-<?= strtolower($pria[0]['jenis_kelamin']) ?> <?= ceckIsi($pria[8]['jenis_kelamin'], 1, $tamu) ?>" id="g-<?=$pria[0]['jenis_kelamin']?>-1" data-nokamar="<?= $pria[0]['nomor_kamar'] ?>" data-pesan="<?= getIdPesan($pria[0]['jenis_kelamin'], 1, $tamu) ?>" data-id="1" data-jk="<?= $pria[0]['jenis_kelamin'] ?>"></td>
                <td class="klik  kamar-<?= strtolower($pria[1]['jenis_kelamin']) ?> <?= ceckIsi($pria[8]['jenis_kelamin'], 2, $tamu) ?>" id="g-<?=$pria[1]['jenis_kelamin']?>-2" data-nokamar="<?= $pria[1]['nomor_kamar'] ?>" data-pesan="<?= getIdPesan($pria[1]['jenis_kelamin'], 2, $tamu) ?>" data-id="2" data-jk="<?= $pria[1]['jenis_kelamin'] ?>"></td>
                <td class="klik  kamar-<?= strtolower($pria[2]['jenis_kelamin']) ?> <?= ceckIsi($pria[8]['jenis_kelamin'], 3, $tamu) ?>" id="g-<?=$pria[2]['jenis_kelamin']?>-3" data-nokamar="<?= $pria[2]['nomor_kamar'] ?>" data-pesan="<?= getIdPesan($pria[2]['jenis_kelamin'], 3, $tamu) ?>" data-id="3" data-jk="<?= $pria[2]['jenis_kelamin'] ?>"></td>
                <td class="klik  kamar-<?= strtolower($pria[3]['jenis_kelamin']) ?> <?= ceckIsi($pria[8]['jenis_kelamin'], 4, $tamu) ?>" id="g-<?=$pria[3]['jenis_kelamin']?>-4" data-nokamar="<?= $pria[3]['nomor_kamar'] ?>" data-pesan="<?= getIdPesan($pria[3]['jenis_kelamin'], 4, $tamu) ?>" data-id="4" data-jk="<?= $pria[3]['jenis_kelamin'] ?>"></td>
                <td class="klik kamar-<?= strtolower($pria[4]['jenis_kelamin']) ?> <?= ceckIsi($pria[8]['jenis_kelamin'], 5, $tamu) ?>" id="g-<?=$pria[4]['jenis_kelamin']?>-5" data-nokamar="<?= $pria[4]['nomor_kamar'] ?>"  data-pesan="<?= getIdPesan($pria[4]['jenis_kelamin'], 5, $tamu) ?>" data-id="5" data-jk="<?= $pria[4]['jenis_kelamin'] ?>"></td>
                
                <td colspan="3"  class="hidden-top"></td>
                <td class="klik  kamar-<?= strtolower($pria[5]['jenis_kelamin']) ?> <?= ceckIsi($pria[8]['jenis_kelamin'], 6, $tamu) ?>" id="g-<?=$pria[5]['jenis_kelamin']?>-6" data-nokamar="<?= $pria[5]['nomor_kamar'] ?>"  data-pesan="<?= getIdPesan($pria[5]['jenis_kelamin'], 6, $tamu) ?>" data-id="6" data-jk="<?= $pria[5]['jenis_kelamin'] ?>"></td>
                <td class="klik  kamar-<?=strtolower( $pria[6]['jenis_kelamin']) ?> <?= ceckIsi($pria[8]['jenis_kelamin'], 7, $tamu) ?>" id="g-<?=$pria[6]['jenis_kelamin']?>-7" data-nokamar="<?= $pria[6]['nomor_kamar'] ?>"  data-pesan="<?= getIdPesan($pria[6]['jenis_kelamin'], 7, $tamu) ?>" data-id="7" data-jk="<?= $pria[6]['jenis_kelamin'] ?>"></td>
            </tr>
        </table>
        
            </div>
        </div>
        </div>
    </section>