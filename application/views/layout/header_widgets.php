 	<?php
			session_start();
			?>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.autocomplete.css">
			<script type="text/javascript" src="<?php echo base_url();?>assets/ajax-autocomplete/jquery.js"></script>

			<script type='text/javascript' src='<?php echo base_url();?>assets/js/jquery.autocomplete.js'></script>
		 	<script type="text/javascript">
			$().ready(function() {
				$("#course").autocomplete("<?php echo base_url();?>/index.php/dodgy/data", {
					width: 260,
					matchContains: true,
					//mustMatch: true,
					//minChars: 0,
					//multiple: true,
					//highlight: false,
					//multipleSeparator: ",",
					selectFirst: false
				});
			});
			</script>
			<script>
					function get_XmlHttp() {
	 
				  var xmlHttp = null;
			
				  if(window.XMLHttpRequest) {	
					xmlHttp = new XMLHttpRequest();
				  }
				  else if(window.ActiveXObject) {
					xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
				  }
			
				return xmlHttp;
				}				
				</script>
			