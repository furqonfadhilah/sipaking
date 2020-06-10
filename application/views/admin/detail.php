<div class="container">
	<div class="row mt-3">
		<div class="col-md-10">


			<div class="card">
			  <div class="card-header">
			   Detail Informasi
			    <h6 class="card-title float-right"><small>Tanggal konsul : <?= date('d F Y', $list['date_created']); ?></small><p> <a href="<?= base_url()?>datamedispengujian/cetakhasil/<?=$list['kode_pengujian']; ?>" class="badge badge-danger float-right" target="_blank"><i class="fas fa-file-pdf"></i> pdf</a></p></h6>

			  </div>
			  <div class="card-body">
			  <h4 class="card-title">Nama : <?= $list['nama']; ?></h4> 
			  <h4 class="card-title">Email : <?= $list['user_email']; ?></h4>
			  <h4 class="card-title">Nama kucing : <?= $list['nama_kucing']; ?></h4>
			  <h4 class="card-title">Genital's Kucing : <?= $list['jenis_kelamin_kucing']; ?></h4>
			  <hr>
			    <blockquote class="blockquote mb-0">
			     <p align="center">Detail Informasi Data Record Pengujian Nomor <?=$list['kode_pengujian'] ?></p>
			     <table class="table table-striped">
					  <thead>
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col"><center> Gejala</center></th>
					      <th scope="col">Pilihan Gejala</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <th scope="row">G1</th>
					      <td><small>Adanya ruam atau lesi yang berbentuk melingkar di bagian kepala dan badan</small></td>
					      <td><?= $list['gejala1']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G2</th>
					      <td><small>Penebalan pada area lesi dengan warna kemerahan di tengahnya</small></td>
					      <td><?= $list['gejala2']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G3</th>
					      <td><small>Kucing mengalami gatal-gatal</small></td>
					      <td><?= $list['gejala3']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G4</th>
					      <td><small>Nafsu makan menurun</small></td>
					      <td><?= $list['gejala4']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G5</th>
					      <td><small>Bau tidak sedap di pernafasan kucing</small></td>
					      <td><?= $list['gejala5']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G6</th>
					      <td><small>Kulit kucing menimbulkan kerak, bersisik dan menutupi area kuping dan kepala</small></td>
					      <td><?= $list['gejala6']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G7</th>
					      <td><small>Fases kucing cair dan berdarah</small></td>
					      <td><?= $list['gejala7']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G8</th>
					      <td><small>Bersin terus menerus dan terdapat kotoran pada hidung</small></td>
					      <td><?= $list['gejala8']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G9</th>
					      <td><small>Diare/gangguan pencernaan</small></td>
					      <td><?= $list['gejala9']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G10</th>
					      <td><small>Menjilat bagian kaki dan ekor terus menerus</small></td>
					      <td><?= $list['gejala10']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G11</th>
					      <td><small>Sering menggaruk dagu dan menyebabkan luka/trauma pada area dagu</small></td>
					      <td><?= $list['gejala11']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G12</th>
					      <td><small>Banyak komedo, bintik hitam pada bagian dagu dan mulut kucing</small></td>
					      <td><?= $list['gejala12']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G13</th>
					      <td><small>Dagu kucing terlihat kotor</small></td>
					      <td><?= $list['gejala13']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G14</th>
					      <td><small>Dagu kucing terlihat kotor</small></td>
					      <td><?= $list['gejala14']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G15</th>
					      <td><small>Mengeluarkan cairan berupa nanah berwarna kuning dan bau</small></td>
					      <td><?= $list['gejala15']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G16</th>
					      <td><small>Terdapat cairan yang keluar di bagian ekor</small></td>
					      <td><?= $list['gejala16']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G17</th>
					      <td><small>Menggigiti ekor, lengan, paha, dan bokong terus menerus</small></td>
					      <td><?= $list['gejala17']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G18</th>
					      <td><small>Kulit kucing terlihat kering dan kasar</small></td>
					      <td><?= $list['gejala18']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G19</th>
					      <td><small>Berat badan mengalami penurunan</small></td>
					      <td><?= $list['gejala19']; ?></td>
					    </tr>
					    <tr>
					      <th scope="row">G20</th>
					      <td><small>Bulu rontok berlebihan</small></td>
					      <td><?= $list['gejala20']; ?></td>
					    </tr>

					</tbody>
				  </table>
			      <hr>

			      <footer class="blockquote-footer">
			      	Perhitungan Manual Rekapitulasi :
			      	<p></p>
			      	<p><small><?= $list['rekapitulasi1']; ?></small></p>
			      	<p><small><?= $list['rekapitulasi2']; ?></small></p>
			      	<p><small><?= $list['rekapitulasi3']; ?></small></p>
			      	<p><small><?= $list['rekapitulasi4']; ?></small></p>
			      	<p><small><?= $list['rekapitulasi5']; ?></small></p>
			      	<p><small><?= $list['rekapitulasi6']; ?></small></p>
			      	<hr>


			      	Probabilitas :
			      	<p></p>
			      	<p><small>Penyakit Ringworm : <?= $list['penyakit1']; ?></small></p>
			      	<p><small>Penyakit Scabies : <?= $list['penyakit2']; ?></small></p>
			      	<p><small>Penyakit Alergi Dermatitis : <?= $list['penyakit3']; ?></small></p>
			      	<p><small>Penyakit Feline Acne :<?= $list['penyakit4']; ?></small></p>
			      	<p><small>Penyakit Pyodrema : <?= $list['penyakit5']; ?></small></p>
			      	<p><small>Penyakit Kutu Lice : <?= $list['penyakit6']; ?></small></p>
			      	<hr>
			      	Terdiagnosa Penyakit Kulit : <cite title="Source Title"><?= $list['result']; ?></cite>

			      <a href="<?= base_url('datamedispengujian');?>" class="badge badge-info float-right"><i class="fas fa-undo-alt"></i> Back</a>
			      
			  	  </footer>
			    </blockquote>
			  </div>
			</div>





		</div>
	</div>
</div>