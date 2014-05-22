<?php
error_reporting (E_ALL ^ E_NOTICE);
ob_start();
session_start();
require_once '../config/config.php';
require '../functions.php';
?>

	<?php
		$query_slider = "select * from ict_con where id='".$_POST['main']."' order by id DESC";
		$data_slider = mysql_query($query_slider);
		while($row_slider=mysql_fetch_assoc($data_slider)){
	?>
	<div>
		<img onclick="vote_up('<?php echo $row_slider['id']; ?>')" style="cursor:pointer; margin:0px 130px 0 20px; float:left;" src="files/icons/hand_simble.jpg" alt="" />
		
		<img style="cursor:pointer; float:left; margin:-33px 0 0 190px;" src="files/icons/sdfdsdsf.jpg" alt="" onclick="vote_up('<?php echo $row_slider['id']; ?>')"/>
	</div>
	<?php
	}
	?>

