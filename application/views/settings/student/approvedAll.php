<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">      
            <h5 class="text-center">All Approved Students</h5>  
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="sampleTable">
                        <thead>
                            <tr class="primary">
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Roll No</th>
                                <th>Department</th>
                                <th>Email</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                                $i=1;
                                if($approves)
                                foreach($approves as $approve)
                                {
                            ?>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $approve->cstudentName; ?></td>
                                <td><?php echo $approve->crollNo; ?></td>
                                <td><?php echo $approve->cabbreviation; ?></td>
                                <td><?php echo $approve->cstudentEmail; ?></td>                                
                                <?php
                                    if($this->session->userdata('uid') <= 2)
                                    {        
                                ?>
                                <td style="width:120px">
                                    <form id="Delete" style="display:inline;" action="<?php echo base_url('deleteApprove');?>" method="post">  
                                        <input name="rollNo" type="hidden" value="<?php echo $approve->crollNo;?>">
                                      <button type="submit" class="btn btn-danger btn-sm fa fa-trash" title="Delete"
                                       onclick="return confirm('Are you sure you want to delete <?php echo $approve->cstudentName; ?>?')"></button>
                                    </form>                   

                                    <form style="display:inline;" action="<?php echo base_url('studentUnapproval');?>" method="post">
                                        <input name="Lid" type="hidden" value="<?php echo $approve->lid;?>">
                                        <button type="submit" class="btn btn-success btn-sm fa fa-close" title="Unapprove"
                                        onclick="return confirm('Are you sure you want to Unapprove <?php echo $approve->cstudentName; ?>?')"></button>  
                                    </form>
                                    <form style="display:inline;" action="<?php echo base_url('AdminCp');?>" method="post">
                                        <input name="lid" type="hidden" value="<?php echo $approve->lid;?>">
                                        <button type="submit" class="btn btn-info btn-sm fa fa-key" title="Change Password"
                                        onclick="return confirm('Are you sure you want to change Password of <?php echo $approve->cstudentName; ?>?')"></button>  
                                    </form>
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
  