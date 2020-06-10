    <!-- Start Jumbotron -->
    <div class="jumbotron">
      <div class="container">
        <h1 class="display-5 text-center">HASIL DIAGNOSA PENYAKIT KULIT KUCING</h1>
      </div>
    </div>
    <!-- End Jumbotron -->

    <!-- Start Card -->
  
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-4">

            <div class="card text-white bg-info mb-4" style="max-width: 18rem;">
              <div class="card-header">Identitas</div>
              <div class="card-body">
                <p class="card-text">Nama : <b><?= $this->session->userdata('nama');?></b></h5>
                <p class="card-text">Email : <b><?= $this->session->userdata('user_email');?></b></p>
                <p class="card-text">Nama Kucing: <b><?= $this->session->userdata('nama_kucing');?></b></p>
                <p class="card-text">Jenis Kelamin Kucing: <b><?= $this->session->userdata('jenis_kelamin_kucing');?></b></p>
              </div>
            </div>
        </div>


        <div class="col-md-8">
          <div class="card content">
            <div class="card-header">
               <nav>
              <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active text-dark" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Gejala Yang Dipilih</a>
                <a class="nav-item nav-link text-dark" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Hasil Diagnosa</a>
              </div>
            </nav>
            </div>
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="card-body">
                <table class="table table-hover mt-4">
                    <?php $i = 1?>
                    <!-- pengulangan untuk menampilkan nama gejala & gejala yang dipilih -->
                    <?php foreach ($gejala as $g) :?>
                    <tr>
                        <td>
                            <label>
                                <?= $g['gejala']?>
                            </label>
                        </td>
                        <td>
                            <!-- unutk menampilkan data gejala yang dipilih melalui session -->
                            <?= $this->session->userdata('gejala'.$i++);?>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
          
 
     
      <?php

      //pengulangan untuk penyerderhanaan variable
      for ($i=1; $i <=20 ; $i++) { 
          $gejala[$i] = strip_tags($this->session->userdata('gejala'.$i));
      }

        //jumlah datalatih per kategori penyakit
        $jumK1=getOut("Ringworm"); 
        $jumK2=getOut("Scabies");
        $jumK3=getOut("Alergi Dermatitis");
        $jumK4=getOut("Feline Acne");
        $jumK5=getOut("Pyoderma");
        $jumK6=getOut("Kutu Lice");

        //jumlah total datalatih
        $totK=$jumK1+$jumK2+$jumK3+$jumK4+$jumK5+$jumK6;

        // echo $penyakit[5]['nama_penyakit']."<br>";

       //jumlah gejala
        for ($i=1; $i <=20; $i++){
        //jumlah penyakit
            for($j=1; $j<=6; $j++){
            $jum[$i][$j] = getKK($gejala[$i], $penyakit[$j-1]['nama_penyakit'], 'gejala'.$i);
            }
        }
        
      
        //rumus perhitungan Naive Bayes
        $P1=($jumK1/$totK)*($jum[1][1]/$jumK1)*($jum[2][1]/$jumK1)*($jum[3][1]/$jumK1)*($jum[4][1]/$jumK1)*($jum[5][1]/$jumK1)*($jum[6][1]/$jumK1)*($jum[7][1]/$jumK1)*($jum[8][1]/$jumK1)*($jum[9][1]/$jumK1)*($jum[10][1]/$jumK1)*($jum[11][1]/$jumK1)*($jum[12][1]/$jumK1)*($jum[13][1]/$jumK1)*($jum[14][1]/$jumK1)*($jum[15][1]/$jumK1)*($jum[16][1]/$jumK1)*($jum[17][1]/$jumK1)*($jum[18][1]/$jumK1)*($jum[19][1]/$jumK1)*($jum[20][1]/$jumK1);
        
        $P2=($jumK2/$totK)*($jum[1][2]/$jumK2)*($jum[2][2]/$jumK2)*($jum[3][2]/$jumK2)*($jum[4][2]/$jumK2)*($jum[5][2]/$jumK2)*($jum[6][2]/$jumK2)*($jum[7][2]/$jumK2)*($jum[8][2]/$jumK2)*($jum[9][2]/$jumK2)*($jum[10][2]/$jumK2)*($jum[11][2]/$jumK2)*($jum[12][2]/$jumK2)*($jum[13][2]/$jumK2)*($jum[14][2]/$jumK2)*($jum[15][2]/$jumK2)*($jum[16][2]/$jumK2)*($jum[17][2]/$jumK2)*($jum[18][2]/$jumK2)*($jum[19][2]/$jumK2)*($jum[20][2]/$jumK2);
        
        $P3=($jumK3/$totK)*($jum[1][3]/$jumK3)*($jum[2][3]/$jumK3)*($jum[3][3]/$jumK3)*($jum[4][3]/$jumK3)*($jum[5][3]/$jumK3)*($jum[6][3]/$jumK3)*($jum[7][3]/$jumK3)*($jum[8][3]/$jumK3)*($jum[9][3]/$jumK3)*($jum[10][3]/$jumK3)*($jum[11][3]/$jumK3)*($jum[12][3]/$jumK3)*($jum[13][3]/$jumK3)*($jum[14][3]/$jumK3)*($jum[15][3]/$jumK3)*($jum[16][3]/$jumK3)*($jum[17][3]/$jumK3)*($jum[18][3]/$jumK3)*($jum[19][3]/$jumK3)*($jum[20][3]/$jumK3);

        $P4=($jumK4/$totK)*($jum[1][4]/$jumK4)*($jum[2][4]/$jumK4)*($jum[3][4]/$jumK4)*($jum[4][4]/$jumK4)*($jum[5][4]/$jumK4)*($jum[6][4]/$jumK4)*($jum[7][4]/$jumK4)*($jum[8][4]/$jumK4)*($jum[9][4]/$jumK4)*($jum[10][4]/$jumK4)*($jum[11][4]/$jumK4)*($jum[12][4]/$jumK4)*($jum[13][4]/$jumK4)*($jum[14][4]/$jumK4)*($jum[15][4]/$jumK4)*($jum[16][4]/$jumK4)*($jum[17][4]/$jumK4)*($jum[18][4]/$jumK4)*($jum[19][4]/$jumK4)*($jum[20][4]/$jumK4);

        $P5=($jumK5/$totK)*($jum[1][5]/$jumK5)*($jum[2][5]/$jumK5)*($jum[3][5]/$jumK5)*($jum[4][5]/$jumK5)*($jum[5][5]/$jumK5)*($jum[6][5]/$jumK5)*($jum[7][5]/$jumK5)*($jum[8][5]/$jumK5)*($jum[9][5]/$jumK5)*($jum[10][5]/$jumK5)*($jum[11][5]/$jumK5)*($jum[12][5]/$jumK5)*($jum[13][5]/$jumK5)*($jum[14][5]/$jumK5)*($jum[15][5]/$jumK5)*($jum[16][5]/$jumK5)*($jum[17][5]/$jumK5)*($jum[18][5]/$jumK5)*($jum[19][5]/$jumK5)*($jum[20][5]/$jumK5);

        $P6=($jumK6/$totK)*($jum[1][6]/$jumK6)*($jum[2][6]/$jumK6)*($jum[3][6]/$jumK6)*($jum[4][6]/$jumK6)*($jum[5][6]/$jumK6)*($jum[6][6]/$jumK6)*($jum[7][6]/$jumK6)*($jum[8][6]/$jumK6)*($jum[9][6]/$jumK6)*($jum[10][6]/$jumK6)*($jum[11][6]/$jumK6)*($jum[12][6]/$jumK6)*($jum[13][6]/$jumK6)*($jum[14][6]/$jumK6)*($jum[15][6]/$jumK6)*($jum[16][6]/$jumK6)*($jum[17][6]/$jumK6)*($jum[18][6]/$jumK6)*($jum[19][6]/$jumK6)*($jum[20][6]/$jumK6);

        //kondisi untuk memilih penyakit dengan nilai probabilitasnya mendekati angaka 1        
        $value=0;
        if($P1>=$P2 && $P1>=$P3 && $P1>=$P4 && $P1>=$P5 && $P1>=$P6){
            $value                = $P1;
            $kode_penyakit        = $penyakit[0]['kode_penyakit'];
            $nama_penyakit        = $penyakit[0]['nama_penyakit'];
            $penyebab             = $penyakit[0]['penyebab'];
            $terindeks            = $penyakit[0]['terindeks'];
            $solusi               = $penyakit[0]['solusi'];
        }
        else if ($P2>=$P1 && $P2>=$P3 && $P2>=$P4 && $P2>=$P5 && $P2>=$P6){
            $value                = $P2;
            $kode_penyakit        = $penyakit[1]['kode_penyakit'];
            $nama_penyakit        = $penyakit[1]['nama_penyakit'];
            $penyebab             = $penyakit[1]['penyebab'];
            $terindeks            = $penyakit[1]['terindeks'];
            $solusi               = $penyakit[1]['solusi'];
        }
        else if ($P3>=$P1 && $P3>=$P2 && $P3>=$P4 && $P3>=$P5 && $P3>=$P6){
            $value                = $P3;
            $kode_penyakit        = $penyakit[2]['kode_penyakit'];
            $nama_penyakit        = $penyakit[2]['nama_penyakit'];
            $penyebab             = $penyakit[2]['penyebab'];
            $terindeks            = $penyakit[2]['terindeks'];
            $solusi               = $penyakit[2]['solusi'];
        }else if ($P4>=$P1 && $P4>=$P2 && $P4>=$P3 && $P4>=$P5 && $P4>=$P6){
            $value                = $P4;
            $kode_penyakit        = $penyakit[3]['kode_penyakit'];
            $nama_penyakit        = $penyakit[3]['nama_penyakit'];
            $penyebab             = $penyakit[3]['penyebab'];
            $terindeks            = $penyakit[3]['terindeks'];
            $solusi               = $penyakit[3]['solusi'];
        }else if ($P5>=$P1 && $P5>=$P2 && $P5>=$P3 && $P5>=$P4 && $P5>=$P6){
            $value                = $P5;
            $kode_penyakit        = $penyakit[4]['kode_penyakit'];
            $nama_penyakit        = $penyakit[4]['nama_penyakit'];
            $penyebab             = $penyakit[4]['penyebab'];
            $terindeks            = $penyakit[4]['terindeks'];
            $solusi               = $penyakit[4]['solusi'];
        }else if ($P6>=$P1 && $P6>=$P2 && $P6>=$P3 && $P6>=$P4 && $P6>=$P5){
            $value                = $P6;
            $kode_penyakit        = $penyakit[5]['kode_penyakit'];
            $nama_penyakit        = $penyakit[5]['nama_penyakit'];
            $penyebab             = $penyakit[5]['penyebab'];
            $terindeks            = $penyakit[5]['terindeks'];
            $solusi               = $penyakit[5]['solusi'];
        }



         //Pengujian Perhitungan Manual
         $rekapitulasi1="Rekap P01 =".($jumK1."/".$totK)."*".($jum[1][1]."/".$jumK1)."*".($jum[2][1]."/".$jumK1)."*".($jum[3][1]."/".$jumK1)."*".($jum[4][1]."/".$jumK1)."*".($jum[5][1]."/".$jumK1)."*".($jum[6][1]."/".$jumK1)."*".($jum[7][1]."/".$jumK1)."*".($jum[8][1]."/".$jumK1)."*".($jum[9][1]."/".$jumK1)."*".($jum[10][1]."/".$jumK1)."*".($jum[11][1]."/".$jumK1)."*".($jum[12][1]."/".$jumK1)."*".($jum[13][1]."/".$jumK1)."*".($jum[14][1]."/".$jumK1)."*".($jum[15][1]."/".$jumK1)."*".($jum[16][1]."/".$jumK1)."*".($jum[17][1]."/".$jumK1)."*".($jum[18][1]."/".$jumK1)."*".($jum[19][1]."/".$jumK1)."*".($jum[20][1]."/".$jumK1);
        
        $rekapitulasi2="Rekap P02 =".($jumK2."/".$totK)."*".($jum[1][2]."/".$jumK2)."*".($jum[2][2]."/".$jumK2)."*".($jum[3][2]."/".$jumK2)."*".($jum[4][2]."/".$jumK2)."*".($jum[5][2]."/".$jumK2)."*".($jum[6][2]."/".$jumK2)."*".($jum[7][2]."/".$jumK2)."*".($jum[8][2]."/".$jumK2)."*".($jum[9][2]."/".$jumK2)."*".($jum[10][2]."/".$jumK2)."*".($jum[11][2]."/".$jumK2)."*".($jum[12][2]."/".$jumK2)."*".($jum[13][2]."/".$jumK2)."*".($jum[14][2]."/".$jumK2)."*".($jum[15][2]."/".$jumK2)."*".($jum[16][2]."/".$jumK2)."*".($jum[17][2]."/".$jumK2)."*".($jum[18][2]."/".$jumK2)."*".($jum[19][2]."/".$jumK2)."*".($jum[20][2]."/".$jumK2);
        
        $rekapitulasi3="Rekap P03 =".($jumK3."/".$totK)."*".($jum[1][3]."/".$jumK3)."*".($jum[2][3]."/".$jumK3)."*".($jum[3][3]."/".$jumK3)."*".($jum[4][3]."/".$jumK3)."*".($jum[5][3]."/".$jumK3)."*".($jum[6][3]."/".$jumK3)."*".($jum[7][3]."/".$jumK3)."*".($jum[8][3]."/".$jumK3)."*".($jum[9][3]."/".$jumK3)."*".($jum[10][3]."/".$jumK3)."*".($jum[11][3]."/".$jumK3)."*".($jum[12][3]."/".$jumK3)."*".($jum[13][3]."/".$jumK3)."*".($jum[14][3]."/".$jumK3)."*".($jum[15][3]."/".$jumK3)."*".($jum[16][3]."/".$jumK3)."*".($jum[17][3]."/".$jumK3)."*".($jum[18][3]."/".$jumK3)."*".($jum[19][3]."/".$jumK3)."*".($jum[20][3]."/".$jumK3);

        $rekapitulasi4="Rekap P04 =".($jumK4."/".$totK)."*".($jum[1][4]."/".$jumK4)."*".($jum[2][4]."/".$jumK4)."*".($jum[3][4]."/".$jumK4)."*".($jum[4][4]."/".$jumK4)."*".($jum[5][4]."/".$jumK4)."*".($jum[6][4]."/".$jumK4)."*".($jum[7][4]."/".$jumK4)."*".($jum[8][4]."/".$jumK4)."*".($jum[9][4]."/".$jumK4)."*".($jum[10][4]."/".$jumK4)."*".($jum[11][4]."/".$jumK4)."*".($jum[12][4]."/".$jumK4)."*".($jum[13][4]."/".$jumK4)."*".($jum[14][4]."/".$jumK4)."*".($jum[15][4]."/".$jumK4)."*".($jum[16][4]."/".$jumK4)."*".($jum[17][4]."/".$jumK4)."*".($jum[18][4]."/".$jumK4)."*".($jum[19][4]."/".$jumK4)."*".($jum[20][4]."/".$jumK4);

        $rekapitulasi5="Rekap P05 =".($jumK5."/".$totK)."*".($jum[1][5]."/".$jumK5)."*".($jum[2][5]."/".$jumK5)."*".($jum[3][5]."/".$jumK5)."*".($jum[4][5]."/".$jumK5)."*".($jum[5][5]."/".$jumK5)."*".($jum[6][5]."/".$jumK5)."*".($jum[7][5]."/".$jumK5)."*".($jum[8][5]."/".$jumK5)."*".($jum[9][5]."/".$jumK5)."*".($jum[10][5]."/".$jumK5)."*".($jum[11][5]."/".$jumK5)."*".($jum[12][5]."/".$jumK5)."*".($jum[13][5]."/".$jumK5)."*".($jum[14][5]."/".$jumK5)."*".($jum[15][5]."/".$jumK5)."*".($jum[16][5]."/".$jumK5)."*".($jum[17][5]."/".$jumK5)."*".($jum[18][5]."/".$jumK5)."*".($jum[19][5]."/".$jumK5)."*".($jum[20][5]."/".$jumK5);

        $rekapitulasi6="Rekap P06 =".($jumK6."/".$totK)."*".($jum[1][6]."/".$jumK6)."*".($jum[2][6]."/".$jumK6)."*".($jum[3][6]."/".$jumK6)."*".($jum[4][6]."/".$jumK6)."*".($jum[5][6]."/".$jumK6)."*".($jum[6][6]."/".$jumK6)."*".($jum[7][6]."/".$jumK6)."*".($jum[8][6]."/".$jumK6)."*".($jum[9][6]."/".$jumK6)."*".($jum[10][6]."/".$jumK6)."*".($jum[11][6]."/".$jumK6)."*".($jum[12][6]."/".$jumK6)."*".($jum[13][6]."/".$jumK6)."*".($jum[14][6]."/".$jumK6)."*".($jum[15][6]."/".$jumK6)."*".($jum[16][6]."/".$jumK6)."*".($jum[17][6]."/".$jumK6)."*".($jum[18][6]."/".$jumK6)."*".($jum[19][6]."/".$jumK6)."*".($jum[20][6]."/".$jumK6);



      ?>

    </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="card-body">
                
              
            
            
                <!-- kondisi untuk mengecek apakah gejala yang dipilih tidak terdapat kata Ya -->
                <?php if($gejala[1]=="Tidak" && $gejala[2]=="Tidak" && $gejala[3]=="Tidak" && $gejala[4]=="Tidak" && $gejala[5]=="Tidak" && $gejala[6]=="Tidak" && $gejala[7]=="Tidak" && $gejala[8]=="Tidak" && $gejala[9]=="Tidak" && $gejala[10]=="Tidak" && $gejala[11]=="Tidak" && $gejala[12]=="Tidak" && $gejala[13]=="Tidak" && $gejala[14]=="Tidak" && $gejala[15]=="Tidak" && $gejala[16]=="Tidak" && $gejala[17]=="Tidak" && $gejala[18]=="Tidak" && $gejala[19]=="Tidak" && $gejala[20]=="Tidak"){ ?>

                    <!-- Jika tidak ada gejala yang dipilih-->
                    <p>Kucing Anda Terdiagnosa Penyakit: <b>Kucing Anda Tidak Terjangkit Penyakit Kulit</b></p>

                <?php } else if($gejala[1]=="Ya" && $gejala[2]=="Ya" && $gejala[3]=="Ya" && $gejala[4]=="Ya" && $gejala[5]=="Ya" && $gejala[6]=="Ya" && $gejala[7]=="Ya" && $gejala[8]=="Ya" && $gejala[9]=="Ya" && $gejala[10]=="Ya" && $gejala[11]=="Ya" && $gejala[12]=="Ya" && $gejala[13]=="Ya" && $gejala[14]=="Ya" && $gejala[15]=="Ya" && $gejala[16]=="Ya" && $gejala[17]=="Ya" && $gejala[18]=="Ya" && $gejala[19]=="Ya" && $gejala[20]=="Ya"){ ?>

                    <!-- Jika Ya semua Terdapat error -->
                    <p>Mohon pilih gejala dengan benar! , <b>Penyakit Kulit Kucing Tidak Terdeteksi</b></p>

                <?php } else if($gejala[1]=="Tidak" && $gejala[2]=="Tidak" && $gejala[3]=="Tidak" && $gejala[4]=="Tidak" && $gejala[5]=="Tidak" && $gejala[6]=="Tidak" && $gejala[7]=="Tidak" && $gejala[8]=="Tidak" && $gejala[9]=="Tidak" && $gejala[10]=="Tidak" && $gejala[11]=="Tidak" && $gejala[12]=="Tidak" && $gejala[13]=="Tidak" && $gejala[14]=="Tidak" && $gejala[15]=="Tidak" && $gejala[16]=="Tidak" && $gejala[17]=="Tidak" && $gejala[18]=="Tidak" && $gejala[19]=="Tidak" && $gejala[20]=="Ya"){ ?>

                    <!-- Jika Ya terdapat 1 di gejala yang mempunyai kesamaan di penyakit lain error -->
                    <p><b>Penyakit Kulit Kucing Tidak Terdeteksi</b></p>


                <?php } else if($gejala[1]=="Tidak" && $gejala[2]=="Tidak" && $gejala[3]=="Ya" && $gejala[4]=="Tidak" && $gejala[5]=="Tidak" && $gejala[6]=="Tidak" && $gejala[7]=="Tidak" && $gejala[8]=="Tidak" && $gejala[9]=="Tidak" && $gejala[10]=="Tidak" && $gejala[11]=="Tidak" && $gejala[12]=="Tidak" && $gejala[13]=="Tidak" && $gejala[14]=="Tidak" && $gejala[15]=="Tidak" && $gejala[16]=="Tidak" && $gejala[17]=="Tidak" && $gejala[18]=="Tidak" && $gejala[19]=="Tidak" && $gejala[20]=="Tidak"){ ?>

                    <!-- Jika Ya terdapat 1 di gejala yang mempunyai kesamaan di penyakit lain error -->
                    <p><b>Penyakit Kulit Kucing Tidak Terdeteksi</b></p>
                
                <?php }else{?>

                    <!-- Jika ada maka tampilkan hasil diagnosanya-->
                      <div class="text-center">
                          <p>Kucing Anda Terdiagnosa:</p>
                          <h4><b>Penyakit Kulit <?= $nama_penyakit;?></b></h4>
                          <p></p>
                        </div>

                      <!-- <p>Probabilitas: <b><?= $value;?></b></p> -->

                      <p>Persentase Nilai Prediksi Kategori Per Penyakit:<br></p>
                      <?php 

                        $total1 = $P1/($P1+$P2+$P3+$P4+$P5+$P6)*100;
                        $total2 = $P2/($P1+$P2+$P3+$P4+$P5+$P6)*100;
                        $total3 = $P3/($P1+$P2+$P3+$P4+$P5+$P6)*100;
                        $total4 = $P4/($P1+$P2+$P3+$P4+$P5+$P6)*100;
                        $total5 = $P5/($P1+$P2+$P3+$P4+$P5+$P6)*100;
                        $total6 = $P6/($P1+$P2+$P3+$P4+$P5+$P6)*100;
                        
                        //Function untuk menyimpan diagnosa
                        saveResult($kode_penyakit, $P1, $P2, $P3, $P4, $P5, $P6, $rekapitulasi1, $rekapitulasi2, $rekapitulasi3, $rekapitulasi4, $rekapitulasi5, $rekapitulasi6 );

                       
                        
                        //echo $rekapitulasi1."<br>";
                        //echo $rekapitulasi2."<br>";
                        //echo $rekapitulasi3."<br>";
                        //echo $rekapitulasi4."<br>";
                        //echo $rekapitulasi5."<br>";
                        //echo $rekapitulasi6."<br>";
                      ?>
                    <table class="ml-3">
                          <tr>
                            <td>Ringworm</td>
                            <td>:</td>
                            <td class="text-right"><?= substr(round($total1, 2), 0, 5);?>%</td>
                          </tr>
                          <tr>
                            <td>Scabies</td>
                            <td>:</td>
                            <td class="text-right"><?= substr(round($total2, 2), 0, 5);?>%</td>
                          </tr>
                          <tr>
                            <td>Alergi Dermatitis</td>
                            <td>:</td>
                            <td class="text-right"><?= substr(round($total3, 2), 0, 5);?>%</td>
                          </tr>
                          <tr>
                            <td>Feline Acne</td>
                            <td>:</td>
                            <td class="text-right"><?= substr(round($total4, 2), 0, 5);?>%</td>
                          </tr>
                          <tr>
                            <td>Pyoderma</td>
                            <td>:</td>
                            <td class="text-right"><?= substr(round($total5, 2), 0, 5);?>%</td>
                          </tr>
                          <tr>
                            <td>Kutu Lice</td>
                            <td>:</td>
                            <td class="text-right"><?= substr(round($total6, 2), 0, 5);?>%</td>
                          </tr>
                        </table>

                      <br>

                       <div class="accordion" id="accordionExample">
                          <div class="card">
                            <div class="card-header" id="headingOne">
                              <h2 class="mb-0">
                                <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <b>Penjelasan Penyakit</b>
                                </button>
                              </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                                <p><?= $penyebab;?></p>
                                
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <h2 class="mb-0">
                                <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <b>Terindeks</b>
                                </button>
                              </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body">
                                <p>Penyakit yang diderita oleh kucing anda : <?= $terindeks;?></p>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <h2 class="mb-0">
                                <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  <b>Solusi Pengobatan</b>
                                </button>
                                <div class="float-right mt-2" style="font-size:20px;">
                                  <span class="fas fa-info-circle" data-toggle="tooltip" data-placement="bottom" title="Solusi pengobatan yang harus dilakukan oleh pemilik kucing."></span>
                                </div>
                              </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body">
                                <p><?= $solusi;?></p>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                          
                        </div>

                <?php }?>

                 <a href="<?= base_url('konsultasi'); ?>" class="btn btn-primary mt-5"><i class="fas fa-arrow-circle-left"></i> Back to diagnosa</a>
                 <a href="<?= base_url('diagnosa/cetak/').$kode_penyakit; ?>" target="_blank" class="btn btn-danger mt-5"><i class="far fa-file-pdf"></i> Print Result</a>
            
    
                </div>
              </div>
</div>
</div>
</div>
</div>
</div>

    <!-- End Card -->

