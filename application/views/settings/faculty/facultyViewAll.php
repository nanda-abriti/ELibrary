<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">
      <h4 class="text-center">GITS Faculty List  </h4>
      <a href="<?php echo base_url('AddFaculty');?>" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i>Add Faculty</a><br><br>
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th> Email </th>
                        <th>Department</th>
                        <th>User Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                        $i=1;
                        if($faculties)
                        foreach($faculties as $faculty){
                    ?>
                    <tr>
                    <td><?php echo $i ;?></td>
                    <td><?php echo $faculty->cstudentName ;?></td>
                    <td><?php echo $faculty->cstudentEmail ;?></td>
                    <td><?php echo $faculty->cdepartmentName ;?></td>
                    <td><?php echo $faculty->cuserType ;?></td>
                    <td>
                    <form  style="display:inline;" action="<?php echo base_url('deleteFaculty');?>" method="post">  
                        <input name="fid" type="hidden" value="<?php echo $faculty->id ?>">
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete">Delete</button>
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