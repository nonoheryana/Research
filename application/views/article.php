<div class="container" style="margin-top:80px;">
	<div class="row-fluid">
		<div class="span12 newsfeed">
			<h2><?php echo $story['title']?></h2>
			<p> <?php echo $story['content'] ?></p>
			<iframe width='100%' frameborder="0" height="500px" src="<?php echo base_url().'index.php/article/view?id='.$_GET['id']?>">
			</iframe>
		</div>
	</div>
</div>