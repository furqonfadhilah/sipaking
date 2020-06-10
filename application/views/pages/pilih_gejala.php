 <!-- Start Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-5 text-center"><marquee>CAT LOVERS - KONSULTASI</marquee></h1>
      </div>
    </div>
    <!-- End Jumbotron -->
    <!-- Start Card -->
    <div class="container">
      <?= form_open('konsultasi/diagnosa_gejala');?>
  

      <div class="row justify-content-md-center mt-5">
        <div class="col-md-9">
          <div class="card content">
            <div class="card-header">
              <h3>Form Diagnosa Gejala-Gejala Terkait Penyakit Kulit Kucing</h3>
            </div>
            <div class="card-body">
            
              <p>Pilih gejala-gejala di bawah ini sesuai dengan kondisi penyakit kulit pada kucing kesayangan anda!</p>
              
              
                <table class="table">
               <?php $i = 1?>
               <?php foreach ($gejala as $g) :?>
                  <tr>
                    <td>
                  <div class="bg">
                  <div class="chiller_cb">
                      <input id="checkbox<?= $i;?>" name="gejala<?= $i;?>" type="checkbox" value="Y"/>
                      <span></span>
                      <label for="checkbox<?= $i;?>"><?= $g['gejala']?></label>
                    </div>
                  </div>
                  </td>
                </tr>
                <?php $i++?>
                <?php endforeach;?>
                </table>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Diagnosa
                    </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
       <?= form_close();?>
    </div>
    <!-- End Card -->

   
   