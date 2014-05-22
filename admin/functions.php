<?php 

function send_sms($to,$msg){

}



function display_date($date){
	list($a,$b) = explode(' ', $date);
	list($d,$e,$f) = explode('-', $a);
	list($g,$h,$i) = explode(':', $b);
	$m="AM";
	if($g>12){$g=$g-12;$m="PM";}
	if($e==1){$month='Jan';}
	if($e==2){$month='Feb';}
	if($e==3){$month='Mar';}
	if($e==4){$month='Apr';}
	if($e==5){$month='May';}
	if($e==6){$month='Jun';}
	if($e==7){$month='Jul';}
	if($e==8){$month='Aug';}
	if($e==9){$month='Sep';}
	if($e==10){$month='Oct';}
	if($e==11){$month='Nov';}
	if($e==12){$month='Dec';}
		
	if($g==1){$g='01';}
	if($g==2){$g='02';}
	if($g==3){$g='03';}
	if($g==4){$g='04';}
	if($g==5){$g='05';}
	if($g==6){$g='06';}
	if($g==7){$g='07';}
	if($g==8){$g='08';}
	if($g==9){$g='09';}
	
	if($h==1){$h='01';}
	if($h==2){$h='02';}
	if($h==3){$h='03';}
	if($h==4){$h='04';}
	if($h==5){$h='05';}
	if($h==6){$h='06';}
	if($h==7){$h='07';}
	if($h==8){$h='08';}
	if($h==9){$h='09';}
	
	
	
	if($m==1){$m='01';}
	if($m==2){$m='02';}
	if($m==3){$m='03';}
	if($m==4){$m='04';}
	if($m==5){$m='05';}
	if($m==6){$m='06';}
	if($m==7){$m='07';}
	if($m==8){$m='08';}
	if($m==9){$m='09';}
		
	
	
	$date='<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td style="width:15px;">'.$f.'</td>
		<td  style="width:1px;"></td>		
		<td  style="width:4px;">-</td>
		<td  style="width:1px;"></td>				
		<td  style="width:20px;">'.$month.'</td>
		<td  style="width:1px;"></td>		
		<td  style="width:4px;">-</td>
		<td  style="width:1px;"></td>				
		<td  style="width:25px;">'.$d.'</td>
		<td  style="width:2px;"></td>		
		<td  style="width:10px;">at</td>
		<td  style="width:2px;"></td>			
		<td  style="width:10px;">'.$g.'</td>
		<td  style="width:1px;"></td>	
		<td  style="width:3px;">:</td>
		<td  style="width:1px;"></td>			
		<td  style="width:10px;">'.$h.'</td>
		<td  style="width:3px;"></td>	

		<td  style="width:10px;">'.$m.'</td>
	</tr>
	</table>';	
	return $date; 	
}


function change_date_type($date){
	list($a,$b,$c) = explode('/', $date);
	$date_type=$c."-".$b."-".$a;
	return $date_type; 
}



function date_type_to_display($date_1){
	list($a_1,$b_1,$c_1) = explode('-', $date_1);
	$date_type_1=$c_1."/".$b_1."/".$a_1;
	return $date_type_1; 
}

function display_day($date){

	list($a,$b) = explode(' ', $date);
	list($d,$e,$f) = explode('-', $a);
	list($g,$h,$i) = explode(':', $b);
	$m="AM";
	if($g>12){$g=$g-12;$m="PM";}
	if($e==1){$month='January';}
	if($e==2){$month='February';}
	if($e==3){$month='March';}
	if($e==4){$month='April';}
	if($e==5){$month='May';}
	if($e==6){$month='June';}
	if($e==7){$month='July';}
	if($e==8){$month='August';}
	if($e==9){$month='September';}
	if($e==10){$month='October';}
	if($e==11){$month='November';}
	if($e==12){$month='December';}	
	echo date("l", mktime(0, 0, 0, $e, $f, $d)).", ".$month." ".$f.", ".$d.", ".$g.":".$h." ".$m;	
	
}


function display_date_only($date){

	list($a,$b) = explode(' ', $date);
	list($d,$e,$f) = explode('-', $a);
	if($e==1){$month='Jan';}
	if($e==2){$month='Feb';}
	if($e==3){$month='Mar';}
	if($e==4){$month='Apr';}
	if($e==5){$month='May';}
	if($e==6){$month='Jun';}
	if($e==7){$month='Jul';}
	if($e==8){$month='Aug';}
	if($e==9){$month='Sep';}
	if($e==10){$month='Oct';}
	if($e==11){$month='Nov';}
	if($e==12){$month='Dec';}
	echo $f."-".$month."-".$d;
	
}

function play_date_oni($date){
	list($d,$e,$f) = explode('-', $date);
	if($e==1){$month='Jan';}
	if($e==2){$month='Feb';}
	if($e==3){$month='Mar';}
	if($e==4){$month='Apr';}
	if($e==5){$month='May';}
	if($e==6){$month='Jun';}
	if($e==7){$month='Jul';}
	if($e==8){$month='Aug';}
	if($e==9){$month='Sep';}
	if($e==10){$month='Oct';}
	if($e==11){$month='Nov';}
	if($e==12){$month='Dec';}
	echo $f."-".$month."-".$d;
	
}


function last_two($data){

	$string=$data;
	$lenth=strlen($string); 
	$newlenth=($lenth-2);
	$s=str_split($string,$newlenth);
	echo $s[0];
	
}


function last_color($string){

	$s=str_split($string,1);
	echo $s[1].$s[2].$s[3].$s[4].$s[5].$s[6];
	
}


function spalite_first($data){

	list($a,$b) = explode(' ', $date);
	echo $a;
	
}


function spalite_second($data){

	list($a,$b) = explode(' ', $date);
	echo $b;
	
}


function string_first_char($data){

	$s=str_split($data,1);
	echo $s[0];
	
}




function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}




function limit_text( $text, $limit )
#
{
#
// figure out the total length of the string
#
if( strlen($text)>$limit )
#
{
#
# cut the text
#
$text = substr( $text,0,$limit );
#
# lose any incomplete word at the end
#
$text = substr( $text,0,-(strlen(strrchr($text,' '))) );
#
}
#
// return the processed string
#
return $text;
#
}








































function UploadVideo($fileName=''){
	
	      //  echo "fgsgdf";
	
			global $_FILES;
					
			
			echo "<pre>";
			//print_r($_FILES);
			echo "</pre>";
			//$this->VuploadPath='uploads';
			
			
			if(($fileName) && ($_FILES[$fileName]['size'] != 0)){
			
			  if($_FILES[$fileName]['size'] <='200000'){
			
				$name=strtotime('now').$_FILES[$fileName]['name'];
				$file_extension = strtolower(substr(strrchr($_FILES[$fileName]['name'],"."),1));				
				if(copy($_FILES[$fileName]['tmp_name'],'uploads/'.$name)){			
					chmod('uploads/'.$name, 0777);
					
					
		if(preg_match('/.avi$/',$name)){
						$video_out1 = preg_replace('/\.avi$/i','.flv',$name);
						$video_out2 = preg_replace('/\.avi$/i','.mp4',$name);
						$image_out =  preg_replace('/\.avi$/i','.mjpeg',$name);
						$image_final =  preg_replace('/\.avi$/i','.jpeg',$name);
					}
					elseif(preg_match('/.asf$/',$name)){
						$video_out1 = preg_replace('/\.asf$/i','.flv',$name);
						$video_out2 = preg_replace('/\.asf$/i','.mp4',$name);
						$image_out =  preg_replace('/\.asf$/i','.mjpeg',$name);
						$image_final =  preg_replace('/\.asf$/i','.jpeg',$name);
					}
					elseif(preg_match('/.mov$/',$name)){
						$video_out1 = preg_replace('/\.mov$/i','.flv',$name);
						$video_out2 = preg_replace('/\.mov$/i','.mp4',$name);
						$image_out =  preg_replace('/\.mov$/i','.mjpeg',$name);
						$image_final =  preg_replace('/\.mov$/i','.jpeg',$name);
					}
					elseif(preg_match('/.mpe$/',$name)){
						$video_out1 = preg_replace('/\.mpe$/i','.flv',$name);
						$video_out2 = preg_replace('/\.mpe$/i','.mp4',$name);
						$image_out =  preg_replace('/\.mpe$/i','.mjpeg',$name);
						$image_final =  preg_replace('/\.mpe$/i','.jpeg',$name);
					}
					elseif(preg_match('/.mp4$/',$name)){
						$video_out1 = preg_replace('/\.mp4$/i','.flv',$name);
						$video_out2 = preg_replace('/\.mp4$/i','.mp4',$name);
						$image_out =  preg_replace('/\.mp4$/i','.mjpeg',$name);
						$image_final =  preg_replace('/\.mp4$/i','.jpeg',$name);
					}
					elseif(preg_match('/.flv$/',$name)){
						$video_out1 = preg_replace('/\.flv$/i','.flv',$name);
						$video_out2 = preg_replace('/\.flv$/i','.mp4',$name);
						$image_out =  preg_replace('/\.flv$/i','.mjpeg',$name);
						$image_final =  preg_replace('/\.flv$/i','.jpeg',$name);
						
					}
					elseif(preg_match('/.mpg$/',$name)){
						$video_out1 = preg_replace('/\.mpg$/i','.flv',$name);
						$video_out2 = preg_replace('/\.mpg$/i','.mp4',$name);
						$image_out =  preg_replace('/\.mpg$/i','.mjpeg',$name);
						$image_final =  preg_replace('/\.mpg$/i','.jpeg',$name);
					}
					elseif(eregi('/.mpeg$/',$name)){
						$video_out1 = preg_replace('/\.mpeg$/i','.flv',$name);
						$video_out2 = preg_replace('/\.mpeg$/i','.mp4',$name);
						$image_out =  preg_replace('/\.mpeg$/i','.mjpeg',$name);
						$image_final =  preg_replace('/\.mpeg$/i','.jpeg',$name);
					}
					
					elseif(preg_match('/.wmv$/',$name)){
						$video_out1 = preg_replace('/\.wmv$/i','.flv',$name);
						$video_out2 = preg_replace('/\.wmv$/i','.mp4',$name);
						$image_out =  preg_replace('/\.wmv$/i','.mjpeg',$name);
						$image_final =  preg_replace('/\.wmv$/i','.jpeg',$name);
					}
					
				
				$FFMPEG1="ffmpeg -i uploads/$name -ar 22050 -ab 32 -f flv -s 320x240 uploads/$video_out1";
				//exec("ffmpeg -i videofiles/$name -ar 22050 -ab 32 -f flv -s 320×240 ../videofiles/$video_out1");
					//exec("START ffmpeg -vcodec png -i videofiles/$name -ss  00:00:00 -vframes frames videofiles/$image_out"); 
					//image output
					$FFMJPEG="ffmpeg -i uploads/$video_out1 -an -t 0:00:10  -r 1 -y  uploads/$image_out";	
					if(exec($FFMPEG1)){
					//echo "1 ok";
					}
					if(exec($FFMJPEG)){
					//echo "2 ok";
					} 
					rename("uploads/$image_out","uploads/".$image_final);
					//$hai="ffmpeg -i uploads/$name";
					$hai="ffmpeg -i \"" . "uploads/$video_out1" . "\" 2>&1";
					//echo $video_out1;
					
					//system($hai);
					//@unlink("uploads/".$name);
		
					$duration = ob_get_contents();
					ob_end_clean();
					ob_clean();
					preg_match('/Duration: (.*?),/', $duration, $matches);
					$duration = $matches[1];
					$duration_array = explode(':', $duration);
					$duration =$duration_array[1].":".ceil($duration_array[2]);
			       $totaltime=($duration_array[0]*3600)+($duration_array[1]*60)+ceil($duration_array[2]);
			
		
			 
		echo 'Video uploaded Successfully';
		
			}else {
			
				echo 'Unable to upload video';
				}
			  }else {
			  echo 'Maxmimum upload video size is only 200MB';
			  }
		}else{
		echo 'minimum upload video size is only 100kb';
		}
		}








// this is the function that will create the thumbnail image from the uploaded image
// the resize will be done considering the width and height defined, but without deforming the image
function make_thumb($img_name,$filename,$new_w,$new_h)
{
//get image extension.
$ext=getExtension($img_name);
//creates the new image using the appropriate function from gd library
if(!strcmp("jpg",$ext) || !strcmp("jpeg",$ext) ||!strcmp("JPG",$ext) || !strcmp("JPEG",$ext))
$src_img=imagecreatefromjpeg($img_name);

if(!strcmp("png",$ext)||!strcmp("PNG",$ext))
$src_img=imagecreatefrompng($img_name);


if(!strcmp("gif",$ext)||!strcmp("GIF",$ext))
$src_img=imagecreatefrompng($img_name);


//gets the dimmensions of the image
$old_x=imageSX($src_img);
$old_y=imageSY($src_img);

// next we will calculate the new dimmensions for the thumbnail image
// the next steps will be taken:
// 1. calculate the ratio by dividing the old dimmensions with the new ones
// 2. if the ratio for the width is higher, the width will remain the one define in WIDTH variable
// and the height will be calculated so the image ratio will not change
// 3. otherwise we will use the height ratio for the image
// as a result, only one of the dimmensions will be from the fixed ones
$ratio1=$old_x/$new_w;
$ratio2=$old_y/$new_h;
if($ratio1>$ratio2) {
$thumb_w=$new_w;
$thumb_h=$old_y/$ratio1;
}
else {
$thumb_h=$new_h;
$thumb_w=$old_x/$ratio2;
}

// we create a new image with the new dimmensions
$dst_img=ImageCreateTrueColor($thumb_w,$thumb_h);

// resize the big image to the new created one
imagecopyresampled($dst_img,$src_img,0,0,0,0,$thumb_w,$thumb_h,$old_x,$old_y);

// output the created image to the file. Now we will have the thumbnail into the file named by $filename
if(!strcmp("png",$ext))
imagepng($dst_img,$filename);
else
imagejpeg($dst_img,$filename);

//destroys source and destination images.
imagedestroy($dst_img);
imagedestroy($src_img);
}

// This function reads the extension of the file.
// It is used to determine if the file is an image by checking the extension.
function getExtension($str) {
$i = strrpos($str,".");
if (!$i) { return ""; }
$l = strlen($str) - $i;
$ext = substr($str,$i+1,$l);
return $ext;
}












# Function is Used to Clear the all the data when Cancel the League or tornament Creation
function delete_current_leagie_creation(){
	
	$query="SELECT * FROM ict_admin where id=".$_SESSION['new_simple_admin_id'];
	$data=mysql_query($query);
	$nums=mysql_num_rows($data);
		if($nums!=0){
			$query_delete="DELETE FROM ict_admin WHERE  id=".$_SESSION['new_simple_admin_id'];
			mysql_query($query_delete);
		}

	$query="SELECT * FROM ict_clube_detail where admin_id=".$_SESSION['new_simple_admin_id'];
	$data=mysql_query($query);
	$nums=mysql_num_rows($data);
		if($nums!=0){
			$query_delete="DELETE FROM ict_clube_detail WHERE  admin_id=".$_SESSION['new_simple_admin_id'];
			mysql_query($query_delete);
		}

	$query="SELECT * FROM ict_menu_foradmin where admin_id=".$_SESSION['new_simple_admin_id'];
	$data=mysql_query($query);
	$nums=mysql_num_rows($data);
		if($nums!=0){
			$query_delete="DELETE FROM ict_menu_foradmin WHERE  admin_id=".$_SESSION['new_simple_admin_id'];
			mysql_query($query_delete);
		}
		
	$query="SELECT * FROM ict_menu_forplayer where admin_id=".$_SESSION['new_simple_admin_id'];
	$data=mysql_query($query);
	$nums=mysql_num_rows($data);
		if($nums!=0){
			$query_delete="DELETE FROM ict_menu_forplayer WHERE  admin_id=".$_SESSION['new_simple_admin_id'];
			mysql_query($query_delete);
		}	
	
	$query="SELECT * FROM ict_adv where club_id=".$_SESSION['new_league_id'];
	$data=mysql_query($query);
	$nums=mysql_num_rows($data);
		if($nums!=0){
			$query_delete="DELETE FROM ict_adv WHERE  club_id=".$_SESSION['new_league_id'];
			mysql_query($query_delete);
		}	
		
		
	unset($_SESSION['new_simple_admin_id']);
	unset($_SESSION['new_league_id']);
	
}




# Function is Used to Clear the all the Sesstion Cancel the League With tornament Creation
function delete_current_leagie_with_tornament_creation(){

	unset($_SESSION['new_simple_admin_id']);
	unset($_SESSION['new_league_id']);
	unset($_SESSION['change_id']);
	
}



# To Generate Randam Password
function password_gen(){
	
	$pwd="";
	for($i=0;$i<rand(8,8);$i++)
		{ 
		  $num=rand(48,122);
		  if(($num >= 97 && $num <= 122))  {   $pwd.=chr($num);}
		  else if(($num >= 65 && $num <= 90)) {  $pwd.=chr($num);}
		  else if(($num >=48 && $num <= 57))   {  $pwd.=chr($num);}
		  else    $i--;
		}
	return $pwd; 
	
}





function Sending_mail(){
	$query_admin="Select * From ict_admin where id=".$_SESSION['new_simple_admin_id'];
	$data_admin=mysql_query($query_admin);
	while($row_admin=mysql_fetch_assoc($data_admin)){
	 	$admin_mail_id=$row_admin['email'];
		$admin_first_name=$row_admin['first_name'];
		$admin_last_name=$row_admin['last_name'];
		$admin_password=$row_admin['password'];		
	}
	
	$query_admin="Select * From ict_master_admin";
	$data_admin=mysql_query($query_admin);
	while($row_admin=mysql_fetch_assoc($data_admin)){
		$master_mail_id=$row_admin['email'];
	}
	
	 $query_clube="Select * From ict_clube_detail where id=".$_SESSION['new_league_id'];
	$data_clube=mysql_query($query_clube);
	while($row_clube=mysql_fetch_assoc($data_clube)){
	 	$clube_name=$row_clube['clube_name'];
	 	$clube_type=$row_clube['game_type'];
	}
	
	
	
					
							
	// sends the HTML email to USER With Details of USERNAME & PASSWORD
 	$to_mailForSender  = $admin_mail_id.','.$master_mail_id;							
	// Subject for the mail
	if($clube_type==1){
	 $subject_mailForSender = 'INHARINGEY-You are appointed as a admin for the League "'.$clube_name.'"';	
	}
	else{
 	$subject_mailForSender = 'INHARINGEY-You are appointed as a admin for the Tournaments "'.$clube_name.'"';	
	}
	
	
	// Message for the mail
	$message_mailForSender='<table width="600">
	<tr>
		<td background="http://www.iclienttech.com/client/inharingey/files/images/slice.gif" height="96">
		<img src="http://www.iclienttech.com/client/inharingey/files/images/logo.gif">
		</td>
	</tr>
	<tr>
		<td height="400" valign="top">
		<p>&nbsp;&nbsp;Dear '.$admin_first_name." ".$admin_last_name.',</p>';
	if($clube_type==1){
	$message_mailForSender.='<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You are appointed as a admin for the League "'.$clube_name.'"</p>';
	}
	else{
	$message_mailForSender.='<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You are appointed as a admin for the  Tournaments "'.$clube_name.'"</p>';
	}	
		
	    $message_mailForSender.='<p>&nbsp;&nbsp;&nbsp;&nbsp;Your Username:<b>'.$admin_mail_id.'</b></p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;Your Password:<b>'.convert($admin_password,$key).'</b></p>
		<p><br /></p>
		<p><br /></p>
		<p><br /></p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;Thanks and Regards</p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;INHARINGEY Team</p>							
		</td>
	</tr>
	<tr>
		<td background="http://www.iclienttech.com/client/inharingey/files/images/slice.gif" height="96"></td>
	</tr>
	</table>';	
	// To send HTML mail, the Content-type header must be set
	$headers_mailForSender = 'From: info@iclienttech.com' . "\r\n" .'Reply-To:'.$admin_mail_id. "\r\n" .'X-Mailer: PHP/' . phpversion();
	$headers_mailForSender .= 'MIME-Version: 1.0' . "\r\n";
	$headers_mailForSender .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";					
	mail($to_mailForSender, $subject_mailForSender, $message_mailForSender, $headers_mailForSender);
}





# Functoion for Encription and Decryption.
# Function which is able to perform encryption and decryption
$key='iCLIENT2010';
function convert($text, $key = ''){
	// return text unaltered if the key is blank
	if ($key == ''){
	return $text;
	}

	// remove the spaces in the key
	$key = str_replace(' ', '', $key);
	if (strlen($key) < 8){
		exit('key error');
	}

	// set key length to be no more than 32 characters
	$key_len = strlen($key);
	if ($key_len > 32){
		$key_len = 32;	
	}

	$k = array(); // key array
	// fill key array with the bitwise AND of the ith key character and 0x1F
	for ($i = 0; $i < $key_len; ++$i){
		$k[$i] = ord($key{$i}) & 0x1F;
	}


	// perform encryption/decryption
	for ($i = 0, $j = 0; $i < strlen($text); ++$i)
	{
		$e = ord($text{$i});	
		/********
		if the bitwise AND of this character and 0xE0 is non-zero
		set this character to the bitwise XOR of itself and the jth key element
		else leave this character alone
		********/
		if ($e & 0xE0){
			$text{$i} = chr($e ^ $k[$j]);
		}
	// increment j, but ensure that it does not exceed key_len-1
	$j = ($j + 1) % $key_len;
	}

	return $text;
}


function daysDifference($endDate, $beginDate)
{
   //explode the date by "-" and storing to array
   $date_parts1=explode("-", $beginDate);
   $date_parts2=explode("-", $endDate);
   //gregoriantojd() Converts a Gregorian date to Julian Day Count
   $start_date=gregoriantojd($date_parts1[1], $date_parts1[2], $date_parts1[0]);
   $end_date=gregoriantojd($date_parts2[1], $date_parts2[2], $date_parts2[0]);
   return $end_date - $start_date;
}  
      
	  
function yearDifference($new_date)
{
$date=date('Y-m-d');
echo round(daysDifference($date,$new_date)/365);
}



/**
 * Truncates a string to a certain length
 * @param string $text
 * @param int $limit
 * @param string $ending
 * @return string
 */
function truncate($text,$limit,$ending) {
	if (strlen($text) > $limit) {
		$text = strip_tags($text);
		$text = substr($text, 0, $limit);
		$text = substr($text, 0, -(strlen(strrchr($text, ' '))));
		$text = $text . $ending;
	}
	
	return $text;
}



