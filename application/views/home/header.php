<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GITS E-Library</title>

    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/about/img/logo.png');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!--Bootstrap CDN-->
  <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap4/css/bootstrap.min.css');?>" >
  <script src="<?php echo base_url('assets/bootstrap4/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap4/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/bootstrap4/js/popper.min.js');?>"></script>
  <!--cdn end-->  
    <link rel="stylesheet" href="<?php echo base_url('assets/about/style.css');?>">
    <script src="<?php echo base_url('assets/js/jquery.validate.min.js');?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/home.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/hover.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/about/css/animate.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/icons.css');?>">
    
   <style>
    
   </style>
    
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->

</head>
<body>
      <nav class="navbar navbar-expand-md bg">
      <a class="navbar-brand" href="<?php echo base_url('Welcome');?>">
        <img class="gits_logo" src="<?php echo base_url('assets/image/elibrary.png')?>" 
          style="width:80px;height:60px;margin-left:20px;border-radius:10%;">
      </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <!-- <span class="navbar-toggler-icon"></span> -->
    <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar" >
    <ul class="navbar-nav center ml-auto" >
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Welcome');?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Welcome/about');?>">About</a>
      </li>
      <li class="nav-item ">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#signup">Sign Up </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#logIn">Log In</a>
                </li>  
    </ul>
  </div>  
</nav>
