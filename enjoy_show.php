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
		
		header('Location: enjoy_show.php');
		
		exit;
		
		}
}		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pay and Play</title>
<link href="styles/styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="scripts/all_functions.js"></script>
	
</head>
<body>
	<div class="over_all">
		<div class="body_content" style="height:662px;">
			<div style="width:100%; float:left;">
				<div style="width:500px; margin:20px 0  0 260px;">
				<form action="pay_redirect.php">
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
				</form>
				<div class="log_out"><a style="cursor:pointer;" href="user_pay_success.php"><img src="files/images/enjoy.jpg" alt=""/></a></div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>
