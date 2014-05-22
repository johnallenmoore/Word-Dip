<?php  
error_reporting (E_ALL ^ E_NOTICE);
ob_start();
session_start();
require_once '../config/config.php';
require 'functions.php';



if(!isset($_SESSION['ict_taxi_admin_login'])|| $_SESSION['ict_taxi_admin_login'] != true)
{
header('Location: login.php');
exit;
}
if($_REQUEST['delete_id'])
{
$query_delete="UPDATE ict_admin SET delete_status = '1'WHERE UserID=".$_REQUEST['delete_id'];
mysql_query($query_delete);
?>
<div class="delete_box"  id="delete_sta"><?php echo 'Deleted Successfully !'; ?><a onClick="delete_click()">X</a></div>

<?php
}
//***********paginat*************************//
require 'ps_pagination.php';
$page_limite=10;
if(isset($_REQUEST['page'])==0){$_REQUEST['page']=1;}
$page_co=($_REQUEST['page']-1)*$page_limite;
//***********paginat*************************//
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin</title>
<link media="screen" rel="Shortcut Icon" href="files/images/tab_img.gif"/>
<link href="styles/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="../scripts/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="../scripts/all_functions.js" ></script>
<script type="text/javascript" src="scripts/all_function.js" ></script>
<script>
function link_foto(vars)
		{
		
		var URL = "?id="+vars;     
		location.replace(URL);
		
		}
function link_foto_sub(vars,sublink)
{
var URL = "?id="+vars+"&sub_id="+sublink;     
location.replace(URL);
}
function delete_click(){
	document.getElementById("delete_sta").style.display = "none";
}
</script>
</head>
<body>
<!-- Top Part --->
<?php require 'include_top.php'; ?>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td valign="top" style="height:40px;">
			<table cellpadding="0" cellspacing="0">
				<tr>	
				<td style="width:30px;"></td>
				<td style="width:212px;" valign="top">
					<table cellpadding="0" cellspacing="0">						
						<tr>
							<td style="height:4px;"></td>
						</tr>
						<tr>
							<td><a href="index.php"><img src="files/images/computer_logo.png" width="30" height="29" border="0" /></a></td>
							<td style="width:10px;"></td>
							<td class="lik"><a href="index.php">Administration</a></td>
						</tr>
					</table>
				</td>			
				</tr>
			</table>
		</td>
		<td>
			<table cellpadding="0" cellspacing="0" style="float:right" border="0">
				<tr>
					
					<td style="width:24px;"></td>
				</tr>
			</table>
		</td>		
	</tr>
