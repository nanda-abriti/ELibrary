<body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark nav1">
            <a class="navbar-brand" href="#">Local Rozgar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav pull-right ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('welcome'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#logIn">Log In</a>
                    </li>    
                </ul>
            </div>  
        </nav>
        <br>
        <br><br>

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
                    <form id="myForm" action="<?php echo base_url()?>Welcome/login" method="post"> 
                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" placeholder="" title="Please enter your username"   name="username"  class="form-control">
                            <span class="help-block small">Your unique username</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******"  name="password"  class="form-control">
                            <span class="help-block small">Your strong password</span>
                        </div>
                        
                        <div>
                                <input  name="submit" type="submit" value=" Login " class="btn btn-primary" >
						</div>
						
                    </form>
                </div>               
            </div>
        </div>
    </div>