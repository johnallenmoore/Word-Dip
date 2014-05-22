<?php  
error_reporting (E_ALL ^ E_NOTICE);
ob_start();
session_start();
require_once '../config/config.php';
require 'functions.php';

if(!isset($_SESSION['ict_taxi_admin_login'])|| $_SESSION['ict_taxi_admin_login'] != true)
{
header('Location: login.php');
exit;
}


$ict_cms_page_id=$_REQUEST['ict_cms_page_id'];
$sub_id=$_REQUEST['sub_id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pay and pay  - Admin</title>
<!--<link media="screen" rel="Shortcut Icon" href="files/images/tab_img.gif"/>-->
<link href="styles/style.css" rel="stylesheet" type="text/css" />
<script src="../scripts/all_functions.js" type="text/javascript"></script>
<script src="../scripts/jquery.min.js" type="text/javascript"></script>
<!--<script type="text/javascript" src="https://getfirebug.com/firebug-lite-debug.js"></script>-->
</head>
<body>
<!-- Top Part --->
<?php require 'include_top.php'; ?>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td valign="top" style="height:40px;">
			<table cellpadding="0" cellspacing="0">
				<tr>	
				<td style="width:30px;"></td>
				<td style="width:212px;" valign="top">
					<table cellpadding="0" cellspacing="0">						
						<tr>
							<td style="height:4px;"></td>
						</tr>
						<tr>
							<td><a href="index.php"><img src="files/images/computer_logo.png" width="30" height="29" border="0" /></a></td>
							<td style="width:10px;"></td>
							<td class="lik"><a href="index.php">Dashboard</a></td>
						</tr>
					</table>
				</td>			
				</tr>
			</table>
		</td>
		<td>
			<table cellpadding="0" cellspacing="0" style="float:right" border="0">
				<tr>
					
					<td style="width:24px;"></td>
				</tr>
			</table>
		</td>		
	</tr>
</table>
<!-- Top Part --->

<table cellpadding="0" cellspacing="0" width="100%" border="0">
	<tr>
		<td style="width:30px;"></td>
		<td style="width:175px;" valign="top">		
		<table  class="left_side_box" cellpadding="0" cellspacing="0" border="0">
		<tr><td style="height:12px;"></td></tr>
		<tr>
			<td>
				<table class="side_box_top" cellpadding="0" cellspacing="0"><tr><td></td></tr></table>
			</td>
		</tr>		
		<tr>
			<td>		
				<table class="side_box_mid" cellpadding="0" cellspacing="0">
					<tr>
					<td>		
				<table class="side_box_mid" cellpadding="0" cellspacing="0">
					<tr>
					<td valign="top">
						<table border="0" cellpadding="0" cellspacing="0"  style="float:left; width:175px;">
							<tr>
								<td style="width:7px; height:24px;"></td>
								<td style="width:16px;"><img src="files/images/home.png" alt="" border="0" /></td>
								<td style="width:5px;"></td>								
								<td><a class="dash" href="index.php">Home</a></td>	
								<td style="width:11px;"></td>
								<td style="width:5px;"></td>								
							</tr>
							<tr>
								<td class="hr" colspan="6"></td>
							</tr>	
							<tr>
								<td style="width:7px; height:24px;"></td>
								<td style="width:16px;"><img border="0" alt="" src="files/images/gray-contact-user-icon.png" style="margin:0 0 0 0;"></td>
								<td style="width:5px;"></td>									
								<td><a class="post" href="image_view.php">Slider image</a></td>								
								<td style="width:11px;"><img src="files/images/top_ar.png" /></td>	
								<td style="width:5px;"></td>															
							</tr>
							
						
						</table>					
					</td>
					</tr>
				</table>
			</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>		
				<table class="side_box_bot" cellpadding="0" cellspacing="0"><tr><td></td></tr></table>						
			</td>
		</tr>
		</table>			
		</td>
		<td style="width:10px;"></td>
		<td valign="top"> 
		<table cellpadding="0" cellspacing="0" border="0" width="100%"  style="margin-top:10px;">
		<tr>
		<td valign="top">
			<table cellpadding="0" cellspacing="0" border="0"  width="100%">
				<td>
					<table cellpadding="0" cellspacing="0" width="97%" border="0">
					<tr>
						<td width="10" height="190"><img src="files/images/L_S_W_B.png" width="10" height="190" /></td>
						<td class="L_S_W"><table border="0" width="100%"><tr><td><a class="admin">Welcome to Admin Dashboard</a></td>
							<!--<td class="blue_logo" width="200"><img src="files/images/blue_logo.png" width="205" height="39" /><a>Online Users</a><h6>09378</h6></td>-->
						</tr>
						<tr><td><a class="you">What would you like to do ?</a></td></tr>
						</table>
						<table width="97%" border="0" style="margin:0 0 0 30px;">
					<tr>
						<td><a class="post" href="image_view.php"><img src="files/icons/slider.jpg" width="106" height="113" border="0" /></a></td>
					</tr>			
			</table></td>
						<td width="10" height="190"><img src="files/images/L_S_W_R.png" width="10" height="190" /></td>
					</tr>
					</table>
				</td>
		</table>
		<tr>
		<td valign="top">
		
		</td>
		</tr>
		</table>
		</td>
	</tr>
</table>
<div class="bottom">

</div>
</body>
</html>
