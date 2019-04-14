<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">        
                <div class="table-responsive">
                <h5 class="text-center">List of States</h5>
                <a href="#" data-toggle="modal" data-target="#add" class="btn btn-primary btn-sm pull-right">
                <i class="fa fa-plus"></i>Add</a><br><br>
                    <table class="table table-bordered " id="sampleTable">
                        <thead>
                            <tr class="primary">
                                <th>S.No</th>
                                <th>State </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                                if($states)
                                foreach($states as $state)
                                {
                            ?>
                            <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $state->statename; ?></td>
                                    <td>
                                        <form  style="display:inline;" action="#" method="post">  
                                            <input name="" type="hidden" value="<?php echo $state->stateid ;?>">
                                        <button type="submit" class="btn btn-info btn-sm fa fa-edit" title="Edit"></button>
                                        </form>

                                        <form  style="display:inline;" action="<?php echo base_url('deleteState');?>" method="post">  
                                            <input name="stateid" type="hidden" value="<?php echo $state->stateid ;?>">
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
                    <h4 class="modal-title">Add State</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                <form action="<?php echo base_url('addState');?>" method="post">
                        <div class="form-group">
                            <label class="control-label" >State</label>
                            <input type="text"  name="state"  class="form-control" required>
                            <span class="help-block small">Add State</span>
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
  