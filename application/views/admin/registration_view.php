<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main-1.2.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/themes.css">
<script type="text/javascript" async="" src="<?php echo base_url()?>assets/js/ga.js" style=""></script><script src="<?php echo base_url()?>assets/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><script type="text/javascript" charset="UTF-8" src="<?php echo base_url()?>assets/js/{common,util,stats}.js"></script>

<a href="javascript:void(0)" class="login-btn themed-background-default">
<span class="login-logo">
<span class="square1 themed-border-default"></span>
<span class="square2"></span>
<span class="name">Welcome</span>
</span>
</a>
<div class="left-door"></div>
<div class="right-door"></div>
<div id="login-container" class="hide">
<div class="block-tabs block-themed themed-border-night">
<ul id="login-tabs" class="nav nav-tabs themed-background-deepsea" data-toggle="tabs">
<li class="active text-center" style='padding:10px !important;'><i class="icon-user"></i> Login</li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="login-form-tab">
<?php echo form_open(base_url()."index.php/user/login"); ?>
<div class="control-group">
<div class="controls">
<div class="input-prepend">
<span class="add-on"><i class="icon-envelope"></i></span>
<!--<input type="text" id="login-email" name="login-email" placeholder="Email..">-->
<input type="text" id="email" name="email" value="" placeholder="Email"/>
</div>
</div>
</div>
<div class="control-group">
<div class="controls">
<div class="input-prepend">
<span class="add-on"><i class="icon-asterisk"></i></span>
<!--<input type="password" id="login-password" name="login-password" placeholder="Password..">-->
<input type="password" id="pass" name="pass" value="" placeholder="password"/>
</div>
 
</div>
</div>
<div class="control-group">
<div class="controls clearfix">
<div class="pull-right">
<input type="submit" class="btn btn-success remove-margin">
</div>

<div class="pull-left login-extra-check">
<label for="login-remember-me">
<div class="icheckbox_square-grey" style="position: relative;"><input type="checkbox" id="login-remember-me" name="login-remember-me" class="input-themed" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"></ins></div>
Remember me
</label>
</div>
</div>
</div>
<?php echo form_close(); ?>
</div>
<div class="tab-pane" id="register-form-tab">
<form action="<?php echo base_url()?>assets/js/welcome.html" method="post" id="register-form" class="form-inline" onsubmit="return false;">
<div class="control-group">
<div class="controls">
<div class="input-prepend">
<span class="add-on"><i class="icon-user"></i></span>
<input type="text" id="register-username" name="register-username" placeholder="Username">
</div>
</div>
</div>
<div class="control-group">
<div class="controls">
<div class="input-prepend">
<span class="add-on"><i class="icon-envelope-alt"></i></span>
<input type="text" id="register-email" name="register-email" placeholder="Email">
</div>
</div>
</div>
<div class="control-group">
<div class="controls">
<div class="input-prepend">
<span class="add-on"><i class="icon-asterisk"></i></span>
<input type="password" id="register-password" name="register-password" placeholder="Password">
</div>
</div>
</div>
<div class="control-group">
<div class="controls">
<div class="input-prepend">
<span class="add-on"><i class="icon-asterisk"></i></span>
<input type="password" id="register-repassword" name="register-repassword" placeholder="Retype Password">
</div>
</div>
</div>
<div class="control-group">
<div class="controls text-center">
<a href="http://pixelcave.com/demo/flatapp/page_login.php#modal-terms" data-toggle="modal">Terms and Conditions</a>
<div id="modal-terms" class="modal hide fade">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h4>Terms and Conditions</h4>
</div>
<div class="modal-body text-left">
<h5>1. Heading</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
<h5>2. Heading</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
<h5>3. Heading</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
<h5>4. Heading</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
<h5>5. Heading</h5>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum. Donec vitae ultrices dolor?</p>
</div>
</div>
</div>
</div>
<div class="control-group">
<div class="controls clearfix">
<div class="pull-right">
<button type="submit" class="btn btn-success remove-margin">Register</button>
</div>
<div class="pull-left login-extra-check">
<label for="register-terms">
<div class="icheckbox_square-grey" style="position: relative;"><input type="checkbox" id="register-terms" name="register-terms" class="input-themed" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background-color: rgb(255, 255, 255); border: 0px; opacity: 0; background-position: initial initial; background-repeat: initial initial;"></ins></div>
Accept terms
</label>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="js/vendor/jquery-1.9.1.min.js"%3E%3C/script%3E'));</script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/js"></script><script src="<?php echo base_url()?>assets/js/main.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>assets/js/plugins-1.2.js"></script>
<script src="<?php echo base_url()?>assets/js/main-1.2.js"></script>
<script>$(function(){var e=0;if($("html").hasClass("csstransitions"))e=750;$(".login-btn").mouseenter(function(){$(".left-door, .right-door, .login-btn").addClass("login-animate");setTimeout(function(){$("#login-container").fadeIn(1500);$(".login-btn .name").fadeOut(250,function(){$(".login-btn .square1, .login-btn .square2").fadeIn(750);$("#login-email").focus()})},e)})})</script>