function show_top_menu()
{
?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<h1>Top Menu</h1></td><td width="80" align="right"><a href="change_order_top_menu">Change Order</a></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php     $query_select="Select * from ict_top_menu where delete_status=0 ORDER BY order_id,created_date ASC";
				$date_select=mysql_query($query_select);
				$no_of_rows=mysql_num_rows($date_select);
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Name</b></td>
					<td width="100"><b>Status</b></td>
					<td width="20"><b>Advert</b></td>														
					<td width="20"><b>Edit</b></td>					
					</tr>
					<?php     while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300" class="link"><a onclick="open_link('<?php     echo $row['admin_link'];?>')"><?php    echo $row['menu_name'];?></a></td>	
					<td width="100">
					<?php    if($row['active_status']==1)
					{
					echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0)
					{
					echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					
					
					</td>	
					<td width="20">				
					<a href="?id=1&edit_id=<?php echo $row['id']?>">
					<img src="../files/icons/video.png"  border="0"/>					
					</a>				
					</td>						
					<td width="20">				
					<a href="?id=1&page_left=<?php echo $row['id']?>">
					<img src="../files/icons/page_white_edit.png"  border="0"/>					
					</a>				
					</td>				
							
					</tr>
					<?php     }
				}
				
				?>
				
			</table>
		</td>
	</tr>			
	<tr><td class="tit">
	<!--<input class="ict_btn" onClick="link_foto('1');" type="button" value="Add Pages"  name="head_create"/>-->
	</td></tr>
</table>
<?php     }

function edit_top_menu()
{
?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI"></td></tr>
	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0">
				<?php  
				$query_select="Select * from ict_top_menu where id=".$_REQUEST['page_left'];
				$date_select=mysql_query($query_select);
				$no_of_rows=mysql_num_rows($date_select);
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>No Such Menu</td>					
					</tr>
					<?php     }
				else
				{

					while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td>
					<form action="view_pages_part.php?id=1" method="post">
					<table>
						<tr>
							<td>Menu Name</td>
							<td>
							<input type="text"  name="menu" value="<?php    echo $row['menu_name'];?>"/>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select>
								<option value="1" <?php    if($row['active_status']==1){ ?> selected="selected" <?php     }?>>ACTIVATED</option>
								<option value="2" <?php    if($row['active_status']==2){ ?> selected="selected" <?php     }?>>DEACTIVATED</option>								
							</select>
							</td>
						</tr>
						<tr>
							<td colspan="2">
							<input type="hidden"  name="menu_id" value="<?php    echo $row['id'];?>"/>
							<input type="submit"  class="ict_btn"  name="menu_save" value="UPDATE" />
							<input type="button" class="ict_btn" value="BACK" onClick="open_link('view_pages_part.php?id=1');" />
							</td>
						</tr>
					</table>
					</form>
					</td>	
					</tr>
					<?php     }
				}
				
				?>
				
			</table>
		</td>
	</tr>			
	<tr><td class="tit"></td></tr>
	</table>
<?php     }

function adv_top_menu()
{
 if($_POST['adve_add']){
 
		$file_name1 = $_FILES['advfile']['name'];
				if($file_name1)
				{
					$random_digit1=rand(0000,9999);
				 	$new_file_name1=$random_digit1.$file_name1;
					if($_POST['adv_type']==2)
					{
					$path1= "../files/adv_flashs/".$new_file_name1;
					}
					if($_POST['adv_type']==1)
					{
				 	$path1= "../files/adv_image/".$new_file_name1;
					}
					
					if($ufile !=none)
					{
							copy($_FILES['advfile']['tmp_name'], $path1);
					}
					
$query_insert="INSERT INTO ict_adv_postion_tbl(id,menu_id,position_id,display_name,adv_type,adv_image,adv_img_link,from_date,to_date,active_status) VALUES (Null,'".$_REQUEST['edit_id']."','".$_POST['position_id']."','".$_POST['display_name']."','".$_POST['adv_type']."','".$new_file_name1."','".$_POST['adv_img_link']."','".$_POST['from_date']."','".$_POST['to_date']."','".$_POST['active_status']."')";				
}			
else
{				
if($_POST['adv_html'])
{
$new_file_name1=$_POST['adv_html']; 

$query_insert="INSERT INTO ict_adv_postion_tbl(id,menu_id,position_id,display_name,adv_type,adv_image,adv_img_link,from_date,to_date,active_status) VALUES (Null,'".$_REQUEST['edit_id']."','".$_POST['position_id']."','".$_POST['display_name']."','".$_POST['adv_type']."','".$new_file_name1."','".$_POST['adv_img_link']."','".$_POST['from_date']."','".$_POST['to_date']."','".$_POST['active_status']."')";
 }
else
{
$query_insert="INSERT INTO ict_adv_postion_tbl(id,menu_id,position_id,display_name,adv_type,adv_img_link,from_date,to_date,active_status) VALUES (Null,'".$_REQUEST['edit_id']."','".$_POST['position_id']."','".$_POST['display_name']."','".$_POST['adv_type']."','".$_POST['adv_img_link']."','".$_POST['from_date']."','".$_POST['to_date']."','".$_POST['active_status']."')";
 }
 }
mysql_query($query_insert);
}
 	




if($_REQUEST['adve_edit'])
{
$query_update="UPDATE ict_adv_postion_tbl SET position_id='".$_POST['position_id']."',display_name='".$_POST['display_name']."',content='".$_POST['content']."',from_date='".$_POST['from_date']."',to_date='".$_POST['to_date']."',active_status='".$_POST['active_status']."' WHERE id=".$_POST['sub_id'];
mysql_query($query_update);
}



 
 if($_POST['adve_edit']){
 
 		$file_name1 = $_FILES['advfile']['name'];
				if($file_name1)
				{
					$random_digit1=rand(0000,9999);
				 	$new_file_name1=$random_digit1.$file_name1;
					if($_POST['adv_type']==2)
					{
					$path1= "../files/adv_flashs/".$new_file_name1;
					copy($_FILES['advfile']['tmp_name'], $path1);
					$info = getimagesize($path1);
				    $width = $info[0];
				    $height = $info[1];
					//print "{$width}x{$height}\n";

					}
					if($_POST['adv_type']==1)
					{
				 	$path1= "../files/adv_image/".$new_file_name1;
					copy($_FILES['advfile']['tmp_name'], $path1);
					}
					

$query_update="UPDATE ict_adv_postion_tbl SET position_id='".$_POST['position_id']."',display_name='".$_POST['display_name']."',adv_type='".$_POST['adv_type']."',adv_image='".$new_file_name1."',adv_img_link='".$_POST['adv_img_link']."',from_date='".$_POST['from_date']."',to_date='".$_POST['to_date']."',active_status='".$_POST['active_status']."' WHERE id=".$_POST['sub_id'];				
}			
else
{				
if($_POST['adv_html'])
{
$new_file_name1=$_POST['adv_html']; 


$query_update="UPDATE ict_adv_postion_tbl SET position_id='".$_POST['position_id']."',display_name='".$_POST['display_name']."',adv_type='".$_POST['adv_type']."',adv_image='".$new_file_name1."',adv_img_link='".$_POST['adv_img_link']."',from_date='".$_POST['from_date']."',to_date='".$_POST['to_date']."',active_status='".$_POST['active_status']."' WHERE id=".$_POST['sub_id'];
 }
else
{
$query_update="UPDATE ict_adv_postion_tbl SET position_id='".$_POST['position_id']."',display_name='".$_POST['display_name']."',adv_type='".$_POST['adv_type']."',adv_img_link='".$_POST['adv_img_link']."',from_date='".$_POST['from_date']."',to_date='".$_POST['to_date']."',active_status='".$_POST['active_status']."' WHERE id=".$_POST['sub_id'];
 }
 }
mysql_query($query_update);
}
 	
?>
<form method="post" action="advert_edit.php?menu_id=<?php echo $_REQUEST['edit_id'] ?>">	
<table class="main_tables" border="0" width="500">
	<tr><td class="HEAD_TI" colspan="7">
	<table border="0" width="500" class="sub_tbl">
		<tr><td>
	<h1>Advertisement Part</h1></td><td width="80" align="right"><a href="change_order_news"></a></td>
	</table>
	</td></tr>
		<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" border="0" width="500">
							
				
						<tr>					
						<td align="center" ><b>ID</b></td>
						<td align="left"><b>Adv Position</b></td>					
						<td align="left"><b>Adv Name</b></td>
						<td align="center"><b>Adv Upto date</b></td>	
						<td align="center">Status</td>										
						<td colspan="2"></td>
						</tr>
						<?php
							$query_user="Select * from ict_adv_postion_tbl where menu_id='".$_REQUEST['edit_id']."' order by id asc";
							$date_user=mysql_query($query_user);
							$i=1;
							while($row_a= mysql_fetch_assoc($date_user))
							{ 
						?>				
						<tr>						
							<td width="10"  align="center" valign="top"><?php echo $i;?></td>
							<td align="left" width="200" valign="top">
							<?php
								$query2="SELECT * FROM ict_position_ad where id=".$row_a['position_id'];
								$data2=mysql_query($query2);
								while($row2 = mysql_fetch_assoc($data2)) {	
								echo $row2['position_name'];
								}							
							 ?>
							</td>			
							<td align="left" width="200"><?php echo $row_a['display_name'];?></td>	
							<td valign="top">
								<?php echo display_date_only($row_a['from_date']);?>&nbsp;to&nbsp;<?php echo display_date_only($row_a['to_date']);?>				
							</td>
							<td width="100">
							<?php    if($row_a['active_status']==1){
								echo '<span class="green">ACTIVATED</span>';
							}
							if($row_a['active_status']==0){
								echo '<span class="red">DEACTIVATED</span>';
							}
							?>
							</td>										
							<td align="center" width="20" valign="top"><a href="advert_edit.php?edit_id=<?php echo $row_a['id'];?>&menu_id=<?php echo $_REQUEST['edit_id'] ?>"><img src="../files/icons/page_white_edit.png "  border="0"/></a></td>
							<td></td>
						</tr>							
						<?php
						$i=$i+1;
							}
						?>
			</td>
		</tr>			
	<tr><td class="tit" colspan="9">
		<input type="submit" value="ADD" class="ict_btn"  name="insert_btn"/>
	</td></tr>
</table>
</form>
<?php     }



/*-------------------------------------------------------------------NEWS PART Start------------------------------------------------------------------------------*/

function show_left_menu()
{
?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="view_pages_part.php?id=2">&#2990;&#3009;&#2965;&#2986;&#3021;&#2986;&#3009;</a></td>
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"><a href="change_order_left_menu">Change Order</a></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php 
			    $query_select="Select * from ict_left_menu where delete_status=0 ORDER BY order_id,created_date ASC";
				$date_select=mysql_query($query_select);
				$no_of_rows=mysql_num_rows($date_select);
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Name</b></td>
					<td width="100"><b>Status</b></td>					
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
					<?php     while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a href="?id=2&sub_menu_left=<?php     echo $row['id']?>"><?php    echo $row['menu_name'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1){
						echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0){
						echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
					<td align="center" width="20"><a href="?id=2&sub_menu_left=<?php     echo $row['id']?>"><img src="../files/icons/sitemap_color.png"  border="0"/></a></td>
					<td align="center" width="20"><a href="?id=2&page_left=<?php     echo $row['id']?>"><img src="../files/icons/page_white_edit.png "  border="0"/></a></td>		
					<td align="center" width="20">
					<?php
					if($row['id']==20)
					{
					?>
					<img src="../files/icons/cancel_BW.png"  border="0"/>
					<?php
					}
					else
					{
					?>
					<a href="?id=2&delete_left=<?php echo $row['id']?>" onClick="return confirm('Are you sure want to delete &quot;<?php    echo $row['menu_name'];?>&quot; ?')"><img src="../files/icons/cancel.png"  border="0"/></a>				
					<?php
					}
					?>				
					</td>					
					<?php     }
				}				
				?>
				
			</table>
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('view_pages_part.php?id=2&add_left=1');" type="button" value="ADD"  name="head_create"/>
	</td></tr>
</table>
<?php     }

function edit_left_menu()
{


				$query_select="Select * from ict_left_menu where id=".$_REQUEST['page_left'];
				$date_select=mysql_query($query_select);
				$no_of_rows=mysql_num_rows($date_select);
?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="view_pages_part.php?id=2">&#2990;&#3009;&#2965;&#2986;&#3021;&#2986;&#3009;</a></td>
				<td><img src="../files/icons/ar.png" /></td>	
				<td>
				<?php    
					while($row= mysql_fetch_assoc($date_select))
					{				
				?>
				<a><?php    echo $row['menu_name'];?></a>
		
				</td>	
				<td><img src="../files/icons/ar.png" /></td>						
				<td><a>EDIT</a></td>		
			</tr>	
		</table>				
	</span>		
	
	</td><td width="80" align="right"><a href="change_order_left_menu">Change Order</a></td>
	</table>	
	</td></tr>
	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0">
				<?php    if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>No Such Menu</td>					
					</tr>
					<?php     }
				else
				{
							
					?>				
					<tr>
					<td>
					<form action="view_pages_part.php?id=2" method="post">
					<table>
						<tr>
							<td>Menu Name</td>
							<td>
							<input type="text"  name="menu" value="<?php    echo $row['menu_name'];?>"/>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" <?php    if($row['active_status']==1){ ?> selected="selected" <?php     }?>>ACTIVATED</option>
								<option value="0" <?php    if($row['active_status']==0){ ?> selected="selected" <?php     }?>>DEACTIVATED</option>								
							</select>
							</td>
						</tr>
						<tr>
							<td colspan="2">
							<input type="hidden"  name="menu_id" value="<?php    echo $row['id'];?>"/>
							<input type="submit"  class="ict_btn"  name="menu_left_update" value="UPDATE" />
							<input type="button" class="ict_btn" value="BACK" onClick="open_link('view_pages_part.php?id=2');" />
							</td>
						</tr>
					</table>		
					</form>
					</td>	
					</tr>
					<?php     }
				}
				
				?>
				
			</table>
		</td>
	</tr>			
	<tr><td class="tit"></td></tr>
	</table>
<?php     }

function add_left_menu()
{
?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="view_pages_part.php?id=2">&#2990;&#3009;&#2965;&#2986;&#3021;&#2986;&#3009;</a></td>
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="view_pages_part.php?id=2&add_left=1">ADD</a></td>		
			</tr>	
		</table>				
	</span>		
	
	</td><td width="80" align="right"><a href="change_order_left_menu">Change Order</a></td>
	</table>
	</td></tr>
	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0">
			
					<tr>
					<td>
					<form action="view_pages_part.php?id=2" method="post">
					<table>
						<tr>
							<td>Menu Name</td>
							<td>
							<input type="text" name="menu_name"/>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" selected="selected" >ACTIVATED</option>
								<option value="0" >DEACTIVATED</option>								
							</select>
							</td>
						</tr>
						<tr>
							<td colspan="2">
							<input type="hidden"  name="menu_id" value="<?php    echo $row['id'];?>"/>
							<input type="submit"  class="ict_btn"  name="menu_left_save" value="SAVE" />
							<input type="button" class="ict_btn" value="BACK" onClick="open_link('view_pages_part.php?id=2');" />
							</td>
						</tr>
					</table>		
		
					</form>
					</td>	
					</tr>				
			</table>
		</td>
	</tr>			
	<tr><td class="tit"></td></tr>
	</table>
<?php     }






function show_left_sub_menu($submenu_id)
{

			if($_REQUEST['add_left_sub_menu'])
			{
			$query_insert="INSERT INTO ict_left_sub_menu(menu_name,active_status,left_menu_id) VALUES ('".$_POST['menu_name']."','".$_POST['active_status']."','".$_POST['sub_sub_menu_id']."')";
			mysql_query($query_insert);
			}
?>
	<table class="main_tables" border="0">
	
	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>	
	<?php     $query_select_left_menu="Select * from ict_left_menu where id=".$submenu_id;
	$date_select_left_menu=mysql_query($query_select_left_menu);
	while($row_left_menu= mysql_fetch_assoc($date_select_left_menu))
	{	
	?>
	<span class="con">	
		<table>
			<tr>
				<td><a href="view_pages_part.php?id=2">&#2990;&#3009;&#2965;&#2986;&#3021;&#2986;&#3009;</a></td>
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="view_pages_part.php?id=2&sub_menu_left=<?php     echo $submenu_id?>"><?php     echo $row_left_menu['menu_name']?></a></td>		
			</tr>	
		</table>				
	</span>		
	</td>
	<td width="80" align="right"><a href="change_order_left_sub_menu/?sub_menu_id=<?php     echo $row_left_menu['id']?>">Change Order</a></td>
	<?php     }	
	?>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php     $query_select="Select * from ict_left_sub_menu where left_menu_id=".$submenu_id." AND delete_status=0 ORDER BY order_id,created_date ASC";
				$date_select=mysql_query($query_select);
				$no_of_rows=mysql_num_rows($date_select);
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Name</b></td>
					<td width="100"><b>Status</b></td>					

					<td width="20"></td>										
					<td width="20"></td>															
					</tr>
					<?php 
					$k=1;
					 while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a href="?id=2&sub_menu_news_id=<?php echo $row['id']?>"><?php    echo $row['menu_name'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1)
					{
					echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0)
					{
					echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
					<?php if($submenu_id==20){ ?>
					<td align="center" width="20"><a href="rasi_list.php?type_id=<?php echo $k; ?>&sub_id=<?php echo $submenu_id; ?>"><img src="../files/icons/sitemap_color.png"  border="0"/></a></td>
					<?php
					}
					else
					{
					?>
					<td align="center" width="20"><a href="?id=2&sub_menu_news_id=<?php echo $row['id']?>"><img src="../files/icons/sitemap_color.png"  border="0"/></a></td>
					<?php
					}
					?>					
					<td width="20">				
					<a href="?id=2&sub_menu_left=<?php     echo $submenu_id?>&edit_sub_menu=<?php     echo $row['id']?>">
					<img src="../files/icons/page_white_edit.png"  border="0"/>					
					</a>					
					</td>
					<td width="20">				
						<a href="?id=2&sub_menu_left=<?php     echo $submenu_id?>&delete_left=<?php     echo $row['id']?>"  onClick="return confirm('Are you sure want to delete &quot;<?php    echo $row['menu_name'];?>&quot; ?')">
						<img src="../files/icons/cancel.png"  border="0"/>					
						</a>					
					</td>
					<?php 
					$k=$k+1;
					    }
				}
				
				?>
				
			</table>
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('view_pages_part.php?id=2');" type="button" value="BACK"  name="head_create"/>
	<input class="ict_btn" onClick="open_link('view_pages_part.php?id=2&sub_menu_left=<?php     echo $submenu_id?>&add_sub_menu=<?php     echo $submenu_id?>');" type="button" value="ADD"  name="head_create"/>
	</td></tr>
</table>
<?php     }



function add_left_sub_menu($submenu_id)
{
?>
<form action="view_pages_part.php?id=2&sub_menu_left=<?php     echo $submenu_id?>" method="post">
	<table class="main_tables" border="0">
	<tr><td class="HEAD_TI">
		<table border="0" width="100%" class="sub_tbl">
		<tr><td>	
		<?php     $query_select_left_menu="Select * from ict_left_menu where id=".$submenu_id;
		$date_select_left_menu=mysql_query($query_select_left_menu);
		while($row_left_menu= mysql_fetch_assoc($date_select_left_menu))
		{	
		?>
		<span class="con">	
			<table>
				<tr>
					<td><a href="view_pages_part.php?id=2">&#2990;&#3009;&#2965;&#2986;&#3021;&#2986;&#3009;</a></td>
					<td><img src="../files/icons/ar.png" /></td>		
					<td><a href="view_pages_part.php?id=2&sub_menu_left=<?php     echo $submenu_id?>"><?php     echo $row_left_menu['menu_name']?></a></td>		
					<td><img src="../files/icons/ar.png" /></td>		
					<td><a href="view_pages_part.php?id=2&sub_menu_left=<?php     echo $submenu_id?>&add_sub_menu=1">ADD</a></td>		
				</tr>	
			</table>				
		</span>		
		</td>
		<td width="80" align="right"></td>
		<?php     }	
		?>
		</table>
	</td></tr>

	<tr>
		<td class="tit">					
			
				<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
					<tr>
						<td>Menu Name</td>
						<td>
						<input type="text" name="menu_name"/>
						<input type="hidden"  value="<?php     echo $submenu_id?>" name="sub_sub_menu_id" />
						</td>
					</tr>	
					<tr>
						<td>Active Status</td>
						<td>
						<select name="active_status">
						<option value="1" selected="selected" >ACTIVATED</option>
						<option value="0" >DEACTIVATED</option>								
						</select>
						</td>
					</tr>
				</table>
			
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" type="submit" value="SAVE"  name="add_left_sub_menu"/>
	<input class="ict_btn" onClick="open_link('view_pages_part.php?id=2&sub_menu_left=<?php     echo $submenu_id?>');" type="button" value="BACK"  name="head_create"/>	
	</td></tr>
</table>
</form>
<?php     }


function edit_left_sub_menu($submenu_id)
{
?>
<form action="view_pages_part.php?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>" method="post">
	<table class="main_tables" border="0">
	
	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>	
	<?php     $query_select_left_menu="Select * from ict_left_sub_menu where left_menu_id=".$_REQUEST['sub_menu_left']." LIMIT 0,1";
	$date_select_left_menu=mysql_query($query_select_left_menu);
	while($row_left_menu= mysql_fetch_assoc($date_select_left_menu))
	{	
	?>
	<span class="con">	
		<table>
			<tr>
				<td><a href="view_pages_part.php?id=2">&#2990;&#3009;&#2965;&#2986;&#3021;&#2986;&#3009;</a></td>
				<td><img src="../files/icons/ar.png" /></td>
				<td><a href="view_pages_part.php?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>"><?php     $query_select_left="Select * from ict_left_menu where id=".$_REQUEST['sub_menu_left'];
				$date_select_left=mysql_query($query_select_left);
				while($row_left= mysql_fetch_assoc($date_select_left))
				{echo $row_left['menu_name'];}	
				?></a></td>				
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="view_pages_part.php?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>"><?php     echo $row_left_menu['menu_name']?></a></td>		
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="view_pages_part.php?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>&edit_sub_menu=1">EDIT</a></td>		
			</tr>	
		</table>				
	</span>		
	
	</td>
	<td width="80" align="right"></td>

	</table>
	</td></tr>

	<tr>
		<td class="tit">					
<?php     $query_a="Select * from ict_left_sub_menu where id=".$_REQUEST['edit_sub_menu'];
	$date_a=mysql_query($query_a);
	while($row_a= mysql_fetch_assoc($date_a))
	{	
	?>
				<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
					<tr>
						<td>Menu Name</td>
						<td>
						<input type="text" name="menu_name" value="<?php     echo $row_a['menu_name']?>"/>
						<input type="hidden" name="edit_sub_menu_id" value="<?php     echo $_REQUEST['edit_sub_menu'];?>" />
						</td>
					</tr>	
					<tr>
						<td>Active Status</td>
						<td>
						<select name="active_status">
						<option value="1" <?php     if($row_a['active_status']==1){?> selected="selected"<?php     } ?> >ACTIVATED</option>
						<option value="0" <?php     if($row_a['active_status']==0){?> selected="selected"<?php     } ?> >DEACTIVATED</option>								
						</select>
						</td>
					</tr>
				</table>
<?php     }
?>				

		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('view_pages_part.php?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>');" type="button" value="BACK"  name="head_create"/>
	<input class="ict_btn"  type="submit" value="UPDATE"  name="update_left_sub_menu"/>
	</td></tr>
</table>
</form>
<?php     }
}





