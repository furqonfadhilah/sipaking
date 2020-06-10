<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{

	public function index()
	{
		//Validasi data saat inputkan data nama dan email valid saat konsultasi
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('user_email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('nama_kucing', 'Nama Kucing', 'required|trim');
		
		$data['title'] = 'KONSULTASI - SiPAKING';

        if($this->form_validation->run()== false){
			$this->load->view('templates/home/home_header', $data);
			$this->load->view('pages/konsultasi', $data);
			$this->load->view('templates/home/home_footer');
		}else{

	   		//data nama diterima dengan metode POST
	   		$nama 	= $this->input->post('nama');
	   		//data email diterima dengan metode POST
	   		$user_email 	= $this->input->post('user_email');
	   		$nama_kucing 	= $this->input->post('nama_kucing');
	   		$jenis_kelamin_kucing 	= $this->input->post('jenis_kelamin_kucing');

	   		$dataSession = [
	   			'nama' => $nama,
	   			'user_email' => $user_email,
	   			'nama_kucing' => $nama_kucing,
	   			'jenis_kelamin_kucing' => $jenis_kelamin_kucing
	   		];

	   		$this->session->set_userdata($dataSession);
	   		redirect('konsultasi/pilih_gejala');

   		}
   }

   public function pilih_gejala()
	{		
	   	$data['title'] = 'KONSULTASI - SiPAKING';
		//query data gejala dari database
        $data['gejala'] = $this->db->get('tb_gejala')->result_array();

		$this->load->view('templates/home/home_header', $data);
		$this->load->view('pages/pilih_gejala', $data);
		$this->load->view('templates/home/home_footer');
	}


   	public function diagnosa_gejala()
   	{		
   		$nama = $this->session->userdata('nama');
   		$user_email = $this->session->userdata('user_email');
   		$nama_kucing = $this->session->userdata('nama_kucing');
   		$jenis_kelamin_kucing = $this->session->userdata('jenis_kelamin_kucing');
   	
   			//data gejala diterima dengan metode POST
   		for ($i=1; $i <= 20; $i++) { 
   			$gejala[$i] = $this->input->post('gejala'.$i);
   		}

			//pengulangan untuk menghasilkan nilai Ya atau Tidak ke setiap gejala yang dipilih	
   		for ($i=1; $i <= 20; $i++) { 
   			if ($gejala[$i] == null) {
   				$gejala[$i] = "Tidak";
   			}else{
   				$gejala[$i] = "Ya";
   			}
   		}	

   		//menyimpan nama email dan data gejala yang dipilih ke dalam array ke session
   		$dataGejala = [
   			'nama'	  		  => $nama,
   			'user_email'	  => $user_email,
   			'nama_kucing'	  => $nama_kucing,
   			'jenis_kelamin_kucing'	  => $jenis_kelamin_kucing,
			'gejala1' 		  => $gejala[1],
			'gejala2'		  => $gejala[2],
			'gejala3'		  => $gejala[3],
			'gejala4'		  => $gejala[4],
			'gejala5' 		  => $gejala[5],
			'gejala6' 		  => $gejala[6],
			'gejala7' 		  => $gejala[7],
			'gejala8' 		  => $gejala[8],
			'gejala9' 		  => $gejala[9],
			'gejala10'		  => $gejala[10],
			'gejala11'		  => $gejala[11],
			'gejala12' 		  => $gejala[12],
			'gejala13' 		  => $gejala[13],
			'gejala14' 		  => $gejala[14],
			'gejala15'		  => $gejala[15],
			'gejala16' 		  => $gejala[16],
			'gejala17' 		  => $gejala[17],
			'gejala18' 		  => $gejala[18],
			'gejala19' 		  => $gejala[19],
			'gejala20' 		  => $gejala[20]

   		];

   		//data yang telah diubah menjadi array, selanjutnya disimpan ke dalam session
   		$this->session->set_userdata($dataGejala);

   		redirect('diagnosa/result');
	}
}	