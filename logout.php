<?php 
session_start();
unset($_SESSION['id']);
unset($_SESSION['ict_play_id']);

header("Location:index.php");
exit;
?>