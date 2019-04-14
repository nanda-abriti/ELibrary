<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academic extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
                $this->load->model('student');
                $this->load->model('mAdminpanel', 'map');
        }




        public function CE_assign() 
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 6) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/CE/Assignments', 1);
                $data['daddress'] = 'share/Academics/CE/Assignments';
                $data['heading'] = 'CE Assignments';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function CSE_assign()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 1) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/CSE/Assignments', 1);
                $data['daddress'] = 'share/Academics/CSE/Assignments';
                $data['heading'] = 'CSE Assignments';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function AE_assign()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 5) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/AE/Assignments', 1);
                $data['daddress'] = 'share/Academics/AE/Assignments';
                $data['heading'] = 'AE Assignments';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function ECE_assign()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 2) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/ECE/Assignments', 1);
                $data['daddress'] = 'share/Academics/ECE/Assignments';
                $data['heading'] = 'ECE Assignments';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function EE_assign()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 3) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/EE/Assignments', 1);
                $data['daddress'] = 'share/Academics/EE/Assignments';
                $data['heading'] = 'EE Assignments';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function ME_assign()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 4) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/ME/Assignments', 1);
                $data['daddress'] = 'share/Academics/ME/Assignments';
                $data['heading'] = 'ME Assignments';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        
        public function CE_NK()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 6) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/CE/NK', 1);
                $data['daddress'] = 'share/Academics/CE/NK';
                $data['heading'] = 'NK for CE';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function CSE_NK()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 1) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/CSE/NK', 1);
                $data['daddress'] = 'share/Academics/CSE/NK';
                $data['heading'] = 'NK for CSE';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function ECE_NK()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 2) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/ECE/NK', 1);
                $data['daddress'] = 'share/Academics/ECE/NK';
                $data['heading'] = 'NK for ECE';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function EE_NK()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 3) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/EE/NK', 1);
                $data['daddress'] = 'share/Academics/EE/NK';
                $data['heading'] = 'NK for EE';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function AE_NK()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 5) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/AE/NK', 1);
                $data['daddress'] = 'share/Academics/AE/NK';
                $data['heading'] = 'NK for AE';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function ME_NK()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 4) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/ME/NK', 1);
                $data['daddress'] = 'share/Academics/ME/NK';
                $data['heading'] = 'NK for ME';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }


        public function CE_Notes()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 6) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/CE/Notes', 1);
                $data['daddress'] = 'share/Academics/CE/Notes';
                $data['heading'] = 'Notes for CE';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function CSE_Notes()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 1) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/CSE/Notes', 1);
                $data['daddress'] = 'share/Academics/CSE/Notes';
                $data['heading'] = 'Notes for CSE';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function ECE_Notes()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 2) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/ECE/Notes', 1);
                $data['daddress'] = 'share/Academics/ECE/Notes';
                $data['heading'] = 'Notes for ECE';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function AE_Notes()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 5) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/AE/Notes', 1);
                $data['daddress'] = 'share/Academics/AE/Notes';
                $data['heading'] = 'Notes for AE';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function EE_Notes()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 3) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/EE/Notes', 1);
                $data['daddress'] = 'share/Academics/EE/Notes';
                $data['heading'] = 'Notes for EE';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function ME_Notes()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 4) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/ME/Notes', 1);
                $data['daddress'] = 'share/Academics/ME/Notes';
                $data['heading'] = 'Notes for ME';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

         public function CSE_Exam()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 1) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/CSE/Exam', 1);
                $data['daddress'] = 'share/Academics/CSE/Exam';
                $data['heading'] = 'Exam Papers and Information';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function ECE_Exam()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 2) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/ECE/Exam', 1);
                $data['daddress'] = 'share/Academics/ECE/Exam';
                $data['heading'] = 'Exam Papers and Information';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function EE_Exam()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 3) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/EE/Exam', 1);
                $data['daddress'] = 'share/Academics/EE/Exam';
                $data['heading'] = 'Exam Papers and Information';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function ME_Exam()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 4) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/ME/Exam', 1);
                $data['daddress'] = 'share/Academics/ME/Exam';
                $data['heading'] = 'Exam Papers and Information';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function AE_Exam()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 5) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/AE/Exam', 1);
                $data['daddress'] = 'share/Academics/AE/Exam';
                $data['heading'] = 'Exam Papers and Information';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function CE_Exam()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 6) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/CE/Exam', 1);
                $data['daddress'] = 'share/Academics/CE/Exam';
                $data['heading'] = 'Exam Papers and Information';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function MBA_Exam()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 8) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/MBA/Exam', 1);
                $data['daddress'] = 'share/Academics/MBA/Exam';
                $data['heading'] = 'Exam Papers and Information';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }

        public function MCA_Exam()
        {
            if (($this->map->logInStatus()) && (($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 7) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6))) {
                $data['elements'] = directory_map('share/Academics/MCA/Exam', 1);
                $data['daddress'] = 'share/Academics/MCA/Exam';
                $data['heading'] = 'Exam Papers and Information';
                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('tutorial/tutorial', $data);
                $this->load->view('basics/footer');
            } else {
                $data['sign_up'] = 'Please Sign Up Here';
                $this->load->view('welcome_message', $data);
            }
        }


}