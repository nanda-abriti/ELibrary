<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Madminpanel extends CI_Model
{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }
        
        public function showAllState()         
        {
            $array = array
                    (
                        'status' => 1
                    );
            $this->db->select('id as stateid, cstateName as statename, cabbreviation as stateabbr');
            $this->db->from('state');
            $this->db->where($array);
            $this->db->order_by('cstateName', 'asc');
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

        public function showAllCity()         
        {
            $array = array
                    (
                        'city.status' => 1,
                        'state.status' => 1
                    );
            $this->db->select('city.nstateId as stateid, city.id as cityid, city.ccityName as cityname, 
                                state.cstateName as statename, state.cabbreviation as stateabbr');
            $this->db->from('city');
            $this->db->join('state','city.nstateId = state.id');
            $this->db->where($array);
            $this->db->order_by('state.cstateName', 'asc');
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

        public function showAllArea()         
        {
            $array = array
                    (
                        'city.status' => 1,
                        'state.status' => 1,
                        'area.status' => 1,
                    );
            $this->db->select('city.nstateId as stateid, area.ncityId as cityid, city.ccityName as cityname, 
                                state.cstateName as statename, state.cabbreviation as stateabbr, area.id as areaid,
                                area.careaName areaname, area.npincode as pincode, area.dlatitude as lat, 
                                area.dlongitude as long');
            $this->db->from('area');
            $this->db->join('city','area.ncityId = city.id');
            $this->db->join('state','city.nstateId = state.id');
            $this->db->where($array);
            $this->db->order_by('state.cstateName', 'asc');
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

        public function adminlogin()    //final
        {
            $userName = $this->input->post('username');
            $password = md5($this->input->post('password'));
            // $userName = 'saurabh';
            // $password = '7927221283b1fb48f9e3a9092ad95ee7';
            $array = array('adminlogin.cuserName' => $userName, 'adminlogin.cpassword' => $password,
                           'adminlogin.status' => 1);        //'login.nloginFlag' => 0, 
            $this->db->where($array);
            $getlogin = $this->db->get('adminlogin');
            if($getlogin->num_rows() > 0)
            {
                // $loginflag = $getlogin->row()->nloginFlag;
                // if($loginflag == 0)
                // {
                    date_default_timezone_set('Asia/Kolkata');
                    $dt = new DateTime();
                    $date = $dt->format("Y-m-d H:i:s"); 
                    $field = array
                                (
                                    'nloginFlag' => 1,
                                    'cloginTime'=> $date                           
                                );
                    $this->db->where($array);                     
                    $query = $this->db->update('adminlogin',$field);
                    if($query)
                    {
                        $array = array('adminlogin.cuserName' => $userName, 'adminlogin.cpassword' => $password, 'adminlogin.status' => 1, 'adminlogin.nloginFlag' => 1);   // 
                        $this->db->select('adminlogin.id as lid, adminlogin.cuserName as username, adminlogin.cpassword as password, 
                                            adminlogin.nloginFlag as loginflag, adminlogin.status, admindetails.id as userid, 
                                            admindetails.cname as name, admindetails.cemail as email, 
                                            admindetails.ccontact as contact, admindetails.cprofile as profile, 
                                            admindetails.nuserTypeId as usertypeid, usertype.cuserType as usertype, 
                                            userType.nloginAttempt, state.cstateName as statename, city.ccityName as cityname,
                                            area.careaName as areaname, adminaddress.nstateId as stateid, adminaddress.ncityId as cityid,
                                            adminaddress.nareaId as areaid');
                        $this->db->from('admindetails');
                        $this->db->join('adminaddress','admindetails.ccontact = adminaddress.cadminDetailsId');                                                  
                        $this->db->join('state','state.id = adminaddress.nstateId');                        
                        $this->db->join('city','city.id = adminaddress.ncityId');                        
                        $this->db->join('area','area.id = adminaddress.nareaId');      
                        $this->db->join('adminlogin','adminlogin.cuserName = admindetails.ccontact');
                        $this->db->join('usertype','userType.id = admindetails.nuserTypeId');                                                               
                        $this->db->where($array);
                        $result = $this->db->get();
                        return $result->row();    
                        // print_r($result->row()); 
                    }
                    else
                    {
                        return false;
                    }
                // }
                // else
                // {
                //     return false;
                // }
            }
            else
            {
                return false;
                // print_r('error');
            }
        }

        
        public function adminlogout()
        {
            $lid = $this->session->userdata('lid');
            $field = array
                    (
                        'nloginFlag' => 0
                    );
            $this->db->where('id',$lid);             
            $query = $this->db->update('adminlogin',$field);
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }
        
        }

        public function addNewUser()
        {
            
        }

        public function addNewAdmin()
        {
            
        }

        public function showCity()         
        {
            $stateid = $this->input->post('id');
            $array = array
                    (
                        'city.status' => 1,
                        'state.status' => 1,
                        'city.nstateId' => $stateid
                    );

            $this->db->select('city.nstateId as stateid, city.id as cityid, city.ccityName as cityname, 
                                state.cstateName as statename, state.cabbreviation as stateabbr');
            $this->db->from('city');
            $this->db->join('state','city.nstateId = state.id');
            $this->db->where($array);
            $this->db->order_by('city.ccityName', 'asc');
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

        public function showArea()         
        {
            $cityid = $this->input->post('id');
            $array = array
                    (
                        'city.status' => 1,
                        'state.status' => 1,
                        'area.status' => 1,
                        'area.ncityId' => $cityid
                    );
            $this->db->select('city.nstateId as stateid, area.ncityId as cityid, city.ccityName as cityname, 
                                state.cstateName as statename, state.cabbreviation as stateabbr, area.id as areaid,
                                area.careaName areaname, area.npincode as pincode, area.dlatitude as lat, 
                                area.dlongitude as long');
            $this->db->from('area');
            $this->db->join('city','area.ncityId = city.id');
            $this->db->join('state','city.nstateId = state.id');
            $this->db->where($array);
            $this->db->order_by('area.careaName', 'asc');
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

        public function showAllStateHead()
        {
            $array = array
                    (
                        'userdetails.status' => 1,
                        'useraddress.status' => 1,
                        'state.status' => 1,
                        'city.status' => 1,
                        'area.status' => 1,
                        'userdetails.nuserTypeId' => 4
                    );
            $this->db->select('userdetails.cname as name, userdetails.cemail as email, userdetails.ccontact as contact, 
                        userdetails.cprofile as profile, useraddress.nstateId as stateid, useraddress.ncityId as cityid, 
                        useraddress.nareaId as areaid, area.npincode as pincode, state.cstateName as statename, 
                        state.cabbreviation as sabbr, city.ccityName as cityname, area.careaName as areaname, 
                        area.dlatitude as latitude, area.dlongitude as longitude');
            $this->db->from('userdetails');
            $this->db->join('useraddress','useraddress.cuserDetailsId = userdetails.ccontact');
            $this->db->join('state','state.id = useraddress.nstateId');
            $this->db->join('city','city.id = useraddress.ncityId');
            $this->db->join('area','area.id = useraddress.nareaId');
            $this->db->where($array);
            $this->db->order_by('userdetails.createdAt','desc');
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

        public function showAllCityHead()
        {
            $array = array
                    (
                        'userdetails.status' => 1,
                        'useraddress.status' => 1,
                        'state.status' => 1,
                        'city.status' => 1,
                        'area.status' => 1,
                        'userdetails.nuserTypeId' => 5
                    );
            $this->db->select('userdetails.cname as name, userdetails.cemail as email, userdetails.ccontact as contact, 
                        userdetails.cprofile as profile, useraddress.nstateId as stateid, useraddress.ncityId as cityid, 
                        useraddress.nareaId as areaid, area.npincode as pincode, state.cstateName as statename, 
                        state.cabbreviation as sabbr, city.ccityName as cityname, area.careaName as areaname, 
                        area.dlatitude as latitude, area.dlongitude as longitude');
            $this->db->from('userdetails');
            $this->db->join('useraddress','useraddress.cuserDetailsId = userdetails.ccontact');
            $this->db->join('state','state.id = useraddress.nstateId');
            $this->db->join('city','city.id = useraddress.ncityId');
            $this->db->join('area','area.id = useraddress.nareaId');
            $this->db->where($array);
            $this->db->order_by('userdetails.createdAt','desc');
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


        public function showAllAreaHead()
        {
            $array = array
                    (
                        'userdetails.status' => 1,
                        'useraddress.status' => 1,
                        'state.status' => 1,
                        'city.status' => 1,
                        'area.status' => 1,
                        'userdetails.nuserTypeId' => 6
                    );
            $this->db->select('userdetails.cname as name, userdetails.cemail as email, userdetails.ccontact as contact, 
                        userdetails.cprofile as profile, useraddress.nstateId as stateid, useraddress.ncityId as cityid, 
                        useraddress.nareaId as areaid, area.npincode as pincode, state.cstateName as statename, 
                        state.cabbreviation as sabbr, city.ccityName as cityname, area.careaName as areaname, 
                        area.dlatitude as latitude, area.dlongitude as longitude');
            $this->db->from('userdetails');
            $this->db->join('useraddress','useraddress.cuserDetailsId = userdetails.ccontact');
            $this->db->join('state','state.id = useraddress.nstateId');
            $this->db->join('city','city.id = useraddress.ncityId');
            $this->db->join('area','area.id = useraddress.nareaId');
            $this->db->where($array);
            $this->db->order_by('userdetails.createdAt','desc');
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


        public function login()   
        {
            $userName = $this->input->post('username');
            $password = md5($this->input->post('password'));
            // $userName = 'statehead';
            // $password = '7927221283b1fb48f9e3a9092ad95ee7';
            $array = array('login.cuserName' => $userName, 'login.cpassword' => $password,
                           'login.status' => 1);        //'login.nloginFlag' => 0, 
            $this->db->where($array);
            $getlogin = $this->db->get('login');
            if($getlogin->num_rows() > 0)
            {
                // $loginflag = $getlogin->row()->nloginFlag;
                // if($loginflag == 0)
                // {
                    date_default_timezone_set('Asia/Kolkata');
                    $dt = new DateTime();
                    $date = $dt->format("Y-m-d H:i:s"); 
                    $field = array
                                (
                                    'nloginFlag' => 1,
                                    'cloginTime'=> $date                           
                                );
                    $this->db->where($array);                     
                    $query = $this->db->update('login',$field);
                    if($query)
                    {
                        $array = array('login.cuserName' => $userName, 'login.cpassword' => $password, 'login.status' => 1, 'login.nloginFlag' => 1);   // 
                        $this->db->select('login.id as lid, login.cuserName as username, login.cpassword as password, 
                                            login.nloginFlag as loginflag, login.status, userdetails.id as userid, 
                                            userdetails.cname as name, userdetails.cemail as email, 
                                            userdetails.ccontact as contact, userdetails.cprofile as profile, 
                                            userdetails.nuserTypeId as usertypeid, usertype.cuserType as usertype, 
                                            userType.nloginAttempt, state.cstateName as statename, city.ccityName as cityname,
                                            area.careaName as areaname, useraddress.nstateId as stateid, useraddress.ncityId as cityid,
                                            useraddress.nareaId as areaid');
                        $this->db->from('userdetails');
                        $this->db->join('useraddress','userdetails.ccontact = useraddress.cuserDetailsId');                                                  
                        $this->db->join('state','state.id = useraddress.nstateId');                        
                        $this->db->join('city','city.id = useraddress.ncityId');                        
                        $this->db->join('area','area.id = useraddress.nareaId');      
                        $this->db->join('login','login.cuserName = userdetails.ccontact');
                        $this->db->join('usertype','userType.id = userdetails.nuserTypeId');                                                               
                        $this->db->where($array);
                        $result = $this->db->get();
                        return $result->row();    
                        // print_r($result->row()); 
                    }
                    else
                    {
                        return false;
                        // print_r('error');
                    }
                // }
                // else
                // {
                //     return false;
                // }
            }
            else
            {
                return false;
                // print_r('error');
            }
        }


        public function newArea()
        {
            $cityid = $this->input->post('city');
            $areaName = $this->input->post('area');
            $pincode = $this->input->post('pin');

            $field = array
                    (
                        'careaName' => $areaName, 
                        'npincode' => $pincode,
                        'ncityId' => $cityid
                    );
            
            $query = $this->db->insert('area', $field);
            if($query)
            {
                return true;
                // print_r('success');
            }
            else
            {
                return false;
                // print_r('error');
            }
        }


        public function newCity()
        {
            $stateid = $this->input->post('state');
            $cityName = $this->input->post('city');
           
            $field = array
                    (
                        'ccityName' => $cityName, 
                        'nstateId' => $stateid
                    );
            
            $query = $this->db->insert('city',$field);
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        
        public function newState()
        {
            $stateName = $this->input->post('state');
           
            $field = array
                    (
                        'cstateName' => $stateName, 
                    );
            
            $query = $this->db->insert('state',$field);
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function deleteState()
        {
            $stateid = $this->input->post('stateid');
            $field = array
                    (
                        'status' => 0
                    );
            
            $this->db->where('id',$stateid);
            $query = $this->db->update('state',$field);
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function deleteCity()
        {
            $cityid = $this->input->post('cityid');
            
            $field = array
                    (
                        'status' => 0,
                    );
            
            $this->db->where('id',$cityid);
            $query = $this->db->update('city',$field);
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function deleteArea()
        {
            $areaid = $this->input->post('areaid');
            
            $field = array
                    (
                        'status' => 0,
                    );
            
            $this->db->where('id',$areaid);
            $query = $this->db->update('area',$field);
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function showCityStateHead()         
        {
            $stateid = $this->session->userdata('stateid');
            $array = array
                    (
                        'city.status' => 1,
                        'state.status' => 1,
                        'city.nstateId' => $stateid
                    );

            $this->db->select('city.nstateId as stateid, city.id as cityid, city.ccityName as cityname, 
                                state.cstateName as statename, state.cabbreviation as stateabbr');
            $this->db->from('city');
            $this->db->join('state','city.nstateId = state.id');
            $this->db->where($array);
            $this->db->order_by('city.ccityName', 'asc');
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

        public function showAreaStateHead()         
        {
            $stateid = $this->session->userdata('stateid');
            $array = array
                    (
                        'city.status' => 1,
                        'state.status' => 1,
                        'area.status' => 1,
                        'city.nstateId' => $stateid
                    );
            $this->db->select('city.nstateId as stateid, area.ncityId as cityid, city.ccityName as cityname, 
                                state.cstateName as statename, state.cabbreviation as stateabbr, area.id as areaid,
                                area.careaName areaname, area.npincode as pincode, area.dlatitude as lat, 
                                area.dlongitude as long');
            $this->db->from('area');
            $this->db->join('city','area.ncityId = city.id');
            $this->db->join('state','city.nstateId = state.id');
            $this->db->where($array);
            $this->db->order_by('area.careaName', 'asc');
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

        public function showAreaCityHead()         
        {
            $cityid = $this->session->userdata('cityid');
            $array = array
                    (
                        'city.status' => 1,
                        'state.status' => 1,
                        'area.status' => 1,
                        'area.ncityId' => $cityid
                    );
            $this->db->select('city.nstateId as stateid, area.ncityId as cityid, city.ccityName as cityname, 
                                state.cstateName as statename, state.cabbreviation as stateabbr, area.id as areaid,
                                area.careaName areaname, area.npincode as pincode, area.dlatitude as lat, 
                                area.dlongitude as long');
            $this->db->from('area');
            $this->db->join('city','area.ncityId = city.id');
            $this->db->join('state','city.nstateId = state.id');
            $this->db->where($array);
            $this->db->order_by('area.careaName', 'asc');
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

        public function showCityHeadToStateHead()
        {
            $stateid = $this->session->userdata('stateid');
            $array = array
                    (
                        'userdetails.status' => 1,
                        'useraddress.status' => 1,
                        'state.status' => 1,
                        'city.status' => 1,
                        'area.status' => 1,
                        'userdetails.nuserTypeId' => 5,
                        'useraddress.nstateId' => $stateid
                    );
            $this->db->select('userdetails.cname as name, userdetails.cemail as email, userdetails.ccontact as contact, 
                        userdetails.cprofile as profile, useraddress.nstateId as stateid, useraddress.ncityId as cityid, 
                        useraddress.nareaId as areaid, area.npincode as pincode, state.cstateName as statename, 
                        state.cabbreviation as sabbr, city.ccityName as cityname, area.careaName as areaname, 
                        area.dlatitude as latitude, area.dlongitude as longitude');
            $this->db->from('userdetails');
            $this->db->join('useraddress','useraddress.cuserDetailsId = userdetails.ccontact');
            $this->db->join('state','state.id = useraddress.nstateId');
            $this->db->join('city','city.id = useraddress.ncityId');
            $this->db->join('area','area.id = useraddress.nareaId');
            $this->db->where($array);
            $this->db->order_by('userdetails.createdAt','desc');
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

        public function showAreaHeadToStateHead()
        {
            $stateid = $this->session->userdata('stateid');
            $array = array
                    (
                        'userdetails.status' => 1,
                        'useraddress.status' => 1,
                        'state.status' => 1,
                        'city.status' => 1,
                        'area.status' => 1,
                        'userdetails.nuserTypeId' => 6,
                        'useraddress.nstateId' => $stateid
                    );
            $this->db->select('userdetails.cname as name, userdetails.cemail as email, userdetails.ccontact as contact, 
                        userdetails.cprofile as profile, useraddress.nstateId as stateid, useraddress.ncityId as cityid, 
                        useraddress.nareaId as areaid, area.npincode as pincode, state.cstateName as statename, 
                        state.cabbreviation as sabbr, city.ccityName as cityname, area.careaName as areaname, 
                        area.dlatitude as latitude, area.dlongitude as longitude');
            $this->db->from('userdetails');
            $this->db->join('useraddress','useraddress.cuserDetailsId = userdetails.ccontact');
            $this->db->join('state','state.id = useraddress.nstateId');
            $this->db->join('city','city.id = useraddress.ncityId');
            $this->db->join('area','area.id = useraddress.nareaId');
            $this->db->where($array);
            $this->db->order_by('userdetails.createdAt','desc');
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

        public function showAreaHeadToCityHead()
        {
            $cityid = $this->session->userdata('cityid');
            $array = array
                    (
                        'userdetails.status' => 1,
                        'useraddress.status' => 1,
                        'state.status' => 1,
                        'city.status' => 1,
                        'area.status' => 1,
                        'userdetails.nuserTypeId' => 6,
                        'useraddress.ncityId' => $cityid
                    );
            $this->db->select('userdetails.cname as name, userdetails.cemail as email, userdetails.ccontact as contact, 
                        userdetails.cprofile as profile, useraddress.nstateId as stateid, useraddress.ncityId as cityid, 
                        useraddress.nareaId as areaid, area.npincode as pincode, state.cstateName as statename, 
                        state.cabbreviation as sabbr, city.ccityName as cityname, area.careaName as areaname, 
                        area.dlatitude as latitude, area.dlongitude as longitude');
            $this->db->from('userdetails');
            $this->db->join('useraddress','useraddress.cuserDetailsId = userdetails.ccontact');
            $this->db->join('state','state.id = useraddress.nstateId');
            $this->db->join('city','city.id = useraddress.ncityId');
            $this->db->join('area','area.id = useraddress.nareaId');
            $this->db->where($array);
            $this->db->order_by('userdetails.createdAt','desc');
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

        public function newStateHead()
        {
            $stateid = $this->input->post('state');
            $cityid = $this->input->post('city');
            $areaid = $this->input->post('area');
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $contact = $this->input->post('contact');
            $username = $contact;
            $password = md5('localrozgar');
            
            $field = array
                    (
                        'cname' => $name,
                        'cemail' => $email,
                        'ccontact' => $contact,         
                        'nuserTypeId' => 4
                    );
            $query = $this->db->insert('userdetails',$field);
            if($query)
            {
                $userAddress = $this->newUserAddress($name, $email, $contact, $stateid, $cityid, $areaid, $username, $password);
                if($userAddress)
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

        public function newCityHead()
        {
            $stateid = $this->input->post('state');
            $cityid = $this->input->post('city');
            $areaid = $this->input->post('area');
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $contact = $this->input->post('contact');
            $username = $contact;
            $password = md5('localrozgar');
            
            $field = array
                    (
                        'cname' => $name,
                        'cemail' => $email,
                        'ccontact' => $contact,         
                        'nuserTypeId' => 5
                    );
            $query = $this->db->insert('userdetails',$field);
            if($query)
            {
                $userAddress = $this->newUserAddress($name, $email, $contact, $stateid, $cityid, $areaid, $username, $password);
                if($userAddress)
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

        public function newAreaHead()
        {
            $stateid = $this->input->post('state');
            $cityid = $this->input->post('city');
            $areaid = $this->input->post('area');
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $contact = $this->input->post('contact');
            $username = $contact;
            $password = md5('localrozgar');
            
            $field = array
                    (
                        'cname' => $name,
                        'cemail' => $email,
                        'ccontact' => $contact,         
                        'nuserTypeId' => 6
                    );
            $query = $this->db->insert('userdetails',$field);
            if($query)
            {
                $userAddress = $this->newUserAddress($name, $email, $contact, $stateid, $cityid, $areaid, $username, $password);
                if($userAddress)
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

        public function newUserAddress($name, $email, $contact, $stateid, $cityid, $areaid, $username, $password)
        {
            $array = array
                    (
                        'cname' => $name,
                        'cemail' => $email,
                        'ccontact' => $contact,         
                        // 'nuserTypeId' => 4
                    );
            $this->db->where($array);
            $query = $this->db->get('userdetails');
            if($query)
            {
                $userDetailsId = $query->row()->ccontact;
                $field = array
                    (
                        'cuserDetailsId' => $userDetailsId,
                        'nstateId' => $stateid,
                        'ncityId' => $cityid,         
                        'nareaId' => $areaid
                    );
                $userDetailsInsert = $this->db->insert('useraddress', $field);
                if($userDetailsInsert)
                {
                    $lgn = $this->newLogin($username, $password, $userDetailsId);
                    if($lgn)
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
            else
            {
                return false;
            }
        }


        public function newLogin($username, $password)
        {
            $field = array
            (
                'cuserName' => $username,
                'cpassword' => $password,
                'status'=> 1
            );
            $loginInsert = $this->db->insert('login', $field);
            if($loginInsert)
            {
                return true;
            }
            else
            {
                return false;
            }
        }


        public function checkContact()
        {
           $contact = $this->input->post('contact');
           $array = array
                    (
                        'ccontact' => $contact
                    ); 
            $this->db->where($array);
            $query = $this->db->get('userdetails');
            if($query->num_rows() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }


        public function deleteUser()
        {
            $contact = $this->input->post('contact');
            $this->db->where('ccontact', $contact);
            $query = $this->db->delete('userdetails');
            if($this->db->affected_rows() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function deleteAdmin()
        {
            $contact = $this->input->post('contact');
            $this->db->where('ccontact', $contact);
            $query = $this->db->delete("admindetails");
            if($query)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        
}

?>

