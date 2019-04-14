<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">
      <h4 class="text-center"> User Type  </h4>
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Department</th>
                        <th>Change Department</th>
                        <th>User Type</th>
                        <th>Change UserType</th>
                    </tr>
                </thead>
                <tbody>
                   
                     <?php
                     $i=1;
                     if($approved)
                     foreach($approved as $approve){
                     ?>
                      <tr>
                      
                        <td><?php echo $i;?></td>
                        <td><?php echo $approve->cstudentName; ?>
                        
                        </td>
                        <td><?php echo $approve->cabbreviation; ?></td>
                        <td>
                        <form action="<?php echo base_url('updateDepartment');?>" method="post">
                        <div class="input-group"> 
                                 <input type="hidden" name="sid" value="<?php echo $approve->id;?>">                           
                                <select class="form-control btn btn-flat" name="deptid">
                                <?php
                                if($departments)
                                foreach($departments as $department){
                                ?>
                                <option value="<?php echo $department->id;?>"><?php echo $department->cabbreviation;?></option>
                                
                                <?php
                                }
                                ?>
                                </select>

                                <span class="input-group-btn">
                                        <button type="submit" name=""  class="btn btn-info btn-flat"><i class="fa fa-send-o"></i>
                                        </button>
                                    </span>
                            </div>
                        </form>
                        </td>
                        <td><?php echo $approve->cuserType; ?></td>
                        <td>
                        <form action="<?php echo base_url('userTypeUpdate');?>" method="post">
                            <div class="input-group"> 
                            <input type="hidden" name="sid" value="<?php echo $approve->id;?>">                           
                                <select class="form-control btn btn-flat" name="utid">
                                <?php
                                if($userTypes)
                                foreach($userTypes as $userType){
                                ?>
                                <option value="<?php echo $userType->id;?>"><?php echo $userType->cuserType;?></option>
                                
                                <?php
                                }
                                ?>
                                </select>

                                <span class="input-group-btn">
                                        <button type="submit" name=""  class="btn btn-success btn-flat"><i class="fa fa-send-o"></i>
                                        </button>
                                    </span>
                            </div>
                        </form>    
                        </td>
                     </tr>
                     <?php
                     $i++;    
                     }
                     ?>
                    
                </tbody>
            </table>
        </div>
      </div>
    </div>
</main>   
<script>
     $(document).ready(function()
  {
    $('#myTable').DataTable();
  });
</script>