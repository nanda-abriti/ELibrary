<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">        
                <div class="table-responsive">
                <h5 class="text-center">List of Employee Type</h5>
                    <table class="table table-bordered " id="sampleTable">
                        <thead>
                            <tr class="primary">
                                <th>S.No</th>
                                <th>Name </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                // $i=1;
                                // if($cities)
                                // foreach($cities as $city)
                                // {
                            ?>
                            <tr>
                                    <td><?php// echo $i; ?></td>
                                    <td><?php// echo $city->cityname; ?></td>
                                    <td>
                                        <form  style="display:inline;" action="#" method="post">  
                                            <input name="" type="hidden" value="">
                                        <button type="submit" class="btn btn-danger btn-sm fa fa-trash" title="Delete"
                                        onclick="return confirm('Are you sure you want to delete??')"></button>
                                        </form>
                                        
                                        <form  style="display:inline;" action="#" method="post">  
                                            <input name="" type="hidden" value="">
                                        <button type="submit" class="btn btn-info btn-sm fa fa-check" title="Unapprove"></button>
                                        </form>
                                    </td>
                            </tr>
                            <?php 
                                // $i++;
                                // }
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
  