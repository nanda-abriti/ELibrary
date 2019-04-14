<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class student extends CI_Model
{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }    

        public function msignUp()            //final
        {
            $deptid = $this->input->post('dept');
            $rollno = $this->input->post('sRollNo');
            $sName = $this->input->post('sName');
            $sEmail = $this->input->post('sEmail');
            $password = md5($this->input->post('password'));
            $cpassword = $this->input->post('cpassword');
            $field = array
                    (
                        'crollNo' => $rollno,
                        'cstudentName' => $sName,
                        'cstudentEmail' => $sEmail,
                        'nuserTypeId' => 5,
                        'ndepartmentId' => $deptid
                    );
            $query = $this->db->insert('student',$field);
            if($this->db->affected_rows() > 0)
            {
                $lgn = array
                        (
                        'cuserName' => $rollno,
                        'cpassword' => $password
                        );
                $lgnquery = $this->db->insert('login',$lgn);
                if($this->db->affected_rows() > 0)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;     
            }
        }

        public function mlogin()    //final
        {
            $userName = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $array = array('login.cuserName' => $userName, 'login.cpassword' => $password,
                           'login.nloginFlag' => 0, 'login.status' => 1);
            $this->db->where($array);
            $getlogin = $this->db->get('login');
            if($getlogin->num_rows() > 0)
            {
                $loginflag = $getlogin->row()->nloginFlag;
                if($loginflag == 0)
                {
                    date_default_timezone_set('Asia/Kolkata');
                    $dt = new DateTime();
                    $date = $dt->format("Y-m-d H:i:s"); 
                    $field = array
                                (
                                    'nloginFlag' => 1,
                                    // 'cloginTime'=> date("Y-m-d h:i:s")
                                    'cloginTime'=> $date                           
                                    // 'cloginTime'=> date_default_timezone_set($query->row()->timezone)
                                );
                    $this->db->where($array);                     
                    $query = $this->db->update('login',$field);
                    if($query)
                    {
                        $array = array('login.cuserName' => $userName, 'login.cpassword' => $password, 'login.nloginFlag' => 1, 'login.status' => 1);
                        $this->db->select('login.id as lid, login.cuserName, login.cpassword, login.nloginFlag, login.status, student.id as sid, student.crollNo, 
                                            student.cstudentName, student.cstudentEmail, student.nuserTypeId, usertype.cuserType, 
                                            userType.nloginAttempt, student.ndepartmentId, department.id as deptid, 
                                            department.cdepartmentName, department.cabbreviation');
                        $this->db->from('student');
                        $this->db->join('login','login.cuserName = student.crollNo');
                        $this->db->join('usertype','userType.id = student.nuserTypeId');
                        $this->db->join('department','department.id = student.ndepartmentId');                        
                        $this->db->where($array);
                        $result = $this->db->get();
                        return $result->row();     
                    }
                    else
                    {
                        return false;
                    }
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        
        public function mlogout()           //final
        {
            $lid = $this->session->userdata('lid');
            $field = array
                    (
                        'nloginFlag' => 0
                    );
            $this->db->where('id',$lid);             
            $query =$this->db->update('login',$field);
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function changePassword()            //final
        {
            $lid = $this->session->userdata('lid');
            $oPassword = md5($this->input->post('old'));
            $nPAssword = md5($this->input->post('new'));
            $array = array
                    (
                        'id' => $lid,
                        'cpassword' => $oPassword
                    );
            $this->db->where($array);
            $query = $this->db->get('login');
            if($query->num_rows() > 0)
            {
                $field = array
                        (
                            'cpassword' => $nPAssword
                        );
                $this->db->where('id',$lid);
                $this->db->update('login',$field);
                if($this->db->affected_rows() > 0)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }

        public function mlogoutAll()
        {
            $field = array
                    (
                        'nloginFlag' => 0
                    );
            $query =$this->db->update('login',$field);
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    
        public function unApprovedStudents()        //final 
        {
             $array = array
                    (
                        'login.status'=> 0,
                        'student.nuserTypeId' => 5
                    );
            $this->db->select('login.id as lid, login.cuserName, login.cpassword, login.nloginFlag, login.status, student.id, student.crollNo, 
                                    student.cstudentName, student.cstudentEmail, student.nuserTypeId, userType.cuserType, 
                                    userType.nloginAttempt, student.ndepartmentId, department.id as deptid, 
                                    department.cdepartmentName, department.cabbreviation');
            $this->db->from('student');
            $this->db->join('login','login.cuserName = student.crollNo');
            $this->db->join('userType','userType.id = student.nuserTypeId');
            $this->db->join('department','department.id = student.ndepartmentId');
            // $this->db->where('login.status',1);
            $this->db->where($array);
            $this->db->order_by('student.createdAt','asc');
            $query = $this->db->get();
            if($query->num_rows() > 0)
            {
                return $query->result();
            }       
            else
            {
                return false;
            }
        }

        public function unApprovedStudentsDept()         //final
        {
            $deptid = $this->session->userdata('deptid');
            $array = array
                    (
                        'login.status'=> 0,
                        'student.nuserTypeId' => 5,
                        'department.id' => $deptid
                    );
            $this->db->select('login.id as lid, login.cuserName, login.cpassword, login.nloginFlag, login.status, student.id, student.crollNo, 
                                    student.cstudentName, student.cstudentEmail, student.nuserTypeId, userType.cuserType, 
                                    userType.nloginAttempt, student.ndepartmentId, department.id as deptid, department.cdepartmentName, 
                                    department.cabbreviation');
            $this->db->from('student');
            $this->db->join('login','login.cuserName = student.crollNo');
            $this->db->join('userType','userType.id = student.nuserTypeId');
            $this->db->join('department','department.id = student.ndepartmentId');
            $this->db->where($array);
            $this->db->order_by('student.createdAt','asc');
            $query = $this->db->get();
            if($query->num_rows() > 0)
            {
                return $query->result();
            }       
            else
            {
                return false;
            }
        }

        public function approvedStudents()          //final 
        {
            $array = array
                    (
                        'login.status'=> 1,
                        'student.nuserTypeId' => 5
                    );
            $this->db->select('login.id as lid, login.cuserName, login.cpassword, login.nloginFlag, login.status, student.id, student.crollNo, 
                                    student.cstudentName, student.cstudentEmail, student.nuserTypeId, userType.cuserType, 
                                    userType.nloginAttempt, student.ndepartmentId, department.id as deptid, 
                                    department.cdepartmentName, department.cabbreviation');
            $this->db->from('student');
            $this->db->join('login','login.cuserName = student.crollNo');
            $this->db->join('userType','userType.id = student.nuserTypeId');
            $this->db->join('department','department.id = student.ndepartmentId');
            // $this->db->where('login.status',1);
            $this->db->where($array);
            $this->db->order_by('student.createdAt','asc');
            $query = $this->db->get();
            if($query->num_rows() > 0)
            {
                return $query->result();
            }       
            else
            {
                return false;
            }
        }

        public function approvedStudentsDept()         //final
        {
            $deptid = $this->session->userdata('deptid');
            $array = array
                    (
                        'login.status'=> 1,
                        'student.nuserTypeId' => 5,
                        'department.id' => $deptid
                    );
            $this->db->select('login.id as lid, login.cuserName, login.cpassword, login.nloginFlag, login.status, student.id, student.crollNo, 
                                    student.cstudentName, student.cstudentEmail, student.nuserTypeId, userType.cuserType, 
                                    userType.nloginAttempt, student.ndepartmentId, department.id as deptid, department.cdepartmentName, 
                                    department.cabbreviation');
            $this->db->from('student');
            $this->db->join('login','login.cuserName = student.crollNo');
            $this->db->join('userType','userType.id = student.nuserTypeId');
            $this->db->join('department','department.id = student.ndepartmentId');
            $this->db->where($array);
            $this->db->order_by('student.createdAt','asc');
            $query = $this->db->get();
            if($query->num_rows() > 0)
            {
                return $query->result();
            }       
            else
            {
                return false;
            }
        }

        public function approvalOfStudent()         //final
        {
            $lid = $this->input->post('LID');
            $by = $this->session->userdata('lid');
            $data = array
            (
                'status' => 1
            );
            
            $this->db->where('id',$lid);        
            $uquery = $this->db->update('login',$data);
            if($uquery)
            {    
                $field = array
                        (
                            'operation' => 'Approved',
                            'updatedWhom' => $lid,
                            'updatedBy' => $by,                  
                        );
                $this->db->insert('loginUpdateOperations',$field);
                if($this->db->affected_rows() > 0)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }

        public function unApprovalOfStudent()           //final
        {
            $lid = $this->input->post('Lid');
            $by = $this->session->userdata('lid');
            $data = array
            (
                'status' => 0
            );
            
            $this->db->where('id',$lid);        
            $uquery = $this->db->update('login',$data);
            if($uquery)
            {    
                $field = array
                        (
                            'operation' => 'Unapproved',
                            'updatedWhom' => $lid,
                            'updatedBy' => $by,                  
                        );
                $this->db->insert('loginUpdateOperations',$field);
                if($this->db->affected_rows() > 0)
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }

        public function editStudent()
        {
            // $id = $this->input->get('id');
            $id = 10;
            $this->db->where('id',$id);
            $query = $this->db->get('student');
            if($query->num_rows() > 0)
            {
                return $query->row();
            }
            else
            {
                return false;
            }
        }

        public function updateStudent()
        {
            // $id = $this->db->post('id');
            $id = 10;
            $rollno = $this->input->post('sRollNo');
            $sName = $this->input->post('sName');
            $sEmail = $this->input->post('sEmail');
            // $password = $this->input->post('password');
            // $cpassword = $this->input->post('cpassword');
            $field = array
                    (
                        'crollNo' => $rollno,
                        'cstudentName' => $sName,
                        'cstudentEmail' => $sEmail,
                        // 'nuserTypeId' => 4,
                    );
            $this->db->where('id',$id);
            $query = $this->db->update('student',$field);
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function editStudentLogin()
        {
            // $lid = $this->input->get('lid');
            // $this->db->where('id',$lid);
            $userName = $this->db->get('sRollNo');
            $this->db->where('cuserName',$userName);        
            $query = $this->db->get('login');
            if($query->num_rows() > 0)
            {
                return $query->row();
            }
            else
            {
                return false;
            }
        }    

        public function updateStudentLogin()
        {
            // $lid = ;
            $userName = $this->db->post('sRollNo');
            $field = array
                    (
                        'cpassword' => $this->db->post('password')
                    );
            $this->db->where('cuserName',$userName);
            $query = $this->db->update('login');
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function countUser()     //final
        {
            $result = $this->db->count_all_results('student');
            if($result)
            {
                return $result;                 
            }
            else
            {
                return false;
            }
        }

        public function countStudents()     //final
        {
            $this->db->select('student.id');
            $this->db->from('student');
            $this->db->join('userType','student.nuserTypeId = userType.id');
            $this->db->where('userType.cuserType','Student');
            $query = $this->db->count_all_results();
            if($query > 0)
            {
                return $query;
            }
            else
            {
                return false;
            }
        }

        // public function countAdmin()
        // {
        //     $this->db->select('student.id');
        //     $this->db->from('student');
        //     $this->db->join('userType','student.nuserTypeId = userType.id');
        //     $this->db->where('userType.cuserType','Admin');
        //     $query = $this->db->count_all_results();
        //     if($query > 0)
        //     {
        //         return $query;
        //     }
        //     else
        //     {
        //         return false;
        //     }
        // }


        public function showAllDepartment()     //final
        {
            $query = $this->db->get('department');
            if($query->num_rows() > 0)
            {
                return $query->result();
            }
            else
            {
                return false;
            }
        }


    
//approved by
//deleted by
//unapproved by
//added by 
//password updated by
//usertype changed by
//department changed by


}