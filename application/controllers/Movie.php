<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movie extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
                $this->load->model('student');
        }

        public function Movies()
        {
            if ($this->session->userdata('studentName')) {
                $data['elements'] = directory_map('share/Movies', 1);
                $data['daddress'] = 'share/Movies';
                $data['heading'] = 'Movies';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }
}