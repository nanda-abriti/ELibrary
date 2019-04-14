<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class gitsstartup extends CI_Controller { 

	public function __construct()
    {
		parent::__construct();
		$this->load->model('mAdminpanel', 'map');
		$this->load->model('Startupsummit', 'startup');
		$this->base = "http://172.16.50.50/gitsstartup/showParticipants/";
		//$this->base = "http://172.16.50.50/";
    }

	public function showParticipants()
	{
		if (($this->map->logInStatus() == 1)  && (($this->session->userdata('uid') <= 3) || 
			($this->session->userdata('uid') == 6) || ($this->session->userdata('sid') == 305 ) || ($this->session->userdata('sid') == 221)
			|| ($this->session->userdata('sid') == 167)))
		{
			$data['participants'] = $this->startup->showAllParticipant();
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('startup/startup', $data);
			$this->load->view('basics/footer');
		}
		else
		{
			redirect('logout');
		}
	}

	public function addParticipant()
	{
		if (($this->map->logInStatus() == 1)  && (($this->session->userdata('uid') <= 3) || 
			($this->session->userdata('uid') == 6) || ($this->session->userdata('sid') == 305 ) || ($this->session->userdata('sid') == 221)
			|| ($this->session->userdata('sid') == 167)))
		{
			$result = $this->startup->addNewParticipant();
			if($result)
			{
				echo "<script> alert('Added successfully!'); </script>";
				echo "<script>window.location.href = '" . $this->base . "'; </script>";
			}
			else
			{
				echo "<script> alert('Not added.'); </script>";
				echo "<script>window.location.href = '" . $this->base . "'; </script>";
			}
		}
		else
		{
			redirect('logout');
		}
		
	}

	public function paymentStatusChange()
	{
		if (($this->map->logInStatus() == 1)  && (($this->session->userdata('uid') == 1) || ($this->session->userdata('sid') == 305 ) || ($this->session->userdata('sid') == 221)
			|| ($this->session->userdata('sid') == 167)))
		{
			$result = $this->startup->changePaymentStatus();
			if($result)
			{
				echo "<script> alert('Status Change'); </script>";
				echo "<script>window.location.href = '" . $this->base . "'; </script>";
			}
			else
			{
				echo "<script> alert('Status Not Change'); </script>";
				echo "<script>window.location.href = '" . $this->base . "'; </script>";
			}
		}
		else
		{
			redirect('logout');
		}
		
	}

	public function regStatusChange()
	{
		if (($this->map->logInStatus() == 1)  && (($this->session->userdata('uid') == 1) || 
			($this->session->userdata('uid') == 6) || ($this->session->userdata('sid') == 305 ) || ($this->session->userdata('sid') == 221)
			|| ($this->session->userdata('sid') == 167)))
		{
			$result = $this->startup->changeRegisterStatus();
			if($result)
			{
				echo "<script> alert('Status Change'); </script>";
				echo "<script>window.location.href = '" . $this->base . "'; </script>";
			}
			else
			{
				echo "<script> alert('Status Not Change'); </script>";
				echo "<script>window.location.href = '" . $this->base . "'; </script>";
			}
		}
		else
		{
			redirect('logout');
		}
		
	}

	public function deleteUser()
	{
		if (($this->map->logInStatus() == 1)  && (($this->session->userdata('uid') == 1) || ($this->session->userdata('uid') == 6)))
		{
			$result = $this->startup->deleteParticipant();
			if($result)
			{
				echo "<script> alert('Deleted Successfully'); </script>";
				echo "<script>window.location.href = '" . $this->base . "'; </script>";
			}
			else
			{
				echo "<script> alert('Not Deleted'); </script>";
				echo "<script>window.location.href = '" . $this->base . "'; </script>";
			}
		}
		else
		{
			redirect('logout');
		}
	}

	public function reportGen()
	{
		if (($this->map->logInStatus() == 1)  && (($this->session->userdata('uid') <= 3) || 
			($this->session->userdata('uid') == 6) || ($this->session->userdata('sid') == 305 ) || ($this->session->userdata('sid') == 221)
			|| ($this->session->userdata('sid') == 167)))
		{
			$data['countTotalParticipant'] = $this->startup->countTotalParticipant();
			$data['countTotalPaid'] = $this->startup->countTotalPaid();
			$data['countTotalUnPaid'] = $this->startup->countTotalUnPaid();
			$data['countTotalRegistered'] = $this->startup->countTotalRegistered();
			$data['countTotalUnRegistered'] = $this->startup->countTotalUnRegistered();
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('startup/report', $data);
			$this->load->view('basics/footer');
		}
		else
		{
			redirect('logout');
		}
	}

	
	
}
