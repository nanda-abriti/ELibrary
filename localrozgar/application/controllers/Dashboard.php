<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		// $this->load->model('madminpanel', 'map');
		// $this->load->model('student');
		// $this->load->model('faculty', 'f');
	}

	public function index()
	{
		echo '<h1>Na beta na</h1>';
	}

	
}
