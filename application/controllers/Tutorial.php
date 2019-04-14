<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutorial extends CI_Controller {
    public function __construct()
    {
            parent::__construct();
			$this->load->model('student');
			$this->load->model('mAdminpanel', 'map');
    }

    public function Aptitude()
	{
		if($this->map->logInStatus())
		{
			$data['elements'] = directory_map('share/Tutorials/Aptitude', 1);
			$data['daddress'] = 'share/Tutorials/Aptitude';
			$data['heading'] = 'Aptitude';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		}
		else
		{
			redirect('logout');
		}
	}

	public function Gate_CSE()
	{
		if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 1) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)))
		{
			$data['elements'] = directory_map('share/Tutorials/GATE/CSE', 1);
			$data['daddress'] = 'share/Tutorials/GATE/CSE';
			$data['heading'] = 'Tutorial Of GATE for Computer Science And Engineering';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
    }
    
    public function Gate_CE()
	{
		if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 6) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)))
		{
			$data['elements'] = directory_map('share/Tutorials/GATE/CE', 1);
			$data['daddress'] = 'share/Tutorials/GATE/CE';
			$data['heading'] = 'Tutorial Of GATE for Civil Engineering';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		}
		else 
		{
			redirect('logout');
		}
    }
    
    public function Gate_ME()
	{
		if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 4) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)))
		{
			$data['elements'] = directory_map('share/Tutorials/GATE/ME', 1);
			$data['daddress'] = 'share/Tutorials/GATE/ME';
			$data['heading'] = 'Tutorial Of GATE for Mechanical Engineering';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
    }
    
    public function Gate_ECE()
	{
		if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 2) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)))
		{
			$data['elements'] = directory_map('share/Tutorials/GATE/ECE', 1);
			$data['daddress'] = 'share/Tutorials/GATE/ECE';
			$data['heading'] = 'Tutorial Of GATE for Electronics and Communication Engineering';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
	}
	
	public function Gate_AE()
	{
		if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 5) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)))
		{
			$data['elements'] = directory_map('share/Tutorials/GATE/AE', 1);
			$data['daddress'] = 'share/Tutorials/GATE/AE';
			$data['heading'] = 'Tutorial Of GATE for Automobile Engineering';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
    }
    
    public function Gate_EE()
	{
		if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 3) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)))
		{
			$data['elements'] = directory_map('share/Tutorials/GATE/EE', 1);
			$data['daddress'] = 'share/Tutorials/GATE/EE';
			$data['heading'] = 'Tutorial Of GATE for Electrical Engineering';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
	}

	public function Gate_AllBranches()
	{
		if ($this->map->logInStatus())
		{
			$data['elements'] = directory_map('share/Tutorials/GATE/AllBranches', 1);
			$data['daddress'] = 'share/Tutorials/GATE/AllBranches';
			$data['heading'] = 'Content for all branches';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
	}

	public function Languages_C()
	{
		if ($this->map->logInStatus()) 
		{
			$data['elements'] = directory_map('share/Tutorials/Languages/C', 1);
			$data['daddress'] = 'share/Tutorials/Languages/C';
			$data['heading'] = 'Tutorial Of C';
			$this->load->view('basics/header'); 
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
    }
    
    public function Languages_CPP()
	{
		if ($this->map->logInStatus()) 
		{
			$data['elements'] = directory_map('share/Tutorials/Languages/CPP', 1);
			$data['daddress'] = 'share/Tutorials/Languages/CPP';
			$data['heading'] = 'Tutorial Of CPP';
			$this->load->view('basics/header'); 
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
    }
    
    public function Languages_Java()
	{
		if ($this->map->logInStatus()) 
		{
			$data['elements'] = directory_map('share/Tutorials/Languages/JAva', 1);
			$data['daddress'] = 'share/Tutorials/Languages/Java';
			$data['heading'] = 'Tutorial Of Java';
			$this->load->view('basics/header'); 
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
    }
    
    public function Languages_PHP()
	{
		if ($this->map->logInStatus()) 
		{
			$data['elements'] = directory_map('share/Tutorials/Languages/PHP', 1);
			$data['daddress'] = 'share/Tutorials/Languages/PHP';
			$data['heading'] = 'Tutorial Of PHP';
			$this->load->view('basics/header'); 
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
    }
    
    public function Languages_Python()
	{
		if ($this->map->logInStatus()) 
		{
			$data['elements'] = directory_map('share/Tutorials/Languages/Python', 1);
			$data['daddress'] = 'share/Tutorials/Languages/Python';
			$data['heading'] = 'Tutorial Of Python';
			$this->load->view('basics/header'); 
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
	}

	public function Languages_DBMS()
	{
		if ($this->map->logInStatus()) 
		{
			$data['elements'] = directory_map('share/Tutorials/Languages/DBMS', 1);
			$data['daddress'] = 'share/Tutorials/Languages/DBMS';
			$data['heading'] = 'Tutorial Of DBMS';
			$this->load->view('basics/header'); 
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
	}

	public function Technology_Algorithms()
	{
		if ($this->map->logInStatus()) 
		{
			$data['elements'] = directory_map('share/Tutorials/Technology/Algorithms', 1);
			$data['daddress'] = 'share/Tutorials/Technology/Algorithms';
			$data['heading'] = 'Algorithms';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			$redirect('logout');
		}
    }
    
    public function Technology_CodeIgniter()
	{
		if ($this->map->logInStatus()) 
		{
			$data['elements'] = directory_map('share/Tutorials/Technology/CodeIgniter', 1);
			$data['daddress'] = 'share/Tutorials/Technology/CodeIgniter';
			$data['heading'] = 'CodeIgniter';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
    }
    
    public function Technology_DataMining()
	{
		if ($this->map->logInStatus()) 
		{
			$data['elements'] = directory_map('share/Tutorials/Technology/DataMining', 1);
			$data['daddress'] = 'share/Tutorials/Technology/DataMining';
			$data['heading'] = 'Data Mining';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
    }
    
    public function Technology_ImageProcessing()
	{
		if ($this->map->logInStatus()) 
		{
			$data['elements'] = directory_map('share/Tutorials/Technology/ImageProcessing', 1);
			$data['daddress'] = 'share/Tutorials/Technology/ImageProcessing';
			$data['heading'] = 'Image Processing';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
    }
    
    public function Technology_Linux()
	{
		if ($this->map->logInStatus()) 
		{
			$data['elements'] = directory_map('share/Tutorials/Technology/Linux', 1);
			$data['daddress'] = 'share/Tutorials/Technology/Linux';
			$data['heading'] = 'Linux';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
    }
    
    public function Technology_MachineLearning()
	{
		if ($this->map->logInStatus()) 
		{
			$data['elements'] = directory_map('share/Tutorials/Technology/MachineLearning', 1);
			$data['daddress'] = 'share/Tutorials/Technology/MachineLearning';
			$data['heading'] = 'Machine Learning';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
	}

	public function Technology_ArtificialIntelligence()
	{
		if ($this->map->logInStatus()) 
		{
			$data['elements'] = directory_map('share/Tutorials/Technology/ArtificialIntelligence', 1);
			$data['daddress'] = 'share/Tutorials/Technology/ArtificialIntelligence';
			$data['heading'] = 'Artificial Intelligence';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
			// $data['sign_up'] = 'Please Sign Up Here';
			// $this->load->view('welcome_message', $data);
		}
	}

	public function Technology_Laravel()
	{
		if ($this->map->logInStatus()) 
		{
			$data['elements'] = directory_map('share/Tutorials/Technology/Laravel', 1);
			$data['daddress'] = 'share/Tutorials/Technology/Laravel';
			$data['heading'] = 'Laravel';
			$this->load->view('basics/header');
			$this->load->view('basics/main');
			$this->load->view('tutorial/tutorial', $data);
			$this->load->view('basics/footer');
		} 
		else 
		{
			redirect('logout');
		}
	}

}