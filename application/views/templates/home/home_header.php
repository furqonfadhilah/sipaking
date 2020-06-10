
<!doctype html>
<html lang="en">
  <head>
    <link rel="icon" href="<?= base_url('assets/img/logo.png');?>">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- My Font -->
    <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

    <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets2/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
 

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style-custom.css'); ?>">

    <title><?= $title; ?></title>
  </head>
  <body>

    <!-- Start Navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url('home');?> ">SiPAKING</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link rounded js-scroll-trigger" href="<?= base_url('home');?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link " href="<?= base_url('Penyakit'); ?>">List Penyakit</a>
            <a class="nav-item nav-link" href="<?= base_url('Konsultasi'); ?>">Konsultasi</a>
             <!--<a class="nav-item btn btn-primary tombol" href="<?= base_url('Auth'); ?>">Login Admin</a> -->
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->