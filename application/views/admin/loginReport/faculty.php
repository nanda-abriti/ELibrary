<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">
      <h4 class="text-center"> Faculty Logged In  </h4>
      <div class="widget-small info coloured-icon pull-right" style="height:40px"><i class="icon fa fa-users"></i>
              <div class="info">
                <h4>Faculty</h4>
                <p><b><?php echo $noOfUsers;?></b></p>
              </div>
            </div>
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Last Log In Time  </th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                   $i=1;
                   if($logInTimes)
                   foreach($logInTimes as $logInTime){
                   ?>
                   <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $logInTime->cfacultyName;?></td>
                    <td><?php echo $logInTime->cfacultyEmail;?></td>
                    <td><?php echo $logInTime->cloginTime;?></td>
                   </tr>
                   <?php
                   $i++;
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