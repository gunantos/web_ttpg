<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= isset($title) && !empty($title) ? $title : 'Terminal Terpadu Pulo Gebang' ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/img/logo.png') ?>" rel="icon">
  <link href="<?= base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/icofont/icofont.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
  <link href="<?= base_url('assets/vendor/venobox/venobox.css') ?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/vendor/datatable/datatables.min.css') ?>"/>
  <!-- Template Main CSS File -->
  
  <link href="<?= base_url('assets/css/style.css?v='. uniqid()) ?>" rel="stylesheet">

  <style>
.carousel-inner img {
      width: 100%;
      height: 100%;
  }

#myCarousel .carousel-indicators {
    position: static;
    margin-top:10px;
}

#myCarousel .carousel-indicators > li {
  width:200px;
}

 #myCarousel .carousel-indicators li img {
    display: block;
    opacity: 0.5;
    height: 100px;
 }

  #myCarousel .carousel-indicators li.active img {
    opacity: 1;
  }

  #myCarousel .carousel-indicators li:hover img {
    opacity: 0.75;
  }
  ul.nav-tabs.custom {
    border-bottom: 3px solid #5cb874;
  }
  
  #tab-list-news .nav-item .nav-link {
    background-color: #e0f7e6
  }
  #tab-list-news .nav-item .nav-link:hover {
    background-color: #70db8c
  }
  #tab-list-news .nav-item  .active {
    color: #fff;
    background-color: #5cb874 !important;
  }
  .carousel-caption {
    right: 0;
    left: 0;
    bottom: 10px;
    color: #000;
    background-color: #ffffff8a;
    padding-top: 0px;
    padding-left: 20px;
    text-align: left;
    font-weight: bold;
  }
  a.list-group-item.custom img {
      height: 55px;
      width: 100%;
      object-fit: cover;
  }
  .read-blog-content {
    margin-top: 120px !important;
  }
  #header {
    top: 0px !important;
  }
  .dataTables_length, .dataTables_paginate  {
    display: none;
  }
  @media(min-width: 768px) {
    .read-blog-content {
      margin-top: 80px !important;
    }
    #tab-list-news {
      margin-top: 140px;
    }
  }
  @media(max-width: 768px) {
    #tab-list-news {
      margin-top: 160px;
    }
  }
  @media(max-width: 992px) {
    .read-blog-content {
      margin-top: 80px !important;
    }
  }
  @media(min-width: 992px) {
    
  .read-blog-content {
    margin-top: 120px !important;
  }
    #tab-list-news {
      margin-top: 0px;
    }
  }
</style>
</head>

<body>