function show_left_sub_menu_news($sub_menu_news_id)
{
$Limit = 10; 
$page=$_GET["view_id"]; //Get the page number to show
if($page == ""||!$page) $page=1; //If no page number is set, the default page is 1



	if($_POST['save_news']){
	
			
		 	$file_name1 = $_FILES['ufile']['name'];
			if($file_name1)
			{
				$random_digit1=rand(0000,9999);
				$new_file_name1=$random_digit1.$file_name1;
				$path1= "../files/uploading_news_img/".$new_file_name1;
				$path3= "../files/uploading_news_img/new_".$new_file_name1;				
			 	$path2= "../files/uploading_news_img/th_".$new_file_name1;				
				
										
				
				if($ufile !=none)
				{
						copy($_FILES['ufile']['tmp_name'], $path1);
				}	
				
				
						list($width, $height, $type, $attr) = getimagesize($path1);



		$image_data1="th_".$new_file_name1;
		$image_data2=$new_file_name1;	
			
		if($width>650){
		//define a maxim size for the uploaded images
			define ("MAX_SIZE","999999");
			define ("WIDTH","650");
			define ("HEIGHT","350");
			make_thumb($path1,$path3,WIDTH,HEIGHT);		
			make_thumb($path3,$path2,"193","100");	
			unlink($path1);
			
			
		}
		else{
			copy($path1, $path3);
			define ("MAX_SIZE","999999");			
			make_thumb($path3,$path2,"193","100");	
			unlink($path1);			
		
		}
					
			}

		
				
	
	
	
$query_insert="INSERT INTO ict_news (id,sub_menu_id,news_title,news_content,news_keywords,news_image,active_status,created_date) VALUES (NULL, '".$_POST['news_sub_group_id']."', '".$_POST['news_title']."','".$_POST['news_content']."','".$_POST['news_keywords']."','".$new_file_name1."', '1', now());";
	
	mysql_query($query_insert);	
	}
	
	if($_POST['update_news'])
	{
	
	
	
		  	$file_name1 = $_FILES['ufile']['name'];
			if($file_name1)
			{
				$random_digit1=rand(0000,9999);
				$new_file_name1=$random_digit1.$file_name1;
				$path1= "../files/uploading_news_img/".$new_file_name1;
				$path3= "../files/uploading_news_img/new_".$new_file_name1;				
			 	$path2= "../files/uploading_news_img/th_".$new_file_name1;				
				
										
				
				if($ufile !=none)
				{
						copy($_FILES['ufile']['tmp_name'], $path1);
				}	
				
				
						list($width, $height, $type, $attr) = getimagesize($path1);



		$image_data1="th_".$new_file_name1;
		$image_data2=$new_file_name1;	
			
		if($width>650){
		//define a maxim size for the uploaded images
			define ("MAX_SIZE","999999");
			define ("WIDTH","650");
			define ("HEIGHT","350");
			make_thumb($path1,$path3,WIDTH,HEIGHT);		
			make_thumb($path3,$path2,"193","100");	
			unlink($path1);
			
			
		}
		else{
			copy($path1, $path3);
			define ("MAX_SIZE","999999");			
			make_thumb($path3,$path2,"193","100");	
			unlink($path1);			
		
		}
					
			}
			
	  $query_update="UPDATE ict_news SET news_title='".$_POST['news_title']."',news_image='".$new_file_name1."',news_content='".$_POST['news_content']."',news_keywords='".$_POST['news_keywords']."' WHERE id=".$_POST['news_sub_group_id'];
	mysql_query($query_update);
	}
	if($_REQUEST['delete_id']){
		$query_delete="DELETE FROM ict_news WHERE id =".$_REQUEST['delete_id'];
		mysql_query($query_delete);
	}



$query_main_category="Select * from ict_left_menu  where active_status=1 AND delete_status=0";
$date_main_category=mysql_query($query_main_category);
while($row_main_category= mysql_fetch_assoc($date_main_category))
{	
$left_menu_id=$row_main_category['id'];	
}
?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="?id=2">&#2990;&#3009;&#2965;&#2986;&#3021;&#2986;&#3009;</a></td>
				<td><img src="../files/icons/ar.png" /></td>
				<?php     $query_sub_menu="Select * from ict_left_sub_menu where id=".$_REQUEST['sub_menu_news_id'];
				$date_sub_menu=mysql_query($query_sub_menu);
				while($row_sub_menu= mysql_fetch_assoc($date_sub_menu))
				{
				$main_menu_id=$row_sub_menu['left_menu_id'];
				
				
						$query_main_menu="Select * from ict_left_menu where id=".$main_menu_id;
						$date_main_menu=mysql_query($query_main_menu);
						while($row_main_menu= mysql_fetch_assoc($date_main_menu))
						{
						?>
						<td><a href="?id=2&sub_menu_left=<?php     echo $back_menu_id=$row_main_menu['id'];?>"><?php     echo $row_main_menu['menu_name'];?></a></td>						
						<?php     }		
						?><td><img src="../files/icons/ar.png" /></td><td><a href=""><?php    echo $row_sub_menu['menu_name'];						
				
				
				
				}			
				?></a></td>				
								
			</tr>	
		</table>				
	</span>	

	</td>
	<td width="400" align="right"><span class="con"><a>View News in</a></span>

									<select name="news_category"  onchange="connect_pagination_for_news(this.value)">
									<option value="0" <?php    if($_REQUEST['view']==0){ ?> selected="selected" <?php     }?>>View All News</option>
									<?php     $query_main_category="Select * from ict_left_menu  where active_status=1 AND delete_status=0";
									$date_main_category=mysql_query($query_main_category);
									while($row_main_category= mysql_fetch_assoc($date_main_category))
									{	
									
									
									echo '<optgroup label="'.$row_main_category['menu_name'].'">';
									
							$query_c="Select * from ict_left_sub_menu where left_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0 LIMIT 0 , 1";
							$date_c=mysql_query($query_c);
							while($row_c= mysql_fetch_assoc($date_c))
							{	
							$first_id=$row_c['id'];				
							}									
					
									
							$query_category="Select * from ict_left_sub_menu where left_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0";
											$date_category=mysql_query($query_category);
											while($row_category= mysql_fetch_assoc($date_category))
											{					
											echo '<option value="'.$row_category['id'].'" ';
											if($_REQUEST['sub_menu_news_id']==$row_category['id']){ ?> selected="selected" <?php     }
											echo '">';											
										
											echo $row_category['menu_name'];
											echo '</option>';
											
											}
									echo '</optgroup>';
									}
									?>
							</select>	
	</td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php    if($_REQUEST['sub_menu_news_id']==0){
					$cintent='';
					}
					else{
					$cintent='	sub_menu_id='.$_REQUEST['sub_menu_news_id'].' AND ';				
					}
			  	$query_st="Select * from ict_news where  ".$cintent."  delete_status=0 ORDER BY created_date DESC";
				$date_st=mysql_query($query_st);
				$no_of_rows=mysql_num_rows($date_st);
				$NumberOfPages=ceil($no_of_rows/$Limit);

				
			    $query_select="Select * from ict_news where  ".$cintent."  delete_status=0 ORDER BY created_date DESC  LIMIT " . ($page-1)*$Limit . ",".$Limit;		
				$date_select=mysql_query($query_select);				
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Name</b></td>
					<td width="100"><b>Status</b></td>		
					<td width="100"><b>Category</b></td>			
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
					<?php    
					while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a><?php    echo $row['news_title'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1){
						echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0){
						echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
					<td width="150">
					<?php 
					    $query_category="Select * from ict_left_sub_menu where id=".$row['sub_menu_id'];
						$date_category=mysql_query($query_category);
						while($row_category= mysql_fetch_assoc($date_category))
						{					
						echo $row_category['menu_name'];
						}
					?>
					</td>					
					<td align="center" width="20">&nbsp;</td>
					<td align="center" width="20"><a href="?id=2&sub_menu_news_id=<?php     echo $_REQUEST['sub_menu_news_id']?>&edit_id=<?php     echo $row['id']; ?>"><img src="../files/icons/page_white_edit.png "  border="0"/></a></td>		
					<td align="center" width="20"><a href="?id=2&sub_menu_news_id=<?php     echo $_REQUEST['sub_menu_news_id'];?>&delete_news=<?php     echo $row['id']?>"  onClick="return confirm('Are you sure want to delete?')"><img src="../files/icons/cancel.png"  border="0"/></a></td>					
					<?php     }
				}
				
				?>
				
			</table>
<?php
if($NumberOfPages==1)
{
}
else
{
?>			
			
<table>
				<tr>
					<td>
			
				<?php    //Create and print the Navigation bar
				$Nav_a="";
				for($i_a =1; $i_a<=$NumberOfPages;$i_a++) {
					if($i_a == $page) {
					
				$Nav_a .="<option value=\"view_pages_part.php?id=2&sub_menu_news_id=".$_REQUEST['sub_menu_news_id']."&view_id=".$i_a."\" selected=\"selected\">".$i_a."</option>";
					}else{
				$Nav_a .="<option value=\"view_pages_part.php?id=2&sub_menu_news_id=".$_REQUEST['sub_menu_news_id']."&view_id=".$i_a."\" >".$i_a."</option>";
					}
				}				
				?>
			
					</td>
				</tr>
			</table>
<table border="0">

			<tr>
	<?php     $Nav="";

	for($i=1;$i<=$NumberOfPages;$i++){
	if($i==$page) {

if($i==1){
	if($NumberOfPages!=1){
		$Nav = '<td width="50">&nbsp;</td><td width="50">';
		$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
		$Nav .='</td><td width="50"><a href="view_pages_part.php?id=2&sub_menu_news_id='.$_REQUEST['sub_menu_news_id'].'&view_id='.($i+1).'"><img src="../files/icons/next.png" border="0"/></a></td>';	
	}
}
else if($i==$NumberOfPages){
$Nav = '<td width="50"><a href="view_pages_part.php?id=2&sub_menu_news_id='.$_REQUEST['sub_menu_news_id'].'&view_id='.($i-1).'"><img src="../files/icons/previous.png"  border="0"/></a></td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50">&nbsp;</td>';
}
else{
$Nav = '<td width="50"><a href="view_pages_part.php?id=2&sub_menu_news_id='.$_REQUEST['sub_menu_news_id'].'&view_id='.($i-1).'"><img src="../files/icons/previous.png" border="0"/></a></td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50"><a href="view_pages_part.php?id=2&sub_menu_news_id='.$_REQUEST['sub_menu_news_id'].'&view_id='.($i+1).'"><img src="../files/icons/next.png" border="0"/></a></td>';
}
					}
				}
				echo  $Nav;					 
 	?>
																 </tr></table>

<?php
}
?>																 
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('?id=2&sub_menu_left=<?php     echo $back_menu_id; ?>');" type="button" value="BACK"  name="head_create"/>
	<input class="ict_btn" onClick="open_link('?id=2&sub_menu_news_id=<?php     echo $_REQUEST['sub_menu_news_id']; ?>&add_new=1');" type="button" value="ADD"  name="head_create"/>
	</td></tr>
</table>
<?php     }


// Function For Add the news Part
function add_new_news($news_head){
?>
<form method="post" action="view_pages_part.php?id=2&sub_menu_news_id=<?php     echo $_REQUEST['sub_menu_news_id']?>" enctype="multipart/form-data">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td><?php     $query_select_left_menu="Select * from ict_left_sub_menu where id=".$news_head;
	$date_select_left_menu=mysql_query($query_select_left_menu);
	while($row_left_menu= mysql_fetch_assoc($date_select_left_menu))
	{	
	?>
	<span class="con">
			<table>
			<tr>
				<td><a href="view_pages_part.php?id=2">&#2990;&#3009;&#2965;&#2986;&#3021;&#2986;&#3009;</a></td>
				<td><img src="../files/icons/ar.png" /></td>				
				<td><?php     $query_select_left_sub="Select * from ict_left_sub_menu where id=".$news_head." LIMIT 0 , 1";
				$date_select_left_sub=mysql_query($query_select_left_sub);
				while($row_left_sub= mysql_fetch_assoc($date_select_left_sub))
				{
					$query_select_left="Select * from ict_left_menu where id=".$row_left_sub['left_menu_id']." LIMIT 0 , 1";
					$date_select_left=mysql_query($query_select_left);
					while($row_left= mysql_fetch_assoc($date_select_left))
					{
						?><a href="view_pages_part.php?id=2&sub_menu_left=<?php     echo $row_left['id']?>"><?php    echo $row_left['menu_name'];
					}	
				}	
				?></a></td>
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="?id=2&sub_menu_news_id=<?php     echo $row_left_menu['id']?>"><?php     echo $row_left_menu['menu_name']?></a></td>	
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="?id=2&sub_menu_news_id=<?php     echo $row_left_menu['id']?>&add_new=1">ADD</a></td>						
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right">&nbsp;</td><?php     }	
	?>
	</tr>
	</table>
	</td></tr>
	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%" border="0">
					<tr>
						<td valign="top" width="90"><b>News Title</b></td>
						<td valign="top" width="1">:</td>						
						<td>						
						<input id="transliterateTextarea1" type="text"  style="width:500px;" name="news_title" />
						<input type="hidden" value="<?php     echo $news_head?>" name="news_sub_group_id" />
						
						</td>					
					</tr>
						
				
					<tr>
						<td valign="top"><b>News Content</b></td>					
						<td valign="top" width="1">:</td>						
						<td><textarea id="transliterateTextarea2" style="width:650px;height:200px" class="myTextEditor"  name="news_content"></textarea></td>
					</tr>	
				
					<tr>
						<td colspan="3">
						
						<table id="image_tr1" style="display:none;">
						<tr>
						<td valign="top" width="85"><b>Image File</b></td>					
						<td valign="top" width="1">:</td>						
						<td><input type="file" name="ufile" />
						</td>
						</tr>
						</table>
						
						</td>
					</tr>
					
					<tr>
						<td valign="top"><b>News Keywords</b></td>					
						<td valign="top" width="1">:</td>						
						<td><textarea  style="width:650px;height:200px"  name="news_keywords" id="news_keywords"></textarea></td>
					</tr>	
				
				
			</table>
		</td>
	</tr>	
		
	<tr><td class="tit">	
	<input class="ict_btn" onClick="open_link('view_pages_part.php?id=2&sub_menu_news_id=<?php     echo $news_head?>');" type="button" value="BACK"  name="head_create"/>	
	<input id="image_tr2" class="ict_btn"  type="button"  onclick="show_first_divs()" value="ADD IMAGE" />
	
	<input id="image_tr3"  style="display:none;" class="ict_btn"  type="button"  onclick="show_second_divs()" value="CANCEL IMAGE" />	
	
	
	<input type="submit"  name="save_news" value="SAVE"  class="ict_btn"/>
	</td></tr>
</table>
</form>
<?php   
 }


// Function For edit news Part
function edit_news(){

?>
<form method="post" action="?id=2&sub_menu_news_id=<?php     echo $_REQUEST['sub_menu_news_id']?>" enctype="multipart/form-data">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td><?php     $query_select_left_menu="Select * from ict_left_sub_menu where id=".$_REQUEST['sub_menu_news_id'];
	$date_select_left_menu=mysql_query($query_select_left_menu);
	while($row_left_menu= mysql_fetch_assoc($date_select_left_menu))
	{	
	?>
	<span class="con">
			<table>
			<tr>
				<td><a href="view_pages_part.php?id=2">&#2990;&#3009;&#2965;&#2986;&#3021;&#2986;&#3009;</a></td>
				<td><img src="../files/icons/ar.png" /></td>				
				<td><?php     $query_select_left_sub="Select * from ict_left_sub_menu where id=".$_REQUEST['sub_menu_news_id']." LIMIT 0 , 1";
				$date_select_left_sub=mysql_query($query_select_left_sub);
				while($row_left_sub= mysql_fetch_assoc($date_select_left_sub))
				{
					$query_select_left="Select * from ict_left_menu where id=".$row_left_sub['left_menu_id']." LIMIT 0 , 1";
					$date_select_left=mysql_query($query_select_left);
					while($row_left= mysql_fetch_assoc($date_select_left))
					{
						?><a href="view_pages_part.php?id=2&sub_menu_left=<?php     echo $row_left['id']?>"><?php    echo $row_left['menu_name'];
					}	
				}	
				?></a></td>
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="?id=2&sub_menu_news_id=<?php     echo $row_left_menu['id']?>"><?php     echo $row_left_menu['menu_name']?></a></td>	
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="?id=2&sub_menu_news_id=<?php     echo $row_left_menu['id']?>&edit_id=<?php     echo $_REQUEST['sub_menu_news_id']?>">EDIT</a></td>						
			</tr>	
		</table>				
	</span>	
	</td><td width="80" align="right">&nbsp;</td>
	<?php
	     }	
	?>
	</tr>
	</table>
	</td></tr>
	<tr>
		<td class="tit">
		<?php 
			$query_selects="SELECT * FROM ict_news where id=".$_REQUEST['edit_id'];
			$date_select=mysql_query($query_selects);
			while($row_select= mysql_fetch_assoc($date_select))
			{			
		?>
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
					<tr>
						<td valign="top" width="90"><b>News Title</b></td>
						<td valign="top" width="1">:</td>						
						<td>						
						<input id="transliterateTextarea1" type="text"  style="width:500px;" name="news_title" value="<?php     echo $row_select['news_title']?>" />
						<input type="hidden" value="<?php     echo $_REQUEST['edit_id']?>" name="news_sub_group_id" />
						
						</td>					
					</tr>
				
					<tr>
						<td valign="top"><b>News Content</b></td>					
						<td valign="top" width="1">:</td>						
						<td><textarea id="transliterateTextarea2" style="width:650px;height:200px"  class="myTextEditor"  name="news_content"><?php     echo $row_select['news_content']?></textarea>
						
							
						</td>
					</tr>
					<tr>
						<td valign="top"><b>News Keywords</b></td>					
						<td valign="top" width="1">:</td>						
						<td><textarea  style="width:650px;height:200px"  name="news_keywords" id="news_keywords"><?php echo $row_select['news_keywords']?></textarea>
						
							
						</td>
					</tr>				
					<tr>
						<td colspan="3">						
							<table id="image_tr1">
							<?php     if($row_select['news_image']==''){}else{?>
							<tr>
							<td valign="top" width="85"><b>Current File</b></td>					
							<td valign="top" width="1">:</td>						
							<td id="gallery">
								<a href="../files/uploading_news_img/th_<?php     echo $image_value=$row_select['news_image']; ?>" >Click To View</a>
							</td>
							</tr>
							<?php     }?>
							</table>	
						</td>
					</tr>	
					<tr>
						<td colspan="3">											
						
							<table id="image_tr2" style="display:none;">
							<tr>
							<td valign="top" width="85"><b>Image File</b></td>					
							<td valign="top" width="1">:</td>						
							<td><input type="file" name="ufile" />
							</td>
							</tr>
							</table>
						
						</td>
					</tr>					
			</table>
		<?php     }
		?>	
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('view_pages_part.php?id=2&sub_menu_news_id=<?php     echo $_REQUEST['sub_menu_news_id']?>');" type="button" value="BACK"  name="head_create"/>	
	<input id="image_tr3" class="ict_btn"  type="button"  onclick="show_first_divs1()" value="<?php     if($image_value==''){?>ADD IMAGE<?php     }else{?>CHANGE IMAGE<?php     }?>" />	
	<input id="image_tr4"  style="display:none;" class="ict_btn"  type="button"  onclick="show_second_divs1()" value="CANCEL IMAGE" />		
	<input type="submit"  name="update_news" value="UPDATE"  class="ict_btn"/>
	</td></tr>
</table>
</form>
<?php     }

/*-------------------------------------------------------------------NEWS PART END------------------------------------------------------------------------------*/










/*-------------------------------------------------------------------Thiru PART Start------------------------------------------------------------------------------*/

function show_left_thiru()
{
?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="thiru_pages_part.php?id=2">Thirukural</a></td>
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"><a href="change_order_left_menu">Change Order</a></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php     $query_select="Select * from ict_thiru_menu where delete_status=0 ORDER BY order_id,created_date ASC";
				$date_select=mysql_query($query_select);
				$no_of_rows=mysql_num_rows($date_select);
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Name</b></td>
					<td width="100"><b>Status</b></td>					
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
					<?php     while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a href="?id=2&sub_menu_left=<?php     echo $row['id']?>"><?php    echo $row['menu_name'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1){
						echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0){
						echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
					<td align="center" width="20"><a href="?id=2&sub_menu_left=<?php     echo $row['id']?>"><img src="../files/icons/sitemap_color.png"  border="0"/></a></td>
					<td align="center" width="20"><a href="?id=2&page_left=<?php     echo $row['id']?>"><img src="../files/icons/page_white_edit.png "  border="0"/></a></td>		
					<td align="center" width="20"><a href="?id=2&delete_left=<?php     echo $row['id']?>" onClick="return confirm('Are you sure want to delete &quot;<?php    echo $row['menu_name'];?>&quot; ?')"><img src="../files/icons/cancel.png"  border="0"/></a></td>				
					<?php     }
				}
				
				?>
				
			</table>
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('thiru_pages_part.php?id=2&add_left=1');" type="button" value="ADD"  name="head_create"/>
	</td></tr>
</table>
<?php     }

