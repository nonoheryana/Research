<?php
	if(isset($result)){
		print "<h2>".$result."</h2>";
	}
?>
<form style="margin-top:10px;" method="post" action="<?php echo base_url()?>index.php/admin/edit_documents_process" enctype="multipart/form-data">
	<h3>Edit Document</h3>
	<input type="hidden" value='<?php echo $_GET['id']?>' name='id'>
	<input type="text" name="title" value='<?php echo $title; ?>' class='input'>
	<br/>
	<textarea name="abstract" style='width:500px' rows='6'>
		<?php echo $story['content']; ?>
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
	<input type="file" name="file">
	<br />
	<input type="submit" value="Edit document" class="btn btn-success">
</form>
<iframe width='100%' frameborder="0" height="500px" src="<?php echo base_url().'index.php/article/view?id='.$_GET['id']?>">
			</iframe>