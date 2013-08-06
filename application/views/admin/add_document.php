<?php
	if(isset($result)){
		print "<h2>".$result."</h2>";
	}
?>
<form style="margin-top:10px;" method="post" action="<?php echo base_url()?>index.php/admin/add_documents_process" enctype="multipart/form-data">
	<h3>Add New Document</h3>
	<input type="text" name="title" placeholder="Title" class="input">
	<br/>
	<textarea name="abstract" placeholder="abstract">
		
	</textarea>
	<br />
	<select name='section'>
	<?php
		foreach($sections as $section){
			print "<option value='".$section['s_id']."'>".$section['s_name']."</option>";
		}
	?>
	</select>
	<br />
	<select name='category'>
		<?php
			foreach($categories as $cat){
				print "<option value='".$cat['cat_id']."'>".$cat['cat_name']."</option>";
			}
		?>
	</select>
	<br />
	<input type="checkbox" name="featured" value="featured">Featured<br />
<br />
	<input type="file" name="file">
	<br />
	<input type="submit" value="add" class="btn btn-success">
</form>