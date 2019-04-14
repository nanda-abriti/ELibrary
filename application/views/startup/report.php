<main class="app-content" style="background-color:white;margin-top:0">
    <div class="row" style="padding:40px">
      <div class="col-md-12"> 
      <h5 class="text-center">Report</h5><br><br>
      <div class="row">
          <div class="col-sm-3"></div>
         <div class="widget-small warning coloured-icon "><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>Total Participant</h4>
                    <p><b><?php echo $countTotalParticipant; ?></b></p>
                </div>
            </div>
        </div><br>
        <div class="row">
            <div class="col-sm-6">
                <div class="widget-small primary coloured-icon"><i class="icon fa fa fa-venus-double fa-3x"></i>
                    <div class="info">
                        <h4>Total Registered Student</h4>
                        <p><b><?php echo $countTotalRegistered; ?></b></p>
                    </div>
                 </div>
            </div>
            <div class="col-sm-6">    
                 <div class="widget-small info coloured-icon"><i class="icon fa fa-venus fa-3x"></i>
                    <div class="info">
                        <h4>Total Unregistered Student</h4>
                        <p><b><?php echo $countTotalUnRegistered; ?></b></p>
                    </div>
                </div>
            </div>
         </div> 
         <br>
         <div class="row">
            <div class="col-sm-6">
                 <div class="widget-small warning coloured-icon"><i class="icon fa fa-credit-card fa-3x"></i>
                    <div class="info">
                        <h4>Total Paid</h4>
                        <p><b><?php echo $countTotalPaid; ?></b></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">    
                <div class="widget-small danger coloured-icon"><i class="icon fa fa-google-wallet fa-3x"></i>
                    <div class="info">
                        <h4>Total Unpaid</h4>
                        <p><b><?php echo $countTotalUnPaid; ?></b></p>
                    </div>
                </div>
            </div>
         </div>  
      </div>  
    </div>
</main>      