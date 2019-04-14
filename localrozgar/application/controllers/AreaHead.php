<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AreaHead extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Employee', 'emp');
		// $this->load->model('student');
		// $this->load->model('faculty', 'f');
	}

	// public function index()
	// {
	// 	echo '<h1>Na beta na</h1>';
	// }

	public function showApprovedEmployee()
	{
		$data['employees'] = $this->emp->showApprovedEmployeeToAreaHead();
		print_r($data);
		//print_r($this->session->all_userdata());s
		// $this->load->view('basics/header');
		// $this->load->view('basics/main');
		// $this->load->view('area/employee/approve', $data);
		// $this->load->view('basics/footer');
	}
	public function showUnApprovedEmployee()
	{
		$data['employees'] = $this->emp->showUnApprovedEmployeeToAreaHead();
		// $this->load->view('basics/header');
		// $this->load->view('basics/main');
		// $this->load->view('area/employee/approve', $data);
		// $this->load->view('basics/footer');
	}

	public function showApprovedWork()
	{
		$data['employees'] = $this->emp->showUnApprovedEmployeeToAreaHead();
		// $this->load->view('basics/header');
		// $this->load->view('basics/main');
		// $this->load->view('area/employee/approve', $data);
		// $this->load->view('basics/footer');
	}

	public function showUnApprovedWork()
	{
		$data['employees'] = $this->emp->showUnApprovedEmployeeToAreaHead();
		// $this->load->view('basics/header');
		// $this->load->view('basics/main');
		// $this->load->view('area/employee/approve', $data);
		// $this->load->view('basics/footer');
	}
}