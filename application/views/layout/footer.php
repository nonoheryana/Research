 <div class="navbar navbar-inverse navbar-bottom">
      <div class="navbar-inner">
        <div class="container">
			     <p>
              Copyright (c) 2013 <a href="http://the-star.co.ke" target="_blank">Open Institute</a> 
              | Built by <a href="http://code4kenya.org" target="_blank">Open Institute</a> 
              | Available on <a href="http://github.com/OpenInstitute/Research" target="_blank">Github</a>
            </p>
        </div>
      </div>
    </div>

  <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
     <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
     <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>

     <script type="text/javascript">
      $(document).ready(function() {
        var headerTop = parseInt($('header').css('padding-top')) - $('#thenav').outerHeight();
        $(window).scroll(function(){
          var scrolled = $(window).scrollTop();
          $('#thenav').css('background-position','0 '+(-(scrolled))+'px');
          if (scrolled > headerTop) {
            $('#thenav').addClass('onthego');
          }
          else {
            $('#thenav').removeClass('onthego');
          }
        });
      });
    </script>

     <script>
     	var jq191 = $.noConflict();
     </script>
     
    <script src="<?php echo base_url();?>assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-rowlink.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-typeahead.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-affix.js"></script>

    <script src="<?php echo base_url();?>assets/js/holder/holder.js"></script>
    <script src="<?php echo base_url();?>assets/js/google-code-prettify/prettify.js"></script>

    <script src="<?php echo base_url();?>assets/js/application.js"></script>



  </body>
</html>