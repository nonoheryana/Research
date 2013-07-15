<h3>Moderate Documents</h3>
Filter:<br />
<script>
function formSubmit()
{
document.getElementById("frm1").submit();
}
</script>
<form id="frm1" action="" method="GET">
<select name='section'>
	<option value='0'>All Sections</option>
	<?php
		foreach($sections as $section){
			print "<option value='".$section['s_id']."'>".$section['s_name']."</option>";
		}
	?>
</select>
<select name='category'>
	<option value='0'>All Categories</option>
	<?php
		foreach($categories as $cat){
			print "<option value='".$cat['cat_id']."'>".$cat['cat_name']."</option>";
		}
	?>
</select>
<button class="btn add-on" onClick="formSubmit()" style="margin-top:-10px;">
<i class="icon-search"></i>
</button>
</form>
		<?php
					function first_paragraph($content) {

						$pos = strpos($content, '[p]');
						return substr($content, 0, $pos);
					   
					}
				  ?>
<?php
			
			$items=0;
			  	foreach($filtered_feed as $item){
			  		if($items<6){
					//timeplay
					$days = floor($item['TimeSpent'] / (60 * 60 * 24)); 
					
					$remainder = $item['TimeSpent'] % (60 * 60 * 24);
					$hours = floor($remainder / (60 * 60));
					$remainder = $remainder % (60 * 60);
					$minutes = floor($remainder / 60);
					$seconds = $remainder % 60;

					//initialize lapse
					$lapse = '';
						
					if($days > 0) {
					//$oldLocale = setlocale(LC_TIME, 'pt_BR');
					$item['timestamp'] = strftime("%b %#d %Y", $item['timestamp']);
					$lapse = $item['timestamp'];
					// setlocale(LC_TIME, $oldLocale);
					}
						
					elseif($days == 0 && $hours == 0 && $minutes == 0)
					$lapse .= "few seconds ago";						
					elseif($hours)
					$lapse .=  $hours.' hours ago';
					elseif($days == 0 && $hours == 0)
					$lapse .=  $minutes.' minutes ago';
					else
					$lapse .=  "few seconds ago";
					//end timeplay

					$description = first_paragraph($item['content']);

					print "<style type='text/css'>div#share-popup".$items." {
						position: absolute;
						max-width: 200px;
						margin-left: 5px;
						padding-top: 10px;
						padding-left: 5px;
						padding-right:5px;
						padding-bottom: 5px;
						background: #fefefe;
						border: 1px #d1d1d1 solid;
						font-size: 12px;
					}	</style>";
					print "<script>
					$('body').click(function(){
						$('div#share-popup".$items."').hide();
						});
					$(function() {
					  $('a#share-trigger".$items."').hover(function() {
						$('div#share-popup".$items."').show();
						}, function() {
						$('div#share-popup".$items."').hide();
					  });
					});</script>";
					
			  		print "<h4><a href='".base_url()."index.php/admin_article?id=".$item['id']."'>".$item['title']."</a></h4>";
					print "<p href='".base_url()."index.php/admin_article?id=".$item['id']."'>".$description."</p><br />";
					print '<div class="article-meta">Posted '.$lapse.'&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Category: <a href="'.base_url().'?cat='.$item['cat_id'].'">'.$item['cat_name'].'</a>';
					print ' | <a href="'.base_url().'index.php/admin_article/publish?id='.$item['id'].'">Publish</a> | Delete | Edit';
					print '</div>';
					print "<hr />";

					$items++;
					
					}
			  	}
				?>