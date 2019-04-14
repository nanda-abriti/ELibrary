<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class mAdminpanel extends CI_Model
{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }    

        public function deleteStudent()         //final
        {
            $rollNo =  $this->input->post('rollNo');
            $this->db->where('crollNo',$rollNo);
            $query = $this->db->delete('student');
            if($query)
            {
                return true;
            }
            else
            {
                return false;        
            }
        }

        public function showAllNewsLong()   //final      
        {
            $this->db->from('newsLong');
            $this->db->order_by("createdAt", "desc");
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

        public function showNewsLong()      //final
        {
            $this->db->from('newsLong');
            $this->db->order_by("createdAt", "desc");
            $this->db->limit(1);
            $query = $this->db->get();
            if($query->num_rows() > 0)
            {
                return $query->row();
            }
            else
            {
                return false;
            }
        }

        public function insertNewsLong()        //final  
        {
            $lid = $this->session->userdata('lid');
            $field = array
                    (
                        'ctitle' => $this->input->post('title'),
                        'clink' => $this->input->post('link'),
                        'cbody' => $this->input->post('news'),
                        'cnewsBy' => $this->input->post('name'),
                        'nloginUserId' => $lid,
                        'cdeleteTime' => $this->input->post('time')
                    );
            $query = $this->db->insert('newsLong', $field);
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function deleteNewsLong()       //final
        {
            $id = $this->input->post('id');
            $this->db->where('id',$id);
            $this->db->delete('newsLong');
            if($this->db->affected_rows() > 0)
            {
                 return true;
            }
            else
            {
                 return false;
            }
        }

        public function showAllNewsShort()      //final
        {
            $this->db->from('newsShort');
            $this->db->order_by("createdAt", "desc");
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

        public function showNewsShort()     //final
        {
            $this->db->from('newsShort');
            $this->db->order_by("createdAt", "desc");
            $this->db->limit(10);
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

        public function insertNewsShort()           //final  
        {
            $lid = $this->session->userdata('lid');
            $field = array
                    (
                        'ctitle' => $this->input->post('title'),
                        'clink' => $this->input->post('link'),
                        'cnewsBy' => $this->input->post('name'),
                        'nloginUserId' => $lid,
                        'cdeleteTime' => $this->input->post('time')
                    );
            $query = $this->db->insert('newsShort', $field);
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function deleteNewsShort()       //final
        {
            $id = $this->input->post('id');
            $this->db->where('id',$id);
            $this->db->delete('newsShort');
            if($this->db->affected_rows() > 0)
            {
                 return true;
            }
            else
            {
                 return false;
            }
        }


        public function loggedInUsers()     //final
        {
            $array = array
                    (
                        'login.nloginFlag' => 1,
                        'student.nuserTypeId' =>5
                    );
            $this->db->select('login.id as lid, login.cuserName, login.cpassword, login.nloginFlag, login.cloginTime, login.status, student.id, student.crollNo, 
                                    student.cstudentName, student.cstudentEmail, student.nuserTypeId, userType.cuserType, 
                                    userType.nloginAttempt, student.ndepartmentId, department.id as deptid, department.cdepartmentName, 
                                    department.cabbreviation');
            $this->db->from('student');
            $this->db->join('login','login.cuserName = student.crollNo');
            $this->db->join('userType','userType.id = student.nuserTypeId');
            $this->db->join('department','department.id = student.ndepartmentId');
            // $this->db->where('login.nloginFlag',1);
            $this->db->where($array);            
            $this->db->order_by('login.cloginTime','desc');
            $query = $this->db->get();
            if($query->num_rows() > 0)
            {
                return $query->result();
                // print_r($query->result());
            }       
            else
            {
                return false;
                // print_r("error");
            }
        }

        public function loggedInUsersDept()     //final
        {
            $deptid = $this->session->userdata('deptid');
            $array = array
                    (
                        'login.nloginFlag' => 1,
                        'student.nuserTypeId' =>5,
                        'department.id' => $deptid
                    );
            $this->db->select('login.id as lid, login.cuserName, login.cpassword, login.nloginFlag, login.cloginTime, login.status, student.id, student.crollNo, 
                                    student.cstudentName, student.cstudentEmail, student.nuserTypeId, userType.cuserType, 
                                    userType.nloginAttempt, student.ndepartmentId, department.id as deptid, department.cdepartmentName, 
                                    department.cabbreviation');
            $this->db->from('student');
            $this->db->join('login','login.cuserName = student.crollNo');
            $this->db->join('userType','userType.id = student.nuserTypeId');
            $this->db->join('department','department.id = student.ndepartmentId');
            $this->db->where($array);            
            $this->db->order_by('login.cloginTime','desc');
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

        public function logOutUser()           //final
        {
            $lid = $this->input->post('lid');
            $by = $this->session->userdata('lid');
            $field = array
                    (
                        'nloginFlag' => 0
                    );
            $this->db->where('id',$lid);             
            $query =$this->db->update('login',$field);
            if($query)
            {
                $field2 = array
                        (
                            'operation' => 'Logout',
                            'updatedWhom' => $lid,
                            'updatedBy' => $by,                  
                        );
                $this->db->insert('loginUpdateOperations',$field2);
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

        public function logInStatus()       //final
        {
            // print_r($this->session->userdata('lid'));
            $lid = $this->session->userdata('lid');
            $this->db->where('id',$lid);
            $query = $this->db->get('login');
            if($query->num_rows() > 0)
            {
                $loginstatus = $query->row()->nloginFlag;
                //print_r($loginstatus);
                if($loginstatus == 1)
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


        public  function lastLoginTime()        //final
        {
            $this->db->select('login.id, login.cuserName, login.nloginFlag, login.cloginTime, student.crollNo,
                                student.id as sid, student.cstudentName, student.cstudentEmail, student.nuserTypeId, 
                                student.ndepartmentId, department.id as deptid, department.cdepartmentName, 
                                department.cabbreviation');
            $this->db->from('login');
            $this->db->join('student','student.crollNo = login.cuserName');
            $this->db->join('department','department.id = student.ndepartmentId');            
            $this->db->order_by('login.cloginTime','desc');
            $query = $this->db->get();
            if($query->num_rows() > 0)
            {
                // print_r($query->result());
                return $query->result();
            }
            else
            {
                // print_r('error');
                return false;
            }
        }

        public function todayUsers()        //working
        {
            date_default_timezone_set('Asia/Kolkata');
            $dt = new DateTime();
            $date = $dt->format("Y-m-d");
            $this->db->select('id, cuserName, nloginFlag, cloginTime');
            $this->db->from('login');
            $this->db->where('date(cloginTime)', $date);
            $query = $this->db->count_all_results();
            if($query >= 0)                                 
            {
                // print_r($query);
                return $query;
            }
            else
            {
                // print_r('error');
                return false;
            }
        }

        public function editPrivileges()        //final
        {
            $sid = $this->input->post('sid');
            $uTId = $this->input->post('utid');
            $field = array
                    (
                        'nuserTypeId' => $uTId
                    );
            $this->db->where('id',$sid);
            $this->db->update('student', $field);
            if($this->db->affected_rows() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function editDept()        //final
        {
            $sid = $this->input->post('sid');
            $deptid = $this->input->post('deptid');
            $field = array
                    (
                        'ndepartmentId' => $deptid
                    );
            $this->db->where('id',$sid);
            $this->db->update('student', $field);
            if($this->db->affected_rows() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function showUserTypes()     //final
        {
            $query = $this->db->get('usertype');
            if($query->num_rows() > 0)
            {
                // print_r($query->result());
                return $query->result();
            }
            else
            {
                // print_r('error');
                return false;
            }
        }

        public function allApproved()          //final
        {
            $array = array
                    (
                        'login.status'=> 1,
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

        public function allUnApproved()          //final
        {
            $array = array
                    (
                        'login.status'=> 0,
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
      

        public function editPrivilegesFaculty()        //working
        {
            $fid = $this->input->post('fid');
            $uTId = $this->input->post('utid');
            $field = array
                    (
                        'nuserTypeId' => $uTId
                    );
            $this->db->where('id',$fid);
            $this->db->update('faculty', $field);
            if($this->db->affected_rows() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function deleteFaculty()     //final
        {
            $fid = $this->input->post('fid');
            $this->db->where('id',$fid);
            $this->db->delete('student');
            if($this->db->affected_rows() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function todayFaculties()        //working
        {
            date_default_timezone_set('Asia/Kolkata');
            $dt = new DateTime();
            $date = $dt->format("Y-m-d");
            $this->db->select('id, cuserName, nloginFlag, cloginTime');
            $this->db->from('facultylogin');
            $this->db->where('date(cloginTime)', $date);
            $query = $this->db->count_all_results();
            if($query >= 0)                                 
            {
                return $query;
            }
            else
            {
                return false;
            }
        }

        public  function lastLoginTimeFaculty()      
        {
            $this->db->select('facultylogin.id as flid, facultylogin.cuserName, facultylogin.nloginFlag, 
                                facultylogin.cloginTime, faculty.nuserTypeId, faculty.cfacultyName, faculty.cfacultyEmail,
                                faculty.ndepartmentId, department.id as deptid, department.cdepartmentName, 
                                department.cabbreviation');
            $this->db->from('facultylogin');
            $this->db->join('faculty','faculty.cfacultyEmail = facultylogin.cuserName');
            $this->db->join('department','department.id = faculty.ndepartmentId');            
            $this->db->order_by('facultylogin.cloginTime','desc');
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

        public function loggedInFaculty()       //final
        {
            $array = array('2','3');
            $this->db->select('login.id as lid, login.cuserName, login.cpassword, login.nloginFlag, login.cloginTime, login.status, 
                                student.id, student.crollNo, student.cstudentName, student.cstudentEmail, 
                                student.nuserTypeId, student.ndepartmentId, userType.cuserType, 
                                userType.nloginAttempt, department.id as deptid, department.cdepartmentName, 
                                department.cabbreviation');
            $this->db->from('student');
            $this->db->join('login','login.cuserName = student.crollNo');
            $this->db->join('userType','userType.id = student.nuserTypeId');
            $this->db->join('department','department.id = student.ndepartmentId');   
            $this->db->where_in('student.nuserTypeId',$array);
            $this->db->where('login.nloginFlag', 1);          
            $this->db->order_by('login.cloginTime','desc');
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
        
        public function loggedInFacultyDept()       //final
        {
            $deptid = $this->session->userdata('deptid');
            $array = array
            (
                'login.nloginFlag' => 1,
                'student.nuserTypeId' => 3,
                'department.id' => $deptid
            );
            $this->db->select('login.id as lid, login.cuserName, login.cpassword, login.nloginFlag, login.cloginTime, login.status, student.id, student.crollNo, 
                                    student.cstudentName, student.cstudentEmail, student.nuserTypeId, userType.cuserType, 
                                    userType.nloginAttempt');
            $this->db->from('student');
            $this->db->join('login','login.cuserName = student.crollNo');
            $this->db->join('userType','userType.id = student.nuserTypeId');
            $this->db->join('department','department.id = student.ndepartmentId'); 
            $this->db->where($array);            
            $this->db->order_by('login.cloginTime','desc');
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



        // public function logOutFaculty()        //final          //when admin would logout a faculty
        // {
        //     $lid = $this->input->post('lid');
        //     $field = array
        //             (
        //                 'nloginFlag' => 0
        //             );
        //     $this->db->where('id',$lid);             
        //     $query =$this->db->update('login',$field);
        //     if($query)
        //     {
        //         return true;
        //     }
        //     else
        //     {
        //         return false;
        //     }
        // }



        public function allLoggedIn()     //final
        {
            $array = array
                    (
                        'login.nloginFlag' => 1,
                    );
            $this->db->select('login.id as lid, login.cuserName, login.cpassword, login.nloginFlag, login.cloginTime, login.status, student.id, student.crollNo, 
                                    student.cstudentName, student.cstudentEmail, student.nuserTypeId, userType.cuserType, 
                                    userType.nloginAttempt, student.ndepartmentId, department.id as deptid, department.cdepartmentName, 
                                    department.cabbreviation');
            $this->db->from('student');
            $this->db->join('login','login.cuserName = student.crollNo');
            $this->db->join('userType','userType.id = student.nuserTypeId');
            $this->db->join('department','department.id = student.ndepartmentId');
            $this->db->where($array);            
            $this->db->order_by('login.cloginTime','desc');
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

        public function addNewUser()        //final
        {
            $sName = $this->input->post('sName');
            $sEmail = $this->input->post('sEmail');
            $uTId = $this->input->post('utid');
            $deptid = $this->input->post('dept');
            $password = md5($this->input->post('password'));
            $field = array
                    (
                        'crollNo' => $sEmail,
                        'cstudentName' => $sName,
                        'cstudentEmail' => $sEmail,
                        'nuserTypeId' => $uTId,
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


        public function changePasswordByAdmin()         //final
        {
            $lid = $this->input->post('lid');
            $by = $this->session->userdata('lid');
            $password = md5('elibrary');
            $field = array
                    (
                        'cpassword' => $password
                    );
            $this->db->where('id',$lid);
            $this->db->update('login',$field);
            if($this->db->affected_rows() > 0)
            {
                $field2 = array
                        (
                            'operation' => 'Changed Password',
                            'updatedWhom' => $lid,
                            'updatedBy' => $by,                  
                        );
                $this->db->insert('loginUpdateOperations',$field2);
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

}
?>