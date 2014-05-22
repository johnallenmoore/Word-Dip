<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Slides, A Slideshow Plugin for jQuery</title>
	
	<link rel="stylesheet" href="css/global.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
</head>
<body>
	<div id="container">
		<div id="products_example">
			<div id="products">
				<div class="slides_container">
					<a href="http://www.zappos.com/pro-keds-royal-plus-lo-grey" target="_blank"><img src="img/1144953-3-2x.jpg" width="366" alt="1144953 3 2x"></a>
					<a href="http://www.zappos.com/pro-keds-royal-plus-lo-grey" target="_blank"><img src="img/1144953-1-2x.jpg" width="366" alt="1144953 1 2x"></a>
					<a href="http://www.zappos.com/pro-keds-royal-plus-lo-grey" target="_blank"><img src="img/1144953-2-2x.jpg" width="366" alt="1144953 2 2x"></a>					
					<a href="http://www.zappos.com/pro-keds-royal-plus-lo-grey" target="_blank"><img src="img/1144953-4-2x.jpg" width="366" alt="1144953 4 2x"></a>
					<a href="http://www.zappos.com/pro-keds-royal-plus-lo-grey" target="_blank"><img src="img/1144953-5-2x.jpg" width="366" alt="1144953 5 2x"></a>
					<a href="http://www.zappos.com/pro-keds-royal-plus-lo-grey" target="_blank"><img src="img/1144953-6-2x.jpg" width="366" alt="1144953 6 2x"></a>
					<a href="http://www.zappos.com/pro-keds-royal-plus-lo-grey" target="_blank"><img src="img/1144953-p-2x.jpg" width="366" alt="1144953 P 2x"></a>
				</div>
				
			</div>
		</div>
		
	</div>
</body>
</html>
