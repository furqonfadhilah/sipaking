<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dataadmin extends CI_model
{

public function getDataPie()
	{
		return $this->db->query('SELECT COUNT(`tb_pengujian`.`kode_pengujian`) AS total, `tb_penyakit`.`nama_penyakit` FROM `tb_pengujian` LEFT JOIN `tb_penyakit` ON `tb_penyakit`.`kode_penyakit` = `tb_pengujian`.`result` GROUP BY `tb_pengujian`.`result`')->result_array();
	}

public function getDataBars()
	{
		$this->db->select('COUNT(kode_pengujian) AS total, date_created');
		$this->db->from('tb_pengujian');
		$this->db->group_by('date_created');
		$this->db->limit('7');
		$this->db->order_by('date_created', 'DESC');
		return $this->db->get()->result_array();
	}	


	//-------------------------------------------------------//
	





}