</table>
<!-- Top Part --->
<table cellpadding="0" cellspacing="0" width="100%" border="0">
	<tr>
		<td style="width:30px;"></td>
			<td style="width:175px;" valign="top">		
		<table  class="left_side_box" cellpadding="0" cellspacing="0" border="0">
		<tr><td style="height:12px;"></td></tr>
		<tr>
			<td>
				<table class="side_box_top" cellpadding="0" cellspacing="0"><tr><td></td></tr></table>
			</td>
		</tr>		
		<tr>
			<td>		
				<table class="side_box_mid" cellpadding="0" cellspacing="0">
					<tr>
					<td>		
				<table class="side_box_mid" cellpadding="0" cellspacing="0">
					<tr>
					<td valign="top">
						<table border="0" cellpadding="0" cellspacing="0"  style="float:left; width:175px;">
							<tr>
								<td style="width:7px; height:24px;"></td>
								<td style="width:16px;"><img src="files/images/home.png" alt="" border="0" /></td>
								<td style="width:5px;"></td>								
								<td><a class="post" href="index.php">Home</a></td>	
								<td style="width:11px;"></td>
								<td style="width:5px;"></td>								
							</tr>
							<tr>
								<td class="hr" colspan="6"></td>
							</tr>	
							<tr>
								<td style="width:7px; height:24px;"></td>
								<td style="width:16px;"><img border="0" alt="" src="files/images/gray-contact-user-icon.png" style="margin:0 0 0 0;"></td>
								<td style="width:5px;"></td>									
								<td><a class="dash" href="administration_view.php">Administration</a></td>								
								<td style="width:11px;"><img src="files/images/top_ar.png" /></td>	
								<td style="width:5px;"></td>															
							</tr>
							<tr>
								<td class="sub_menu" colspan="6">
								<table cellpadding="0" cellspacing="0">
							<tr>
								<td style="width:26px;"></td>
								<td colspan="5">
								<table cellpadding="0" cellspacing="0">								
									
									<tr><td style="height:20px;"><a class="post" href="administration_view.php">Administration</a></td></tr>
								</table>
								</td>
								</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td class="hr" colspan="6"></td>
							</tr>
							
							<!--<tr>
								<td style="width:7px; height:24px;"></td>
								<td style="width:16px;"><img border="0" alt="" src="files/icons/car_1.png" style="margin:-3px 0 0 0;"></td>
								<td style="width:5px;"></td>									
								<td><a class="post" href="owner_car_post_view.php">OFC Details</a></td>								
								<td style="width:11px;"><img src="files/images/top_ar.png" /></td>	
								<td style="width:5px;"></td>															
							</tr>
							<tr>
								<td class="hr" colspan="6"></td>
							</tr>-->
							
							<tr>
								<td style="width:7px; height:24px;"></td>
								<td style="width:16px;"><img border="0" alt="" src="files/icons/users_ic.png" height="21" width="21"></td>
								<td style="width:5px;"></td>									
								<td><a class="post" href="user_view.php">Users</a></td>								
								<td style="width:11px;"><img src="files/images/top_ar.png" /></td>	
								<td style="width:5px;"></td>															
							</tr>	
							<tr>
								<td class="hr" colspan="6"></td>
							</tr>
							<tr>
								<td style="width:7px; height:24px;"></td>
								<td style="width:16px;"><img src="files/images/dollar-icon.png" /></td>
								<td style="width:5px;"></td>									
								<td><a class="post" href="product_view.php">Payment</a></td>								
								<td style="width:11px;"><img src="files/images/top_ar.png" /></td>	
								<td style="width:5px;"></td>															
							</tr>	
							<tr>
								<td class="hr" colspan="6"></td>
							</tr>
								
							<tr>
								<td style="width:7px; height:24px;"></td>
								<td style="width:16px;"><img src="files/icons/ph.png" width="16" height="16" /></td>
								<td style="width:5px;"></td>									
								<td><a class="post" href="country_code.php">Country code</a></td>								
								<td style="width:11px;"><img src="files/images/top_ar.png" /></td>	
								<td style="width:5px;"></td>															
							</tr>	
							<tr>
								<td class="hr" colspan="6"></td>
							</tr>
							
							
							<tr>
								<td style="width:7px; height:24px;"></td>
								<td style="width:16px;"><img src="files/images/Globe-icon.png" /></td>
								<td style="width:5px;"></td>									
								<td><a class="post" href="location_part.php">Location</a></td>								
								<td style="width:11px;"><img src="files/images/top_ar.png" /></td>	
								<td style="width:5px;"></td>															
							</tr>	
							<?php
							if($_SESSION['permission_id']==1){
							?>
							
							<tr>
								<td class="hr" colspan="6"></td>
							</tr>
							
							
							<tr>
								<td style="width:7px; height:24px;"></td>
								<td style="width:16px;"><img src="files/icons/contact_mail.png" /></td>
								<td style="width:5px;"></td>									
								<td><a class="post" href="mail_host_edit.php">Mail Hosting Edit</a></td>								
								<td style="width:11px;"><img src="files/images/top_ar.png" /></td>	
								<td style="width:5px;"></td>															
							</tr>	
							<?php
							}
							?>
							
						
						</table>					
					</td>
					</tr>
				</table>
			</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>		
				<table class="side_box_bot" cellpadding="0" cellspacing="0"><tr><td></td></tr></table>						
			</td>
		</tr>
		</table>			
		</td>
		<td style="width:10px;"></td>
		<td valign="top">
