<?php
error_reporting (E_ALL ^ E_NOTICE);
ob_start();
session_start();
require_once 'config/config.php';



$pay_id=$_REQUEST['pay_id'];

	/*echo $query_insert="INSERT INTO user_details(id,name,email,password,active_status,delete_status) VALUES(NULL,'".$_REQUEST['user_name']."','".$_POST['user_email']."','".$_POST['password']."','1', '0')";
	mysql_query($query_insert);
	echo $insertid = mysql_insert_id();*/


//Getting product details
if($pay_id){

//Rechecking the product details
$query_up="UPDATE user_details SET payment_status= '1' WHERE id='".$pay_id."'";
$result = mysql_query($query_up);
			
//header('Location: http://haitutorial.com/pay_and_play/enjoy_show.php?pay_id='.$pay_id);	
header('Location: http://worddip.com/user_pay_success.php?pay_id='.$pay_id);	

	
}
else{
	echo "Payment Failed - Please click Back and try another method";
}
?>
