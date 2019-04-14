<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="#" style="font-family:sans-serif; font-style:Times New Roman;">GITS E-Library</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right" style="width:200px">
          <li><a class="dropdown-item" href="<?php echo base_url('cp');?>"><i class="fa fa-key fa-lg"></i> Change Password</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('Welcome/clogOut');?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user" style="margin-left:15%; margin-bottom:0; padding-bottom:1%; padding-top:0.5%;">
        
          <div class="app-sidebar__user-name"><?php echo $this->session->userdata('studentName');?></div><br>
       
      </div>
      
      <div class="app-menu">
        <a class="app-menu__item " href="<?php echo base_url('dashboard');?>" data-parent="#MainMenu"><i class="app-menu__icon fa fa-dashboard"></i>
        <span class="app-menu__label">Dashboard</span></a></li>
        <a class="app-menu__item" href="#demo2" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-laptop"></i>
        <span class="app-menu__label">Tutorial</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo2">
             <a href="<?php echo base_url('aptitude');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Aptitude</span></a>
              <a href="#SubMenu1" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu1"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>GATE</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu1">
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 1) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>
                  <a href="<?php echo base_url('cse');?>" class="treeview-item" data-parent="#SubMenu1" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;CSE</a>
                <?php
                }
                ?>  
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 4) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>
                  <a href="<?php echo base_url('me');?>" class="treeview-item" data-parent="#SubMenu1" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;ME</a>
                <?php
                }
                ?>  
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 2) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>
                  <a href="<?php echo base_url('ece');?>" class="treeview-item" data-parent="#SubMenu1" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;EC</a>
                  <?php
                }
                ?>  
                  <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 3) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?> 
                  <a href="<?php echo base_url('ee');?>" class="treeview-item" data-parent="#SubMenu1" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;EE</a>
                  <?php
                }
                ?>   
                  <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 5) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?> 
                  <a href="<?php echo base_url('ae');?>" class="treeview-item" data-parent="#SubMenu1" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;AE</a>
                 <?php
                }
                ?>   
                  <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 6) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?> 
                  <a href="<?php echo base_url('ce');?>" class="treeview-item" data-parent="#SubMenu1" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Civil</a>
                  <?php
                }
                ?>   
                <a href="<?php echo base_url('all');?>" class="treeview-item" data-parent="#SubMenu1" style="margin-left:15px">
                <i class="fa fa-circle-o"></i>&nbsp;All Branches</a>
              </div> 
              <a href="#SubMenu2" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu2"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Languages</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu2">
                  <a href="<?php echo base_url('c');?>" class="treeview-item" data-parent="#SubMenu2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;C</a>
                  <a href="<?php echo base_url('cpp');?>" class="treeview-item" data-parent="#SubMenu2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;CPP</a>
                  <!-- <a href="<?php echo base_url('');?>" class="treeview-item" data-parent="#SubMenu2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;HTML/CSS</a> -->
                  <a href="<?php echo base_url('java');?>" class="treeview-item" data-parent="#SubMenu2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Java</a>
                  <a href="<?php echo base_url('php');?>" class="treeview-item" data-parent="#SubMenu2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;PHP</a>
                  <a href="<?php echo base_url('python');?>" class="treeview-item" data-parent="#SubMenu2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Python</a>
                  <a href="<?php echo base_url('dbms');?>" class="treeview-item" data-parent="#SubMenu2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;DBMS</a>
              </div> 
              <a href="<?php echo base_url('projects');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>Projects</span></a> 
              <a href="#SubMenu3" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu3"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Technology</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu3">
                  <a href="<?php echo base_url('algo');?>" class="treeview-item" data-parent="#SubMenu3" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Algorithms</a>
                  <a href="<?php echo base_url('codeigniter');?>" class="treeview-item" data-parent="#SubMenu3" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Codeigniter</a>
                  <a href="<?php echo base_url('dataMining');?>" class="treeview-item" data-parent="#SubMenu3" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Data Mining</a>
                  <a href="<?php echo base_url('imageProcessing');?>" class="treeview-item" data-parent="#SubMenu3" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Image Processing</a>
                  <a href="<?php echo base_url('linux');?>" class="treeview-item" data-parent="#SubMenu3" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Linux</a>
                  <a href="<?php echo base_url('ml');?>" class="treeview-item" data-parent="#SubMenu3" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Machine Learning</a>
                  <a href="<?php echo base_url('ai');?>" class="treeview-item" data-parent="#SubMenu3" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Artificial Intelligence</a>
                  <a href="<?php echo base_url('laravel');?>" class="treeview-item" data-parent="#SubMenu3" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp; Laravel</a>
              </div> 
          </div>
        

        <a class="app-menu__item" href="#demo1" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-graduation-cap"></i>
        <span class="app-menu__label">Academics</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo1">
              <a href="#SubMenu6" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu6"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Assignments</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu6">
                 <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 1) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>
                  <a href="<?php echo base_url('CSE/assign');?>" class="treeview-item" data-parent="#SubMenu6" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;CSE</a>
                  <?php
                }
                ?>
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 4) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('ME/assign');?>" class="treeview-item" data-parent="#SubMenu6" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;ME</a>
                  <?php
                }
                ?>
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 5) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('AE/assign');?>" class="treeview-item" data-parent="#SubMenu6" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;AE</a>
                  <?php
                }
                ?>
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 3) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('EE/assign');?>" class="treeview-item" data-parent="#SubMenu6" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;EE</a>
                  <?php
                }
                ?>
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 2) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('ECE/assign');?>" class="treeview-item" data-parent="#SubMenu6" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;ECE</a>
                  <?php
                }
                ?>
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 6) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('CE/assign');?>" class="treeview-item" data-parent="#SubMenu6" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Civil</a>
                 <?php
                }
                ?>  
              </div> 
              <a href="#SubMenu7" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu7"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>NK</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu7">
                 <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 1) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>
                  <a href="<?php echo base_url('CSE/nk');?>" class="treeview-item" data-parent="#SubMenu7" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;CSE </a>
                  <?php
                }
                ?> 
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 4) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('ME/nk');?>" class="treeview-item" data-parent="#SubMenu7" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;ME</a>
                  <?php
                }
                ?> 
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 5) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('AE/nk');?>" class="treeview-item" data-parent="#SubMenu7" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;AE </a>
                  <?php
                }
                ?> 
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 3) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('EE/nk');?>" class="treeview-item" data-parent="#SubMenu7" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;EE</a>
                  <?php
                }
                ?> 
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 2) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('ECE/nk');?>" class="treeview-item" data-parent="#SubMenu7" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;EC </a>
                  <?php
                }
                ?> 
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 6) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('CE/nk');?>" class="treeview-item" data-parent="#SubMenu7" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Civil</a>
                  <?php
                }
                ?> 
              </div>  
              <a href="#SubMenu8" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu8"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Notes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu8">
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 1) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>
                  <a href="<?php echo base_url('CSE/notes');?>" class="treeview-item" data-parent="#SubMenu8" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;CSE </a>
                 <?php
                }
                ?>
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 4) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('ME/notes');?>" class="treeview-item" data-parent="#SubMenu8" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;ME</a>
                 <?php
                }
                ?>
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 5) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('AE/notes');?>" class="treeview-item" data-parent="#SubMenu8" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;AE </a>
                  <?php
                }
                ?>
                 <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 3) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?> 
                  <a href="<?php echo base_url('EE/notes');?>" class="treeview-item" data-parent="#SubMenu8" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;EE</a>
                  <?php
                }
                ?>
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 2) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('ECE/notes');?>" class="treeview-item" data-parent="#SubMenu8" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;EC </a>
                  <?php
                }
                ?>
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 6) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('CE/notes');?>" class="treeview-item" data-parent="#SubMenu8" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Civil</a>
                  <?php
                }
                ?>  
              </div> 
              <a href="#SubMenu14" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu14"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Exam</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu14">
                 <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 1) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>
                  <a href="<?php echo base_url('CSE/exam');?>" class="treeview-item" data-parent="#SubMenu14" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;CSE </a>
                  <?php
                }
                ?> 
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 4) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('ME/exam');?>" class="treeview-item" data-parent="#SubMenu14" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;ME</a>
                  <?php
                }
                ?> 
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 5) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('AE/exam');?>" class="treeview-item" data-parent="#SubMenu14" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;AE </a>
                  <?php
                }
                ?> 
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 3) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('EE/exam');?>" class="treeview-item" data-parent="#SubMenu14" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;EE</a>
                  <?php
                }
                ?> 
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 2) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('ECE/exam');?>" class="treeview-item" data-parent="#SubMenu14" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;EC </a>
                  <?php
                }
                ?> 
                <?php
                   if(($this->session->userdata('uid') == 1) || ($this->session->userdata('deptid') == 6) || ($this->session->userdata('uid') == 4) || ($this->session->userdata('uid') == 6)) {
                ?>  
                  <a href="<?php echo base_url('CE/exam');?>" class="treeview-item" data-parent="#SubMenu14" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Civil</a>
                  <?php
                }
                ?> 
              </div>  
          </div>
                
        <a class="app-menu__item" href="<?php echo base_url('movies');?>" data-parent="#MainMenu"><i class="app-menu__icon fa fa-pie-chart"></i>
        <span class="app-menu__label">Motivational Movies</span></a>
        <!-- <a class="app-menu__item " href="<?php echo base_url('myPersonal');?>" data-parent="#MainMenu"><i class="app-menu__icon fa fa-user"></i>
        <span class="app-menu__label">My Personal</span></a></li> -->
        <!-- <a class="app-menu__item" href="<?php echo base_url('');?>" data-parent="#MainMenu"><i class="app-menu__icon fa fa-pie-chart"></i>
        <span class="app-menu__label">Motivational Videos</span></a> -->

        <?php 
          if($this->session->userdata('uid') == 1){
        ?>
        <a class="app-menu__item" href="<?php echo base_url('File/admin');?>" data-parent="#MainMenu"><i class="app-menu__icon fa fa-file"></i>
        <span class="app-menu__label">Files <!--Admin--></span></a>    
        <?php
        }
        ?>
      

         <?php 
          if($this->session->userdata('uid') == 2){
        ?>
        <a class="app-menu__item" href="#demo5" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-file"></i>
        <span class="app-menu__label">Files<!--HOD--></span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo5">
             <a href="<?php echo base_url('File/personal');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Personal</span></a>
             <a href="<?php echo base_url('File/factohod');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Shared by Faculty</span></a>
             <a href="<?php echo base_url('File/fachodshare');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             All Faculty Share</span></a>
             <a href="<?php echo base_url('File/factostu');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Share to Student</span></a>
             <a href="<?php echo base_url('File/stutofac');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Shared by Students</span></a>
          </div>   
        <?php
        }
        ?>

        <?php 
          if($this->session->userdata('uid') == 3){
        ?>
        <a class="app-menu__item" href="#demo6" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-file"></i>
        <span class="app-menu__label">Files <!--Faculty--></span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo6">
             <a href="<?php echo base_url('File/personal');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Personal</span></a>
             <a href="<?php echo base_url('File/fachodshare');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             All Faculty Share</span></a>
             <a href="<?php echo base_url('File/factohod');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Share to HOD</span></a>
             <a href="<?php echo base_url('File/stutofac');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
            Shared by Students </span></a>
            <a href="#SubMenu13" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu9"><span class="app-menu__label">
            <i class="icon fa fa-circle-o"></i>Share to Student</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <div class="collapse list-group-submenu9" id="SubMenu13">  
              <form action="<?php echo base_url('File/factostu');?>" method="post">
                <input type="hidden" name="branch" value="CSE">
                <input type="submit" value="*&nbsp;CSE" class="treeview-item" data-parent="#SubMenu13" style="margin-left:15px;background-color:transparent;border:none">                
              </form>
              <form action="<?php echo base_url('File/factostu');?>" method="post">
                <input type="hidden" name="branch" value="ME">
                <input type="submit" value="*&nbsp;ME" class="treeview-item" data-parent="#SubMenu13" style="margin-left:15px;background-color:transparent;border:none">                
              </form>  
              <form action="<?php echo base_url('File/factostu');?>" method="post">
                <input type="hidden" name="branch" value="AE">
                <input type="submit" value="*&nbsp;AE" class="treeview-item" data-parent="#SubMenu13" style="margin-left:15px;background-color:transparent;border:none">                
              </form>
              <form action="<?php echo base_url('File/factostu');?>" method="post">
                <input type="hidden" name="branch" value="EE">
                <input type="submit" value="*&nbsp;EE" class="treeview-item" data-parent="#SubMenu13" style="margin-left:15px;background-color:transparent;border:none">                
              </form>
              <form action="<?php echo base_url('File/factostu');?>" method="post">
                <input type="hidden" name="branch" value="ECE">
                <input type="submit" value="*&nbsp;ECE" class="treeview-item" data-parent="#SubMenu13" style="margin-left:15px;background-color:transparent;border:none">                
              </form>
              <form action="<?php echo base_url('File/factostu');?>" method="post">
                <input type="hidden" name="branch" value="CE">
                <input type="submit" value="*&nbsp;CE" class="treeview-item" data-parent="#SubMenu13" style="margin-left:15px;background-color:transparent;border:none">                
              </form>
                
            </div> 
          </div>   
        <?php
        }
        ?>

        <?php 
          if($this->session->userdata('uid') == 5){
        ?>
        <a class="app-menu__item" href="#demo7" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-file"></i>
        <span class="app-menu__label">Files <!--Student--></span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo7">
             <a href="<?php echo base_url('File/personal');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Personal</span></a>
             <a href="<?php echo base_url('File/factostu');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Shared by Faculty</span></a>             
             <a href="#SubMenu15" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu15"><span class="app-menu__label">
            <i class="icon fa fa-circle-o"></i>Share to Faculty</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <div class="collapse list-group-submenu" id="SubMenu15">  
              <form action="<?php echo base_url('File/stutofac_facnames');?>" method="post">
                <input type="hidden" name="branch" value="1">
                <input type="submit" value="*&nbsp;CSE" class="treeview-item" data-parent="#SubMenu15" style="margin-left:15px;background-color:transparent;border:none">                
              </form>
              <form action="<?php echo base_url('File/stutofac_facnames');?>" method="post">
                <input type="hidden" name="branch" value="4">
                <input type="submit" value="*&nbsp;ME" class="treeview-item" data-parent="#SubMenu15" style="margin-left:15px;background-color:transparent;border:none">                
              </form>  
              <form action="<?php echo base_url('File/stutofac_facnames');?>" method="post">
                <input type="hidden" name="branch" value="5">
                <input type="submit" value="*&nbsp;AE" class="treeview-item" data-parent="#SubMenu15" style="margin-left:15px;background-color:transparent;border:none">                
              </form>
              <form action="<?php echo base_url('File/stutofac_facnames');?>" method="post">
                <input type="hidden" name="branch" value="3">
                <input type="submit" value="*&nbsp;EE" class="treeview-item" data-parent="#SubMenu15" style="margin-left:15px;background-color:transparent;border:none">                
              </form>
              <form action="<?php echo base_url('File/stutofac_facnames');?>" method="post">
                <input type="hidden" name="branch" value="2">
                <input type="submit" value="*&nbsp;ECE" class="treeview-item" data-parent="#SubMenu15" style="margin-left:15px;background-color:transparent;border:none">                
              </form>
              <form action="<?php echo base_url('File/stutofac_facnames');?>" method="post">
                <input type="hidden" name="branch" value="6">
                <input type="submit" value="*&nbsp;CE" class="treeview-item" data-parent="#SubMenu15" style="margin-left:15px;background-color:transparent;border:none">                
              </form>
                
            </div> 

          </div>   
        <?php
        }
        ?>
        
       <?php
       if(($this->session->userdata('uid') <= 3) || ($this->session->userdata('uid') == 6))
       {
       ?>
        <a class="app-menu__item" href="#demo3" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-gear"></i>
        <span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo3">
              <a href="#SubMenu4" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu4"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Student</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu4">
                  <a href="<?php echo base_url('approved');?>" class="treeview-item" data-parent="#SubMenu4" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Approved</a>
                  <!-- <a href="<?php echo base_url('approvedAll');?>" class="treeview-item" data-parent="#SubMenu4" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Approved </a> -->
                  <a href="<?php echo base_url('unapproved');?>" class="treeview-item" data-parent="#SubMenu4" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Unapproved</a>
                  <!-- <a href="<?php echo base_url('unapprovedAll');?>" class="treeview-item" data-parent="#SubMenu4" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp; All Unapproved </a> -->
                  <?php
                    if (($this->session->userdata('uid') <= 2) || ($this->session->userdata('uid') == 6)) {
                  ?>
                  <a href="<?php echo base_url('studentLogin');?>" class="treeview-item" data-parent="#SubMenu4" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Logged In Student</a>
                  <!-- <a href="<?php echo base_url('allStudentLogin');?>" class="treeview-item" data-parent="#SubMenu4" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Logged In Student</a> -->
                  <?php
                    }
                  ?>
              </div> 
              <?php
                  if ($this->session->userdata('uid') <= 2) {
                ?>
              <a href="#SubMenu11" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu11"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Faculty</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu11">
                  <a href="<?php echo base_url('ViewFaculty');?>" class="treeview-item" data-parent="#SubMenu11" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp; Faculty List</a>
                  <!-- <a href="<?php echo base_url('AllFaculty');?>" class="treeview-item" data-parent="#SubMenu11" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp; All Faculty</a> -->
                  <a href="<?php echo base_url('ViewLoginFaculty');?>" class="treeview-item" data-parent="#SubMenu11" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp; Logged In Faculty</a>
                  <!-- <a href="<?php echo base_url('ViewLoginFacultyAll');?>" class="treeview-item" data-parent="#SubMenu11" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Logged In Faculty</a> -->
              </div>
              <?php
              }
              ?>
              <!-- <a href="<?php echo base_url('ViewFaculty')?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>Faculty </span></a>-->
              <a href="#SubMenu5" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu5"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>News</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu5">
                  <a href="<?php echo base_url('fullNews');?>" class="treeview-item" data-parent="#SubMenu5" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Full News</a>
                  <a href="<?php echo base_url('shortNews');?>" class="treeview-item" data-parent="#SubMenu5" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;Short News</a>
              </div> 
              
          </div>
        
        <?php
       }
        ?>
         <?php
            if ($this->session->userdata('uid') == 1) {
       ?> 
       <a class="app-menu__item" href="#demo4" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-user-circle-o"></i>
        <span class="app-menu__label">Admin Panel</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <div class="collapse" id="demo4">
            <a href="#SubMenu9" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu9"><span class="app-menu__label">
            <i class="icon fa fa-circle-o"></i>Privileges</span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <div class="collapse list-group-submenu9" id="SubMenu9">  
                <a href="<?php echo base_url('userType');?>" class="treeview-item" data-parent="#SubMenu9" style="margin-left:15px">
                <i class="fa fa-circle-o"></i>&nbsp; User Type</a> 
                <!-- <a href="<?php echo base_url('facultyuserType');?>" class="treeview-item" data-parent="#SubMenu9" style="margin-left:15px">
                <i class="fa fa-circle-o"></i>&nbsp; Faculty</a> -->
            </div>   
            <a href="#SubMenu10" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu10"><span class="app-menu__label">
            <i class="icon fa fa-circle-o"></i>Logged In </span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <div class="collapse list-group-submenu9" id="SubMenu10">  
                <a href="<?php echo base_url('studentLoggedIn');?>" class="treeview-item" data-parent="#SubMenu10" style="margin-left:15px">
                <i class="fa fa-circle-o"></i>&nbsp; Users Login Report</a> 
                <!-- <a href="<?php echo base_url('facultyLoggedIn');?>" class="treeview-item" data-parent="#SubMenu10" style="margin-left:15px">
                <i class="fa fa-circle-o"></i>&nbsp; Faculty</a> -->
                <a href="<?php echo base_url('allLoggedin');?>" class="treeview-item" data-parent="#SubMenu10" style="margin-left:15px">
                <i class="fa fa-circle-o"></i>&nbsp; All Logged In</a>
            </div>  
            <a href="<?php echo base_url('addUsersSuper');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>Add Users</span></a>       
            <a href="#SubMenu12" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu12"><span class="app-menu__label">
            <i class="icon fa fa-circle-o"></i>Users </span><i class="treeview-indicator fa fa-angle-right"></i></a>
            <div class="collapse list-group-submenu9" id="SubMenu12">  
               <a href="<?php echo base_url('approvedAll');?>" class="treeview-item" data-parent="#SubMenu12" style="margin-left:15px">
                <i class="fa fa-circle-o"></i>&nbsp;All Approved </a>
                <a href="<?php echo base_url('unapprovedAll');?>" class="treeview-item" data-parent="#SubMenu12" style="margin-left:15px">
                <i class="fa fa-circle-o"></i>&nbsp; All Unapproved </a>   
            </div>  
        </div>      
        <?php 
            }
        ?>
        <?php
          //if(($this->session->userdata('uid') == 6) || ($this->session->userdata('uid') <= 3) || ($this->session->userdata('sid') == 305) ||
           //($this->session->userdata('sid') == 221) || ($this->session->userdata('sid') == 167)) { 
        ?>
       <!-- <a class="app-menu__item" href="#demo10" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-file"></i>
        <span class="app-menu__label">Startup Summit</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo10">
             <a href="<?php echo base_url('gitsstartup/showParticipants');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Participants</span></a>
             <a href="<?php echo base_url('gitsstartup/reportGen');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Report  </span></a>
          </div> -->
          <?php 
          //  }
        ?>  
      </div>
    </aside>

