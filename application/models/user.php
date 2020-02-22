<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Model {

	public function login()
	{
    $username = $this->input->post('email');
		$password = md5($this->input->post('password'));

		return $this->db->where('username', $username)->where('password', $password)->get('user');
	}
}
