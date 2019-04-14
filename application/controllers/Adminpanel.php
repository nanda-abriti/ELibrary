<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminpanel extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('madminpanel', 'map');
		$this->load->model('student');
		$this->load->model('faculty', 'f');
	}

	

	public function approvedStudentsView() //working
	{
		if(($this->session->userdata('uid') <= 3 || ($this->session->userdata('uid') == 6)) && $this->map->logInStatus()){
			$data['approves'] = $this->student->approvedStudentsDept();
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('settings/student/approved', $data);
			$this->load->view('basics/footer');
		}
		else{
			redirect('logout');
		}
	}


	public function unApprovedStudentsView() //working
	{
		if(($this->session->userdata('uid') <= 3 || ($this->session->userdata('uid') == 6)) && $this->map->logInStatus()){
			$data['unApproves'] = $this->student->unApprovedStudentsDept();
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('settings/student/unapproved', $data);
			$this->load->view('basics/footer');
		}
		else{
			redirect('logout');
		}
	}

	public function approvalOfStudent() //working
	{
		if(($this->session->userdata('uid') <= 3 || ($this->session->userdata('uid') == 6)) && $this->map->logInStatus()){
			$result = $this->student->approvalOfStudent();
			if ($result) {
			echo "<script> alert('Approved Successfully'); </script>";
			$this->unApprovedStudentsView();
			}
			else {
			echo "<script> alert('Not Approved'); </script>";
			$this->unApprovedStudentsView();
			}
		}
		else{
			redirect('logout');
		}
	}

	public function unApprovalOfStudent() //working
	{
		if(($this->session->userdata('uid') <= 3 || ($this->session->userdata('uid') == 6)) && $this->map->logInStatus()){
			$result = $this->student->unApprovalOfStudent();
			if ($result) {
				echo "<script> alert('Unapproved Successfully'); </script>";
				redirect('Adminpanel/approvedStudentsView');
			} else {
				echo "<script> alert('Not Unapproved Approved'); </script>";
				redirect('Adminpanel/approvedStudentsView');
			}
		}
		else{
			redirect('logout');
		}
	}

	public function studentDeleteUA() //working
	{
		if($this->session->userdata('uid') <= 2 && $this->map->logInStatus()){
			$result = $this->map->deleteStudent();
			if ($result) {
				echo "<script> alert('Student Deleted'); </script>";
				redirect('Adminpanel/unApprovedStudentsView');

			} else {
				redirect('Adminpanel/unApprovedStudentsView');
				echo "<script> alert('Student Not Deleted'); </script>";

			}
		}
		else{
			redirect('logout');
		}
	}

	public function studentDeleteA() //workin
	{
		if($this->session->userdata('uid') <= 2 && $this->map->logInStatus()){
			$result = $this->map->deleteStudent();
			if ($result) {
				echo "<script> alert('News Added'); </script>";
				redirect('Adminpanel/approvedStudentsView');

			} else {
				redirect('Adminpanel/approvedStudentsView');
				echo "<script> alert('News not Added'); </script>";

			}
		}
		else{
			redirect('logout');
		}
	}

	//News Portal


	// For Short News
    public function shortNewsView() //workin
    {
		if(($this->session->userdata('uid') <= 3|| ($this->session->userdata('uid') == 6)) && $this->map->logInStatus()){
			$data['shortNews'] = $this->map->showAllNewsShort();
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('settings/news/viewNews/shortNewsView', $data);
			$this->load->view('basics/footer');
		}
		else{
			redirect('logout');
		}
    }

    public function shortNewsAdd() //working
    {
		if(($this->session->userdata('uid') <= 3 || ($this->session->userdata('uid') == 6)) && $this->map->logInStatus()){
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('settings/news/addNews/shortNews');
			$this->load->view('basics/footer');
		}
		else{
			redirect('logout');
		}
	}

	public function shortNewsInsert() //working
	{
		if(($this->session->userdata('uid') <= 3 || ($this->session->userdata('uid') == 6)) && $this->map->logInStatus()){
			$result = $this->map->insertNewsShort();
			if ($result) {
				echo "<script> alert('News Added'); </script>";
				redirect('Adminpanel/shortNewsView');

			} else {
				redirect('Adminpanel/shortNewsView');
				echo "<script> alert('News not Added'); </script>";

			}
		}
		else{
			redirect('logout');
		}
	}

    public function shortNewsDelete() //working
    {
		if(($this->session->userdata('uid') <= 3 || ($this->session->userdata('uid') == 6)) && $this->map->logInStatus()){
			$result = $this->map->deleteNewsShort();
			if($result)
			{
				echo "<script> alert('News Deleted'); </script>";
				redirect('Adminpanel/shortNewsView');
				
			}
			else
			{
				redirect('Adminpanel/shortNewsView');
				echo "<script> alert('News not Deleted'); </script>";
				
			}
		}
		else{
			redirect('logout');
		}
    }

	// For Long News
    public function fullNewsView() //working
    {
		if(($this->session->userdata('uid') <= 3 || ($this->session->userdata('uid') == 6)) && $this->map->logInStatus()){
			$data['longNews'] = $this->map->showAllNewsLong();
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('settings/news/viewNews/fullNewsView', $data);
			$this->load->view('basics/footer');
		}
		else{
			redirect('logout');
		}
    }

    public function fullNewsAdd() //working
    {
		if(($this->session->userdata('uid') <= 3 || ($this->session->userdata('uid') == 6)) && $this->map->logInStatus()){
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('settings/news/addNews/fullNews');
			$this->load->view('basics/footer');
		}
		else{
			redirect('logout');
		}
	}

	public function fullNewsInsert() //working
	{
		if(($this->session->userdata('uid') <= 3 || ($this->session->userdata('uid') == 6)) && $this->map->logInStatus()){
			$result = $this->map->insertNewsLong();
			if ($result) {
				redirect('Adminpanel/fullNewsView');
				echo "<script> alert('News Inserted'); </script>";
			} else {
				redirect('Adminpanel/fullNewsView');
				echo "<script> alert('News not Inserted'); </script>";
			}
		}
		else{
			redirect('logout');
		}
	}

    public function fullNewsDelete() //working
    {
		if(($this->session->userdata('uid') <= 3 || ($this->session->userdata('uid') == 6)) && $this->map->logInStatus()){
			$result = $this->map->deleteNewsLong();
			if($result)
			{
				redirect('Adminpanel/fullNewsView');
				echo "<script> alert('News Deleted'); </script>";
			}
			else
			{
				redirect('Adminpanel/fullNewsView');
				echo "<script> alert('News not Deleted'); </script>";
			}
		}
		else{
			redirect('logout');
		}
	}
	

	public function loggedInUsers() //working
	{
		if (($this->session->userdata('uid') <= 2 || ($this->session->userdata('uid') == 6)) && $this->map->logInStatus()) {
			$data['students'] = $this->map->loggedInUsersDept();
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('settings/student/studentLogin', $data);
			$this->load->view('basics/footer');
		} else {
			redirect('logout');
		}
	}


	public function loggedInFaculty() //working
	{
		if ($this->session->userdata('uid') <= 2 && $this->map->logInStatus()) {
			$data['faculties'] = $this->map->loggedInFacultyDept();
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('settings/faculty/facultyLogin', $data);
			$this->load->view('basics/footer');
		} else {
			redirect('logout');
		}
	}


	public function logOutUsers() //working
	{
		if (($this->session->userdata('uid') <= 2 || ($this->session->userdata('uid') == 6)) && $this->map->logInStatus()) {
			$result = $this->map->logOutUser();
			if($result)
			{
				$this->loggedInUsers();
				echo "<script> alert('log out successfully'); </script>";
			}
			else {
				$this->loggedInUsers();
				echo "<script> alert('Error in log out'); </script>";
			}
		} else {
			redirect('logout');
		}
	}

	public function logOutFaculty() //working
	{
		if ($this->session->userdata('uid') <= 2 && $this->map->logInStatus()) {
			$result = $this->map->logOutFaculty();
			if($result)
			{
				$this->loggedInFaculty();
				echo "<script> alert('log out successfully'); </script>";
			}
			else {
				$this->loggedInFaculty();
				echo "<script> alert('Error in log out'); </script>";
			}
		} else {
			redirect('logout');
		}
	}

	

	public function facultyView() //working
	{
		if ($this->session->userdata('uid') <= 2 && $this->map->logInStatus()) {
		$data['faculties'] = $this->f->showAllFaculty();
		// $data['logInTimes'] = $this->map->lastLoginTime();
		$this->load->view('basics/header');
		$this->load->view('basics/main');
		$this->load->view('settings/faculty/facultyView', $data);
		$this->load->view('basics/footer');
		}
		else
		{
			redirect('logout');
		}
	}


	public function facultyAdd() //working
	{
		if ($this->session->userdata('uid') <= 2 && $this->map->logInStatus()) {
		$this->load->view('basics/header');
		$this->load->view('basics/main');
		$this->load->view('settings/faculty/facultyAdd');
		$this->load->view('basics/footer');
	}
	else
	{
		redirect('logout');
	}
	}

	public function facultyAddDb() //working
	{
		$result = $this->f->facultySignUp();
			if ($result) {
				redirect('Adminpanel/facultyView');
				echo "<script> alert('Faculty Added Successfully!'); </script>";
			} else {
				redirect('Adminpanel/facultyView');
				echo "<script> alert('Faculty could not be Added'); </script>";
			}
	}

	public function facultyDelete() //working
	{
		$result = $this->map->deleteFaculty();
			if ($result) {
				redirect('Adminpanel/facultyView');
				echo "<script> alert('Faculty Deleted Successfully!'); </script>";
			} else {
				redirect('Adminpanel/facultyView');
				echo "<script> alert('Faculty could not be Deleted'); </script>";
			}
	}


}