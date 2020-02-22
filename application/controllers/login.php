<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('user');
	}
	public function index() {
		if ($this->session->userdata('username')) {
		  redirect('dashboard','refresh');
		}
		$data['page']= "login";
		$this->load->view('login', $data);
	}

	public function verify() {
		if ($this->user->login()->num_rows() > 0) {
			$data =$this->user->login()->row();
			$array = array(
				'login' => TRUE ,
				'username' => $data->username,
			);
			$this->session->set_userdata( $array );
			redirect('dashboard','refresh');
		}
		else{
			echo"gagal";
			$this->session->set_flashdata('pesan', 'Username Atau Password Salah');
			redirect('admin/signin','refresh');
		}
	}
	public function logout()
		{
			$this->session->sess_destroy();
			redirect('login','refresh');
		}
}
