<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">        
                <div class="table-responsive">
                <!-- <h5 class="text-center">Your Personal Folder</h5> -->
                <a href="#" data-toggle="modal" data-target="#upload" class="btn btn-primary btn-sm pull-right">
                <i class="fa fa-plus"></i>Upload File</a><br><br>
                    <table class="table table-bordered " id="sampleTable">
                        <thead>
                            <tr class="primary">
                                <th>S.No</th>
                                <th>File Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <?php 
                                if($elements)
                                {
                                    $i=1;
                                    foreach($elements as $element)
                                    {
                            ?>
                    
                                <td><?php echo $i; ?> </td>
                                <td><?php print_r($element);?></td>
                                <td>
                                <form id="Delete" style="display:inline;" action="<?php echo base_url('File/delete_file');?>" method="post">  
                                        <input name="del" type="hidden" value="<?php print_r($element);?>">
                                      <button type="submit" class="btn btn-danger btn-sm fa fa-trash" title="Delete"
                                       onclick="return confirm('Are you sure you want to delete')"></button>
                                    </form>
                                    <a href="<?php echo base_url()?><?php echo $daddress;?>/<?php echo $element;?>" target="_blank" 
                                     class="btn btn-sm btn-warning"><i class="fa fa-download"></i> </a> 
                                </td>
                            </tr>
                            <?php 
                                $i++;
                                    }
                                }    
                            ?>   
                        </tbody>

                    <table>
                 </div>


                   <!--upload-->
     <div class="modal fade" id="upload">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Upload File</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                <?php echo form_open_multipart('Upload/personal_upload');?>
                        <div class="form-group">
                            <label class="control-label" for="password">Upload File</label>
                            <input type="file"  name="userfile"  class="form-control">
                            <span class="help-block small">Upload File</span>
                        </div>
                        
                        <div>
                                <input name="submit" type="submit" value=" Submit " class="btn btn-primary" >
						</div>
						
                    </form>
                </div>               
            </div>
        </div>
    </div>    
    </div>

</main> 

<script>
  $(document).ready(function()
  {
    $('#sampleTable').DataTable();
  });  
</script> 
  