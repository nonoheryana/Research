<h3>Ticket Sales</h3>
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/datatable.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/css/jquerycustom.css"/>
<script src="<?php echo base_url();?>assets/js/jqueryd.js"></script>
<script src="<?php echo base_url();?>assets/js/jdatatables.js"></script>
    
	<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				oTable = $('#example').dataTable({
					"bJQueryUI": true,
					"sPaginationType": "full_numbers"
				});
			} );
		</script>
<div class="demo_jui">
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
		<thead>
			<tr>
				
				<th><a id="files">Name</a></th>
				<th>Code</th>
				<th>Valid</th>
				<th>Used</th>
				
			</tr>
		</thead>
		<tbody>
			<?php 
			$tickets = array('1', '2', '3', '4');
				foreach($tickets as $ticket){
					
				?>
				<tr class='gradeA'>
				<td><a href="admin/manage?id=<?php echo 'tk_id'?>"><?php echo 'tk_name'?></a></td>
				<td><?php echo 'tk_code'?></td>
				<td><?php echo 'v_name'?></td>
				<td><?php echo 'u_name'?></td>
				</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</div>
<br /><br />

</div>