<?php
error_reporting (E_ALL ^ E_NOTICE);
ob_start();
session_start();
require 'config/config.php';//File For DB Connection
require 'functions.php';//File For DB Connection


if($_REQUEST['pay_id']){

		$sql="select * from  user_details where id='".$_REQUEST['pay_id']."' and active_status=1 and delete_status=0 and payment_status=1";
		$result=mysql_query($sql);
		$number=mysql_num_rows($result);
		$row=mysql_fetch_assoc($result);
		if($number==1){
		$_SESSION['ict_play_id'] = $row['id'];
		header('Location: user_pay_success.php');
		exit;
		}
}	

if($_POST['con_sub']){
	echo $query_con_text="INSERT INTO ict_con(id,user_id,content1,content2,active_status,delete_status)VALUES (NULL ,'".$_SESSION['ict_play_id']."','".$_POST['word_txt1']."','".$_POST['word_txt2']."','1', '0')";
	$da4ta_con_txt=mysql_query($query_con_text);
	header("location:user_pay_success.php");
}	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>WordDip.com | Funny Word Game App, Funny Apps, Silly Word App</title>

<link href="styles/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/all_functions.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<!----------------------------Slider part start-------------------------------------->

<link rel="stylesheet" href="FlexSlider-1.7/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="FlexSlider-1.7/demo-stuff/demo.css" type="text/css" media="screen" />
<script src="FlexSlider-1.7/jquery.flexslider-min.js"></script>

<!-- Hook up the FlexSlider -->
	<script type="text/javascript">
		$(document).click(function() {
			$('.flexslider').flexslider();
		
			$('.flexslider1').flexslider();
		
			$('.flexslider2').flexslider();
		});
	</script>
<!----------------------------Slider part End-------------------------------------->	


<!----------------------------lightbox part start-------------------------------------->
<script type="text/javascript">
$(document).ready(function(){
 $("a#show").click(function(){
    $("#lightbox_test, #lightbox-mail_log").fadeIn(300);
	$("#lightbox_test").height($(document).height()); 
 })
 
 $("a#close").click(function(){
     $("#lightbox_test, #lightbox-mail_log").fadeOut(300);
 })
 
 
 $("a#show1").click(function(){
    $("#lightbox_test1, #lightbox-mail_log1").fadeIn(300);
	$("#lightbox_test1").height($(document).height()); 
 })
 
 $("a#close1").click(function(){
     $("#lightbox_test1, #lightbox-mail_log1").fadeOut(300);
 })
 
 $("a#show2").click(function(){
    $("#lightbox_test2, #lightbox-mail_log2").fadeIn(300);
	$("#lightbox_test2").height($(document).height()); 
 })
 
 $("a#close2").click(function(){
     $("#lightbox_test2, #lightbox-mail_log2").fadeOut(300);
 })

})

function cars_view(){
	document.getElementById('work_state_1').style.display="";
}
</script>

<style type="text/css">
#lightbox-mail {
 display:none;
 position:fixed;
 top:100px;
 left:50%;
 width:750px;
 background:#FFFFFF;
 padding:10px 15px 10px 15px;
 border:2px solid #CCCCCC;
 z-index:1001;
}

#lightbox-mail_log {
  display: none;
  height: 600px;
  position: fixed;
  width: 1350px;
  z-index: 1001;
  margin:10px 0 0 -180px;
}

#lightbox_test {
 display:none;
 background:#000000;
 opacity:0.73;
 filter:alpha(opacity=90);
 position:absolute;
 top:0px;
 left:0px;
 min-width:100%;
 height:auto;
 z-index:1000;
}
.close{
  float: right;
  margin: -6px -72px 0 -29px;
  position: absolute;
  text-indent: -9999px;
  z-index:1000000;
}





#lightbox-mail1 {
display:none;
 position:fixed;
 top:100px;
 left:50%;
 width:750px;
 background:#FFFFFF;
 padding:10px 15px 10px 15px;
 border:2px solid #CCCCCC;
 z-index:1001;
}

#lightbox-mail_log1 {
  display: none;
  height: 600px;
  position: fixed;
  width: 1350px;
  z-index: 1001;
  margin:10px 0 0 -180px;
}
#lightbox_test1 {
 display:none;
 background:#000000;
 opacity:0.73;
 filter:alpha(opacity=90);
 position:absolute;
 top:0px;
 left:0px;
 min-width:100%;
 height:auto;
 z-index:1000;
}
.close1{
	margin:0 0 -19px 150px;
	float:right;
}




#lightbox-mail2 {
display:none;
 position:fixed;
 top:100px;
 left:50%;
 width:750px;
 background:#FFFFFF;
 padding:10px 15px 10px 15px;
 border:2px solid #CCCCCC;
 z-index:1001;
}

