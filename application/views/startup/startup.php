<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">        
                <div class="table-responsive">
                <h5 class="text-center">Start Up Summit</h5><br>
              <div style="margin-left:3%; margin-bottom:1%;">
                <b>Pay</b><p style="color:red; display:inline;">*</p> = Payment Status &nbsp;&nbsp;
                <b>UPay</b><p style="color:red; display:inline;">*</p> = Payment Update &nbsp;&nbsp;
                <b>Reg</b><p style="color:red; display:inline;">*</p> = Registration Status &nbsp;&nbsp;
                <b>Y</b><p style="color:red; display:inline;">*</p> = Year &nbsp;&nbsp;
                <b>U Register</b><p style="color:red; display:inline;">*</p> = Registration Update &nbsp;&nbsp;
            </div>
                <a href="#" data-toggle="modal" data-target="#add" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i>Add</a><br><br>
                    <table class="table table-bordered " id="sampleTable">
                        <thead>
                            <tr class="primary">
                                <th>S.No.</th>
                                <th>Id</th>
                                <th>Name</th>
                                <th>College Name</th>
                                <th>Branch</th>
                                <th>Y</th>
                                <th>Contact No</th>
                                <!-- <th>Email</th> -->
                                <th>Pay</th>
                                <th>Reg</th>
                                <?php   
                                    if(($this->session->userdata('uid') == 1) || ($this->session->userdata('sid') == 305) ||
                                    ($this->session->userdata('sid') == 221) || ($this->session->userdata('sid') == 167)) { 
                                ?>
                                <th>UPay </th>
                                <?php
                                    }
                                 ?> 
                                 <?php
                                    if(($this->session->userdata('uid') == 1) || ($this->session->userdata('uid') == 6) || ($this->session->userdata('sid') == 305) ||
                                    ($this->session->userdata('sid') == 221) || ($this->session->userdata('sid') == 167)) { 
                                 ?>
                                <th>U Register</th>
                                <?php
                                    }
                                 ?>   
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                    $i=1;
                                    if($participants)
                                    foreach($participants as $participant){
                                ?>
                                <td><?php echo $i;?></td> 
                                <td>GSS18<?php echo
                                 $participant->pid;?></td> 
                                <td><?php echo ucfirst($participant->name);?></td>  
                                <td><?php echo ucfirst($participant->college);?></td>  
                                <td><?php echo ucfirst($participant->branch);?></td>     
                                <td><?php echo $participant->year;?></td>  
                                <td><?php echo $participant->contact;?></td>  
                                <!-- <td><?php //echo $participant->email;?></td> -->
                                <td><?php echo ucfirst($participant->paysts);?></td>
                                <td><?php echo ucfirst($participant->regsts);?></td>
                                <?php   
                                    if(($this->session->userdata('uid') == 1) || ($this->session->userdata('sid') == 305) ||
                                    ($this->session->userdata('sid') == 221) || ($this->session->userdata('sid') == 167)) { 
                                ?>
                                <td>
                                          <form style="display:inline;" action="<?php echo base_url('gitsstartup/paymentStatusChange');?>" method="post">
                                             <input name="status" type="hidden" value="Yes">
                                            <input name="pid" type="hidden" value="<?php echo $participant->pid?>">
                                            <button type="submit" class="btn btn-warning btn-sm fa fa-check" title="Payment Update"></button>  
                                        </form>
                                </td>
                                <?php
                                    }
                                 ?> 
                                 <?php
                                    if(($this->session->userdata('uid') == 1) || ($this->session->userdata('uid') == 6) || ($this->session->userdata('sid') == 305) ||
                                    ($this->session->userdata('sid') == 221) || ($this->session->userdata('sid') == 167)) { 
                                 ?>        
                                <td>
                                        <form style="display:inline;" action="<?php echo base_url('gitsstartup/regStatusChange');?>" method="post">
                                              <input name="status" type="hidden" value="Yes">
                                            <input name="pid" type="hidden" value="<?php echo $participant->pid?>">
                                            <button type="submit" class="btn btn-success btn-sm fa fa-check" title="Approve">
                                            </button>  
                                        </form>
                                

                                        <?php
                                            if(($this->session->userdata('uid') == 1) || ($this->session->userdata('uid') == 6) ) { 
                                        ?> 
                                        <form style="display:inline;" action="<?php echo base_url('gitsstartup/deleteUser');?>" method="post">
                                            <input name="pid" type="hidden" value="<?php echo $participant->pid?>">
                                            <button type="submit" class="btn btn-danger btn-sm fa fa-trash" title="Delete"
                                            onclick="return confirm('Are you sure you want to delete this?')"></button>  
                                        </form>
                                        <?php
                                            }
                                        ?> 
                                </td>
                                 <?php
                                    }
                                ?> 
                             </tr>
                             <?php
                                $i++;
                                }
                             ?>  
                        </tbody>
      

                    <table>
                 </div>
                      
    </div>

</main> 

<script>
  $(document).ready(function()
  {
    $('#sampleTable').DataTable();
  });  
</script> 
  
  <div class="modal fade" id="add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">

                 <form  action="<?php echo base_url('gitsstartup/addParticipant');?>" method="post">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="" class="label-control">Name<p style="color:red;display:inline">*</p></label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name " required="required">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="" class="label-control ">Year<p style="color:red;display:inline">*</p></label>
                                    <input type="number" name="year" class="form-control" placeholder="Enter Year" required="required">
                            </div>
                       </div> 
                       <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="" class="label-control ">Branch<p style="color:red;display:inline">*</p></label>
                                    <select class="form-control" name="branch">
                                        <option value="CSE">CSE</option>
                                        <option value="EC">EC</option>
                                        <option value="EE">EE</option>
                                        <option value="Civil">Civil</option>
                                        <option value="ME">ME</option>
                                        <option value="AE">AE</option>
                                    <select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="" class="label-control">College Name<p style="color:red;display:inline">*</p></label>
                                    <input type="text" class="form-control" name="college"  placeholder="" required="required"></textarea>
                            </div>
                        </div>
                        <div class="row">    
                            <div class="form-group col-sm-6">
                                <label for="" class="label-control">Email<p style="color:red;display:inline">*</p></label>
                                    <input type="email" class="form-control" name="email"  placeholder="" required="required"></textarea>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="" class="label-control">Contact No <p style="color:red;display:inline">*</p></label>
                                    <input type="number" class="form-control" name="contact"  placeholder="" required="required"></textarea>
                            </div>
                        </div>    
                       
                        <div class="form-group">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        </div>
        </form>

                </div>               
            </div>
        </div>
    </div>    
    </div>