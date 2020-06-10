 <!-- Start Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-5 text-center"><marquee>CAT LOVERS - KONSULTASI</marquee></h1>
      </div>
    </div>
    <!-- End Jumbotron -->
    <!-- Start Card -->
    <div class="container">
      <?= form_open();?>
      <div class="row justify-content-md-center">
        <div class="col-md-6  ">
          <div class="card content">
            <div class="card-header">
              <h3><center>Form Konsultasi  SIPAKING</center></h3>
            </div>
            <div class="card-body">
              
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Nama Pemilik Kucing</label>
                  <input type="text" class="form-control" placeholder="Masukkan Nama Anda.." name="nama" value="<?= set_value('nama');?>">
                    <?= form_error('nama','<small class="text-danger pl-1">','</small>'); ?>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Email Pemilik Kucing</label>
                  <input type="text" class="form-control" placeholder="Masukkan Email Anda.." name="user_email" value="<?= set_value('user_email');?>">
                    <?= form_error('user_email','<small class="text-danger pl-1">','</small>'); ?>
                </div>
              </div>

               

                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Kucing</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Kucing Anda.." name="nama_kucing" value="<?= set_value('nama_kucing');?>">
                    <?= form_error('nama_kucing','<small class="text-danger pl-3">','</small>'); ?>
                </div>

                <fieldset class="form-group">
                    <div class="row">
                      <legend class="col-form-label col-md-5 pt-1">Jenis Kelamin Kucing</legend>
                      <div class="col-md">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_kelamin_kucing"  value="Jantan" checked>
                          <label class="form-check-label" for="jenis_kelamin_kucing">
                            Jantan
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="jenis_kelamin_kucing"  value="Betina">
                          <label class="form-check-label" for="jenis_kelamin_kucing">
                           Betina
                          </label>
                        </div>
                      </div>
                    </div>
                </fieldset>
                  <button type="submit" class="btn btn-primary btn-user btn-block">
                    Konsultasi
                    </button>
            </div>
          </div>
        </div>
      </div>
      

       <?= form_close();?>

                
    </div>
    <!-- End Card -->

   
   