function edit_left_thiru()
{


				$query_select="Select * from ict_thiru_menu where id=".$_REQUEST['page_left'];
				$date_select=mysql_query($query_select);
				$no_of_rows=mysql_num_rows($date_select);
?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="thiru_pages_part.php?id=2">&#2990;&#3009;&#2965;&#2986;&#3021;&#2986;&#3009;</a></td>
				<td><img src="../files/icons/ar.png" /></td>	
				<td>
				<?php    
					while($row= mysql_fetch_assoc($date_select))
					{				
				?>
				<a><?php    echo $row['menu_name'];?></a>
		
				</td>	
				<td><img src="../files/icons/ar.png" /></td>						
				<td><a>EDIT</a></td>		
			</tr>	
		</table>				
	</span>		
	
	</td><td width="80" align="right"><a href="change_order_left_menu">Change Order</a></td>
	</table>	
	</td></tr>
	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0">
				<?php    if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>No Such Menu</td>					
					</tr>
					<?php     }
				else
				{
							
					?>				
					<tr>
					<td>
					<form action="thiru_pages_part.php?id=2" method="post">
					<table>
						<tr>
							<td>Menu Name</td>
							<td>
							<input type="text"  name="menu" value="<?php    echo $row['menu_name'];?>"/>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" <?php    if($row['active_status']==1){ ?> selected="selected" <?php     }?>>ACTIVATED</option>
								<option value="0" <?php    if($row['active_status']==0){ ?> selected="selected" <?php     }?>>DEACTIVATED</option>								
							</select>
							</td>
						</tr>
						<tr>
							<td colspan="2">
							<input type="hidden"  name="menu_id" value="<?php    echo $row['id'];?>"/>
							<input type="submit"  class="ict_btn"  name="menu_left_update" value="UPDATE" />
							<input type="button" class="ict_btn" value="BACK" onClick="open_link('thiru_pages_part.php?id=2');" />
							</td>
						</tr>
					</table>		
					</form>
					</td>	
					</tr>
					<?php     }
				}
				
				?>
				
			</table>
		</td>
	</tr>			
	<tr><td class="tit"></td></tr>
	</table>
<?php     }

function add_left_thiru()
{
?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="thiru_pages_part.php?id=2">Thirukural</a></td>
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="thiru_pages_part.php?id=2&add_left=1">ADD</a></td>		
			</tr>	
		</table>				
	</span>		
	
	</td><td width="80" align="right"><a href="change_order_left_menu">Change Order</a></td>
	</table>
	</td></tr>
	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0">
			
					<tr>
					<td>
					<form action="thiru_pages_part.php?id=2" method="post" enctype="multipart/form-data">
					<table>
						<tr>
							<td>Menu Name</td>
							<td>
							<input type="text" name="menu_name"/>
							</td>
						</tr>	
						<tr>
							<td>Image Name</td>
							<td>
							<input type="file" name="ufile"/>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" selected="selected" >ACTIVATED</option>
								<option value="0" >DEACTIVATED</option>								
							</select>
							</td>
						</tr>
						<tr>
							<td colspan="2">
							<input type="hidden"  name="menu_id" value="<?php    echo $row['id'];?>"/>
							<input type="submit"  class="ict_btn"  name="menu_left_save" value="SAVE" />
							<input type="button" class="ict_btn" value="BACK" onClick="open_link('thiru_pages_part.php?id=2');" />
							</td>
						</tr>
					</table>		
		
					</form>
					</td>	
					</tr>
				
				
			</table>
		</td>
	</tr>			
	<tr><td class="tit"></td></tr>
	</table>
<?php     }






function show_left_sub_thiru($submenu_id)
{

			if($_REQUEST['add_left_sub_menu'])
			{
			$query_insert="INSERT INTO ict_thiru_sub_menu(menu_name,active_status,left_menu_id) VALUES ('".$_POST['menu_name']."','".$_POST['active_status']."','".$_POST['sub_sub_menu_id']."')";
			mysql_query($query_insert);
			}
?>
	<table class="main_tables" border="0">
	
	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>	
	<?php     $query_select_left_menu="Select * from ict_thiru_menu where id=".$submenu_id;
	$date_select_left_menu=mysql_query($query_select_left_menu);
	while($row_left_menu= mysql_fetch_assoc($date_select_left_menu))
	{	
	?>
	<span class="con">	
		<table>
			<tr>
				<td><a href="thiru_pages_part.php?id=2">Thirukural</a></td>
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="thiru_pages_part.php?id=2&sub_menu_left=<?php     echo $submenu_id?>"><?php     echo $row_left_menu['menu_name']?></a></td>		
			</tr>	
		</table>				
	</span>		
	</td>
	<td width="80" align="right"><a href="change_order_left_sub_menu/?sub_menu_id=<?php     echo $row_left_menu['id']?>">Change Order</a></td>
	<?php     }	
	?>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php     
				 $query_select="Select * from ict_thiru_sub_menu where left_menu_id=".$submenu_id." AND delete_status=0 ORDER BY order_id,created_date ASC";
				$date_select=mysql_query($query_select);
				$no_of_rows=mysql_num_rows($date_select);
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Name</b></td>
					<td width="100"><b>Status</b></td>					

					<td width="20"></td>										
					<td width="20"></td>															
					</tr>
					<?php     while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a href=""><?php    echo $row['menu_name'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1)
					{
					echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0)
					{
					echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
	<td align="center" width="20"><a href="?id=2&sub_menu_news_id=<?php     echo $row['id']?>"><img src="../files/icons/sitemap_color.png"  border="0"/></a></td>
					<td width="20">				
					<a href="?id=2&sub_menu_left=<?php     echo $submenu_id?>&edit_sub_menu=<?php     echo $row['id']?>">
					<img src="../files/icons/page_white_edit.png"  border="0"/>					
					</a>					
					</td>

					<td width="20">				
				<a href="?id=2&sub_menu_left=<?php     echo $submenu_id?>&delete_left=<?php     echo $row['id']?>"  onClick="return confirm('Are you sure want to delete &quot;<?php    echo $row['menu_name'];?>&quot; ?')">
					<img src="../files/icons/cancel.png"  border="0"/>					
					</a>					
					</td>
					<?php     }
				}
				
				?>
				
			</table>
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('thiru_pages_part.php?id=2');" type="button" value="BACK"  name="head_create"/>
	<input class="ict_btn" onClick="open_link('thiru_pages_part.php?id=2&sub_menu_left=<?php     echo $submenu_id?>&add_sub_menu=<?php     echo $submenu_id?>');" type="button" value="ADD"  name="head_create"/>
	</td></tr>
</table>
<?php     }



function add_left_sub_thiru($submenu_id)
{
?>
<form action="thiru_pages_part.php?id=2&sub_menu_left=<?php     echo $submenu_id?>" method="post" enctype="multipart/form-data">
	<table class="main_tables" border="0">
	<tr><td class="HEAD_TI">
		<table border="0" width="100%" class="sub_tbl">
		<tr><td>	
		<?php     $query_select_left_menu="Select * from ict_thiru_menu where id=".$submenu_id;
		$date_select_left_menu=mysql_query($query_select_left_menu);
		while($row_left_menu= mysql_fetch_assoc($date_select_left_menu))
		{	
		?>
		<span class="con">	
			<table>
				<tr>
					<td><a href="thiru_pages_part.php?id=2">Thirukural</a></td>
					<td><img src="../files/icons/ar.png" /></td>		
					<td><a href="thiru_pages_part.php?id=2&sub_menu_left=<?php     echo $submenu_id?>"><?php     echo $row_left_menu['menu_name']?></a></td>		
					<td><img src="../files/icons/ar.png" /></td>		
					<td><a href="thiru_pages_part.php?id=2&sub_menu_left=<?php     echo $submenu_id?>&add_sub_menu=1">ADD</a></td>		
				</tr>	
			</table>				
		</span>		
		</td>
		<td width="80" align="right"></td>
		<?php     }	
		?>
		</table>
	</td></tr>

	<tr>
		<td class="tit">					
			
				<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
					<tr>
						<td>Menu Name</td>
						<td>
						<input type="text" name="menu_name"/>
						<input type="hidden"  value="<?php     echo $submenu_id; ?>" name="sub_sub_menu_id" />						</td>
					</tr>
					<tr>
						<td>Menu Image</td>
						<td>
						<input  type="file" name="ufile" />					</td>
					</tr>
					
					<tr>
						<td>Active Status</td>
						<td>
						<select name="active_status">
						<option value="1" selected="selected" >ACTIVATED</option>
						<option value="0" >DEACTIVATED</option>								
						</select>						</td>
					</tr>
				</table>		</td>
	</tr>			
	<tr><td class="tit"><input class="ict_btn" type="submit" value="SAVE"  name="add_left_sub_menu2"/>
	  <input class="ict_btn" onClick="open_link('thiru_pages_part.php?id=2&sub_menu_left=<?php     echo $submenu_id; ?>');" type="button" value="BACK"  name="head_create"/>	
	</td></tr>
</table>
</form>
<?php     }


function edit_left_sub_thiru($submenu_id)
{
?>
<form action="thiru_pages_part.php?id=2&sub_menu_left=<?php echo $_REQUEST['sub_menu_left']; ?>" method="post" enctype="multipart/form-data">
	<table class="main_tables" border="0">
	
	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>	
	<?php     $query_select_left_menu="Select * from ict_thiru_sub_menu where left_menu_id=".$_REQUEST['sub_menu_left']." LIMIT 0,1";
	$date_select_left_menu=mysql_query($query_select_left_menu);
	while($row_left_menu= mysql_fetch_assoc($date_select_left_menu))
	{	
	?>
	<span class="con">	
		<table>
			<tr>
				<td><a href="thiru_pages_part.php?id=2">Thirukural</a></td>
				<td><img src="../files/icons/ar.png" /></td>
				<td><a href="thiru_pages_part.php?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>"><?php     $query_select_left="Select * from ict_thiru_menu where id=".$_REQUEST['sub_menu_left'];
				$date_select_left=mysql_query($query_select_left);
				while($row_left= mysql_fetch_assoc($date_select_left))
				{echo $row_left['menu_name'];}	
				?></a></td>				
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="thiru_pages_part.php?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>"><?php     echo $row_left_menu['menu_name']?></a></td>		
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="thiru_pages_part.php?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>&edit_sub_menu=1">EDIT</a></td>		
			</tr>	
		</table>				
	</span>		
	
	</td>
	<td width="80" align="right"></td>

	</table>
	</td></tr>

	<tr>
		<td class="tit">					
<?php     $query_a="Select * from ict_thiru_sub_menu where id=".$_REQUEST['edit_sub_menu'];
	$date_a=mysql_query($query_a);
	while($row_a= mysql_fetch_assoc($date_a))
	{	
	?>
				<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
					<tr>
						<td>Menu Name</td>
						<td>
						<input type="text" name="menu_name" value="<?php     echo $row_a['menu_name']; ?>"/>
						<input type="hidden" name="edit_sub_menu_id" value="<?php     echo $_REQUEST['edit_sub_menu']; ?>" />
						</td>
					</tr>	
					<tr>
						<td>Menu Image</td>
						<td>
						<input  type="file" name="ufile" /></td>
					</tr>
					<tr>
						<td>Active Status</td>
						<td>
						<select name="active_status">
						<option value="1" <?php     if($row_a['active_status']==1){?> selected="selected"<?php     } ?> >ACTIVATED</option>
						<option value="0" <?php     if($row_a['active_status']==0){?> selected="selected"<?php     } ?> >DEACTIVATED</option>								
						</select>
						</td>
					</tr>
				</table>
<?php     }
?>				

		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('thiru_pages_part.php?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>');" type="button" value="BACK"  name="head_create"/>
	<input class="ict_btn"  type="submit" value="UPDATE"  name="update_left_sub_menu"/>
	</td></tr>
</table>
</form>
<?php     }
}





function show_left_sub_menu_thiru($sub_menu_news_id)
{
$Limit = 10; 
$page=$_GET["view_id"]; //Get the page number to show
if($page == ""||!$page) $page=1; //If no page number is set, the default page is 1



	if($_POST['save_thiru_news']){

	
			
		 	$file_name1 = $_FILES['ufile']['name'];
			if($file_name1)
			{
				$random_digit1=rand(0000,9999);
				$new_file_name1=$random_digit1.$file_name1;
				$path1= "../files/uploading_news_img/".$new_file_name1;
				$path3= "../files/uploading_news_img/new_".$new_file_name1;				
			 	$path2= "../files/uploading_news_img/th_".$new_file_name1;				
				
										
				
				if($ufile !=none)
				{
						copy($_FILES['ufile']['tmp_name'], $path1);
				}	
				
				
						list($width, $height, $type, $attr) = getimagesize($path1);



		$image_data1="th_".$new_file_name1;
		$image_data2=$new_file_name1;	
			
		if($width>650){
		//define a maxim size for the uploaded images
			define ("MAX_SIZE","999999");
			define ("WIDTH","650");
			define ("HEIGHT","350");
			make_thumb($path1,$path3,WIDTH,HEIGHT);		
			make_thumb($path3,$path2,"193","100");	
			unlink($path1);
			
			
		}
		else{
			copy($path1, $path3);
			define ("MAX_SIZE","999999");			
			make_thumb($path3,$path2,"193","100");	
			unlink($path1);			
		
		}
					
			}

		
				
	
	
	
$query_insert="INSERT INTO ict_thiru (id,sub_menu_id,news_content,news_image,active_status,created_date) VALUES (NULL, '".$_REQUEST['sub_menu_news_id']."','".$_POST['news_content']."','".$new_file_name1."', '1', now());";
	
	mysql_query($query_insert);	
	}
	
	if($_POST['update_news'])
	{
	
	
	
		  	$file_name1 = $_FILES['ufile']['name'];
			if($file_name1)
			{
				$random_digit1=rand(0000,9999);
				$new_file_name1=$random_digit1.$file_name1;
				$path1= "../files/uploading_news_img/".$new_file_name1;
				$path3= "../files/uploading_news_img/new_".$new_file_name1;				
			 	$path2= "../files/uploading_news_img/th_".$new_file_name1;				
				
										
				
				if($ufile !=none)
				{
						copy($_FILES['ufile']['tmp_name'], $path1);
				}	
				
				
						list($width, $height, $type, $attr) = getimagesize($path1);



		$image_data1="th_".$new_file_name1;
		$image_data2=$new_file_name1;	
			
		if($width>650){
		//define a maxim size for the uploaded images
			define ("MAX_SIZE","999999");
			define ("WIDTH","650");
			define ("HEIGHT","350");
			make_thumb($path1,$path3,WIDTH,HEIGHT);		
			make_thumb($path3,$path2,"193","100");	
			unlink($path1);
			
			
		}
		else{
			copy($path1, $path3);
			define ("MAX_SIZE","999999");			
			make_thumb($path3,$path2,"193","100");	
			unlink($path1);			
		
		}
					
			}
			
	   $query_update="UPDATE ict_thiru SET news_image='".$new_file_name1."',news_content='".$_POST['news_content']."' WHERE id=".$_POST['edit_hid_id'];
	mysql_query($query_update);
	}
	if($_REQUEST['delete_id']){
		$query_delete="DELETE FROM ict_thiru WHERE id =".$_REQUEST['delete_id'];
		mysql_query($query_delete);
	}



$query_main_category="Select * from ict_thiru_menu  where active_status=1 AND delete_status=0";
$date_main_category=mysql_query($query_main_category);
while($row_main_category= mysql_fetch_assoc($date_main_category))
{	
$left_menu_id=$row_main_category['id'];	
}
?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="thiru_pages_part.php?id=2">Thirukural</a></td>
				<td><img src="../files/icons/ar.png" /></td>
				<?php     $query_sub_menu="Select * from ict_thiru_sub_menu where id=".$_REQUEST['sub_menu_news_id'];
				$date_sub_menu=mysql_query($query_sub_menu);
				while($row_sub_menu= mysql_fetch_assoc($date_sub_menu))
				{
				$main_menu_id=$row_sub_menu['left_menu_id'];
				
				
						$query_main_menu="Select * from ict_thiru_menu where id=".$main_menu_id;
						$date_main_menu=mysql_query($query_main_menu);
						while($row_main_menu= mysql_fetch_assoc($date_main_menu))
						{
						?>
						<td><a href="?id=2&sub_menu_left=<?php echo $row_main_menu['id'];?>"><?php     echo $row_main_menu['menu_name'];?></a></td>						
						<?php     }		
						?><td><img src="../files/icons/ar.png" /></td><td><a href=""><?php    echo $row_sub_menu['menu_name'];			
				
				}			
				?></a></td>				
								
			</tr>	
		</table>				
	</span>	

	</td>
	<td width="400" align="right"><span class="con"><a>View News in</a></span>

									<select name="news_category"  onchange="connect_pagination_for_news(this.value)">
									<option value="0" <?php    if($_REQUEST['view']==0){ ?> selected="selected" <?php     }?>>View All News</option>
									<?php     $query_main_category="Select * from ict_thiru_menu  where active_status=1 AND delete_status=0";
									$date_main_category=mysql_query($query_main_category);
									while($row_main_category= mysql_fetch_assoc($date_main_category))
									{	
									
									
									echo '<optgroup label="'.$row_main_category['menu_name'].'">';
									
							$query_c="Select * from ict_thiru_sub_menu where left_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0 LIMIT 0 , 1";
							$date_c=mysql_query($query_c);
							while($row_c= mysql_fetch_assoc($date_c))
							{	
							$first_id=$row_c['id'];				
							}									
					
									
							$query_category="Select * from ict_thiru_sub_menu where left_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0";
											$date_category=mysql_query($query_category);
											while($row_category= mysql_fetch_assoc($date_category))
											{					
											echo '<option value="'.$row_category['id'].'" ';
											if($_REQUEST['sub_menu_news_id']==$row_category['id']){ ?> selected="selected" <?php     }
											echo '">';											
										
											echo $row_category['menu_name'];
											echo '</option>';
											
											}
									echo '</optgroup>';
									}
									?>
							</select>	
	</td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php    if($_REQUEST['sub_menu_news_id']==0){
					$cintent='';
					}
					else{
					$cintent='	sub_menu_id='.$_REQUEST['sub_menu_news_id'].' AND ';				
					}
			  	$query_st="Select * from ict_thiru where  ".$cintent."  delete_status=0 ORDER BY created_date DESC";
				$date_st=mysql_query($query_st);
				$no_of_rows=mysql_num_rows($date_st);
				$NumberOfPages=ceil($no_of_rows/$Limit);

				
			    $query_select="Select * from ict_thiru where  ".$cintent."  delete_status=0 ORDER BY created_date DESC  LIMIT " . ($page-1)*$Limit . ",".$Limit;		
				$date_select=mysql_query($query_select);				
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Name</b></td>
					<td width="100"><b>Status</b></td>		
					<td width="100"><b>Category</b></td>			
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
					<?php     while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a><?php  echo $row['news_content'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1){
						echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0){
						echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
					<td width="150">
					<?php     $query_category="Select * from ict_thiru_sub_menu where id=".$row['sub_menu_id'];
						$date_category=mysql_query($query_category);
						while($row_category= mysql_fetch_assoc($date_category))
						{					
						echo $row_category['menu_name'];
						}
					?>
					</td>					
					<td align="center" width="20">&nbsp;</td>
					<td align="center" width="20"><a href="?id=2&sub_menu_news_id=<?php     echo $_REQUEST['sub_menu_news_id']?>&edit_id=<?php     echo $row['id']; ?>"><img src="../files/icons/page_white_edit.png "  border="0"/></a></td>		
					<td align="center" width="20"><a href="?id=2&sub_menu_news_id=<?php     echo $_REQUEST['sub_menu_news_id'];?>&delete_news=<?php     echo $row['id']?>"  onClick="return confirm('Are you sure want to delete?')"><img src="../files/icons/cancel.png"  border="0"/></a></td>						
					<?php     }
				}
				
				?>
				
			</table>
			<table>
				<tr>
					<td>
			
				<?php    //Create and print the Navigation bar
				$Nav_a="";
				for($i_a =1; $i_a<=$NumberOfPages;$i_a++) {
					if($i_a == $page) {
					
				$Nav_a .="<option value=\"thiru_pages_part.php?id=2&sub_menu_news_id=".$_REQUEST['sub_menu_news_id']."&view_id=".$i_a."\" selected=\"selected\">".$i_a."</option>";
					}else{
				$Nav_a .="<option value=\"thiru_pages_part.php?id=2&sub_menu_news_id=".$_REQUEST['sub_menu_news_id']."&view_id=".$i_a."\" >".$i_a."</option>";
					}
				}				
				?>
			
					</td>
				</tr>
			</table>
			<table border="0">

			<tr>
	<?php     $Nav="";

	for($i=1;$i<=$NumberOfPages;$i++){
	if($i==$page) {

if($i==1){
	if($NumberOfPages!=1){
		$Nav = '<td width="50">&nbsp;</td><td width="50">';
		$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
		$Nav .='</td><td width="50"><a href="thiru_pages_part.php?id=2&sub_menu_news_id='.$_REQUEST['sub_menu_news_id'].'&view_id='.($i+1).'"><img src="../files/icons/next.png" border="0"/></a></td>';	
	}
}
else if($i==$NumberOfPages){
$Nav = '<td width="50"><a href="thiru_pages_part.php?id=2&sub_menu_news_id='.$_REQUEST['sub_menu_news_id'].'&view_id='.($i-1).'"><img src="../files/icons/previous.png"  border="0"/></a></td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50">&nbsp;</td>';
}
else{
$Nav = '<td width="50"><a href="thiru_pages_part.php?id=2&sub_menu_news_id='.$_REQUEST['sub_menu_news_id'].'&view_id='.($i-1).'"><img src="../files/icons/previous.png" border="0"/></a></td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50"><a href="thiru_pages_part.php?id=2&sub_menu_news_id='.$_REQUEST['sub_menu_news_id'].'&view_id='.($i+1).'"><img src="../files/icons/next.png" border="0"/></a></td>';
}
					}
				}
				echo  $Nav;					 
 	?>
			  </tr></table>
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('?id=2&sub_menu_left=<?php     echo $back_menu_id; ?>');" type="button" value="BACK"  name="head_create"/>
	<input class="ict_btn" onClick="open_link('?id=2&sub_menu_news_id=<?php     echo $_REQUEST['sub_menu_news_id']; ?>&add_new=1');" type="button" value="ADD"  name="head_create"/>
	</td></tr>
</table>
<?php     }


