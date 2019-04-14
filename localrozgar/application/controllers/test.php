<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class test extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Madminpanel', 'map');
		$this->base = "http://172.16.50.50/localrozgar/";
		// $this->load->model('student');
		// $this->load->model('faculty', 'f');
    }
    
    public function contactCheck()
    {
        $result = $this->map->checkContact();
        $msg['success'] = false;
        if($result == true){
                $msg['success'] = true;
        }
        echo json_encode($msg);        
    }

    public function testForm()
    {
        $val = $_POST['submit'];
        $wlareaid = $_POST['area'];
        $wlstateid = $_POST['state'];
        $wlcityid = $_POST['city'];
        // if ($this->session->userdata('wlstateid')) {
        //     $this->session['wlstateid'] =  $wlstateid;
        //     $this->session['wlcityid'] = $wlcityid;
        //     $this->session['wlareaid'] = $wlareaid;
        // }
        // else
        // {
        // $this->session->set_userdata('wlstateid', $wlstateid);
        // $this->session->set_userdata('wlcityid', $wlcityid);
        // $this->session->set_userdata('wlareaid', $wlareaid);
        // }
        if($val == 'Want to Hire')
        {
            $this->load->view('basics/header');
            $this->load->view('main/nav');
            $this->load->view('main/hire'); 
            $this->load->view('basics/footer'); 
            // echo  $wlareaid ;
            // echo $wlstateid;
            // echo $wlcityid;          
        }
        else{
            $this->load->view('basics/header');
            $this->load->view('main/nav');
            $this->load->view('main/work');
            $this->load->view('basics/footer');
        }
    }
}
?>