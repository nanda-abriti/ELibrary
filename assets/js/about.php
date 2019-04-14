<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About-Us | GITS E-Library</title>
    
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap4/css/bootstrap.min.css');?>">
    <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.validate.min.js');?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css');?>">
	
	 <link rel="stylesheet" href="css/style.css">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> -->
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> -->
  
</head>
<body>
 <nav class="navbar navbar-expand-md bg">
        <a class="navbar-brand" href="index.html"><img class="gits_logo" src="<?php echo base_url('assets/image/GITS-logo.png')?>"> E-Library</a>
        <button class="navbar-toggler" style="background-color:#fff;" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav pull-right ml-auto">
            <li class="nav-item pull-left">
              <a class="nav-link" href="<?php echo base_url('Welcome');?>">Home</a>
            </li>
            <li class="nav-item pull-left active">
              <a class="nav-link" href="<?php echo base_url('Welcome/about');?>">About</a>
            </li>
             <!-- <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/image/gits.png')?>"
                style="height:50px"></a> -->

                <li class="nav-item pull-right">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#signup">Sign Up </a>
                </li>
                <li class="nav-item pull-right">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#logIn">Log In</a>
                </li>   
            </ul>     
          
        </div>  
      </nav>

    

      <div class="container">
       
          <div class="row">
            <!-- <marquee style="color:white;">Welcome to E-Library!</marquee>  -->
           <div class="card">
  <div class="header">
    <h1>About Us</h1>
  </div>

  <div class="container">
  <div class="row">
    <div class="col-sm-4">
    <h2>E-Library</h2>
	<p>cbdkjcbdskjnckjbn</p>
	</div>
    <div class="col-sm-4">
    <h2>Our Services</h2>
	<ul>
	  <p>Notes & NK</p>
	  <p>To Share/Store Files</p>
	  <p>For online Assignment</p>
	  <p>Motivational Movies</p>
	</ul>
	</div>
	<div class="col-sm-4">
    <h2>Our Team</h2>
	<ul>
	  <p>Sorabh Sukla</p>
	  <p>To Share/Store Files</p>
	  <p>For online Assignment</p>
	  <p>Motivational Movies</p>
	</ul>
	</div>
  </div>
  <div class="row">
    <p>Gil or The Geetanjali Innovation Lab, the place where dreams come true, ideas beacome reality and students beacome engineers.<br>We aspire to bring out the best of the ability of all the students by providing them the area where they can wxplore and create miracles.We provide best faculty support, all new technological equipement and complete freedom to a student to work on hid idea to to achieve all that he dreams of.<br><b>"If you set your goals ridiculously highand its a failure, you will fail above everyone's success."</b></p>
  </div>
  
</div>
         
        </div>   
     </div>
</div>
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
                    <form id="myForm" action="http://172.16.50.50/Welcome/clogin" method="post"> 
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
                    <h4 class="modal-title">Please Sign Up Here</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                 <div class="modal-body">
                        <form id="signUpForm" action="http://172.16.50.50/Welcome/csignUp" method="post">
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
                                                                                                    <option value="1" selected>CSE</option>
                                                                                                        <option value="2" selected>ECE</option>
                                                                                                        <option value="3" selected>EE</option>
                                                                                                        <option value="4" selected>ME</option>
                                                                                                        <option value="5" selected>AE</option>
                                                                                                        <option value="6" selected>CE</option>
                                                                                                        <option value="7" selected>MCA</option>
                                                                                                        <option value="8" selected>MBA</option>
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
    $(".box").mouseover(function(){
    
        $(".box").css("height","330px");
    });
    $(".box").mouseout(function(){
    
        $(".box").css("height","260px");
});
</script> -->

</body>
</html>