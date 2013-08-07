<?php if(isset($title)){?>	<div class="row-header"><h3><?php print "$title";?></h3></div>
<?php }?>
<div class="demo_jui">
	<table cellpadding="0" cellspacing="0" border="0" class="table table-striped" id="example">

		<tbody>
			<?php
					function first_paragraph($content) {

						$pos = strpos($content, '[p]');
						return substr($content, 0, $pos);
					   
					}
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

					print "<tr class='gradeA'><td>";
			  		print "<h4><a href='".base_url()."index.php/article?id=".$item['id']."'>".$item['title']."</a></h4>";
					print "<p href='".base_url()."index.php/article?id=".$item['id']."'>".$description."</p><br />";
					print '<div class="article-meta">Posted '.$lapse.'&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Category: <a href="'.base_url().'?cat='.$item['cat_id'].'">'.$item['cat_name'].'</a>';
		
					print "</div>";
					print '</div>';
					print "</td></tr>";

					$items++;
					
					}
			  	}
				?>
						</tbody>
	</table>
</div>