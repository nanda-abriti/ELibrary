<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">

        </div>
        <div class="col-sm-4">
            <form action="<?php echo base_url('test/testForm');?>" class="box" method="post">
                <div class="form-group">
                    <label>Select State</label>
                    <select id="selectedstate" class="form-control" name="state" required>
                        <?php
                        if($states){
                        foreach ($states as $state) {
                        ?>
                        <option  value="<?php echo $state->stateid;?>"><?php echo $state->statename;?></option>
                        <?php
                            }
                          }
                        ?>    
                    </select>
                </div>
                <div class="form-group">
                    <label>Select City</label>
                    <select id="selectedcity" class="form-control" name="city" required>
                        <option value="">Select State</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Select Area</label>
                    <select id="selectedarea" class="form-control" name="area" required>
                        <option value="">Select City</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <input type="submit" name="submit" class="btn btn-success btn-block" value="Want to Hire" >
                    </div>
                    <div class="col-sm-6">
                        <input type="submit" name="submit" class="btn btn-success btn-block" value="Want to Work">
                    </div>
                </div>        
            </form>
        </div>
        <!-- <div class="col-sm-1"></div> -->
    </div>
</div>   
