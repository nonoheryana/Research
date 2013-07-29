<div class="container" style="margin-top: 90px; margin-bottom: 5px;">
	<div class="row tagline-description">
		<div class="span6">
			<h2>Lorem ipsum dolor sit amet subdescription about Open County</h2>
		</div>
	</div>
	<div class="row-fluid">
		<div class="ribbon span3">
			<h3 class="flag">Latest</h3>
		</div>
	</div>

	<div class="recent-items row-fluid">
		<div class="featured span6">
			<h4>Featured item</h4>
			<p>Lorem ipsum dolor sit amet</p>
		</div>
		<div class="recent span3">
			<h4>Recent items</h4>
			<p>Lorem ipsum dolor sit amet</p>
		</div>
		<div class="recent span3">
			<h4>Recent items</h4>
			<p>Lorem ipsum dolor sit amet</p>
		</div>
	</div>
	<?php
					function first_paragraph($content) {

						$pos = strpos($content, '[p]');
						return substr($content, 0, $pos);
					   
					}
				  ?>
	<div class="row-fluid" style="min-height:600px;margin-top:25px;">
		<div class="span3 sidebar_widget2">

			<script>        
					                  
                function filter_feed(section) {
                	document.getElementById("filtered").innerHTML = "";
                	document.getElementById("chev0").style.display='none';
                	document.getElementById("chev1").style.display='none';
					document.getElementById("chev2").style.display='none';
					document.getElementById("chev3").style.display='none';
					document.getElementById("chev4").style.display='none';
					document.getElementById("chev5").style.display='none';
					document.getElementById("chev"+section).style.display='block';
                   var file = "<?php echo base_url();?>index.php/welcome/filter_feed";
				
				  var request =  get_XmlHttp();
				  document.getElementById("filtered").innerHTML = "";
				 
				  var the_data = 'section='+section;
				  request.open("POST", file, true);
					
				  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				  request.send(the_data);
				  
				  request.onreadystatechange = function() {
				  if (request.readyState == 4) {
				      document.getElementById("filtered").innerHTML = request.responseText;
				    }
				  }
                }
             function filter_feed_cat(section, cat) {
                	document.getElementById("filtered").innerHTML = "";
                	document.getElementById("chev0").style.display='none';
                	document.getElementById("chev1").style.display='none';
					document.getElementById("chev2").style.display='none';
					document.getElementById("chev3").style.display='none';
					document.getElementById("chev4").style.display='none';
					document.getElementById("chev5").style.display='none';
					document.getElementById("chev"+section).style.display='block';
                   var file = "<?php echo base_url();?>index.php/welcome/filter_feed";
				
				  var request =  get_XmlHttp();
				  document.getElementById("filtered").innerHTML = "";
				 
				  var the_data = 'section='+section+'&cat='+cat;
				  request.open("POST", file, true);
					
				  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				  request.send(the_data);
				  
				  request.onreadystatechange = function() {
				  if (request.readyState == 4) {
				      document.getElementById("filtered").innerHTML = request.responseText;
				    }
				  }
                }
        </script>
			<table class="table table-striped feed-filters">
				<tbody>
					<tr>
						<td><a <?php if(isset($_GET['cat'])){ print 'onclick="filter_feed_cat(0, '.$_GET['cat'].');"';}else{ print 'onclick="filter_feed(0);"';}?>>All</a><i class="icon-chevron-right" id="chev0"></i></td>
					</tr>
					<tr>
						<td><a <?php if(isset($_GET['cat'])){ print 'onclick="filter_feed_cat(1, '.$_GET['cat'].');"';}else{ print 'onclick="filter_feed(1);"';}?>>International treaties</a><i class="icon-chevron-right" id="chev1"></i></td>
					</tr>
					<tr>
						<td><a <a <?php if(isset($_GET['cat'])){ print 'onclick="filter_feed_cat(2, '.$_GET['cat'].');"';}else{ print 'onclick="filter_feed(2);"';}?>>Constitution of Kenya</a><i class="icon-chevron-right" id="chev2"></i></td>
					</tr>
					<tr>
						<td><a <a <?php if(isset($_GET['cat'])){ print 'onclick="filter_feed_cat(3, '.$_GET['cat'].');"';}else{ print 'onclick="filter_feed(3);"';}?>>Laws of Kenya</a><i class="icon-chevron-right" id="chev3"></i></td>
					</tr>
					<tr>
						<td><a <a <?php if(isset($_GET['cat'])){ print 'onclick="filter_feed_cat(4, '.$_GET['cat'].');"';}else{ print 'onclick="filter_feed(4);"';}?>>Papers & Articles</a><i class="icon-chevron-right" id="chev4"></i></td>
					</tr>
					<tr>
						<td><a <a <?php if(isset($_GET['cat'])){ print 'onclick="filter_feed_cat(5, '.$_GET['cat'].');"';}else{ print 'onclick="filter_feed(5);"';}?>>Policies and Guidelines</a><i class="icon-chevron-right" id="chev5"></i></td>
					</tr>
				</tbody>
			</table>
		</div>
		<script>
		document.getElementById("chev1").style.display='none';
		document.getElementById("chev2").style.display='none';
		document.getElementById("chev3").style.display='none';
		document.getElementById("chev4").style.display='none';
		document.getElementById("chev5").style.display='none';
		</script>
		
		<div class="span6 newsfeed" id="filtered">

<div class="demo_jui">
	<table cellpadding="0" cellspacing="0" border="0" id="example" class="table table-striped">

		<tbody>
			<?php 		
			$items=0;
			  	foreach($more_news as $item){
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
				
					print '</div>';
					print "</td>
				</tr>";

					$items++;
					
					}
			  	}
				?>
		</tbody>
	</table>
</div>


</div>
		
		<div class="span3 sidebar_widget2">
			<div class="row-header"><h4>Contribute</h4></div>
			You can contribute an article <a href="<?php echo base_url()?>index.php/welcome/add_document">here</a>
			<hr />
			<div style="text-align:center">
				<img src="<?php echo base_url();?>assets/img/oi.png" width="200px">
			</div>
			<hr />
			<div class="social_media_icons">
				<img src="<?php echo base_url();?>assets/img/facebook.png" style="height:32px;width:32px">
				<a href="https://twitter.com/TheStarKenya"><img src="<?php echo base_url();?>assets/img/twitter.png" style="height:32px;width:32px"></a>
				<img src="<?php echo base_url();?>assets/img/rss.png" style="height:32px;width:32px">
			</div>
			<!-- <a class="twitter-timeline" href="https://twitter.com/TheStarKenya" data-widget-id="336091571755827200">Tweets by @TheStarKenya</a> -->
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

		</div>
	</div>
</div>
