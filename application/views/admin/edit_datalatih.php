  <!-- Begin Page Content -->
    <div class="container-fluid">

       <!-- Page Heading -->
       <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>




      <?= form_open(); ?>
        
        <div class="form-group row">
          <label for="gejala1" class="col-sm-8 col-form-label">G01 : Adanya ruam atau lesi yang berbentuk melingkar di bagian kepala dan badan</label>
           <div class="col-sm-3">
            <select class="form-control" id="gejala1" name="gejala1">
              <option value="">Select Gejala1</option>
                <option value="Ya" <?php if($datalatih['gejala1'] == "Ya" ){ echo"selected";} ?>>Ya</option>
                <option value="Tidak" <?php if($datalatih['gejala1']== "Tidak"  ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala2" class="col-sm-8 col-form-label">G02 : Penebalan pada area lesi dengan warna kemerahan di tengahnya</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala2" name="gejala2">
              <option value="">Select Gejala2</option>
              <option value="Ya" <?php if($datalatih['gejala2'] == "Ya" ){ echo"selected";} ?>>Ya</option>
              <option value="Tidak" <?php if($datalatih['gejala2'] == "Tidak" ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala3" class="col-sm-8 col-form-label">G03 : Kucing mengalami gatal-gatal</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala3" name="gejala3">
              <option value="">Select Gejala3</option>
              <option value="Ya" <?php if($datalatih['gejala3'] == "Ya"  ){ echo"selected";} ?>>Ya</option>
              <option value="Tidak" <?php if($datalatih['gejala3']== "Tidak"  ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala4" class="col-sm-8 col-form-label">G04 : Nafsu makan menurun</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala4" name="gejala4">
              <option value="">Select Gejala4</option>
              <option value="Ya" <?php if($datalatih['gejala4'] == "Ya"  ){ echo"selected";} ?>>Ya</option>
              <option value="Tidak" <?php if($datalatih['gejala4']== "Tidak"  ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala5" class="col-sm-8 col-form-label">G05 : Bau tidak sedap di pernafasan kucing</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala5" name="gejala5">
              <option value="">Select Gejala5</option>
              <option value="Ya" <?php if($datalatih['gejala5'] == "Ya"  ){ echo"selected";} ?>>Ya</option>
              <option value="Tidak" <?php if($datalatih['gejala5']== "Tidak" ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala6" class="col-sm-8 col-form-label">G06 : Kulit kucing menimbulkan kerak, bersisik dan menutupi area kuping dan kepala</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala6" name="gejala6">
              <option value="">Select Gejala6</option>
              <option value="Ya" <?php if($datalatih['gejala6'] == "Ya"  ){ echo"selected";} ?>>Ya</option>
              <option value="Tidak" <?php if($datalatih['gejala6']== "Tidak"  ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala7" class="col-sm-8 col-form-label">G07 : Fases kucing cair dan berdarah</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala7" name="gejala7">
              <option value="">Select Gejala7</option>
             <option value="Ya" <?php if($datalatih['gejala7'] == "Ya"  ){ echo"selected";} ?>>Ya</option>
                <option value="Tidak" <?php if($datalatih['gejala7']== "Tidak"  ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala8" class="col-sm-8 col-form-label">G08 : Bersin terus menerus dan terdapat kotoran pada hidung</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala8" name="gejala8">
              <option value="">Select Gejala8</option>
              <option value="Ya" <?php if($datalatih['gejala8'] == "Ya"  ){ echo"selected";} ?>>Ya</option>
                <option value="Tidak" <?php if($datalatih['gejala8']== "Tidak" ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala9" class="col-sm-8 col-form-label">G09 : Diare/gangguan pencernaan</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala9" name="gejala9">
              <option value="">Select Gejala9</option>
             <option value="Ya" <?php if($datalatih['gejala9'] == "Ya" ){ echo"selected";} ?>>Ya</option>
             <option value="Tidak" <?php if($datalatih['gejala9']== "Tidak"  ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala10" class="col-sm-8 col-form-label">G10 : Menjilat bagian kaki dan ekor terus menerus</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala10" name="gejala10">
              <option value="">Select Gejala10</option>
              <option value="Ya" <?php if($datalatih['gejala10']  == "Ya" ){ echo"selected";} ?>>Ya</option>
              <option value="Tidak" <?php if($datalatih['gejala10'] == "Tidak" ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala11" class="col-sm-8 col-form-label">G11 : Sering menggaruk dagu dan menyebabkan luka/trauma pada area dagu</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala11" name="gejala11">
              <option value="">Select Gejala11</option>
              <option value="Ya" <?php if($datalatih['gejala11']  == "Ya" ){ echo"selected";} ?>>Ya</option>
                <option value="Tidak" <?php if($datalatih['gejala11']== "Tidak"  ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala12" class="col-sm-8 col-form-label">G12 : Banyak komedo, bintik hitam pada bagian dagu dan mulut kucing</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala12" name="gejala12">
              <option value="">Select Gejala12</option>
              <option value="Ya" <?php if($datalatih['gejala12']  == "Ya" ){ echo"selected";} ?>>Ya</option>
                <option value="Tidak" <?php if($datalatih['gejala12']== "Tidak"  ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala13" class="col-sm-8 col-form-label">G13 : Dagu kucing terlihat kotor</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala13" name="gejala13">
              <option value="">Select Gejala13</option>
              <option value="Ya" <?php if($datalatih['gejala13']  == "Ya" ){ echo"selected";} ?>>Ya</option>
                <option value="Tidak" <?php if($datalatih['gejala13']== "Tidak"  ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala14" class="col-sm-8 col-form-label">G14 : Bau menyangat dari kulit</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala14" name="gejala14">
              <option value="">Select Gejala14</option>
              <option value="Ya" <?php if($datalatih['gejala14']  == "Ya" ){ echo"selected";} ?>>Ya</option>
                <option value="Tidak" <?php if($datalatih['gejala14']== "Tidak" ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala15" class="col-sm-8 col-form-label">G15 : Mengeluarkan cairan berupa nanah berwarna kuning dan bau</label>
         <div class="col-sm-3">
            <select class="form-control" id="gejala15" name="gejala15">
              <option value="">Select Gejala15</option>
              <option value="Ya" <?php if($datalatih['gejala15']  == "Ya" ){ echo"selected";} ?>>Ya</option>
                <option value="Tidak" <?php if($datalatih['gejala15'] == "Tidak"){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala16" class="col-sm-8 col-form-label">G16 : Lembab di bagian ekor</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala16" name="gejala16">
              <option value="">Select Gejala16</option>
               <option value="Ya" <?php if($datalatih['gejala16']  == "Ya" ){ echo"selected";} ?>>Ya</option>
                <option value="Tidak" <?php if($datalatih['gejala16'] == "Tidak"){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala17" class="col-sm-8 col-form-label">G17 : Menggigiti ekor, lengan, pada, dan bokong terus menerus</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala17" name="gejala17">
              <option value="">Select Gejala17</option>
               <option value="Ya" <?php if($datalatih['gejala17'] == "Ya" ){ echo"selected";} ?>>Ya</option>
                <option value="Tidak" <?php if($datalatih['gejala17'] =="Tidak" ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala18" class="col-sm-8 col-form-label">G18 : Kulit kucing terlihat kering dan kasar</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala18" name="gejala18">
              <option value="">Select Gejala18</option>
               <option value="Ya" <?php if($datalatih['gejala18'] == "Ya" ){ echo"selected";} ?>>Ya</option>
                <option value="Tidak" <?php if($datalatih['gejala18'] == "Tidak" ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala19" class="col-sm-8 col-form-label">G19 : Berat badan mengalami penurunan</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala19" name="gejala19">
              <option value="">Select Gejala19</option>
               <option value="Ya" <?php if($datalatih['gejala19'] == "Ya"  ){ echo"selected";} ?>>Ya</option>
                <option value="Tidak" <?php if($datalatih['gejala19'] == "Tidak" ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="gejala20" class="col-sm-8 col-form-label">G20 : Bulu rontok berlebihan</label>
          <div class="col-sm-3">
            <select class="form-control" id="gejala20" name="gejala20">
              <option value="">Select Gejala20</option>
               <option value="Ya" <?php if($datalatih['gejala20'] == "Ya"  ){ echo"selected";} ?>>Ya</option>
                <option value="Tidak" <?php if($datalatih['gejala20'] =="Tidak" ){ echo"selected";} ?>>Tidak</option>
            </select>
        </div>
        </div>

        <div class="form-group row">
          <label for="kategori" class="col-sm-8 col-form-label">Kategori : </label>
          <div class="col-sm-3">
            <select class="form-control" id="kategori" name="kategori">
              <option value="">Select Kategori</option>
              <option value="Scabies" <?php if($datalatih['kategori'] == "Scabies" ){ echo"selected";} ?>>Scabies</option>
              <option value="Ringworm" <?php if($datalatih['kategori'] == "Ringworm" ){ echo"selected";} ?>>Ringworm</option>
              <option value="Alergi Dermatitis" <?php if($datalatih['kategori'] == "Alergi Dermatitis" ){ echo"selected";} ?>>Alergi Dermatitis</option>
              <option value="Feline Acne" <?php if($datalatih['kategori'] == "Feline Acne" ){ echo"selected";} ?>>Feline Acne</option>
              <option value="Pyoderma" <?php if($datalatih['kategori'] == "Pyoderma" ){ echo"selected";} ?>>Pyoderma</option>
              <option value="Kutu Lice" <?php if($datalatih['kategori'] == "Kutu Lice" ){ echo"selected";} ?>>Kutu Lice</option>
            </select>
        </div>
        </div>

       
       
        <div class="form-group row mt-5">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Edit Data Latih</button>
          </div>
        </div>
       <?= form_close(); ?>










    </div>
    <!-- /.container-fluid -->









