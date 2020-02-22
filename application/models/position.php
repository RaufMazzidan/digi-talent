<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class position extends CI_Model {

	public function get_position()
	{
		return $this->db->get('position')->result();
	}
}