// Function For Add the news Part
function add_new_thiru($news_head){
?>
<form method="post" action="thiru_pages_part.php?id=2&sub_menu_news_id=<?php     echo $_REQUEST['sub_menu_news_id']?>" enctype="multipart/form-data">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td><?php $query_select_left_menu="Select * from ict_thiru_sub_menu where id=".$news_head;
	$date_select_left_menu=mysql_query($query_select_left_menu);
	while($row_left_menu= mysql_fetch_assoc($date_select_left_menu))
	{	
	?>
	<span class="con">
			<table>
			<tr>
				<td><a href="thiru_pages_part.php?id=2">Thirukural</a></td>
				<td><img src="../files/icons/ar.png" /></td>				
				<td><?php     $query_select_left_sub="Select * from ict_thiru_sub_menu where id=".$news_head." LIMIT 0 , 1";
				$date_select_left_sub=mysql_query($query_select_left_sub);
				while($row_left_sub= mysql_fetch_assoc($date_select_left_sub))
				{
					$query_select_left="Select * from ict_thiru_menu where id=".$row_left_sub['left_menu_id']." LIMIT 0 , 1";
					$date_select_left=mysql_query($query_select_left);
					while($row_left= mysql_fetch_assoc($date_select_left))
					{
						?><a href="?id=2&sub_menu_left=<?php     echo $row_left['id']?>"><?php    echo $row_left['menu_name'];
					}	
				}	
				?></a></td>
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="?id=2&sub_menu_news_id=<?php echo $_REQUEST['sub_menu_news_id']; ?>"><?php     echo $row_left_menu['menu_name']?></a></td>	
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="">ADD</a></td>						
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right">&nbsp;</td><?php     }	
	?>
	</tr>
	</table>
	</td></tr>
	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%" border="0">
				
						
				
					<tr>
						<td valign="top"><b>Quote</b></td>					
						<td valign="top" width="1">:</td>						
						<td><textarea id="transliterateTextarea2" style="width:500px;height:200px"  name="news_content"></textarea></td>
					</tr>	
				
					<tr>
						<td colspan="3">
						
						<table id="image_tr1" style="display:none;">
						<tr>
						<td valign="top" width="85"><b>Image File</b></td>					
						<td valign="top" width="1">:</td>						
						<td><input type="file" name="ufile" />
						</td>
						</tr>
						</table>
						
						</td>
					</tr>
				
			</table>
		</td>
	</tr>	
		
	<tr><td class="tit">	
	<input class="ict_btn" onClick="open_link('thiru_pages_part.php?id=2&sub_menu_news_id=<?php     echo $news_head?>');" type="button" value="BACK"  name="head_create"/>	
	
	
	<input id="image_tr3"  style="display:none;" class="ict_btn"  type="button"  onclick="show_second_divs()" value="CANCEL IMAGE" />	
	
	
	<input type="submit"  name="save_thiru_news" value="SAVE"  class="ict_btn"/>
	</td></tr>
</table>
</form>
<?php     }


// Function For edit news Part
function edit_thiru(){

?>
<form method="post" action="?id=2&sub_menu_news_id=<?php     echo $_REQUEST['sub_menu_news_id']; ?>" enctype="multipart/form-data">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td><?php     $query_select_left_menu="Select * from ict_thiru_sub_menu where id=".$_REQUEST['sub_menu_news_id'];
	$date_select_left_menu=mysql_query($query_select_left_menu);
	while($row_left_menu= mysql_fetch_assoc($date_select_left_menu))
	{	
	?>
	<span class="con">
			<table>
			<tr>
				<td><a href="thiru_pages_part.php?id=2">Thirukural</a></td>
				<td><img src="../files/icons/ar.png" /></td>				
				<td><?php     $query_select_left_sub="Select * from ict_thiru_sub_menu where id=".$_REQUEST['sub_menu_news_id']." LIMIT 0 , 1";
				$date_select_left_sub=mysql_query($query_select_left_sub);
				while($row_left_sub= mysql_fetch_assoc($date_select_left_sub))
				{
					$query_select_left="Select * from ict_thiru_menu where id=".$row_left_sub['left_menu_id']." LIMIT 0 , 1";
					$date_select_left=mysql_query($query_select_left);
					while($row_left= mysql_fetch_assoc($date_select_left))
					{
						?><a href="thiru_pages_part.php?id=2&sub_menu_left=<?php     echo $row_left['id']?>"><?php    echo $row_left['menu_name'];
					}	
				}	
				?></a></td>
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="?id=2&sub_menu_news_id=<?php echo $_REQUEST['sub_menu_news_id']; ?>"><?php     echo $row_left_menu['menu_name']?></a></td>	
				<td><img src="../files/icons/ar.png" /></td>		
				<td><a href="">EDIT</a></td>						
			</tr>	
		</table>				
	</span>	
	</td><td width="80" align="right">&nbsp;</td><?php     }	
	?>
	</tr>
	</table>
	</td></tr>
	<tr>
		<td class="tit">
		<?php     $query_selects="SELECT * FROM ict_thiru where id=".$_REQUEST['edit_id'];
		$date_select=mysql_query($query_selects);
		while($row_select= mysql_fetch_assoc($date_select))
		{			
		?>
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
			
				
					<tr>
						<td valign="top"><b>Quote Content</b></td>					
						<td valign="top" width="1">:</td>						
						<td>
						<input type="hidden" value="<?php echo $_REQUEST['edit_id']?>" name="edit_hid_id" />
						<textarea id="transliterateTextarea2" style="width:500px;height:200px"  name="news_content"><?php     echo $row_select['news_content']?></textarea>
						
							
						</td>
					</tr>				
						
			</table>
		<?php     }
		?>	
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('?id=2&sub_menu_news_id=<?php     echo $_REQUEST['sub_menu_news_id']?>');" type="button" value="BACK"  name="head_create"/>
	<input type="submit"  name="update_news" value="UPDATE"  class="ict_btn"/>
	</td></tr>
</table>
</form>
<?php     }

/*-------------------------------------------------------------------Thiru PART END------------------------------------------------------------------------------*/











/*-------------------------------------------------------------------VIDEO PART START------------------------------------------------------------------------------*/

//--Function To Show the video Main Category-----//
function show_category_for_video()
{
	if($_POST['video_left_save'])
	{
	$query_insert="INSERT INTO ict_video_menu(video_name,video_desc,active_status,delete_status,created_date)VALUES('".$_POST['video_name' ]."','".$_POST['video_desc']."','1','0',now());";	
	mysql_query($query_insert);
	
	}
	
	
	if($_POST['video_left_update'])
	{	
				error_reporting(E_ALL);
				ini_set("display_errors", 1);
				$video_file_name=$_FILES['ufile']['name'];
				$new_video_file_name=strtotime('now').rand(0000,9999).$_FILES['ufile']['name'];
				echo $file_extension = strtolower(substr(strrchr($_FILES['ufile']['name'],"."),1));	
				echo "<br>";
				echo $path1= "../files/uploading_videos/temp/".$new_video_file_name;														
				if(copy($_FILES['ufile']['tmp_name'], $path1)){			
					chmod($path1, 0777);
				}
					

	

 	$query_update="UPDATE ict_video_menu SET video_name= '".$_POST['video_name']."',video_desc= '".$_POST['video_desc']."',active_status = '".$_POST['active_status']."' WHERE id=".$_POST['video_id'];
	//mysql_query($query_update);
	}	




?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="video_part.php?id=2">&#2997;&#3008;&#2975;&#3007;&#2991;&#3019;</a></td>
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"><a href="change_order_video_menu">Change Order</a></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php     $query_select="Select * from ict_video_menu where delete_status=0 ORDER BY order_id,created_date ASC";
				$date_select=mysql_query($query_select);
				$no_of_rows=mysql_num_rows($date_select);
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Category</b></td>
					<td width="100"><b>Status</b></td>					
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
					<?php     while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a href="?id=2&sub_menu_left=<?php     echo $row['id']?>"><?php    echo $row['video_name'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1){
						echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0){
						echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
					<td align="center" width="20"><a href="video_part.php?id=2&sub_menu_left=<?php     echo $row['id']?>"><img src="../files/icons/sitemap_color.png"  border="0"/></a></td>
					<td align="center" width="20"><a href="video_part.php?id=2&edit_video=<?php     echo $row['id']?>"><img src="../files/icons/page_white_edit.png "  border="0"/></a></td>		
					<td align="center" width="20"><a href="video_part.php?id=2&delete_video=<?php     echo $row['id']?>"  onClick="return confirm('Are you sure want to delete?')"><img src="../files/icons/cancel.png"  border="0"/></a></td>					
					<?php     }
				}
				
				?>
				
			</table>
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('video_part.php?id=2&add=1');" type="button" value="ADD CATEGORY"  name="head_create"/>
	</td></tr>
</table>
<?php     }



//----Function To Show the video Sub Category-----//
function show_sub_category_for_video($sub_id)
{
	if($_POST['video_sub_category'])
	{
 	$query_insert="INSERT INTO ict_video_sub_menu(video_menu_id,video_name,video_desc,active_status,delete_status,created_date)VALUES('".$_REQUEST['sub_menu_left']."','".$_POST['video_name' ]."','".$_POST['video_desc']."','1','0',now());";	
	mysql_query($query_insert);	
	}
	if($_POST['video_sub_category_edit']){
	$query_update="UPDATE ict_video_sub_menu SET video_name = '".$_POST['video_name' ]."',video_desc = '".$_POST['video_desc']."' WHERE id =".$_POST['video_id'];
	mysql_query($query_update);
	}

?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="video_part.php?id=2">&#2997;&#3008;&#2975;&#3007;&#2991;&#3019;</a></td>
				<td><img src="../files/icons/ar.png" /></td>
				<td><?php     $query_menu="Select * from ict_video_menu where delete_status=0 AND id=".$sub_id;
				$date_menu=mysql_query($query_menu);
				while($row_menu= mysql_fetch_assoc($date_menu))
				{
					echo '<a href="video_part.php?id=2&sub_menu_left='.$row_menu['id'].'">'.$row_menu['video_name'].'</a>';
				}					
				?></td>				
				
				
				
				
				
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"><a href="change_order_video_sub_menu/?sub_menu_id=<?php     echo $_REQUEST['sub_menu_left']?>">Change Order</a></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php     $query_select="Select * from ict_video_sub_menu where delete_status=0 AND video_menu_id='".$sub_id."' ORDER BY order_id,created_date ASC";
				$date_select=mysql_query($query_select);
				$no_of_rows=mysql_num_rows($date_select);
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Category</b></td>
					<td width="100"><b>Status</b></td>					
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
					<?php     while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a href="?id=1&view=<?php     echo $row['id']?>"><?php    echo $row['video_name'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1){
						echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0){
						echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
					<td align="center" width="20">&nbsp;</td>
					<td align="center" width="20"><a href="video_part.php?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>&edit_video=<?php     echo $row['id']?>"><img src="../files/icons/page_white_edit.png "  border="0"/></a></td>		
					<td align="center" width="20"><a href="video_part.php?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>&delete_video=<?php     echo $row['id']?>"  onClick="return confirm('Are you sure want to delete?')"><img src="../files/icons/cancel.png"  border="0"/></a></td>					
					<?php     }
				}
				
				?>
				
			</table>
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('video_part.php?id=2&sub_menu_left=<?php     echo $sub_id?>&add=1');" type="button" value="ADD SUB CATEGORY"  name="add_video_sub_category"/>
	<input type="button" class="ict_btn" value="BACK" onClick="open_link('video_part.php?id=2');" />
	</td></tr>
</table>
<?php     }


function add_category_for_video()
{
?>
	<form action="video_part.php?id=2" method="post">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="video_part.php?id=2">&#2997;&#3008;&#2975;&#3007;&#2991;&#3019;</a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="video_part.php?id=1&add=1">ADD</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">

			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Video Category Name</td>
							<td>
							<input type="text" name="video_name"/>
							</td>
						</tr>	

						<tr>
							<td>Description</td>
							<td>
							<textarea name="video_desc"></textarea>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" selected="selected" >ACTIVATED</option>
								<option value="0" >DEACTIVATED</option>								
							</select>
							</td>
						</tr>

					</table>		
		

		</td>
	</tr>			
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="video_left_save" value="SAVE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('video_part.php?id=2');" />	
	</td></tr>
</table>
					</form>
<?php     }


function edit_category_for_video($video_id)
{
?>
	<form action="video_part.php?id=2" method="post">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="video_part.php?id=2">&#2997;&#3008;&#2975;&#3007;&#2991;&#3019;</a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="video_part.php?id=1&edit_video=<?php     echo $video_id?>">EDIT</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
		<?php     $query_select="Select * from ict_video_menu where delete_status=0 AND id='".$video_id."' ORDER BY order_id,created_date ASC";
		$date_select=mysql_query($query_select);
		$no_of_rows=mysql_num_rows($date_select);
	
			while($row= mysql_fetch_assoc($date_select))
			{	
			?>
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Video Category Name</td>
							<td>
							<input type="text" name="video_name" value="<?php     echo $row['video_name']?>"/>
							<input type="hidden" value="<?php     echo $video_id?>" name="video_id" />
							</td>
						</tr>	
			
						<tr>
							<td>Description</td>
							<td>
							<textarea name="video_desc"><?php     echo $row['video_desc']?></textarea>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" <?php    if($row['active_status']=1){?> selected="selected" <?php     }?> >ACTIVATED</option>
								<option value="0" <?php    if($row['active_status']=0){?> selected="selected" <?php     }?> >DEACTIVATED</option>								
							</select>
							</td>
						</tr>
			
					</table>		
					
			<?php     }
	
		?>
		</td>
	</tr>			
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="video_left_update" value="UPDATE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('video_part.php?id=2');" />	
	</td></tr>
</table>
					</form>
<?php     }




function add_sub_category_for_video($sub_menu_left,$add)
{
?>
	<form action="video_part.php?id=2&sub_menu_left=<?php     echo $sub_menu_left?>" method="post">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="video_part.php?id=1">&#2997;&#3008;&#2975;&#3007;&#2991;&#3019;</a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="?id=2&sub_menu_left=<?php     echo $sub_menu_left?>"><?php     $query_menu="Select * from ict_video_menu where delete_status=0 AND id=".$sub_menu_left;
				$date_menu=mysql_query($query_menu);
				while($row_menu= mysql_fetch_assoc($date_menu))
				{
					echo '<a href="video_part.php?id=2&sub_menu_left='.$row_menu['id'].'">'.$row_menu['video_name'].'</a>';
				}					
				?></a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="view_pages_part.php?id=2">ADD</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">

			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Video Category Name</td>
							<td>
							<input type="text" name="video_name"/>
							</td>
						</tr>	

						<tr>
							<td>Description</td>
							<td>
							<textarea name="video_desc"></textarea>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" selected="selected" >ACTIVATED</option>
								<option value="0" >DEACTIVATED</option>								
							</select>
							</td>
						</tr>

					</table>		
		

		</td>
	</tr>			
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="video_sub_category" value="SAVE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('view_pages_part.php?id=2');" />	
	</td></tr>
</table>
					</form>
<?php   
}
function edit_sub_category_for_video($sub_menu_left,$edit)
{
?>
	<form action="video_part.php?id=2&sub_menu_left=<?php     echo $sub_menu_left?>" method="post">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="video_part.php?id=1">&#2997;&#3008;&#2975;&#3007;&#2991;&#3019;</a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="?id=2&sub_menu_left=<?php     echo $sub_menu_left?>"><?php     $query_menu="Select * from ict_video_menu where delete_status=0 AND id=".$sub_menu_left;
				$date_menu=mysql_query($query_menu);
				while($row_menu= mysql_fetch_assoc($date_menu))
				{
					echo '<a href="video_part.php?id=2&sub_menu_left='.$row_menu['id'].'">'.$row_menu['video_name'].'</a>';
				}					
				?></a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="view_pages_part.php?id=2">EDIT</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
		<?php     $query_select="Select * from ict_video_sub_menu where delete_status=0 AND video_menu_id='".$sub_menu_left."' AND id='".$edit."' ORDER BY order_id,created_date ASC";
		$date_select=mysql_query($query_select);
		$no_of_rows=mysql_num_rows($date_select);
	
			while($row= mysql_fetch_assoc($date_select))
			{	
			?>
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Video Sub Category Name</td>
							<td>
							<input type="text" name="video_name" value="<?php     echo $row['video_name']?>"/>
							<input type="hidden" value="<?php     echo $edit?>" name="video_id" />
							</td>
						</tr>	
			
						<tr>
							<td>Description</td>
							<td>
							<textarea name="video_desc"><?php     echo $row['video_desc']?></textarea>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" <?php    if($row['active_status']=1){?> selected="selected" <?php     }?> >ACTIVATED</option>
								<option value="0" <?php    if($row['active_status']=0){?> selected="selected" <?php     }?> >DEACTIVATED</option>								
							</select>
							</td>
						</tr>
			
					</table>		
					
			<?php     }
	
		?>
		</td>
	</tr>					
	
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="video_sub_category_edit" value="SAVE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('view_pages_part.php?id=2');" />	
	</td></tr>
</table>
					</form>
<?php     }







//--Function To Show the video Main Category-----//
function show_all_video()
{
$Limit = 10; 
if(!$_GET["view_id"]){
$page=1;
}
else
{
$page=$_GET["view_id"]; //Get the page number to show
}
if($page == ""||!$page) $page=1; //If no page number is set, the default page is 1

?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="video_part.php?id=2">&#2997;&#3008;&#2975;&#3007;&#2991;&#3019;</a></td>
				<td><img src="../files/icons/ar.png" /></td>
				<?php    
				if($_REQUEST['view']!=0){
				
/*$query_category="Select * from ict_video_sub_menu where video_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0";
$date_category=mysql_query($query_category);
while($row_category= mysql_fetch_assoc($date_category))
{		
}		*/		
				
				?>
				<td><a href="video_part.php?id=2">&#2997;&#3008;&#2975;&#3007;&#2991;&#3019;</a></td>
				<?php     }
				
				?>
			</tr>	
		</table>				
	</span>	

	</td>
	<td width="400" align="right"><span class="con"><a>View Videos in</a></span>

									<select name="video_category"  onchange="connect_pagination(this.value)">
									<option value="0" <?php    if($_REQUEST['view']==0){ ?> selected="selected" <?php     }?>>View All Video</option>
									<?php     $query_main_category="Select * from ict_video_menu  where active_status=1 AND delete_status=0";
									$date_main_category=mysql_query($query_main_category);
									while($row_main_category= mysql_fetch_assoc($date_main_category))
									{					
									echo '<optgroup label="'.$row_main_category['video_name'].'">';
									
							$query_c="Select * from ict_video_sub_menu where video_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0 LIMIT 0 , 1";
							$date_c=mysql_query($query_c);
							while($row_c= mysql_fetch_assoc($date_c))
							{	
							$first_id=$row_c['id'];				
							}									
					
									
							$query_category="Select * from ict_video_sub_menu where video_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0";
											$date_category=mysql_query($query_category);
											while($row_category= mysql_fetch_assoc($date_category))
											{					
											echo '<option value="'.$row_category['id'].'" ';
											if($_REQUEST['view']==$row_category['id']){ ?> selected="selected" <?php     }
											echo '">';											
										
											echo $row_category['video_name'];
											echo '</option>';
											
											}
									echo '</optgroup>';
									}
									?>
							</select>	
	</td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php   
				if($_REQUEST['view']==0){
					$cintent='';
					}
					else{
					$cintent='video_menu_id='.$_REQUEST['view'].' AND ';				
					}
			 	$query_st="Select * from ict_video where  ".$cintent."  delete_status=0 ORDER BY order_id,created_date DESC";
				$date_st=mysql_query($query_st);
				$no_of_rows=mysql_num_rows($date_st);
				$NumberOfPages=ceil($no_of_rows/$Limit);

				
			 	$query_select="Select * from ict_video where  ".$cintent."  delete_status=0 ORDER BY order_id,created_date DESC  LIMIT " . ($page-1)*$Limit . ",".$Limit;		
				$date_select=mysql_query($query_select);				
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php 
					    }
						else
						{
					?>
					<tr>
					<td width="300"><b>Name</b></td>
					<td width="100"><b>Status</b></td>		
					<td width="100"><b>Category</b></td>			
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
					<?php     while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a href="?id=2&sub_menu_left=<?php     echo $row['id']?>"><?php    echo $row['video_name'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1){
						echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0){
						echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
					<td width="100">
					<?php     
						$query_category="Select * from ict_video_sub_menu where id=".$row['video_menu_id'];
						$date_category=mysql_query($query_category);
						while($row_category= mysql_fetch_assoc($date_category))
						{					
							echo $row_category['video_name'];
						}
					?>
					</td>					
					<td align="center" width="20">&nbsp;</td>
					<td align="center" width="20"><a href="video_part.php?id=1&edit_video=<?php echo $row['id']; if($_REQUEST['view']){echo "&view=".$_REQUEST['view']; }?>&view_id=<?php echo $_REQUEST['view_id'];?>"><img src="../files/icons/page_white_edit.png "  border="0"/></a></td>		
					<td align="center" width="20"><a href="video_part.php?id=1&delete_video=<?php echo $row['id']; if($_REQUEST['view']){echo "&view=".$_REQUEST['view']; }?>&view_id=<?php echo $_REQUEST['view_id'];?>"  onClick="return confirm('Are you sure want to delete?')"><img src="../files/icons/cancel.png"  border="0"/></a></td>			
					<?php
						    }
						}				
					?>				
			</table>
<?php
if($NumberOfPages==1)
{
}
else
{
?>
			
<table>
				<tr>
					<td>
			
				<?php    //Create and print the Navigation bar
				$Nav_a="";
				for($i_a =1; $i_a<=$NumberOfPages;$i_a++) {
					if($i_a == $page) {
						$Nav_a .="<option value=\"video_part.php?id=1&view=".$_REQUEST['view']."&view_id=".$i_a."\" selected=\"selected\">".$i_a."</option>";
					}else{
						$Nav_a .="<option value=\"video_part.php?id=1&view=".$_REQUEST['view']."&view_id=".$i_a."\" >".$i_a."</option>";
					}
				}				
				?>
			
					</td>
				</tr>
			</table>
<table border="0">

			<tr>
	<?php     $Nav="";

	for($i=1;$i<=$NumberOfPages;$i++){
	if($i==$page) {

if($i==1){
$Nav = '<td width="50">&nbsp;</td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50"><a href="video_part.php?id=1&view='.$_REQUEST['view'].'&view_id='.($i+1).'"><img src="../files/icons/next.png" border="0"/></a></td>';
}
else if($i==$NumberOfPages){
$Nav = '<td width="50"><a href="video_part.php?id=1&view='.$_REQUEST['view'].'&view_id='.($i-1).'"><img src="../files/icons/previous.png"  border="0"/></a></td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50">&nbsp;</td>';
}
else{
$Nav = '<td width="50"><a href="video_part.php?id=1&view='.$_REQUEST['view'].'&view_id='.($i-1).'"><img src="../files/icons/previous.png" border="0"/></a></td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50"><a href="video_part.php?id=1&view='.$_REQUEST['view'].'&view_id='.($i+1).'"><img src="../files/icons/next.png" border="0"/></a></td>';
}
					}
				}
				echo  $Nav;					 
 	?>
																 </tr></table>
<?php
}
?>																 
															 
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('video_part.php?id=1&add=1');" type="button" value="ADD video"  name="head_create"/>
	</td></tr>
