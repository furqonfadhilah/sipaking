<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Info Penyakit';
		$this->load->view('templates/home/home_header', $data);
		$this->load->view('pages/Penyakit');
		$this->load->view('templates/home/home_footer');
	
	}

}