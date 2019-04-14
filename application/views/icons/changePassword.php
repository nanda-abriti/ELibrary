<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">
    <h4 class="text-center">Change Password</h4> <br>
        <form id="changePasswordForm" action="<?php echo base_url('cpSubmit'); ?>" method="post">
           <div class="form-group">
            <label class="label-control col-md-4">Old Password</label>
            <div class="col-md-8">
                <input id="old" type="password" name="old" class="form-control" placeholder="Enter Old Password" required>
             </div>
           </div>
           <div class="form-group">
            <label  class="label-control col-md-4">New Password</label>
            <div class="col-md-8">
                <input id="new" type="password" name="new" class="form-control" placeholder="Enter New Password" required>
             </div>
           </div>
           <div class="form-group">
            <label  class="label-control col-md-4">Confirm New Password</label>
            <div class="col-md-8">
                <input id="confirm" type="password" name="confirm" class="form-control" placeholder="Match Password" required>
             </div>
           </div>
           <div>
              <input type="submit" name="submit" value="Submit" class="btn btn-primary ">
           </div>
        </form>
      </div>
    </div>
</main>      

<script>
    $('#changePasswordForm').validate
    ({
        rules : 
        {
          new :
          {
            minlength : 4
          },
          confirm : 
          {
            equalTo : "#new"
          }
        }
    });
</script>