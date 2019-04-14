<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class faculty extends CI_Model
{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }    

        public function facultySignUp()           //final
        {
            $deptid = $this->session->userdata('deptid');
            $sName = $this->input->post('sName');
            $sEmail = $this->input->post('sEmail');
            $password = md5($this->input->post('password'));
            $field = array
                    (
                        'crollNo' => $sEmail,
                        'cstudentName' => $sName,
                        'cstudentEmail' => $sEmail,
                        'nuserTypeId' => 3,
                        'ndepartmentId' => $deptid
                    );
            $query = $this->db->insert('student',$field);
            if($this->db->affected_rows() > 0)
            {
                $lgn = array
                        (
                        'cuserName' => $sEmail,
                        'cpassword' => $password,
                        'status' => 1
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

        public function showAllFaculty()             //final
        {
            $deptid = $this->session->userdata('deptid');
            // $array = array('2','3');
            $array = array
                    (
                        'student.nuserTypeId' => 3,
                        'login.status' => 1,
                        'department.id' => $deptid
                    );
            $this->db->select('login.id as lid, login.cuserName, login.cpassword, login.nloginFlag, login.status, student.id, student.crollNo, 
                                    student.cstudentName, student.cstudentEmail, student.nuserTypeId, userType.cuserType, 
                                    userType.nloginAttempt, student.ndepartmentId, department.id as deptid, department.cdepartmentName, department.cabbreviation');
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

        public function showAllFacultyAdmin()             
        {
            $array = array('2','3');
            $this->db->select('login.id as lid, login.cuserName, login.cpassword, login.nloginFlag, login.status, student.id, student.crollNo, 
                                    student.cstudentName, student.cstudentEmail, student.nuserTypeId, userType.cuserType, 
                                    userType.nloginAttempt, student.ndepartmentId, department.id as deptid, department.cdepartmentName, department.cabbreviation');
            $this->db->from('student');
            $this->db->join('login','login.cuserName = student.crollNo');
            $this->db->join('userType','userType.id = student.nuserTypeId');
            $this->db->join('department','department.id = student.ndepartmentId');            
            $this->db->where_in('student.nuserTypeId',$array);
            $this->db->where('login.status',1);
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

    public function facultyAccToDept()
        {
            $deptid = $this->input->post('branch');
            $array = array('2','3');
            // $array = array
            //         (
            //             'student.ndepartmentId'=> $deptid,
            //             'student.nuserTypeId' => 3
            //         );
            $this->db->select('student.cstudentName, student.ndepartmentId, student.nuserTypeId');
            $this->db->from('student');  
            $this->db->where_in('student.nuserTypeId',$array);
            $this->db->where('student.ndepartmentId',$deptid); 
            // $this->db->where($array);
            $query = $this->db->get();
            if($query->num_rows() > 0)
            {
                return $query->result();
                // print_r($query->result());
            }       
            else
            {
                // print_r('error');
                return false;
            }

        }

        // public function hodAccToDept()
        // {
        //     $deptid = $this->input->post('branch');
        //     $array = array
        //             (
        //                 'student.ndepartmentId'=> $deptid,
        //                 'student.nuserTypeId' => 2
        //             );
        //     $this->db->select('student.cstudentName');
        //     $this->db->from('student');   
        //     $this->db->where( $array);
        //     $query = $this->db->get();
        //     if($query->num_rows() > 0)
        //     {
        //         return $query->result();
        //         // print_r($query->result());
        //     }       
        //     else
        //     {
        //         // print_r('error');
        //         return false;
        //     }

        // }


}