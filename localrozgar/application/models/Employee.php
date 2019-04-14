<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Model
{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function showApprovedEmployeeToCityHead()
        {
            $cityid = $this->session->userdata('cityid');
            $field = array
                    (
                        'empaddress.ncityId' => $cityid,
                        'empdetails.status' => 1
                    ); 
            $this->db->select('empdetails.id as empid, empdetails.cempName as empname, empdetails.cemail as email, empdetails.ccontact as contact, 
            empdetails.nempTypeId as emptypeid, emptype.id as emptypeid, emptype.cempType as emptype, cadhar, empdetails.cprofile, 
            empdetails.nage, empdetails.cgender, empdetails.nbookingFlag, empaddress.nstateId as stateid,
            empaddress.ncityId as cityid, empaddress.nareaId as areaid, area.careaName as areaname, 
            city.ccityName as cityname');
            $this->db->from('empdetails');
            $this->db->join('empaddress','empdetails.ccontact = empaddress.cempdetailsId');
            $this->db->join('area','area.id = empaddress.nareaId');
            $this->db->join('city','city.id = empaddress.ncityId');
            $this->db->join('emptype','empdetails.nempTypeId = emptype.id');  
            $this->db->where($array);
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

        public function showUnApprovedEmployeeToCityHead()
        {
            $cityid = $this->session->userdata('cityid');
            $field = array
                    (
                        'empaddress.ncityId' => $cityid,
                        'empdetails.status' => 0
                    ); 
            $this->db->select('empdetails.id as empid, empdetails.cempName as empname, empdetails.cemail as email, empdetails.ccontact as contact, 
            empdetails.nempTypeId as emptypeid, emptype.id as emptypeid, emptype.cempType as emptype, cadhar, empdetails.cprofile, 
            empdetails.nage, empdetails.cgender, empdetails.nbookingFlag, empaddress.nstateId as stateid,
            empaddress.ncityId as cityid, empaddress.nareaId as areaid, area.careaName as areaname, 
            city.ccityName as cityname');
            $this->db->from('empdetails');
            $this->db->join('empaddress','empdetails.ccontact = empaddress.cempdetailsId');
            $this->db->join('area','area.id = empaddress.nareaId');
            $this->db->join('city','city.id = empaddress.ncityId');
            $this->db->join('emptype','empdetails.nempTypeId = emptype.id');  
            $this->db->where($array);
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

        public function showApprovedEmployeeToAreaHead()
        {
            // $areaid = 7;
            $areaid = $this->session->userdata('areaid');
            $array = array
                    (
                        'empaddress.nareaId' => $areaid, 
                        'empdetails.status' => 1
                    ); 
            $this->db->select('empdetails.id as empid, empdetails.cempName as empname, empdetails.cemail as email, empdetails.ccontact as contact, 
                                empdetails.nempTypeId as emptypeid, emptype.id as emptypeid, emptype.cempType as emptype, cadhar, empdetails.cprofile, 
                                empdetails.nage, empdetails.cgender, empdetails.nbookingFlag, empaddress.nstateId as stateid,
                                empaddress.ncityId as ncityId, empaddress.nareaId as areaid');
            $this->db->from('empdetails');
            $this->db->join('empaddress','empdetails.ccontact = empaddress.cempdetailsId');
            $this->db->join('emptype','empdetails.nempTypeId = emptype.id');  
            $this->db->where($array);
            $query = $this->db->get();          
            if($query->num_rows() > 0)
            {
                $result = $query->result();
                return $result;
                // return $query->result();
            }
            else
            {
                return false;
            }
        }

        public function showUnApprovedEmployeeToAreaHead()
        {
            $areaid = $this->session->userdata('areaid');
            // $areaid = 7;
            $array = array
                    (
                        'empaddress.nareaId' => $areaid, 
                        'empdetails.status' => 0
                    ); 
            $this->db->select('empdetails.id as empid, empdetails.cempName as empname, empdetails.cemail as email, empdetails.ccontact as contact, 
                                empdetails.nempTypeId as emptypeid, emptype.id as emptypeid, emptype.cempType as emptype, cadhar, empdetails.cprofile, 
                                empdetails.nage, empdetails.cgender, empdetails.nbookingFlag, empaddress.nstateId as stateid,
                                empaddress.ncityId as ncityId, empaddress.nareaId as areaid');
            $this->db->from('empdetails');
            $this->db->join('empaddress','empdetails.ccontact = empaddress.cempdetailsId');
            $this->db->join('emptype','empdetails.nempTypeId = emptype.id');  
            $this->db->where($array);
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

        public function showApprovedEmployeeToStateHead()
        {
            $stateid = $this->session->userdata('stateid');
            $field = array
                    (
                        'empaddress.ncityId' => $stateid,
                        'empdetails.status' => 1
                    ); 
            $this->db->select('empdetails.id as empid, empdetails.cempName as empname, empdetails.cemail as email, empdetails.ccontact as contact, 
            empdetails.nempTypeId as emptypeid, emptype.id as emptypeid, emptype.cempType as emptype, cadhar, empdetails.cprofile, 
            empdetails.nage, empdetails.cgender, empdetails.nbookingFlag, empaddress.nstateId as stateid,
            empaddress.ncityId as cityid, empaddress.nareaId as areaid, area.careaName as areaname, city.ccityName as cityname,
            state.cstateName as statename');
            $this->db->from('empdetails');
            $this->db->join('empaddress','empdetails.ccontact = empaddress.cempdetailsId');
            $this->db->join('area','area.id = empaddress.nareaId');
            $this->db->join('city','city.id = empaddress.ncityId');
            $this->db->join('state','state.id = empaddress.nstateId');
            $this->db->join('emptype','empdetails.nempTypeId = emptype.id');  
            $this->db->where($array);
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

        public function showUnApprovedEmployeeToStateHead()
        {
            
            $stateid = $this->session->userdata('stateid');
            $field = array
                    (
                        'empaddress.ncityId' => $stateid,
                        'empdetails.status' => 0
                    ); 
            $this->db->select('empdetails.id as empid, empdetails.cempName as empname, empdetails.cemail as email, empdetails.ccontact as contact, 
            empdetails.nempTypeId as emptypeid, emptype.id as emptypeid, emptype.cempType as emptype, cadhar, empdetails.cprofile, 
            empdetails.nage, empdetails.cgender, empdetails.nbookingFlag, empaddress.nstateId as stateid,
            empaddress.ncityId as cityid, empaddress.nareaId as areaid, area.careaName as areaname, city.ccityName as cityname,
            state.cstateName as statename');
            $this->db->from('empdetails');
            $this->db->join('empaddress','empdetails.ccontact = empaddress.cempdetailsId');
            $this->db->join('area','area.id = empaddress.nareaId');
            $this->db->join('city','city.id = empaddress.ncityId');
            $this->db->join('state','state.id = empaddress.nstateId');
            $this->db->join('emptype','empdetails.nempTypeId = emptype.id');  
            $this->db->where($array);
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
        
}

?>

