<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

	//Method Default yang selalu diajalankan pada controller Auth yaitu FORM_VALIDATION
	public function __construct()
	{
			parent::__construct();
			$this->load->library('form_validation');
	}




// Class Untuk Login SiPAKING
public function index()
	{
		//agar setelah login tidak kembali ke auth atau masuk ke tampilan login
		if($this->session->userdata('email')){
			redirect('admin');
		}
		//Membuat rules agar semua field register terpenuhi
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		//Mengembalikan nilai jika login gagal
		if ($this->form_validation->run() == false){
		//desain web menampilkan header dan footer
		$data['title'] = 'SiPAKING Login';
		$this->load->view('templates/auth/auth_header', $data);
		$this->load->view('auth/login');
		$this->load->view('templates/auth/auth_footer');	
		}else{
			// Validasi Succes dan membuat method private _login
			$this->_login();
		}
		
	}

	//Method private _login
	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		//Query data yang ada di database sipaking denga table user
		$user = $this->db->get_where('user', ['email' => $email])->row_array();
		//cek data user
		if ($user){
			//jika user ada dan aktif
			if($user['is_active'] == 1){
				//cek password
				if(password_verify($password, $user['password'])){
					//Data session yang dibutuhkan email dan role_id yaitu admin SIPAKING
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					//simpan data kedalam session
					$this->session->set_userdata($data);
					redirect('admin');
					

				}else{
					//memasukkan data password salah
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
					redirect('auth');
				}
			}
		}else{
			//jika user tidak ada
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
			redirect('auth');
				}
	}





	public function logout()
	{
		//Menghilangkan data session email dan role id sehingga tidak bisa balik ke tampilan index kembali kalau sudah logout
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('auth');
	}

	public function blocked()
	{
		//fitur blocked
		$this->load->view('auth/blocked');
	}
}