<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">      
            <h5 class="text-center">Approved Students</h5>  
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="sampleTable">
                        <thead>
                            <tr class="primary">
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Roll No</th>
                                <th>Email</th>
                                <?php
                                    if(($this->session->userdata('uid') <= 3) || ($this->session->userdata('uid') == 6))
                                    {
                                ?>
                                <th>Action</th>
                                <?php
                                    }
                                ?>
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
                                <td><?php echo $approve->cstudentEmail; ?></td>
                                
                                <?php
                                    if(($this->session->userdata('uid') <= 3) || ($this->session->userdata('uid') == 6))
                                    {        
                                ?>
                                <td>
                                <?php
                                    if ($this->session->userdata('uid') <= 2) {
                                ?>
                                    <form id="forDelete" style="display:inline;" action="<?php echo base_url('deleteApprove');?>" method="post">  
                                        <input name="rollNo" type="hidden" value="<?php echo $approve->crollNo?>">
                                      <button type="submit" class="btn btn-danger btn-sm fa fa-trash" title="Delete"
                                      onclick="return confirm('Are you sure you want to delete <?php echo $approve->cstudentName; ?>?')"></button>
                                    </form>
                                    <?php
                                    }
                                    ?> 
                                    <?php
                                        if (($this->session->userdata('uid') == 6) || ($this->session->userdata('uid') <= 3)) {
                                    ?>  
                                    <form style="display:inline;" action="<?php echo base_url('studentUnapproval');?>" method="post">
                                        <input name="Lid" type="hidden" value="<?php echo $approve->lid?>">
                                        <button type="submit" class="btn btn-success btn-sm fa fa-close" title="Unapprove"
                                        onclick="return confirm('Are you sure you want to Unapprove <?php echo $approve->cstudentName; ?>?')"></button>  
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
  