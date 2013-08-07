<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Open County | <?php echo $title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/docs.css" rel="stylesheet">
  <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <link href="<?php echo base_url();?>assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Didact+Gothic|Roboto:400,300,700|Roboto+Slab:400,300,700|Oxygen:400,300,700|Montserrat:400,700|Nunito:400,300,700' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url();?>assets/js/html5shiv.js"></script>
    <![endif]-->
 <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.png">
  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">
  	<div id="thenav" class="navbar navbar-inverse navbar-fixed-top" style="background-position: 0px 0px;">
      <div class="navbar-inner top-cont" style="border-bottom: solid 3px rgba(91,25,24,0.9)">
        <div class="container navigation-main">
          <div class="nav-collapse collapse">
            <ul class="nav">
              <h1 class="brand"><a href="<?php echo base_url()?>">Open County</a></h1>
<!--               <li class="divider-vertical">
                <a href="<?php echo base_url()?>?cat=about">About</a>
                <a href="<?php echo base_url()?>?cat=contribute">Contribute</a>
              </li> -->
            </ul>
          </div>
          <div class="navbar-search search_menu input-append">
            <input type="text" placeholder="Search" class="search">
              <button class='btn add-on'>
                <i class="icon-search"></i>
              </button>
          </div>
        </div>
      </div>
      <div class="container row-fluid tabs">
        <div class="span12">
          <div class="span7">
            <h4>Lorem Ipsum Dolor Tagline</h4>
          </div>
		<script type="text/javascript">
		$(document).ready(function() {
			$("div.anchor").click(function() {
				window.location = $(this).attr("title");
			});
		});
		</script>
		<style>
			div.anchor {
				cursor: pointer;
			}
		</style>
          <div class="span5">
<?php
	function paddle ($cat){
	 if(isset($_GET['cat'])&&$_GET['cat']==$cat)
		{
			print " style='padding-top:14px !important'";
		}
	}
?>
<div class="category-tab agriculture anchor" title="<?php echo base_url();?>?cat=1"<?php paddle(1)?>><i class="icon-leaf icon-large"></i><h4>Agriculture</h4></div>
            <div class="category-tab health anchor" title="<?php echo base_url();?>?cat=2#newsfeed"<?php paddle(2)?>><i class="icon-ambulance icon-large"></i> <h4>Health</h4></div>
            <div class="category-tab finance anchor" title="<?php echo base_url();?>?cat=3"<?php paddle(3)?>><i class="icon-briefcase icon-large"></i><h4>Public Finance</h4></div>
            <div class="category-tab counties anchor" title="<?php echo base_url();?>?cat=4"<?php paddle(4)?>><i class="icon-check icon-large"></i><h4>Counties</h4></div>
          </div>
        </div><!-- span12 -->

      </div> <!-- row-fluid container -->
    </div>

  
  
