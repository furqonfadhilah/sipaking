<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datamedispengujian extends CI_Controller
{
	//Method Default yang selalu diajalankan pada user access
	public function __construct()
	{
		parent::__construct();
		//load model M_datalatih
		$this->load->model('M_datamedispengujian');
		//menggunakan fungsi helper untuk login atau belum
		is_logged_in();
	}

	public function index()
	{
		//mengambil data dari table user yang ada di Auth Private function _login
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		//------------------------------------------------------------------------------------------------------//

		//Load Library Pagination
		$this->load->library('pagination');
		
		//ambil data keyword
		if($this->input->post('submit')){
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword'] = $this->session->userdata('keyword');
		}
		
		//config
		$this->db->like('nama', $data['keyword']);
		$this->db->or_like('user_email', $data['keyword']);
		$this->db->or_like('date_created', $data['keyword']);
		$this->db->or_like('nama_kucing', $data['keyword']);
		$this->db->or_like('jenis_kelamin_kucing', $data['keyword']);
		$this->db->from('tb_pengujian');
		$config['total_rows'] = $this->db->count_all_results();
		$data['total_rows'] = $config['total_rows'];
		$config['per_page'] = 10;
		
		

		//initialize
		$this->pagination->initialize($config);

		//menampilkan url dari start pagination menggunakan segment
		$data['start'] = $this->uri->segment(3);
		//menampilkan data admin melalui model dengan pagination
		$data['list'] = $this->M_datamedispengujian->tampilDataMedisPengujian($config['per_page'], $data['start'], $data['keyword']);
	

		//-----------------------------------------------------------------------------------------------------//
		

		//desain web menampilkan header dan footer
		$data['title'] = 'SIPAKING - Data Record Pengujian';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/datamedispengujian', $data);
		$this->load->view('templates/footer');
	}

	public function datapengujian_hapus($kode_pengujian)
	{
		$this->M_datamedispengujian->deleteDataMedisPengujian($kode_pengujian);

		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  						Data Record has been deleted!</div>');
						redirect('datamedispengujian');


	}


	public function detail($kode_pengujian)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['list'] = $this->M_datamedispengujian->getDetailPengujianById($kode_pengujian);
		$data['title'] = 'SiPAKING - Detail Informasi';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/detail', $data);
		$this->load->view('templates/footer');
	}

	public function cetakhasil($kode_pengujian)
	{

	
	$data['gejala'] = $this->db->get('tb_gejala')->result_array();
	$pengujian = $this->db->get_where('tb_pengujian', ['kode_pengujian' => $kode_pengujian])->row_array();

 	$data['pdf'] = [ 
			'nama'		 	 => $pengujian['nama'],
			'user_email' 	 => $pengujian['user_email'],
			'nama_kucing' 	 => $pengujian['nama_kucing'],
			'jenis_kelamin_kucing' 	 => $pengujian['jenis_kelamin_kucing'],
			'date'		 => date('d F Y', $pengujian['date_created']),
			'gejala1'	 => $pengujian['gejala1'],
			'gejala2'	 => $pengujian['gejala2'],
			'gejala3'	 => $pengujian['gejala3'],
			'gejala4'	 => $pengujian['gejala4'],
			'gejala5'	 => $pengujian['gejala5'],
			'gejala6'	 => $pengujian['gejala6'],
			'gejala7'	 => $pengujian['gejala7'],
			'gejala8'	 => $pengujian['gejala8'],
			'gejala9'	 => $pengujian['gejala9'],
			'gejala10'	 => $pengujian['gejala10'],
			'gejala11'	 => $pengujian['gejala11'],
			'gejala12'	 => $pengujian['gejala12'],
			'gejala13'	 => $pengujian['gejala13'],
			'gejala14'	 => $pengujian['gejala14'],
			'gejala15'	 => $pengujian['gejala15'],
			'gejala16'	 => $pengujian['gejala16'],
			'gejala17'	 => $pengujian['gejala17'],
			'gejala18'	 => $pengujian['gejala18'],
			'gejala19'	 => $pengujian['gejala19'],
			'gejala20'	 => $pengujian['gejala20'],
			'result'	 => $pengujian['result']
		];

	
	

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "datarecord.pdf";
    $this->pdf->load_view('pdf/datarecord', $data);
 }
	

}