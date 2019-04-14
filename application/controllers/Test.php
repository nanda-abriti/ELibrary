<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Startupsummit','sus');
    }

    public function test()
    {
        // $result = $this->sus->showAllParticipant();
        $result = $this->sus->countTotalUnRegistered();
        print_r($result);
    }











}
?>