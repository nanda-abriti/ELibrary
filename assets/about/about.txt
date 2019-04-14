<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GITS E-Library</title>
    
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap4/css/bootstrap.min.css');?>">
    <script src="<?php echo base_url('assets/js/jquery-3.2.1.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.validate.min.js');?>"></script>

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> -->
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script> -->
    <style>
        body{
            background-image: url('<?php echo base_url('assets/image/b2.png');?>');
            background-repeat:no-repeat;
            background-attachment: fixed;
            background-position:center;
            background-attachment:fixed;
            background-size: cover;
            height:400px;
        }
        .box{
            border-radius:30px;
            background-color:#99CCCC;          
        }
        .scroll{
            overflow-y:scroll;
            height:260px;
        }
        .links{
            color:white;

        }
        
        .shortNews{
            height:400px;
            overflow-y:scroll;
        }

        input,select{
            height:33px;
        }

        /*scroll*/
        .scrollbar-deep-purple::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #F5F5F5;
            border-radius: 10px; }

            .scrollbar-deep-purple::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5; }

            .scrollbar-deep-purple::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #512da8; }

            .scrollbar-cyan::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #F5F5F5;
            border-radius: 10px; }

            .scrollbar-cyan::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5; }

            .scrollbar-cyan::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #00bcd4; }

           
            .bordered-deep-purple::-webkit-scrollbar-track {
            -webkit-box-shadow: none;
            border: 1px solid #512da8; }

            .bordered-deep-purple::-webkit-scrollbar-thumb {
            -webkit-box-shadow: none; }

            .bordered-cyan::-webkit-scrollbar-track {
            -webkit-box-shadow: none;
            border: 1px solid #00bcd4; }

            .bordered-cyan::-webkit-scrollbar-thumb {
            -webkit-box-shadow: none; }

            .square::-webkit-scrollbar-track {
            border-radius: 0 !important; }

            .square::-webkit-scrollbar-thumb {
            border-radius: 0 !important; }

            .thin::-webkit-scrollbar {
            width: 6px; }

        /*close scroll*/

        

        @media screen and (max-width: 786px){
            body{
                background-image:none;
                
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md bg-light navbar-light">
        <a class="navbar-brand" href="#">Geetanjali Institute of Technical Studies</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav pull-right ml-auto">
            <li class="nav-item pull-left">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item pull-left">
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

     <!--  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">GITS E-Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav pull-right ml-auto">
            <li class="nav-item pull-left">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item pull-left">
              <a class="nav-link" href="#">About</a>
            </li>
              <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/image/gits.png')?>"
                style="height:50px"></a> 

                <li class="nav-item pull-right">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#signup">Sign Up </a>
                </li>
                <li class="nav-item pull-right">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#logIn">Log In</a>
                </li>   
            </ul>     
          
        </div>  
      </nav> -->

      <div class="container">
       
          <div class="row">
            <!-- <marquee style="color:white;">Welcome to E-Library!</marquee>  -->
                <div class="col-sm-4">

                <div class="modal-dialog modal-dialog-centered box"  style="border-radius:80px;background-color:transparent;">
                    <div class="modal-content" style="background-color:transparent;">
                    
                        <!-- Modal Header -->
                        <button class="btn btn-lg btn-block btn-primary"
                            style="background-color:transparent;border-radius:10px;background-color:#041635;">News</button>
                        <a href="<?php echo $longNews->clink;?>" target="_blank" class="btn btn-lg btn-block btn-primary" 
                            style="border-radius:10px;margin:0;background-color:#000066;white-space:normal;height:100px">    <!--font-size:1.5vw;--> 
                         <?php echo $longNews->ctitle;?>   
                        </a>
                        
                        
                        <!-- Modal body -->
                        <div class="modal-body box scroll scrollbar-cyan bordered-cyan thin" style="border-radius:10px">
                        <img class="col-sm-12" src="<?php echo base_url('assets/image/pic1.jpg');?>" style="height:150px;">
                        <?php echo $longNews->cbody;?>
                        </div>
                        
                        
                        <button class="btn btn-lg btn-block btn-primary" style="border-radius:10px;margin:0;background-color:#000066">By-<?php echo $longNews->cnewsBy;?></button>
                        
                    
                    </div>
                </div>
                  
             </div>
             <div class="col-sm-4">
             <div class="modal-dialog modal-dialog-centered" style="border-radius:10px;background-color:transparent;">
                <div class="modal-content" style="background-color:transparent;">
                
                    <!-- Modal Header -->
                    <a href="#" class="btn btn-lg btn-block btn-primary" style="border-radius:10px;margin:0;background-color:#000033;white-space:normal;">Short News Links</a>
               
                      <div class="shortNews scrollbar-deep-purple thin">     
                        <?php 
                            if($shortNews)
                            foreach($shortNews as $short){
                        ?>    
                            <a href="<?php echo $short->clink;?>" target="_blank" class="btn btn-lg btn-block btn-primary" style="border-radius:10px;margin:0;background-color:#000066; white-space:normal;">
                            <?php echo $short->ctitle;?>
                            </a>
                        <?php
                        } 
                        ?> 
                      </div>
                
                </div>
              </div>
             </div>

             <div class="col-sm-4">
             <div class="modal-dialog modal-dialog-centered" style="border-radius:10px;background-color:transparent;">
                <div class="modal-content" style="background-color:#000066;">
                
                    <!-- Modal Header -->
                  
                    <a href="#" class="btn btn-lg btn-block btn-primary" style="border-radius:10px;margin:0;background-color:#000033;white-space:normal;">Upcoming Events</a>
               
                        <div class="shortNews scrollbar-deep-purple thin">     
                               
                                <a href="https://www.instagram.com/p/BnuuAzSHw6H/?utm_source=ig_share_sheet&igshid=vzna3wh53186" target="_blank" class="btn btn-lg btn-block btn-primary" style="border-radius:10px;margin:0;background-color:#000066; white-space:normal;">
                                   ESPERANZ from 5th october to 6th October, 2018 
                                </a>
                               
                                 <a href="#" target="_blank" class="btn btn-lg btn-block btn-primary" style="border-radius:10px;margin:0;background-color:#000066; white-space:normal;">
                                 Argusoft India Ltd. Pool Campus Interview is schedule in GITS Campus on 24th Sep 2018.
                                </a>
                            
                               
                            </div>

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