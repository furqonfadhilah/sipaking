<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$mulai = $time;
?>    
        <!-- Begin Page Content -->
    <div class="container-fluid">

          <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

      <div class="container-fluid">
         <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-5   col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Latih</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $datalatih['total'];?></div>
                    </div>
                    <div class="col-auto">
                       <a href="<?= base_url('datamedispengujian');?>" class="text-dark">
                      <i class="fas fa-book fa-2x text-gray-300"></i>
                    </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-5 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Record Pengujian</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $diagnosa['total'];?></div>
                    </div>
                    <div class="col-auto">
                       <a href="<?= base_url('datamedispengujian');?>" class="text-dark">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                       </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
       </div>
        <!-- /.End Row Card Datalatih & Data Medis -->

        <!-- Chart Pie Pengujian per penyakit -->
         <div class="row">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-body">
                        <div class="text-md font-weight-bold text-info text-uppercase mb-1">Data Record Pengujian</div>
                        <?php $this->load->view('charts/pie');?>
                    </div>
                </div>
            </div>
        </div>
       



      <div class="row mt-5">
        <div class="col-md-11">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                <div class="text-md font-weight-bold text-info text-uppercase mb-1"> Data Statistik Pengujian </div>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php $this->load->view('charts/spline');?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
      </div>






















    </div>
    </div>
      <!-- End of Main Content -->

<?php
$time = microtime();
$time = explode(' ',$time);
$time = $time[1]+$time[0];
$finish = $time;
$total = round(($finish - $mulai), 6);
echo "<center>Hasil menunjukan waktu yang server butuhkan dalam memuat suatu halaman, " .$total. " detik</center>";
?>