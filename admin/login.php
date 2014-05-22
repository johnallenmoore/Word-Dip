<?php  
error_reporting (E_ALL ^ E_NOTICE);
ob_start();
session_start();
require_once '../config/config.php';
require 'functions.php';




if (isset($_POST['txtUserName'])&&isset($_POST['txtPassword'])) {

	$userName = $_POST['txtUserName'];
	$password = $_POST['txtPassword'];
	
	// Checking the username & password are not empty
	if ($userName == '') {
		$errorMessage = 'You must enter your username';
	} else if ($password == '') {
		$errorMessage = 'You must enter the password';
	} else {

 	echo $sql = "SELECT *  FROM ict_admin WHERE user_name = '".$userName."' AND password = '".mysql_real_escape_string(convert($password,$key))."' AND active_status=1 AND delete_status!=1";
		 $result = mysql_query($sql);
		 $number=mysql_num_rows($result); 
		 $row = mysql_fetch_assoc($result);
			
				if ($number==1)
				 {				
					
					$_SESSION['ict_admin_user_id']=$row['UserID'];
					$_SESSION['permission_id']=$row['permission'];
					//$_SESSION['permission_id']=$row['active_status'];
					$_SESSION['ict_taxi_admin_login']=true;		
					
					header('Location: index.php');
					exit;
				}
	
	if ($result != '') {
		$errorMessage = 'Username or Password are Not Correct';
	}
}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pay and pay - Admin</title>
<link href="styles/login.css" rel="stylesheet" type="text/css" />
<!--<link media="screen" rel="Shortcut Icon" href="files/images/tab_img.gif"/>--></head>
<body>
<table cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td class="top_bg">
			<table style="margin:0 auto;" cellpadding="0" cellspacing="0">
			<tr>
				<td style="height:110px;"></td>
			</tr>
			<tr>
			<td class="admin_login_logo_T_"></td>
			</tr>
			</table>
		</td>
	</tr>
</table>
<table style="margin:0 auto;" cellpadding="0" cellspacing="0">
	<tr>
		<td class="admin_login_logo_T_iclient">	<td>
	</tr>
	<tr>
		<td class="admin_login_logo_M">
			<table style="width:446px;" cellpadding="0" cellspacing="0">
				<tr>
					<td style="height:53px;"></td>
					<td align="center" class="error_msg"><?php   echo $errorMessage; ?></td>
				</tr>
				<tr>
					<td style="width:10px;"></td>
					<td>
						<form method="post" name="frmLogin" id="frmLogin">					
						<table cellpadding="0" cellspacing="0" class="login">
							<tr>
								<td class="user_name"><img src="files/images/user_name.png" alt="User Name" /></td>
								<td style="width:10px;"></td>
								<td valign="top" class="box_1">&nbsp;<input type="text"  name="txtUserName"  class="box_2"   /></td>					
							</tr>
							<tr>
								<td style="height:27px;"></td>
							</tr>								
							<tr>
								<td><img src="files/images/password.png" alt="Password" /></td>
								<td style="width:10px;"></td>						
								<td valign="top" class="box_1" >&nbsp;<input  type="password" name="txtPassword"   class="box_2" /></td>					
							</tr>	
							<tr>
								<td style="height:19px;"></td>
							</tr>
							<tr>
								<td></td>
								<td></td>						
								<td align="right" ><input type="submit"  name="btnLogin"  value=" "  class="box" id="btnLogin" /></td>					
							</tr>	
							<tr>
								<td style="height:19px;"></td>
							</tr>
							
						</table>
						</form>
					</td>
				</tr>
			</table>			
		</td>
	</tr>
	<tr>
		<td class="admin_login_logo_B">
			<table cellpadding="0" cellspacing="0" border="0" width="90%"  style="margin:0 0 0 30px;">
			<tr>
				
				<td align="right">
					<a href="../"><img src="files/images/visite_site.png" alt="visit site" border="0" /></a>
				</td>
			</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td style="height:60px;"></td>
	</tr>		
</table>

<table cellpadding="0" cellspacing="0" width="100%">
	<tr>
		<td class="bot_bg">
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>All rights reserved @ Coeus Technologies</td>
				<td style="width:10px;"></td>	
			</tr>
		</table>
		</td>
	</tr>		
</table>	
</body>
</html>
