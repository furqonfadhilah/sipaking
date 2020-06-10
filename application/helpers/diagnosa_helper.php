<?php
	
	//Ini untuk mencari jumlah sesuai jawaban per kategori penyakit
	function getKK($data, $kat, $kolom)
	{
		$ci = get_instance();
		$jum = $ci->db->query("SELECT kategori FROM tb_datalatih WHERE $kolom = '$data' AND kategori = '$kat'")->num_rows();

		return $jum;
	}

	//Ini untuk mencari jumlah datalatih per kategori penyakit
	function getOut($kat)
	{
		$ci = get_instance();
		$jum = $ci->db->query("SELECT `kategori` FROM `tb_datalatih` WHERE `kategori` = '$kat'")->num_rows();

		return $jum;
	}


	//Menyimpan Data Result Hasil Diagnosa
	function saveResult($kode_penyakit, $P1, $P2, $P3, $P4, $P5, $P6, $rekapitulasi1, $rekapitulasi2, $rekapitulasi3, $rekapitulasi4, $rekapitulasi5, $rekapitulasi6 )
	{
		$ci = get_instance();
		$dataResult = [ 
			'nama'		 	 => $ci->session->userdata('nama'),
			'user_email' 	 => $ci->session->userdata('user_email'),
			'nama_kucing' 	 => $ci->session->userdata('nama_kucing'),
			'jenis_kelamin_kucing' 	 => $ci->session->userdata('jenis_kelamin_kucing'),
			'date_created'	 => time(),
			'gejala1'	 => $ci->session->userdata('gejala1'),
			'gejala2'	 => $ci->session->userdata('gejala2'),
			'gejala3'	 => $ci->session->userdata('gejala3'),
			'gejala4'	 => $ci->session->userdata('gejala4'),
			'gejala5'	 => $ci->session->userdata('gejala5'),
			'gejala6'	 => $ci->session->userdata('gejala6'),
			'gejala7'	 => $ci->session->userdata('gejala7'),
			'gejala8'	 => $ci->session->userdata('gejala8'),
			'gejala9'	 => $ci->session->userdata('gejala9'),
			'gejala10'	 => $ci->session->userdata('gejala10'),
			'gejala11'	 => $ci->session->userdata('gejala11'),
			'gejala12'	 => $ci->session->userdata('gejala12'),
			'gejala13'	 => $ci->session->userdata('gejala13'),
			'gejala14'	 => $ci->session->userdata('gejala14'),
			'gejala15'	 => $ci->session->userdata('gejala15'),
			'gejala16'	 => $ci->session->userdata('gejala16'),
			'gejala17'	 => $ci->session->userdata('gejala17'),
			'gejala18'	 => $ci->session->userdata('gejala18'),
			'gejala19'	 => $ci->session->userdata('gejala19'),
			'gejala20'	 => $ci->session->userdata('gejala20'),
			'rekapitulasi1' => $rekapitulasi1,
			'rekapitulasi2' => $rekapitulasi2,
			'rekapitulasi3' => $rekapitulasi3,
			'rekapitulasi4' => $rekapitulasi4,
			'rekapitulasi5' => $rekapitulasi5,
			'rekapitulasi6' => $rekapitulasi6,
			'penyakit1'	 => $P1,
			'penyakit2'	 => $P2,
			'penyakit3'	 => $P3,
			'penyakit4'	 => $P4,
			'penyakit5'	 => $P5,
			'penyakit6'	 => $P6,
			'result'	 => $kode_penyakit
		];

		$ci->db->insert('tb_pengujian', $dataResult);
	}