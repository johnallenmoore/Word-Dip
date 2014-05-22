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
$query_delete="UPDATE ict_slider_image SET delete_status = '1' WHERE id=".$_REQUEST['delete_id'];
mysql_query($query_delete);
?>
<div class="delete_box"  id="delete_sta"><?php echo 'Deleted Successfully !'; ?><a onClick="delete_click()">X</a></div>
<?php
}
?>

<?php
if($_POST['ins']) {

					$file_name1 = $_FILES['slide_img']['name'];
					if($file_name1)
					{
						$random_digit1=strtotime('now').rand(0000,9999);
						$new_file_name1=$random_digit1.$file_name1;				
						$path1= "files/slider_image/".$new_file_name1;				
						$path2= "files/slider_image/th_".$new_file_name1;				
						
						if($ufile !=none)
						{
								copy($_FILES['slide_img']['tmp_name'], $path1);
						}	
					
					//define a maxim size for the uploaded images
					define ("MAX_SIZE","999999");
					define ("WIDTH","443");
					define ("HEIGHT","200");			
					
					$thumb=make_thumb($path1,$path2,WIDTH,HEIGHT);	
					unlink($path1);
					}

$query_ins="INSERT INTO  ict_slider_image(id,image,active_status)VALUES (NULL ,'".$new_file_name1."','".$_POST['acc_opp']."')";
mysql_query($query_ins);
header("location:image_view.php");
}



if(isset($_POST['image_update'])) {

					$file_name1 = $_FILES['edit_slide_img']['name'];
					if($file_name1)
					{
						$random_digit1=strtotime('now').rand(0000,9999);
						$new_file_name1=$random_digit1.$file_name1;				
						$path1= "files/slider_image/".$new_file_name1;				
						$path2= "files/slider_image/th_".$new_file_name1;				
						
						if($ufile !=none)
						{
								copy($_FILES['edit_slide_img']['tmp_name'], $path1);
						}	
					
					//define a maxim size for the uploaded images
					define ("MAX_SIZE","999999");
					define ("WIDTH","443");
					define ("HEIGHT","200");			
					
					$thumb=make_thumb($path1,$path2,WIDTH,HEIGHT);	
					unlink($path1);
					

$query_delete="UPDATE ict_slider_image SET image = '".$new_file_name1."' ,active_status='".$_POST['acc_opp']."' WHERE id=".$_POST['update_id'];
mysql_query($query_delete);
}
else{
$query_delete="UPDATE ict_slider_image SET active_status='".$_POST['acc_opp']."' WHERE id=".$_POST['update_id'];
mysql_query($query_delete);
}
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
<title>pay_and_play-Admin</title>
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
							<td class="lik"><a href="index.php">Image</a></td>
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
								<td><a class="dash" href="image_view.php">Slider Image</a></td>								
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
									
									<tr><td style="height:20px;"><a class="dash" href="image_add.php">Image View</a></td></tr>
								</table>
								</td>
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

<table width="97%" cellpadding="0" cellspacing="0" border="0"  style="margin:12px 0 0 0;">
				<tr>
		<td valign="top" colspan="10">
			<table width="100%" cellpadding="0" cellspacing="0" border="0">
			<tr align="center" height="30">
			
				<th width="7" height="44" valign="top"><img src="files/images/L_T_1.png" width="7" height="44"/></th>
				<th class="blue_C" valign="top"><a class="ca"></a></th>
	            <th class="blue_C"  valign="top"><a href="university_edit.php"><!--<img src="files/images/write_new.png" style="margin:10px 0 0 0;"  border="0"/>--></a></th>
				<th class="blue_C"  valign="middle"><a class="nem" style="margin:0 0 0 0; float:right;"><input type="submit" class="publish" value="Add" align="left" name="update" onClick="location.href='image_add.php'"  />
				</a>
				</th>
					<th width="7" height="44" valign="top"><img src="files/images/R_T_1.png" width="7" height="44"/></th>		
			</tr></table>
						</td>
		</tr>
			<tr  align="center">
			<!--<td colspan="9">
			<table width="100%" cellpadding="0" cellspacing="0" border="1"  style="margin-top:0px;"  >-->
				<th width="7" height="43" valign="top"><!--<img src="files/images/R_G_T.png" width="7" height="41"/>--><img src="files/images/admin_L.png" width="7" height="43" /></th>
				<th class="gry_d" valign="middle"   align="left" ><a class="nem" style="margin-left:20px;">Slider Image</a></th>
				<th class="gry_d" valign="middle" align="left" ><a class="nem" style="margin-left:20px;">Image Status</a></th>
				<th class="gry_d" valign="middle" colspan="6" ><a class="nem">Actions</a></th>
				<th width="7" height="43" valign="top"><!--<img src="files/images/R_G_T_R.png" width="7" height="41"/>--><img src="files/images/Admin_R.png" width="7" height="43" /></th>
			</tr>
				<?php  				
				$query_select="SELECT * FROM ict_slider_image  where delete_status='0' ORDER BY id DESC limit ".$page_co.",".$page_limite;	
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
				<td bgcolor="#FFFFFF" class="hr_1"><a class="coms" style="margin-left:20px;"><img src="files/slider_image/th_<?php echo $row_admin['image']; ?>" width="75" height="75" style="margin:5px 0 5px 0;" /></a></td>
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
								
				<td bgcolor="#FFFFFF" align="right" class="hr_1">
						<a href="image_add.php?edit_id=<?php echo $row_admin['id']; ?>">
							<img src="files/images/pencil.png" alt="" border="0"  />
					</a>
				</td>
				
				<td bgcolor="#FFFFFF" align="center" class="hr_1">
					<a onClick="return confirm('Are you sure want to delete?')" href="?delete_id=<?php echo $row_admin['id']; ?>">
							<img src="files/images/delete.png" alt="" border="0"  />
					</a>
				</td>
				<td bgcolor="#FFFFFF" align="center" class="hr_1" colspan="4"></td>	
				<td  class="R_M_1" ></td>
			</tr>
				<?php 	
				}
				?>
		<tr>
				<td class="L_M_1"></td>
				<td bgcolor="#FFFFFF" colspan="8">
			<?php
		 	$sql="SELECT * FROM ict_slider_image where delete_status='0' ORDER BY id DESC";	
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