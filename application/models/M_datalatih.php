<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datalatih extends CI_model
{


	public function getDataByKategori($kategori)
	{
		return $this->db->get_where('tb_datalatih', ['kategori' => $kategori])->result_array();
	}

	//---------------------------------------------------------//
	public function editDatalatih($kode_datalatih)
	{
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

		$this->db->where('kode_datalatih', $kode_datalatih);
		$this->db->update('tb_datalatih', $data);
	}

	//---------------------------------------------------------//
	public function deleteDataLatih($kode_datalatih)
	{
		$this->db->where('kode_datalatih', $kode_datalatih);
		$this->db->delete('tb_datalatih');
	}



}