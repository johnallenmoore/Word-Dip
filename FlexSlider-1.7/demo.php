<?php
error_reporting (E_ALL ^ E_NOTICE);
ob_start();
session_start();
require '../config/config.php';//File For DB Connection
require '../functions.php';//File For DB Connection
?>

<!DOCTYPE html>
<html>
<head>
	<meta content="charset=utf-8">
	
	
	<!-- FlexSlider pieces -->
	<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="jquery.flexslider-min.js"></script>
	
	<!-- Includes for this demo -->
	<link rel="stylesheet" href="demo-stuff/demo.css" type="text/css" media="screen" />
	
	<!-- Hook up the FlexSlider -->
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider();
		});
		
		$(window).load(function() {
			$('.flexslider1').flexslider();
		});
	</script>
</head>
<body>
	<div id="container">
		
		
		<!--=============================
		Markup for FADE animation
		=================================-->
		<div class="flexslider">
	    <ul class="slides">
			<?php
			$query_slider = "select * from ict_con order by id DESC";
			$data_slider = mysql_query($query_slider);
			while($row_slider=mysql_fetch_assoc($data_slider)){
			?>
				<li style="height:600px;">
					<?php echo $row_slider['content1']. "&nbsp;". $row_slider['content2']; ?>
				
				
					<?php
									$query_post_user="select * from user_details where id='".$row_slider['user_id']."'";
									$data_post_user=mysql_query($query_post_user);
									while($row_post_user=mysql_fetch_assoc($data_post_user)){
									echo $row_post_user['name'];
								}
								 ?>
					</li>
			<?php
			}
			?>
	    	
	    
	    </ul>
	  </div>
	  
		<!--============================
		Markup for SLIDE animation
		You need to add an extra container element for the overflow: hidden property on the slider
		
		Update your flexslider() function with the following properties:
		
		<script type="text/javascript">
			$(window).load(function() {
				$('.flexslider').flexslider({
				  animation: "slide",
				  controlsContainer: ".flex-container"
			  });
			});
		</script>
		=================================
		<div class="flex-container">
			<div class="flexslider">
		    <ul class="slides">
		    	<li>
		    		<img src="demo-stuff/inacup_samoa.jpg" />
		    		<p class="flex-caption">Captions and cupcakes. Winning combination.</p>
		    	</li>
		    	<li>
		    		<a href="#"><img src="demo-stuff/inacup_pumpkin.jpg" /></a>
		    		<p class="flex-caption">This image is wrapped in a link!</p>
		    	</li>
		    	<li>
		    		<img src="demo-stuff/inacup_donut.jpg" />
		    	</li>
		    	<li>
		    		<img src="demo-stuff/inacup_vanilla.jpg" />
		    	</li>
		    </ul>
		  </div>
	 	</div>
		==================================-->
	</div>
	
	
	
</body>
</html>