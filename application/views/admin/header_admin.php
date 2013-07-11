<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $page_title;?></title>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/admin.css"/>
</head>
<body>

<div id="container" style="max-width: 80% !important;margin: 0 auto;">
	  <div align="center">
	<h2>Admin panel</h2>
	  </div>
<div class="navbar">
    <div class="navbar-inner" style="background-image: -webkit-linear-gradient(top, rgb(255, 255, 255), rgb(242, 242, 242));">
      <div class="container" style="width: auto;">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse" style="color: rgb(51, 51, 51); background-image: -webkit-linear-gradient(top, rgb(255, 255, 255), rgb(230, 230, 230)); background-color: rgb(230, 230, 230);">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="#" style="color: rgb(114, 114, 114); padding: 8px 20px 12px; font-size: 20px;"><?php echo $this->session->userdata('user_name'); ?></a>
        <div class="nav-collapse">
          <ul class="nav">
            <li><a href="<?php echo base_url()?>index.php/admin/">Home</a></li>
            <li class="divider-vertical" style="border-right-width: 1px; border-right-style: solid; border-right-color: rgb(198, 198, 198); background-color: rgb(255, 255, 255); height: 41px;"></li>
             <li><a href="<?php echo base_url()?>index.php/">Add Dcoument</a></li>
          
         
          <ul class="nav pull-right">
            <li><?php echo anchor('user/logout', 'Logout'); ?></li>
        

              </ul>
            </li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div>
<div class="content">
