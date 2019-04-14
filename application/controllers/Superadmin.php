<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Superadmin extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
				$this->load->model('student');
				$this->load->model('madminpanel', 'map');
				$this->load->model('faculty', 'f');
		}

	public function userTypeView() //working
	{
		if($this->session->userdata('uid') == 1 && $this->map->logInStatus())
		{
			$data['approved'] = $this->map->allApproved();
			$data['userTypes'] = $this->map->showUserTypes();
			$data['departments'] = $this->student->showAllDepartment();
 			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('admin/privileges/userType', $data);
			$this->load->view('basics/footer');
		}
		else
		{
			redirect('logout');
		}
	}

	public function updateUserDepartment() //working
	{
		if($this->session->userdata('uid') == 1  && $this->map->logInStatus())
		{
			$result = $this->map->editDept();
			if($result)
			{
				redirect('Superadmin/userTypeView');
				echo "<script> alert('Priviliges Successfully Updated'); </script>";
			}
			else
			{
				redirect('Superadmin/userTypeView');
				echo "<script> alert('Priviliges Successfully Updated'); </script>";
			}
		}
		else
		{
			redirect('logout');
		}
	}

	public function updateUserType() //working
	{
		if($this->session->userdata('uid') == 1  && $this->map->logInStatus())
		{
			$result = $this->map->editPrivileges();
			if($result)
			{
				redirect('Superadmin/userTypeView');
				echo "<script> alert('Priviliges Successfully Updated'); </script>";
			}
			else
			{
				redirect('Superadmin/userTypeView');
				echo "<script> alert('Priviliges Successfully Updated'); </script>";
			}
		}
		else
		{
			redirect('logout');
		}
	}

	public function loggedInUsersAdmin() //working
	{
		if ($this->session->userdata('uid') <= 2 && $this->map->logInStatus()) {
			$data['students'] = $this->map->allLoggedIn();
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('admin/loginReport/allLogin', $data);
			$this->load->view('basics/footer');
		} else {
			redirect('logout');
		}
	}


	public function logOutUsers() //working
	{
		if ($this->session->userdata('uid') <= 2 && $this->map->logInStatus()) {
			$result = $this->map->logOutUser();
			if($result)
			{
				redirect('Superadmin/loggedInUsersAdmin');
				echo "<script> alert('log out successfully'); </script>";
			}
			else {
				redirect('Superadmin/loggedInUsersAdmin');
				echo "<script> alert('Error in log out'); </script>";
			}
		} else {
			redirect('logout');
		}
	}

	public function loginReportStudent() //working
	{
		$data['noOfUsers'] = $this->map->todayUsers();
		$data['logInTimes'] = $this->map->lastLoginTime();
		$this->load->view('basics/header');
		$this->load->view('basics/main');
		$this->load->view('admin/loginReport/student', $data);
		$this->load->view('basics/footer');
	}

	public function addUserForm() //working
	{
		$data['userTypes'] = $this->map->showUserTypes();
		$data['departments'] = $this->student->showAllDepartment();
		$this->load->view('basics/header');
		$this->load->view('basics/main');
		$this->load->view('admin/addUsers', $data);
		$this->load->view('basics/footer');
	}

	public function addUser()
	{
		$result = $this->map->addNewUser();
			if($result)
			{
				redirect('Superadmin/approvedStudentsViewAdmin');
				echo "<script> alert('log out successfully'); </script>";
			}
			else {
				redirect('Superadmin/approvedStudentsViewAdmin');
				echo "<script> alert('Error in log out'); </script>";
			}
	}

	public function approvedStudentsViewAdmin() //working
	{
		if($this->session->userdata('uid') <= 3 && $this->map->logInStatus()){
			$data['approves'] = $this->map->allApproved();
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('settings/student/approvedAll', $data);
			$this->load->view('basics/footer');
		}
		else{
			redirect('welcome');
		}
	}

	public function unApprovedStudentsViewAdmin() //working
	{
		if($this->session->userdata('uid') <= 3 && $this->map->logInStatus()){
			$data['unApproves'] = $this->map->allUnApproved();;
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('settings/student/unapprovedAll', $data);
			$this->load->view('basics/footer');
		}
		else{
			redirect('welcome');
		}
	}

	public function changePassword()
	{
		$result = $this->map->changePasswordByAdmin();
			if($result){
				redirect('Superadmin/approvedStudentsViewAdmin');
				echo "<script> alert('Password Changed Successfully'); </script>";
			}
			else{
				redirect('Superadmin/approvedStudentsViewAdmin');
				echo "<script> alert('Password Could not be Changed'); </script>";
			}
	}

}