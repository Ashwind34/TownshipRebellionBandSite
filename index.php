<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Township Rebellion | A Tribute to Rage Against The Machine | San Diego, CA</title>

<meta name="description" content="Township Rebellion is a Rage Against the Machine tribute band based in San Diego, CA."/>
<meta name="keywords" content="Rage, Against, Machine, RATM, San Diego, tribute, band"/>

<link href="css/style.css" rel="stylesheet" type="text/css"/>

<!-- Add jQuery library -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox -->
<link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.3"></script>


<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>

</head>
<body>

	<div class="wrapper">

		<br/>
		<img class="logo" src="images/logo.png"/>
		<br/>

		<img class="band" src="images/trmusicbox.jpg"/>

		<!-- <h2><u><b>NEXT SHOW</b></u></h2> -->
		
		<div class="left">
			<br>
			<br>
			<br>
			<br>
			<p style="font-size: 18px">Townshp Rebellion is San Diego's premier Rage Against the Machine tribute band!  
			The group has been bringing high-powered performances of Rage Against the Machine hits all over 
			Southern California and Mexico since 2013, making them one of the longest-tenured tribute acts in the area.
			Whether they're blowing the doors off your local live music bar or packing the floor at San Diego's largest venues, 
			the group brings a rare combination of authentic passion and exceptional musicianship to every show. Their mission 
			is to spread the words, music, and political revolutionary spirit of Rage Against the Machine to all corners of the 
			world long into the future.  Check back often to see where they're rocking next!</p>
			
			<br/>
		</div>

		<div class="right">

			<br>
			<br>
			<br>
			<br>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/aFNsP0ORCV4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
			<br/>
			<!-- <iframe width="460" height="259" src="http://www.youtube.com/embed/1I2LRzCDcp8" frameborder="0" allowfullscreen></iframe> -->
			<br/>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/0D0ocXIWBqg?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						
		</div>
		
		<div class="left">
		
			<!-- <h3>Upcoming Shows</h3>

			<b>CHECK BACK SOON</b><br/> -->
			
			<!--
			<b>DATE</b><br/>
			<b>VENUE</b><br/>
			ADDRESS1</br>
			ADDRESS2</br>
			<a href="WEBSITE">WEBSITE</a></br>
			</br>
			-->

			<br/>
			<h3>Contact</h3>
			<b>Email:</b> <a href="mailto:townshiprebellion.sd@gmail.com"><u>townshiprebellion.sd@gmail.com</u></a><br/>
			<b>Facebook:</b> <a href="https://www.facebook.com/pages/Township-Rebellion/541296229218846"><u>Find us on Facebook</u></a><br/>
			<a href="emailform/emailform.php"><b>--JOIN OUR MAILING LIST--</b></a>
		
			<br/>
			<h3>Band Lineup</h3>
			Saul Origel as Zach de la Rocha - Vocals<br/>
			Mike Laptewicz as Tom Morello - Guitar<br/>
			Rick Drake as Tim Commerford - Bass, Backing Vocals<br/>
			Andy Hester as Brad Wilk - Drums<br/>
			
			<br/>
			<h3>Song List</h3>
			<div style="width:40%; float:left;">
				Bombtrack<br/>
				Guerilla Radio<br/>
				Bulls on Parade<br/>
				Bullet in the Head<br/>
				Sleep Now in the Fire<br/>
				Know Your Enemy<br/>
				Freedom<br/>
				How I Could Just Kill a Man<br/>
				Wake Up<br/>
				
			</div>
			<div style="width:40%; float:left;">
				Testify<br/>
				Killing in the Name<br/>
				Calm Like a Bomb<br/>
				People of the Sun<br/>
				Take the Power Back<br/>
				No Shelter<br/>
				Kick Out the Jams<br/>
				Born of Broken Man<br/>
				I'm Housin'<br/>
			</div>
		
		</div>
		
		<div class="clear"></div>
		
	</div>
	
	<div class="photos">
	
		<div class="wrapper">
		
			<h1>Photos</h1>

			<?php

			for($count = 1; $count <= 18; $count+=3) {
		
			echo '<a class="fancybox" rel="gallery" href="images/gallery/image (' . $count . ').jpg"><img src="images/gallery/thumbs/thumb (' . $count . ').jpg"/></a>';
			echo '<a class="fancybox" rel="gallery" href="images/gallery/image (' . ($count + 1) . ').jpg"><img src="images/gallery/thumbs/thumb (' . ($count + 1) . ').jpg"/></a>';
			echo '<a class="fancybox" rel="gallery" href="images/gallery/image (' . ($count + 2) . ').jpg"><img class="last" src="images/gallery/thumbs/thumb (' . ($count + 2) . ').jpg"/></a>';
			
			}
			?>
					
			<div class="clear"></div>
		
		</div>
	
	</div>

</body>
</html>