#lightbox-mail_log2 {
 display: none;
  height: 600px;
  position: fixed;
  width: 1350px;
  z-index: 1001;
  margin:10px 0 0 -180px;
}
#lightbox_test2 {
 display:none;
 background:#000000;
 opacity:0.73;
 filter:alpha(opacity=90);
 position:absolute;
 top:0px;
 left:0px;
 min-width:100%;
 height:auto;
 z-index:1000;
}
.close2{
	margin:0 0 19px 0;
	float:right;
}
</style>
<!----------------------------lightbox part end-------------------------------------->
	


<!---------------------validation---------------------------------->
<link rel="stylesheet" href="css1/validationEngine.jquery.css" type="text/css"/>
<script src="js1/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
<script src="js1/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery("#formID").validationEngine();

	$("#formID").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
});

</script>
<!---------------------validation---------------------------------->
</head>
<body>
	<div class="over_all">
		<div class="body_content">
			<div class="home_cen_part">
						<div class="welcome_txt_cov">
							<div class="welcome_txt"><a>Welcome</a></div>
							<div class="username_txt"><a>
								<?php
									if($_SESSION['ict_play_id']){
									
									 $sql="select * from user_details where id='".$_SESSION['ict_play_id']."' and active_status=1 and delete_status=0 and payment_status=1";
									 $data=mysql_query($sql);
									 while($row=mysql_fetch_assoc($data)){
									 	echo $row['name'];
									 }
									 }
									?>
							</a></div>
						</div>
						
						<form method="post" action="user_pay_success.php" id="formID">
							<div class="input_value_box_cov">
								<div class="inpu_boxes">
									<input name="word_txt1" id="word_txt1" type="text" placeholder="type your content here" class="validate[required,custom[notspaceallow]]" style="width:228px; margin:0 10px 0 0;  float:left; background:#0099CC; height:25px; color:#FFFFFF; font-weight:bold;" />
									<input name="word_txt2" id="word_txt2" type="text" placeholder="type your content here" class="validate[required,custom[notspaceallow]]" style="width:228px; float:left; background:#0099CC; height:25px; color:#ffffff; font-weight:bold;"/>
								</div>
								<div class="post_btn">
									<input type="submit" class="con_sub" name="con_sub" style="cursor:pointer;" value=" "  />
									<!--<a href="#" id="show"><img src="files/images/post_btn.jpg" alt="" /></a>-->
								</div>
							</div>
						</form>
						
						<div style="float:left; margin:0 0 0 0; width:500px;">
						<div class="user_line"></div>
						<div class="most_recent"><a>Freshest Dips</a></div>
						<div class="browse_btn_cov"><a href="#" id="show"><img src="files/images/browse_btn.png" alt="" /></a></div>
						<div class="user_line"></div>
					
						
						<div class="most_recent"><a>Hottest Dips</a></div>
						<div class="browse_btn_cov"><a href="#" id="show1"><img src="files/images/browse_btn.png" alt="" /></a></div>
						<div class="user_line"></div>
						
						<div class="most_recent"><a>Favorite Dips</a></div>
						<div class="browse_btn_cov"><a href="#" id="show2"><img src="files/images/browse_btn.png" alt="" /></a></div>
						<div class="user_line"></div>
							
						<div class="log_out"><a style="cursor:pointer;" href="logout.php"><img src="files/images/log_out.jpg" alt="" /></a></div>
			</div>
		</div>
	</div>
	
	<!---------------------------------------------Slider one start-------------------------------------------------------------->
			<div id="lightbox-mail_log">
				<a  href="user_pay_success.php"><img src="files/icons/lightboxClose.png" alt="" border="0"  class="close"/></a>
					<div class="slider_cov">
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
									<li onmouseover="thumbs_up('<?php echo $row_slider['id']; ?>')">
										<?php echo $row_slider['content1']. "&nbsp;". $row_slider['content2']; ?>
									
									<p style="margin:190px 0 0 0; font-size:20px;">
										by <?php
											$query_post_user="select * from user_details where id='".$row_slider['user_id']."'";
											$data_post_user=mysql_query($query_post_user);
											while($row_post_user=mysql_fetch_assoc($data_post_user)){
											echo $row_post_user['name'];
										}
										 ?>
									</p>
										 
									</li>
								<?php
								}
								?>
							</ul>
							
	 					 </div>
						 <div class="home_btn"></div><a class="home_txt" href="user_pay_success.php">Home</a>
					</div>
					</div>
				<div id="thumbs_up_out"></div>			
			</div>
			<div id="lightbox_test"></div>
	<!---------------------------------------------Slider one end-------------------------------------------------------------->						
	
	
	<!---------------------------------------------Slider second start-------------------------------------------------------------->						
		<div id="lightbox-mail_log1">
		<a  href="user_pay_success.php" style="background:#00FF00;"><img src="files/icons/lightboxClose.png" alt="" border="0"  class="close"/></a>
			<div class="slider_cov">
							<div id="container">
							<!--=============================
							Markup for FADE animation
							=================================-->
							<div class="flexslider1">
							<ul class="slides">
									<?php
									$query_slider_thumbs = "SELECT * FROM ict_vote ORDER BY vote DESC LIMIT 0 , 10";
									$data_slider_thumbs = mysql_query($query_slider_thumbs);
									while($row_slider_thumbs=mysql_fetch_assoc($data_slider_thumbs)){
									
									$query_slider123 = "SELECT * FROM ict_con where id='".$row_slider_thumbs['cont_id']."'";
									$data_slider123 = mysql_query($query_slider123);
									while($row_slider123=mysql_fetch_assoc($data_slider123)){
									?>
									<li onmouseover="thumbs_up_1('<?php echo $row_slider123['id']; ?>')">
										<?php echo $row_slider123['content1']. "&nbsp;". $row_slider123['content2']; ?>
									
									<p style="margin:190px 0 0 0; font-size:20px;">
										by <?php
												$query_post_user12="select * from user_details where id='".$row_slider123['user_id']."'";
												$data_post_user12=mysql_query($query_post_user12);
												while($row_post_user12=mysql_fetch_assoc($data_post_user12)){
												echo $row_post_user12['name'];
												}
												?>
									</p>
										 
									</li>
								<?php
								}
								}
								?>
							</ul>
							
	 					 </div>
						 <div class="home_btn"></div><a class="home_txt" href="user_pay_success.php">Home</a>
					</div>
							<div class="home_btn1"></div><a class="home_txt1" href="index.php">Home</a>
						</div>
			<div id="thumbs_up_out_1"></div>			
		</div>
		<div id="lightbox_test1"></div>
	<!---------------------------------------------Slider second end-------------------------------------------------------------->						
	
	
	<!---------------------------------------------Slider third start-------------------------------------------------------------->						
		<div id="lightbox-mail_log2">
		<a  href="user_pay_success.php"><img src="files/icons/lightboxClose.png" alt="" border="0"  class="close"/></a>
			<div class="slider_cov">
			<div id="container">
							<!--=============================
							Markup for FADE animation
							=================================-->
							<div class="flexslider2">
							<ul class="slides">
									<?php
										$query_slider_thumbs1 = "SELECT * FROM ict_vote where user_id='".$_SESSION['ict_play_id']."' order by id ASC";
										$data_slider_thumbs1 = mysql_query($query_slider_thumbs1);
										if(mysql_num_rows($data_slider_thumbs1)!=1){
										while($row_slider_thumbs1=mysql_fetch_assoc($data_slider_thumbs1)){
										
										$query_user_slider = "select * from ict_con where  id='".$row_slider_thumbs1['cont_id']."'";
										$data_user_slider = mysql_query($query_user_slider);
										while($row_user_slider=mysql_fetch_assoc($data_user_slider)){
									?>
									<li onmouseover="thumbs_up_1('<?php echo $row_slider123['id']; ?>')">
										<?php echo $row_user_slider['content1']. "&nbsp;". $row_user_slider['content2']; ?>
									
									<p style="margin:190px 0 0 0; font-size:20px;">
										by <?php
											$query_post_user12="select * from user_details where id='".$row_user_slider['user_id']."'";
											$data_post_user12=mysql_query($query_post_user12);
											while($row_post_user12=mysql_fetch_assoc($data_post_user12)){
											echo $row_post_user12['name'];
											}
											?>
									</p>
										 
									</li>
										<?php
										}
										}
										}
										if(mysql_num_rows($data_slider_thumbs1)==1){
										$query_slider_thumbs1 = "SELECT * FROM ict_vote where user_id='".$_SESSION['ict_play_id']."' order by id ASC";
										$data_slider_thumbs1 = mysql_query($query_slider_thumbs1);
										while($row_slider_thumbs1=mysql_fetch_assoc($data_slider_thumbs1)){
										
										$query_user_slider = "select * from ict_con where  id='".$row_slider_thumbs1['cont_id']."'";
										$data_user_slider = mysql_query($query_user_slider);
										while($row_user_slider=mysql_fetch_assoc($data_user_slider)){
										?>
										<li onmouseover="thumbs_up_1('<?php echo $row_slider123['id']; ?>')" style="text-align:center; width:100%;">
										<?php echo $row_user_slider['content1']. "&nbsp;". $row_user_slider['content2']; ?>
									
									<p style="margin:190px 0 0 0; font-size:20px;">
										by <?php
											$query_post_user12="select * from user_details where id='".$row_user_slider['user_id']."'";
											$data_post_user12=mysql_query($query_post_user12);
											while($row_post_user12=mysql_fetch_assoc($data_post_user12)){
											echo $row_post_user12['name'];
											}
											?>
									</p>
										 
									</li>
										<?php
										}}}
										?>
							</ul>
							
	 					 </div>
						 <div class="home_btn"></div><a class="home_txt" href="user_pay_success.php">Home</a>
					</div>
							
			<div class="home_btn2"></div><a class="home_txt2" href="index.php">Home</a>
			</div>
		<div id="thumbs_up_out_2"></div>					
	</div>
	<div id="lightbox_test2"></div>
	<!---------------------------------------------Slider third end-------------------------------------------------------------->						

	
</body>
</html>
