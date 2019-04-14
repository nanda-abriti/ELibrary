<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sidebar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('student');
    }


    public function viewPersonal(){
        $this->load->view('basics/header');
        $this->load->view('basics/main');
        $this->load->view('sideNav/personal/personalView');
        $this->load->view('basics/footer');
    }

    public function addPersonal(){
        $this->load->view('basics/header');
        $this->load->view('basics/main');
        $this->load->view('sideNav/personal/personalAdd');
        $this->load->view('basics/footer');
    }


}