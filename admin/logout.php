<?php  
session_start();
unset($_SESSION['new_simple_admin_id']);
unset($_SESSION['new_league_id']);
unset($_SESSION['ict_admin_user_id']);
unset($_SESSION['permission_id']);
unset($_SESSION['ict_kettimelam_admin_login']);

header('Location: login.php');
?>