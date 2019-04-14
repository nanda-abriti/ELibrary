<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">
      <h4 class="text-center">View Short News</h4>
      <a href="<?php echo base_url('shortNews/add');?>" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i>Add News</a><br><br>
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Title</th>
                        <th>News By</th>
                        <th>Created At(Date)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $i=1;
                    if($shortNews)
                    {
                        foreach($shortNews as $short)
                        {
                ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $short->ctitle; ?></td>
                        <td><?php echo $short->cnewsBy; ?></td>
                        <td><?php echo $short->createdAt; ?></td>
                        <td>
                        <form action="<?php echo base_url('Adminpanel/shortNewsDelete');?>" method="post">
                        <input type="hidden" name="id" value="<?php echo $short->id;?>" >
                        <button type="submit" name="delete" class="btn btn-danger fa fa-trash" onclick="return confirm('Are you sure you want to delete this?')"></button>
                        </form>
                        </td>
                    </tr>
                <?php
                    $i++;
                    }
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