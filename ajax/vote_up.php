<?php
error_reporting (E_ALL ^ E_NOTICE);
ob_start();
session_start();
require_once '../config/config.php';
require '../functions.php';
?>

	<?php
if($_POST['vote']){	
	/*echo $query_slider="UPDATE  ict_vote SET view=view+1,user_id='".$_POST['user_id']."'  WHERE id ='".$_POST['vote']."'";
	mysql_query($query_slider);*/
	echo $query_vote_check="select * from ict_vote where user_id='".$_SESSION['ict_play_id']."' and cont_id='".$_POST['vote']."'";
	$data_vote_check=mysql_query($query_vote_check);
if(mysql_num_rows($data_vote_check)==0){
	$query_vote="INSERT INTO ict_vote(id,user_id,cont_id,vote,active_status,delete_status) VALUES (NULL, '".$_SESSION['ict_play_id']."', '".$_POST['vote']."','1' ,'1', '0')";
	mysql_query($query_vote);
}
else{
		$query_vote_up="UPDATE  ict_vote SET vote=vote+1  WHERE cont_id ='".$_POST['vote']."'";
		mysql_query($query_vote_up);
}
}	

?>

