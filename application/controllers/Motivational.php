<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Motivational extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
                $this->load->model('student');
                $this->load->model('madminpanel', 'map');
        }

        public function richDadPoorDad()
        {
            if ($this->map->logInStatus()) {
                $data['elements'] = directory_map('share/Motivational/richDadPoorDad', 1);
                $data['daddress'] = 'share/Motivational/richDadPoorDad';
                $data['heading'] = 'Rich Dad Poor Dad';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                redirect('logout');
            }
        }

        public function rajyogMeditation()
        {
            if ($this->map->logInStatus()) {
                $data['elements'] = directory_map('share/Motivational/rajyogMeditation', 1);
                $data['daddress'] = 'share/Motivational/rajyogMeditation';
                $data['heading'] = 'Rajyog Meditation';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                redirect('logout');
            }
        }
}