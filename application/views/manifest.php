<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Manifest Penumpang</title>
    <link rel="stylesheet" href="./style.css" />
</head>
<body>
<center><?php
die(json_encode($data));
?>
<table>
<tr>
<td widht="10%" style="border-bottom: 1px solid #000;" class="align-top"><img class="align-top rounded mx-auto d-block" style="max-height: 150px;" src="./assets/img/logo.png" /></td>
<td colspan="3" style="border-bottom: 1px solid #000; " class="text-center"><div class="row"><div class="text-center cols-10 align-top"><h4>PEMERINTAH PROVINSI DAERAH KHUSUS IBUKOTA JAKARTA</h4>
<h2>DINAS PERHUBUNGAN</h2>
<h4><strong>UNIT PENGELOLA TERMINAL TERPADU PULO GEBANG</strong></h4>
<div class="alamat">Jl. Sejajar To Sisi Timur KM 2 Pulo Gebang Telp: 021-29574001<br>
Email: terminalterpadupulogebang@gmail.com<br>
J A K A R T A
<br>
<span class="text-right">Kode Pos: 13950</span></div></div><div class="align-top text-right cols-2">
<img class="align-top rounded mx-auto d-block text-right float-right" style="max-height: 150px;" src="./assets/img/perhubungan.png" />
</div></div>
</td>
</tr>
<tr>
<td colspan="4"><br><h4 class="text-center"><u>DAFTAR MANIFEST PENUMPANG</u></h4><br><br>
<table class="table table-sm table-borderless text-left">
<tr>
    <td width="15%">Nama PO</td><td width="20%" id="namapo"></td>
    <td width="15%">Tujuan</td><td width="20%" id="tujuan">: </td>
    <td width="10%">Hari/Tanggal</td><td width="20%" id="tgl_berangkat"></td>
</tr>
<tr>
    <td>No. Pol BUS</td>
    <td id="nopol"></td>
    <td>Nama Supir</td>
    <td id="nama_supir"></td>
    <td>Jam</td>
    <td id="jam_berangkat"></td>
</tr>
</table>
</td>
</tr>
<tr>
<td colspan="4" style="padding: 0px">
   <strong>Awak bus:</strong><hr style="padding: 0px; margin: 0px">
    <table class="table-awak" width="40%">
    <tbody id="awak_bus">

    </tbody>
</table><hr style="padding: 0px; margin: 0px">
</td></tr>
<tr>
<td colspan="4">
<table class="table table-sm table-bordered text-center listpnp" style="border: 2px solid #000; margin-top: 20px" border="1">

<thead id="head_table">
</thead>
<tbody id="body_table">
</tbody>
</table>
</td></tr>
<tr><td colspan="4"></td></tr>
<tr><td class="text-center"><strong>PENGURUS PO<br><br><br><br><br>(_________________________)</strong></td>
<td></td>
<td></td>
<td class="text-center" style="padding-left: 25rem"><strong>KOORDINATOR SATUAN PELAKSANA <BR> OPERASIONAL DAN KEMITRAAN<br>TERMINAL TERPADU PULO GEBANG<br><br><br><br><br><strong><u>Hendra Kurniawan</u></strong><br>NIP. 198409192010011027&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>
</tr>
</table>
</center>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.js"></script>
<script src="https://unpkg.com/@feathersjs/client@^4.3.0/dist/feathers.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
</script>
</body>
</html>