</table>
<?php     }

function make_jpg($input, $output, $fromdurasec="01") {
global $ffmpegpath;

if(!file_exists($input)) return false;
$command = "$ffmpegpath -i $input -an -ss 00:00:$fromdurasec -r 1 -vframes 1 -f mjpeg -y $output";
@exec( $command, $ret );
if(!file_exists($output)) return false;
if(filesize($output)==0) return false;
return true;
}



function make_flv($input,$output) {
global $ffmpegpath;
if(!file_exists($input)) return false;
$command = "$ffmpegpath -i $input $output";
@exec( $command, $ret );
if(!file_exists($output)) return false;
if(filesize($output)==0) return false;
return true;
}
function add_video()
{
?>
<form action="video_part.php?id=1&save_uploaded_video=1&view=1&view_id=1" enctype="multipart/form-data" name="sampleform" method="post">


	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="video_part.php?id=1">&#2997;&#3008;&#2975;&#3007;&#2991;&#3019;</a></td>		
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="view_pages_part.php?id=2">ADD</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">

			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Select video Category</td>
							<td>			
							<select name="video_category">
									<?php     $query_main_category="Select * from ict_video_menu  where active_status=1 AND delete_status=0";
									$date_main_category=mysql_query($query_main_category);
									while($row_main_category= mysql_fetch_assoc($date_main_category))
									{					
									echo '<optgroup label="'.$row_main_category['video_name'].'">';
											$query_category="Select * from ict_video_sub_menu where video_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0";
											$date_category=mysql_query($query_category);
											while($row_category= mysql_fetch_assoc($date_category))
											{					
											echo '<option value="'.$row_category['id'].'">';
											echo $row_category['video_name'];
											echo '</option>';
											
											}
									echo '</optgroup>';
									}
									?>
							</select>

							</td>
						</tr>	

						<tr>
							<td>Video Name</td>
							<td>
							<input type="text" name="video_name" />
							</td>
						</tr>	
						<tr>
							<td>Description</td>
							<td>
							<textarea name="video_desc"></textarea>
							</td>
						</tr>	
						<tr>
							<td>video File</td>
							<td>
								<input type="file" name="ufile" id="ufile"  />
							</td>
						</tr>												
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" selected="selected" >ACTIVATED</option>
								<option value="0" >DEACTIVATED</option>								
							</select>
							</td>
						</tr>

					</table>		
		

		</td>
	</tr>			
	<tr><td class="tit">
		<input type="submit" class="ict_btn" name="add_video_save" value="Save">
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('view_pages_part.php?id=2');" />	
	</td></tr>
</table>
					</form>
<?php     }

function delete_category_for_video($delete_id)
{	


	$query_sub_vid="SELECT * FROM ict_video_sub_menu where video_menu_id=".$delete_id;
	$data_sub_vid=mysql_query($query_sub_vid);
	while($row_sub_vid=mysql_fetch_assoc($data_sub_vid)){		 	
		$query_delete_main_video="DELETE FROM ict_video WHERE id=".$row_sub_vid['video_menu_id'];
		mysql_query($query_delete_main_video);
	}
	
	$query_delete_sub="DELETE FROM ict_video_sub_menu  WHERE video_menu_id=".$delete_id;
	mysql_query($query_delete_sub);
	
	$query_delete_category_vi="DELETE FROM  ict_video_menu WHERE id=".$delete_id;
	mysql_query($query_delete_category_vi);
	

}

function delete_sub_category_for_video($sub_menu_left,$delete_id)
{

	$query_video="DELETE FROM ict_video WHERE video_menu_id=".$delete_id;	
	mysql_query($query_video);
	$query_delete_sub="DELETE FROM ict_video_sub_menu  WHERE id=".$delete_id;
	mysql_query($query_delete_sub);
}

/*-------------------------------------------------------------------VIDEO PART END------------------------------------------------------------------------------*/










/*-------------------------------------------------------------------IMAGE PART START------------------------------------------------------------------------------*/

//--Function To Show the image Main Category-----//
function show_category_for_image()
{
	if($_POST['image_left_save'])
	{
	$query_insert="INSERT INTO ict_image_menu(image_name,image_desc,active_status,delete_status,created_date)VALUES('".$_POST['image_name' ]."','".$_POST['image_desc']."','1','0',now());";	
	mysql_query($query_insert);
	
	}
	if($_POST['image_left_update'])
	{
 	$query_update="UPDATE ict_image_menu SET image_name= '".$_POST['image_name']."',image_desc= '".$_POST['image_desc']."',active_status = '".$_POST['active_status']."' WHERE id=".$_POST['image_id'];
	mysql_query($query_update);
	}	


?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="image_part.php?id=2">&#2986;&#2975;&#2969;&#3021;&#2965;&#2995;&#3021;</a></td>
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"><a href="change_order_image_menu">Change Order</a></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php     $query_select="Select * from ict_image_menu where delete_status=0 ORDER BY order_id,created_date ASC";
				$date_select=mysql_query($query_select);
				$no_of_rows=mysql_num_rows($date_select);
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Category</b></td>
					<td width="100"><b>Status</b></td>					
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
					<?php     while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a href="?id=2&sub_menu_left=<?php     echo $row['id']?>"><?php    echo $row['image_name'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1){
						echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0){
						echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
					<td align="center" width="20"><a href="image_part.php?id=2&sub_menu_left=<?php     echo $row['id']?>"><img src="../files/icons/sitemap_color.png"  border="0"
					class="hintanchor" onMouseover="showhint('Click to View Sub-Category under &quot;<?php     echo $row['image_name'];?>&quot;', this, event, '150px')" 
					/></a></td>
					<td align="center" width="20"><a href="image_part.php?id=2&edit_image=<?php     echo $row['id']?>"><img src="../files/icons/page_white_edit.png "  border="0"
					class="hintanchor" onMouseover="showhint('Click to Edit Sub-Category  &quot;<?php     echo $row['image_name'];?>&quot;', this, event, '150px')" 					
					/></a></td>		
					<td align="center" width="20"><a href="image_part.php?id=2&delete_image=<?php     echo $row['id']?>"  onClick="return confirm('Are you sure want to delete?')"><img src="../files/icons/cancel.png"  border="0"
					class="hintanchor" onMouseover="showhint('Click to Delete &quot;<?php     echo $row['image_name'];?>&quot;', this, event, '150px')" 					
					/></a></td>					
					<?php     }
				}
				
				?>
				
			</table>
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('image_part.php?id=2&add=1');" type="button" value="ADD CATEGORY"  name="head_create"/>
	</td></tr>
</table>
<?php     }



//----Function To Show the image Sub Category-----//
function show_sub_category_for_image($sub_id)
{
	if($_POST['image_sub_category'])
	{
 	$query_insert="INSERT INTO ict_image_sub_menu(image_menu_id,image_name,image_desc,active_status,delete_status,created_date)VALUES('".$_REQUEST['sub_menu_left']."','".$_POST['image_name' ]."','".$_POST['image_desc']."','1','0',now());";	
	mysql_query($query_insert);	
	}
	if($_POST['image_sub_category_edit']){
	$query_update="UPDATE ict_image_sub_menu SET image_name = '".$_POST['image_name' ]."',image_desc = '".$_POST['image_desc']."' WHERE id =".$_POST['image_id'];
	mysql_query($query_update);
	}

?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="image_part.php?id=2">&#2986;&#2975;&#2969;&#3021;&#2965;&#2995;&#3021;</a></td>
				<td><img src="../files/icons/ar.png" /></td>
				<td><?php     $query_menu="Select * from ict_image_menu where delete_status=0 AND id=".$sub_id;
				$date_menu=mysql_query($query_menu);
				while($row_menu= mysql_fetch_assoc($date_menu))
				{
					echo '<a href="image_part.php?id=2&sub_menu_left='.$row_menu['id'].'">'.$row_menu['image_name'].'</a>';
				}					
				?></td>				
				
				
				
				
				
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"><a href="change_order_image_sub_menu/?sub_menu_id=<?php     echo $_REQUEST['sub_menu_left']?>">Change Order</a></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php     $query_select="Select * from ict_image_sub_menu where delete_status=0 AND image_menu_id='".$sub_id."' ORDER BY order_id,created_date ASC";
				$date_select=mysql_query($query_select);
				$no_of_rows=mysql_num_rows($date_select);
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Category</b></td>
					<td width="100"><b>Status</b></td>					
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
					<?php     while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a><?php    echo $row['image_name'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1){
						echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0){
						echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
					<td align="center" width="20"><a href="?id=1&add=1&view=<?php     echo $row['id']?>"><img src="../files/icons/film_add.png" border="0" class="hintanchor" onMouseover="showhint('Click To Add File under &quot;<?php    echo $row['image_name'];?>&quot;', this, event, '150px')" ></a></td>					
					<td align="center" width="20"><a href="?id=1&view=<?php     echo $row['id']?>"><img src="../files/icons/sitemap_color.png" border="0" class="hintanchor" onMouseover="showhint('Click To view File under &quot;<?php    echo $row['image_name'];?>&quot;', this, event, '150px')" ></a></td>
					<td align="center" width="20"><a href="?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>&edit_image=<?php     echo $row['id']?>">
					<img src="../files/icons/page_white_edit.png "  border="0"
					class="hintanchor" onMouseover="showhint('Click to Edit &quot;<?php     echo $row['image_name'];?>&quot;', this, event, '150px')" 					
					/></a></td>		
					<td align="center" width="20"><a href="?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>&delete_image=<?php     echo $row['id']?>"  onClick="return confirm('Are you sure want to delete?')">
					<img src="../files/icons/cancel.png"  border="0"
					class="hintanchor" onMouseover="showhint('Click to Delete &quot;<?php     echo $row['image_name'];?>&quot;', this, event, '150px')" 					
					/></a></td>					
					<?php     }
				}
				
				?>
				
			</table>
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('image_part.php?id=2&sub_menu_left=<?php     echo $sub_id?>&add=1');" type="button" value="ADD SUB CATEGORY"  name="add_image_sub_category"/>
	<input type="button" class="ict_btn" value="BACK" onClick="open_link('image_part.php?id=2');" />
	</td></tr>
</table>
<?php     }


function add_category_for_image()
{
?>
	<form action="image_part.php?id=2" method="post">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="image_part.php?id=2">&#2986;&#2975;&#2969;&#3021;&#2965;&#2995;&#3021;</a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="image_part.php?id=1&add=1">ADD</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">

			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Image Category Name</td>
							<td>
							<input type="text" name="image_name"/>
							</td>
						</tr>	

						<tr>
							<td>Description</td>
							<td>
							<textarea name="image_desc"></textarea>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" selected="selected" >ACTIVATED</option>
								<option value="0" >DEACTIVATED</option>								
							</select>
							</td>
						</tr>

					</table>		
		

		</td>
	</tr>			
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="image_left_save" value="SAVE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('image_part.php?id=2');" />	
	</td></tr>
</table>
					</form>
<?php     }


function edit_category_for_image($image_id)
{
?>
	<form action="image_part.php?id=2" method="post">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="image_part.php?id=2">&#2986;&#2975;&#2969;&#3021;&#2965;&#2995;&#3021;</a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a>EDIT</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
		<?php     $query_select="Select * from ict_image_menu where delete_status=0 AND id='".$image_id."' ORDER BY order_id,created_date ASC";
		$date_select=mysql_query($query_select);
		$no_of_rows=mysql_num_rows($date_select);
	
			while($row= mysql_fetch_assoc($date_select))
			{	
			?>
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Image Category Name</td>
							<td>
							<input type="text" name="image_name" value="<?php     echo $row['image_name']; ?>"/>
							<input type="hidden" value="<?php echo $image_id; ?>" name="image_id" />
							</td>
						</tr>	
			
						<tr>
							<td>Description</td>
							<td>
							<textarea name="image_desc"><?php echo $row['image_desc']; ?></textarea>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" <?php    if($row['active_status']=1){?> selected="selected" <?php     }?> >ACTIVATED</option>
								<option value="0" <?php    if($row['active_status']=0){?> selected="selected" <?php     }?> >DEACTIVATED</option>								
							</select>
							</td>
						</tr>
			
					</table>		
					
			<?php     }
	
		?>
		</td>
	</tr>			
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="image_left_update" value="UPDATE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('image_part.php?id=2');" />	
	</td></tr>
</table>
					</form>
<?php     }




function add_sub_category_for_image($sub_menu_left,$add)
{
?>
	<form action="image_part.php?id=2&sub_menu_left=<?php     echo $sub_menu_left?>" method="post">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="image_part.php?id=1">&#2986;&#2975;&#2969;&#3021;&#2965;&#2995;&#3021;</a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="?id=2&sub_menu_left=<?php     echo $sub_menu_left?>"><?php     $query_menu="Select * from ict_image_menu where delete_status=0 AND id=".$sub_menu_left;
				$date_menu=mysql_query($query_menu);
				while($row_menu= mysql_fetch_assoc($date_menu))
				{
					echo '<a href="image_part.php?id=2&sub_menu_left='.$row_menu['id'].'">'.$row_menu['image_name'].'</a>';
				}					
				?></a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a>ADD</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">

			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Image Category Name</td>
							<td>
							<input type="text" name="image_name"/>
							</td>
						</tr>	

						<tr>
							<td>Description</td>
							<td>
							<textarea name="image_desc"></textarea>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" selected="selected" >ACTIVATED</option>
								<option value="0" >DEACTIVATED</option>								
							</select>
							</td>
						</tr>

					</table>		
		

		</td>
	</tr>			
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="image_sub_category" value="SAVE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('?id=2&sub_menu_left=<?php echo $_REQUEST['sub_menu_left']; ?>');" />	
	</td></tr>
</table>
					</form>
<?php     }




function edit_sub_category_for_image($sub_menu_left,$edit)
{
?>
	<form action="image_part.php?id=2&sub_menu_left=<?php     echo $sub_menu_left?>" method="post">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="image_part.php?id=1">&#2986;&#2975;&#2969;&#3021;&#2965;&#2995;&#3021;</a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="?id=2&sub_menu_left=<?php     echo $sub_menu_left?>"><?php     $query_menu="Select * from ict_image_menu where delete_status=0 AND id=".$sub_menu_left;
				$date_menu=mysql_query($query_menu);
				while($row_menu= mysql_fetch_assoc($date_menu))
				{
					echo '<a href="image_part.php?id=2&sub_menu_left='.$row_menu['id'].'">'.$row_menu['image_name'].'</a>';
				}					
				?></a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a>EDIT</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
		<?php     $query_select="Select * from ict_image_sub_menu where delete_status=0 AND image_menu_id='".$sub_menu_left."' AND id='".$edit."' ORDER BY order_id,created_date ASC";
		$date_select=mysql_query($query_select);
		$no_of_rows=mysql_num_rows($date_select);
	
			while($row= mysql_fetch_assoc($date_select))
			{	
			?>
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Image Sub Category Name</td>
							<td>
							<input type="text" name="image_name" value="<?php     echo $row['image_name']; ?>"/>
							<input type="hidden" value="<?php     echo $edit ?>" name="image_id" />
							</td>
						</tr>	
			
						<tr>
							<td>Description</td>
							<td>
							<textarea name="image_desc"><?php  echo $row['image_desc']; ?></textarea>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" <?php    if($row['active_status']=1){?> selected="selected" <?php     }?> >ACTIVATED</option>
								<option value="0" <?php    if($row['active_status']=0){?> selected="selected" <?php     }?> >DEACTIVATED</option>								
							</select>
							</td>
						</tr>
			
					</table>		
					
			<?php     }
	
		?>
		</td>
	</tr>					
	
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="image_sub_category_edit" value="SAVE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('?id=2&sub_menu_left=<?php echo $_REQUEST['sub_menu_left']; ?>');" />	
	</td></tr>
</table>
					</form>
<?php     }






//--Function To Show the image Main Category-----//
function show_all_image()
{
$Limit = 10; 
$page=$_GET["view_id"]; //Get the page number to show
if($page == ""||!$page) $page=1; //If no page number is set, the default page is 1

		if($_REQUEST['delete_image']){
			$query_delete="DELETE FROM ict_image WHERE  id=".$_REQUEST['delete_image'];
			mysql_query($query_delete);
		}
		if($_REQUEST['edit_image_save']){
		
			$file_name1 = $_FILES['ufile']['name'];
			if($file_name1)
			{
				$random_digit1=rand(0000,9999);
				$new_file_name1=$random_digit1.$file_name1;
				$path1= "../files/uploading_images/".$new_file_name1;
				$path2= "../files/uploading_thumbs/".$new_file_name1;				
				
				if($ufile !=none)
				{
						copy($_FILES['ufile']['tmp_name'], $path1);
				}	
//define a maxim size for the uploaded images
		define ("MAX_SIZE","999999");
		define ("WIDTH","150");
		define ("HEIGHT","100");			
		
		$thumb=make_thumb($path1,$path2,WIDTH,HEIGHT);	
			
        $query_update="UPDATE ict_image SET image_menu_id = '".$_POST['image_category']."',image_name = '".$_POST['image_name']."',image_desc = '".$_POST['image_desc']."',image_path = '".$new_file_name1."',active_status = '".$_POST['active_status']."' WHERE id=".$_POST['edit_id'];				
					
			}
			else{
       $query_update="UPDATE ict_image SET image_menu_id = '".$_POST['image_category']."',image_name = '".$_POST['image_name']."',image_desc = '".$_POST['image_desc']."',active_status = '".$_POST['active_status']."' WHERE id=".$_POST['edit_id'];			
			
			}
		
		mysql_query($query_update);
		
		}
		
		
	if($_POST['add_image_save']){	
/*	 echo "Upload: " . $_FILES["ufile"]["name"] . "<br />";
  echo "Type: " . $_FILES["ufile"]["type"] . "<br />";
  echo "Size: " . ($_FILES["ufile"]["size"] / 1024) . " Kb<br />";
  echo "Stored in: " . $_FILES["ufile"]["tmp_name"];	
*/

		 	$file_name1 = $_FILES['ufile']['name'];
			if($file_name1)
			{
				$random_digit1=rand(0000,9999);
				$new_file_name1=$random_digit1.$file_name1;
				$path1= "../files/uploading_images/".$new_file_name1;
				$path2= "../files/uploading_thumbs/".$new_file_name1;				
				
				if($ufile !=none)
				{
						copy($_FILES['ufile']['tmp_name'], $path1);
				}	
					
			}
		//define a maxim size for the uploaded images
		define ("MAX_SIZE","999999");
		define ("WIDTH","150");
		define ("HEIGHT","100");			
		
		$thumb=make_thumb($path1,$path2,WIDTH,HEIGHT);
								
			$query_insert_image="INSERT INTO ict_image(image_menu_id,image_name,image_desc,image_path,active_status,delete_status,created_date)VALUES 
			('".$_POST['image_category']."','".$_POST['image_name']."','".$_POST['image_desc']."','".$new_file_name1."','".$_POST['active_status']."','0',now());";
			mysql_query($query_insert_image);	
			
	}
?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="image_part.php?id=2">&#2986;&#2975;&#2969;&#3021;&#2965;&#2995;&#3021;</a></td>
			</tr>	
		</table>				
	</span>	

	</td>
	<td width="400" align="right"><span class="con"><a>View Images in</a></span>

									<select name="image_category"  onchange="connect_pagination(this.value)">
									<option value="0" <?php    if($_REQUEST['view']==0){ ?> selected="selected" <?php     }?>>View All Image</option>
									<?php     $query_main_category="Select * from ict_image_menu  where active_status=1 AND delete_status=0";
									$date_main_category=mysql_query($query_main_category);
									while($row_main_category= mysql_fetch_assoc($date_main_category))
									{					
									echo '<optgroup label="'.$row_main_category['image_name'].'">';
									
							$query_c="Select * from ict_image_sub_menu where image_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0 LIMIT 0 , 1";
							$date_c=mysql_query($query_c);
							while($row_c= mysql_fetch_assoc($date_c))
							{	
							$first_id=$row_c['id'];				
							}									
					
									
							$query_category="Select * from ict_image_sub_menu where image_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0";
											$date_category=mysql_query($query_category);
											while($row_category= mysql_fetch_assoc($date_category))
											{					
											echo '<option value="'.$row_category['id'].'" ';
											if($_REQUEST['view']==$row_category['id']){ ?> selected="selected" <?php     }
											echo '">';											
										
											echo $row_category['image_name'];
											echo '</option>';
											
											}
									echo '</optgroup>';
									}
									?>
							</select>	
	</td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php    if($_REQUEST['view']==0){
					$cintent='';
					}
					else{
					$cintent='image_menu_id='.$_REQUEST['view'].' AND ';				
					}
			 	$query_st="Select * from ict_image where  ".$cintent."  delete_status=0 ORDER BY order_id,created_date desc";
				$date_st=mysql_query($query_st);
				$no_of_rows=mysql_num_rows($date_st);
				$NumberOfPages=ceil($no_of_rows/$Limit);

				
			 	$query_select="Select * from ict_image where  ".$cintent."  delete_status=0 ORDER BY order_id,created_date desc LIMIT " . ($page-1)*$Limit . ",".$Limit;		
				$date_select=mysql_query($query_select);				
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Name</b></td>
					<td width="100"><b>Status</b></td>		
					<td width="100"><b>Category</b></td>			
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
					<?php    
					while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a href="?id=2&sub_menu_left=<?php     echo $row['id']?>"><?php    echo $row['image_name'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1){
						echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0){
						echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
					<td width="100">
					<?php     $query_category="Select * from ict_image_sub_menu where id=".$row['image_menu_id'];
						$date_category=mysql_query($query_category);
						while($row_category= mysql_fetch_assoc($date_category))
						{					
						echo $row_category['image_name'];
						}
					?>
					</td>					
					<td align="center" width="20">&nbsp;</td>
					<td align="center" width="20"><a href="image_part.php?id=1&view=<?php echo $_REQUEST['view']; ?>&edit_image=<?php     echo $row['id']?>"><img src="../files/icons/page_white_edit.png "  border="0"/></a></td>		
					<td align="center" width="20"><a href="image_part.php?id=1<?php if($_REQUEST['view']){ ?>&view=<?php echo $_REQUEST['view']; }?>&delete_image=<?php     echo $row['id']?>"  onClick="return confirm('Are you sure want to delete?')"><img src="../files/icons/cancel.png"  border="0"/></a></td>					
					<?php     }
				}
				
				?>
				
			</table>
