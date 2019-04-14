      <div class="container">
       
          <div class="row">
            <!-- <marquee style="color:white;">Welcome to E-Library!</marquee>  -->
            <div class="col-sm-4">
                    <div class="modal-dialog modal-dialog-centered"  style="border-radius:80px;background-color:transparent;">

                
                        <div class="modal-content" style="background-color:transparent; border:none;border:none;margin-bottom:25px;" >
                                
                                <!-- Modal Header -->
                                <div class="title-header shadow">News</div>
                                
                            <a href="<?php echo $longNews->clink;?>" target="_blank" class="btn btn-lg btn-block btn-primary" style="background-color:#353638;border-top-left-radius: 10px; border-top-right-radius: 10px;border:none;">    <!--font-size:1.5vw;--> 
                            <?php echo $longNews->ctitle;?>     
                            </a>
                            
                            
                            <!-- Modal body -->
                            <div class="modal-body  scroll thin shadow" style="border-radius:0;border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;background-color:#fff;">
                                <img class="col-sm-12" src="<?php echo base_url('assets/image/meta.jpg');?>" style="height:150px;">
                                <br/> <?php echo $longNews->cbody;?> 
                            </div>
                            
                            
                            <button class="btn btn-lg btn-block btn-primary header-btn shadow" style="border-radius:10px; width:100%;">By-<?php echo $longNews->cnewsBy;?></button>
                            
                    </div>
                </div>      
             </div>
             <div class="col-sm-4">
             <div class="modal-dialog modal-dialog-centered" style="border-radius:10px;background-color:transparent;">
                <div class="modal-content" style="background-color:transparent; border:none;height:500px;">
                
                    <!-- Modal Header -->
							<div class="title-header shadow">Short News Links</div>
               
                      <div class="shortNews thin shadow" style="border-radius:10px;">     
                        <?php 
                            if($shortNews)
                            foreach($shortNews as $short){
                        ?> 
                            <a href="<?php echo $short->clink;?>" target="_blank" class="btn btn-lg btn-block btn-primary header-content shadow">
                            <?php echo $short->ctitle;?></a>
							 <?php
                        } 
                        ?> 
                      </div>          
                </div>
              </div>
             </div>

             <div class="col-sm-4">
             <div class="modal-dialog modal-dialog-centered " style="border-radius:10px;background-color:transparent;">
                <div class="modal-content" style="background-color:transparent; border:none;height:500px;">
                
                    <!-- Modal Header -->
							<div class="title-header shadow">Inspirational Nib</div>
               
                        <div class="shortNews thin shadow" style="border:2px solid tarnsparent; border-radius:10px;">    

                        <a href="#" target="_blank" class="btn btn-lg btn-block btn-primary header-content shadow">
                                   <strong></strong><center></center>
                                If opportunity doesn't knock, build a door. 
                                  
                                </a>    
                        <a href="#" target="_blank" class="btn btn-lg btn-block btn-primary header-content shadow">
                                   <strong></strong><center></center>
                                  Failure and deprivation are the best educators and purifiers.
                                  
                                </a>
                        <a href="#" target="_blank" class="btn btn-lg btn-block btn-primary header-content shadow">
                                   <strong></strong><center></center>
                                  Change your life today. Don't gamble on future, act now without delay.
                                  
                                </a>     
                        <a href="#" target="_blank" class="btn btn-lg btn-block btn-primary header-content shadow">
                                   <strong></strong><center></center>
                                Only I can change my life, no one can change it for me.
                                  
                                </a>
                        <a href="#" target="_blank" class="btn btn-lg btn-block btn-primary header-content shadow">
                                   <strong></strong><center></center>
                                  A champion is defined not by their wins but how they can recover when they fall.
                                  
                                </a>           
                               


                              <!-- <a href="#" target="_blank" class="btn btn-lg btn-block btn-primary header-content shadow">
                                   <strong>Complete Web Developer Course</strong><center><hr></center>
                                   Schedule: 01 - 31 October 2018 <br> By- <i>Mr. Umar Farooq</i> <br> (Co-Principal Investigator(CO-PI) Digitek Solution) 
                                </a> -->
								
                        </div>

                    </div>
                </div>
              </div>
         
        </div> 
       


		
     </div>

     