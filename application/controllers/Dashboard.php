<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
				$this->load->model('student');
				$this->load->model('madminpanel', 'map');
		}

    public function dashboardView()  //working
	{
		if($this->map->logInStatus()){
			$data['users'] = $this->student->countUser();
			$data['students'] = $this->student->countStudents();
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('main/dash', $data);
			$this->load->view('basics/footer');
		}
		else
		{
			redirect('logout');
		}
	}


	public function changePasswordView() //working
	{
		if($this->map->logInStatus()){
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('icons/changePassword');
			$this->load->view('basics/footer');
		}
		else{
			redirect('logout');
		}		
	}

	public function changePasswordSubmit() //working
	{
		if($this->map->logInStatus()){
			$result = $this->student->changePassword();
			if($result){
				$this->dashboardView();
				echo "<script> alert('Password Changed Successfully'); </script>";
			}
			else{
				$this->dashboardView();
				echo "<script> alert('Password Could not be Changed'); </script>";
			}
		}
		else {
			redirect('logout');
		}		
	}

}
