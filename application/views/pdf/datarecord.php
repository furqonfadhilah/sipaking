<!DOCTYPE html>
<html>
<head>
	<title>Data Record Pengujian</title>

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

<p align="righ">Tanggal Konsultasi Pengujian : <?= $pdf['date']?></p>
<h2 align="center">SIPAKING - Data Record Pengujian </h2>
<hr>

<div class="identitas">
	<div class="kotak"><b>Form Identitas Konsultasi</b></div>
	<div class="kotak">Nama  : <?= $pdf['nama']?></div>
	<div class="kotak">Email  : <?= $pdf['user_email']?></div>
	<div class="kotak">Nama Kucing  : <?= $pdf['nama_kucing']?></div>
	<div class="kotak">Genitals Kucing  : <?= $pdf['jenis_kelamin_kucing']?></div>
	
</div>


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

<div class="page_break"></div>

<!-- CETAKAN PENYAKIT KULIT KUCING TERDIAGNOSA -->
<br>
<h3>Kucing <?= $pdf['nama']?> Terdiagnosa : <?= $pdf['result'];?></h3>

 
</div>



<p class="footer">Created By Furqon Fadhilah - Sistem Pakar Penyakit Kulit Pada Kucing </p>



</body>
</html>