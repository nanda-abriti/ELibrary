<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">        
                <div class="table-responsive">
                <h5 class="text-center"><?php echo $heading; ?>  </h5>
                
                    <table class="table table-bordered " id="sampleTable">
                        <thead>
                        
                            <tr class="primary">
                                <th>S.No</th>
                                <th>File Name</th>
                                <th>Uploaded Date</th>
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
                                        date_default_timezone_set("Asia/Calcutta");
                                        $path = $_SESSION['path'];
                            ?>
                    
                                <td><?php echo $i; ?> </td>
                                <td><?php print_r($element);?></td>
                                <td><?php echo date("F d Y H:i:s.",filemtime($path));?></td>
                                <td>
                                    <a href="<?php echo base_url()?><?php echo $daddress;?>/<?php echo $element;?>" class="btn btn-sm btn-warning">
                                    <i class="fa fa-download"></i> </a> 
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

    </div>

     <?php
                    $output = '<table class="table table-bordered " id="sampleTable">
                        <thead>
                        
                            <tr class="primary">
                               
                                <th>File Name</th>
                                <th>Uploaded Date</th>
                            </tr>
                        </thead>
                        <tbody>'; 
                        
                                if($elements)
                                {
                                    date_default_timezone_set("Asia/Calcutta");
                                    
                                    foreach($elements as $element)
                                    {
                                        $out = '<tr>';
                                        $path = $_SESSION['path'];
                                        $out = $out . '<td>' . $element . '</td><td>' . date("F d Y H:i:s.",filemtime($path)) . '</td></tr>';
                                        $output = $output . $out;
                                    }
                                }
                                $output = $output . '</tbody></table>';

                                // echo "hey <br><br>";
                                // echo $output;
                                $this->session->set_userdata('excel', $output);
                            ?>

<!-- <form action="<?php //echo base_url('Convert/excel')?>" method="post"> -->
<!-- <?php echo form_open_multipart('Convert/excel');?>
<input type = "text" name ="output" value ="<?php echo $output; ?>">
<input type = "submit" name="submit" value = "convert to excel">
</form> -->

</main>

<script>
  $(document).ready(function()
  {
    $('#sampleTable').DataTable();
  });  
</script> 
  