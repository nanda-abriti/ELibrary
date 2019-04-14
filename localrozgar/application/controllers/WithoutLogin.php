<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Madminpanel', 'map');
		$this->base = "http://172.16.50.50/localrozgar/";
		// $this->load->model('student');
		// $this->load->model('faculty', 'f');
	}

	

	

}
