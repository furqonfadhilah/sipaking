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

          <?= $this->session->flashdata('message'); ?>

          <div class="row mt-3">
            <div class="col-md-4">
                <!-- Search -->
                <form action="<?= base_url('datamedispengujian'); ?>" method="post">
                   <div class="input-group mb-3" >
                    <input type="text" class="form-control" placeholder="Search Data Record Pengujian" name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                      <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                   </div>
                </form>
            </div>
          </div>

           <!-- Jika data yang di cari tidak ditemukan -->
          <?php if(empty($list)): ?>
            
                <div class="alert alert-danger" role="alert">
                  Data Record Pengujian not found!
                </div>
              
          <?php endif; ?>

          <!-- MELIHAT DATA MEDIS -->
      <div class="table-responsive">
        
      <table class="table table table-striped table-bordered" id="myTable">
    <thead class="thead-dark">
     <tr>
      <th scope="col">#</th>
        <th scope="col">Tanggal Konsultasi</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Nama Kucing</th>
        <th scope="col">Genital's Kucing</th>
        <th scope="col">G1</th>
        <th scope="col">G2</th>
        <th scope="col">G3</th>
        <th scope="col">G4</th>
        <th scope="col">G5</th>
        <th scope="col">G6</th>
        <th scope="col">G7</th>
        <th scope="col">G8</th>
        <th scope="col">G9</th>
        <th scope="col">G10</th>
        <th scope="col">G11</th>
        <th scope="col">G12</th>
        <th scope="col">G13</th>
        <th scope="col">G14</th>
        <th scope="col">G15</th>
        <th scope="col">G16</th>
        <th scope="col">G17</th>
        <th scope="col">G18</th>
        <th scope="col">G19</th>
        <th scope="col">G20</th>
        <th scope="col">Result</th>
        <th scope="col">Option</th>
     </tr>
    </thead>
      <tbody>

    <?php foreach ($list as $l) : ?>
      <tr>
          <th scope="row"><?= ++$start; ?></th>
          <td><?= date('d F Y', $l['date_created']); ?></td>
          <td><?= $l['nama']; ?></td>
          <td><?= $l['user_email']; ?></td>
          <td><?= $l['nama_kucing']; ?></td>
          <td><?= $l['jenis_kelamin_kucing']; ?></td>
          <td><?= $l['gejala1']; ?></td>
          <td><?= $l['gejala2']; ?></td>
          <td><?= $l['gejala3']; ?></td>
          <td><?= $l['gejala4']; ?></td>
          <td><?= $l['gejala5']; ?></td>
          <td><?= $l['gejala6']; ?></td>
          <td><?= $l['gejala7']; ?></td>
          <td><?= $l['gejala8']; ?></td>
          <td><?= $l['gejala9']; ?></td>
          <td><?= $l['gejala10']; ?></td>
          <td><?= $l['gejala11']; ?></td>
          <td><?= $l['gejala12']; ?></td>
          <td><?= $l['gejala13']; ?></td>
          <td><?= $l['gejala14']; ?></td>
          <td><?= $l['gejala15']; ?></td>
          <td><?= $l['gejala16']; ?></td>
          <td><?= $l['gejala17']; ?></td>
          <td><?= $l['gejala18']; ?></td>
          <td><?= $l['gejala19']; ?></td>
          <td><?= $l['gejala20']; ?></td>
          <td><?= $l['result']; ?></td>
          <td>

            <a href="<?= base_url();?>datamedispengujian/detail/<?= $l['kode_pengujian']; ?>" class="badge badge-pill badge-info"><i class="fas fa-info-circle"></i></a>

            <a href="<?= base_url(); ?>datamedispengujian/datapengujian_hapus/<?= $l['kode_pengujian']; ?>" class="badge badge-pill badge-danger" onclick="return confirm('Are your sure for delete data testing patient <?= $l['kode_pengujian']; ?>? ')"><i class="fas fa-trash-alt"></i></a>
          </td>
     </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
    results data: <?= $total_rows; ?>
    Show <?= $start-9; ?> to <?= $start; ?>
    </div>  
    
      <?= $this->pagination->create_links(); ?>
        
        </div>
        <!-- /.container-fluid -->

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