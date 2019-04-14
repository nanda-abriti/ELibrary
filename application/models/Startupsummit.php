<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Startupsummit extends CI_Model
{
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }    

    public function addNewParticipant()
    {
        $name = $this->input->post('name');
        // $rollno = $this->input->post('rollno');
        $branch = $this->input->post('branch');
        $year = $this->input->post('year');
        $college = $this->input->post('college');
        // $payment = $this->input->post('pay');
        $email = $this->input->post('email');
        $contact = $this->input->post('contact');
        // $paymentto = $this->session->userdata('sid');
        $field = array
                (
                    // 'crollNo' => $rollno,
                    'cstudentName' => $name,
                    'cbranch' => $branch,
                    'nyear' => $year,
                    'ccollegeName' => $college,
                    // 'cpaymentStatus' => $payment,
                    'cemail' => $email,
                    'ccontact' => $contact
                    // 'npaymentTo' => $paymentto
                );
        $query = $this->db->insert('susparticipant',$field);
        if($this->db->affected_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;     
        }
    }

    public function showAllParticipant()
    {
        $this->db->select('susparticipant.id as pid, susparticipant.cstudentName as name,
                            susparticipant.cbranch as branch, susparticipant.nyear as year,
                            susparticipant.ccollegeName as college, susparticipant.cpaymentStatus as paysts,
                            susparticipant.cregisterStatus as regsts, susparticipant.cemail as email, 
                            susparticipant.ccontact as contact');
        $this->db->from('susparticipant');
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


    public function changeRegisterStatus()
    {
        $id = $this->input->post('pid');
        $regsts = $this->input->post('status');
        $sid = $this->session->userdata('sid');
        $rop = "Reg";
        $field = array
                (
                    'cregisterStatus' => $regsts
                );
        $this->db->where('id',$id);
        $query = $this->db->update('susparticipant',$field);
        if($query)
        {
            $updatedlog = $this->updatedBy($sid, $id, $regsts, $rop);
            if($updatedlog)
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


    public function updatedBy($sid, $id, $yon, $rop)
    {
        $sts = "sts";
        $yon = ucfirst($yon);
        $operation = $sts.$yon.$rop;
        $field = array
                (
                    'operation' => $operation,
                    'updatedWhom' => $id,
                    'updatedBy' => $sid
                );
        $query = $this->db->insert('susparticipantoperations',$field);
        if($query)
        {
            return true;
        }
        else
        {
            return false;
        }
        // print_r($operation);
    }

    public function changePaymentStatus()
    {
        $id = $this->input->post('pid');
        $paysts = $this->input->post('status');
        $sid = $this->session->userdata('sid');
        $rop = "Pay";
        $field = array
                (
                    'cpaymentStatus' => $paysts,
                    'npaymentTo' => $sid
                );
        $this->db->where('id',$id);
        $query = $this->db->update('susparticipant',$field);
        if($query)
        {
            $updatedlog = $this->updatedBy($sid, $id, $paysts, $rop);
            if($updatedlog)
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
            // $errNo   = $this->db->_error_number();
            // $errMess = $this->db->_error_message();
            // print_r($errNo);
            // exit();
        }
    }

    public function deleteParticipant()
    {
        $id = $this->input->post('pid');
        $this->db->select('cemail, ccontact');
        $this->db->from('susparticipant');
        $this->db->where('id',$id);
        $query = $this->db->get();
        if($query->num_rows() > 0)
        {
            $this->db->where('id',$id);
            $del = $this->db->delete('susparticipant');
            if($del)
            {
                $delBy = $this->deletedBy($query, $id);
                if($delBy)
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


    public function deletedBy($query, $id)
    {
        $by = $this->session->userdata('sid');
        $field = array
                (
                    // 'crollNo' => $query->row()->crollNo,
                    'cemail' => $query->row()->cemail,
                    'ccontact' => $query->row()->ccontact,
                    'npaticipantId' => $id,
                    'deletedBy' => $by
                ); 
        $delByTble = $this->db->insert('susparticipantdeloperations', $field);
        if($delByTble)
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    public function countTotalPaid()
    {
        $this->db->select('id');
        $this->db->from('susparticipant');
        $this->db->where('cpaymentStatus', 'yes');
        $num_results = $this->db->count_all_results();
        if($num_results >= 0)
        {
            return $num_results;
        }
        else
        {
            return false;
        }
    }

    public function countTotalUnPaid()
    {
        $this->db->select('id');
        $this->db->from('susparticipant');
        $this->db->where('cpaymentStatus', 'no');
        $num_results = $this->db->count_all_results();
        if($num_results >= 0)
        {
            return $num_results;
        }
        else
        {
            return false;
        }
    }

    public function countTotalParticipant()
    {
        $this->db->select('id');
        $this->db->from('susparticipant');
        $num_results = $this->db->count_all_results();
        if($num_results >= 0)
        {
            return $num_results;
        }
        else
        {
            return false;
        }
    }

    public function countTotalRegistered()
    {
        $this->db->select('id');
        $this->db->from('susparticipant');
        $this->db->where('cregisterStatus', 'yes');
        $num_results = $this->db->count_all_results();
        if($num_results >= 0)
        {
            return $num_results;
        }
        else
        {
            return false;
        }
    }

    public function countTotalUnRegistered()
    {
        $this->db->select('id');
        $this->db->from('susparticipant');
        $this->db->where('cregisterStatus', 'no');
        $num_results = $this->db->count_all_results();
        if($num_results >= 0)
        {
            return $num_results;
        }
        else
        {
            return false;
        }   
    }


}
?>