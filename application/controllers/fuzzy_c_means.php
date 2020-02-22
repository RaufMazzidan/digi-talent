<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fuzzy_c_means extends CI_Controller {
  public function __construct()
		{
      parent::__construct();
      if (!$this->session->userdata('username')) {
        redirect('login','refresh');
      }
		}
	public function index()
	{
		$data['page']= "fuzzy-c-means";
		$data['page_label']= "FUZZY C-MEANS";
		$this->load->view('view', $data);
	}
}
