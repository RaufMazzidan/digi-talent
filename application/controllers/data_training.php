<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_training extends CI_Controller {
  public function __construct()
		{
      parent::__construct();
      if (!$this->session->userdata('username')) {
        redirect('login','refresh');
      }
		}
	public function index()
	{
		$data['page']= "data-training";
		$data['page_label']= "Data Training";
		$this->load->view('view', $data);
	}
}
