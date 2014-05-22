<?php
error_reporting (E_ALL ^ E_NOTICE);
ob_start();
session_start();

require 'config/config.php';//File For DB Connection
require 'functions.php';//File For DB Connection


if($_POST['user_submit']){
	$query_insert="INSERT INTO user_details(id,name,email,password,active_status,delete_status) VALUES(NULL,'".$_POST['user_name']."','".$_POST['user_email']."','".$_POST['password']."','1', '0')";
	mysql_query($query_insert);
	$insertid = mysql_insert_id();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>WordDip.com | Funny Word Game App, Funny Apps, Silly Word App</title>
<link href="styles/styles.css" rel="stylesheet" type="text/css" />
<script src="js1/jquery-1.8.2.min.js" type="text/javascript"></script>
<script type="text/javascript">
function load()
{
document.paypal_form.submit()
}
</script>
</head>

<body onLoad="load();">
	<div class="over_all">
		<div class="body_content">
			<div class="user_reegis_details_cov">
<?php
 $paypal_url='https://www.paypal.com/cgi-bin/webscr'; 
 $paypal_id='play@worddip.com';
?>
			<form method="post" id="paypal_form" name="paypal_form" action="<?php echo $paypal_url; ?>">
					    <input type='hidden' name='business' value='<?php echo $paypal_id; ?>'>
						<input type='hidden' name='cmd' value='_xclick'>
						<input type='hidden' name='item_name' value='Create Account - Instant Access'>
						<input type='hidden' name='item_number' value='<?php echo $pay_id; ?>'>
						<input type='hidden' name='amount' value='1'>
	
						<input type='hidden' name='no_shipping' value='1'>
						<input type='hidden' name='currency_code' value='USD'>
						<input type='hidden' name='handling' value='0'>
						<!--<input type='hidden' name='cancel_return' value='http://www.haitutorial.com/pitaxi/user_cancel.php'>-->
						<!--<input type='hidden' name='return' value='http://www.haitutorial.com/pitaxi/user_success.php'>-->
						<!--<input type='hidden' name='cancel_return' value='http://haitutorial.com/pay_and_play/projects/pay_and_play/user_cancel.php'>
						<input type='hidden' name='return' value='http://haitutorial.com//pay_and_play/user_success.php?pay_id=<?php echo $insertid; ?>'>-->
						<input type='hidden' name='cancel_return' value='http://worddip.com/user_cancel.php'>
						<input type='hidden' name='return' value='http://worddip.com/user_success.php?pay_id=<?php echo $insertid; ?>'>
				</form>
				<center><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="333333">Processing...</font></center>
				
			</div>
		</div>
	</div>
</body>
</html>