<?php
if($NumberOfPages==1)
{
}
else
{
?>			
			
<table>
				<tr>
					<td>
			
				<?php    //Create and print the Navigation bar
				$Nav_a="";
				for($i_a =1; $i_a<=$NumberOfPages;$i_a++) {
					if($i_a == $page) {
						$Nav_a .="<option value=\"image_part.php?id=1&view=".$_REQUEST['view']."&view_id=".$i_a."\" selected=\"selected\">".$i_a."</option>";
					}else{
						$Nav_a .="<option value=\"image_part.php?id=1&view=".$_REQUEST['view']."&view_id=".$i_a."\" >".$i_a."</option>";
					}
				}				
				?>
			
					</td>
				</tr>
			</table>
<table border="0">

			<tr>
	<?php     $Nav="";

	for($i=1;$i<=$NumberOfPages;$i++){
	if($i==$page) {

if($i==1){
$Nav = '<td width="50">&nbsp;</td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50"><a href="image_part.php?id=1&view='.$_REQUEST['view'].'&view_id='.($i+1).'"><img src="../files/icons/next.png" border="0"/></a></td>';
}
else if($i==$NumberOfPages){
$Nav = '<td width="50"><a href="image_part.php?id=1&view='.$_REQUEST['view'].'&view_id='.($i-1).'"><img src="../files/icons/previous.png"  border="0"/></a></td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50">&nbsp;</td>';
}
else{
$Nav = '<td width="50"><a href="image_part.php?id=1&view='.$_REQUEST['view'].'&view_id='.($i-1).'"><img src="../files/icons/previous.png" border="0"/></a></td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50"><a href="image_part.php?id=1&view='.$_REQUEST['view'].'&view_id='.($i+1).'"><img src="../files/icons/next.png" border="0"/></a></td>';
}
					}
				}
				echo  $Nav;					 
 	?>
																 </tr></table>
																
<?php
}
?>																	 
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('image_part.php?id=1&add=1&view=<?php echo $_REQUEST['view']; ?>  ');" type="button" value="ADD image"  name="head_create"/>
	</td></tr>
</table>
<?php     }

function delete_image($sub_menu_left,$delete_id)
{
$query_delete="UPDATE ict_image_sub_menu SET active_status = '0',delete_status = '1',deleted_date=now() WHERE image_menu_id='".$sub_menu_left."' AND  id =".$delete_id;
mysql_query($query_delete);
 	
}



function add_image()
{
?>
<form action="image_part.php?id=1&view=<?php echo $_REQUEST['view'];?>" enctype="multipart/form-data" name="sampleform" method="post">	

	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="image_part.php?id=1">&#2986;&#2975;&#2969;&#3021;&#2965;&#2995;&#3021;</a></td>		
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="view_pages_part.php?id=2">ADD</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">

			<table class="designtable" cellspacing="0" cellpadding="0" border="0" width="900">
						<tr>
							<td width="140">Select image Category</td>
							<td>			
							<select name="image_category" id="image_id">

									<?php     $query_main_category="Select * from ict_image_menu  where active_status=1 AND delete_status=0";
									$date_main_category=mysql_query($query_main_category);
									while($row_main_category= mysql_fetch_assoc($date_main_category))
									{					
									echo '<optgroup label="'.$row_main_category['image_name'].'">';
											$query_category="Select * from ict_image_sub_menu where image_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0";
											$date_category=mysql_query($query_category);
											while($row_category= mysql_fetch_assoc($date_category))
											{					
											echo '<option value="'.$row_category['id'].'" ';
											if($row_category['id']==$_REQUEST['view']){
											echo 'selected="selected"';
											}
											echo ' >';

											echo $row_category['image_name'];
											echo '</option>';
											
											}
									echo '</optgroup>';
									}
									?>
							</select>

							</td>
						</tr>	

						<tr>
							<td>Image Name</td>
							<td>
							<input type="text" name="image_name" id="image_name" />
							</td>
						</tr>	
						<tr>
							<td>Description</td>
							<td>
								<textarea name="image_desc"></textarea>
							</td>
						</tr>						
						<tr>
							<td valign="top">Mutiple File upload</td>
							<td align="left">
								<table cellpadding="0" cellspacing="0" style="margin:0 0 0 0;width:500px;" border="0">
																	<tr>
																		<td valign="top">
																<table border="0" width="500" cellpadding="0" cellspacing="0" class="test_d" style="float:left; margin:0;">
																			<tr class="test1">
																				<td width="30" style="border-left:solid 1px #999999;border-top:solid 1px #999999;">S No</td>										
																				<td width="220" style="border-top:solid 1px #999999;">File</td>
																				<td width="70" style="border-top:solid 1px #999999;"></td>										
																			</tr>
																</table>
																<table border="0" width="500" cellpadding="0" cellspacing="0" class="test_d" style="float:left; margin:0;">
																			<tr>
																				<td width="30" style="border-left:solid 1px #999999;">&nbsp;</td>										
																				<td width="220" valign="top" height="30">
																					<table cellpadding="0" cellspacing="0" border="0" style="margin:8px 0 0 20px;">
																						<tr>
																							<td style="border:none;"><span id="upload">Click to select File<span><input  type="hidden" id="image_file"/></td>
																																			
																							<td style="border:none;"><span id="status" ></span><ul id="image_file1" ></ul></td>
																						</tr>
																					</table>															
																				</td>
																				<td width="70"><input type="button" onclick="add_colors_img();"  name="cat_add" value="Add" class="ict_btnot" /></td>
																			</tr>
																</table>
																
																<span id="out_put_color">
																<table border="0" width="500" cellpadding="0" cellspacing="0" class="test_d" style="float:left; margin:0;">
																<?php
																$query_color="Select * from ict_image limit 0,1";
																$data_color=mysql_query($query_color);
																$r=1;
																while($row_color = mysql_fetch_assoc($data_color)) {
																?>	 	 
																	<tr>
																		<td width="30" style="border-left:solid 1px #999999;"><?php echo $r; ?></td>										
																		<td width="220"><img src="../files/uploading_thumbs/<?php echo $row_color['image_path']; ?>"   width="70" height="40"></td>
																		<td width="70"><img src="../files/icons/cancel.png" onclick="delete_colors_img('<?php echo $row_color['id']; ?>')" /></td>										
																	</tr>
																<?php
																$r=$r+1;
																}
																?>			
																</table>
																</span>
																		
																		</td>
																	</tr>
																</table>														
							</td>
						</tr>												
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" selected="selected" >ACTIVATED</option>
								<option value="0" >DEACTIVATED</option>								
							</select>
							</td>
						</tr>

					</table>		
		

		</td>
	</tr>			
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="add_image_save" value="SAVE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('?id=1&view=<?php echo $_REQUEST['view'];?>');" />	
	</td></tr>
</table>
					</form>
<?php    
}


function edit_image()
{
?>
<form action="image_part.php?id=1&view=<?php echo $_REQUEST['view'];?>" enctype="multipart/form-data" name="sampleform" method="post">	

	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="?id=1">&#2986;&#2975;&#2969;&#3021;&#2965;&#2995;&#3021;</a></td>		
					<td><img src="../files/icons/ar.png" /></td>
					<td><a>Edit</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
		<?php
		$query_ed="Select * from ict_image where id=".$_REQUEST['edit_image'];
		$date_ed=mysql_query($query_ed);
		while($row_ed=mysql_fetch_assoc($date_ed)){
		?>

			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Select image Category</td>
							<td><input type="hidden" value="<?php echo $_REQUEST['edit_image']; ?>" name="edit_id" />			
							<select name="image_category">

									<?php     $query_main_category="Select * from ict_image_menu  where active_status=1 AND delete_status=0";
									$date_main_category=mysql_query($query_main_category);
									while($row_main_category= mysql_fetch_assoc($date_main_category))
									{					
									echo '<optgroup label="'.$row_main_category['image_name'].'">';
											$query_category="Select * from ict_image_sub_menu where image_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0";
											$date_category=mysql_query($query_category);
											while($row_category= mysql_fetch_assoc($date_category))
											{					
											echo '<option value="'.$row_category['id'].'" ';
											if($row_category['id']==$_REQUEST['view']){
											echo 'selected="selected"';
											}
											echo ' >';

											echo $row_category['image_name'];
											echo '</option>';
											
											}
									echo '</optgroup>';
									}
									?>
							</select>

							</td>
						</tr>	

						<tr>
							<td>Image Name</td>
							<td>
							<input type="text" name="image_name" value="<?php echo $row_ed['image_name']; ?>" />
							</td>
						</tr>	
						<tr>
							<td>Description</td>
							<td>
							<textarea name="image_desc"><?php echo $row_ed['image_desc']; ?></textarea>
							</td>
						</tr>	
						<tr>
							<td valign="top">Image File</td>
							<td>
								<table cellpadding="0" cellspacing="0">
									<tr>
										 <td valign="top" style="border:none"><input name="ufile" type="file" id="ufile"/></td>
										 <td valign="top" style="border:none"><img src="../files/uploading_thumbs/<?php echo $row_ed['image_path'];?>" width="75" height="75" /></td>
									</tr>
								</table>	
							</td>
						</tr>												
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" selected="selected" >ACTIVATED</option>
								<option value="0" >DEACTIVATED</option>								
							</select>
							</td>
						</tr>

					</table>		
		

		</td>
	</tr>			
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="edit_image_save" value="SAVE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('?id=1&view=<?php echo $_REQUEST['view'];?>');" />	
		
	</td></tr>
</table>
					</form>
<?php 
}   
}

function delete_category_for_image($delete_id)
{
$query_delete="UPDATE ict_image_menu SET active_status = '0',delete_status = '1',deleted_date=now() WHERE id =".$delete_id;
mysql_query($query_delete);

}

function delete_sub_category_for_image($sub_menu_left,$delete_id)
{
$query_delete="UPDATE ict_image_sub_menu SET active_status = '0',delete_status = '1',deleted_date=now() WHERE image_menu_id='".$sub_menu_left."' AND  id =".$delete_id;
mysql_query($query_delete);
 	
}

/*-------------------------------------------------------------------IMAGE PART START------------------------------------------------------------------------------*/













/*-------------------------------------------------------------------MUSIC PART START------------------------------------------------------------------------------*/

//--Function To Show the music Main Category-----//
function show_category_for_music()
{
	if($_POST['music_left_save'])
	{


		 	$file_name1 = $_FILES['ufile']['name'];
			if($file_name1)
			{
				$random_digit1=rand(0000,9999);
				$new_file_name1=$random_digit1.$file_name1;
				$path1= "../files/music_images/".$new_file_name1;
				$path2= "../files/music_images/mu".$new_file_name1;				
				
				if($ufile !=none)
				{
						copy($_FILES['ufile']['tmp_name'], $path1);
				}	
					
			}
		//define a maxim size for the uploaded images
		define ("MAX_SIZE","999999");
		define ("WIDTH","150");
		define ("HEIGHT","100");			
		
		if(make_thumb($path1,$path2,WIDTH,HEIGHT)){
		unlink($path1);
		}	
		
	
	 $query_insert="INSERT INTO ict_music_menu(music_name,music_image,music_desc,active_status,delete_status,created_date)VALUES('".$_POST['music_name' ]."','mu".$new_file_name1."','".$_POST['music_desc']."','1','0',now());";	
	mysql_query($query_insert);
	
	}
	
	
	
	if($_POST['music_left_update'])
	{
	
			$file_name1 = $_FILES['ufile']['name'];
			if($file_name1)
			{
				$random_digit1=rand(0000,9999);
				$new_file_name1=$random_digit1.$file_name1;
				$path1= "../files/music_images/".$new_file_name1;
				$path2= "../files/music_images/mu".$new_file_name1;				
				
				if($ufile !=none)
				{
						copy($_FILES['ufile']['tmp_name'], $path1);
				}	
				//define a maxim size for the uploaded images
				define ("MAX_SIZE","999999");
				define ("WIDTH","150");
				define ("HEIGHT","100");			
				
				if(make_thumb($path1,$path2,WIDTH,HEIGHT)){
				unlink($path1);
				}	
		
			$query_update="UPDATE ict_music_menu SET music_name= '".$_POST['music_name']."',music_desc= '".$_POST['music_desc']."',music_image='mu".$new_file_name1."',active_status = '".$_POST['active_status']."' WHERE id=".$_POST['music_id'];
			mysql_query($query_update);								
			}
			else{
					$query_update="UPDATE ict_music_menu SET music_name= '".$_POST['music_name']."',music_desc= '".$_POST['music_desc']."',active_status = '".$_POST['active_status']."' WHERE id=".$_POST['music_id'];
			mysql_query($query_update);	
			}
	

	}	


?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="music_part.php?id=2">&#2951;&#2970;&#3016;</a></td>
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"><a href="change_order_music_menu">Change Order</a></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php     $query_select="Select * from ict_music_menu where delete_status=0 ORDER BY order_id,created_date ASC";
				$date_select=mysql_query($query_select);
				$no_of_rows=mysql_num_rows($date_select);
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Category</b></td>
					<td width="100"><b>Status</b></td>					
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
					<?php     while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a href="?id=2&sub_menu_left=<?php     echo $row['id']?>"><?php     echo $row['music_name'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1){
						echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0){
						echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
					<td align="center" width="20"><a href="music_part.php?id=2&sub_menu_left=<?php     echo $row['id']?>"><img src="../files/icons/sitemap_color.png"  border="0" class="hintanchor" onMouseover="showhint('Click to View Sub-Category under &quot;<?php     echo $row['music_name'];?>&quot;', this, event, '150px')" /></a></td>
					<td align="center" width="20"><a href="music_part.php?id=2&edit_music=<?php     echo $row['id']?>"><img src="../files/icons/page_white_edit.png "  border="0" class="hintanchor" onMouseover="showhint('Click to Edit &quot;<?php     echo $row['music_name'];?>&quot;', this, event, '150px')" /></a></td>		
					<td align="center" width="20"><a href="music_part.php?id=2&delete_music=<?php     echo $row['id']?>"  onClick="return confirm('Are you sure want to delete?')"><img src="../files/icons/cancel.png"  border="0" class="hintanchor" onMouseover="showhint('Click to Delete &quot;<?php     echo $row['music_name'];?>&quot;', this, event, '150px')"/></a></td>					
					<?php     }
				}
				
				?>
				
			</table>
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('music_part.php?id=2&add=1');" type="button" value="ADD CATEGORY"  name="head_create"/>
	</td></tr>
</table>
<?php     }



//----Function To Show the music Sub Category-----//
function show_sub_category_for_music($sub_id)
{
	if($_POST['music_sub_category'])
	{
 	$query_insert="INSERT INTO ict_music_sub_menu(music_menu_id,music_name,music_desc,active_status,delete_status,created_date)VALUES('".$_REQUEST['sub_menu_left']."','".$_POST['music_name' ]."','".$_POST['music_desc']."','1','0',now());";	
	mysql_query($query_insert);	
	}
	if($_POST['music_sub_category_edit']){
	$query_update="UPDATE ict_music_sub_menu SET music_name = '".$_POST['music_name' ]."',music_desc = '".$_POST['music_desc']."' WHERE id =".$_POST['music_id'];
	mysql_query($query_update);
	}
	
	
$Limit = 10; 
$page=$_GET["view_id"]; //Get the page number to show
if($page == ""||!$page) $page=1; //If no page number is set, the default page is 1	

?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="music_part.php?id=2">&#2951;&#2970;&#3016;</a></td>
				<td><img src="../files/icons/ar.png" /></td>
				<td><?php     $query_menu="Select * from ict_music_menu where delete_status=0 AND id=".$sub_id;
				$date_menu=mysql_query($query_menu);
				while($row_menu= mysql_fetch_assoc($date_menu))
				{
					echo '<a href="music_part.php?id=2&sub_menu_left='.$row_menu['id'].'">'.$row_menu['music_name'].'</a>';
				}					
				?></td>				
				
				
				
				
				
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"><a href="change_order_music_sub_menu/?sub_menu_id=<?php     echo $_REQUEST['sub_menu_left']?>">Change Order</a></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				
				
				<?php 
				$query_st="Select * from ict_music_sub_menu where delete_status=0 AND music_menu_id='".$sub_id."' ORDER BY order_id,created_date ASC";
				$date_st=mysql_query($query_st);
				$no_of_rows=mysql_num_rows($date_st);
				$NumberOfPages=ceil($no_of_rows/$Limit);
				
				
				$query_select="Select * from ict_music_sub_menu where delete_status=0 AND music_menu_id='".$sub_id."' ORDER BY order_id,created_date ASC LIMIT " . ($page-1)*$Limit . ",".$Limit;
				$date_select=mysql_query($query_select);
				$no_of_rows=mysql_num_rows($date_select);
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Category</b></td>
					<td width="100"><b>Status</b></td>					
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
					<?php     while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a href="?id=1&view=<?php     echo $row['id']?>"><?php    echo $row['music_name'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1){
						echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0){
						echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
					<td align="center" width="20"><a href="?id=1&add=1&view=<?php     echo $row['id']?>"><img src="../files/icons/film_add.png" border="0" class="hintanchor" onMouseover="showhint('Click To Add File under &quot;<?php    echo $row['music_name'];?>&quot;', this, event, '150px')" ></a></td>					
					<td align="center" width="20"><a href="?id=1&view=<?php     echo $row['id']?>"><img src="../files/icons/sitemap_color.png" border="0" class="hintanchor" onMouseover="showhint('Click To view File under &quot;<?php    echo $row['music_name'];?>&quot;', this, event, '150px')" ></a></td>
					<td align="center" width="20"><a href="music_part.php?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>&edit_music=<?php     echo $row['id']?>"><img src="../files/icons/page_white_edit.png "  border="0" class="hintanchor" onMouseover="showhint('Click To Edit Name &quot;<?php    echo $row['music_name'];?>&quot;', this, event, '150px')" /></a></td>		
					<td align="center" width="20"><a href="music_part.php?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>&delete_music=<?php     echo $row['id']?>"  onClick="return confirm('Are you sure want to delete?')"><img src="../files/icons/cancel.png"  border="0" class="hintanchor" onMouseover="showhint('Click To Delete &quot;<?php    echo $row['music_name'];?>&quot;', this, event, '150px')" /></a></td>					
					<?php     }
				}
				
				?>
				
			</table>
			
<?php
if($NumberOfPages==1)
{
}
else
{
?>	
			
<table>
				<tr>
					<td>
			
				<?php    //Create and print the Navigation bar
				$Nav_a="";
				for($i_a =1; $i_a<=$NumberOfPages;$i_a++) {
					if($i_a == $page) {
						$Nav_a .="<option value=\"music_part.php?id=2&sub_menu_left=".$_REQUEST['sub_menu_left']."&view_id=".$i_a."\" selected=\"selected\">".$i_a."</option>";
					}else{
						$Nav_a .="<option value=\"music_part.php?id=2&sub_menu_left=".$_REQUEST['sub_menu_left']."&view_id=".$i_a."\" >".$i_a."</option>";
					}
				}				
				?>
			
					</td>
				</tr>
			</table>
<table border="0">

			<tr>
	<?php     $Nav="";

	for($i=1;$i<=$NumberOfPages;$i++){
	if($i==$page) {

if($i==1){
$Nav = '<td width="50">&nbsp;</td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50"><a href="music_part.php?id=2&sub_menu_left='.$_REQUEST['sub_menu_left'].'&view_id='.($i+1).'"><img src="../files/icons/next.png" border="0"/></a></td>';
}
else if($i==$NumberOfPages){
$Nav = '<td width="50"><a href="music_part.php?id=2&sub_menu_left='.$_REQUEST['sub_menu_left'].'&view_id='.($i-1).'"><img src="../files/icons/previous.png"  border="0"/></a></td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50">&nbsp;</td>';
}
else{
$Nav = '<td width="50"><a href="music_part.php?id=2&sub_menu_left='.$_REQUEST['sub_menu_left'].'&view_id='.($i-1).'"><img src="../files/icons/previous.png" border="0"/></a></td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50"><a href="music_part.php?id=2&sub_menu_left='.$_REQUEST['sub_menu_left'].'&view_id='.($i+1).'"><img src="../files/icons/next.png" border="0"/></a></td>';
}
					}
				}
				echo  $Nav;					 
 	?>
																 </tr></table>	

<?php
}
?>																	 		
			
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('music_part.php?id=2&sub_menu_left=<?php     echo $sub_id?>&add=1');" type="button" value="ADD SUB CATEGORY"  name="add_music_sub_category"/>
	<input type="button" class="ict_btn" value="BACK" onClick="open_link('music_part.php?id=2');" />
	</td></tr>
</table>
<?php     }


function add_category_for_music()
{
?>
	<form action="music_part.php?id=2" method="post" enctype="multipart/form-data">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="music_part.php?id=2">&#2951;&#2970;&#3016;</a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="music_part.php?id=1&add=1">ADD</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">

			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Music Category Name</td>
							<td>
							<input type="text" name="music_name"/>
							</td>
						</tr>	

						<tr>
							<td>Description</td>
							<td>
							<textarea name="music_desc"></textarea>
							</td>
						</tr>	
						<tr>
							<td>Music Image</td>
							<td>
							<input type="file" name="ufile" />
							</td>
						</tr>							
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" selected="selected" >ACTIVATED</option>
								<option value="0" >DEACTIVATED</option>								
							</select>
							</td>
						</tr>

					</table>		
		

		</td>
	</tr>			
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="music_left_save" value="SAVE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('music_part.php?id=2');" />	
	</td></tr>
</table>
					</form>
<?php     }


