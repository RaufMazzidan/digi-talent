<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
  public function __construct()
		{
      parent::__construct();
      if (!$this->session->userdata('username')) {
        redirect('login','refresh');
      }
		}
	public function index()
	{
		$data['page']= "dashboard";
		$data['page_label']= "DASHBOARD";
		$this->load->view('view', $data);
	}
}
