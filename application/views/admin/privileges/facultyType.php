<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">
      <h4 class="text-center">Faculty  Log In </h4>
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                     $i=1;
                     if($approved)
                     foreach($approved as $approve){
                     ?>
                      <tr>
                      <form action="<?php echo base_url('userTypeUpdateFaculty');?>" method="post">
                        <td><?php echo $i;?></td>
                        <td><?php echo $approve->cfacultyName; ?>
                        <input type="hidden" name="fid" value="<?php echo $approve->fid;?>">
                        </td>
                        <td><?php echo $approve->cfacultyEmail; ?></td>
                        <td><?php echo $approve->cuserType; ?></td>
                        <td>
                        
                            <div class="input-group">                            
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