<main class="app-content">
    <div class="app-title">
      <div>
        <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      </ul>
    </div>
    
    <div class="row">
      <div class="col-sm-8">
        <div class="tile">
          <h4 class=text-center>Hey! <?php echo $this->session->userdata('studentName');?>...  Welcome to GITS Store</h4>
          <div class="content-dash">
            <h5>What can you do at GITS Store??</h5>
            <ul>
                <li>Explore tutorials of various courses with us.</li>
               <li>Increase your reasoning power by practising aptitude questions.</li>
               <li> Quickly get access to all the assignments and notes provided by faculty.</li>
               <li>Get motivated when you feel down.</li>
               <li><b>And the most amazing part</b> - download your favourite movies right now!</li>
            </ul><br>
            <h5><b>For any query</b>: elibrary@gits.ac.in</h5>
        </div>    
        </div>
      </div>
      <div class="col-sm-4">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
              <div class="info">
                <h4>Users</h4>
                <p><b><?php echo $users; ?></b></p>
              </div>
            </div>
            <div class="widget-small info coloured-icon"><i class="icon fa fa-thumbs-o-up fa-3x"></i>
              <div class="info">
                <h4>Students</h4>
                <p><b><?php echo $students; ?></b></p>
              </div>
        </div>
        <div class="widget-small warning coloured-icon"><i class="icon fa fa-files-o fa-3x"></i>
          <div class="info">
            <h4>Videos Tutorials</h4>
            <p><b>50+</b></p>
          </div>
        </div>
        <div class="widget-small danger coloured-icon"><i class="icon fa fa-star fa-3x"></i>
          <div class="info">
            <h4>Lecture Tutorial</h4>
            <p><b>100+</b></p>
          </div>
        </div>
      </div>
    </div>
    <!--  -->
  </main>