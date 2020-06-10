   
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


          
          <!-- MELIHAT DATA LATIH -->
       <!-- Main content -->
   
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card">
              <div class="card-header">
                
                   <div class="col-md-6 mb-2">
                    <a href="<?= base_url('datalatih/exportexcel') ?>" class="btn btn-success mt-2"><i class="far fa-fw fa-file-excel"></i> Export To Excel </a> <a href="" class="btn btn-primary mt-2" data-toggle="modal" data-target="#newSubmenuModal">Keterangan Gejala</a>
                   </div>
              
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive">
                <?= $this->session->flashdata('message');?>
                <div class="row">
                <div class="col-md-4">
                  <form method="get" action="">
                  <div class="form-group">
                    <select class="form-control" id="datalatih" name="p" onchange="this.form.submit();">
                      <option value="">--Pilihan--</option>
                      <?php foreach($penyakit as $p): ?>
                      <option value="<?= $p['nama_penyakit']?>" <?php if ($this->input->get('p') == $p['nama_penyakit']){echo "selected";}?>>Penyakit <?= $p['nama_penyakit']?></option>
                      <?php endforeach;?>
                    </select>
                  </div>
                  </form>
              </div>
              <div class="col-md-8">
                <div class="float-right">
                    <a href="<?= base_url('datalatih/inputdatalatih');?>" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Datalatih</a>
                  </div>
              </div>
            </div>

                <table class="table table-striped table-bordered" id="table3">
                  <thead class="thead-dark">
                    <tr>
                      <th>No</th>
                      <th>G1</th>
                      <th>G2</th>
                      <th>G3</th>
                      <th>G4</th>
                      <th>G5</th>
                      <th>G6</th>
                      <th>G7</th>
                      <th>G8</th>
                      <th>G9</th>
                      <th>G10</th>
                      <th>G11</th>
                      <th>G12</th>
                      <th>G13</th>
                      <th>G14</th>
                      <th>G15</th>
                      <th>G16</th>
                      <th>G17</th>
                      <th>G18</th>
                      <th>G19</th>
                      <th>G20</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;?>
                    <?php foreach($datalatih as $k):?>
                      <tr>
                        <td class="text-center"><?= $i++;?></td>
                        <?php for($p=1; $p < count($gejala)+1; $p++) :?>
                        <td><?= $k['gejala'.$p];?></td>
                        <?php endfor;?>
                        <td><a href="<?= base_url('datalatih/hapus_data_latih/').$k['kode_datalatih'];?>" class="badge badge-pill badge-danger" onclick="return confirm('Yakin hapus data latih nomor <?= $k['kode_datalatih']; ?>?')"><i class="fas fa-trash"></i></a> 
                          <a href="<?= base_url('datalatih/edit_data_latih/').$k['kode_datalatih']; ?>" class="badge badge-pill badge-info"> <i class="fas fa-edit"></i> 

                        </td>
                      </tr>
                    <?php endforeach;?>
                  </tbody>
                </table>

              
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!--/. container-fluid -->
    </div>

 <!-- Modal -->
<div class="modal fade" id="newSubmenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubmenuModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubmenuModal" align="center"> <b>Keterangan Gejala:</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
     <div class="modal-body">
     
     <div class="form-group">
      
               <small>
                <?php foreach($gejala as $g):?>
                        G0<?= $g['gejala'];?><br>
                    <?php endforeach;?> </small>
     </div>

  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
        
    </div>
  </div>
</div>
		

				
      
   