 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            // $this->load->library('session');
            // $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
            $this->load->view('upload_form');
        }

        public function do_upload()
        {
            $path = $_SESSION['path'];
            $choose = preg_split("#/#", $path);
            $sharetype = $choose[count($choose) - 4]; //personal or sharing
            $transition = $choose[count($choose) - 3]; //factostu, etc
            
            $name = $this->session->userdata('studentName');
            $name = str_replace(" ", "-", $name);
            $branch = $this->session->userdata('deptabbr');

            if(($transition == "factostu") || ($transition == "fachodshare") || ($transition == "factohod") || ($this->session->userdata('uid') == 1))
            {
                $file = $_FILES["userfile"]['name'];
                $filename = pathinfo($file)['filename'];
                $new_name = $filename . "_" . $name;
                $ext = pathinfo($file)['extension'];
                $_FILES["userfile"]['name'] = $new_name . "." . $ext;
            }

            elseif($transition == "stutofac")
            {
                if($this->session->userdata('uid') == 5)
                {
                    $rollno = $this->session->userdata('rollNo');
                    $file = $_FILES["userfile"]['name'];
                    $filename = pathinfo($file)['filename'];
                    $new_name = $rollno . "_" . $filename;
                    $ext = pathinfo($file)['extension'];
                    $_FILES["userfile"]['name'] = $new_name . "." . $ext;
                }  
            }


            $config['upload_path']          = $path;
            $config['allowed_types']        = 'mp4|gif|jpg|png|jpeg|pdf|mp3|ppt|odp|txt|docx|doc|xlsx|c|cpp|java|py|html|css|js|sql|zip';
            $config['max_size']             = 10000000000000000;
            $config['max_width']            = 1024000;
            $config['max_height']           = 768000;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
                $msg =  "not uploaded";
                echo "<script>alert(" . $msg . ");</script>";
            }
            else
            {
                $msg = "The file has been uploaded.";
                echo "<script>alert(" . $msg . ");</script>";
            }
            $redirectto = $_SESSION['redirectto'];
            redirect($redirectto);
        }

        
}
?>