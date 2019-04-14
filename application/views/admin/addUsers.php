<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">
      <h4 class="text-center"> User Registeration   </h4><br><br>
<form id="signUpForm" action="<?php echo base_url('UserAdded');?>" method="post">
    <div class="row">
        <div class="form-group col-sm-6">
            <label class="control-label" for="username">Name</label>
            <input id="sName" type="text sm" placeholder="Your Name" title="Please enter your Name"   name="sName"  class="form-control">
        
        </div>
        <div class="form-group col-sm-6">
                <label class="control-label" for="username">Email</label>
                <input id="sEmail" type="email" placeholder="Your Email" title="Please enter your Email"   name="sEmail"  class="form-control">
                
        </div>
    </div>
    <div class="row">    
        <div class="form-group col-sm-6">
                <label class="control-label">Department</label>
                <select class="btn-block" name="dept" style="height:40px">
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
        <div class="form-group col-sm-6">
                <label class="control-label">User Type</label>
                <select class="btn-block" name="utid" style="height:40px">
                    <?php 
                    if($userTypes)
                    foreach($userTypes as $userType){
                    ?>
                    <option value="<?php echo $userType->id; ?>" selected><?php echo $userType->cuserType; ?></option>
                    <?php
                    }
                    ?>
                </select>                                                
        </div>
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
            <input type="submit" value="Submit" class="btn btn-success">
        </div>
    </form>
  </div>
</main>    