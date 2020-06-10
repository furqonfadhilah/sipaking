<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datalatih extends CI_Controller
{
	//Method Default yang selalu diajalankan pada user access
	public function __construct()
	{
		parent::__construct();
		//load model M_datalatih
		$this->load->model('M_datalatih');
		$this->load->model('M_gejala');
		$this->load->model('M_penyakit');
		//menggunakan fungsi helper untuk login atau belum
		is_logged_in();
	}

	public function index()
	{
		//mengambil data dari table user yang ada di Auth Private function _login
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		//------------------------------------------------------------------------------------------------------//

		
		//desain web menampilkan header dan footer
		$data['title'] = 'SiPAKING - DataLatih';
		$pilihan = $this->input->get('p');
		
		$data['gejala'] = $this->M_gejala->getAllData();

		$data['penyakit'] = $this->M_penyakit->getAllData();

		$data['datalatih'] = $this->M_datalatih->getDataByKategori($pilihan);

		

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/datalatih', $data);
		$this->load->view('templates/footer');
	}



	public function inputdatalatih()
	{
		//mengambil data dari table user yang ada di Auth Private function _login
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('gejala1', 'Gejala1', 'required');
		$this->form_validation->set_rules('gejala2', 'Gejala2', 'required');
		$this->form_validation->set_rules('gejala3', 'Gejala3', 'required');
		$this->form_validation->set_rules('gejala4', 'Gejala4', 'required');
		$this->form_validation->set_rules('gejala5', 'Gejala5', 'required');
		$this->form_validation->set_rules('gejala6', 'Gejala6', 'required');
		$this->form_validation->set_rules('gejala7', 'Gejala7', 'required');
		$this->form_validation->set_rules('gejala8', 'Gejala8', 'required');
		$this->form_validation->set_rules('gejala9', 'Gejala9', 'required');
		$this->form_validation->set_rules('gejala10', 'Gejala10', 'required');
		$this->form_validation->set_rules('gejala11', 'Gejala11', 'required');
		$this->form_validation->set_rules('gejala12', 'Gejala12', 'required');
		$this->form_validation->set_rules('gejala13', 'Gejala13', 'required');
		$this->form_validation->set_rules('gejala14', 'Gejala14', 'required');
		$this->form_validation->set_rules('gejala15', 'Gejala15', 'required');
		$this->form_validation->set_rules('gejala16', 'Gejala16', 'required');
		$this->form_validation->set_rules('gejala17', 'Gejala17', 'required');
		$this->form_validation->set_rules('gejala18', 'Gejala18', 'required');
		$this->form_validation->set_rules('gejala19', 'Gejala19', 'required');
		$this->form_validation->set_rules('gejala20', 'Gejala20', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');


		if($this->form_validation->run()== false){
		//desain web menampilkan header dan footer
		$data['title'] = 'SiPAKING - Input Data Latih';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/inputdatalatih', $data);
		$this->load->view('templates/footer');
		}else{
			// Validasi Input Data Latih Sukses
					$data = [
						'gejala1' => $this->input->post('gejala1'),
						'gejala2' => $this->input->post('gejala2'),
						'gejala3' => $this->input->post('gejala3'),
						'gejala4' => $this->input->post('gejala4'),
						'gejala5' => $this->input->post('gejala5'),
						'gejala6' => $this->input->post('gejala6'),
						'gejala7' => $this->input->post('gejala7'),
						'gejala8' => $this->input->post('gejala8'),
						'gejala9' => $this->input->post('gejala9'),
						'gejala10' => $this->input->post('gejala10'),
						'gejala11' => $this->input->post('gejala11'),
						'gejala12' => $this->input->post('gejala12'),
						'gejala13' => $this->input->post('gejala13'),
						'gejala14' => $this->input->post('gejala14'),
						'gejala15' => $this->input->post('gejala15'),
						'gejala16' => $this->input->post('gejala16'),
						'gejala17' => $this->input->post('gejala17'),
						'gejala18' => $this->input->post('gejala18'),
						'gejala19' => $this->input->post('gejala19'),
						'gejala20' => $this->input->post('gejala20'),
						'kategori' => $this->input->post('kategori')
					];

					$this->db->insert('tb_datalatih', $data);
					//pesan berhasil
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! success input data training. </div>');
					redirect('datalatih/index');
		}
	}


	public function edit_data_latih($kode_datalatih)
	{
		$data ['title'] = 'Edit Datalatih';
		$data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();


		// Query Datalatih
		$data['datalatih'] = $this->db->get_where('tb_datalatih', ['kode_datalatih' => $kode_datalatih])->row_array();
		//Membuat rules
		$this->form_validation->set_rules('gejala1', 'Gejala1', 'required');
		$this->form_validation->set_rules('gejala2', 'Gejala2', 'required');
		$this->form_validation->set_rules('gejala3', 'Gejala3', 'required');
		$this->form_validation->set_rules('gejala4', 'Gejala4', 'required');
		$this->form_validation->set_rules('gejala5', 'Gejala5', 'required');
		$this->form_validation->set_rules('gejala6', 'Gejala6', 'required');
		$this->form_validation->set_rules('gejala7', 'Gejala7', 'required');
		$this->form_validation->set_rules('gejala8', 'Gejala8', 'required');
		$this->form_validation->set_rules('gejala9', 'Gejala9', 'required');
		$this->form_validation->set_rules('gejala10', 'Gejala10', 'required');
		$this->form_validation->set_rules('gejala11', 'Gejala11', 'required');
		$this->form_validation->set_rules('gejala12', 'Gejala12', 'required');
		$this->form_validation->set_rules('gejala13', 'Gejala13', 'required');
		$this->form_validation->set_rules('gejala14', 'Gejala14', 'required');
		$this->form_validation->set_rules('gejala15', 'Gejala15', 'required');
		$this->form_validation->set_rules('gejala16', 'Gejala16', 'required');
		$this->form_validation->set_rules('gejala17', 'Gejala17', 'required');
		$this->form_validation->set_rules('gejala18', 'Gejala18', 'required');
		$this->form_validation->set_rules('gejala19', 'Gejala19', 'required');
		$this->form_validation->set_rules('gejala20', 'Gejala20', 'required');
		$this->form_validation->set_rules('kategori', 'Kategori', 'required');

		//method index validasi Datalatih
		if($this->form_validation->run() == false){
		//membuat folder yang bernama menu yang terdapat file index

		// nampilin templates
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/edit_datalatih', $data);
		$this->load->view('templates/footer');

		}else{
			$this->M_datalatih->editDatalatih($kode_datalatih);

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  						Datalatih has been edit!</div>');
						redirect('datalatih');
			
		}
	}

	public function hapus_data_latih($kode_datalatih)
	{
		$this->M_datalatih->deleteDataLatih($kode_datalatih);

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  						Data Training has been deleted!</div>');
						redirect('datalatih');
	}



	public function exportexcel()
	{
		$data['list'] = $this->db->get('tb_datalatih')->result(); 

		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel.php');
		require(APPPATH. 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

		$object = new PHPExcel();
		$object->getProperties()->setCreator("SIPAKING");
		$object->getProperties()->setLastModifiedBy("SIPAKING");
		$object->getProperties()->setTitle("DATALATIH - SIPAKING");


		$object->setActiveSheetIndex(0);
		$object->getActiveSheet()->setCellValue('A1', 'NOMOR');
		$object->getActiveSheet()->setCellValue('B1', 'Gejala 1');
		$object->getActiveSheet()->setCellValue('C1', 'Gejala 2');
		$object->getActiveSheet()->setCellValue('D1', 'Gejala 3');
		$object->getActiveSheet()->setCellValue('E1', 'Gejala 4');
		$object->getActiveSheet()->setCellValue('F1', 'Gejala 5');
		$object->getActiveSheet()->setCellValue('G1', 'Gejala 6');
		$object->getActiveSheet()->setCellValue('H1', 'Gejala 7');
		$object->getActiveSheet()->setCellValue('I1', 'Gejala 8');
		$object->getActiveSheet()->setCellValue('J1', 'Gejala 9');
		$object->getActiveSheet()->setCellValue('K1', 'Gejala 10');
		$object->getActiveSheet()->setCellValue('L1', 'Gejala 11');
		$object->getActiveSheet()->setCellValue('M1', 'Gejala 12');
		$object->getActiveSheet()->setCellValue('N1', 'Gejala 13');
		$object->getActiveSheet()->setCellValue('O1', 'Gejala 14');
		$object->getActiveSheet()->setCellValue('P1', 'Gejala 15');
		$object->getActiveSheet()->setCellValue('Q1', 'Gejala 16');
		$object->getActiveSheet()->setCellValue('R1', 'Gejala 17');
		$object->getActiveSheet()->setCellValue('S1', 'Gejala 18');
		$object->getActiveSheet()->setCellValue('T1', 'Gejala 19');
		$object->getActiveSheet()->setCellValue('U1', 'Gejala 20');
		$object->getActiveSheet()->setCellValue('V1', 'Kategori Penyakit');

		$baris = 2;
		$no = 1;

		foreach ($data ['list'] as $l) {
			$object->getActiveSheet()->setCellValue('A'.$baris, $no++);
			$object->getActiveSheet()->setCellValue('B'.$baris, $l->gejala1);
			$object->getActiveSheet()->setCellValue('C'.$baris, $l->gejala2);
			$object->getActiveSheet()->setCellValue('D'.$baris, $l->gejala3);
			$object->getActiveSheet()->setCellValue('E'.$baris, $l->gejala4);
			$object->getActiveSheet()->setCellValue('F'.$baris, $l->gejala5);
			$object->getActiveSheet()->setCellValue('G'.$baris, $l->gejala6);
			$object->getActiveSheet()->setCellValue('H'.$baris, $l->gejala7);
			$object->getActiveSheet()->setCellValue('I'.$baris, $l->gejala8);
			$object->getActiveSheet()->setCellValue('J'.$baris, $l->gejala9);
			$object->getActiveSheet()->setCellValue('K'.$baris, $l->gejala10);
			$object->getActiveSheet()->setCellValue('L'.$baris, $l->gejala11);
			$object->getActiveSheet()->setCellValue('M'.$baris, $l->gejala12);
			$object->getActiveSheet()->setCellValue('N'.$baris, $l->gejala13);
			$object->getActiveSheet()->setCellValue('O'.$baris, $l->gejala14);
			$object->getActiveSheet()->setCellValue('P'.$baris, $l->gejala15);
			$object->getActiveSheet()->setCellValue('Q'.$baris, $l->gejala16);
			$object->getActiveSheet()->setCellValue('R'.$baris, $l->gejala17);
			$object->getActiveSheet()->setCellValue('S'.$baris, $l->gejala18);
			$object->getActiveSheet()->setCellValue('T'.$baris, $l->gejala19);
			$object->getActiveSheet()->setCellValue('U'.$baris, $l->gejala20);
			$object->getActiveSheet()->setCellValue('V'.$baris, $l->kategori);

			$baris++;
		}

		$filename = "Datalatih_sipaking".'.xlsx';
		$object->getActiveSheet()->setTitle("Datalatih - SiPAKING");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$filename.'" ');
		header('Cache-Control: max-age=0');

		$writer= PHPExcel_IOFactory::createwriter($object, 'Excel2007');
		$writer->save('php://output');

		exit;

	}



	
}