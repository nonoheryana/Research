<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Dashboard</title>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic">
<link rel="stylesheet" href="http://pixelcave.com/demo/flatapp/css/plugins-1.2.css">
<link rel="stylesheet" href="http://pixelcave.com/demo/flatapp/css/bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main-1.2.css">
<link rel="stylesheet" href="http://pixelcave.com/demo/flatapp//css/themes.css">
<script type="text/javascript" async="" src="./dashboard_files/ga.js" style=""></script><script src="./dashboard_files/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><script type="text/javascript" charset="UTF-8" src="./dashboard_files/{common,util,stats}.js"></script><script type="text/javascript" charset="UTF-8" src="./dashboard_files/AuthenticationService.Authenticate"></script></head>
<body>
<div id="page-container" class="full-width">
<header class="navbar navbar-inverse">
<div class="navbar-inner">
<div class="row-fluid">
<div class="span4 hidden-phone">
<ul class="nav pull-left">
<li class="visible-desktop">
<a href="javascript:void(0)" id="toggle-side-content">
<i class="icon-reorder"></i>
</a>
</li>
<li class="visible-tablet">
<a href="javascript:void(0)" data-toggle="collapse" data-target=".nav-collapse">
<i class="icon-reorder"></i>
</a>
</li>
<li class="divider-vertical remove-margin"></li>
</ul>
</div>
<div class="span4 text-center">
<form id="top-search" class="pull-left" action="<?php echo base_url();?>assets/page_ready_search_results.php" method="post">
<input type="text" id="search-term" name="search-term" placeholder="Search..">
</form>
<a href="" class="brand">
CSO Research
</a>
<div id="loading" class="hide"><i class="icon-spinner icon-spin"></i></div>
</div>
<div id="header-nav-section" class="span4 clearfix">
<ul class="nav pull-left visible-phone">
<li>
<a href="javascript:void(0)" data-toggle="collapse" data-target=".nav-collapse">
<i class="icon-reorder"></i>
</a>
</li>
<li class="divider-vertical remove-margin"></li>
</ul>
</div>
</div>
</div>
</header><aside id="page-sidebar" class="nav-collapse collapse">
<div class="side-scrollable">
<div class="mini-profile">
<div class="mini-profile-options">

</div>
<img src="<?php echo base_url();?>assets/img/logo.png" class="img-circle">

</div>
<div class="sidebar-tabs-con">

<div class="tab-content">
<div class="tab-pane active" id="side-tab-menu">
<nav id="primary-nav">
<ul>
<li><a href="<?php echo base_url();?>index.php/admin">Dashboard</a></li>
<li><a href="<?php echo base_url();?>index.php/admin/moderate">Moderate</a></li>
<li><a href="<?php echo base_url();?>index.php/admin/add_document">Add Document</a></li>
<li><?php echo anchor('user/logout', 'Logout'); ?></li>
</ul>
</nav>
</div>
</div>
</div>
</div>
</aside><div id="pre-page-content">
<h1><i class="glyphicon-dashboard themed-color"></i>Dashboard<br><small>Welcome <strong>Admin</strong>!</small></h1>
</div>
<div id="page-content" style="min-height: 348px;">
