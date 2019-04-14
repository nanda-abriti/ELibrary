<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">        
                <div class="table-responsive">
                <h5 class="text-center"><?php echo $heading;?></h5>
                    <table class="table table-bordered " id="sampleTable">
                        <thead>
                            <tr class="primary">
                                <th>S.No</th>
                                <th>Tutorial Name</th>
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
                                <td><a href="<?php echo base_url()?><?php echo $daddress;?>/<?php echo $element;?>" class="btn btn-sm btn-warning">Download</a></td>
                            </tr>
                            <?php 
                                $i++;
                                    }
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
  