<table width="100%" class="top_logo_part" cellpadding="0" cellspacing="0">
	<tr>
		<td valign="top">	
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<tr>
					<td style="width:30px;"></td>
					<td style="width:160px;"><a href="index.php"><img src="files/images/logo.png" alt="Logo" border="0" /></a></td>	
					<td style="width:24px;"></td>
					<td style="width:107px;"><a href="../index.php" target="_blank"><img src="files/images/visite_site_new.png" alt="Visite Site" border="0" /></a></td>											
					<td valign="top">
						<table cellpadding="0" cellspacing="0" style="float:right" border="0">
							<tr>
								<td class="box_left"><img src="files/images/user_login_L.jpg" border="0"></td>
								<td class="box_center">
								<table cellpadding="0" cellspacing="0" border="0">
									<tr>
										<td style="width:5px;"></td>
										<td style="width:139px;" valign="top">
											<table cellpadding="0" cellspacing="0"  border="0" style="width:139px; margin:0 0 0 5px;">
												<tr>
													<td style="height:3px;"></td>
												</tr>
												<tr>
													<td  style="height:11px;"><img src="files/images/you_log.png"></td>
												</tr>
												<tr>
													<td style="height:5px;"></td>
												</tr>
												<tr>
													<td class="user_name_display">
														<a href="#"><?php
$query_user="Select * from ict_admin where UserID=".$_SESSION['ict_admin_user_id'];
$date_user=mysql_query($query_user);
while($row_user= mysql_fetch_assoc($date_user))
{			
echo $row_user['user_name'];		
}														
														?></a>
													</td>
												</tr>
												<tr>
													<td style="height:10px;"></td>
												</tr>												
												<tr>
													<td></td>
												</tr>
											</table>
										</td>
										<td><a href="logout.php"><img src="files/images/log_out_new.png" alt="Logout"  border="0"></a></td>
									</tr>
								</table>

								
								</td>
								<td class="box_right"><img src="files/images/user_login_R.jpg" border="0"></td>
							</tr>
						</table>				
					</td>
					<td style="width:24px;"></td>
				</tr>				
			</table>			
		</td>
	</tr>
</table>