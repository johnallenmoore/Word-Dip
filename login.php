<?php
error_reporting (E_ALL ^ E_NOTICE);
ob_start();
session_start();

require 'config/config.php';//File For DB Connection
require 'functions.php';//File For DB Connection


$user_name = $_POST['user_name'];
$password = $_POST['password'];

if ($_POST['user_login']) {

	if ($username='') {

		$res = 'You must enter your username';
		
	} else if ($password == '') {
	
		$res1 = 'You must enter the password';
		
	} else {
	
		
		$sql='select * from user_details where name="'.$user_name.'" and password="'.$password.'" and active_status=1 and delete_status=0 and payment_status=1';
		
		$result=mysql_query($sql);
		
		$number=mysql_num_rows($result);
		
		$row=mysql_fetch_assoc($result);
		
		if($number==1){
		
		$_SESSION['ict_play_id'] = $row['id'];
		
		header('Location: user_pay_success.php');
		
		exit;
		
		}
		if($result != ''){
		$no_data = ' Username and Password are Not Correct';
		
		}

	}
	
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pay and Play</title>
<link href="styles/styles.css" rel="stylesheet" type="text/css" />
<script src="js1/jquery-1.8.2.min.js" type="text/javascript"></script>

<script type="text/javascript" src="scripts/all_functions.js" ></script>

<!---------------------validation---------------------------------->
<link rel="stylesheet" href="css1/validationEngine.jquery.css" type="text/css"/>
<!--<link rel="stylesheet" href="../css/template.css" type="text/css"/>-->
<script src="js1/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
</script>
<script src="js1/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
</script>
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery("#formID").validationEngine();

	$("#formID").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
});

jQuery(document).ready(function(){
	jQuery("#formID_1").validationEngine();

	$("#formID_1").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
});

jQuery(document).ready(function(){
	jQuery("#formID_2").validationEngine();

	$("#formID_2").bind("jqv.field.result", function(event, field, errorFound, prompText){ console.log(errorFound) })
});
</script>
<!---------------------validation---------------------------------->
</head>

<body>
	<div class="over_all">
		<div class="body_content">
			<div class="top_create_txt_login"><h2>Log in</h2></div>
			<div class="user_reegis_details_cov">
				<form id="formID" action="login.php" method="POST">
					<table border="0" cellpadding="0" cellspacing="0" style="margin:40px 0 10px 270px; float:left; line-height:35px;">
							<tr>
								<td width="100" align="left" class="reg_field_txt"><a>User Name</a><span>*</span></td>
								<td class="login_field_input"><input type="text" name="user_name" id="user_email" class="validate[required] text-input" value="" /></td>
							</tr>
							<tr>
								<td width="160" align="left" class="reg_field_txt"><a>Password</a><span>*</span></td>
								<td class="login_field_input"><input type="password" name="password"  class="validate[required] text-input" id="user_name" value="" /></td>
							</tr>
							<tr>
								<td colspan="2"><input  class="user_login" type="submit" name="user_login" value=" " /></td>
							</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
