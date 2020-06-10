<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	//Method Default yang selalu diajalankan pada user access
	public function __construct()
	{
		parent::__construct();
		//load model M_dataadmin
		$this->load->model('M_dataadmin');
		//menggunakan fungsi helper untuk login atau belum
		is_logged_in();
	}

	public function index()
	{
		//mengambil data dari table user yang ada di Auth Private function _login
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		//------------------------------------------------------------------------------------------------------//


	
		$data['datalatih'] = $this->db->query('SELECT COUNT(kode_datalatih) as total FROM tb_datalatih')->row_array();
		$data['diagnosa'] = $this->db->query('SELECT COUNT(kode_pengujian) as total FROM tb_pengujian')->row_array();
		
		$data['pie'] = $this->M_dataadmin->getDataPie();
		$data['bars'] = $this->M_dataadmin->getDataBars();
		$data['line'] = $this->db->get('tb_statistik')->result_array();
		$data['spline'] = $this->db->get('tb_statistik')->result_array();
		//-----------------------------------------------------------------------------------------------------//
	

		//desain web menampilkan header dan footer
		$data['title'] = 'SiPAKING - Dashboard';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}

}