<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class add_talent extends CI_Controller {
  public function __construct()
		{
      parent::__construct();
      if (!$this->session->userdata('username')) {
        redirect('login','refresh');
      }
		}
	public function index()
	{
		$data['page']= "add-talent";
		$this->load->view('view', $data);
	}
	public function create()
	{
		$db_array = boolval($_POST['checkbox-db']) ? $_POST['checkbox-db'] : [];
		foreach ($db_array as $db) {
			$condition = $_POST['database'][$db];
			echo $condition;
		}

		$be_array = boolval($_POST['checkbox-be']) ? $_POST['checkbox-be'] : [];
		foreach ($be_array as $be) {
			$condition = $_POST['backend'][$be];
			echo $condition;
		}
	}
}
