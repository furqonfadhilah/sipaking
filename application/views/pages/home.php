<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$mulai = $time;
?>
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
   <h1 class="display-4">SIPAKING</h1>
<p class="lead">SISTEM PAKAR DIAGNOSA PENYAKIT KULIT KUCING</p>
<center><a class="btn btn-info" href="#" role="button">Buku Elektrik Penyakit Kulit Kucing Rekomendasi Dokter Hewan Spesialis Kucing dan Anjing</a></center>
<p><center><a class="btn btn-warning" href="#" role="button">Buku Elektrik Penyakit Kulit Kucing Direktorat Jendral Pertenakan dan Kesehatan Hewan</a></center></p>
  </div>
</div>

<!-- Info SiPAKING -->
<section class="about" id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="text-center">Apa itu SiPAKING ?</h2>
        <hr>
      </div>
     </div>

     <div class="row">
      <div class="col-sm-4 col-sm-offset-1">
        <div class="text-center">
         <img src="<?= base_url('assets/img/catcare.png'); ?>" alt="CatCare" class="img-thumbnail" >
        </div>
     </div>

      <div class="col-md-7">
        <p class="text-justify">Sistem Pakar Diagnosa Penyakit Kulit Pada Kucing adalah salah satu implementasi yang diterapkan sistem pakar dalam bidang kesehatan hewan pada bagian kulit kucing. Salah satu bagian tubuh kucing yang rentan terkena penyakit adalah kulit, karena bagian kulit yang berinteraksi langsung dengan lingkungan luar. Oleh karena itu SiPAKING dapat membantu para pemilik kucing dalam melakukan diagnosa dini pada penyakit kulit yang dialami oleh kucing dan SiPAKING ini sendiri menggunakan naive bayes dalam metode perhitungan hasil diagnosa.</p>
     </div>
     <div class="container mt-5">
     </div>
  </div>
</section>


<?php
$time = microtime();
$time = explode(' ',$time);
$time = $time[1]+$time[0];
$finish = $time;
$total = round(($finish - $mulai), 6);
echo "<center>Hasil menunjukan waktu yang server butuhkan dalam memuat suatu halaman, " .$total. " detik</center>";
?>

 




























