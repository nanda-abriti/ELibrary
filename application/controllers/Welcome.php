<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller { 

	public function __construct()
    {
        parent::__construct();
		$this->load->model('student');
		$this->load->model('madminpanel', 'map');
		$this->load->model('faculty', 'f');
		$this->base = "http://172.16.50.50/";
    }

	
	 
	public function index() //working for both
	{
		$data['sign_up'] = 'Please Sign Up Here';
		$data['departments'] = $this->student->showAllDepartment();
		$data['longNews'] = $this->map->showNewsLong();
		$data['shortNews'] = $this->map->showNewsShort();
		$this->load->view('home/header', $data);
		$this->load->view('home/welcome', $data);
		$this->load->view('home/footer', $data);
		//$this->load->view('welcome_message', $data);
	}

	public function about()
	{
		$data['sign_up'] = 'Please Sign Up Here';
		$data['departments'] = $this->student->showAllDepartment();
		$data['longNews'] = $this->map->showNewsLong();
		$data['shortNews'] = $this->map->showNewsShort();
		$this->load->view('home/header', $data);
		$this->load->view('home/about', $data);
		$this->load->view('home/footer', $data);
		//$this->load->view('home/about');
	}

	public function csignUp() //working for student
	{		
		$result = $this->student->msignUp();
		// print_r($result);
		if($result){
			echo "<script> alert('Signed up successfully!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "'; </script>";
		}
		else{
			echo "<script> alert('Oops! Could not sign up.'); </script>";
			echo "<script>window.location.href = '" . $this->base . "'; </script>";
		}
		
		

	}

	public function clogin() //working for both
	{
		$result = $this->student->mlogin();
        if($result){
        		
        		$this->session->set_userdata('uname', $result->cuserName);
        		$this->session->set_userdata('loginFlag', $result->nloginFlag);
        		$this->session->set_userdata('rollNo', $result->crollNo);
        		$this->session->set_userdata('studentName', $result->cstudentName);
    			$this->session->set_userdata('email', $result->cstudentEmail);
				$this->session->set_userdata('uType', $result->cuserType);
				$this->session->set_userdata('uid', $result->nuserTypeId);
				$this->session->set_userdata('lid', $result->lid);
				$this->session->set_userdata('sid', $result->sid);
				$this->session->set_userdata('deptid', $result->deptid);
				$this->session->set_userdata('deptabbr', $result->cabbreviation);
				//$data['students'] = $this->student->countUser();
				redirect('dashboard');
        }
        else
        {
			echo "<script> alert('Incorrect Username or Password!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "'; </script>";

        }
	}

	


	public function clogOut()
	{			
				$result = $this->student->mlogout();
				$this->session->sess_destroy();
				redirect('welcome');			
	}



	public function isLogin()
	{
		
	}
			

	
	

	
}
