<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class major extends CI_Model {

	public function get_major()
	{
		return $this->db->get('major')->result();
	}
}
