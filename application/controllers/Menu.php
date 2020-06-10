<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
	//Method Default yang selalu diajalankan pada user access
	public function __construct()
	{
		parent::__construct();
		//menggunakan fungsi helper untuk login atau belum
		is_logged_in();
	}


	public function registration()
	{

		//Membuat rules agar semua field register terpenuhi
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',[
			'is_unique' => 'This email has already registered!'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[5]|matches[password2]',[
			'matches' => 'Password Dont Macthes!',
			'min_length' => 'Password Too Short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|matches[password1]');

		//Mengembalikan nilai jika register gagal
		if($this->form_validation->run()== false){
		//desain web menampilkan header dan footer
		$data['title'] = 'Registration';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/registration', $data);
		$this->load->view('templates/footer');
		}else{
		// Validasi Registrasi Sukses
					$data = [
						'name' => htmlspecialchars($this->input->post('name', true)),
						'email' => htmlspecialchars($this->input->post('email', true)),
						'image' => 'default.jpg',
						'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
						'role_id' => 1,
						'is_active' => 1,
						'date_created' => time()
					];

					$this->db->insert('user', $data);
					//pesan berhasil
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! account has been created. </div>');
					redirect('admin/index');

			}
	}


	public function MyProfile()
	{
		//mengambil data dari table user yang ada di Auth Private function _login
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


		//desain web menampilkan header dan footer
		$data['title'] = 'My Profile';
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/myprofile', $data);
		$this->load->view('templates/footer');
	}


	public function editprofile()
	{
		//mengambil data dari table user yang ada di Auth Private function _login
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		//desain web menampilkan header dan footer
		$data['title'] = 'Edit Profile';


		$this->form_validation->set_rules('name', 'Full Name', 'required|trim');

		if($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/editprofile', $data);
		$this->load->view('templates/footer');
		}else{
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			// cek jika ada gambar yang akan di upload
			$upload_image = $_FILES['image']['name'];
			if($upload_image){

				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']     = '2048';
				$config['upload_path'] = './assets2/img/profile/';

				$this->load->library('upload', $config);

				if($this->upload->do_upload('image')){
					//upload gambar baru
					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				}else{
					echo $this->upload->upload_errors();
				}
			}

			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  			Your profile has been updated! </div>');
			redirect('menu/myprofile');
		}
	}


	public function changePassword()
	{
		$data ['title'] = 'Change Password';
		$data['user'] = $this->db->get_where('user', ['email'=> $this->session->userdata('email')])->row_array();


		//membuat folder yang bernama user yang terdapat file index
		// nampilin templates

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[5]|matches[new_password2]');
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[5]|matches[new_password1]');

		if($this->form_validation->run() == false){
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('admin/changepassword', $data);
		$this->load->view('templates/footer');

		}else{
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if(!password_verify($current_password, $data['user']['password'])){
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  						Wrong Current Password!</div>');
						redirect('menu/changepassword');
			} else {
				if($current_password == $new_password){
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
  						New Passwrod cannot be the same as current password!</div>');
						redirect('menu/changepassword');
				}else {
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
  						New password changed!</div>');
						redirect('menu/changepassword');
				}
			}

		}
	
	}


}