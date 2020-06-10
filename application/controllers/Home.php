<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		
		$data['title'] = 'Beranda - SiPAKING';
		$this->load->view('templates/home/home_header', $data);
		$this->load->view('pages/home');
		$this->load->view('templates/home/home_footer');
	
	}

	public function memory()
	{
		
		$data['title'] = 'Beranda - SiPAKING';
		$this->load->view('templates/home/home_header', $data);
		$this->load->view('pages/memory');
		$this->load->view('templates/home/home_footer');
	
	}

}