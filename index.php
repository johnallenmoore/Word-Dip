<?php
error_reporting (E_ALL ^ E_NOTICE);
ob_start();
session_start();

require 'config/config.php';//File For DB Connection
require 'functions.php';//File For DB Connection

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
			<div class="cent_part_cov">
				<div class="top_create_txt"><p>Create Account</p><a href="login.php">Login</a></div>
				<div class="create_border"></div>
				<div class="user_reegis_details_cov">
						<form id="formID" action="pay_redirect.php" method="POST">
							<table border="0" cellpadding="0" cellspacing="0"  style="margin:0 0 0 0; float:left; width:500px; line-height:50px;">
									<tr>
										<td width="100" align="left" class="reg_field_txt"><a>Email</a><span>*</span></td>
										<td class="reg_field_input"><input type="text" name="user_email" id="user_email" class="validate[required,custom[email]] text-input" value="" /></td>
									</tr>
									<tr>
										<td width="160" align="left" class="reg_field_txt"><a>Fun Name (alias)</a><span>*</span></td>
										<td class="reg_field_input"><input type="text" name="user_name"  class="validate[required]" id="user_name" value="" /></td>
									</tr>
									<tr>
										<td width="100" align="left" class="reg_field_txt"><a>Password</a><span>*</span></td>
										<td class="reg_field_input"><input type="password" name="password" id="password" class="validate[required] text-input" value="" /></td>
									</tr>
									<tr>
										<td width="100" align="left" class="reg_field_txt"><a>Confirm Password</a><span>*</span></td>
										<td class="reg_field_input"><input type="password" name="con_password" id="con_password" class="validate[required,equals[password]] text-input" value="" /></td>
									</tr>
									<tr>
										<td></td>
										<td class="dollar"><a>$ 1</a></td>
									</tr>
									<tr>
										<td colspan="2"><input  class="user_regis" type="submit" name="user_submit" value=" " /></td>
									</tr>
							</table>
					</form>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>
