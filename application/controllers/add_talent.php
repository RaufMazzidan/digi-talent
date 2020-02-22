<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class add_talent extends CI_Controller {
  public function __construct()
		{
      parent::__construct();
      $this->load->model('position');
      $this->load->model('major');
      if (!$this->session->userdata('username')) {
        redirect('login','refresh');
      }
		}
	public function index()
	{
    $data['page']= "add-talent";
    $data['page_label']= "INPUT TALENT";
    $data['position'] = $this->position->get_position();
    $data['major'] = $this->major->get_major();
		$this->load->view('view', $data);
	}
	public function create()
	{
    echo json_encode($_POST);
		$db_array = isset($_POST['checkbox-db']) ? $_POST['checkbox-db'] : [];
		foreach ($db_array as $db) {
			$condition = $_POST['database'][$db];
			echo $condition;
		}

		$be_array = isset($_POST['checkbox-be']) ? $_POST['checkbox-be'] : [];
		foreach ($be_array as $be) {
			$condition = $_POST['backend'][$be];
			echo $condition;
		}
	}
}
