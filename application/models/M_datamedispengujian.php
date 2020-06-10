<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_datamedispengujian extends CI_model
{


	public function hitungSemuaDataMedisPengujian()
	{

		return $this->db->get('tb_pengujian')->num_rows();

	}

	//---------------------------------------------------------//
	
	public function tampilDataMedisPengujian($limit, $start, $keyword = null)
	{
		if($keyword){
			$this->db->like('nama', $keyword);
			$this->db->or_like('user_email', $keyword);
			$this->db->or_like('nama_kucing', $keyword);
			$this->db->or_like('jenis_kelamin_kucing', $keyword);
		}

		return $this->db->get('tb_pengujian', $limit, $start)->result_array();

	}

	//-------------------------------------------------------//


	public function deleteDataMedisPengujian($kode_pengujian)
	{
		$this->db->where('kode_pengujian', $kode_pengujian);
		$this->db->delete('tb_pengujian');
	}

	public function getDetailPengujianById($kode_pengujian)
	{
	
		return $this->db->get_where('tb_pengujian', ['kode_pengujian' => $kode_pengujian])->row_array();
	}


	

}