function edit_category_for_music($music_id)
{
?>
	<form action="music_part.php?id=2" method="post" enctype="multipart/form-data">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="music_part.php?id=2">&#2951;&#2970;&#3016;</a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="music_part.php?id=1&edit_music=<?php     echo $music_id?>">EDIT</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
		<?php     $query_select="Select * from ict_music_menu where delete_status=0 AND id='".$music_id."' ORDER BY order_id,created_date ASC";
		$date_select=mysql_query($query_select);
		$no_of_rows=mysql_num_rows($date_select);
	
			while($row= mysql_fetch_assoc($date_select))
			{	
			?>
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td width="100">Music Category Name</td>
							<td>:</td>
							<td>
							<input type="text" name="music_name" value="<?php     echo $row['music_name']?>"/>
							<input type="hidden" value="<?php     echo $music_id?>" name="music_id" />
							</td>
						</tr>	
			
						<tr>
							<td>Description</td>
							<td>:</td>							
							<td>
							<textarea name="music_desc"><?php     echo $row['music_desc']?></textarea>
							</td>
						</tr>
						
					
					<tr>
						<td>Current Image</td>
						<td>:</td>
						<td>
							<span id="ids1" style="display:none;">
							<table width="263" cellpadding="0" cellspacing="0" border="0">
								<td style="border:none">
									<input type="file" name="ufile" style="width:200px;" />
								</td>
								<td width="20" style="border:none">
									<img src="../files/icons/cancel.png"  onclick="show_TWO_ID('ids1','ids2')" class="hintanchor" onMouseover="showhint('Cancel To select New Image', this, event, '150px')" />
								</td>
							</table>
							</span>
							<span id="ids2">
							<table width="263" cellpadding="0" cellspacing="0" border="0">
								<td id="gallery" style="border:none">
									<a href="../files/music_images/<?php     echo $image_value=$row['music_image']; ?>" >Click To View</a>
								</td>
								<td width="20" style="border:none">
									<img src="../files/icons/page_white_edit.png" onclick="show_TWO_ID('ids1','ids2')" class="hintanchor" onMouseover="showhint('Click to Change current Image', this, event, '150px')"  />
								</td>
							</table>
							</span>													
							
						</td>
							
							
						</tr>	
													
						<tr>
							<td>Active Status</td>
									<td>:</td>
							<td>
							<select name="active_status">
								<option value="1" <?php    if($row['active_status']=1){?> selected="selected" <?php     }?> >ACTIVATED</option>
								<option value="0" <?php    if($row['active_status']=0){?> selected="selected" <?php     }?> >DEACTIVATED</option>								
							</select>
							</td>
						</tr>
			
					</table>		
					
			<?php     }
	
		?>
		</td>
	</tr>			
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="music_left_update" value="UPDATE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('music_part.php?id=2');" />	
	</td></tr>
</table>
					</form>
<?php     }




function add_sub_category_for_music($sub_menu_left,$add)
{
?>
	<form action="music_part.php?id=2&sub_menu_left=<?php     echo $sub_menu_left?>" method="post">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="music_part.php?id=1">&#2951;&#2970;&#3016;</a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="?id=2&sub_menu_left=<?php     echo $sub_menu_left?>"><?php     $query_menu="Select * from ict_music_menu where delete_status=0 AND id=".$sub_menu_left;
				$date_menu=mysql_query($query_menu);
				while($row_menu= mysql_fetch_assoc($date_menu))
				{
					echo '<a href="music_part.php?id=2&sub_menu_left='.$row_menu['id'].'">'.$row_menu['music_name'].'</a>';
				}					
				?></a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="view_pages_part.php?id=2">ADD</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">

			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Music Category Name</td>
							<td>
							<input type="text" name="music_name"/>
							</td>
						</tr>	

						<tr>
							<td>Description</td>
							<td>
							<textarea name="music_desc"></textarea>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" selected="selected" >ACTIVATED</option>
								<option value="0" >DEACTIVATED</option>								
							</select>
							</td>
						</tr>

					</table>		
		

		</td>
	</tr>			
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="music_sub_category" value="SAVE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']; ?>');" />	
	</td></tr>
</table>
					</form>
<?php     }




function edit_sub_category_for_music($sub_menu_left,$edit)
{
?>
	<form action="music_part.php?id=2&sub_menu_left=<?php     echo $sub_menu_left?>" method="post">
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="music_part.php?id=1">&#2951;&#2970;&#3016;</a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="?id=2&sub_menu_left=<?php     echo $sub_menu_left?>"><?php     $query_menu="Select * from ict_music_menu where delete_status=0 AND id=".$sub_menu_left;
				$date_menu=mysql_query($query_menu);
				while($row_menu= mysql_fetch_assoc($date_menu))
				{
					echo '<a href="music_part.php?id=2&sub_menu_left='.$row_menu['id'].'">'.$row_menu['music_name'].'</a>';
				}					
				?></a></td>
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="view_pages_part.php?id=2">EDIT</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
		<?php     $query_select="Select * from ict_music_sub_menu where delete_status=0 AND music_menu_id='".$sub_menu_left."' AND id='".$edit."' ORDER BY order_id,created_date ASC";
		$date_select=mysql_query($query_select);
		$no_of_rows=mysql_num_rows($date_select);
	
			while($row= mysql_fetch_assoc($date_select))
			{	
			?>
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Music Sub Category Name</td>
							<td>
							<input type="text" name="music_name" value="<?php     echo $row['music_name']?>"/>
							<input type="hidden" value="<?php     echo $edit?>" name="music_id" />
							</td>
						</tr>	
			
						<tr>
							<td>Description</td>
							<td>
							<textarea name="music_desc"><?php     echo $row['music_desc']?></textarea>
							</td>
						</tr>	
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" <?php    if($row['active_status']=1){?> selected="selected" <?php     }?> >ACTIVATED</option>
								<option value="0" <?php    if($row['active_status']=0){?> selected="selected" <?php     }?> >DEACTIVATED</option>								
							</select>
							</td>
						</tr>
			
					</table>		
					
			<?php     }
	
		?>
		</td>
	</tr>					
	
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="music_sub_category_edit" value="SAVE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('?id=2&sub_menu_left=<?php     echo $_REQUEST['sub_menu_left']?>');" />	
	</td></tr>
</table>
					</form>
<?php     }






//--Function To Show the music Main Category-----//
function show_all_music()
{
$Limit = 10; 
$page=$_GET["view_id"]; //Get the page number to show
if($page == ""||!$page) $page=1; //If no page number is set, the default page is 1



	if($_POST['add_music_save']){	
		 	$file_name1 = $_FILES['ufile']['name'];
			if($file_name1)
			{
				$random_digit1=rand(0000,9999);
				$new_file_name1=$random_digit1.$file_name1;
				$path1= "../files/uploading_musics/".$new_file_name1;
				if($ufile !=none)
				{
					copy($_FILES['ufile']['tmp_name'], $path1);
				}						
			}			
			$query_insert_music="INSERT INTO ict_music(music_menu_id,music_name,music_desc,music_path,active_status,delete_status,created_date)VALUES 
			('".$_POST['music_category']."','".$_POST['music_name']."','".$_POST['music_desc']."','".$new_file_name1."','".$_POST['active_status']."','0',now());";
			mysql_query($query_insert_music);
	}
	if($_POST['update_music_save']){	
		 	$file_name1 = $_FILES['ufile']['name'];
			if($file_name1)
			{
				$query="SELECT * FROM ict_music where id=".$_REQUEST['music_id'];
				$data=mysql_query($query);
				while($row=mysql_fetch_assoc($data)){
				$old_file_path="../files/uploading_musics/".$row['music_path'];
				}
							
			
				$random_digit1=rand(0000,9999);
				$new_file_name1=$random_digit1.$file_name1;
				$path1= "../files/uploading_musics/".$new_file_name1;
				if($ufile !=none)
				{
					if(copy($_FILES['ufile']['tmp_name'], $path1)){
						unlink($old_file_path);
					}
				}	
				


				$query_update="UPDATE ict_music SET music_name='".$_POST['music_name']."',music_desc='".$_POST['music_desc']."',music_path='".$new_file_name1."',music_menu_id 	='".$_POST['music_category']."',active_status='".$_POST['active_status']."' WHERE id=".$_REQUEST['music_id'];
				mysql_query($query_update);			
				
			}
			else{
				$query_update="UPDATE ict_music SET music_name='".$_POST['music_name']."',music_desc='".$_POST['music_desc']."',music_menu_id 	='".$_POST['music_category']."',active_status='".$_POST['active_status']."' WHERE id=".$_REQUEST['music_id'];
				mysql_query($query_update);
			
			}			
			
	}
	
	



?>
	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
				<td><a href="music_part.php?id=2">&#2951;&#2970;&#3016;</a></td>
				<?php    
				if($_REQUEST['view']){
				
						$query_sub_menu="Select * from ict_music_sub_menu where delete_status=0 AND id=".$_REQUEST['view'];
						$date_sub_menu=mysql_query($query_sub_menu);
						while($row_sub_menu= mysql_fetch_assoc($date_sub_menu))
						{
						$sub_menu_ids=$row_sub_menu['music_menu_id'];
						$sub_menu_name=$row_sub_menu['music_name'];						

						}
				?>
				<td><img src="../files/icons/ar.png" /></td>
				<td><?php     $query_menu="Select * from ict_music_menu where delete_status=0 AND id=".$sub_menu_ids;
				$date_menu=mysql_query($query_menu);
				while($row_menu= mysql_fetch_assoc($date_menu))
				{
					echo '<a href="?id=2&sub_menu_left='.$row_menu['id'].'">'.$row_menu['music_name'].'</a>';
				}					
				?></td><td><img src="../files/icons/ar.png" /></td><td>
				<?php    				
				echo '<a href="?id=1&view='.$_REQUEST['view'].'">'.$sub_menu_name.'</a>';									
				?></td>		
				
				<?php     }
				?>
				
			</tr>	
		</table>				
	</span>	

	</td>
	<td width="400" align="right"><span class="con"><a>View Music from</a></span>

									<select name="music_category"  onchange="connect_pagination(this.value)">
									<option value="0" <?php    if($_REQUEST['view']==0){ ?> selected="selected" <?php     }?>>View All Music</option>
									<?php     $query_main_category="Select * from ict_music_menu  where active_status=1 AND delete_status=0";
									$date_main_category=mysql_query($query_main_category);
									while($row_main_category= mysql_fetch_assoc($date_main_category))
									{					
									echo '<optgroup label="'.$row_main_category['music_name'].'">';
									
							$query_c="Select * from ict_music_sub_menu where music_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0 LIMIT 0 , 1";
							$date_c=mysql_query($query_c);
							while($row_c= mysql_fetch_assoc($date_c))
							{	
							$first_id=$row_c['id'];				
							}									
					
									
							$query_category="Select * from ict_music_sub_menu where music_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0";
											$date_category=mysql_query($query_category);
											while($row_category= mysql_fetch_assoc($date_category))
											{					
											echo '<option value="'.$row_category['id'].'" ';
											if($_REQUEST['view']==$row_category['id']){ ?> selected="selected" <?php     }
											echo '">';											
										
											echo $row_category['music_name'];
											echo '</option>';
											
											}
									echo '</optgroup>';
									}
									?>
							</select>	
	</td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">
			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
				<?php    if($_REQUEST['view']==0){
					$cintent='';
					}
					else{
					$cintent='music_menu_id='.$_REQUEST['view'].' AND ';				
					}
			 	$query_st="Select * from ict_music where  ".$cintent."  delete_status=0 ORDER BY order_id,created_date ASC";
				$date_st=mysql_query($query_st);
				$no_of_rows=mysql_num_rows($date_st);
				$NumberOfPages=ceil($no_of_rows/$Limit);

				
			 	$query_select="Select * from ict_music where  ".$cintent."  delete_status=0 ORDER BY order_id,created_date ASC  LIMIT " . ($page-1)*$Limit . ",".$Limit;		
				$date_select=mysql_query($query_select);				
				if($no_of_rows==0)
				{
				?>				
					<tr>
					<td>Empty</td>					
					</tr>
					<?php     }
				else
				{
					?>
					<tr>
					<td width="300"><b>Name</b></td>
					<td width="100"><b>Status</b></td>		
					<td width="100"><b>Category</b></td>			
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					</tr>
					<?php     while($row= mysql_fetch_assoc($date_select))
					{				
					?>				
					<tr>
					<td width="300"><a href="music_part.php?id=2&edit_music_file=<?php     echo $row['id']?>"><?php    echo $row['music_name'];?></a></td>
					<td width="100">
					<?php    if($row['active_status']==1){
						echo '<span class="green">ACTIVATED</span>';
					}
					if($row['active_status']==0){
						echo '<span class="red">DEACTIVATED</span>';
					}
					?>
					</td>
					<td width="100">
					<?php     $query_category="Select * from ict_music_sub_menu where id=".$row['music_menu_id'];
						$date_category=mysql_query($query_category);
						while($row_category= mysql_fetch_assoc($date_category))
						{					
						echo $row_category['music_name'];
						}
					?>
					</td>					
					<td align="center" width="20">&nbsp;</td>
					<td align="center" width="20"><a href="music_part.php?id=2&edit_music_file=<?php     echo $row['id']?>"><img src="../files/icons/page_white_edit.png "  border="0"  class="hintanchor" onMouseover="showhint('Click To Edit &quot;<?php    echo $row['music_name'];?>&quot;', this, event, '150px')" /></a></td>		
					<td align="center" width="20"><a href="music_part.php?id=1&view=<?php     echo $_REQUEST['view'];?>&delete_music=<?php     echo $row['id']?>" onClick="return confirm('Are you sure want to delete?')"><img src="../files/icons/cancel.png"  border="0"  class="hintanchor" onMouseover="showhint('Click To Delete &quot;<?php    echo $row['music_name'];?>&quot; Song', this, event, '150px')" /></a></td>					
					<?php     }
				}
				
				?>
				
			</table>
<?php
if($NumberOfPages==1)
{
}
else
{
?>		
			
			<table>
				<tr>
					<td>
			
				<?php    //Create and print the Navigation bar
				$Nav_a="";
				for($i_a =1; $i_a<=$NumberOfPages;$i_a++) {
					if($i_a == $page) {
						$Nav_a .="<option value=\"music_part.php?id=1&view=".$_REQUEST['view']."&view_id=".$i_a."\" selected=\"selected\">".$i_a."</option>";
					}else{
						$Nav_a .="<option value=\"music_part.php?id=1&view=".$_REQUEST['view']."&view_id=".$i_a."\" >".$i_a."</option>";
					}
				}				
				?>
			
					</td>
				</tr>
			</table>
			<table border="0">

			<tr>
	<?php     $Nav="";

	for($i=1;$i<=$NumberOfPages;$i++){
	if($i==$page) {

if($i==1){
if($NumberOfPages!=1){
$Nav = '<td width="50">&nbsp;</td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50"><a href="music_part.php?id=1&view='.$_REQUEST['view'].'&view_id='.($i+1).'"><img src="../files/icons/next.png" border="0"/></a></td>';
}


}
else if($i==$NumberOfPages){
$Nav = '<td width="50"><a href="music_part.php?id=1&view='.$_REQUEST['view'].'&view_id='.($i-1).'"><img src="../files/icons/previous.png"  border="0"/></a></td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50">&nbsp;</td>';
}
else{
$Nav = '<td width="50"><a href="music_part.php?id=1&view='.$_REQUEST['view'].'&view_id='.($i-1).'"><img src="../files/icons/previous.png" border="0"/></a></td><td width="50">';
$Nav .='<select onchange="show_pagination(this.value)">'.$Nav_a.'</select>';
$Nav .='</td><td width="50"><a href="music_part.php?id=1&view='.$_REQUEST['view'].'&view_id='.($i+1).'"><img src="../files/icons/next.png" border="0"/></a></td>';
}
					}
				}
				echo  $Nav;					 
 	?>
																 </tr></table>
<?php
}
?>
		</td>
	</tr>			
	<tr><td class="tit">
	<input class="ict_btn" onClick="open_link('music_part.php?id=1&add=1<?php     if($_REQUEST['view']){ echo "&view=".$_REQUEST['view'];}?>');" type="button" value="ADD music"  name="head_create"/>
	</td></tr>
</table>
<?php     }





function add_music()
{
?>
<form action="music_part.php?id=1" enctype="multipart/form-data" name="sampleform" method="post">	

	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="music_part.php?id=1">&#2951;&#2970;&#3016;</a></td>		
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="view_pages_part.php?id=2">ADD</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">

			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Select music Category</td>
							<td>			
							<select name="music_category">

									<?php     $query_main_category="Select * from ict_music_menu  where active_status=1 AND delete_status=0";
									$date_main_category=mysql_query($query_main_category);
									while($row_main_category= mysql_fetch_assoc($date_main_category))
									{					
									echo '<optgroup label="'.$row_main_category['music_name'].'">';
											$query_category="Select * from ict_music_sub_menu where music_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0";
											$date_category=mysql_query($query_category);
											while($row_category= mysql_fetch_assoc($date_category))
											{					
											echo '<option ';
											if($_REQUEST['view']==$row_category['id']){
											echo 'selected="selected"';
											}
											echo ' value="'.$row_category['id'].'">';
											echo $row_category['music_name'];
											echo '</option>';
											
											}
									echo '</optgroup>';
									}
									?>
							</select>

							</td>
						</tr>	

						<tr>
							<td>Music Name</td>
							<td>
							<input type="text" name="music_name" />
							</td>
						</tr>	
						<tr>
							<td>Description</td>
							<td>
							<textarea name="music_desc"></textarea>
							</td>
						</tr>	
						<tr>
							<td>Music File</td>
							<td>
								<input name="ufile" type="file" id="ufile"/>
							</td>
						</tr>												
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" selected="selected" >ACTIVATED</option>
								<option value="0" >DEACTIVATED</option>								
							</select>
							</td>
						</tr>

					</table>		
		

		</td>
	</tr>			
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="add_music_save" value="SAVE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('?id=2&sub_menu_left=<?php     $query="Select * from ict_music_sub_menu where id=".$_REQUEST['view'];
		$data=mysql_query($query);
		while($row=mysql_fetch_assoc($data)){
		
		echo $row['music_menu_id'];
		}
		
		?>');" />	
	</td></tr>
</table>
					</form>
<?php     }

function edit_category_for_music_file($edit_music_file_id)
{

	 $query="Select * from ict_music  where active_status=1 AND delete_status=0 AND id=".$edit_music_file_id;
	$date=mysql_query($query);
	while($row= mysql_fetch_assoc($date))
	{	
?>
<form action="music_part.php?id=1" enctype="multipart/form-data" name="sampleform" method="post">	

	<table class="main_tables" border="0">	
	<tr><td class="HEAD_TI">
	<table border="0" width="100%" class="sub_tbl">
	<tr><td>
	<span class="con">	
		<table>
			<tr>
					<td><a href="music_part.php?id=1">&#2951;&#2970;&#3016;</a></td>		
					<td><img src="../files/icons/ar.png" /></td>
					<td><a href="view_pages_part.php?id=2">EDIT</a></td>							
			</tr>	
		</table>				
	</span>	

	</td><td width="80" align="right"></td>
	</table>
	</td></tr>

	<tr>
		<td class="tit">

			<table class="designtable" cellspacing="0" cellpadding="0" width="100%">
						<tr>
							<td>Select music Category</td>
							<td>			
							<select name="music_category">

									<?php     $query_main_category="select * from ict_music_menu  where active_status=1 AND delete_status=0";
									$date_main_category=mysql_query($query_main_category);
									while($row_main_category= mysql_fetch_assoc($date_main_category))
									{					
									echo '<optgroup label="'.$row_main_category['music_name'].'">';
											$query_category="select * from ict_music_sub_menu where music_menu_id=".$row_main_category['id']." AND  active_status=1 AND delete_status=0";
											$date_category=mysql_query($query_category);
											while($row_category= mysql_fetch_assoc($date_category))
											{					
											echo '<option ';
											if($row['music_menu_id']==$row_category['id']){
											echo 'selected="selected"';
											}
											echo ' value="'.$row_category['id'].'">';
											echo $row_category['music_name'];
											echo '</option>';
											
											}
									echo '</optgroup>';
									}
									?>
							</select>

							</td>
						</tr>	

						<tr>
							<td>Music Name</td>
							<td>
							<input type="text" name="music_name" value="<?php     echo $row['music_name']?>" />
							<input type="hidden" name="music_id" value="<?php     echo $row['id']?>" />
							</td>
						</tr>	
						<tr>
							<td>Description</td>
							<td>
							<textarea name="music_desc"><?php     echo $row['music_desc']?></textarea>
							</td>
						</tr>	
						<tr>
							<td>Music File</td>
							<td>
							<span id="sho_ids1" style="display:none;" >
								<table cellpadding="0" cellspacing="0" width="261" border="0">
								<tr style="border:none;">
								<td style="border:none;">
								<input name="ufile" type="file" id="ufile" width="200"/>
								</td><td style="border:none;"><img src="../files/icons/cancel.png" class="hintanchor" onclick="show_TWO_ID('sho_ids1','sho_ids2')" onMouseover="showhint('Cancel to select New File', this, event, '150px')"  />
								</td>
								</tr>
								</table>
							</span>	
							<span id="sho_ids2">
								<table cellpadding="0" cellspacing="0" width="261" border="0">
								<tr style="border:none;">
								<td style="border:none;">							
								<img src="../files/icons/page_white_edit.png" class="hintanchor" onclick="show_TWO_ID('sho_ids1','sho_ids2')" onMouseover="showhint('Click To Change Current Music File', this, event, '150px')" />
								</td>
								</tr>
								</table>
							</span>	
							
							</td>
						</tr>												
						<tr>
							<td>Active Status</td>
							<td>
							<select name="active_status">
								<option value="1" <?php     if($row['active_status']==1){?> selected="selected" <?php     }?> >ACTIVATED</option>
								<option value="0" <?php     if($row['active_status']==0){?> selected="selected" <?php     }?> >DEACTIVATED</option>								
							</select>
							</td>
						</tr>

					</table>		
		

		</td>
	</tr>			
	<tr><td class="tit">
		<input type="submit"  class="ict_btn"  name="update_music_save" value="SAVE" />
		<input type="button" class="ict_btn" value="BACK" onClick="open_link('?id=1&view=<?php     $query="SELECT * FROM ict_music where id=".$_REQUEST['edit_music_file'];
		$data=mysql_query($query);
		while($row=mysql_fetch_assoc($data)){
		echo $row['music_menu_id'];
		}
		
		?>');" />	
	</td></tr>
</table>
					</form>
<?php     }
}




function delete_category_for_music($delete_id)
{
$query_delete="UPDATE ict_music_menu SET active_status = '0',delete_status = '1',deleted_date=now() WHERE id =".$delete_id;
mysql_query($query_delete);

}

function delete_sub_category_for_music($sub_menu_left,$delete_id)
{
$query_delete="UPDATE ict_music_sub_menu SET active_status = '0',delete_status = '1',deleted_date=now() WHERE music_menu_id='".$sub_menu_left."' AND  id =".$delete_id;
mysql_query($query_delete);
 	
}

/*-------------------------------------------------------------------MUSIC PART END------------------------------------------------------------------------------*/



















?>