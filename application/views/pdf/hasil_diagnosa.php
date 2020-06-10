<!DOCTYPE html>
<html>
<head>
	<title>Hasil Diagnosa</title>

	<style type="text/css">
		

		body{
			font: 12px arial, sans-serif;
			color:#333;
		}
        
		.identitas{
		  width: 220px;
		  border: 1px solid black;
		  padding: 1px;
		  margin-top: 4px;
		}

		.kotak{
			width: 220px;
			background-color: salmon;
			color: white;
			text-align: left;
			font-size: 14px;
			font: 12px arial, sans-serif;
		}

		.container{
			width: 710px;
			border: 2px solid #333;
			padding: 5px;
			margin-top: 12px;
		}

		.footer{
			font-size: 9px;
			color: #333;
			margin-top: 100px;
			text-align: center;
		}


    </style>
</head>
<body>

<p align="righ">Tanggal Laporan: <?= $pdf['date']?></p>
<h2 align="center">SPMI - Program Studi UNAS : Visi & Misi, Kemahasiswaan, Capaian Luaran</h2>
<hr>

<!--
<div class="identitas">
	<div class="kotak"><b>Form Identitas Konsultasi</b></div>
	<div class="kotak">Nama  : <?= $pdf['nama']?></div>
	<div class="kotak">Email  : <?= $pdf['user_email']?></div>
	<div class="kotak">Nama Kucing  : <?= $pdf['nama_kucing']?></div>
	<div class="kotak">Genitals Kucing  : <?= $pdf['jenis_kelamin_kucing']?></div>
	</div>
-->

<!--
<div class="container">
<table>
	<tr>
		<td>No </td>
		<td align="center">Data Gejala<hr></td>
		<td></td>
		<td align="right">Pilihan Gejala </td>
	</tr>
	<?= $i = 1?>
	<?php foreach ($gejala as $g) :?>
	<tr>
		<td></td>
		<td><?= $g['gejala']?></td>
		<td>:</td>
		
		<td align="right"><?= $pdf['gejala'. $i]?></td>

	</tr>
	<?php $i++?>
<?php endforeach; ?>
</table>
-->

<div class="page_break"></div>

<!-- CETAKAN PENYAKIT KULIT KUCING TERDIAGNOSA 
<br>
<h3>Kucing Anda Terdiagnosa : <?= $pdf['penyakit'];?></h3>

 <b>PENYEBAB :</b>
	<p> <?= $pdf['penyebab'];?></p>

	<b>TERINDEKS :</b>
	<p><?= $pdf['terindeks'];?></p>

	<br>

	<b>SOLUSI :</b>
	    <p><?= $pdf['solusi'];?></p>
</div>
-->
<p>Indikator Visi & Misi : Kesesuaian visi insititusi, Unit Pengelola Program Studi (UPPS), dan Program Studi.</p>
<p>Indikator Visi & Misi : Visi Unit Pengelola Program Studi (UPPS) menunjukkan keterkaitannya dengan visi misi universitas tetapi belum menunjukkan kaitannya dengan visi keilmuan Program Sudi.</p>
<p>Indikator Visi & Misi : Visi Unit Misi, tujuan, dan strategi Unit Pengelola Program Studi (UPPS) tidak searah dan bersinergi dengan nilan, tujuan, dan strategi institusi.</p>
<p>Indikator Visi & Misi : Penyusunan Visi, Misi, dan Strategi Pencapaian (VMTS) hanya melibatkan pemangku internal.</p>
<p>Indikator Visi & Misi : Penyusunan Visi, Misi, dan Strategi Pencapaian (VMTS) hanya melibatkan pemangku internal dan eksternal, dan didokumentasikan dengan lengkap.</p>


<p>Indikator Kemahasiswaan : Unit Pengelolaan Program Studi (UPPS) atau institusi belum mempunyai panduan tertulis tentang penerimaan mahasiswa baru.</p>
<p>Indikator Kemahasiswaan : Ketersediaan sistem pengambilan keputusan tentang penerimaan mahasiswa baru.</p>
<p>Indikator Kemahasiswaan : Ketersediaan layanan minat bakat , karir, dan kewirausahaan.</p>
<p>Indikator Kemahasiswaan : Ketersediaan bimbingan dan konseling layanan beasiswa, dan layanan kesehatan.</p>


<p>Indikator Capaian Luaran : Rumusan capaian pembelajaran lulusan program studi yang sesuai dengan Standar Nasional Pendidikan Tinggi (SN-Dikti) dan memiliki kesetaraan dengan jenjang yang tepat pada Kerangka Kualifikasi Nasional Indonesia (KKNI).</p>
<p>Indikator Capaian Luaran : Rumusan capaian pembelajaran lulusan telah dijadikan rujukan dalam pengembangan.</p>
<p>Indikator Capaian Luaran : Keberadaan pedoman penentuan kriteria minimal hasil penelitian yang memenuhi aspek.</p>

<p class="footer">Created By Furqon Fadhilah - Sistem Penjaminan Mutu Internal Program Studi UNAS </p>



</body>
</html>