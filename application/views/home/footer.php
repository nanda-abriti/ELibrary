<!--login-->
     <div class="modal fade" id="logIn">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Log In</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <form id="myForm" action="<?php echo base_url()?>Welcome/clogin" method="post"> 
                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" placeholder="Your Roll No" title="Please enter your username"   name="username"  class="form-control">
                            <span class="help-block small">Your unique username</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******"  name="password"  class="form-control">
                            <span class="help-block small">Your strong password</span>
                        </div>
                        
                        <div>
                                <input id="lgnbtn" name="submit" type="submit" value=" Login " class="btn btn-primary" onclick="check()">
						</div>
						
                    </form>
                </div>               
            </div>
        </div>
    </div>

    <!--sign up-->
    <div class="modal fade" id="signup">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo $sign_up;?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                 <div class="modal-body">
                        <form id="signUpForm" action="<?php echo base_url('Welcome/csignUp');?>" method="post">
                                        <div class="form-group">
                                            <label class="control-label" for="username">Name</label>
                                            <input id="sName" type="text sm" placeholder="Your Name" title="Please enter your Name"   name="sName"  class="form-control">
                                        
                                        </div>
                                        <div class="form-group">
                                                <label class="control-label" for="username">Roll No</label>
                                                <input id="sRollNo" type="text" placeholder="Your Roll No" title="Please enter your Roll No"   name="sRollNo"  class="form-control">
                                                
                                        </div>
                                        <div class="form-group">
                                                <label class="control-label">Department</label>
                                                <select class="btn-block" name="dept">
                                                   <?php 
                                                    if($departments)
                                                    foreach($departments as $department){
                                                    ?>
                                                    <option value="<?php echo $department->id; ?>" selected><?php echo $department->cabbreviation; ?></option>
                                                    <?php
                                                    }
                                                    ?>                                                   
                                                </select>                                                
                                        </div>
                                        <div class="form-group">
                                                <label class="control-label" for="username">Email</label>
                                                <input id="sEmail" type="email" placeholder="Your Email" title="Please enter your Email"   name="sEmail"  class="form-control">
                                                
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-sm-6">
                                                    <label class="control-label" for="username">Password</label>
                                                    <input id="password" type="password" placeholder="******" title=""   name="password"  class="form-control">
                                                    
                                            </div>
                                            <div class="form-group col-sm-6">
                                                    <label class="control-label" for="username">Confirm Password</label>
                                                    <input id="cpassword" type="password" placeholder="******" title=""   name="cpassword"  class="form-control">
                                                    
                                            </div>
                                        </div>
                                        <div>
                                            <input type="submit" value="Submit" class="btn btn-sm btn-block btn-success">
                                        </div>
                                    </form>
                </div>               
            </div>
        </div>
    </div> 
  <div class="footer">
		<footer >copyright &copy; gil 2K19.</footer>
        </div>
<script>
    $('#signUpForm').validate
    ({
        rules : 
        {
            sName : "required",
            sRollNo : "required",
            sEmail : "required",
            password : 
            {
                required: true,
                minlength : 4
            },
            cpassword : 
            {
                required: true,
                // minlength : 6,
                equalTo : "#password"
            }
        }
    });
</script>

<!-- <script>
    $(". ").mouseover(function(){
    
        $(". ").css("height","330px");
    });
    $(". ").mouseout(function(){
    
        $(". 1").css("height","260px");
});
</script> -->

</body>
</html>