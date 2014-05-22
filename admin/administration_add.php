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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin</title>
<link media="screen" rel="Shortcut Icon" href="files/images/tab_img.gif"/>
<link href="styles/style.css" rel="stylesheet" type="text/css" />


<!--<script type="text/javascript">
function checkAll(field)
{
for (i = 0; i < field.length; i++)
	field[i].checked = true ;
}
function uncheckAll(field)
{
for (i = 0; i < field.length; i++)
	field[i].checked = false ;
}
</script>-->

<!---------------------validation---------------------------------->
<link rel="stylesheet" href="../css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
	
		<script type="text/javascript" src="../scripts/jquery-1.6.4.js"></script>
		<script src="../js/jquery.validationEngine-en.js" type="text/javascript"></script>
		<script src="../js/jquery.validationEngine.js" type="text/javascript"></script>
	
		<script>	
		$(document).ready(function() {
			// SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() }, 
			
			$("#formID").validationEngine()
			
		});
		
		// JUST AN EXAMPLE OF VALIDATIN CUSTOM FUNCTIONS : funcCall[validate2fields]
		function validate2fields(){
			if($("#firstname").val() =="" || $("#lastname").val() == ""){
				return true;
			}else{
				return false;
			}
		}
	</script>	

<script type="text/javascript" src="scripts/all_functions.js"></script>	
	
	<!---------------------validation---------------------------------->

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
							<td class="lik"><a href="index.php"><?php if($_REQUEST['edit_id']){echo "Job Category Edit";}else{echo "price category add";}?></a></td>
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
								<td><a class="dash" href="index.php">Home</a></td>	
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
		<td valign="top"> 
		<table cellpadding="0" cellspacing="0" border="0" width="99%" style="margin:11px 0 0 10px;">
			<tr>
			<td valign="top">
				<table width="97%" cellpadding="0" cellspacing="0" border="0">
				<tr valign="top" align="center">
				
					<th width="6" height="41" valign="top"><img src="files/images/grey_L_T.png" width="6" height="41"/></th>
					<th class="blue_G" valign="middle">
					</th>
					<th width="6" height="41" valign="top"><img src="files/images/grey_R_T.png" width="6" height="41"/></th>
				</tr>
					  <tr>
						<td class="grey_L_M_1"></td>
						<td bgcolor="#FFFFFF">
						<form method="post" action="administration_view.php"  id="formID" >
						<?php  
						if($_REQUEST['view']){
					  $query="SELECT * FROM ict_admin where  UserID=".$_REQUEST['view'];
						$date=mysql_query($query);				
						while($row_sel_cat= mysql_fetch_assoc($date)){	
						?>
						<?php
						//if($_SESSION['permission_id']==1||$_SESSION['ict_admin_user_id']==$row_sel_cat['UserID']){  ?>
						
							<table border="0" class="note" width="100%">
								<tr>
									<td width="80" align="right"><a class="the">User Name:</a></td>
									<td width="20">:</td>
									<td height="20">
								      <input type="hidden"  name="update_id" value="<?php echo $row_sel_cat['UserID'];?>" />
									
									  <input type="text" class="validate[required,custom[noSpecialCaracters],length[0,100]] text_in" name="po_date"  id="po_date"value="<?php echo $row_sel_cat['user_name']; ?>" />
									  </td>
								</tr>
								<tr>
									<td width="80" align="right"><a class="the">password:</a></td>
									<td width="20">:</td>
									<td height="20">
									
									  <input type="password"  class="validate[required,custom[noSpecialCaracterspass]] text_in"  name="password" id="password" value="<?php echo convert($row_sel_cat['password'],$key); ?>" />
									  </td>
								</tr>
								<tr>
									<td width="80" align="right"><a class="the">Confirm password:</a></td>
									<td width="20">:</td>
									<td height="20">
									
									  <input type="password" class="validate[required,confirm[password]] text-input text_in" id="password1"   name="password1" value="<?php echo convert($row_sel_cat['password'],$key); ?>" />
									  </td>
								</tr>
							<tr>
								<td align="right"><a class="the">Active Status</a></td>
								<td width="20">:</td>
								<td>
							<select name="acc_opp">
									<option value="0" <?php if($row_sel_cat['active_status']==0){ ?> selected="selected" <?php } ?>>Disabled</option>
									<option value="1" <?php if($row_sel_cat['active_status']==1){ ?> selected="selected" <?php } ?>>Enabled</option>
						    </select>	
							</td>
							</tr>
									<tr>
									<td>
									<input type="submit" class="publish" value="Update" align="left" name="update"  />
									 </td>
									<td></td>
								</tr>
						  </table>
						  <?php 
						 // }
						  ?>
						  <?php /*?><?php
						if($_SESSION['permission_id']==2||$_SESSION['ict_admin_user_id']==$row_sel_cat['UserID']){  ?>
							<table border="0" class="note" width="100%">
								      <input type="hidden" name="update_id" value="<?php echo $row_sel_cat['UserID'];?>" />
								<tr>
									<td width="80" align="right"><a class="the">password:</a></td>
									<td width="20">:</td>
									<td height="20">
									  <input type="text"  class="text_in" name="password" value="<?php echo $row_sel_cat['password']; ?> " />
									  </td>
								</tr>
									<tr>
									<td>
									<input type="submit" class="publish" value="Update" align="left" name="update"  />
									 </td>
									<td></td>
								</tr>
						  </table><?php */?>
						  <?php 
						  //}
						  ?>
						  
							<?php }
							
							}
							else{
							?>
						<table border="0" class="note" width="100%">
								<tr height="30">
									<td width="50" align="right"><a class="the">Username</a></td>
									<td width="15">:</td>
									<td>
								<!--<input type="hidden" name="update_id" value="" />-->
									<input type="text"  class="validate[required,custom[noSpecialCaracters],length[0,100]] text_in" name="user_name" id="user_name" style="margin:0 10px 0 0;"/></td>
								</tr>
								<tr height="30">
									<td width="50" align="right"><a class="the">password</a></td>
									<td width="15">:</td>
									<td >
								<!--<input type="hidden" name="update_id" value="" />-->
									<input type="password"  class="validate[required,custom[noSpecialCaracterspass]] text_in"  name="password" id="password" style="margin:0 10px 0 0;"/></td>
								</tr>
								<tr>
									<td width="80" align="right"><a class="the">Confirm password:</a></td>
									<td width="20">:</td>
									<td height="20">
									
									  <input type="password" class="validate[required,confirm[password]] text-input text_in" id="password1"   name="password1"  />
									  </td>
								</tr>
							<tr height="30">
								<td align="right"><a class="the">Active Status</a></td>
								<td width="20">:</td>
								<td>
							<select name="acc_opp">
											<option value="0" >Disabled</option>
											<option value="1">Enabled</option>
							  </select>	
							</td>
							</tr>
							
							<tr height="30">
								<td align="right"><a class="the">Permission</a></td>
								<td width="20">:</td>
								<td>
							<select name="type_user" id="type_user">
											<option value="1" >Full</option>
											<option value="2">Partial</option>
										
							  </select>	
							</td>
							</tr>
									<tr>
									<td colspan="2">
									<input type="submit" class="publish" value="save" align="left" name="ins"  />
	
									 </td>
									
								</tr>
						</table>
							<?php }
							?>
								</form>
						</td>
					
						<td  class="grey_R_M_1" ></td>
						
					</tr>
					<tr>
					<td class="job_cat"></td>
					<td class="C_B_1"></td>
					<td  class="job_right_cate" ></td>
				</tr>
			</table>
			</td>
			</tr>
		</table>
		
	</tr>
</table>
<div class="bottom">

</div>
</body>
</html>
