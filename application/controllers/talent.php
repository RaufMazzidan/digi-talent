<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class talent extends CI_Controller {
  public function __construct()
		{
      parent::__construct();
      if (!$this->session->userdata('username')) {
        redirect('login','refresh');
      }
		}
	public function index()
	{
		$data['page']= "talent-management";
		$this->load->view('view', $data);
	}
}
