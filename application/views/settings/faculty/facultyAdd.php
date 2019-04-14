<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">
      <h4 class="text-center"> Faculty Registeration   </h4><br><br>
      <form id="signUpForm" action="<?php echo base_url('facultySignUp');?>" method="post">
            <div class="row">
                <div class="form-group col-sm-6">
                    <label class="control-label" for="username">Name</label>
                    <input id="sName" type="text sm" placeholder="Your Name" title="Please enter your Name"   name="sName"  class="form-control" required>
                
                </div>
                <div class="form-group col-sm-6">
                        <label class="control-label" for="username">Email</label>
                        <input id="sEmail" type="email" placeholder="Your Email" title="Please enter your Email"   name="sEmail"  class="form-control" required>
                        
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                        <label class="control-label" for="username">Password</label>
                        <input id="password" type="password" placeholder="******" title=""   name="password"  class="form-control" required>
                        
                </div>
                <div class="form-group col-sm-6">
                        <label class="control-label" for="username">Confirm Password</label>
                        <input id="cpassword" type="password" placeholder="******" title=""   name="cpassword"  class="form-control" required>
                        
                </div>
            </div>
            <div>
                <input type="submit" value="Submit" class="btn btn-success">
            </div>
    </form>
    </div>
</main>        

<script>
    $('#signUpForm').validate
    ({
        rules : 
        {
            password : 
            {
                required: true,
                minlength : 4
            },
            cpassword : 
            {
                required: true,
                equalTo : "#password"
            }
        }
    });
</script>
