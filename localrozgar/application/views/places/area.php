<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">        
                <div class="table-responsive">
                <h5 class="text-center">List of Area</h5>
                <a href="#" data-toggle="modal" data-target="#add" class="btn btn-primary btn-sm pull-right">
                <i class="fa fa-plus"></i>Add</a><br><br>
                    <table class="table table-bordered " id="sampleTable">
                        <thead>
                            <tr class="primary">
                                <th>S.No</th>
                                <th>Area </th>
                                <th>City </th>
                                <th>State </th>
                                <th>Pincode </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $i=1;
                                if($areas)
                                foreach($areas as $area)
                                {
                            ?>
                            <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $area->areaname; ?></td>
                                    <td><?php echo $area->cityname; ?></td>
                                    <td><?php echo $area->statename; ?></td>
                                    <td><?php echo $area->pincode; ?></td>
                                    <td>
                                        <form  style="display:inline;" action="#" method="post">  
                                            <input name="state" type="hidden" value="<?php echo $area->stateid ;?>">
                                            <input name="city" type="hidden" value="<?php echo $area->cityid ;?>">
                                            <input name="area" type="hidden" value="<?php echo $area->areaid ;?>">
                                        <button type="submit" class="btn btn-info btn-sm fa fa-edit" title="Edit"></button>
                                        </form>

                                        <form  style="display:inline;" action="<?php echo base_url('deleteArea');?>" method="post">  
                                            <input name="stateid" type="hidden" value="<?php echo $area->stateid ;?>">
                                            <input name="cityid" type="hidden" value="<?php echo $area->cityid ;?>">
                                            <input name="areaid" type="hidden" value="<?php echo $area->areaid ;?>">
                                        <button type="submit" class="btn btn-danger btn-sm fa fa-trash" title="Delete"
                                        onclick="return confirm('Are you sure you want to delete??')"></button>
                                        </form>
                                    </td>
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

<!--add-->
<div class="modal fade" id="add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Area</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                <form action="<?php echo base_url('addArea');?>" method="post">
                                
                    <?php 
                        if($this->session->userdata('usertypeid') < 4)  {
                    ?>        
                        <div class="form-group">
                            <label class="control-label" >State</label>
                            <select  name="state" id="selectedstate" class="form-control" required>
                                    <?php
                                if($states){
                                foreach ($states as $state) {
                                ?>
                                <option  value="<?php echo $state->stateid;?>"><?php echo $state->statename;?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                            <span class="help-block small">Add State</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" >City</label>
                            <select id="selectedcity" name="city" class="form-control" required>
                                <option value="">Select State</option>
                            </select>
                            <span class="help-block small">Add City</span>
                        </div>
                        <?php
                            }
                         ?>
                             
                        <?php 
                         if(($this->session->userdata('usertypeid') == 4) || ($this->session->userdata('usertypeid') == 5))  {
                        ?>
                        <div class="form-group">
                            <label class="control-label" >State</label>
                            <input type="text" name="statename"  class="form-control" value="<?php echo $this->session->userdata('statename'); ?>" readonly>
                            <input type="hidden" name="state"  value="<?php echo $this->session->userdata('stateid'); ?>">
                        </div>
                        <?php
                         }
                        ?> 
                        <?php 
                         if($this->session->userdata('usertypeid') == 4)  {
                        ?>
                        <div class="form-group">
                            <label class="control-label" >City</label>
                            <select id="selectedcity" name="city" class="form-control" required>
                                <option value="">Select City</option>
                                <?php
                                    if($cities)
                                    foreach($cities as $city){
                                ?>
                                <option value="<?php echo $city->cityid; ?>"><?php echo $city->cityname; ?></option>
                                <?php
                                    }
                                 ?>   
                            </select>
                            <span class="help-block small">Add City</span>
                        </div>
                        <?php
                         }
                         ?>
                              
                       
                               
                         <?php 
                         if($this->session->userdata('usertypeid') == 5 )  {
                        ?>
                        <div class="form-group">
                            <label class="control-label" >City</label>
                            <input type="text" name="cityname" class="form-control" value="<?php echo $this->session->userdata('cityname'); ?>" readonly>
                            <input type="hidden" name="city" value="<?php echo $this->session->userdata('cityid'); ?>">
                        </div>
                     <?php
                         }
                      ?> 

                        <div class="form-group">
                            <label class="control-label" >Area</label>
                            <input type="text"  name="area"  class="form-control" required>
                            <span class="help-block small">Add Area</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" >Pin Code</label>
                            <input type="number"  name="pin"  class="form-control" required>
                            <span class="help-block small">Add Pincode</span>
                        </div>
                        <div>
                                <input name="submit" type="submit" value=" Submit " class="btn btn-primary" >
						</div>
				  
                    </form>
                </div>               
            </div>
        </div>
    </div> 


<script>
  $(document).ready(function()
  {
    $('#sampleTable').DataTable();
  });  
</script> 
  