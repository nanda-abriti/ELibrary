<div class="container-fluid">
    <h4 class="text-center">Hire</h4>
    <a href="#" data-toggle="modal" data-target="#work" class="btn btn-primary pull-right">Register your Work</a><br><br><br><br>

    <?php 
        
    ?>

    

    <div class="row">
        <div class="col-sm-3">
            <!-- <div class="type"> -->
                <div class="card ">
                    <img class="card-img-top" src="<?php echo base_url('assets/image/types/labour.jpg');?>" alt="" style="width:100%;height:270px;padding:25px">
                    <div class="card-body">
                        <h4 class="card-title text-center">Hire</h4>
                    </div>
                </div>
            <!-- </div> -->
        </div>

        <div class="col-sm-3">
            <!-- <div class="type"> -->
                <div class="card ">
                    <img class="card-img-top" src="<?php echo base_url('assets/image/types/maid.jpg');?>" alt="" style="width:100%;height:270px;padding:25px">
                    <div class="card-body">
                        <h4 class="card-title text-center">Hire</h4>
                    </div>
                </div>
            <!-- </div> -->
        </div>

        <div class="col-sm-3">
            <!-- <div class="type"> -->
                <div class="card ">
                    <img class="card-img-top" src="<?php echo base_url('assets/image/types/beautician.jpg');?>" alt="" style="width:100%;height:270px;padding:25px">
                    <div class="card-body">
                        <h4 class="card-title text-center">Hire</h4>
                    </div>
                </div>
            <!-- </div> -->
        </div>

        <div class="col-sm-3">
            <!-- <div class="type"> -->
                <div class="card ">
                    <img class="card-img-top" src="<?php echo base_url('assets/image/types/cook.jpg');?>" alt="" style="width:100%;height:270px;padding:25px">
                    <div class="card-body">
                        <h4 class="card-title text-center">Hire</h4>
                    </div>
                </div>
            <!-- </div> -->
        </div>

    </div> 
    <br>
    <div class="row">
        <div class="col-sm-3">
            <!-- <div class="type"> -->
                <div class="card ">
                    <img class="card-img-top" src="<?php echo base_url('assets/image/types/teacher.jpg');?>" alt="" style="width:100%;height:270px;padding:25px">
                    <div class="card-body">
                        <h4 class="card-title text-center">Hire</h4>
                    </div>
                </div>
            <!-- </div> -->
        </div>

        <div class="col-sm-3">
            <!-- <div class="type"> -->
                <div class="card ">
                    <img class="card-img-top" src="<?php echo base_url('assets/image/types/painter.jpg');?>" alt="" style="width:100%;height:270px;padding:25px">
                    <div class="card-body">
                        <h4 class="card-title text-center">Hire</h4>
                    </div>
                </div>
            <!-- </div> -->
        </div>

        <div class="col-sm-3">
            <!-- <div class="type"> -->
                <div class="card ">
                    <img class="card-img-top" src="<?php echo base_url('assets/image/types/driver.jpeg');?>" alt="" style="width:100%;height:270px;padding:25px">
                    <div class="card-body">
                        <h4 class="card-title text-center">Hire</h4>
                    </div>
                </div>
            <!-- </div> -->
        </div>

        <div class="col-sm-3">
            <!-- <div class="type"> -->
                <div class="card ">
                    <img class="card-img-top" src="<?php echo base_url('assets/image/types/carpenter.jpg');?>" alt="" style="width:100%;height:270px;padding:25px">
                    <div class="card-body">
                        <h4 class="card-title text-center">Hire</h4>
                    </div>
                </div>
            <!-- </div> -->
        </div>

    </div>  
    
</div>

<!--work-->
<div class="modal fade" id="work">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Register Your Work </h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                 </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="control-label" for="">Name</label>
                                    <input type="text" placeholder="Enter your Name" title="Please enter your username"   name="name"  class="form-control">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="control-label" for="">Work Type</label>
                                    <select class="form-control" name="name">
                                        <option>Labour</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="control-label" for="">Mobile No</label>
                                    <input type="text" placeholder="Enter your Phone No" title="Please enter your Phone No"   name="no"  class="form-control">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="control-label" for=""> Email</label>
                                    <input type="text" placeholder="Enter your Email" title="Please enter your  Email"   name="mail"  class="form-control">
                                </div>
                           </div>
                           <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="control-label" for="">No of Employees</label>
                                    <input type="text" placeholder="Enter No of Employees" title="Please enter No of Employees"   name="no"  class="form-control">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="control-label" for=""> No of Days</label>
                                    <input type="text" placeholder="Enter no of days" title="Please enter no of days"   name="mail"  class="form-control">
                                </div>
                           </div>

                           <div>
                               <input type="submit" class="btn btn-success" value="Submit">
                          </div>

                        </form>    
                    </div>    
            </div>
        </div>
 </div>    