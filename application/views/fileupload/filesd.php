<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">        
                <div class="table-responsive">
                <h5 class="text-center"><?php echo $heading; ?>  </h5>
                <?php
                    $redirectto = $this->session->userdata('redirectto');
                    $var = preg_split("#/#", $redirectto);
                    $share = end($var);
                ?>
                    <table class="table table-bordered " id="sampleTable">
                        <thead>
                            <tr class="primary">
                                <th>S.No</th>
                                <?php if(($share == "stutofac") && (($this->session->userdata('uid') == 2) || ($this->session->userdata('uid') == 3))){?>
                                <th>Roll No</th>
                                <?php } ?>
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
                                        $elementarray = preg_split("#_#", $element);
                                        $rollno = $elementarray[0];
                            ?>
                    
                                <td><?php echo $i; ?> </td>
                                <?php if(($share == "stutofac") && (($this->session->userdata('uid') == 2) || ($this->session->userdata('uid') == 3))){?>
                                <td><?php echo $rollno; ?> </td>
                                <?php } ?>
                                <td><?php print_r($element);?></td>
                                <td><?php echo date("F d Y H:i:s.",filemtime($path));?></td>
                                <td>
                                <form id="Delete" style="display:inline;" action="<?php echo base_url('File/delete_file');?>" method="post">  
                                        <input name="del" type="hidden" value="<?php print_r($element);?>">
                                      <button type="submit" class="btn btn-danger btn-sm fa fa-trash" title="Delete"
                                       onclick="return confirm('Are you sure you want to delete')"></button>
                                    </form>
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

</main> 

<script>
  $(document).ready(function()
  {
    $('#sampleTable').DataTable();
  });  
</script> 
  