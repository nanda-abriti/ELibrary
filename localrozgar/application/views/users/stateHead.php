<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12">        
                <div class="table-responsive">
                <h5 class="text-center">List of State Head</h5>
                <a href="#" data-toggle="modal" data-target="#add" class="btn btn-primary btn-sm pull-right">
                <i class="fa fa-plus"></i>Add</a><br><br>
                    <table class="table table-bordered " id="sampleTable">
                        <thead>
                            <tr class="primary">
                                <th>S.No</th>
                                <th> Name</th>
                                <th>State </th>
                                <th> Contact No</th>
                                <th> Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $i=1;
                                if($stateheads)
                                foreach($stateheads as $statehead)
                                {
                            ?>
                            <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $statehead->name; ?></td>
                                    <td><?php echo $statehead->statename; ?></td>
                                    <td><?php echo $statehead->contact; ?></td>
                                    <td><?php echo $statehead->email; ?></td>
                                    <td>
                                        <form  style="display:inline;" action="<?php //echo base_url('');?>" method="post">  
                                            <input name="" type="hidden" value="<?php echo $statehead->contact ;?>">
                                        <button type="submit" class="btn btn-info btn-sm fa fa-edit" title="Edit"></button>
                                        </form>

                                        <form  style="display:inline;" action="<?php echo base_url('delStatehead');?>"  method="post">  
                                            <input name="contact" type="hidden" value="<?php echo $statehead->contact ;?>">
                                        <button type="submit" class="btn btn-danger btn-sm fa fa-trash" title="Delete"
                                        onclick="return confirm('Are you sure you want to delete??')"></button>
                                        </form>
                                    </td>
                            </tr>
                            <?php 
                                $i++;
                                }
                            ?>
                        </tbody>

                    <table>
                 </div>
                      
    </div>

</main> 

<script>
  $(document).ready(function()
  {
    $('#sampleTable').DataTable();
  });  
</script> 
  
  <!--add-->
<div class="modal fade" id="add">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add State Head</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                <form id="addSHead" action="" method="post">              <!--onsubmit="return validateForm()"-->
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="control-label" >Name</label>
                                <input type="text"  name="name"  class="form-control" required>
                                <span class="help-block small">Enter Name</span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="control-label" >Contact No</label>
                                <input type="number" id="contact" name="contact"  class="form-control" min="0" required>
                                <span class="help-block small">Enter Contact No</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label class="control-label" > Email</label>
                                <input type="email"  name="email"  class="form-control" required>
                                <span class="help-block small">Enter Email </span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Select State</label>
                                <select id="selectedstate" name="state" class="form-control" required>
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
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label>Select City</label>
                                <select id="selectedcity" name="city" class="form-control" required>
                                    <option value="">Select State</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>Select Area</label>
                                <select id="selectedarea" name="area" class="form-control" required>
                                    <option value="">Select City</option>
                                </select>
                            </div>
                        </div>
                        <div>
                                <input id="form-submit" name="submit" type="submit" value=" Submit " class="btn btn-primary" >
                        </div>
                        
                    </form>
						
                    </form>
                </div>               
            </div>
        </div>
    </div> 

<script>
    $('document').ready(function()
    {
        var contact_state = false;
        
        $('#contact').on('blur', function()
        {
            var contact = $('#contact').val();
            var firstdigit = contact.toString()[0];
            if (contact == '') 
            {
                contact_state = false;
                return;
            }
            else if (contact.toString().length != 10 || contact == 0000000000 || firstdigit <= 0)  
            {
                contact_state = false;
                $('#contact').removeClass("form_success");
                $('#contact').addClass("form_error");                       
                $('#contact').siblings("span").text('Sorry... wrong contact');
                return;
            }
            $.ajax
            ({
                url: '<?php echo base_url('test/contactCheck');?>',
                type: 'post',
                dataType: 'json',
                data: 
                {
                    // 'contact_check' : 1,
                    'contact' : contact,
                },
                success: function(response)
                {
                    if (response.success)                              
                    {
                        contact_state = false;
                        $('#contact').removeClass("form_success");
                        $('#contact').addClass("form_error");                       
                        $('#contact').siblings("span").text('Sorry... contact already exists');
                        // function noenter() {
                        //     return !(window.event && window.event.keyCode == 13); }
                        // $('#contact').val("");
                    }
                    else 
                    {
                        contact_state = true;
                        $('#contact').removeClass("form_error");
                        $('#contact').addClass("form_success");
                        $('#contact').siblings("span").text('OK');
                    }
                }
            });
        });

        $('#form-submit').on('click', function()
        {
            // alert('ok');
            if (contact_state == false) 
            {
                alert('Fix the errors in the form first');
                // $('#error_msg').text('Contact already exists');
            }
            else
            {
                $('#addSHead').attr('action', '<?php echo base_url('addStatehead');?>');
            }
        });

    });



    

    // function validateForm() 
    // {
    //     // var x = document.forms["#addSHead"]["#contact"].value;
    //     // if (x=="") {
    //     //     alert("This field is required");
    //     //     return false;
    //     // }
    // }

</script>