<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
    <div class="col-sm-12" style="padding:50px 30px">
    <h5 class="text-center"><?php echo $heading; ?>  </h5>
        <form action="<?php echo base_url('File/stutofac');?>" method="post" class="pull-left">
        
        <label class="control-label">Faculty Name</label>
        <div class="input-group">
            <select class="form-control btn btn-flat" name="facultyname">
            <?php
                if($faculty)
                foreach($faculty as $faculties)
                {
            ?>
                <option value="<?php echo $faculties->cstudentName;?>"><?php echo $faculties->cstudentName;?></option>
            <?php
                }
            ?> 

            </select>
            <span class="input-group-btn">
                <button type="submit" name="submit"  class="btn btn-flat btn-primary"><i class="fa fa-send-o"></i>
                </button>
              </span>
             </div> 
        </form>

       <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <select class="form-control btn btn-flat">
              <option>2018-2019</option>
          </select>
          <span class="input-group-btn">
                <button type="submit" name=""  class="btn btn-flat"><i class="fa fa-send-o"></i>
                </button>
              </span>
        </div>
      </form>     -->