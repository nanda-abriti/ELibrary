<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function filter($data_element, $name)
{
    foreach($data_element as $data)
    {
        $fileinfo = pathinfo($data);
        $filename = $fileinfo['filename'];
        $var = preg_split("#_#", $filename);
        $takename = end($var);
        $takename = preg_replace('/[0-9]+/', '', $takename);
        if($takename != $name)
        {
            $data_element = array_diff($data_element, array($data));
        }
    }
    return $data_element;
}

function filter_rollno($data_element, $roll)
{
    foreach($data_element as $data)
    {
        $fileinfo = pathinfo($data);
        $filename = $fileinfo['filename'];
        $var = preg_split("#_#", $filename);
        $takeroll = $var[0];
        if($takeroll != $roll)
        {
            $data_element = array_diff($data_element, array($data));
        }
    }
    return $data_element;
}

class File extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('faculty');
        }

        public function personal()
        {
            $path = "share/Files/Personal/";
            $data["heading"] = "Personal Files";
            $this->session->set_userdata('redirectto', 'File/personal');
            if(($this->session->userdata('uid') == 2) || ($this->session->userdata('uid') == 3)) //hod & faculty
            {
                $user = "Faculty_HOD";
                $name = $this->session->userdata('studentName');
            }
            elseif($this->session->userdata('uid') == 5) //student
            {
                $user = "Student";
                $name = $this->session->userdata('rollNo');
            }
            else
            {
                redirect("logout");
            }
            $path = $path . $user . "/" . $name . "/";
            // echo $path;
            if (!is_dir($path)) {
                mkdir($path);
            }

            $this->session->set_userdata('path', $path);
            $data['elements'] = directory_map($path, 1);
            $data['otherelements'] = "";
            $data['daddress'] = $path;
            // print_r($data['elements']);

            $this->load->view('basics/header');
            $this->load->view('basics/main');
            $this->load->view('fileupload/filesud', $data);
            $this->load->view('basics/footer');
        }

        public function factohod()
        {
            $path = "share/Files/Sharing/factohod/";
            $branch = $_SESSION['deptabbr'];
            $path = $path . $branch . "/";
            $this->session->set_userdata('redirectto', 'File/factohod');
            $this->session->set_userdata('path', $path);

            if($this->session->userdata('uid') == 2) //hod
            {
                $data["heading"] = "Shared by Faculty";
                $data['elements'] = directory_map($path, 1);
                $data['daddress'] = $path;

                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('fileupload/filesd', $data);
                $this->load->view('basics/footer');
            }
            elseif($this->session->userdata('uid') == 3) //faculty
            {
                $data["heading"] = "Share to HOD";
                $name = $this->session->userdata('studentName');
                $name = str_replace(" ", "-", $name);
                $data['elements'] = directory_map($path, 1);
                $data['daddress'] = $path;
                
                $data['elements'] = filter($data['elements'], $name);
                $data['otherelements'] = "";

                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('fileupload/filesud', $data);
                $this->load->view('basics/footer');
            }
            else
            {
                redirect("logout");
            }
        }

        public function fachodshare()
        {
            $path = "share/Files/Sharing/fachodshare/";
            $branch = $_SESSION['deptabbr'];
            $path = $path . $branch . "/";
            $this->session->set_userdata('redirectto', 'File/fachodshare');
            $this->session->set_userdata('path', $path);
            $data["heading"] = "All Faculty Share";

            if($this->session->userdata('uid') == 2) //hod
            {
                $data['elements'] = directory_map($path, 1);
                $data['otherelements'] = "";
                $data['daddress'] = $path;

                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('fileupload/filesud', $data);
                $this->load->view('basics/footer');
            }
            elseif($this->session->userdata('uid') == 3) //faculty
            {
                $data["heading"] = "All Faculty Share";
                $name = $this->session->userdata('studentName');
                $name = str_replace(" ", "-", $name);
                $data['allelements'] = directory_map($path, 1);
                $data['daddress'] = $path;
                
                $data['elements'] = filter($data['allelements'], $name); //sent by faculty
                $data['otherelements'] = array_diff($data['allelements'], $data['elements']); //sent by other faculty

                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('fileupload/filesud', $data);
                $this->load->view('basics/footer');
            }
            else
            {
                redirect("logout");
            }
        }

        public function factostu()
        {
            $path = "share/Files/Sharing/factostu/";
            $this->session->set_userdata('redirectto', 'File/factostu');
            if($this->session->userdata('uid') == 2) //hod
            {
                $branch = $_SESSION['deptabbr'];
                $path = $path . $branch . "/";
                $data["heading"] = "Share to Students";
                
                $this->session->set_userdata('path', $path);
                $data['elements'] = directory_map($path, 1);
                $data['otherelements'] = "";
                $data['daddress'] = $path;
                // print_r($data['elements']);

                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('fileupload/filesud', $data);
                $this->load->view('basics/footer');
            }
            elseif($this->session->userdata('uid') == 3) //faculty
            {
                if($this->input->post('branch'))
                {
                    $branch = $this->input->post('branch');
                    $path = $path . $branch . "/";
                }
                else
                {
                    $path = $_SESSION['path'];
                }
                
                $data["heading"] = "Share to Students";
                
                $this->session->set_userdata('path', $path);
                $data['elements'] = directory_map($path, 1);
                $data['otherelements'] = "";
                $data['daddress'] = $path;
                // print_r($data['elements']);

                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('fileupload/filesud', $data);
                $this->load->view('basics/footer');
            }
            elseif($this->session->userdata('uid') == 5) //student
            {
                $branch = $_SESSION['deptabbr'];
                $path = $path . $branch . "/";
                $data["heading"] = "Shared by Faculty";
                
                $this->session->set_userdata('path', $path);
                $data['elements'] = directory_map($path, 1);
                $data['otherelements'] = "";
                $data['daddress'] = $path;
                // print_r($data['elements']);

                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('fileupload/files', $data);
                $this->load->view('basics/footer');
            }
            else
            {
                redirect("logout");
            }
            
        }

        public function stutofac_facnames()
        {
            $data['faculty'] = $this->faculty->facultyAccToDept();
            $data['heading'] = "";
            $data['elements'] = "";
            $this->load->view('basics/header');
            $this->load->view('basics/main');
            $this->load->view('fileupload/filesudfacLeft', $data);
            $this->load->view('fileupload/filesudfacRight');
            $this->load->view('basics/footer');
        }

        public function stutofac()
        {
            $path = "share/Files/Sharing/stutofac/"; 
            $this->session->set_userdata('redirectto', 'File/stutofac');
            if(($this->session->userdata('uid') == 2) || ($this->session->userdata('uid') == 3)) //hod & faculty
            {
                $data["heading"] = "Shared by Students";
                $name = $this->session->userdata('studentName');
                $name = str_replace(" ", "-", $name);
                $path = $path . $name . "/";
                if (!is_dir($path)) {
                    mkdir($path);
                }
                $this->session->set_userdata('path', $path);
                $data['elements'] = directory_map($path, 1);
                // $data['otherelements'] = "";
                $data['daddress'] = $path;
                // print_r($data['elements']);

                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('fileupload/filesd', $data);
                $this->load->view('basics/footer');
            }
            elseif($this->session->userdata('uid') == 5) //student
            {
                $rollno = $this->session->userdata('rollNo');
                if($this->input->post('facultyname'))
                {
                    $facultyname = $this->input->post('facultyname');
                    $facultyname = str_replace(" ", "-", $facultyname);
                    $path = $path . $facultyname . "/";
                }
                else
                {
                    $path = $_SESSION['path'];
                }
                $data["heading"] = "Share to Faculty";
                
                if (!is_dir($path)) {
                    mkdir($path);
                }
                $this->session->set_userdata('path', $path);
                $data['elements'] = directory_map($path, 1);
                $data['elements'] = filter_rollno($data['elements'], $rollno);
                $data['otherelements'] = "";
                $data['daddress'] = $path;
                // print_r($data['elements']);

                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('fileupload/filesud', $data);
                $this->load->view('basics/footer');
            }
            else
            {
                redirect("logout");
            }
        }

        public function admin()
        {
            $path = "share/Files/Admin/";
            $data["heading"] = "Admin Files";
            $this->session->set_userdata('redirectto', 'File/admin');
            if($this->session->userdata('uid') == 1) //admin
            {
                $this->session->set_userdata('path', $path);
                $data['elements'] = directory_map($path, 1);
                $data['otherelements'] = "";
                $data['daddress'] = $path;
                // print_r($data['elements']);

                $this->load->view('basics/header');
                $this->load->view('basics/main');
                $this->load->view('fileupload/filesud', $data);
                $this->load->view('basics/footer');
            }
            else
            {
                redirect("logout");
            }
        }

        public function delete_file()
        {
            $filename = $this->input->post('del');
            $path = $_SESSION['path'];
            $redirectto = $_SESSION['redirectto'];
            $filepath = $path . $filename;
            // echo $filepath;
            if(is_readable($filepath) && unlink($filepath))
            {
                echo "<script> alert('The file has successfully been deleted!'); </script>";
            }
            else
            {
                echo "<script> alert('The file was not found or not readable & could not be deleted!'); </script>"; 
            }
            redirect($redirectto);
        }

}
?>
