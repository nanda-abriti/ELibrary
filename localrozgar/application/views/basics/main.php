<body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="#">Local Rozgar</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="#"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('Welcome/signOut');?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user text-center">
      <!-- <img class="app-sidebar__user-avatar" src="" alt="User Image"> -->
        <div>
          <p class="app-sidebar__user-name"><?php echo $this->session->userdata('name');?></p>
          <p class="app-sidebar__user-designation"><?php echo $this->session->userdata('usertype');?></p>
          <p><?php echo $this->session->userdata('statename');?></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="<?php echo base_url('dash');?>"><i class="app-menu__icon fa fa-dashboard"></i>
        <span class="app-menu__label">Dashboard</span></a></li>
        <?php 
              if($this->session->userdata('usertypeid') != 6)  {
            ?>
        <a class="app-menu__item" href="#demo2" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-user"></i>
        <span class="app-menu__label">Users </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo2">
            <?php 
              if($this->session->userdata('usertypeid') < 4)  {
            ?>
             <a href="<?php echo base_url('statehead');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             State Head</span></a>
             <?php 
              }
              if($this->session->userdata('usertypeid') < 5)  {
            ?>
             <a href="<?php echo base_url('cityhead');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             City Head</span></a>
             <?php 
              }
              if($this->session->userdata('usertypeid') < 6)  {
            ?>
             <a href="<?php echo base_url('areahead');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Area Head  </span></a>
             <?php 
              }
             ?> 
          </div>

        <a class="app-menu__item" href="#demo3" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-map-marker"></i>
        <span class="app-menu__label">Places </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo3">
          <?php 
              if($this->session->userdata('usertypeid') < 4)  {
            ?>
             <a href="<?php echo base_url('stateList');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             State </span></a>
             <?php 
              }
              if($this->session->userdata('usertypeid') < 5)  {
            ?>
             <a href="<?php echo base_url('cityList');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             City   </span></a>
             <?php 
              }
              if($this->session->userdata('usertypeid') < 6)  {
            ?>
             <a href="<?php echo base_url('areaList');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Area </span></a>
             <?php 
              }
             ?> 
          </div>
          <?php
              }
           ?>   
          <!-- <a class="app-menu__item" href="#demo4" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-briefcase"></i>
        <span class="app-menu__label">Employee </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo4">
             <a href="<?php echo base_url('approveEmployee');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Approved </span></a>
             <a href="<?php echo base_url('unapproveEmployee');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Unapproved   </span></a>
          </div>

          <a class="app-menu__item" href="#demo5" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-building"></i>
        <span class="app-menu__label">Contractor </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo5">
             <a href="<?php echo base_url('approveContractor');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Approved</span></a>
             <a href="<?php echo base_url('unapproveContractor');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Unapproved  </span></a>
          </div>

          <a class="app-menu__item" href="#demo6" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-tasks"></i>
        <span class="app-menu__label">Work </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo6">
             <a href="<?php echo base_url('approveWork');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Approved</span></a>
             <a href="<?php echo base_url('unapproveWork');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
             Unapproved  </span></a>
          </div> -->

          <?php 
              if (($this->session->userdata('usertypeid') == 1) || ($this->session->userdata('usertypeid') == 2)) {
            ?>

          <a class="app-menu__item" href="#demo1" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-user-circle-o"></i>
        <span class="app-menu__label">Admin Panel</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo1">
              <a href="<?php //echo base_url('#');?>#" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
              Privileges</span></a>  
              <a href="#SubMenu1" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu1"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Employee</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu1">
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#SubMenu1" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Approved</a>
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#SubMenu1" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Unapproved</a>
              </div> 
              <a href="#SubMenu2" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu2"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Contractor</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu2">
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#SubMenu2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Approved</a>
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#SubMenu2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Unapproved</a>
              </div> 
              <a href="#SubMenu3" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu3"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Work</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu3">
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#SubMenu3" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Approved</a>
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#SubMenu3" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Unapproved</a>
              </div> 
              <!-- <a href="#SubMenu4" class="treeview-item" data-toggle="collapse" data-parent="#SubMenu4"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Places</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="SubMenu4">
                  <a href="<?php //echo base_url('#');?>" class="treeview-item" data-parent="#SubMenu4" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Approved</a>
                  <a href="<?php //echo base_url('#');?>" class="treeview-item" data-parent="#SubMenu4" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Unapproved</a>
              </div> -->
              <a href="#<?php //echo base_url('#');?>" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
              Work Type</span></a>
              <a href="<?php //echo base_url('#');?>#" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
              Employee Type</span></a>
              <a href="<?php //echo base_url('#');?>#" class="treeview-item"><span class="app-menu__label"><i class="icon fa fa-circle-o"></i>
              Admin</span></a>
          </div>    
          <?php
              }
            ?>     
            
            <?php 
              //if ($this->session->userdata('usertypeid') == 4) {
            ?>

          <a class="app-menu__item" href="#demo4" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-user-circle-o"></i>
        <span class="app-menu__label">State Head </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo4"> 
              <a href="#State1" class="treeview-item" data-toggle="collapse" data-parent="#State1"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Employee</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="State1">
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#State1" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Approved</a>
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#State1" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Unapproved</a>
              </div> 
              <a href="#State2" class="treeview-item" data-toggle="collapse" data-parent="#State2"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Contractor</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="State2">
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#State2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Approved</a>
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#State2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Unapproved</a>
              </div> 
          </div>    
          <?php
             // }
            ?>  

            <?php 
              //if ($this->session->userdata('usertypeid') == 4) {
            ?>

          <a class="app-menu__item" href="#demo5" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-user-circle-o"></i>
        <span class="app-menu__label">City Head </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo5"> 
              <a href="#City1" class="treeview-item" data-toggle="collapse" data-parent="#City1"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Employee</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="City1">
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#City1" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Approved</a>
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#City1" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Unapproved</a>
              </div> 
              <a href="#City2" class="treeview-item" data-toggle="collapse" data-parent="#City2"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Contractor</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="City2">
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#City2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Approved</a>
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#City2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Unapproved</a>
              </div> 
          </div>    
          <?php
             // }
            ?> 

            
            <?php 
              //if ($this->session->userdata('usertypeid') == 4) {
            ?>

          <a class="app-menu__item" href="#demo6" data-toggle="collapse" data-parent="#MainMenu"><i class="app-menu__icon fa fa-user-circle-o"></i>
        <span class="app-menu__label">Area Head </span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <div class="collapse" id="demo6"> 
              <a href="#area1" class="treeview-item" data-toggle="collapse" data-parent="#area1"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Employee</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="area1">
                  <a href="<?php echo base_url('approvedEmployee');?>#" class="treeview-item" data-parent="#area1" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Approved</a>
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#area1" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Unapproved</a>
              </div> 
              <a href="#area2" class="treeview-item" data-toggle="collapse" data-parent="#area2"><span class="app-menu__label">
              <i class="icon fa fa-circle-o"></i>Contractor</span><i class="treeview-indicator fa fa-angle-right"></i></a>
              <div class="collapse list-group-submenu" id="area2">
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#area2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Approved</a>
                  <a href="<?php //echo base_url('#');?>#" class="treeview-item" data-parent="#area2" style="margin-left:15px">
                  <i class="fa fa-circle-o"></i>&nbsp;All Unapproved</a>
              </div> 
          </div>    
          <?php
             // }
            ?> 

      </ul>
    </aside>