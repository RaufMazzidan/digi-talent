<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Model {

	public function login()
	{
    $username = $this->input->post('email');
		$password = $this->input->post('password');

		return true;

		// return $this->db->where('username', $username)->where('password', $password)->get('admin');
	}
}
