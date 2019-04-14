<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Madminpanel', 'map');
        $this->base = "http://172.16.50.50/localrozgar/";
	}

	public function index()
	{
		$data['states'] = $this->map->showAllState();
		$this->load->view('basics/header');
		$this->load->view('main/nav');
		$this->load->view('main/welcome', $data);
		$this->load->view('main/selection');
		$this->load->view('basics/footer');
	}



	public function adminlogin()
	{
		$this->load->view('basics/header');
		$this->load->view('main/admin');
		$this->load->view('basics/footer');
	}

	public function login()
	{
		$result = $this->map->login();
        if($result){
        		$this->session->set_userdata('username', $result->username);
        		$this->session->set_userdata('userid', $result->userid);
        		$this->session->set_userdata('name', $result->name);
        		$this->session->set_userdata('email', $result->email);
        		$this->session->set_userdata('contact', $result->contact);
        		$this->session->set_userdata('profile', $result->profile);
        		$this->session->set_userdata('usertypeid', $result->usertypeid);
        		$this->session->set_userdata('usertype', $result->usertype);
        		$this->session->set_userdata('statename', $result->statename);
        		$this->session->set_userdata('cityname', $result->cityname);
        		$this->session->set_userdata('areaname', $result->areaname);
        		$this->session->set_userdata('stateid', $result->stateid);
        		$this->session->set_userdata('cityid', $result->cityid);
        		$this->session->set_userdata('areaid', $result->areaid);
				$this->session->set_userdata('lid', $result->lid);
				// $this->session->set_userdata('loginflag', $result->loginflag);
        		//$this->session->set_userdata('username', $result->name);
   				redirect('dash');
        }
        else
        {
			echo "<script> alert('Incorrect Username or Password!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "'; </script>";

        }
	}

	public function adminlogindetails()
	{
		$result = $this->map->adminlogin();
        if($result){
        		$this->session->set_userdata('username', $result->username);
        		$this->session->set_userdata('userid', $result->userid);
        		$this->session->set_userdata('name', $result->name);
        		$this->session->set_userdata('email', $result->email);
        		$this->session->set_userdata('contact', $result->contact);
        		$this->session->set_userdata('profile', $result->profile);
        		$this->session->set_userdata('usertypeid', $result->usertypeid);
        		$this->session->set_userdata('usertype', $result->usertype);
        		$this->session->set_userdata('statename', $result->statename);
        		$this->session->set_userdata('cityname', $result->cityname);
        		$this->session->set_userdata('areaname', $result->areaname);
        		$this->session->set_userdata('stateid', $result->stateid);
        		$this->session->set_userdata('cityid', $result->cityid);
        		$this->session->set_userdata('areaid', $result->areaid);
        		$this->session->set_userdata('lid', $result->lid);
        		//$this->session->set_userdata('username', $result->name);
   				redirect('dash');
        }
        else
        {
			echo "<script> alert('Incorrect Username or Password!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "'; </script>";

        }
	}

	public function signOut()
	{
		$this->map->adminlogout();
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function showCity() 
	{
		$result['cities'] = $this->map->showCity();
		if($result)
		{
			foreach($result['cities']  as $city){
		 		$showdata .= '<option value="'.$city->cityid.'">'.$city->cityname.'</option> ';
			}
			echo $showdata;
		}
		else{
			echo '<option value="">Select State</option> ';
		}
	}

	public function showArea()
	{
		$result['areas'] = $this->map->showArea();
		if($result)
		{
			foreach($result['areas']  as $area){
		 		$showdata .= '<option value="'.$area->areaid.'">'.$area->areaname.'</option> ';
			}
			echo $showdata;
		}
		else{
			echo '<option value="">Select City</option>';
		}
	}

	public function test()
	{
		$this->map->login();
	}
}
