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
<title>Pay and pay- Admin</title>
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
							<td class="lik"><a href="index.php"><?php if($_REQUEST['edit_id']){echo "Image Edit";}else{echo "Image Add";}?></a></td>
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
								<td><a class="dash" href="image_view.php">image</a></td>								
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
									
									<tr><td style="height:20px;"><a class="post" href="image_add.php">Image add</a></td></tr>
								</table>
								</td>
								</tr>
								</table>
								</td>
							</tr>
							<tr>
								<td class="hr" colspan="6"></td>
							</tr>
							
							
						
						
							
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
						<form method="post" action="image_view.php"  id="formID" enctype="multipart/form-data">
						<?php  
						if($_REQUEST['edit_id']){
					 	$query="SELECT * FROM ict_slider_image where  id=".$_REQUEST['edit_id'];
						$date=mysql_query($query);				
						while($row_sel_cat= mysql_fetch_assoc($date)){	
						?>
						<input type="hidden" name="update_id" value="<?php echo $row_sel_cat['id']; ?>" />						
							<table border="0" class="note" width="100%">
								<tr height="30">
									<td width="80" align="right"><a class="the">Image</a></td>
									<td width="15">:</td>
									<td width="260">
									<input type="file" name="edit_slide_img" />
									</td>
									<td><img src="files/slider_image/th_<?php echo $row_sel_cat['image']; ?>" width="75" height="75" /></td>
								</tr>
								
								<tr height="30">
									<td align="right"><a class="the">Image Status</a></td>
									<td width="20">:</td>
									<td colspan="2">
									<select name="acc_opp" style="width:260px;">
									<option <?php if($row_sel_cat['active_status']==1){echo "selected=selected";} ?> value="1">Enabled</option>
									<option <?php if($row_sel_cat['active_status']==0){echo "selected=selected";} ?> value="0">Disabled</option>
									</select>	
									</td>
								</tr>
						
								<tr>
									<td></td>
									<td></td>
									<td colspan="2">
									<input type="submit" class="publish" value="Update" align="left" name="image_update"  />
									 </td>
								</tr>
						  </table>
							<?php 
							}
							}
							else{
							?>
						<table border="0" class="note" width="100%">
								<tr height="30">
									<td width="50" align="right"><a class="the">Image</a></td>
									<td width="15">:</td>
									<td>
									<input type="file" name="slide_img" />
									</td>
								</tr>
								
								<tr height="30">
									<td align="right"><a class="the">Image Status</a></td>
									<td width="20">:</td>
									<td>
									<select name="acc_opp" style="width:260px;">
									<option value="1" >Enabled</option>
									<option value="0">Disabled</option>
									</select>	
									</td>
								</tr>
						
									<tr>
									<td colspan="2">
									<input type="submit" class="publish" value="save" align="left" name="ins"  />
	
									 </td>
									
								</tr>
						</table>
							<?php
							 }
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