<?php
if($_POST['update']) {

$query_update="update ict_admin  SET user_name='".trim($_POST['po_date'])."',active_status= '".$_POST['acc_opp']."',password='".mysql_real_escape_string(convert(trim($_POST['password']),$key))."' where UserID='".$_POST['update_id']."'";
mysql_query($query_update);
}
?>
<?php
if(isset($_POST['ins'])) {
$query_ins="INSERT INTO ict_admin(UserID,user_name,password,permission,active_status)VALUES (NULL ,'".$_POST['user_name']."','".mysql_real_escape_string(convert($_POST['password'],$key))."','".$_POST['type_user']."','".$_POST['acc_opp']."')";



mysql_query($query_ins);
}
?>
<table width="97%" cellpadding="0" cellspacing="0" border="0"  style="margin:12px 0 0 0;">
				<tr>
		<td valign="top" colspan="9">
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
			<tr align="center" height="30">
			
				<th width="7" height="44" valign="top"><img src="files/images/L_T_1.png" width="7" height="44"/></th>
				<th class="blue_C" valign="top"><a class="ca"></a></th>
	            <th class="blue_C"  valign="top"><a href="university_edit.php"><!--<img src="files/images/write_new.png" style="margin:10px 0 0 0;"  border="0"/>--></a></th>
				<th class="blue_C"  valign="middle"><a class="nem" style="margin:0 0 0 0; float:right;"><?php if($_SESSION['permission_id']==1){ ?><input type="submit" class="publish" value="Add" align="left" name="update" onClick="location.href='administration_add.php'"  />
				<?php }?></a>
				</th>
					<th width="7" height="44" valign="top"><img src="files/images/R_T_1.png" width="7" height="44"/></th>		
			</tr></table>
						</td>
		</tr>
			<tr  align="center">
			<!--<td colspan="9">
			<table width="100%" cellpadding="0" cellspacing="0" border="1"  style="margin-top:0px;"  >-->
				<th width="7" height="43" valign="top"><!--<img src="files/images/R_G_T.png" width="7" height="41"/>--><img src="files/images/admin_L.png" width="7" height="43" /></th>
				<th class="gry_d" valign="middle"   align="left" ><a class="nem" style="margin-left:5px;">User Name</a></th>
				<th class="gry_d" align="left" ><a class="nem" style="margin-left:10px;">Registered Date</a></th>
				<th class="gry_d" valign="middle" align="left" ><a class="nem" style="margin-left:20px;">User Status</a></th>
				<th class="gry_d" valign="middle" align="left" ><a class="nem" style="margin-left:20px;">Permission</a></th>
				<th class="gry_d" valign="middle" colspan="3" ></th>
				<th width="7" height="43" valign="top"><!--<img src="files/images/R_G_T_R.png" width="7" height="41"/>--><img src="files/images/Admin_R.png" width="7" height="43" /></th>
			</tr>
				<?php  				
				$query_select="SELECT * FROM ict_admin  where delete_status='0' ORDER BY UserID DESC limit ".$page_co.",".$page_limite;	
				$date_select=mysql_query($query_select);
				if(mysql_num_rows($date_select)!=0){
				$count= explode(".",mysql_num_rows($date_select)/$page_limite);
				if($count[1]!=0){	
				$count=$count[0]+1;
				}
				else{
				$count=$count[0];
				}
				}
					while($row_admin= mysql_fetch_assoc($date_select))
						{				 	 	
						?>				
			<tr  height="40">
				<td class="L_M_1"></td>
				<td bgcolor="#FFFFFF" class="hr_1"><a class="coms" style="margin-left:20px;"><?php  echo $row_admin['user_name']?></a></td>
					<td bgcolor="#FFFFFF" class="hr_1"><a class="coms"><?php  echo $row_admin['reg_date']?></a></td>
					<td bgcolor="#FFFFFF" class="hr_1" width="200"><a class="coms"><?php
									 if($row_admin['active_status']==1)
									{
									echo "<img src='files/images/activate.png' alt='' border='0' />";
									}
									if($row_admin['active_status']==0)
									{
									echo "<img src='files/images/notactivate.png' alt='' border='0' />";
									}
								?>	</a></td>
								<td bgcolor="#FFFFFF" class="hr_1"><?php
									 if($row_admin['permission']==1)
									{
									echo "<img src='files/images/ful_image.png' alt=' ' border='0' />";
									}
									if($row_admin['permission']==2)
									{
									echo "<img src='files/images/partial_image.png' />";
									}
									if($row_admin['permission']==3)
									{
									echo "<img src='files/images/view_image.png' />";
									}
								?></td>
				<td bgcolor="#FFFFFF" align="right" class="hr_1">
						<?php
					
						if($_SESSION['permission_id']==1||$_SESSION['ict_admin_user_id']==$row_admin['UserID']){  ?>
						<a href="administration_add.php?view=<?php echo $row_admin['UserID']; ?>">
						<?php
						if($_SESSION['permission_id']==3){
						echo" ";
						}
						else{
						echo '<img src="files/images/pencil.png" alt="" border="0" />';
						
						?>
						<?php 
						}
						?>
						</a><?php }
				?> </td>
				<td bgcolor="#FFFFFF" align="center" class="hr_1">
				<?php
				if($_SESSION['permission_id']==1||$_SESSION['ict_admin_user_id']==$row_admin['UserID']){  ?>
				<a onClick="return confirm('Are you sure want to delete?')" href="?delete_id=<?php echo $row_admin['UserID']; ?>">
				<?php
						if($_SESSION['permission_id']==3){
						echo" ";
						}
						else{
						echo '<img src="files/images/delete.png" alt="" border="0"  />';
						
						?>
						<?php
						 }
						?>
				</a>
				<?php }?>
				</td>
					
				<td bgcolor="#FFFFFF" align="center" class="hr_1"></td>	
				<td  class="R_M_1" ></td>
			</tr>
				<?php 	
				}
				?>
		<tr>
				<td class="L_M_1"></td>
				<td bgcolor="#FFFFFF" colspan="7">
			<?php
		 	$sql="SELECT * FROM ict_admin where delete_status='0' ORDER BY UserID DESC";	
			if(mysql_num_rows(mysql_query($sql))!=0){
			$pager = new PS_Pagination($conn,$sql,$page_limite,6,$sub_url);
			$pager->setDebug(true);
			$rs = $pager->paginate();
			if(!$rs) die(mysql_error());
			echo $pager->renderFullNav();
			}
			else{
			echo '<div style="margin:5px 0 0 5px; float:left; width:1100px; text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:14px;">No Data Found.</div>';
			}
			?>
		</td>
		<td  class="R_M_1"></td>
		</tr>
			<tr>
				<td class="L_M_1"></td>
				<td bgcolor="#FFFFFF" colspan="7">
		</td>
		<td  class="R_M_1"></td>
		</tr>
			<tr>
				<td class="L_B_1"></td>
				<td class="C_B_1"></td>
				<td class="C_B_1"></td>
				<td class="C_B_1"></td>
				<td class="C_B_1"></td>
				<td class="C_B_1"></td>
				<td class="C_B_1"></td>
				<td class="C_B_1"></td>
				<td  class="R_B_1" ></td>
			</tr>
     	</table>
		<table>
		<tr><td><!--<input type="button" onclick="link_foto('2');" class="bross" value="Add User" name="head_create2" />--></td></tr>
		</table>
		<!--<table cellpadding="0" cellspacing="0" style="margin:5px 0 0 10px;">
		<tr><td><input type="button" class="bross" value="Add" onclick="location.href='price_edit.php'" /></td></tr>
		</table>-->
		</td>
		</tr>		
		</table>
<div class="bottom">
</div>
</body>
</html>