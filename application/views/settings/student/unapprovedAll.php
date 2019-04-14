<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">   
      <h5 class="text-center">Unapproved Students</h5>     
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="sampleTable">
                        <thead>
                            <tr class="primary">
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Roll No</th>
                                <th>Department</th>
                                <th>Email</th>
                                <!-- <th style="display:none;">loginid</th> -->
                                <th style="display:none;">studentid</th>
                                <th style="display:none;">usertypeid</th> 
                                <th>Action</th>                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <?php
                                $i=1;
                                if($unApproves)
                                foreach($unApproves as $unApprove)
                                {
                            ?>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $unApprove->cstudentName; ?></td>
                                <td><?php echo $unApprove->crollNo; ?></td>
                                <td><?php echo $unApprove->cabbreviation; ?></td>
                                <td><?php echo $unApprove->cstudentEmail; ?></td>
                                <td style="display:none;"><?php echo $unApprove->id?></td>
                                <td style="display:none;"><?php echo $unApprove->nuserTypeId?></td> 
                                <td>
                                    <!-- <a href="#" title="Edit" class="btn btn-warning btn-sm fa fa-pencil" title="Edit"></a> -->
                                    <form id="forDelete" style="display:inline;" action="<?php echo base_url('deleteUnapprove');?>" method="post">  
                                        <input name="rollNo" type="hidden" value="<?php echo $unApprove->crollNo?>">
                                      <button type="submit" class="btn btn-danger btn-sm fa fa-trash" title="Delete"
                                      onclick="return confirm('Are you sure you want to delete <?php echo $unApprove->cstudentName; ?>?')"></button>
                                    </form>
                                    
                                    <form id="forApproval" style="display:inline;" action="<?php echo base_url('studentApproval');?>" method="post">
                                        <input name="LID" type="hidden" value="<?php echo $unApprove->lid?>">
                                        <button type="submit" class="btn btn-success btn-sm fa fa-check" title="Approve"
                                        onclick="return confirm('Are you sure you want to Approve <?php echo $unApprove->cstudentName; ?>?')"></button>                                          
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

<script>
  $(document).ready(function()
  {
    $('#sampleTable').DataTable();
  }); 


</script> 
  