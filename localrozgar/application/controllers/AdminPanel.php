<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPanel extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('Madminpanel', 'map');
		$this->base = "http://172.16.50.50/localrozgar/";
		// $this->load->model('student');
		// $this->load->model('faculty', 'f');
	}

	public function show()
	{
		$this->load->view('basics/header');
		$this->load->view('basics/main');
		$this->load->view('dash/dash');
		$this->load->view('basics/footer');
	}


	public function stateheadshow()
	{
		if($this->session->userdata('usertypeid') <= 3){
			$data['stateheads'] = $this->map->showAllStateHead();
			$data['states'] = $this->map->showAllState();
			if($data)
			{
				$this->load->view('basics/header');
				$this->load->view('basics/main');
				$this->load->view('users/stateHead', $data);
				$this->load->view('main/selection');
				$this->load->view('basics/footer');
			}
			else
			{
				redirect('dash');
			}
		}
		else{
			redirect('logout');
		}
	}

	public function addstateHead()
	{
		$result = $this->map->newStateHead();
		if($result)
		{
			echo "<script> alert('StateHead has been successfully added!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "statehead" . "'; </script>";
		}
		else{
			echo "<script> alert('Oops! StateHead could not be added'); </script>";
			echo "<script>window.location.href = '" . $this->base . "statehead" . "'; </script>";
		}
	}

	public function delstateHead()
	{
		$result = $this->map->deleteUser();
		if($result)
		{
			echo "<script> alert('State Head has been successfully deleted!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "statehead" . "'; </script>";
		}
		else{
			echo "<script> alert('Oops! State Head could not be deleted'); </script>";
			echo "<script>window.location.href = '" . $this->base . "statehead" . "'; </script>";
		}
	}

	public function cityheadshow()
	{
		if($this->session->userdata('usertypeid') <= 4){
			$data['cityheads'] = $this->map->showAllCityHead();
			if($this->session->userdata('usertypeid') == 4)
			{
				$data['cityheads'] = $this->map->showCityHeadToStateHead();
				$data['cities'] = $this->map->showCityStateHead();
			}
			$data['states'] = $this->map->showAllState();
			if($data)
			{
				$this->load->view('basics/header');
				$this->load->view('basics/main');
				$this->load->view('users/cityHead', $data);
				$this->load->view('main/selection');
				$this->load->view('basics/footer');
			}
			else
			{
				redirect('dash');
			}
		}
		else{
			redirect('logout');
		}
	}

	public function addcityHead()
	{
		$result = $this->map->newCityHead();
		if($result)
		{
			echo "<script> alert('City Head has been successfully added!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "cityhead" . "'; </script>";
		}
		else{
			echo "<script> alert('Oops! City Head could not be added'); </script>";
			echo "<script>window.location.href = '" . $this->base . "cityhead" . "'; </script>";
		}
	}

	public function delcityHead()
	{
		$result = $this->map->deleteUser();
		if($result)
		{
			echo "<script> alert('City Head has been successfully deleted!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "cityhead" . "'; </script>";
		}
		else{
			echo "<script> alert('Oops! City Head could not be deleted'); </script>";
			echo "<script>window.location.href = '" . $this->base . "cityhead" . "'; </script>";
		}
	}

	
	public function areaheadshow()
	{
		if($this->session->userdata('usertypeid') <= 5){
			$data['areaheads'] = $this->map->showAllAreaHead();
			if($this->session->userdata('usertypeid') == 4)
			{
				$data['areaheads'] = $this->map->showAreaHeadToStateHead();
				$data['cities'] = $this->map->showCityStateHead();
			}
			if($this->session->userdata('usertypeid') == 5)
			{
				$data['areaheads'] = $this->map->showAreaHeadToCityHead();
				$data['areas'] = $this->map->showAreaCityHead();
			}
			$data['states'] = $this->map->showAllState();
			if($data)
			{
				$this->load->view('basics/header');
				$this->load->view('basics/main');
				$this->load->view('users/areaHead', $data);
				$this->load->view('main/selection');
				$this->load->view('basics/footer');
			}
			else
			{
				redirect('dash');
			}
		}
		else{
			redirect('logout');
		}
	}

	public function addareaHead()
	{
		$result = $this->map->newAreaHead();
		if($result)
		{
			echo "<script> alert('AreaHead has been successfully added!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "areahead" . "'; </script>";
		}
		else{
			echo "<script> alert('Oops! AreaHead could not be added'); </script>";
			echo "<script>window.location.href = '" . $this->base . "areahead" . "'; </script>";
		}
	}

	public function delareaHead()
	{
		$result = $this->map->deleteUser();
		if($result)
		{
			echo "<script> alert('Area Head has been successfully deleted!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "areahead" . "'; </script>";
		}
		else{
			echo "<script> alert('Oops! Area Head could not be deleted'); </script>";
			echo "<script>window.location.href = '" . $this->base . "areahead" . "'; </script>";
		}
	}

	public function placestateshow()
	{
		if($this->session->userdata('usertypeid') <= 3){
			$data['states'] = $this->map->showAllState();
			// print_r($data['states']);
			if($data)
			{
				$this->load->view('basics/header');
				$this->load->view('basics/main');
				$this->load->view('places/state', $data);
				$this->load->view('basics/footer');
			}
			else
			{
				redirect('dash');
			}
		}
		else{
			redirect('logout');
		}
	}

	public function addState()
	{
		$result = $this->map->newState();
		if($result)
		{
			echo "<script> alert('State has been successfully added!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "stateList" . "'; </script>";
		}
		else{
			echo "<script> alert('Oops! State could not be added'); </script>";
			echo "<script>window.location.href = '" . $this->base . "stateList" . "'; </script>";
		}
	}

	public function delState()
	{
		// $id = $this->input->post('stateid');
		// echo $id;
		$result = $this->map->deleteState();
		if($result)
		{
			echo "<script> alert('State has been successfully deleted!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "stateList" . "'; </script>";
		}
		else{
			echo "<script> alert('Oops! State could not be deleted'); </script>";
			echo "<script>window.location.href = '" . $this->base . "stateList" . "'; </script>";
		}
	}

	public function placecityshow()
	{
		if($this->session->userdata('usertypeid') <= 4){
			$data['states'] = $this->map->showAllState();
			$data['cities'] = $this->map->showAllCity();
			if($this->session->userdata('usertypeid') == 4)
			{
				$data['cities'] = $this->map->showCityStateHead();
			}
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('places/city', $data);
			$this->load->view('basics/footer');
		}
		else{
			redirect('logout');
		}
	}

	public function addCity()
	{
		$result = $this->map->newCity();
		if($result)
		{
			echo "<script> alert('City has been successfully added!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "cityList" . "'; </script>";
		}
		else{
			echo "<script> alert('Oops! City could not be added'); </script>";
			echo "<script>window.location.href = '" . $this->base . "cityList" . "'; </script>";
		}
	}

	public function delCity()
	{
		$result = $this->map->deleteCity();
		if($result)
		{
			echo "<script> alert('City has been successfully deleted!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "cityList" . "'; </script>";
		}
		else{
			echo "<script> alert('Oops! City could not be deleted'); </script>";
			echo "<script>window.location.href = '" . $this->base . "cityList" . "'; </script>";
		}
	}

	public function placeareashow()
	{
		if($this->session->userdata('usertypeid') <= 5){
			$data['states'] = $this->map->showAllState();
			$data['areas'] = $this->map->showAllArea();
			if($this->session->userdata('usertypeid') == 4)
			{
				$data['areas'] = $this->map->showAreaStateHead();
				$data['cities'] = $this->map->showCityStateHead();
			}
			if($this->session->userdata('usertypeid') == 5)
			{
				$data['areas'] = $this->map->showAreaCityHead();
			}
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('places/area',$data);
			$this->load->view('main/selection');
			$this->load->view('basics/footer');
		}
		else{
			redirect('logout');
		}
	}

	public function addArea()
	{
		$result = $this->map->newArea();
		if($result)
		{
			echo "<script> alert('Area has been successfully added!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "areaList" . "'; </script>";
		}
		else{
			echo "<script> alert('Oops! Area could not be added'); </script>";
			echo "<script>window.location.href = '" . $this->base . "areaList" . "'; </script>";
		}
	}

	public function delArea()
	{
		$result = $this->map->deleteArea();
		if($result)
		{
			echo "<script> alert('Area has been successfully deleted!'); </script>";
			echo "<script>window.location.href = '" . $this->base . "areaList" . "'; </script>";
		}
		else{
			echo "<script> alert('Oops! Area could not be deleted'); </script>";
			echo "<script>window.location.href = '" . $this->base . "areaList" . "'; </script>";
		}
	}

	public function unapproveemployeeshow()
	{
		$this->load->view('basics/header');
		$this->load->view('basics/main');
		$this->load->view('employee/unapprove');
		$this->load->view('basics/footer');
	}

	public function approveemployeeshow()
	{
		$this->load->view('basics/header');
		$this->load->view('basics/main');
		$this->load->view('employee/approve');
		$this->load->view('basics/footer');
	}

	public function unapprovecontractorshow()
	{
		$this->load->view('basics/header');
		$this->load->view('basics/main');
		$this->load->view('contractor/unapprove');
		$this->load->view('basics/footer');
	}

	public function approvecontractorshow()
	{
		$this->load->view('basics/header');
		$this->load->view('basics/main');
		$this->load->view('contractor/approve');
		$this->load->view('basics/footer');
	}

	public function unapproveworkshow()
	{
		$this->load->view('basics/header');
		$this->load->view('basics/main');
		$this->load->view('work/unapprove');
		$this->load->view('basics/footer');
	}

	public function approveworkshow()
	{
		$this->load->view('basics/header');
		$this->load->view('basics/main');
		$this->load->view('work/approve');
		$this->load->view('basics/footer');
	}

	

}
