function gotoBottom(){

document.links[0].click();
}
function show_TWO_ID(select1,select2){
	
	one = document.getElementById(select1);
	two = document.getElementById(select2);

	if (one.style.display == ""){
		one.style.display = "none";
		two.style.display = "";
	}		
	else{
		one.style.display = "";
		two.style.display = "none";
	}		
}

function Show_one_div(a){
	a = document.getElementById(a);
	a.style.display = "";
}

function hide_one_div(a){
	a = document.getElementById(a);
	a.style.display = "none";
}


function change_editor(d){
	
	if(d==1){
		pp1 = document.getElementById("pp1");
		pp0 = document.getElementById("pp0");
		pp1.style.display = "";
		pp0.style.display = "none";
	}
	
	if(d==0){
		pp1 = document.getElementById("pp1");
		pp0 = document.getElementById("pp0");
		pp1.style.display = "none";
		pp0.style.display = "";
	}
}




function po_jo_disable(){
/*	alert(document.getElementById("po_education").disabled);*/
	document.getElementById("po_jo_title").disabled=true;	 	
	document.getElementById("po_job_category").disabled=true;	 	
	document.getElementById("po_vacancy").disabled=true;	 	
	document.getElementById("po_company").disabled=true;	 	
	document.getElementById("po_job_country").disabled=true;	
	document.getElementById("po_job_state").disabled=true;	
	document.getElementById("po_job_city").disabled=true;	
/*	document.getElementById("po_qualification").disabled=true;*/	 	
	document.getElementById("po_experience").disabled=true;		
	document.getElementById("po_education").disabled=true;
	document.getElementById("po_specialization").disabled=true;
	document.getElementById("load_po_qualification").disabled=true;
	document.getElementById("po_experience").disabled=true;
/*		alert(document.getElementById("po_education").disabled);*/
}

function po_jo_enable(){
	
	document.getElementById("po_jo_title").disabled=false;	 	
	document.getElementById("po_job_category").disabled=false;	 	
	document.getElementById("po_vacancy").disabled=false;	 	
	document.getElementById("po_company").disabled=false;	 	
	document.getElementById("po_job_country").disabled=false;
	document.getElementById("po_job_state").disabled=false;	
	document.getElementById("po_job_city").disabled=false;	
/*	document.getElementById("po_qualification").disabled=false;	*/
//	document.getElementById("po_education").disabled=false;	
	document.getElementById("po_experience").disabled=false;	 
	document.getElementById("po_education").disabled=false;
//	document.getElementById("edu_id").disabled=false;
	
	document.getElementById("po_specialization").disabled=true;
	document.getElementById("load_po_qualification").disabled=false;
	document.getElementById("po_experience").disabled=false;
}




function se_disable(){
	document.getElementById("se_education1").disabled=true;	 
	document.getElementById("se_specialization1").disabled=true;	 
	document.getElementById("se_job_category").disabled=true;	 
	document.getElementById("se_experience").disabled=true;	 
	document.getElementById("se_salary").disabled=true;	 
	document.getElementById("se_job_country").disabled=true;	 
	document.getElementById("se_job_state").disabled=true;	 
	document.getElementById("se_job_city").disabled=true;	 
	document.getElementById("se_key_skill").disabled=true;	 
	document.getElementById("se_specialize").disabled=true;	 
							
}

function se_enable(){
	
	
	document.getElementById("se_education1").disabled=false;	 
/*	document.getElementById("se_specialization1").disabled=false;	*/ 
	document.getElementById("se_job_category").disabled=false;	 
	document.getElementById("se_experience").disabled=false;	 
	document.getElementById("se_salary").disabled=false;	 
	document.getElementById("se_job_country").disabled=false;	 
/*	document.getElementById("se_job_state").disabled=false;	 
	document.getElementById("se_job_city").disabled=false;	 */
	document.getElementById("se_key_skill").disabled=false;	 
	document.getElementById("se_specialize").disabled=false;	 
							
 	
	 	
}


function add_image_upload_ph(a){
	     $.ajax({
			type: "POST",
			url: "ajax/upload_photos.php",	//Calling the ajax process php url				
			data: "&product_id="+a+"&add_i=1"+			
			"&image_file=" + document.getElementById('image_file').value+"&image_name=" + document.getElementById('image_name').value, 
			
			success: function(html){			

				document.getElementById('add_file').style.display = ""
				document.getElementById('add_file_BW').style.display = "none"								
				document.getElementById('upload_btn').style.display = "none";	
				document.getElementById('upload_btn_BW').style.display = "";					
				document.getElementById('image_file1').style.display = "none"			
				
				$("#out_put_ajax_image_upload2").html(html);				//Calling the responce IDs			
			
	 
			}
		});		
}


function hide_close_by_ids(a){
		a = document.getElementById(a);
     	a.style.display = "none";

}

function Show_new_div(a,b){
	a = document.getElementById(a);
	b = document.getElementById(b);
	a.style.display = "none";
	b.style.display = "";
}

function open_link(vars){		
	var URL = vars;     
	location.replace(URL);
}


function open_link_month(vars){		
	var URL = vars;     
	location.replace(URL);
}

function show_pagination(url){
	location.replace(url);
}


				   
function connect_pagination(val){
	url="?id=1&view="+val
	location.replace(url);
}


function connect_pagination_for_news(val){
	url="?id=2&sub_menu_news_id="+val
	location.replace(url);
}
	
	
	
function show_edit_div(div_id){
	div_id1 = document.getElementById('content_ids_1_'+div_id);
	div_id2 = document.getElementById('content_ids_2_'+div_id);						
	icon1 = document.getElementById('icon1_'+div_id);
	icon2 = document.getElementById('icon2_'+div_id);			
	div_id1.style.display = "none";
	div_id2.style.display = "";	
	icon1.style.display = "none";
	icon2.style.display = "";		
}
function hide_edit_div(div_id){
	div_id1 = document.getElementById('content_ids_1_'+div_id);
	div_id2 = document.getElementById('content_ids_2_'+div_id);						
	icon1 = document.getElementById('icon1_'+div_id);
	icon2 = document.getElementById('icon2_'+div_id);			
	div_id1.style.display = "";
	div_id2.style.display = "none";
	icon1.style.display = "";
	icon2.style.display = "none";	
}


function save_div(ids){
	$.ajax({
		type: "POST",
		url: "ajax/save_div.php",	//Calling the ajax process php url	
		data: "&mail_id_val="+ids+"&content_val="+document.getElementById('valu_con'+ids).value,				
		success: function(html){					


		icon2 = document.getElementById('content_ids_2_'+ids);
		icon3 = document.getElementById('content_ids_1_'+ids);
		
		icon2.style.display = "none";
		icon3.style.display = "";
		
		icon_1 = document.getElementById('icon1_'+ids);
		icon_2 = document.getElementById('icon2_'+ids);	

		icon_1.style.display = "";
		icon_2.style.display = "none";	
	
			$("#content_ids_1_"+ids).html(html);				//Calling the responce IDs						
		}
	});
}
					


function load_online_users(){
	$.ajax({
		type: "POST",
		url: "ajax/load_online_users.php",	//Calling the ajax process php url	
		data: "&load_onlineuser=1",				
		success: function(html){					
			$("#online_user").html(html);				//Calling the responce IDs						
		}
	});
}

function state_select(a){
	$.ajax({
		type: "POST",
		url: "ajax/state_select.php",	//Calling the ajax process php url	
		data: "&count_code="+a,				
		success: function(html){					
			$("#selected_state").html(html);				//Calling the responce IDs						
		}
	});
}

function city_select(a){
	$.ajax({
		type: "POST",
		url: "ajax/city_select.php",	//Calling the ajax process php url	
		data: "&state_code="+a,				
		success: function(html){					
			$("#selected_city").html(html);				//Calling the responce IDs						
		}
	});
}

function state_select_s3p(a){
	$.ajax({
		type: "POST",
		url: "ajax/state_select_s3p.php",	//Calling the ajax process php url	
		data: "&count_code="+a,				
		success: function(html){					
			$("#state_select_s3p").html(html);				//Calling the responce IDs						
		}
	});
}

function city_select_s3p(a){
	$.ajax({
		type: "POST",
		url: "ajax/city_select_s3p.php",	//Calling the ajax process php url	
		data: "&state_code="+a,				
		success: function(html){					
			$("#city_select_s3p").html(html);				//Calling the responce IDs						
		}
	});
}


function state_select_ge(a){
	$.ajax({
		type: "POST",
		url: "ajax/state_select_ge.php",	//Calling the ajax process php url	
		data: "&count_code="+a,				
		success: function(html){					
			$("#selected_state").html(html);				//Calling the responce IDs						
		}
	});
}

function city_select_ge(a){
	$.ajax({
		type: "POST",
		url: "ajax/city_select_ge.php",	//Calling the ajax process php url	
		data: "&state_code="+a,				
		success: function(html){					
			$("#selected_city").html(html);				//Calling the responce IDs						
		}
	});
}

function load_caste_names(cast_id){
	$.ajax({
		type: "POST",
		url: "ajax/load_caste_name.php",	//Calling the ajax process php url	
		data: "&rel_id="+cast_id,				
		success: function(html){					
			$("#online_user").html(html);				//Calling the responce IDs						
		}
	});
	
} 



function load_state_names_for_po_job_country(country_id){
	$.ajax({
		type: "POST",
		url: "ajax/load_state_names_for_po_job_country.php",	//Calling the ajax process php url	
		data: "&country_id="+country_id,				
		success: function(html){					
			$("#load_state_names_for_po_job_country_out").html(html);				//Calling the responce IDs						
		}
	});
	
}


function load_city_names_for_po_job_country(state_id){

	$.ajax({
		type: "POST",
		url: "ajax/load_city_names_for_po_job_country.php",	//Calling the ajax process php url	
		data: "&state_id="+state_id,				
		success: function(html){					
			$("#load_city_names_for_po_job_country_out").html(html);				//Calling the responce IDs						
		}
	});
	
} 



function load_state_names_for_se_job_country(country_id){
	$.ajax({
		type: "POST",
		url: "ajax/load_state_names_for_se_job_country.php",	//Calling the ajax process php url	
		data: "&country_id="+country_id,				
		success: function(html){					
			$("#load_state_names_for_se_job_country_out").html(html);				//Calling the responce IDs						
		}
	});
	
}


function load_city_names_for_se_job_country(state_id){

	$.ajax({
		type: "POST",
		url: "ajax/load_city_names_for_se_job_country.php",	//Calling the ajax process php url	
		data: "&state_id="+state_id,				
		success: function(html){					
			$("#load_city_names_for_se_job_country_out").html(html);				//Calling the responce IDs						
		}
	});
	
} 




function load_city_name(state_id){
	$.ajax({
		type: "POST",
		url: "ajax/city_select.php",	//Calling the ajax process php url	
		data: "&state_id="+state_id,				
		success: function(html){					
			$("#load_city_name_out").html(html);				//Calling the responce IDs						
		}
	});
	
} 


function load_new_messages(current_date,user_id){	
		$.ajax({
		type: "POST",
		url: "ajax/load_new_messages.php",	//Calling the ajax process php url	
		data:"&current_date="+current_date+
	    	 "&user_id="+user_id,				
		success: function(html){
			if(parseFloat(html)!='0'){				
				document.getElementById('load_new_messages').style.display = "";		
			}
			else{
				document.getElementById('load_new_messages').style.display = "none";
			}
			$("#load_new_messages_out_put").html(html);				//Calling the responce IDs			
		}
	});
}



function load_po_qualification(edu_id){
	$.ajax({
		type: "POST",
		url: "ajax/load_po_qualification.php",	//Calling the ajax process php url	
		data: "&edu_id="+edu_id,				
		success: function(html){					
			$("#load_po_qualification").html(html);				//Calling the responce IDs						
		}
	});
	
} 



function load_se_qualification(edu_id){
	$.ajax({
		type: "POST",
		url: "ajax/load_se_qualification.php",	//Calling the ajax process php url	
		data: "&edu_id="+edu_id,				
		success: function(html){					
			$("#load_se_qualification").html(html);				//Calling the responce IDs						
		}
	});
	
} 




function load_se_qualification1(edu_id){
	$.ajax({
		type: "POST",
		url: "ajax/load_se_qualification1.php",	//Calling the ajax process php url	
		data: "&edu_id="+edu_id,				
		success: function(html){					
			$("#load_se_qualification1").html(html);				//Calling the responce IDs						
		}
	});
	
} 





function delete_new_messages(current_date,user_id,hide_id){	
		$.ajax({
		type: "POST",
		url: "ajax/delete_new_messages.php",	//Calling the ajax process php url	
		data:"&current_date="+current_date+
	    	 "&user_id="+user_id,				
		success: function(html){			
				document.getElementById('load_new_messages').style.display = "none";					
		}
	});
}



function save_command_details(command_id,user_id){
	
		$.ajax({
		type: "POST",
		url: "ajax/save_command_details.php",	//Calling the ajax process php url	
		data:"&command_id="+command_id+
		"&user_id="+user_id+
		"&message_content="+document.getElementById("command_content_part_"+command_id).value,				
		
						
		success: function(html){

		document.getElementById("command_content_part_"+command_id).value="Write your comment here...";			
			
		$("#commands_out_put_"+command_id).html(html);				//Calling the responce IDs									
		}
	});	
}



function delete_id(delete_id,command_id,user_id){
	
		$.ajax({
		type: "POST",
		url: "ajax/save_command_details.php",	//Calling the ajax process php url	
		data:"&command_id="+command_id+
		"&delete_id="+delete_id+
		"&user_id="+user_id,				
		
						
		success: function(html){
		document.getElementById("command_content_part_"+command_id).value="";			
		$("#commands_out_put_"+command_id).html(html);				//Calling the responce IDs						
		
		}
	});
	
	
}
	
	
	


// function for Checked and Un checked 
function select_all_checks(last){
	if(document.getElementById("ajax_select").checked== true){
		for(var i = 1; i <= last; i++){document.getElementById("check"+i).checked = true; }
	}		 
	else{
		for(var i = 1; i <= last; i++){document.getElementById("check"+i).checked = false; }
	}
}



function check_select(){
	if(document.getElementById("check_box_img").checked==true){
		a = document.getElementById('IMAGE_CON');
		b = document.getElementById('IMAGE_IDS');
		c = document.getElementById('image');
		a.style.display = "none";
		b.style.display = "none";
		c.value='no';
		
	}
	if(document.getElementById("check_box_img").checked==false){
		a = document.getElementById('IMAGE_CON');
		b = document.getElementById('IMAGE_IDS');
		c = document.getElementById('image');		
		a.style.display = "";
		b.style.display = "";				
		c.value='yes';		
	}
}

function show_curser(a){
	document.getElementById(a).focus(); 		
}

function show_mails(a){
	
	     $.ajax({
			type: "POST",
			url: "ajax/show_mails.php",	//Calling the ajax process php url				
			data: "&to_id="+a+
				  "&session_id=" + document.getElementById('session_id').value+	
 				  "&se_new_to_id=" + document.getElementById('se_new_to_id').value, 

			success: function(html){	
				document.getElementById("msg_div").style.display = "";

				$("#msg_div").html(html);				//Calling the responce IDs				
	 
			}
		});
		
}


function show_message_div()
{
	a = document.getElementById("msg_div");		
	a.style.display = "";
		
}
function show_message_div_none(){
	a = document.getElementById("msg_div");		
	a.style.display = "none";

}
function show_txtHint(){
	two = document.getElementById("txtHint");
	two.style.display = "";
}
function open_popup(url,title) {
	window.open( url, title,"status = 1, height = 300, width = 300, resizable = 0");
}




function  adv_val(){
	// Make quick references to our fields
	var adv_position = document.getElementById('adv_position');
	var adv_name = document.getElementById('adv_name');
	var adv_type = document.getElementById('adv_type');
	var adv_desc = document.getElementById('adv_desc');
	var username = document.getElementById('username');
	var email = document.getElementById('email');
	
	// Check each input in the order that it appears in the form!
	if(notEmpty(adv_position, "Ads Position  should not Empty")){
		if(notEmpty(adv_name, "Ads Name  should not Empty")){
			if(madeSelection(adv_type, "Please Choose a Ads Type")){
				if(madeSelection(state, "Please Choose a State")){
					if(notEmpty(adv_desc, "Ads Desc  should not Empty")){
						if(emailValidator(email, "Please enter a valid email address")){
							return true;
						}
					}
				}
			}
		}
	}
	
	
	return false;
	
}

function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
}

function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters");
		elem.focus();
		return false;
	}
}

function madeSelection(elem, helperMsg){
	if(elem.value == "Select"){
		alert(helperMsg);
		elem.focus();
		return false;
	}else{
		return true;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function show_div1(){
	a1 = document.getElementById('div1');
	b1 = document.getElementById('div2');
	c1 = document.getElementById('div3');	
	d1 = document.getElementById('div4');		
	a1.style.display = "";
	b1.style.display = "none";
	c1.style.display = "none";	
	d1.style.display = "none";		
}	
	
function show_div2(){
	
	a1 = document.getElementById('div1');
	b1 = document.getElementById('div2');
	c1 = document.getElementById('div3');	
	d1 = document.getElementById('div4');			
	a1.style.display = "none";
	b1.style.display = "";
	c1.style.display = "none";	
	d1.style.display = "none";			
	
	
	c = document.getElementById('add_link1');
	d = document.getElementById('add_link2');	
	c.style.display = "";
	d.style.display = "none";
	
}


function show_div3(){
	a = document.getElementById('div1');
	b = document.getElementById('div2');
	c = document.getElementById('div3');	
	d = document.getElementById('div4');		
	a.style.display = "none";
	b.style.display = "none";
	c.style.display = "";	
	d.style.display = "none";			
}	


function show_div4(){
	a = document.getElementById('div1');
	b = document.getElementById('div2');
	c = document.getElementById('div3');	
	d = document.getElementById('div4');		
	a.style.display = "none";
	b.style.display = "none";
	c.style.display = "none";	
	d.style.display = "";		
}	


function add_colors(a,b){
	document.getElementById('upload_btn').style.display = "none"
	document.getElementById('upload_btn_BW').style.display = ""	
	document.getElementById('ajax_loader_img').style.display = "";		
	
	     $.ajax({
			type: "POST",
			url: "ajax/add_pr_images.php",	//Calling the ajax process php url				
			data: "&album_id="+a+"&add_i=1"+"&image_file=" + document.getElementById('image_file').value+"&page="+b, 
			
			success: function(html){		
			
			
			
			
			
				document.getElementById('image_file').value='';		

				document.getElementById('add_file').style.display = ""
				document.getElementById('add_file_BW').style.display = "none"	

				document.getElementById('upload_btn').style.display = "none"
				document.getElementById('upload_btn_BW').style.display = ""	
				
				document.getElementById('ajax_loader_img').style.display = "none";	
				document.getElementById('image_file1').style.display = "none";					
				
//			$("#image_file1").html();	
(function(a){"use strict";var b=function(a,c,d){var e=document.createElement("img"),f,g;return e.onerror=c,e.onload=function(){g&&b.revokeObjectURL(g),c(b.scale(e,d))},window.Blob&&a instanceof Blob||window.File&&a instanceof File?f=g=b.createObjectURL(a):f=a,f?(e.src=f,e):b.readFile(a,function(a){e.src=a})},c=window.createObjectURL&&window||window.URL&&URL||window.webkitURL&&webkitURL;b.scale=function(a,b){b=b||{};var c=document.createElement("canvas"),d=Math.max((b.minWidth||a.width)/a.width,(b.minHeight||a.height)/a.height);return d>1&&(a.width=parseInt(a.width*d,10),a.height=parseInt(a.height*d,10)),d=Math.min((b.maxWidth||a.width)/a.width,(b.maxHeight||a.height)/a.height),d<1&&(a.width=parseInt(a.width*d,10),a.height=parseInt(a.height*d,10)),!b.canvas||!c.getContext?a:(c.width=a.width,c.height=a.height,c.getContext("2d").drawImage(a,0,0,a.width,a.height),c)},b.createObjectURL=function(a){return c?c.createObjectURL(a):!1},b.revokeObjectURL=function(a){return c?c.revokeObjectURL(a):!1},b.readFile=function(a,b){if(window.FileReader&&FileReader.prototype.readAsDataURL){var c=new FileReader;return c.onload=function(a){b(a.target.result)},c.readAsDataURL(a),c}return!1},typeof define!="undefined"&&define.amd?define(function(){return b}):a.loadImage=b})(this);
			
			$("#out_put_color").html(html);				//Calling the responce IDs			
//			alert("dasfdsf");
//		   $('#gallery a').lightBox();



			
			
	 
			}
		});		
}




function cancel_img(){
		document.getElementById('add_file').style.display = ""
		document.getElementById('add_file_BW').style.display = "none"			
		document.getElementById('upload_btn').style.display = "none"
		document.getElementById('upload_btn_BW').style.display = ""			
		document.getElementById('image_file1').style.display = "none"		
		
}

function photo(){
		document.getElementById('photo').style.display = ""
		document.getElementById('photo_sel').style.display ="none"
		
		document.getElementById('scrab').style.display = "none"	
		document.getElementById('scrab_sel').style.display = ""	
		
		document.getElementById('message').style.display = "none"
		document.getElementById('message_sel').style.display = ""	
		
		document.getElementById('friend').style.display = "none"
		document.getElementById('friend_sel').style.display = ""
		
		document.getElementById('group').style.display = "none"
		document.getElementById('friend_sel').style.display = ""
		
		document.getElementById('post_add').style.display = "none"
		document.getElementById('post_add_sel').style.display = ""	
		
}


function scrab(){
		document.getElementById('photo').style.display = "none"
		document.getElementById('photo_sel').style.display =""
		
		document.getElementById('scrab').style.display = ""			
		document.getElementById('scrab_sel').style.display = "none"	
		
		document.getElementById('message').style.display = "none"
		document.getElementById('message_sel').style.display = ""
		
		document.getElementById('friend').style.display = "none"
		document.getElementById('friend_sel').style.display = ""		
		
		document.getElementById('group').style.display = "none"
		document.getElementById('group_sel').style.display = ""		
		
		document.getElementById('post_add').style.display = "none"	
		document.getElementById('post_add_sel').style.display = ""		
		
}

function message(){
		document.getElementById('photo').style.display = "none"
		document.getElementById('photo_sel').style.display =""
		
		document.getElementById('scrab').style.display = "none"			
		document.getElementById('scrab_sel').style.display = ""	
		
		document.getElementById('message').style.display = ""
		document.getElementById('message_sel').style.display = "none"
		
		document.getElementById('friend').style.display = "none"
		document.getElementById('friend_sel').style.display = ""		
		
		document.getElementById('group').style.display = "none"
		document.getElementById('group_sel').style.display = ""		
		
		document.getElementById('post_add').style.display = "none"	
		document.getElementById('post_add_sel').style.display = ""			
		
}

function friend(){
		document.getElementById('photo').style.display = "none"
		document.getElementById('photo_sel').style.display =""
		
		document.getElementById('scrab').style.display = "none"			
		document.getElementById('scrab_sel').style.display = ""	
		
		document.getElementById('message').style.display = "none"
		document.getElementById('message_sel').style.display = ""
		
		document.getElementById('friend').style.display = ""			
		document.getElementById('friend_sel').style.display = "none"			
		
		document.getElementById('group').style.display = "none"
		document.getElementById('group_sel').style.display = ""		
		
		document.getElementById('post_add').style.display = "none"	
		document.getElementById('post_add_sel').style.display = ""		
		
}

function group(){
		document.getElementById('photo').style.display = "none"
		document.getElementById('photo_sel').style.display =""
		
		document.getElementById('scrab').style.display = "none"			
		document.getElementById('scrab_sel').style.display = ""	
		
		document.getElementById('message').style.display = "none"
		document.getElementById('message_sel').style.display = ""
		
		document.getElementById('friend').style.display = "none"			
		document.getElementById('friend_sel').style.display = ""			
		
		document.getElementById('group').style.display = ""
		document.getElementById('group_sel').style.display = "none"
		
		document.getElementById('post_add').style.display = "none"	
		document.getElementById('post_add_sel').style.display = ""			
		
}
function post_add(){
		document.getElementById('photo').style.display = "none"
		document.getElementById('photo_sel').style.display =""
		
		document.getElementById('scrab').style.display = "none"			
		document.getElementById('scrab_sel').style.display = ""	
		
		document.getElementById('message').style.display = "none"
		document.getElementById('message_sel').style.display = ""
		
		document.getElementById('friend').style.display = "none"			
		document.getElementById('friend_sel').style.display = ""			
		
		document.getElementById('group').style.display = "none"
		document.getElementById('group_sel').style.display = ""
		
		document.getElementById('post_add').style.display = ""		
		document.getElementById('post_add_sel').style.display = "none"		
		
}



/*function show_divf(){
	
}*/
function add_link(){
	
var link_txt=document.getElementById("link_txt");
	
		if((link_txt.value=='')||(link_txt.value=='http://')){
				alert("Please Enter Correct URL");
				link_txt.focus(); // set the focus to this input

		}
		else{	
		
		
			$.ajax({
					type: "POST",
					url: "ajax/url_check.php",	//Calling the ajax process php url				
					data: "&url="+document.getElementById('link_txt').value, 
					success: function(html){	
						if(html==0){
							alert("Please Enter Valide URL");
							link_txt.focus(); // set the focus to this input
						}else{
							document.getElementById("add_link1").style.display = "none";
							document.getElementById("add_link2").style.display = "";		
							$.ajax({
							type: "POST",
							url: "ajax/add_link.php",	//Calling the ajax process php url				
							data: "&link_address="+document.getElementById('link_txt').value, 
							success: function(html){	
							$("#add_link2").html(html);				//Calling the responce IDs					 
							}
							});	
							
						}
						
					}
				});	
		
				

			
		}
		
		 
		
}


function show_part(a,last){
	for(var i=0;i<=last;i++){		
			if(a==i){
				document.getElementById("button_"+i).style.display = "";		
				document.getElementById("ima_path_"+i).style.display = "";	
				document.getElementById("img_link_"+i).disabled=false;
			}
			else{
				document.getElementById("button_"+i).style.display = "none";		
				document.getElementById("ima_path_"+i).style.display = "none";				
				document.getElementById("img_link_"+i).disabled=true;								
			}
	}
}
function show_five_in_first(a,b,c,d,e)
{
	
	a = document.getElementById(a);		
	b = document.getElementById(b);	
	c = document.getElementById(c);
	d = document.getElementById(d);
	e = document.getElementById(e);
	
	a.style.display = "";
	b.style.display = "none";	
	c.style.display = "none";
	d.style.display = "none";
	e.style.display = "none";
		
}
function class_search4(r){	
	if(r==1){
		document.getElementById('left1').className='mail_left_sel';
		document.getElementById('center1').className='mail_center_sel';
		document.getElementById('right1').className='mail_right_sel';
		
		document.getElementById('left2').className='mail_left';
		document.getElementById('center2').className='mail_center';
		document.getElementById('right2').className='mail_right';
		
		document.getElementById('left3').className='mail_left';
		document.getElementById('center3').className='mail_center';
		document.getElementById('right3').className='mail_right';
		
		document.getElementById('left4').className='mail_left';
		document.getElementById('center4').className='mail_center';
		document.getElementById('right4').className='mail_right';
		
		document.getElementById('left5').className='mail_left';
		document.getElementById('center5').className='mail_center';
		document.getElementById('right5').className='mail_right';
	}


	if(r==2){
		document.getElementById('left1').className='mail_left';
		document.getElementById('center1').className='mail_center';
		document.getElementById('right1').className='mail_right';
		
		document.getElementById('left2').className='mail_left_sel';
		document.getElementById('center2').className='mail_center_sel';
		document.getElementById('right2').className='mail_right_sel';
		
		document.getElementById('left3').className='mail_left';
		document.getElementById('center3').className='mail_center';
		document.getElementById('right3').className='mail_right';
		
		document.getElementById('left4').className='mail_left';
		document.getElementById('center4').className='mail_center';
		document.getElementById('right4').className='mail_right';
		
		document.getElementById('left5').className='mail_left';
		document.getElementById('center5').className='mail_center';
		document.getElementById('right5').className='mail_right';
	}


	if(r==3){
		document.getElementById('left1').className='mail_left';
		document.getElementById('center1').className='mail_center';
		document.getElementById('right1').className='mail_right';
		
		document.getElementById('left2').className='mail_left';
		document.getElementById('center2').className='mail_center';
		document.getElementById('right2').className='mail_right';
		
		document.getElementById('left3').className='mail_left_sel';
		document.getElementById('center3').className='mail_center_sel';
		document.getElementById('right3').className='mail_right_sel';
		
		document.getElementById('left4').className='mail_left';
		document.getElementById('center4').className='mail_center';
		document.getElementById('right4').className='mail_right';
		
		document.getElementById('left5').className='mail_left';
		document.getElementById('center5').className='mail_center';
		document.getElementById('right5').className='mail_right';
	}
	
		if(r==4){
		document.getElementById('left1').className='mail_left';
		document.getElementById('center1').className='mail_center';
		document.getElementById('right1').className='mail_right';
		
		document.getElementById('left2').className='mail_left';
		document.getElementById('center2').className='mail_center';
		document.getElementById('right2').className='mail_right';		
		
		document.getElementById('left3').className='mail_left';
		document.getElementById('center3').className='mail_center';
		document.getElementById('right3').className='mail_right';
		
		
		document.getElementById('left4').className='mail_left_sel';
		document.getElementById('center4').className='mail_center_sel';
		document.getElementById('right4').className='mail_right_sel';
		
		document.getElementById('left5').className='mail_left';
		document.getElementById('center5').className='mail_center';
		document.getElementById('right5').className='mail_right';
	}
	
	if(r==5){
		document.getElementById('left1').className='mail_left';
		document.getElementById('center1').className='mail_center';
		document.getElementById('right1').className='mail_right';
		
		document.getElementById('left2').className='mail_left';
		document.getElementById('center2').className='mail_center';
		document.getElementById('right2').className='mail_right';		
		
		document.getElementById('left3').className='mail_left';
		document.getElementById('center3').className='mail_center';
		document.getElementById('right3').className='mail_right';
		
		
		document.getElementById('left4').className='mail_left';
		document.getElementById('center4').className='mail_center';
		document.getElementById('right4').className='mail_right';
		
		document.getElementById('left5').className='mail_left_sel';
		document.getElementById('center5').className='mail_center_sel';
		document.getElementById('right5').className='mail_right_sel';
	}

}	


function show_friends(){
	
	     $.ajax({
			type: "POST",
			url: "ajax/show_friends.php",	//Calling the ajax process php url				
			data: "&sear_txt=" + document.getElementById('frd_txt').value+
				  "&session_id=" + document.getElementById('session_id').value,
				  
			success: function(html){	
			document.getElementById("sear_div").style.display = "";			
				$("#sear_div").html(html);		//Calling the responce IDs				
	 
			}
		});		
}

function test(){
	alert("drtfgert");
	}

function friend_req_make(a){	
//alert("dafad");
	a1 = document.getElementById('request'+a);
	b = document.getElementById('request1'+a);	
	a1.style.display="none";
	b.style.display="";
	
	
	     $.ajax({
			type: "POST",
			url: "ajax/friend_req.php",	//Calling the ajax process php url				
			data: "&friend_id=" +a+
				  "&session_id=" + document.getElementById('session_id').value,				  
			success: function(html){				
				$("#request1"+a).html(html);		//Calling the responce IDs				
	 
			}
		});
		
}




function friend_req_profile(a){	
	a1 = document.getElementById('request'+a);
	b = document.getElementById('request1'+a);	
	a1.style.display="none";
	b.style.display="";
	
	
	     $.ajax({
			type: "POST",
			url: "ajax/friend_req_profile.php",	//Calling the ajax process php url				
			data: "&friend_id=" +a+
				  "&session_id=" + document.getElementById('session_id').value,				  
			success: function(html){				
				$("#request1"+a).html(html);		//Calling the responce IDs				
			}
		});
		
}


function friend_con_123(a,b,c){	
	     $.ajax({
			type: "POST",
			url: "ajax/friend_con.php",	//Calling the ajax process php url				
			data: "&friend_id=" +a+
				  "&edit_id=" +b+
				  "&req_date=" +c+
				  "&session_id=" + document.getElementById('session_id').value,				  
			success: function(html){						
				$("#request"+a).html(html);		//Calling the responce IDs				
	 
			}
		});
		
}

function class_search(r){		
	if(r==1){
		if(document.getElementById('home1').className=='top_menu_l_selected'){
			document.getElementById('home1').className='top_menu_l_selected';			
		}
		else{
			document.getElementById('home1').className='top_menu_l_sel';
		}			
		if(document.getElementById('home2').className=='top_menu_m_selected'){
			document.getElementById('home2').className='top_menu_m_selected';			
		}
		else{
			document.getElementById('home2').className='top_menu_m_sel';
		}			
		if(document.getElementById('home3').className=='top_menu_r_selected'){
			document.getElementById('home3').className='top_menu_r_selected';			
		}
		else{
			document.getElementById('home3').className='top_menu_r_sel';
		}	
		
		
		if(document.getElementById('profile1').className=='top_menu_l_selected'){
			document.getElementById('profile1').className='top_menu_l_selected';			
		}
		else{
			document.getElementById('profile1').className='top_menu_l';
		}			
		if(document.getElementById('profile1').className=='top_menu_m_selected'){
			document.getElementById('profile1').className='top_menu_m_selected';			
		}
		else{
			document.getElementById('profile1').className='top_menu_m';
		}			
		if(document.getElementById('profile1').className=='top_menu_r_selected'){
			document.getElementById('profile1').className='top_menu_r_selected';			
		}
		else{
			document.getElementById('profile1').className='top_menu_r';
		}	
	
	
	
		
		
		
		document.getElementById('profile1').className='top_menu_l';
		document.getElementById('profile2').className='top_menu_m';
		document.getElementById('profile3').className='top_menu_r';
		
		
		document.getElementById('job1').className='top_menu_l';
		document.getElementById('job2').className='top_menu_m';
		document.getElementById('job3').className='top_menu_r';
		
		document.getElementById('mat1').className='top_menu_l';
		document.getElementById('mat2').className='top_menu_m';
		document.getElementById('mat3').className='top_menu_r';		
		
		document.getElementById('blood1').className='top_menu_l';
		document.getElementById('blood2').className='top_menu_m';
		document.getElementById('blood3').className='top_menu_r';
		
		document.getElementById('educ1').className='top_menu_l';
		document.getElementById('educ2').className='top_menu_m';
		document.getElementById('educ3').className='top_menu_r';
		
		document.getElementById('news1').className='top_menu_l';
		document.getElementById('news2').className='top_menu_m';
		document.getElementById('news3').className='top_menu_r';
		
		document.getElementById('live1').className='top_menu_l';
		document.getElementById('live2').className='top_menu_m';
		document.getElementById('live3').className='top_menu_r';
		
		document.getElementById('ast1').className='top_menu_l';
		document.getElementById('ast2').className='top_menu_m';
		document.getElementById('ast3').className='top_menu_r';
		
		document.getElementById('sim1').className='top_menu_l';
		document.getElementById('sim2').className='top_menu_m';
		document.getElementById('sim3').className='top_menu_r';
		
		document.getElementById('classifieds1').className='top_menu_l';
		document.getElementById('classifieds2').className='top_menu_m';
		document.getElementById('classifieds3').className='top_menu_r';
		
	}

	if(r==2){ 
	
			if(document.getElementById('home1').className=='top_menu_l_selected'){
				document.getElementById('home1').className='top_menu_l_selected';			
			}
			else{
				document.getElementById('home1').className='top_menu_l';
			}			
			if(document.getElementById('home1').className=='top_menu_m_selected'){
				document.getElementById('home1').className='top_menu_m_selected';			
			}
			else{
				document.getElementById('home1').className='top_menu_m';
			}			
			if(document.getElementById('home1').className=='top_menu_r_selected'){
				document.getElementById('home1').className='top_menu_r_selected';			
			}
			else{
				document.getElementById('home1').className='top_menu_r';
			}

		
		document.getElementById('profile1').className='top_menu_l_sel';
		document.getElementById('profile2').className='top_menu_m_sel';
		document.getElementById('profile3').className='top_menu_r_sel';
		
		document.getElementById('job1').className='top_menu_l';
		document.getElementById('job2').className='top_menu_m';
		document.getElementById('job3').className='top_menu_r';
		
		document.getElementById('mat1').className='top_menu_l';
		document.getElementById('mat2').className='top_menu_m';
		document.getElementById('mat3').className='top_menu_r';		
		
		document.getElementById('blood1').className='top_menu_l';
		document.getElementById('blood2').className='top_menu_m';
		document.getElementById('blood3').className='top_menu_r';
		
		document.getElementById('educ1').className='top_menu_l';
		document.getElementById('educ2').className='top_menu_m';
		document.getElementById('educ3').className='top_menu_r';
		
		document.getElementById('news1').className='top_menu_l';
		document.getElementById('news2').className='top_menu_m';
		document.getElementById('news3').className='top_menu_r';
		
		document.getElementById('live1').className='top_menu_l';
		document.getElementById('live2').className='top_menu_m';
		document.getElementById('live3').className='top_menu_r';
		
		document.getElementById('ast1').className='top_menu_l';
		document.getElementById('ast2').className='top_menu_m';
		document.getElementById('ast3').className='top_menu_r';
		
		document.getElementById('sim1').className='top_menu_l';
		document.getElementById('sim2').className='top_menu_m';
		document.getElementById('sim3').className='top_menu_r';
		
		document.getElementById('classifieds1').className='top_menu_l';
		document.getElementById('classifieds2').className='top_menu_m';
		document.getElementById('classifieds3').className='top_menu_r';
	}
	
	if(r==3){
		document.getElementById('home1').className='top_menu_l';
		document.getElementById('home2').className='top_menu_m';
		document.getElementById('home3').className='top_menu_r';
		
		document.getElementById('profile1').className='top_menu_l';
		document.getElementById('profile2').className='top_menu_m';
		document.getElementById('profile3').className='top_menu_r';
		
		document.getElementById('job1').className='top_menu_l_sel';
		document.getElementById('job2').className='top_menu_m_sel';
		document.getElementById('job3').className='top_menu_r_sel';
		
		document.getElementById('mat1').className='top_menu_l';
		document.getElementById('mat2').className='top_menu_m';
		document.getElementById('mat3').className='top_menu_r';		
		
		document.getElementById('blood1').className='top_menu_l';
		document.getElementById('blood2').className='top_menu_m';
		document.getElementById('blood3').className='top_menu_r';
		
		document.getElementById('educ1').className='top_menu_l';
		document.getElementById('educ2').className='top_menu_m';
		document.getElementById('educ3').className='top_menu_r';
		
		document.getElementById('news1').className='top_menu_l';
		document.getElementById('news2').className='top_menu_m';
		document.getElementById('news3').className='top_menu_r';
		
		document.getElementById('live1').className='top_menu_l';
		document.getElementById('live2').className='top_menu_m';
		document.getElementById('live3').className='top_menu_r';
		
		document.getElementById('ast1').className='top_menu_l';
		document.getElementById('ast2').className='top_menu_m';
		document.getElementById('ast3').className='top_menu_r';
		
		document.getElementById('sim1').className='top_menu_l';
		document.getElementById('sim2').className='top_menu_m';
		document.getElementById('sim3').className='top_menu_r';
		
		document.getElementById('classifieds1').className='top_menu_l';
		document.getElementById('classifieds2').className='top_menu_m';
		document.getElementById('classifieds3').className='top_menu_r';
	}	

	if(r==4){
		document.getElementById('home1').className='top_menu_l';
		document.getElementById('home2').className='top_menu_m';
		document.getElementById('home3').className='top_menu_r';
		
		document.getElementById('profile1').className='top_menu_l';
		document.getElementById('profile2').className='top_menu_m';
		document.getElementById('profile3').className='top_menu_r';
		
		document.getElementById('job1').className='top_menu_l';
		document.getElementById('job2').className='top_menu_m';
		document.getElementById('job3').className='top_menu_r';
		
		document.getElementById('mat1').className='top_menu_l_sel';
		document.getElementById('mat2').className='top_menu_m_sel';
		document.getElementById('mat3').className='top_menu_r_sel';		
		
		document.getElementById('blood1').className='top_menu_l';
		document.getElementById('blood2').className='top_menu_m';
		document.getElementById('blood3').className='top_menu_r';
		
		document.getElementById('educ1').className='top_menu_l';
		document.getElementById('educ2').className='top_menu_m';
		document.getElementById('educ3').className='top_menu_r';
		
		document.getElementById('news1').className='top_menu_l';
		document.getElementById('news2').className='top_menu_m';
		document.getElementById('news3').className='top_menu_r';
		
		document.getElementById('live1').className='top_menu_l';
		document.getElementById('live2').className='top_menu_m';
		document.getElementById('live3').className='top_menu_r';
		
		document.getElementById('ast1').className='top_menu_l';
		document.getElementById('ast2').className='top_menu_m';
		document.getElementById('ast3').className='top_menu_r';
		
		document.getElementById('sim1').className='top_menu_l';
		document.getElementById('sim2').className='top_menu_m';
		document.getElementById('sim3').className='top_menu_r';
		
		document.getElementById('classifieds1').className='top_menu_l';
		document.getElementById('classifieds2').className='top_menu_m';
		document.getElementById('classifieds3').className='top_menu_r';
	}
	
	if(r==5){
		document.getElementById('home1').className='top_menu_l';
		document.getElementById('home2').className='top_menu_m';
		document.getElementById('home3').className='top_menu_r';
		
		document.getElementById('profile1').className='top_menu_l';
		document.getElementById('profile2').className='top_menu_m';
		document.getElementById('profile3').className='top_menu_r';
		
		document.getElementById('job1').className='top_menu_l';
		document.getElementById('job2').className='top_menu_m';
		document.getElementById('job3').className='top_menu_r';
		
		document.getElementById('mat1').className='top_menu_l';
		document.getElementById('mat2').className='top_menu_m';
		document.getElementById('mat3').className='top_menu_r';		
		
		document.getElementById('blood1').className='top_menu_l_sel';
		document.getElementById('blood2').className='top_menu_m_sel';     
		document.getElementById('blood3').className='top_menu_r_sel';
		
		document.getElementById('educ1').className='top_menu_l';
		document.getElementById('educ2').className='top_menu_m';
		document.getElementById('educ3').className='top_menu_r';
		
		document.getElementById('news1').className='top_menu_l';
		document.getElementById('news2').className='top_menu_m';
		document.getElementById('news3').className='top_menu_r';
		
		document.getElementById('live1').className='top_menu_l';
		document.getElementById('live2').className='top_menu_m';
		document.getElementById('live3').className='top_menu_r';
		
		document.getElementById('ast1').className='top_menu_l';
		document.getElementById('ast2').className='top_menu_m';
		document.getElementById('ast3').className='top_menu_r';
		
		document.getElementById('sim1').className='top_menu_l';
		document.getElementById('sim2').className='top_menu_m';
		document.getElementById('sim3').className='top_menu_r';
		
		document.getElementById('classifieds1').className='top_menu_l';
		document.getElementById('classifieds2').className='top_menu_m';
		document.getElementById('classifieds3').className='top_menu_r';
	}
	if(r==6){
		document.getElementById('home1').className='top_menu_l';
		document.getElementById('home2').className='top_menu_m';
		document.getElementById('home3').className='top_menu_r';
		
		document.getElementById('profile1').className='top_menu_l';
		document.getElementById('profile2').className='top_menu_m';
		document.getElementById('profile3').className='top_menu_r';
		
		document.getElementById('job1').className='top_menu_l';
		document.getElementById('job2').className='top_menu_m';
		document.getElementById('job3').className='top_menu_r';
		
		document.getElementById('mat1').className='top_menu_l';
		document.getElementById('mat2').className='top_menu_m';
		document.getElementById('mat3').className='top_menu_r';		
		
		document.getElementById('blood1').className='top_menu_l';
		document.getElementById('blood2').className='top_menu_m';
		document.getElementById('blood3').className='top_menu_r';
		
		document.getElementById('educ1').className='top_menu_l_sel';
		document.getElementById('educ2').className='top_menu_m_sel';     
		document.getElementById('educ3').className='top_menu_r_sel';
		
		document.getElementById('news1').className='top_menu_l';
		document.getElementById('news2').className='top_menu_m';
		document.getElementById('news3').className='top_menu_r';
		
		document.getElementById('live1').className='top_menu_l';
		document.getElementById('live2').className='top_menu_m';
		document.getElementById('live3').className='top_menu_r';
		
		document.getElementById('ast1').className='top_menu_l';
		document.getElementById('ast2').className='top_menu_m';
		document.getElementById('ast3').className='top_menu_r';
		
		document.getElementById('sim1').className='top_menu_l';
		document.getElementById('sim2').className='top_menu_m';
		document.getElementById('sim3').className='top_menu_r';
		
		document.getElementById('classifieds1').className='top_menu_l';
		document.getElementById('classifieds2').className='top_menu_m';
		document.getElementById('classifieds3').className='top_menu_r';
	}
	
	if(r==7){
		document.getElementById('home1').className='top_menu_l';
		document.getElementById('home2').className='top_menu_m';
		document.getElementById('home3').className='top_menu_r';
		
		document.getElementById('profile1').className='top_menu_l';
		document.getElementById('profile2').className='top_menu_m';
		document.getElementById('profile3').className='top_menu_r';
		
		document.getElementById('job1').className='top_menu_l';
		document.getElementById('job2').className='top_menu_m';
		document.getElementById('job3').className='top_menu_r';
		
		document.getElementById('mat1').className='top_menu_l';
		document.getElementById('mat2').className='top_menu_m';
		document.getElementById('mat3').className='top_menu_r';		
		
		document.getElementById('blood1').className='top_menu_l';
		document.getElementById('blood2').className='top_menu_m';
		document.getElementById('blood3').className='top_menu_r';
		
		document.getElementById('educ1').className='top_menu_l';
		document.getElementById('educ2').className='top_menu_m';
		document.getElementById('educ3').className='top_menu_r';
		
		document.getElementById('news1').className='top_menu_l_sel';
		document.getElementById('news2').className='top_menu_m_sel';     
		document.getElementById('news3').className='top_menu_r_sel';
		
		document.getElementById('live1').className='top_menu_l';
		document.getElementById('live2').className='top_menu_m';
		document.getElementById('live3').className='top_menu_r';
		
		document.getElementById('ast1').className='top_menu_l';
		document.getElementById('ast2').className='top_menu_m';
		document.getElementById('ast3').className='top_menu_r';
		
		document.getElementById('sim1').className='top_menu_l';
		document.getElementById('sim2').className='top_menu_m';
		document.getElementById('sim3').className='top_menu_r';
		
		document.getElementById('classifieds1').className='top_menu_l';
		document.getElementById('classifieds2').className='top_menu_m';
		document.getElementById('classifieds3').className='top_menu_r';
	}	
	if(r==8){
		document.getElementById('home1').className='top_menu_l';
		document.getElementById('home2').className='top_menu_m';
		document.getElementById('home3').className='top_menu_r';
		
		document.getElementById('profile1').className='top_menu_l';
		document.getElementById('profile2').className='top_menu_m';
		document.getElementById('profile3').className='top_menu_r';
		
		document.getElementById('job1').className='top_menu_l';
		document.getElementById('job2').className='top_menu_m';
		document.getElementById('job3').className='top_menu_r';
		
		document.getElementById('mat1').className='top_menu_l';
		document.getElementById('mat2').className='top_menu_m';
		document.getElementById('mat3').className='top_menu_r';		
		
		document.getElementById('blood1').className='top_menu_l';
		document.getElementById('blood2').className='top_menu_m';
		document.getElementById('blood3').className='top_menu_r';
		
		document.getElementById('educ1').className='top_menu_l';
		document.getElementById('educ2').className='top_menu_m';
		document.getElementById('educ3').className='top_menu_r';
		
		document.getElementById('news1').className='top_menu_l';
		document.getElementById('news2').className='top_menu_m';
		document.getElementById('news3').className='top_menu_r';
		
		document.getElementById('live1').className='top_menu_l_sel';
		document.getElementById('live2').className='top_menu_m_sel';     
		document.getElementById('live3').className='top_menu_r_sel';
		
		document.getElementById('ast1').className='top_menu_l';
		document.getElementById('ast2').className='top_menu_m';
		document.getElementById('ast3').className='top_menu_r';
		
		document.getElementById('sim1').className='top_menu_l';
		document.getElementById('sim2').className='top_menu_m';
		document.getElementById('sim3').className='top_menu_r';
		
		document.getElementById('classifieds1').className='top_menu_l';
		document.getElementById('classifieds2').className='top_menu_m';
		document.getElementById('classifieds3').className='top_menu_r';
	}
	
	if(r==9){
		document.getElementById('home1').className='top_menu_l';
		document.getElementById('home2').className='top_menu_m';
		document.getElementById('home3').className='top_menu_r';
		
		document.getElementById('profile1').className='top_menu_l';
		document.getElementById('profile2').className='top_menu_m';
		document.getElementById('profile3').className='top_menu_r';
		
		document.getElementById('job1').className='top_menu_l';
		document.getElementById('job2').className='top_menu_m';
		document.getElementById('job3').className='top_menu_r';
		
		document.getElementById('mat1').className='top_menu_l';
		document.getElementById('mat2').className='top_menu_m';
		document.getElementById('mat3').className='top_menu_r';		
		
		document.getElementById('blood1').className='top_menu_l';
		document.getElementById('blood2').className='top_menu_m';
		document.getElementById('blood3').className='top_menu_r';
		
		document.getElementById('educ1').className='top_menu_l';
		document.getElementById('educ2').className='top_menu_m';
		document.getElementById('educ3').className='top_menu_r';
		
		document.getElementById('news1').className='top_menu_l';
		document.getElementById('news2').className='top_menu_m';
		document.getElementById('news3').className='top_menu_r';
		
		document.getElementById('live1').className='top_menu_l';
		document.getElementById('live2').className='top_menu_m';
		document.getElementById('live3').className='top_menu_r';
		
		document.getElementById('ast1').className='top_menu_l_sel';
		document.getElementById('ast2').className='top_menu_m_sel';     
		document.getElementById('ast3').className='top_menu_r_sel';
		
		document.getElementById('sim1').className='top_menu_l';
		document.getElementById('sim2').className='top_menu_m';
		document.getElementById('sim3').className='top_menu_r';
		
		document.getElementById('classifieds1').className='top_menu_l';
		document.getElementById('classifieds2').className='top_menu_m';
		document.getElementById('classifieds3').className='top_menu_r';
	}
	
	
	if(r==10){
		document.getElementById('home1').className='top_menu_l';
		document.getElementById('home2').className='top_menu_m';
		document.getElementById('home3').className='top_menu_r';
		
		document.getElementById('profile1').className='top_menu_l';
		document.getElementById('profile2').className='top_menu_m';
		document.getElementById('profile3').className='top_menu_r';
		
		document.getElementById('job1').className='top_menu_l';
		document.getElementById('job2').className='top_menu_m';
		document.getElementById('job3').className='top_menu_r';
		
		document.getElementById('mat1').className='top_menu_l';
		document.getElementById('mat2').className='top_menu_m';
		document.getElementById('mat3').className='top_menu_r';		
		
		document.getElementById('blood1').className='top_menu_l';
		document.getElementById('blood2').className='top_menu_m';
		document.getElementById('blood3').className='top_menu_r';
		
		document.getElementById('educ1').className='top_menu_l';
		document.getElementById('educ2').className='top_menu_m';
		document.getElementById('educ3').className='top_menu_r';
		
		document.getElementById('news1').className='top_menu_l';
		document.getElementById('news2').className='top_menu_m';
		document.getElementById('news3').className='top_menu_r';
		
		document.getElementById('live1').className='top_menu_l';
		document.getElementById('live2').className='top_menu_m';
		document.getElementById('live3').className='top_menu_r';
		
		document.getElementById('ast1').className='top_menu_l';
		document.getElementById('ast2').className='top_menu_m';
		document.getElementById('ast3').className='top_menu_r';
		
		document.getElementById('sim1').className='top_menu_l_sel';
		document.getElementById('sim2').className='top_menu_m_sel';     
		document.getElementById('sim3').className='top_menu_r_sel';
		
		document.getElementById('classifieds1').className='top_menu_l';
		document.getElementById('classifieds2').className='top_menu_m';
		document.getElementById('classifieds3').className='top_menu_r';
	}
	
	if(r==11){
		document.getElementById('home1').className='top_menu_l';
		document.getElementById('home2').className='top_menu_m';
		document.getElementById('home3').className='top_menu_r';
		
		document.getElementById('profile1').className='top_menu_l';
		document.getElementById('profile2').className='top_menu_m';
		document.getElementById('profile3').className='top_menu_r';
		
		document.getElementById('job1').className='top_menu_l';
		document.getElementById('job2').className='top_menu_m';
		document.getElementById('job3').className='top_menu_r';
		
		document.getElementById('mat1').className='top_menu_l';
		document.getElementById('mat2').className='top_menu_m';
		document.getElementById('mat3').className='top_menu_r';		
		
		document.getElementById('blood1').className='top_menu_l';
		document.getElementById('blood2').className='top_menu_m';
		document.getElementById('blood3').className='top_menu_r';
		
		document.getElementById('educ1').className='top_menu_l';
		document.getElementById('educ2').className='top_menu_m';
		document.getElementById('educ3').className='top_menu_r';
		
		document.getElementById('news1').className='top_menu_l';
		document.getElementById('news2').className='top_menu_m';
		document.getElementById('news3').className='top_menu_r';
		
		document.getElementById('live1').className='top_menu_l';
		document.getElementById('live2').className='top_menu_m';
		document.getElementById('live3').className='top_menu_r';
		
		document.getElementById('ast1').className='top_menu_l';
		document.getElementById('ast2').className='top_menu_m';
		document.getElementById('ast3').className='top_menu_r';
		
		document.getElementById('sim1').className='top_menu_l';
		document.getElementById('sim2').className='top_menu_m';
		document.getElementById('sim3').className='top_menu_r';
		
		document.getElementById('classifieds1').className='top_menu_l_sel';
		document.getElementById('classifieds2').className='top_menu_m_sel';     
		document.getElementById('classifieds3').className='top_menu_r_sel';
	}
}

function Show_news_div(){
	a = document.getElementById('news_id');
	a.style.display = "";
}
function hide_news_div(){
	a = document.getElementById('news_id');
	a.style.display = "none";
}
function Show_jobse_div(){
	a = document.getElementById('jobse_id');
	a.style.display = "";
}

function hide_jobse_div(){
	a = document.getElementById('jobse_id');
	a.style.display = "none";
}

function Show_educat_div(){
	a = document.getElementById('educat_id');
	a.style.display = "";
}

function hide_educat_div(){
	a = document.getElementById('educat_id');
	a.style.display = "none";
}
function Show_class_div(){
	a = document.getElementById('class_id');
	a.style.display = "";
}

function hide_class_div(){
	a = document.getElementById('class_id');
	a.style.display = "none";
}

function Show_ast_div(){
	a = document.getElementById('ast_id');
	a.style.display = "";
}

function hide_ast_div(){
	a = document.getElementById('ast_id');
	a.style.display = "none";
}

function Show_live_div(){
	a = document.getElementById('live_id');
	a.style.display = "";
}

function hide_live_div(){
	a = document.getElementById('live_id');
	a.style.display = "none";
}

function Show_pro_div(h){
	a = document.getElementById('pro_id_'+h);
	a.style.display = "";
}

function Show_pro_div_c(h){
	document.getElementById('menu_l_'+h).className='top_menu_l_sel';
	document.getElementById('menu_c_'+h).className='top_menu_m_sel';
	document.getElementById('menu_r_'+h).className='top_menu_r_sel';
}

function hide_pro_div(h){
	a = document.getElementById('pro_id_'+h);
	a.style.display = "none";	
}

function hide_pro_div_c(h){
	document.getElementById('menu_l_'+h).className='top_menu_l';
	document.getElementById('menu_c_'+h).className='top_menu_m';
	document.getElementById('menu_r_'+h).className='top_menu_r';
}

function pp(){
	document.getElementById('out_div_id').style.display='none';
}


function blood_save_div(){	
		if(document.getElementById('blood_group').value=="0"){
				alert("Please Select Blood Group");
				document.getElementById('blood_group').focus(); 
		}
		else{
			document.getElementById('blood_data_out_id').style.display =""
			//scroll(0,0);			
			$.ajax({
				type: "POST",
				url: "ajax/blood_save.php",	//Calling the ajax process php url	
				data:"&session_id="+ document.getElementById('session_id').value+
					 "&blood_group="+document.getElementById('blood_group').value,				
				success: function(html){			
						//document.getElementById('blood_data_out_id').style.display = "";	
						$("#blood_data_out_id").html(html);		
						//setTimeout(pp(),10000);
						$("#blood_data_out_id").fadeOut(1000).delay(10000);

				}
			});
		}
}
function matri_save_div(){	

		if(document.getElementById('religion').value==""){
				alert("Please Select Religion");
				document.getElementById('religion').focus(); 			
		}
		else if(document.getElementById('mother_tongue').value==""){
				alert("Please Select Mother Tongue");
				document.getElementById('mother_tongue').focus(); 			
		}
		else if((document.getElementById('caste').value=="")||(document.getElementById('caste').value=='Select')){	
				alert("Please Select caste");
				document.getElementById('caste').focus(); 		
		}
		else if(document.getElementById('sub_caste').value==""){				 
				alert("Please Enter Sub Caste");
				document.getElementById('sub_caste').focus(); 		
		}
		/*	
		else if(document.getElementById('star').value==""){		
				alert("Please Select Star");
				document.getElementById('star').focus(); 		
		}
		*/		
		/*			
		else if(document.getElementById('luknam').value==""){	
				alert("Please Select Luknam");
				document.getElementById('luknam').focus(); 		
		}
		*/		
		/*		
		else if(document.getElementById('gothram').value==""){	
				alert("Please Enter Gothram");
				document.getElementById('gothram').focus(); 		
		}
		*/
		/*			
		else if(document.getElementById('zodiac').value==""){	
				alert("Please Select Zodiac");
				document.getElementById('zodiac').focus(); 		
		}
		*/		
		/*		
		else if(document.getElementById('dosham').value==""){	
				alert("Please Enter Dosham");
				document.getElementById('dosham').focus(); 		
		}
		*/
		else if(document.getElementById('physical_status').value=="select"){
				alert("Please Select Physical Status");
				document.getElementById('physical_status').focus(); 			
		}
		else if(document.getElementById('country_live').value==""){				 
				alert("Please Select Country Live");
				document.getElementById('country_live').focus(); 		
		}
		else if(document.getElementById('marital_status').value==""){				 				 
				alert("Please Select Marital Status");
				document.getElementById('marital_status').focus(); 
		}

		/*			
		else if(document.getElementById('height').value==""){	
				alert("Please Select Height");
				document.getElementById('height').focus(); 		
		}
		*/		
		/*					
		else if(document.getElementById('weight').value==""){
				alert("Please Select Weight");
				document.getElementById('weight').focus(); 			
		}
		*/		
		/*					
		else if(document.getElementById('colour').value==""){	
				alert("Please Enter Colour");
				document.getElementById('colour').focus(); 		
		}
		*/				
		else if(document.getElementById('income').value==""){
				alert("Please Enter Income");
				document.getElementById('income').focus(); 			
		}				 
		else{
			var numericExpression = /^[0-9]+$/;
			if(document.getElementById('income').value.match(numericExpression)){
			
			document.getElementById('matri_save_div_out_id').style.display =""
			$.ajax({
			type: "POST",
			url: "ajax/matri_save.php",	//Calling the ajax process php url	
			data:"&religion="+ document.getElementById('religion').value+
				 "&mother_tongue="+ document.getElementById('mother_tongue').value+
				 "&caste="+ document.getElementById('caste').value+		
				 "&sub_caste="+ document.getElementById('sub_caste').value+				 
				 "&star="+ document.getElementById('star').value+				 
				 "&luknam="+ document.getElementById('luknam').value+				 
				 "&gothram="+ document.getElementById('gothram').value+						 
 				 "&zodiac="+ document.getElementById('zodiac').value+				 
				 "&dosham="+ document.getElementById('dosham').value+				 
				 "&physical_status="+ document.getElementById('physical_status').value+					 
				 "&country_live="+ document.getElementById('country_live').value+				 
				 "&marital_status="+ document.getElementById('marital_status').value+				 				 
				 "&height="+ document.getElementById('height').value+			 
				 "&weight="+ document.getElementById('weight').value+
				 "&colour="+ document.getElementById('colour').value+				 
				 "&income="+document.getElementById('income').value,
			success: function(html){			
						$("#matri_save_div_out_id").html(html);		
						$("#matri_save_div_out_id").fadeOut(1000).delay(5000);
			}
			});
			}
			else{
				alert("Please enter a valid Income");
				document.getElementById('income').focus(); 					
			}
		}
}

function post_save_div(){	

		var po_jo_title=document.getElementById("po_jo_title");
		var po_job_category=document.getElementById("po_job_category");
		var po_vacancy=document.getElementById("po_vacancy");
		var po_company=document.getElementById("po_company");
		var po_job_country=document.getElementById("po_job_country");
		var po_job_state=document.getElementById("po_job_state");
		var po_job_city=document.getElementById("po_job_city");
		var po_education=document.getElementById("po_education");		
		var po_specialization=document.getElementById("po_specialization");						
		var po_experience=document.getElementById("po_experience");	

		if(po_jo_title.value==''){
				alert("Please Enter Job Title");
				po_jo_title.focus(); // set the focus to this input
		}			
		else if(po_job_category.value==''){
				alert("Please Select Job Category");
				po_job_category.focus(); // set the focus to this input
		}
		else if(po_vacancy.value==''){
				alert("Please Enter No.of Vacancy");
				po_vacancy.focus(); // set the focus to this input
		}
		else if(po_company.value==''){
				alert("Please Enter Company Name");
				po_company.focus(); // set the focus to this input
		}
		
			else if(po_job_country.value==''){
				alert("Please select Country");
				po_job_country.focus(); // set the focus to this input
		}
		else if(po_job_state.value==''){
				alert("Please select State");
				po_job_state.focus(); // set the focus to this input
		}
		else if(po_job_city.value==''){
				alert("Please select City");
				po_job_city.focus(); // set the focus to this input
		}		
		else if(po_education.value==''){
				alert("Please Enter Education");
				po_education.focus(); // set the focus to this input
		}
		else if(po_specialization.value==''){
			alert("Please Select Specialization");
			po_specialization.focus(); // set the focus to this input
		}		
		else if(po_experience.value==''){
				alert("Please select Experience");
				po_experience.focus(); // set the focus to this input
		}
		else{
			document.getElementById('post_job_save_div_out_id').style.display = "";
	
			$.ajax({
			type: "POST",
			url: "ajax/post_save.php",	//Calling the ajax process php url	
			data:"&session_id="+ document.getElementById('session_id').value+
				 "&po_jo_title="+ document.getElementById('po_jo_title').value+
				 "&po_job_category="+ document.getElementById('po_job_category').value+
				 "&po_vacancy="+ document.getElementById('po_vacancy').value+
				 "&po_company="+ document.getElementById('po_company').value+				
				 "&po_job_country="+ document.getElementById('po_job_country').value+
				 "&po_job_state="+ document.getElementById('po_job_state').value+
				 "&po_job_city="+ document.getElementById('po_job_city').value+
				 "&po_education="+ document.getElementById('po_education').value+
				 "&po_specialization="+ document.getElementById('po_specialization').value+				 			 
				 "&po_experience="+document.getElementById('po_experience').value,				
			success: function(html){			

						$("#post_job_save_div_out_id").html(html);		
						//setTimeout(pp(),10000);
						$("#post_job_save_div_out_id").fadeOut(1000).delay(10000);
						
												

			}
		});
	}
		
}

function search_save_div(){	
		var se_education1=document.getElementById("se_education1");
		var se_specialization1=document.getElementById("se_specialization1");		
		var se_job_category=document.getElementById("se_job_category");
		var se_experience=document.getElementById("se_experience");
		var se_salary=document.getElementById("se_salary");
		var se_job_country=document.getElementById("se_job_country");
		var se_job_state=document.getElementById("se_job_state");
		var se_job_city=document.getElementById("se_job_city");
		var se_key_skill=document.getElementById("se_key_skill");
		var se_specialize=document.getElementById("se_specialize");	



		if(se_education1.value==''){
				alert("Please Enter Education");
				se_education1.focus(); // set the focus to this input
		}
		else if(se_specialization1.value==''){
			alert("Please Select Specialization");
			se_specialization1.focus(); // set the focus to this input
		}
		else if(se_job_category.value==''){
			alert("Please Select Job Category");
			se_job_category.focus(); // set the focus to this input
		}
		else if(se_experience.value==''){
				alert("Please select Experience");
				se_experience.focus(); // set the focus to this input
		}
		else if(se_salary.value==''){
				alert("Please Enter Expected Salary");
				se_salary.focus(); // set the focus to this input
		}	
/*		else if(se_job_country.value==''){
				alert("Please select Country");
				se_job_country.focus(); // set the focus to this input
		}
		else if(se_job_state.value==''){
				alert("Please select State");
				se_job_state.focus(); // set the focus to this input
		}

		else if(se_job_city.value==''){
				alert("Please select City");
				se_job_city.focus(); // set the focus to this input
		}		
		else if(se_key_skill.value==''){
				alert("Please Enter Key Skills");
				se_key_skill.focus(); // set the focus to this input
		}	
		else if(se_specialize.value==''){
				alert("Please Enter Specialize in");
				se_specialize.focus(); // set the focus to this input
		}	*/
		else{
			document.getElementById('search_save_div_out_id').style.display = "";	
			$.ajax({
			type: "POST",
			url: "ajax/search_save.php",	//Calling the ajax process php url	
			data:"&session_id="+ document.getElementById('session_id').value+ 
				 "&se_education="+ document.getElementById('se_education1').value+
				 "&se_specialization="+ document.getElementById('se_specialization1').value+				 				 
				 "&se_job_category="+ document.getElementById('se_job_category').value+
				 "&se_experience="+ document.getElementById('se_experience').value+			
				"&se_salary="+ document.getElementById('se_salary').value+			
				"&se_job_country="+ document.getElementById('se_job_country').value+
				"&se_job_state="+ document.getElementById('se_job_state').value+
				"&se_job_city="+ document.getElementById('se_job_city').value+
				 "&se_key_skill="+ document.getElementById('se_key_skill').value+
				 "&se_specialize="+ document.getElementById('se_specialize').value,
								
			success: function(html){			
						$("#search_save_div_out_id").html(html);		
						//setTimeout(pp(),10000);
						$("#search_save_div_out_id").fadeOut(1000).delay(10000);
			}
			});
		}
}

function show_fr_in_first(a,b,c,d,e)
{
	
	a = document.getElementById(a);		
	b = document.getElementById(b);	
	c = document.getElementById(c);
	d = document.getElementById(d);
	e = document.getElementById(e);	
	
	a.style.display = "";
	b.style.display = "none";	
	c.style.display = "none";
	d.style.display = "none";		
	e.style.display = "none";			
}

function class_se(r){		
	if(r==1){
		document.getElementById('s_pro').className='search_selected';	
		document.getElementById('s_blood').className='search';		
		document.getElementById('s_groom').className='search';	
		document.getElementById('s_job').className='search';
		document.getElementById('se_emp').className='search';				
		
	}

	if(r==2){
		document.getElementById('s_pro').className='search';	
		document.getElementById('s_blood').className='search_selected';		
		document.getElementById('s_groom').className='search';	
		document.getElementById('s_job').className='search';
		document.getElementById('s_emp').className='search';					
	}
	if(r==3){
		document.getElementById('s_pro').className='search';	
		document.getElementById('s_blood').className='search';		
		document.getElementById('s_groom').className='search_selected';	
		document.getElementById('s_job').className='search';
		document.getElementById('s_emp').className='search';						
	}
	if(r==4){
		document.getElementById('s_pro').className='search';	
		document.getElementById('s_blood').className='search';		
		document.getElementById('s_groom').className='search';	
		document.getElementById('s_job').className='search_selected';
		document.getElementById('s_emp').className='search';						
	}	
	if(r==5){
		document.getElementById('s_pro').className='search';	
		document.getElementById('s_blood').className='search';		
		document.getElementById('s_groom').className='search';	
		document.getElementById('s_job').className='search';
		document.getElementById('s_emp').className='search_selected';		
	}	
	
}

function Show_blood_div(){
	a = document.getElementById('blood_div');
	a.style.display = "";
	document.getElementById('apply_for_blood').value="1";
	
}

function hide_blood_div(){
	a = document.getElementById('blood_div');
	a.style.display = "none";
	document.getElementById('apply_for_blood').value="0";	
}


function Show_matri_div(){
	a = document.getElementById('matri_div');
	a.style.display = "";
	document.getElementById('apply_for_soulmate').value="1";	
}

function hide_matri_div(){
	a = document.getElementById('matri_div');
	a.style.display = "none";
	document.getElementById('apply_for_soulmate').value="0";		
}


function Show_jo_div(){
	a = document.getElementById('jo_div');
	a.style.display = "";
	document.getElementById('apply_for_blood_1').value="1";
}

function hide_jo_div(){
	a = document.getElementById('jo_div');
	a.style.display = "none";
	document.getElementById('apply_for_blood_1').value="0";
}



function textCounter(field, countfield, maxlimit) {
if (field.value.length > maxlimit) // if too long...trim it!
field.value = field.value.substring(0, maxlimit);
// otherwise, update 'characters left' counter
else 
countfield.value = maxlimit - field.value.length;
}


/*<![CDATA[*/
function scrol(d){
var obj = document.getElementById(d);
var posX = obj.offsetLeft;var posY = obj.offsetTop;
while(obj.offsetParent){
posX=posX+obj.offsetParent.offsetLeft;
posY=posY+obj.offsetParent.offsetTop;
if(obj==document.getElementsByTagName('body')[0]){break}
else{obj=obj.offsetParent;}
}
return posY;
}
/*]]>*/


function share_post(a){	
	//document.getElementById('share_msg').style.display="";
	$(".share_msg").slideDown(1000);	
	$.ajax({
		type: "POST",
		url: "ajax/share_post.php",	//Calling the ajax process php url	
		data: "&message_post_id="+a,				
		success: function(html){
			$("#share_msg").html(html);				//Calling the responce IDs						
			$(document).ready(function(){
				$(".share_post_close").click(function(){
				$(".share_msg").slideUp(1000);
				});
			});	

		}
	});
}


function post_birthday_wish(a){	

	$.ajax({
		type: "POST",
		url: "ajax/post_birthday_wish.php",	//Calling the ajax process php url	
		data: "&message_post_id="+a+"&message_post_value="+document.getElementById('b_day_con_'+a).value,				
		success: function(html){
			$("#b_day_con_"+a+"_1").html(html);				//Calling the responce IDs									

		}
	});
}


function save_general_profile(){

	
var job=document.getElementById('job').value;
var company=document.getElementById('company').value;
var url="&job="+job+"&company="+company;

if(document.getElementById('country_lf').value!=0){
	var country=document.getElementById('country_lf').value;	
	url=url+"&country="+country;	
}
if((document.getElementById('state_lf')!=null)&&(document.getElementById('state_lf').value!=0)){
	var state=document.getElementById('state_lf').value;	
	url=url+"&state="+state;	
}
if((document.getElementById('city_lf')!=null)&&(document.getElementById('city_lf').value!=0)){
	var city=document.getElementById('city_lf').value;
	url=url+"&city="+city;	
}


	$.ajax({
		type: "POST",
		url: "ajax/save_general_profile.php",	//Calling the ajax process php url	
		data:url,				
		success: function(html){
			location.replace("profile_photo_change_first.php");							
		}
	});

	
}

function validate_login_first(){
	
	var apply_for_blood=document.getElementById('apply_for_blood');
	var apply_for_soulmate=document.getElementById('apply_for_soulmate');	
	
	if((apply_for_blood.value==1)&&(document.getElementById('blood_group')!=null)&&(document.getElementById('blood_group').value==0)){		
		alert("Please select Blood Group");
		document.getElementById('blood_group').focus(); 
		return false;
	}
	else if((apply_for_soulmate.value==1)&&(document.getElementById('religion')!=null)&&(document.getElementById('religion').value=="")){
		alert("Please Select Religion");
		document.getElementById('religion').focus(); 			
		return false;				
	}
	else if((apply_for_soulmate.value==1)&&(document.getElementById('mother_tongue')!=null)&&(document.getElementById('mother_tongue').value=="")){
		alert("Please Select Mother Tongue");
		document.getElementById('mother_tongue').focus(); 			
		return false;						
	}
	else if((apply_for_soulmate.value==1)&&(document.getElementById('caste')!=null)&&((document.getElementById('caste').value=="")||(document.getElementById('caste').value=='Select'))){	
		alert("Please Select caste");
		document.getElementById('caste').focus(); 	
		return false;				
	}
	else if((apply_for_soulmate.value==1)&&(document.getElementById('sub_caste')!=null)&&(document.getElementById('sub_caste').value=="")){				 
		alert("Please Enter Sub Caste");
		document.getElementById('sub_caste').focus(); 	
		return false;						
	}		
	else if((apply_for_soulmate.value==1)&&(document.getElementById('physical_status')!=null)&&(document.getElementById('physical_status').value=="select")){
		alert("Please Select Physical Status");
		document.getElementById('physical_status').focus();
		return false;						
	}
	else if((apply_for_soulmate.value==1)&&(document.getElementById('country_live')!=null)&&(document.getElementById('country_live').value=="")){				 
		alert("Please Select Country Live");
		document.getElementById('country_live').focus(); 		
		return false;						
	}
	else if((apply_for_soulmate.value==1)&&(document.getElementById('marital_status')!=null)&&(document.getElementById('marital_status').value=="")){			 				 
		alert("Please Select Marital Status");
		document.getElementById('marital_status').focus(); 
		return false;						
	}

	else if((apply_for_soulmate.value==1)&&(document.getElementById('income')!=null)&&(document.getElementById('income').value=="")){
		alert("Please Enter Income");
		document.getElementById('income').focus(); 
		return false;						
	}				 
	else{
		
	}
	
	if(apply_for_blood_1.value==1){
	if(post_job_va.checked==true){
		var po_jo_title=document.getElementById('po_jo_title');
		var po_job_category=document.getElementById('po_job_category');
		var po_vacancy=document.getElementById('po_vacancy');
		var po_company=document.getElementById('po_company');

		var po_job_country=document.getElementById("po_job_country");
		var po_job_state=document.getElementById("po_job_state");
		var po_job_city=document.getElementById("po_job_city");
		
		var po_education=document.getElementById('po_education');
		var po_specialization=document.getElementById('po_specialization');
		var po_experience=document.getElementById('po_experience');
		  if(po_jo_title.value==""){
			alert("Please select Job Title");
			po_jo_title.focus();
			return false;
		}
		else if(po_job_category.selectedIndex==0){
			alert("Please select the Job Category");
			po_job_category.focus();
			return false;
		}
		else if(po_vacancy.value==""){
			alert("Please select the No.of Vacancy");
			po_vacancy.focus();
			return false;
		}
		else if(po_company.value==""){
			alert("Please select the Company Name");
			po_company.focus();
			return false;
		}
		else if(po_job_country.value==''){
				alert("Please select Country");
				po_job_country.focus(); // set the focus to this input
		}
		else if(po_job_state.value==''){
				alert("Please select State");
				po_job_state.focus(); // set the focus to this input
		}
		else if(po_job_city.value==''){
				alert("Please select City");
				po_job_city.focus(); // set the focus to this input
		}
		else if(po_education.selectedIndex==0){
			alert("Please select the Education");
			po_education.focus();
			return false;
		}
		else if(po_specialization.value==""){
			alert("Please select the Specialization");
			po_specialization.focus();
			return false;
		}
		else if(po_experience.selectedIndex==0){
			alert("Please select the Experience");
			po_experience.focus();
			return false;
		}
		else {
			return true;
		}
	}
	
	
		
	if(search_job_va.checked==true){
		var se_education1=document.getElementById('se_education1');
		var se_specialization1=document.getElementById('se_specialization1');
		var se_job_category=document.getElementById('se_job_category');
		var se_experience=document.getElementById('se_experience');
		var se_salary=document.getElementById('se_salary');
		var se_key_skill=document.getElementById('se_key_skill');
		var se_specialize=document.getElementById('se_specialize');
		
		  if(se_education1.selectedIndex==0){
			alert("Please select Education");
			se_education1.focus();
			return false;
		}
		else if(se_specialization1.selectedIndex==0){
			alert("Please Select Specialization");
			se_specialization1.focus();
			return false;
		}
		else if(se_job_category.value==""){
			alert("Please Select Job Category");
			se_job_category.focus();
			return false;
		}
		else if(se_experience.value==""){
			alert("Please select Experience");
			se_experience.focus();
			return false;
		}
		else if(se_salary.value=""){
			alert("Please Enter Expected Salary");
			se_salary.focus();
			return false;
		}		
		else {
			return true;
		}
	}
		
	}
}




function validate_profile(){
	if(profile_blood.checked==true){
		var blood_group_3=document.getElementById('blood_group_3');		
		  if(blood_group_3.selectedIndex==0){
			alert("Please select the blood_group");
			blood_group_3.focus();
			return false;
		}
		else{
			return true;
		}	
		
	}
	
	if(matrimonial_inf.checked==true){
		var religion=document.getElementById('religion');
		var mother_tongue=document.getElementById('mother_tongue');
		var caste=document.getElementById('caste');
		var sub_caste=document.getElementById('sub_caste');
		var physical_status=document.getElementById('physical_status');
		var country_live=document.getElementById('country_live');
		var marital_status=document.getElementById('marital_status');
		
		  if(religion.selectedIndex==0){
			alert("Please select the religion");
			religion.focus();
			return false;
		}
		else if(mother_tongue.selectedIndex==0){
			alert("Please select the Mother Tongue");
			mother_tongue.focus();
			return false;
		}
		else if(caste.selectedIndex==0){
			alert("Please select the caste ");
			caste.focus();
			return false;
		}
		else if(sub_caste.value==""){	
			alert("Please enter sub caste ");
			sub_caste.focus();
			return false;
		}
		else if(physical_status.selectedIndex==0){
			alert("Please select the physical status ");
			physical_status.focus();
			return false;
		}
		else if(country_live.selectedIndex==0){
			alert("Please select the country live");
			country_live.focus();
			return false;
		}
		else if(marital_status.selectedIndex==0){
			alert("Please select the marital status");
			marital_status.focus();
			return false;
		}
		else{
			return true;
		}
		
	}
	
	
	if(post_job_inf.checked==true){
		var po_jo_title=document.getElementById('po_jo_title');
		var po_job_category=document.getElementById('po_job_category');
		var po_vacancy=document.getElementById('po_vacancy');
		var po_company=document.getElementById('po_company');
		var po_education=document.getElementById('po_education');
		var po_specialization=document.getElementById('po_specialization');
		var po_experience=document.getElementById('po_experience');
		var po_job_country=document.getElementById('po_job_country');
		var po_job_state=document.getElementById('po_job_state');
		var po_job_city=document.getElementById('po_job_city');
		
		if(po_jo_title.value==""){
			alert("Please Enter the jo_title");
			po_jo_title.focus();
			return false;
		}
		else if(po_job_category.selectedIndex==0){
			alert("Please select the job_category ");
			po_job_category.focus();
			return false;
		}
		else if(po_vacancy.value==""){
			alert("Please Enter the vacancy");
			po_vacancy.focus();
			return false;
		}
		else if(po_company.value==""){
			alert("Please Enter the company");
			po_company.focus();
			return false;
		}
		else if(po_education.selectedIndex==0){
			alert("Please select the education ");
			po_education.focus();
			return false;
		}
		else if(po_specialization.selectedIndex==0){
			alert("Please select the specialization ");
			po_specialization.focus();
			return false;
		}
		
		else if(po_experience.selectedIndex==0){
			alert("Please select the experience ");
			po_experience.focus();
			return false;
		}
		
		else if(po_job_country.selectedIndex==0){
			alert("Please select the country ");
			po_job_country.focus();
			return false;
		}
		else if(po_job_state.selectedIndex==0){
			alert("Please select the state ");
			po_job_state.focus();
			return false;
		}
		else if(po_job_city.selectedIndex==0){
			alert("Please select the city ");
			po_job_city.focus();
			return false;
		}
		else{
			return true;
		}
		
	}
	
    if(search_job_inf.checked==true){
		var edu_id=document.getElementById('edu_id');
		var se_specialization1=document.getElementById('se_specialization1');
		var se_job_category=document.getElementById('se_job_category');
		var se_experience=document.getElementById('se_experience');
		var se_salary=document.getElementById('se_salary');
	
		
		  if(edu_id.selectedIndex==0){
			alert("Please select the se_education");
			edu_id.focus();
			return false;
		}
		else if(se_specialization1.selectedIndex==0){
			alert("Please select the se_specialization");
			se_specialization1.focus();
			return false;
		}
		else if(se_job_category.selectedIndex==0){
			alert("Please select the se_job_category ");
			se_job_category.focus();
			return false;
		}
		else if(se_experience.value==""){	
			alert("Please enter  se_experience ");
			se_experience.focus();
			return false;
		}
		else if(se_salary.value==""){
			alert("Please enter the se_salary");
			se_salary.focus();
			return false;
		}
		
		else{
			return true;
		}
		
	}


}



/*----------------------------------------------------adv image upload-----------------------------------------------------------------------*/

function reg_image_upload(a){
	     $.ajax({
			type: "POST",
			url: "ajax/reg_upload_albums.php",	//Calling the ajax process php url				
			data: "&product_id="+a+"&add_i=1"+			
			"&image_file=" + document.getElementById('image_file').value+"&image_name=" + document.getElementById('image_name').value,
			
			success: function(html){			

				document.getElementById('add_file').style.display = ""
				document.getElementById('add_file_BW').style.display = "none"								
				document.getElementById('upload_btn').style.display = "none";	
				document.getElementById('upload_btn_BW').style.display = "";					
				document.getElementById('image_file1').style.display = "none"			
				
				$("#reg_out_put_ajax_image_upload").html(html);				//Calling the responce IDs			
			
	 
			}
		});		
}

function reg_image_upload_delete(a,b,c){
	     $.ajax({
			type: "POST",
			url: "ajax/resort_post_images.php",	//Calling the ajax process php url				
			data: "&delete_id="+a+"&sub_cat_id="+b+"&ins_id="+c,	
			success: function(html){	
			
		
				$("#out_put_ajax_image_upload").html(html);				//Calling the responce IDs			
			
	 
			}
		});		
}
/*----------------------------------------------------adv image upload-----------------------------------------------------------------------*/


/*----------------------------------------------------adv image upload-----------------------------------------------------------------------*/

function success_front_image_upload(a){
	     $.ajax({
			type: "POST",
			url: "ajax/succes_story_front.php",	//Calling the ajax process php url				
			data: "&product_id="+a+"&add_i=1"+			
			"&image_file=" + document.getElementById('image_file').value+"&image_name=" + document.getElementById('image_name').value,
			
			success: function(html){			

				document.getElementById('add_file').style.display = ""
				document.getElementById('add_file_BW').style.display = "none"								
				document.getElementById('upload_btn').style.display = "none";	
				document.getElementById('upload_btn_BW').style.display = "";					
				document.getElementById('image_file1').style.display = "none"			
				
				$("#succes_story_front123").html(html);				//Calling the responce IDs			
			
	 
			}
		});		
}

function success_delete_image_upload2(a){
	     $.ajax({
			type: "POST",
			url: "ajax/succes_story_front.php",	//Calling the ajax process php url				
			data: "&delete_id="+a,	
			success: function(html){			
		
				$("#succes_story_front123").html(html);				//Calling the responce IDs			
			
	 
			}
		});		
}
/*----------------------------------------------------adv image upload-----------------------------------------------------------------------*/




/*----------------------------------------------------my profile image upload-----------------------------------------------------------------------*/

function success_myprofile_upload(a){
	     $.ajax({
			type: "POST",
			url: "ajax/success_myprofile_upload.php",	//Calling the ajax process php url				
			data: "&product_id="+a+"&add_i=1"+			
			"&image_file=" + document.getElementById('image_file').value+"&image_name=" + document.getElementById('image_name').value,
			
			success: function(html){			

				document.getElementById('add_file').style.display = ""
				document.getElementById('add_file_BW').style.display = "none"								
				document.getElementById('upload_btn').style.display = "none";	
				document.getElementById('upload_btn_BW').style.display = "";					
				document.getElementById('image_file1').style.display = "none"			
				
				$("#succes_story_front123").html(html);				//Calling the responce IDs			
			
	 
			}
		});		
}

function mypro_delete_image_upload2(a){
	     $.ajax({
			type: "POST",
			url: "ajax/success_myprofile_upload.php",	//Calling the ajax process php url				
			data: "&delete_id="+a,	
			success: function(html){			
		
				$("#succes_story_front123").html(html);				//Calling the responce IDs			
			
	 
			}
		});		
}
/*----------------------------------------------------my profile image upload-----------------------------------------------------------------------*/






function formcat_validation(){	
		var cat_name=document.getElementById("cat_name");
		var acc_sta=document.getElementById("acc_sta");
		
		if(cat_name.value==''){
		alert("Please Enter catagory name");
		cat_name.focus(); 
		return false;
		}
		
		else if(acc_sta.selectedIndex==0){
		alert("Please select the active_status");
		acc_sta.focus();
		return false;
		}
		
		
	
		else {
			return true;
		}
	
}



function formsubcat_validation(){	
		var sub_cat=document.getElementById("sub_cat");
		var acc_sta=document.getElementById("acc_sta");
		
		if(sub_cat.value==''){
		alert("Please enter the sub_category name");
		sub_cat.focus(); 
		return false;
		}
		
		else if(acc_sta.selectedIndex==0){
		alert("Please select the active_status");
		acc_sta.focus();
		return false;
		}
		
		
	
		else {
			return true;
		}
	
}



function get_state_name(a,b){
	$.ajax({
		  type: "POST",
		  url: "ajax/model_select.php",
		  data: "&count_id="+a,
		  success: function(html){		
		  $("#model_sel").html(html);//Calling the responce IDs
		  }
	});
}







function get_st_name(a,b){
	$.ajax({
		  type: "POST",
		  url: "ajax/state_select.php",
		  data: "&country_id="+a,
		  success: function(html){		
		  $("#state_sel").html(html);//Calling the responce IDs
		  }
	});
}


function get_prost_name(a,b){
	$.ajax({
		  type: "POST",
		  url: "ajax/state_select.php",
		  data: "&country_id="+a,
		  success: function(html){		
		  $("#state_sel").html(html);//Calling the responce IDs
		  }
	});
}



function get_city_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/city_select.php",
		  data: "&state_id="+a,
		  success: function(html){			
			$("#city_select").html(html);//Calling the responce IDs
		  }
	});
}


function white_star_1(a,b){
	document.getElementById("r1"+a).style.display = "";
	document.getElementById("rr"+a).style.display = "none";
	document.getElementById("r2"+a).style.display = "none";
	document.getElementById("r3"+a).style.display = "none";
	document.getElementById("r4"+a).style.display = "none";
	document.getElementById("r5"+a).style.display = "none";
	
	n1 = document.getElementById("ns_star_1"+a);
	s1 = document.getElementById("s_star_1"+a);
	
	n1.style.display = "none";
	s1.style.display = "";	
	
	$.ajax({
		  type: "POST",
		  url: "ajax/star_rating.php",
		  data: "&star=1"+"&item="+a+"&sub_cat_id="+b,
		  success: function(html){			
			$("#star_rates_"+a).html(html);		//Calling the responce IDs						
		}
	});
	
}

function white_star_2(a,b){
	document.getElementById("r1"+a).style.display = "none";
	document.getElementById("rr"+a).style.display = "none";
	document.getElementById("r2"+a).style.display = "";
	document.getElementById("r3"+a).style.display = "none";
	document.getElementById("r4"+a).style.display = "none";
	document.getElementById("r5"+a).style.display = "none";
	
	n1 = document.getElementById("ns_star_1"+a);
	s1 = document.getElementById("s_star_1"+a);
	n2 = document.getElementById("ns_star_2"+a);
	s2 = document.getElementById("s_star_2"+a);
	
	n1.style.display = "none";
	s1.style.display = "";
	n2.style.display = "none";
	s2.style.display = "";	
	
	$.ajax({
		  type: "POST",
		  url: "ajax/star_rating.php",
		    data: "&star=1"+"&item="+a+"&sub_cat_id="+b,
		  success: function(html){			
			$("#star_rates_"+a).html(html);			//Calling the responce IDs						
		}
	});
}

function white_star_3(a,b){
	document.getElementById("r1"+a).style.display = "none";
	document.getElementById("rr"+a).style.display = "none";
	document.getElementById("r2"+a).style.display = "none";
	document.getElementById("r3"+a).style.display = "";
	document.getElementById("r4"+a).style.display = "none";
	document.getElementById("r5"+a).style.display = "none";
	
	n1 = document.getElementById("ns_star_1"+a);
	s1 = document.getElementById("s_star_1"+a);
	n2 = document.getElementById("ns_star_2"+a);
	s2 = document.getElementById("s_star_2"+a);
	n3 = document.getElementById("ns_star_3"+a);
	s3 = document.getElementById("s_star_3"+a);
	
	n1.style.display = "none";
	s1.style.display = "";
	n2.style.display = "none";
	s2.style.display = "";	
	n3.style.display = "none";
	s3.style.display = "";
	
	$.ajax({
		  type: "POST",
		  url: "ajax/star_rating.php",
		   data: "&star=1"+"&item="+a+"&sub_cat_id="+b,
		  success: function(html){			
			$("#star_rates_"+a).html(html);			//Calling the responce IDs						
		}
	});
}

function select_star_4(a,b){
	document.getElementById("r1"+a).style.display = "none";
	document.getElementById("rr"+a).style.display = "none";
	document.getElementById("r2"+a).style.display = "none";
	document.getElementById("r3"+a).style.display = "none";
	document.getElementById("r4"+a).style.display = "";
	document.getElementById("r5"+a).style.display = "none";
	
	n5 = document.getElementById("ns_star_5"+a);
	s5 = document.getElementById("s_star_5"+a);
	n5.style.display = "";
	s5.style.display = "none";	
	
	$.ajax({
		  type: "POST",
		  url: "ajax/star_rating.php",
		   data: "&star=1"+"&item="+a+"&sub_cat_id="+b,
		  success: function(html){			
			$("#star_rates_"+a).html(html);			//Calling the responce IDs						
		}
	});
}

function white_star_4(a,b){
	document.getElementById("r1"+a).style.display = "none";
	document.getElementById("rr"+a).style.display = "none";
	document.getElementById("r2"+a).style.display = "none";
	document.getElementById("r3"+a).style.display = "none";
	document.getElementById("r4"+a).style.display = "";
	document.getElementById("r5"+a).style.display = "none";
	
	n1 = document.getElementById("ns_star_1"+a);
	s1 = document.getElementById("s_star_1"+a);
	n2 = document.getElementById("ns_star_2"+a);
	s2 = document.getElementById("s_star_2"+a);
	n3 = document.getElementById("ns_star_3"+a);
	s3 = document.getElementById("s_star_3"+a);
	n4 = document.getElementById("ns_star_4"+a);
	s4 = document.getElementById("s_star_4"+a);
	
	n1.style.display = "none";
	s1.style.display = "";
	n2.style.display = "none";
	s2.style.display = "";	
	n3.style.display = "none";
	s3.style.display = "";	
	n4.style.display = "none";
	s4.style.display = "";	
	
	$.ajax({
		  type: "POST",
		  url: "ajax/star_rating.php",
		   data: "&star=1"+"&item="+a+"&sub_cat_id="+b,
		  success: function(html){			
			$("#star_rates_"+a).html(html);			//Calling the responce IDs						
		}
	});
}
function select_star_3(a,b){
	document.getElementById("r1"+a).style.display = "none";
	document.getElementById("rr"+a).style.display = "none";
	document.getElementById("r2"+a).style.display = "none";
	document.getElementById("r3"+a).style.display = "";
	document.getElementById("r4"+a).style.display = "none";
	document.getElementById("r5"+a).style.display = "none";
	
	n4 = document.getElementById("ns_star_4"+a);
	s4 = document.getElementById("s_star_4"+a);
	n5 = document.getElementById("ns_star_5"+a);
	s5 = document.getElementById("s_star_5"+a);
	
	n5.style.display = "";
	s5.style.display = "none";	
	n4.style.display = "";
	s4.style.display = "none";	
	
	$.ajax({
		  type: "POST",
		  url: "ajax/star_rating.php",
		  data: "&star=1"+"&item="+a+"&sub_cat_id="+b,
		  success: function(html){			
			$("#star_rates_"+a).html(html);			//Calling the responce IDs						
		}
	});
}
function white_star_5(a,b){
	document.getElementById("r1"+a).style.display = "none";
	document.getElementById("rr"+a).style.display = "none";
	document.getElementById("r2"+a).style.display = "none";
	document.getElementById("r3"+a).style.display = "none";
	document.getElementById("r4"+a).style.display = "none";
	document.getElementById("r5"+a).style.display = "";
	
	n1 = document.getElementById("ns_star_1"+a);
	s1 = document.getElementById("s_star_1"+a);
	n2 = document.getElementById("ns_star_2"+a);
	s2 = document.getElementById("s_star_2"+a);
	n3 = document.getElementById("ns_star_3"+a);
	s3 = document.getElementById("s_star_3"+a);
	n4 = document.getElementById("ns_star_4"+a);
	s4 = document.getElementById("s_star_4"+a);
	n5 = document.getElementById("ns_star_5"+a);
	s5 = document.getElementById("s_star_5"+a);
	
	n1.style.display = "none";
	s1.style.display = "";
	n2.style.display = "none";
	s2.style.display = "";	
	n3.style.display = "none";
	s3.style.display = "";	
	n4.style.display = "none";
	s4.style.display = "";	
	n5.style.display = "none";
	s5.style.display = "";	
	
	$.ajax({
		  type: "POST",
		  url: "ajax/star_rating.php",
		  data: "&star=1"+"&item="+a+"&sub_cat_id="+b,
		  success: function(html){			
			$("#star_rates_"+a).html(html);			//Calling the responce IDs						
		}
	});
}

function select_star_2(a,b){
	document.getElementById("r1"+a).style.display = "none";
	document.getElementById("rr"+a).style.display = "none";
	document.getElementById("r2"+a).style.display = "";
	document.getElementById("r3"+a).style.display = "none";
	document.getElementById("r4"+a).style.display = "none";
	document.getElementById("r5"+a).style.display = "none";
	
	n3 = document.getElementById("ns_star_3"+a);
	s3 = document.getElementById("s_star_3"+a);
	n4 = document.getElementById("ns_star_4"+a);
	s4 = document.getElementById("s_star_4"+a);
	n5 = document.getElementById("ns_star_5"+a);
	s5 = document.getElementById("s_star_5"+a);
	
	n3.style.display = "";
	s3.style.display = "none";	
	n4.style.display = "";
	s4.style.display = "none";	
	n5.style.display = "";
	s5.style.display = "none";	
	
	$.ajax({
		  type: "POST",
		  url: "ajax/star_rating.php",
		  data: "&star=1"+"&item="+a+"&sub_cat_id="+b,
		  success: function(html){			
			$("#star_rates_"+a).html(html);			//Calling the responce IDs						
		}
	});
}
function select_star_1(a,b){
	document.getElementById("r1"+a).style.display = "";
	document.getElementById("rr"+a).style.display = "none";
	document.getElementById("r2"+a).style.display = "none";
	document.getElementById("r3"+a).style.display = "none";
	document.getElementById("r4"+a).style.display = "none";
	document.getElementById("r5"+a).style.display = "none";
	
	n2 = document.getElementById("ns_star_2"+a);
	s2 = document.getElementById("s_star_2"+a);
	n3 = document.getElementById("ns_star_3"+a);
	s3 = document.getElementById("s_star_3"+a);
	n4 = document.getElementById("ns_star_4"+a);
	s4 = document.getElementById("s_star_4"+a);
	n5 = document.getElementById("ns_star_5"+a);
	s5 = document.getElementById("s_star_5"+a);
	
	n2.style.display = "";
	s2.style.display = "none";
	n3.style.display = "";
	s3.style.display = "none";	
	n4.style.display = "";
	s4.style.display = "none";	
	n5.style.display = "";
	s5.style.display = "none";	
	
	
	$.ajax({
		  type: "POST",
		  url: "ajax/star_rating.php",
		  data: "&star=1"+"&item="+a+"&sub_cat_id="+b,
		  success: function(html){			
			$("#star_rates_"+a).html(html);			//Calling the responce IDs						
		}
	});
}
function item_star(a,b,c){
	n1 = document.getElementById("wish_rate");
	n1.style.display = "";
	$.ajax({
		  type: "POST",
		  url: "ajax/save_rating.php",
		  data: "&stars="+a+"&item="+b+"&sub_cat_id="+c,
		  success: function(html){			
			$("#wish_rate").html(html);		//Calling the responce IDs						
		}
	});
}
function item_star_count(a,b){
	$.ajax({
		  type: "POST",
		  url: "ajax/return_star_count.php",
		  data:"&item_id="+a+"&sub_cat_id="+b,
		  success: function(html){			
			$("#ret_st_count").html(html);		//Calling the responce IDs						
		}
	});
}
function close_wish_box(){
	n1 = document.getElementById("wish_rate");
	n1.style.display = "none";
}

function def_rate(){
	alert("Please select one of the Code Rating options.")
}


function get_apart_state_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/state_aparts_select.php",
		  data: "&country_id="+a,
		  success: function(html){		
		  $("#apart_state_sel").html(html);//Calling the responce IDs
		  }
	});
}


function get_apart_city_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/city_aparts_select.php",
		  data: "&state_id="+a,
		  success: function(html){		
		  $("#apart_city_select").html(html);//Calling the responce IDs
		  }
	});
}



	function get_aparts_state_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/state_aparts1_select.php",
		  data: "&country_id="+a,
		  success: function(html){		
		  $("#aparts_state_sel").html(html);//Calling the responce IDs
		  }
	});
}




	function get_aparts_city_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/city_aparts1_select.php",
		  data: "&state_id="+a,
		  success: function(html){		
		  $("#aparts_city_sel").html(html);//Calling the responce IDs
		  }
	});
}


function get_user_state_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/state_user_select.php",
		  data: "&country_id="+a,
		  success: function(html){		
		  $("#user_state_sel").html(html);//Calling the responce IDs
		  }
	});
}


function ad_state_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/ad_state_select.php",
		  data: "&country_id="+a,
		  success: function(html){		
		  $("#ad_state_sel").html(html);//Calling the responce IDs
		  }
	});
}



function get_uset_city_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/city_user_select.php",
		  data: "&state_id="+a,
		  success: function(html){		
		  $("#user_city_sel").html(html);//Calling the responce IDs
		  }
	});
}

function ad_get_city_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/ad_get_city_name.php",
		  data: "&state_id="+a,
		  success: function(html){		
		  $("#ad_city_sel").html(html);//Calling the responce IDs
		  }
	});
}



function get_dvd_variety(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/dvd_variety_select.php",
		  data: "&dvd_type_id="+a,
		  success: function(html){		
		  $("#dvd_variety_sel").html(html);//Calling the responce IDs
		  }
	});
}


function get_com_variety(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/computer_variety_select.php",
		  data: "&dvd_type_id="+a,
		  success: function(html){		
		  $("#com_variety_sel").html(html);//Calling the responce IDs
		  }
	});
}

function get_camara_variety(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/camara_variety_select.php",
		  data: "&camara_type_id="+a,
		  success: function(html){		
		  $("#camara_variety_sel").html(html);//Calling the responce IDs
		  }
	});
}

function get_mobile_variety(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/mobile_variety_select.php",
		  data: "&mob_type_id="+a,
		  success: function(html){		
		  $("#mob_variety_sel").html(html);//Calling the responce IDs
		  }
	});
}

function get_clothing_variety(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/clothing_variety_select.php",
		  data: "&clo_type_id="+a,
		  success: function(html){		
		  $("#clo_variety_sel").html(html);//Calling the responce IDs
		  }
	});
}

function get_babies_variety(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/babies_variety_select.php",
		  data: "&baby_type_id="+a,
		  success: function(html){		
		  $("#clo_variety_sel").html(html);//Calling the responce IDs
		  }
	});
}


function get_pets_variety(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/pets_variety.php",
		  data: "&pet_type_id="+a,
		  success: function(html){		
		  $("#pet_variety_sel").html(html);//Calling the responce IDs
		  }
	});
}

function get_jw_variety(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/jw_variety.php",
		  data: "&jw_type_id="+a,
		  success: function(html){		
		  $("#jw_variety_sel").html(html);//Calling the responce IDs
		  }
	});
}




function aparts_rent_validate(){	

	var aparts_rent_country=document.getElementById("aparts_rent_country");
	var aparts_rent_state=document.getElementById("aparts_rent_state");
	var aparts_rent_city=document.getElementById("aparts_rent_city");
	var aparts_rent_address=document.getElementById("aparts_rent_address");
	var aparts_rent_furnished=document.getElementById("aparts_rent_furnished");
	var bedrooms1=document.getElementById("bedrooms1");
	var bathrooms1=document.getElementById("bathrooms1");
	var pets1=document.getElementById("pets1");
	var broker_fee1=document.getElementById("broker_fee1");
	var square_meters1=document.getElementById("square_meters1");
	var aparts_rent_title=document.getElementById("aparts_rent_title");
	var aparts1_price=document.getElementById("aparts1_price");
	var pub=document.getElementById("pub");
	

	if(aparts_rent_country.selectedIndex==0){
	alert("Please select the country");
	aparts_rent_country.focus();
	return false;
	}
	
	else if(aparts_rent_state.selectedIndex==0){
	alert("Please select the state");
	aparts_rent_state.focus();
	return false;
	}
	else if(aparts_rent_city.selectedIndex==0){
	alert("Please select the city");
	aparts_rent_city.focus();
	return false;
	}
	
	else if(aparts_rent_address.value==''){
	alert("Please Enter Ad address");
	aparts_rent_address.focus();
	return false;
	}
	
	else if(aparts_rent_furnished.selectedIndex==0){
	alert("Please select furnished");
	aparts_rent_furnished.focus();
	return false;
	}
	else if(bedrooms1.selectedIndex==0){
	alert("Please select bedrooms");
	bedrooms1.focus();
	return false;
	}
	else if(bedrooms1.selectedIndex==0){
	alert("Please select bedrooms");
	bedrooms1.focus();
	return false;
	}
	else if(bathrooms1.selectedIndex==0){
	alert("Please select bathrooms");
	bathrooms1.focus();
	return false;
	}
	else if(pets1.selectedIndex==0){
	alert("Please select the pets");
	pets1.focus();
	return false;
	}
	else if(broker_fee1.selectedIndex==0){
	alert("Please select broker_fee");
	broker_fee1.focus();
	return false;
	}
	else if(square_meters1.value==''){
	alert("Please Enter square meters");
	square_meters1.focus();
	return false;
	}
	else if(aparts_rent_title.value==''){
	alert("Please Enter Ad title");
	aparts_rent_title.focus();
	return false;
	}
	

	
	else if(aparts1_price.value==''){
	alert("Please Enter Ad Price");
	aparts1_price.focus();
	return false;
	}
	else if(pub.selectedIndex==0){
	alert("Please select Publish Ad");
	pub.focus();
	return false;
	}
	
	/*else if((pay.checked==false)&&(pay.checked==false)){	
	alert("Please choose the payment");
	pay.focus();
	return false;	
	}*/
	
	else {
			return true;
		}
}







function aparts_sale_validate(){	

	var aparts_sale_country=document.getElementById("aparts_sale_country");
	var aparts_sale_state=document.getElementById("aparts_sale_state");
	var aparts_sale_city=document.getElementById("aparts_sale_city");
	var ad_address=document.getElementById("ad_address");
	var furnished=document.getElementById("furnished");
	var bedrooms=document.getElementById("bedrooms");
	var bathrooms=document.getElementById("bathrooms");
	var pets=document.getElementById("pets");
	var broker_fee=document.getElementById("broker_fee");
	var square_meters=document.getElementById("square_meters");
	var aparts_rent_title=document.getElementById("aparts_rent_title");
	
	var aparts_price=document.getElementById("aparts_price");
	var pub=document.getElementById("pub");
	
	

	if(aparts_sale_country.selectedIndex==0){
	alert("Please select the country");
	aparts_sale_country.focus();
	return false;
	}
	
	else if(aparts_sale_state.selectedIndex==0){
	alert("Please select the state");
	aparts_sale_state.focus();
	return false;
	}
	else if(aparts_sale_city.selectedIndex==0){
	alert("Please select the city");
	aparts_sale_city.focus();
	return false;
	}
	
	else if(ad_address.value==''){
	alert("Please Enter Ad address");
	ad_address.focus();
	return false;
	}
	
	else if(furnished.selectedIndex==0){
	alert("Please select the furnished");
	furnished.focus();
	return false;
	}
	else if(bedrooms.selectedIndex==0){
	alert("Please select the bedrooms");
	bedrooms.focus();
	return false;
	}
	else if(bathrooms.selectedIndex==0){
	alert("Please select the bathrooms");
	bedrooms.focus();
	return false;
	}
	
	else if(pets.selectedIndex==0){
	alert("Please select the pets");
	pets.focus();
	return false;
	}
	else if(broker_fee.selectedIndex==0){
	alert("Please select broker_fee");
	broker_fee.focus();
	return false;
	}
	else if(square_meters.value==''){
	alert("Please Enter square meters");
	square_meters.focus();
	return false;
	}
	else if(ad_title.value==''){
	alert("Please Enter Ad title");
	ad_title.focus();
	return false;
	}

	else if(aparts_price.value==''){
	alert("Please Enter Ad Price");
	aparts_price.focus();
	return false;
	}
	else if(pub.selectedIndex==0){
	alert("Please select Publish Ad");
	pub.focus();
	return false;
	}
	

	/*else if((pay.checked==false)&&(pay.checked==false)){	
	alert("Please choose the payment");
	pay.focus();
	return false;	
	}*/
	
	else {
			return true;
		}
}




function rent_rooms_validate(){	

	var aparts_rent_country=document.getElementById("aparts_rent_country");
	var aparts_rent_state=document.getElementById("aparts_rent_state");
	var aparts_rent_city=document.getElementById("aparts_rent_city");
	var rooms_rent_address=document.getElementById("rooms_rent_address");
	var rooms_rent_title=document.getElementById("rooms_rent_title");
	
	var rooms_price=document.getElementById("rooms_price");
	var pub=document.getElementById("pub");
	

	if(aparts_rent_country.selectedIndex==0){
	alert("Please select the country");
	aparts_rent_country.focus();
	return false;
	}
	
	else if(aparts_rent_state.selectedIndex==0){
	alert("Please select the state");
	aparts_rent_state.focus();
	return false;
	}
	else if(aparts_rent_city.selectedIndex==0){
	alert("Please select the city");
	aparts_rent_city.focus();
	return false;
	}
	
	else if(rooms_rent_address.value==''){
	alert("Please Enter Ad address");
	rooms_rent_address.focus();
	return false;
	}
	
	else if(rooms_rent_title.value==''){
	alert("Please Enter Ad title");
	rooms_rent_title.focus();
	return false;
	}
	
	else if(rooms_price.value==''){
	alert("Please Enter Ad Price");
	rooms_price.focus();
	return false;
	}
	else if(pub.selectedIndex==0){
	alert("Please select Publish Ad");
	pub.focus();
	return false;
	}
	
	/*else if((pay.checked==false)&&(pay.checked==false)){	
	alert("Please choose the payment");
	pay.focus();
	return false;	
	}*/
	
	else {
			return true;
		}
}



function housing_swap_validate(){	

	var aparts_rent_country=document.getElementById("aparts_rent_country");
	var aparts_rent_state=document.getElementById("aparts_rent_state");
	var aparts_rent_city=document.getElementById("aparts_rent_city");
	var rooms_rent_address=document.getElementById("rooms_rent_address");
	var rooms_rent_title=document.getElementById("rooms_rent_title");
	
	var rooms_price=document.getElementById("rooms_price");
	var pub=document.getElementById("pub");
	

	if(aparts_rent_country.selectedIndex==0){
	alert("Please select the country");
	aparts_rent_country.focus();
	return false;
	}
	
	else if(aparts_rent_state.selectedIndex==0){
	alert("Please select the state");
	aparts_rent_state.focus();
	return false;
	}
	else if(aparts_rent_city.selectedIndex==0){
	alert("Please select the city");
	aparts_rent_city.focus();
	return false;
	}
	
	else if(rooms_rent_address.value==''){
	alert("Please Enter Ad address");
	rooms_rent_address.focus();
	return false;
	}
	
	else if(rooms_rent_title.value==''){
	alert("Please Enter Ad title");
	rooms_rent_title.focus();
	return false;
	}
	
	else if(rooms_price.value==''){
	alert("Please Enter Ad Price");
	rooms_price.focus();
	return false;
	}
	else if(pub.selectedIndex==0){
	alert("Please select Publish Ad");
	pub.focus();
	return false;
	}
	
	/*else if((pay.checked==false)&&(pay.checked==false)){	
	alert("Please choose the payment");
	pay.focus();
	return false;	
	}*/
	
	else {
			return true;
		}
}





function dvd_validate(){	

	var dvd_type=document.getElementById("dvd_type");
	var dvd_variety=document.getElementById("dvd_variety");
	var dvd_title=document.getElementById("dvd_title");
	var dvd_price=document.getElementById("dvd_price");
	var pub=document.getElementById("pub");
	
	if(dvd_type.selectedIndex==0){
	alert("Please select the type");
	dvd_type.focus();
	return false;
	}
	
	else if(dvd_variety.selectedIndex==0){
	alert("Please select the variety");
	dvd_variety.focus();
	return false;
	}
	else if(dvd_title.value==''){
	alert("Please Enter the ad title");
	dvd_title.focus();
	return false;
	}
	
	else if(dvd_price.value==''){
	alert("Please Enter the price");
	dvd_price.focus();
	return false;
	}
	else if(pub.selectedIndex==0){
	alert("Please select the public Ad");
	pub.focus();
	return false;
	}
	
	
else {
			return true;
		}
}



function com_hard_validate(){	

	var com_har_type=document.getElementById("com_har_type");
	var com_har_variety=document.getElementById("com_har_variety");
	var com_har_title=document.getElementById("com_har_title");
	var com_har_price=document.getElementById("com_har_price");
	var pub=document.getElementById("pub");
	
	if(com_har_type.selectedIndex==0){
	alert("Please select the type");
	com_har_type.focus();
	return false;
	}
	
	else if(com_har_variety.selectedIndex==0){
	alert("Please select the variety");
	com_har_variety.focus();
	return false;
	}
	
	else if(com_har_title.value==''){
	alert("Please Enter the ad title");
	com_har_title.focus();
	return false;
	}
	
	else if(com_har_price.value==''){
	alert("Please Enter the price");
	com_har_price.focus();
	return false;
	}
	
	else if(pub.selectedIndex==0){
	alert("Please select the public Ad");
	pub.focus();
	return false;
	}
	
	else {
	return true;
	}
}




function camara_validate(){	

	var camara_type=document.getElementById("camara_type");
	var camara_variety=document.getElementById("camara_variety");
	var camara_title=document.getElementById("camara_title");
	var camara_price=document.getElementById("camara_price");
	var pub=document.getElementById("pub");
	
	if(camara_type.selectedIndex==0){
	alert("Please select the type");
	camara_type.focus();
	return false;
	}
	
	else if(camara_variety.selectedIndex==0){
	alert("Please select the variety");
	camara_variety.focus();
	return false;
	}
	
	else if(camara_title.value==''){
	alert("Please Enter the ad title");
	camara_title.focus();
	return false;
	}
	
	else if(camara_price.value==''){
	alert("Please Enter the price");
	camara_price.focus();
	return false;
	}
	
	else if(pub.selectedIndex==0){
	alert("Please select the public Ad");
	pub.focus();
	return false;
	}
	
	else {
	return true;
	}
}



function mobile_phones_validate(){	

	var mobile_type=document.getElementById("mobile_type");
	var mobile_variety=document.getElementById("mobile_variety");
	var mobile_title=document.getElementById("mobile_title");
	var mobile_price=document.getElementById("mobile_price");
	var pub=document.getElementById("pub");
	
	
	if(mobile_type.selectedIndex==0){
	alert("Please select the type");
	mobile_type.focus();
	return false;
	}
	
	else if(mobile_variety.selectedIndex==0){
	alert("Please select the variety");
	mobile_variety.focus();
	return false;
	}
	
	else if(mobile_title.value==''){
	alert("Please Enter the ad title");
	mobile_title.focus();
	return false;
	}
	
	else if(camara_price.value==''){
	alert("Please Enter the price");
	camara_price.focus();
	return false;
	}
	
	else if(pub.selectedIndex==0){
	alert("Please select the public Ad");
	pub.focus();
	return false;
	}
	
	else {
	return true;
	}
}


function clothig_validate(){	

	var clothing_type=document.getElementById("clothing_type");
	var clothig_variety=document.getElementById("clothig_variety");
	var clothing_title=document.getElementById("clothing_title");
	var clothing_price=document.getElementById("clothing_price");
	var pub=document.getElementById("pub");
	
	
	if(clothing_type.selectedIndex==0){
	alert("Please select the type");
	clothing_type.focus();
	return false;
	}
	
	else if(clothig_variety.selectedIndex==0){
	alert("Please select the variety");
	clothig_variety.focus();
	return false;
	}
	
	else if(clothing_title.value==''){
	alert("Please Enter the ad title");
	clothing_title.focus();
	return false;
	}
	
	else if(clothing_price.value==''){
	alert("Please Enter the price");
	clothing_price.focus();
	return false;
	}
	
	else if(pub.selectedIndex==0){
	alert("Please select the public Ad");
	pub.focus();
	return false;
	}
	
	else {
	return true;
	}
}


function babies_validate(){	

	var babies_type=document.getElementById("babies_type");
	var babies_variety=document.getElementById("babies_variety");
	var babies_title=document.getElementById("babies_title");
	var babies_price=document.getElementById("babies_price");
	var pub=document.getElementById("pub");
	
	
	if(babies_type.selectedIndex==0){
	alert("Please select the type");
	babies_type.focus();
	return false;
	}
	
	else if(babies_variety.selectedIndex==0){
	alert("Please select the variety");
	babies_variety.focus();
	return false;
	}
	
	else if(babies_title.value==''){
	alert("Please Enter the ad title");
	babies_title.focus();
	return false;
	}
	
	else if(babies_price.value==''){
	alert("Please Enter the price");
	babies_price.focus();
	return false;
	}
	
	else if(pub.selectedIndex==0){
	alert("Please select the public Ad");
	pub.focus();
	return false;
	}
	
	else {
	return true;
	}
}


function home_fur_gar_validate(){	

	var hfg_type=document.getElementById("hfg_type");
	var hfg_title=document.getElementById("hfg_title");
	var babies_price=document.getElementById("babies_price");
	var pub=document.getElementById("pub");
	
	
	if(hfg_type.selectedIndex==0){
	alert("Please select the type");
	hfg_type.focus();
	return false;
	}
	
	else if(hfg_title.value==''){
	alert("Please Enter the ad title");
	hfg_title.focus();
	return false;
	}
	
	else if(hfg_price.value==''){
	alert("Please Enter the price");
	hfg_price.focus();
	return false;
	}
	
	else if(pub.selectedIndex==0){
	alert("Please select the public Ad");
	pub.focus();
	return false;
	}
	
	else {
	return true;
	}
}


function home_fur_gar_validate(){	

	var hfg_type=document.getElementById("hfg_type");
	var hfg_title=document.getElementById("hfg_title");
	var babies_price=document.getElementById("babies_price");
	var pub=document.getElementById("pub");
	
	
	if(hfg_type.selectedIndex==0){
	alert("Please select the type");
	hfg_type.focus();
	return false;
	}
	
	else if(hfg_title.value==''){
	alert("Please Enter the ad title");
	hfg_title.focus();
	return false;
	}
	
	else if(hfg_price.value==''){
	alert("Please Enter the price");
	hfg_price.focus();
	return false;
	}
	
	else if(pub.selectedIndex==0){
	alert("Please select the public Ad");
	pub.focus();
	return false;
	}
	
	else {
	return true;
	}
}



function pets_validate(){	

	var pets_type=document.getElementById("pets_type");
	var pet_variety=document.getElementById("pet_variety");
	var hfg_title=document.getElementById("hfg_title");
	var babies_price=document.getElementById("babies_price");
	var pub=document.getElementById("pub");
	
	
	if(pets_type.selectedIndex==0){
	alert("Please select the type");
	pets_type.focus();
	return false;
	}
	
	if(pet_variety.selectedIndex==0){
	alert("Please select the breed");
	pet_variety.focus();
	return false;
	}
	
	else if(pets_title.value==''){
	alert("Please Enter the ad title");
	pets_title.focus();
	return false;
	}
	
	else if(pets_price.value==''){
	alert("Please Enter the price");
	pets_price.focus();
	return false;
	}
	
	else if(pub.selectedIndex==0){
	alert("Please select the public Ad");
	pub.focus();
	return false;
	}
	
	else {
	return true;
	}
}

function jw_validate(){	

	var jw_type=document.getElementById("jw_type");
	var jw_variety=document.getElementById("jw_variety");
	var jw_title=document.getElementById("jw_title");
	var babies_price=document.getElementById("babies_price");
	var pub=document.getElementById("pub");
	
	
	if(jw_type.selectedIndex==0){
	alert("Please select the type");
	jw_type.focus();
	return false;
	}
	
	if(jw_variety.selectedIndex==0){
	alert("Please select the Object/Variety");
	jw_variety.focus();
	return false;
	}
	
	else if(jw_title.value==''){
	alert("Please Enter the ad title");
	jw_title.focus();
	return false;
	}
	
	else if(jw_price.value==''){
	alert("Please Enter the price");
	jw_price.focus();
	return false;
	}
	
	else if(pub.selectedIndex==0){
	alert("Please select the public Ad");
	pub.focus();
	return false;
	}
	
	else {
	return true;
	}
}




function new1(){
	document.getElementById('new1').className='deatl_view_sml_tab';
	document.getElementById('new2').className='deatl_view_sml_tab_1';
	document.getElementById('new3').className='deatl_view_sml_tab_2';
	document.getElementById('new4').className='deatl_view_sml_tab_3';
	
	document.getElementById("image_div1").style.display = "";
	document.getElementById("image_div2").style.display = "none";		
	document.getElementById("image_div3").style.display = "none";
	document.getElementById("image_div4").style.display = "none";
	
}



function new2(){
	document.getElementById('new1').className='deatl_view_sml_tab_1';
	document.getElementById('new2').className='deatl_view_sml_tab';
	document.getElementById('new3').className='deatl_view_sml_tab_2';
	document.getElementById('new4').className='deatl_view_sml_tab_3';
	
	document.getElementById("image_div1").style.display = "none";
	document.getElementById("image_div2").style.display = "";		
	document.getElementById("image_div3").style.display = "none";
	document.getElementById("image_div4").style.display = "none";
	
}

function new3(){
	document.getElementById('new1').className='deatl_view_sml_tab_1';
	document.getElementById('new2').className='deatl_view_sml_tab_2';
	document.getElementById('new3').className='deatl_view_sml_tab_2_s';	
	document.getElementById('new4').className='deatl_view_sml_tab_3';	
	
	document.getElementById("image_div1").style.display = "none";
	document.getElementById("image_div2").style.display = "none";		
	document.getElementById("image_div3").style.display = "";
	document.getElementById("image_div4").style.display = "none";
	
}

function new4(){
	document.getElementById('new1').className='deatl_view_sml_tab_1';
	document.getElementById('new2').className='deatl_view_sml_tab_2';
	document.getElementById('new3').className='deatl_view_sml_tab_2';	
	document.getElementById('new4').className='deatl_view_sml_tab_3_ss';	
	
	document.getElementById("image_div1").style.display = "none";
	document.getElementById("image_div2").style.display = "none";		
	document.getElementById("image_div3").style.display = "none";
	document.getElementById("image_div4").style.display = "";
	
}





function user_register_validate(){	

	var first_name=document.getElementById("first_name");
	var last_name=document.getElementById("last_name");
	var e=document.getElementById("email_id");
	var em=e.value.replace(/^\s+|\s+$/g,"");
	var mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var p=document.getElementById("pass");
	var er=document.getElementById("re_pass");
	var iam=document.getElementById("iam");
	var day_lo=document.getElementById("day_lo");
	var month_lo=document.getElementById("month_lo");
	var year_lo=document.getElementById("year_lo");
	
	if(first_name.value==''){
	alert("Please Enter the frst name");
	first_name.focus();
	return false;
	}
	if(last_name.value==''){
	alert("Please Enter the last name");
	last_name.focus();
	return false;
	}
	else if(email_id.value==""){	
	alert("Please enter your email");
	email_id.focus();
	return false;
	}
	
	else if(!em.match(mail)){
	alert("Please Enter valid Email-Id");
	e.focus();
	return false;
	}
	else if(pass.value==""){	
	alert("Please enter your password");
	pass.focus();
	return false;
	}
	else if(re_pass.value==""){	
	alert("Please re_enter your password");
	re_pass.focus();
	return false;
	}
	else if(er.value!=p.value){	
	alert("Password not match");
	er.focus();
	return false;
	}
	else if(iam.selectedIndex==0){
	alert("Please select the iam");
	iam.focus();
	return false;
	}
	else if(day_lo.selectedIndex==0){
	alert("Please select the day");
	day_lo.focus();
	return false;
	}
	else if(month_lo.selectedIndex==0){
	alert("Please select the month");
	month_lo.focus();
	return false;
	}
	else if(year_lo.selectedIndex==0){
	alert("Please select the year");
	year_lo.focus();
	return false;
	}
	
	else {
			return true;
		}
	
}

function fav_add(a,b,c){
	
	$.ajax({
		type: "POST",
		url: "ajax/fav_pro.php",	//Calling the ajax process php url	
		data: "&ses_id="+a+"&list_id="+b+"&sub_cat_id="+c,			
		success: function(html){					
			$("#fav_list").html(html);				//Calling the responce IDs						
		}
	});
	document.getElementById("share_id").style.display = "none";	
	document.getElementById("fav_list").style.display = "";	
}

function share_add(){
	
	document.getElementById("share_id").style.display = "";	
	
	document.getElementById("fav_list").style.display = "none";	
	
}

function send_mail_list(a,b,c){
	
	d=document.getElementById("share_email_id").value;	
	
	$.ajax({
		type: "POST",
		url: "ajax/send_mail_list.php",	//Calling the ajax process php url	
		data: "&ses_id="+a+"&list_id="+b+"&sub_cat_id="+c+"&email_id123="+d,			
		success: function(html){					
			$("#send_list").html(html);				//Calling the responce IDs						
		}
	});
	
}



function my_car_active(a,b,c,d){
	
	$.ajax({
		type: "POST",
		url: "ajax/my_car_active.php",	//Calling the ajax process php url	
		data: "&ses_id="+a+"&list_id="+b+"&sub_cat_id="+c+"&cond="+d,			
		success: function(html){					
			$("#my_car_"+c+"_"+b).html(html);				//Calling the responce IDs						
		}
	});
	
	
}

function my_car_active12(a,b,c){
	document.getElementById("asdad_"+c+"_"+b).style.display = "";
	$.ajax({
		type: "POST",
		url: "ajax/my_car_active1.php",	//Calling the ajax process php url	
		data: "&ses_id="+a+"&list_id="+b+"&sub_cat_id="+c,			
		success: function(html){					
			$("#asdad_"+c+"_"+b).html(html);				//Calling the responce IDs						
		}
	});
	document.getElementById("my_car_"+c+"_"+b).style.display = "none";
	
}





function get_model_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/sea_model_select.php",
		  data: "&get_model_id="+a,
		  success: function(html){			
			$("#sea_model_sel").html(html);//Calling the responce IDs
		  }
	});
}


function get_elect_model_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/sea_elect_model_select.php",
		  data: "&get_model_id="+a,
		  success: function(html){			
			$("#sea_elec_model_sel").html(html);//Calling the responce IDs
		  }
	});
}

function get_home_model_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/get_home_model_name.php",
		  data: "&get_model_id="+a,
		  success: function(html){			
			$("#sea_home_model_sel").html(html);//Calling the responce IDs
		  }
	});
}

function get_pro_model_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/get_pro_model_name.php",
		  data: "&get_model_id="+a,
		  success: function(html){			
			$("#sea_pro_model_sel").html(html);//Calling the responce IDs
		  }
	});
}



function home_needs_sel(){
	document.getElementById("auto_mob_sel_id").style.display = "none";
	document.getElementById("auto_mob_desel").style.display = "";
	document.getElementById("home_need_sel_id").style.display = "";
	document.getElementById("home_need_de_sel_id").style.display = "none";
	document.getElementById("electronic_sel_id").style.display = "none";
	document.getElementById("auto_mob_desel").style.display = "";
	document.getElementById("electronic_de_sel_id").style.display = "";
	document.getElementById("Properties_sel_id").style.display = "none";
	document.getElementById("Properties_de_sel_id").style.display = "";
	document.getElementById("home_need").style.display = "";
	document.getElementById("auto_mo").style.display = "none";
	document.getElementById("electronic").style.display = "none";
	document.getElementById("properties_123").style.display = "none";
	
}


function auto_mobile_sel(){
	document.getElementById("home_need_sel_id").style.display = "none";
	document.getElementById("electronic_sel_id").style.display = "none";
	document.getElementById("Properties_sel_id").style.display = "none";
	document.getElementById("auto_mob_desel").style.display = "none";
	document.getElementById("auto_mob_desel").style.display = "none";
	document.getElementById("auto_mob_sel_id").style.display = "";
	document.getElementById("home_need_de_sel_id").style.display = "";
	document.getElementById("electronic_de_sel_id").style.display = "";
	document.getElementById("Properties_de_sel_id").style.display = "";
	document.getElementById("home_need").style.display = "none";
	document.getElementById("auto_mo").style.display = "";
	document.getElementById("electronic").style.display = "none";
	document.getElementById("properties_123").style.display = "none";
	
}


function electroni_sel(){
	document.getElementById("auto_mob_sel_id").style.display = "none";
	document.getElementById("home_need_sel_id").style.display = "none";
	document.getElementById("electronic_de_sel_id").style.display = "none";
	document.getElementById("Properties_sel_id").style.display = "none";
	document.getElementById("electronic_sel_id").style.display = "";
	document.getElementById("auto_mob_desel").style.display = "";
	document.getElementById("electronic_sel_id").style.display = "";
	document.getElementById("home_need_de_sel_id").style.display = "";
	document.getElementById("Properties_de_sel_id").style.display = "";
	
	document.getElementById("home_need").style.display = "none";
	document.getElementById("auto_mo").style.display = "none";
	document.getElementById("electronic").style.display = "";
	document.getElementById("properties_123").style.display = "none";
}


function Properties_sel(){
	document.getElementById("auto_mob_sel_id").style.display = "none";
	document.getElementById("home_need_sel_id").style.display = "none";
	document.getElementById("electronic_sel_id").style.display = "none";
	document.getElementById("Properties_de_sel_id").style.display = "none";
	document.getElementById("Properties_sel_id").style.display = "";
	document.getElementById("auto_mob_desel").style.display = "";
	document.getElementById("home_need_de_sel_id").style.display = "";
	document.getElementById("electronic_de_sel_id").style.display = "";
	
	document.getElementById("home_need").style.display = "none";
	document.getElementById("auto_mo").style.display = "none";
	document.getElementById("electronic").style.display = "none";
	document.getElementById("properties_123").style.display = "";
}



function friend_req(a){	
	a1 = document.getElementById('request'+a);
	b = document.getElementById('request1'+a);	
	a1.style.display="none";
	b.style.display="";
	
	
	     $.ajax({
			type: "POST",
			url: "ajax/friend_req.php",	//Calling the ajax process php url				
			data: "&friend_id=" +a+
				  "&session_id=" + document.getElementById('session_id').value,				  
			success: function(html){				
				$("#request1"+a).html(html);		//Calling the responce IDs				
	 
			}
		});
		
}



function get_search_coun_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/search_state_select.php",
		  data: "&sea_country_id="+a,
		  success: function(html){		
		  $("#search_state_sel").html(html);//Calling the responce IDs
		  }
	});
}


function get_search_city_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/search_city_select.php",
		  data: "&sea_state_id="+a,
		  success: function(html){		
		  $("#search_city_sel").html(html);//Calling the responce IDs
		  }
	});
}


function prof_search_coun_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/prof_search_state_select.php",
		  data: "&sea_country_id="+a,
		  success: function(html){		
		  $("#prof_search_state_sel").html(html);//Calling the responce IDs
		  }
	});
}

function prof_search_city_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/prof_search_city_select.php",
		  data: "&sea_state_id="+a,
		  success: function(html){		
		  $("#prof_search_city_sel").html(html);//Calling the responce IDs
		  }
	});
}


function auto_get_search_coun_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/auto_search_state_select.php",
		  data: "&sea_country_id="+a,
		  success: function(html){		
		  $("#auto_search_state_sel").html(html);//Calling the responce IDs
		  }
	});
}

function auto_search_city_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/auto_search_city_select.php",
		  data: "&sea_state_id="+a,
		  success: function(html){		
		  $("#auto_search_city_sel").html(html);//Calling the responce IDs
		  }
	});
}


function elect_get_search_coun_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/elect_search_state_select.php",
		  data: "&sea_country_id="+a,
		  success: function(html){		
		  $("#elect_search_state_sel").html(html);//Calling the responce IDs
		  }
	});
}

function elect_search_city_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/elect_search_city_select.php",
		  data: "&sea_state_id="+a,
		  success: function(html){		
		  $("#elect_search_city_sel").html(html);//Calling the responce IDs
		  }
	});
}

function home_get_search_coun_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/home_search_state_select.php",
		  data: "&sea_country_id="+a,
		  success: function(html){		
		  $("#home_search_state_sel").html(html);//Calling the responce IDs
		  }
	});
}

function home_search_city_name(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/home_search_city_select.php",
		  data: "&sea_state_id="+a,
		  success: function(html){		
		  $("#home_search_city_sel").html(html);//Calling the responce IDs
		  }
	});
}



function wealth_assets(a){
	if(a==1){
	document.getElementById('mobile').style.display="";	
	}
	else{
	document.getElementById('mobile').style.display="none";	
	}

	if(a==2){
	document.getElementById('vehicles').style.display="";	
	}
	else{
	document.getElementById('vehicles').style.display="none";	
	}
	
	if(a==3){
	document.getElementById('home_apart').style.display="";	
	}
	else{
	document.getElementById('home_apart').style.display="none";	
	}
    
	if(a==4){
	document.getElementById('land').style.display="";	
	}
	else{
	document.getElementById('land').style.display="none";	
	}

	if(a==5){
	document.getElementById('jewels').style.display="";	
	}
	else{
	document.getElementById('jewels').style.display="none";	
	}
	

}


function state_land_s3p(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/state_land_s3p.php",
		  data: "&sea_land_id="+a,
		  success: function(html){		
		  $("#home_land_sel").html(html);//Calling the responce IDs
		  }
	});
}

function city_land_s3p(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/city_land_s3p.php",
		  data: "&sea_land_city_id="+a,
		  success: function(html){		
		  $("#home_ci_land_sel").html(html);//Calling the responce IDs
		  }
	});
}

function mo_to(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/mother_ton_cast_load.php",
		  data: "&mo_id="+a,
		  success: function(html){		
		  $("#cast_id").html(html);//Calling the responce IDs
		  }
	});
}

function religion_load(a){
	$.ajax({
		  type: "POST",
		  url: "ajax/religion_load.php",
		  data: "&re_id="+a,
		  success: function(html){		
		  $("#reg_id").html(html);//Calling the responce IDs
		  }
	});
}


/*function register_val(){
	var reg_by=document.getElementById("reg_by");
	var n=document.getElementById("name");
	var letters = /^[a-z A-Z\&]+$/;  
	var datepicker=document.getElementById("datepicker");
	var gender1=document.getElementById("gender1");
	var gender=document.getElementById("gender");
	var religion=document.getElementById("religion");
	var cast_div=document.getElementById("cast_div");
	var mother_ton=document.getElementById("mother_ton");
	var country123=document.getElementById("country123");
	var phone=document.getElementById("mob_no");
	var phone_chracter = /^[0-9\-\(\)\ ]+$/;
	var len = {min:10};
	var e=document.getElementById("email");
	var em=e.value.replace(/^\s+|\s+$/g,"");
	var mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var password=document.getElementById("password");
	var wro_pass=document.getElementById("con_password");
	
	if(reg_by.selectedIndex==0){
		alert("Please Select the Registered by");
		reg_by.focus();
		return false;
	}
	
	else if(n.value==""){	
		alert("Please  enter the name");
		n.focus();
		return false;
	}
	
	else if(!n.value.match(letters)){ 
		alert("numbers and special characters not allowed in name field");
		n.focus();
		return false;
	}
	
	
	else if(datepicker.value==""){	
		alert("Please Choose the Date of Birth");
		datepicker.focus();
		return false;
	}
	
	else if((gender1.checked==false)&&(gender.checked==false)){	
		alert("Please Select in Male or Female");
		gender1.focus();
		return false;	
	}
	
	else if(religion.selectedIndex==0){
		alert("Please Select the Religion");
		religion.focus();
		return false;
	}
	
	else if(cast_div.selectedIndex==0){
		alert("Please Select the Caste / Division");
		cast_div.focus();
		return false;
	}
	
	else if(mother_ton.selectedIndex==0){
		alert("Please Select the Mother Tongue");
		mother_ton.focus();
		return false;
	}
	
		else if(country123.selectedIndex==0){
		alert("Please Select the Country");
		country123.focus();
		return false;
	}
	
	else if(phone.value==""){	
		alert("Please Enter the Mobile Number");
		mob_no.focus();
		return false;
	}
	
	else if(!phone.value.match(phone_chracter)){ 
		alert("Characters and Special characters not allowed in Mobile No");
		phone.focus();
		return false;
	}
	
	else if(mob_no.value.length <len.min){
		alert("Please enter minimum 10 numbers in Mobile No");
		phone.focus();
		return false;
	}
	
	else if(email.value==""){	
	alert("Please enter your Email-ID");
	email.focus();
	return false;
	}
	
	else if(!em.match(mail)){
	alert("Please enter valid email id");
	e.focus();
	return false;
	}
	else if(password.value==""){	
	alert("Please enter the Password");
	password.focus();
	return false;
	}
	
	else if(wro_pass.value==""){	
	alert("Please enter the confirm password");
	wro_pass.focus();
	return false;
	}
	
	else if(password.value != wro_pass.value){	
	alert("Password doesn't match");
	password.focus();
	return false;
	}
	
	else{
		return true;
	}
}
*/


function search1(){
	document.getElementById('search1').className='reg_menu_white';
	document.getElementById('search2').className='reg_menu_green';
	document.getElementById('search3').className='reg_menu_green';
	document.getElementById('search4').className='reg_menu_green';
	
	document.getElementById("search_div1").style.display = "";
	document.getElementById("search_div2").style.display = "none";		
	document.getElementById("search_div3").style.display = "none";
	document.getElementById("search_div4").style.display = "none";
}

function search2(){
	document.getElementById('search1').className='reg_menu_green';
	document.getElementById('search2').className='reg_menu_white';
	document.getElementById('search3').className='reg_menu_green';
	document.getElementById('search4').className='reg_menu_green';
	
	document.getElementById("search_div1").style.display = "none";
	document.getElementById("search_div2").style.display = "";		
	document.getElementById("search_div3").style.display = "none";
	document.getElementById("search_div4").style.display = "none";
}

function search3(){
	document.getElementById('search1').className='reg_menu_green';
	document.getElementById('search2').className='reg_menu_green';
	document.getElementById('search3').className='reg_menu_white';
	document.getElementById('search4').className='reg_menu_green';
	
	document.getElementById("search_div1").style.display = "none";
	document.getElementById("search_div2").style.display = "none";		
	document.getElementById("search_div3").style.display = "";
	document.getElementById("search_div4").style.display = "none";
}

function search4(){
	document.getElementById('search1').className='reg_menu_green';
	document.getElementById('search2').className='reg_menu_green';
	document.getElementById('search3').className='reg_menu_green';
	document.getElementById('search4').className='reg_menu_white';
	
	document.getElementById("search_div1").style.display = "none";
	document.getElementById("search_div2").style.display = "none";		
	document.getElementById("search_div3").style.display = "none";
	document.getElementById("search_div4").style.display = "";
}





function search_re_1(){
	document.getElementById('search_re_1').className='se_re_menu_org';
	document.getElementById('search_re_2').className='se_re_menu_gray';
	document.getElementById('search_re_3').className='se_re_menu_gray';
	document.getElementById('search4').className='reg_menu_green';
	
	document.getElementById("search_div1").style.display = "";
	document.getElementById("search_div2").style.display = "none";		
	document.getElementById("search_div3").style.display = "none";
	document.getElementById("search_div4").style.display = "none";
}

function search_re_2(){
	document.getElementById('search_re_1').className='se_re_menu_gray';
	document.getElementById('search_re_2').className='se_re_menu_org';
	document.getElementById('search_re_3').className='se_re_menu_gray';
	document.getElementById('search4').className='se_re_menu_gray';
	
	document.getElementById("search_div1").style.display = "none";
	document.getElementById("search_div2").style.display = "";		
	document.getElementById("search_div3").style.display = "none";
	document.getElementById("search_div4").style.display = "none";
}

function search_re_3(){
	document.getElementById('search_re_1').className='se_re_menu_gray';
	document.getElementById('search_re_2').className='se_re_menu_gray';
	document.getElementById('search_re_3').className='se_re_menu_org';
	document.getElementById('search4').className='se_re_menu_gray';
	
	document.getElementById("search_div1").style.display = "none";
	document.getElementById("search_div2").style.display = "none";		
	document.getElementById("search_div3").style.display = "";
	document.getElementById("search_div4").style.display = "none";
}

function search4(){
	document.getElementById('search1').className='reg_menu_green';
	document.getElementById('search2').className='reg_menu_green';
	document.getElementById('search3').className='reg_menu_green';
	document.getElementById('search4').className='reg_menu_white';
	
	document.getElementById("search_div1").style.display = "none";
	document.getElementById("search_div2").style.display = "none";		
	document.getElementById("search_div3").style.display = "none";
	document.getElementById("search_div4").style.display = "";
}


function search_sucess1(){
	document.getElementById('search_sucess1').className='suceee_white';
	document.getElementById('search_sucess2').className='suceee_gray';
	
	
	document.getElementById("search_sucess_div1").style.display = "";
	document.getElementById("search_sucess_div2").style.display = "none";		
	
}

function search_sucess2(){
	document.getElementById('search_sucess1').className='suceee_gray';
	document.getElementById('search_sucess2').className='suceee_white';
	
	
	document.getElementById("search_sucess_div1").style.display = "none";
	document.getElementById("search_sucess_div2").style.display = "";		
	
}

function open_dum_dum_id(){
	
	if(document.getElementById('dum_dum_id').value==''){
		alert("Please Enter Dum Dum Dum Id");
		document.getElementById('dum_dum_id').focus();		
	}
	else{
	     $.ajax({
			type: "POST",
			url: "ajax/dum_dum_id.php",	//Calling the ajax process php url				
			data:"&dum_dum_id=" + document.getElementById('dum_dum_id').value, 
			success: function(html){				
				location.replace('search_full_view.php?dum_id='+html);	   					 
			}
		});				
	}

}

function open_profile_id(){
	
	if(document.getElementById('profile_id').value==''){
		alert("Please Enter Form ID");
		document.getElementById('profile_id').focus();
		
	}
	else{
	     $.ajax({
			type: "POST",
			url: "ajax/profile_id.php",	//Calling the ajax process php url				
			data:"&profile_id=" + document.getElementById('profile_id').value, 
			success: function(html){				
				location.replace('profile_view.php?prof_id='+html);	   					 
			}
		});				
	}
}




function register_submit(){
	var marital_status=document.getElementById("marital_status");
	var name=document.getElementById("name");
	var sub_caste=document.getElementById("sub_caste");
	var gothra=document.getElementById("gothra");
	var nakshathra=document.getElementById("nakshathra");
	var luknam=document.getElementById("luknam");
	var zodiac_sign=document.getElementById("zodiac_sign");
	var res_state=document.getElementById("res_state");
	var residing_city=document.getElementById("residing_city");
	var communication_address=document.getElementById("communication_address");
	/*var hight=document.getElementById("hight");
	var hight1=document.getElementById("hight1");*/
	/*var height_cms=document.getElementById("height_cms");*/
	var weight=document.getElementById("weight");
	var body_type=document.getElementById("body_type");
	var complexion=document.getElementById("complexion");
	var physical_status=document.getElementById("physical_status");
	var education=document.getElementById("education");
	var education_in_detail=document.getElementById("education_in_detail");
	var occupation=document.getElementById("occupation");
	var employed_in=document.getElementById("employed_in");
	var monthly_income=document.getElementById("monthly_income");
	var occupation_in_detail=document.getElementById("occupation_in_detail");
	var food=document.getElementById("food");
	var smoke1=document.getElementById("smoke1");
	var smoke2=document.getElementById("smoke2");
	var smoke3=document.getElementById("smoke3");
	var drinking1=document.getElementById("drinking1");
	var drinking2=document.getElementById("drinking2");
	var drinking3=document.getElementById("drinking3");
	var search_age_from=document.getElementById("search_age_from");
	var search_age_to=document.getElementById("search_age_to");
	/*var exp_marital=document.getElementById("exp_marital");
	var exp_marital1=document.getElementById("exp_marital1");*/
	var expectation_food1=document.getElementById("expectation_food1");
	var reg=document.getElementById("reg");
	var expectation_food2=document.getElementById("expectation_food2");
	var expectation_food3=document.getElementById("expectation_food3");
	var father_name=document.getElementById("father_name");
	var mother_name=document.getElementById("mother_name");
	var father_employment=document.getElementById("father_employment");
	var family_status=document.getElementById("family_status");
	var family_type=document.getElementById("family_type");
	var about_family=document.getElementById("about_family");
	var expectation_about_life_partner=document.getElementById("expectation_about_life_partner");
	var terms_con=document.getElementById("terms_con");
	
	
	if(marital_status.selectedIndex==0){
		alert("Please Select the Marital status");
		marital_status.focus();
		return false;
	}
	
	/*else if((same_cast.checked==false)&&(same_cast1.checked==false)){	
		alert("Please Select in Male or Female");
		gender1.focus();
		return false;	
	}
*/	
	
	if(nakshathra.selectedIndex==0){
		alert("Please Select the nakshathra");
		nakshathra.focus();
		return false;
	}
	else if(luknam.selectedIndex==0){
		alert("Please Select the luknam");
		luknam.focus();
		return false;
	}
	
	else if(zodiac_sign.selectedIndex==0){
		alert("Please Select the zodiac_sign");
		zodiac_sign.focus();
		return false;
	}
	
	else if(res_state.selectedIndex==0){
		alert("Please Select the Residing state");
		res_state.focus();
		return false;
	}
	else if(residing_city.selectedIndex==0){
		alert("Please Select the Residing city");
		residing_city.focus();
		return false;
	}
	
	else if(communication_address.value==""){	
		alert("Please enter the communication_address");
		communication_address.focus();
		return false;
	}
	
	/*else if(hight.selectedIndex==0){
		alert("Please Select the Height");
		hight.focus();
		return false;
	}*/
	/*else if(height_cms.selectedIndex==0){
		alert("Please Select the height_cms");
		height_cms.focus();
		return false;
	}*/
	else if(weight.selectedIndex==0){
		alert("Please Select the weight");
		weight.focus();
		return false;
	}
	else if(body_type.selectedIndex==0){
		alert("Please Select the body_type");
		body_type.focus();
		return false;
	}
	else if(complexion.selectedIndex==0){
		alert("Please Select the complexion");
		complexion.focus();
		return false;
	}
	else if(physical_status.selectedIndex==0){
		alert("Please Select the physical status");
		physical_status.focus();
		return false;
	}
	else if(education.selectedIndex==0){
		alert("Please Select the Highest education");
		education.focus();
		return false;
	}
	else if(education_in_detail.value==""){	
		alert("Please enter the education in detail");
		education_in_detail.focus();
		return false;
	}
	else if(occupation.selectedIndex==0){
		alert("Please Select the Occupation");
		occupation.focus();
		return false;
	}
		else if(employed_in.selectedIndex==0){
		alert("Please Select the Employed in");
		employed_in.focus();
		return false;
	}
		else if(monthly_income.value==""){	
		alert("Please enter the monthly income");
		monthly_income.focus();
		return false;
	}
		else if(occupation_in_detail.value==""){	
		alert("Please enter the occupation in detail");
		occupation_in_detail.focus();
		return false;
	}
	else if(food.selectedIndex==0){
		alert("Please Select the food");
		food.focus();
		return false;
	}
	else if((smoke1.checked==false)&&(smoke2.checked==false)&&(smoke3.checked==false)){	
		alert("Please choose the Smoking");
		smoke1.focus();
		return false;	
	}
	else if((drinking1.checked==false)&&(drinking2.checked==false)&&(drinking3.checked==false)){	
		alert("Please choose the Drinking");
		drinking1.focus();
		return false;	
	}
	else if(search_age_from.selectedIndex==0){
		alert("Please Select the age from");
		search_age_from.focus();
		return false;
	}
	else if(search_age_to.selectedIndex==0){
		alert("Please Select the age to");
		search_age_to.focus();
		return false;
	}
	
	else if((expectation_food1.checked==false)&&(expectation_food2.checked==false)&&(expectation_food3.checked==false)&&(expectation_food4.checked==false)){	
		alert("Please choose the diet");
		exp_marital.focus();
		return false;	
	}
	
	else if(reg.value=="Horoscope Submit"){	
		alert("Please fill the Horoscope boxes and submit the Horoscope");
		document.getElementById('my-span').focus();
		//reg.focus();
		return false;
	}
	
	else if(father_name.value==""){	
		alert("Please enter the father name");
		father_name.focus();
		return false;
	}
	else if(mother_name.value==""){	
		alert("Please enter the mother name");
		mother_name.focus();
		return false;
	}
	
	else if(father_employment.value==""){	
		alert("Please enter the father employment");
		father_employment.focus();
		return false;
	}
	else if(family_status.selectedIndex==0){
		alert("Please Select the family status");
		family_status.focus();
		return false;
	}
	else if(family_type.selectedIndex==0){
		alert("Please Select the family type");
		family_type.focus();
		return false;
	}
	/*else if((family_value1.checked==false)&&(family_value2.checked==false)&&(family_value3.checked==false)&&(family_value4.checked==false)){	
		alert("Please choose the family value");
		family_value1.focus();
		return false;	
	}*/
	
	else if((about_family.checked==false)){	
		alert("Please choose the terms and conditions");
		about_family.focus();
		return false;	
	}
	else if(about_family.value==""){	
		alert("Please enter the More About Family");
		about_family.focus();
		return false;
	}
		else if(expectation_about_life_partner.value==""){	
		alert("Please enter the  Expectation about Life Partner");
		expectation_about_life_partner.focus();
		return false;
	}
	
	else if((terms_con.checked==false)){	
		alert("Please choose the terms and conditions");
		terms_con.focus();
		return false;	
	}
	
	else{
		return true;
	}
}


function contact_detail(a){
	
	     $.ajax({
			type: "POST",
			url: "ajax/contact_detail.php",	//Calling the ajax process php url				
			data: "&user_id="+a,
			success: function(html){
				document.getElementById("but_id").style.display="none";
				
			$("#con_id").html(html);				//Calling the responce IDs				
	 
			}
		});
}


function hors(a){
//document.getElementById('ajax_loader_img').style.display="";
	     $.ajax({
			type: "POST",
			url: "ajax/hors.php",	//Calling the ajax process php url				
			data: "&user_id="+a,
			success: function(html){
				//document.getElementById('hors_id').innerHTML='<img src="files/icons/load.gif" />';
				document.getElementById("blanket").style.display="";
				document.getElementById('popUpDiv').style.display="";
				
				
			$("#hors_id").html(html);				//Calling the responce IDs				
			

/*        var img = new Image();
        $(img).load(function () {
            //$(this).css('display', 'none'); // .hide() doesn't work in Safari when the element isn't on the DOM already
            $(this).hide();
            $('#hors_id').removeClass('loading').append(this);
            $(this).fadeIn();
        }).error(function () {
            // notify the user that the image could not be loaded
        }).attr('src', html);*/

 
 
	 		var myHeight = 0;

  if( typeof( window.innerWidth ) == 'number' ) {

    //Non-IE

    myHeight = window.innerHeight;

  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {

    //IE 6+ in 'standards compliant mode'

    myHeight = document.documentElement.clientHeight;

  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {

    //IE 4 compatible
    myHeight = document.body.clientHeight;
  }
  
  
  var myWidth = 0;

  if( typeof( window.innerWidth ) == 'number' ) {

    //Non-IE

    myWidth = window.innerWidth;

  } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {

    //IE 6+ in 'standards compliant mode'

    myWidth = document.documentElement.clientWidth;

  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {

    //IE 4 compatible

    myWidth = document.body.clientWidth;

  }
  var whgt = (myHeight/2);
  var wwdt = (myWidth/2);
  var hgt = (document.getElementById('popUpDiv').clientHeight/2);
  var wdt = (document.getElementById('popUpDiv').clientWidth/2);
  
  var marg_top = (whgt - hgt);
  var marg_left = (wwdt - wdt);
  
 // document.getElementById('popUpDiv').style.marginTop=marg_top+"px";
  document.getElementById('popUpDiv').style.marginTop="40px"; 
  document.getElementById('popUpDiv').style.marginLeft=marg_left+"px";
			}
});
}




function close_jod(){
	document.getElementById('blanket').style.display='none';
	document.getElementById('popUpDiv').style.display='none';
	//document.getElementById('ajax_loader_img').style.display="none";
	document.getElementById('popUpDiv').innerHTML='<span id="hors_id"></span>';
}



function edit_prof(){
		document.getElementById('normal_view').style.display = "none"
		document.getElementById('edit_view').style.display =""
		document.getElementById('edit_icon').style.display = "none"
		document.getElementById('edit_txt').style.display = "none"
		document.getElementById('close_btn').style.display = ""
		document.getElementById('close_txt').style.display = ""
		
}

function close_edit(){
		document.getElementById('normal_view').style.display = ""
		document.getElementById('edit_view').style.display ="none"
		document.getElementById('edit_icon').style.display = ""
		document.getElementById('edit_txt').style.display = ""
		document.getElementById('close_btn').style.display = "none"
		document.getElementById('close_txt').style.display = "none"
		
}

function edit_prof1(){
		document.getElementById('normal_view1').style.display = "none"
		document.getElementById('edit_view1').style.display =""
		document.getElementById('edit_icon1').style.display = "none"
		document.getElementById('edit_txt1').style.display = "none"
		document.getElementById('close_btn1').style.display = ""
		document.getElementById('close_txt1').style.display = ""
		
}

function close_edit1(){
		document.getElementById('normal_view1').style.display = ""
		document.getElementById('edit_view1').style.display ="none"
		document.getElementById('edit_icon1').style.display = ""
		document.getElementById('edit_txt1').style.display = ""
		document.getElementById('close_btn1').style.display = "none"
		document.getElementById('close_txt1').style.display = "none"
		
}

function edit_prof2(){
		document.getElementById('normal_view2').style.display = "none"
		document.getElementById('edit_view2').style.display =""
		document.getElementById('edit_icon2').style.display = "none"
		document.getElementById('edit_txt2').style.display = "none"
		document.getElementById('close_btn2').style.display = ""
		document.getElementById('close_txt2').style.display = ""
		
}

function close_edit2(){
		document.getElementById('normal_view2').style.display = ""
		document.getElementById('edit_view2').style.display ="none"
		document.getElementById('edit_icon2').style.display = ""
		document.getElementById('edit_txt2').style.display = ""
		document.getElementById('close_btn2').style.display = "none"
		document.getElementById('close_txt2').style.display = "none"
		
}

function edit_prof3(){
		document.getElementById('normal_view3').style.display = "none"
		document.getElementById('edit_view3').style.display =""
		document.getElementById('edit_icon3').style.display = "none"
		document.getElementById('edit_txt3').style.display = "none"
		document.getElementById('close_btn3').style.display = ""
		document.getElementById('close_txt3').style.display = ""
		
}

function close_edit3(){
		document.getElementById('normal_view3').style.display = ""
		document.getElementById('edit_view3').style.display ="none"
		document.getElementById('edit_icon3').style.display = ""
		document.getElementById('edit_txt3').style.display = ""		
		document.getElementById('close_btn3').style.display = "none"
		document.getElementById('close_txt3').style.display = "none"
		
}

function edit_prof4(){
		document.getElementById('normal_view4').style.display = "none"
		document.getElementById('edit_view4').style.display =""
		document.getElementById('edit_icon4').style.display = "none"
		document.getElementById('edit_txt4').style.display = "none"
		document.getElementById('close_btn4').style.display = ""
		document.getElementById('close_txt4').style.display = ""
		
}

function close_edit4(){
		document.getElementById('normal_view4').style.display = ""
		document.getElementById('edit_view4').style.display ="none"
		document.getElementById('edit_icon4').style.display = ""
		document.getElementById('edit_txt4').style.display = ""
		document.getElementById('close_btn4').style.display = "none"
		document.getElementById('close_txt4').style.display = "none"
		
}

function edit_prof5(){
		document.getElementById('normal_view5').style.display = "none"
		document.getElementById('edit_view5').style.display =""
		document.getElementById('edit_icon5').style.display = "none"
		document.getElementById('edit_txt5').style.display = "none"
		document.getElementById('close_btn5').style.display = ""
		document.getElementById('close_txt5').style.display = ""
		
}

function close_edit5(){
		document.getElementById('normal_view5').style.display = ""
		document.getElementById('edit_view5').style.display ="none"
		document.getElementById('edit_icon5').style.display = ""
		document.getElementById('edit_txt5').style.display = ""
		document.getElementById('close_btn5').style.display = "none"
		document.getElementById('close_txt5').style.display = "none"
		
}

function edit_prof6(){
		document.getElementById('normal_view6').style.display = "none"
		document.getElementById('edit_view6').style.display =""
		document.getElementById('edit_icon6').style.display = "none"
		document.getElementById('edit_txt6').style.display = "none"
		document.getElementById('close_btn6').style.display = ""
		document.getElementById('close_txt6').style.display = ""
		
}

function close_edit6(){
		document.getElementById('normal_view6').style.display = ""
		document.getElementById('edit_view6').style.display ="none"
		document.getElementById('edit_icon6').style.display = ""
		document.getElementById('edit_txt6').style.display = ""
		document.getElementById('close_btn6').style.display = "none"
		document.getElementById('close_txt6').style.display = "none"
		
}

function edit_prof7(){
		document.getElementById('normal_view7').style.display = "none"
		document.getElementById('edit_view7').style.display =""
		document.getElementById('edit_icon7').style.display = "none"
		document.getElementById('close_btn7').style.display = ""
		document.getElementById('edit_txt7').style.display = "none"
		document.getElementById('close_txt7').style.display = ""
		
}

function close_edit7(){
		document.getElementById('normal_view7').style.display = ""
		document.getElementById('edit_view7').style.display ="none"
		document.getElementById('edit_icon7').style.display = ""
		document.getElementById('edit_txt7').style.display = ""
		document.getElementById('close_btn7').style.display = "none"
		document.getElementById('close_txt7').style.display = "none"
		
		
}

function edit_prof8(){
		document.getElementById('normal_view8').style.display = "none"
		document.getElementById('edit_view8').style.display =""
		document.getElementById('edit_icon8').style.display = "none"
		document.getElementById('edit_txt8').style.display = "none"
		document.getElementById('close_btn8').style.display = ""
		document.getElementById('close_txt8').style.display = ""
		
}

function close_edit8(){
		document.getElementById('normal_view8').style.display = ""
		document.getElementById('edit_view8').style.display ="none"
		document.getElementById('edit_icon8').style.display = ""
		document.getElementById('edit_txt8').style.display = ""
		document.getElementById('close_btn8').style.display = "none"
		document.getElementById('close_txt8').style.display = "none"
		
}



function success_sto_val(){
	var fe_name=document.getElementById("fe_name");
	var letters = /^[A-Za-z]+$/; 
	var mal_name=document.getElementById("mal_name");
	var letters1 = /^[A-Za-z]+$/; 
	var bride_matrimony_id=document.getElementById("bride_matrimony_id");
	var e=document.getElementById("email_id");
	var em=e.value.replace(/^\s+|\s+$/g,"");
	var mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var datepicker=document.getElementById("datepicker");
	var succ_story=document.getElementById("succ_story");

	
	if(fe_name.value==""){	
	alert("Please  enter the Bride name");
	fe_name.focus();
	return false;
	}
	else if(!fe_name.value.match(letters)){ 
		alert("numbers and special characters not allowed in Bride name field");
		fe_name.focus();
		return false;
	}
	
	else if(mal_name.value==""){	
	alert("Please  enter the Groom name");
	mal_name.focus();
	return false;
	}
	
	else if(!mal_name.value.match(letters1)){ 
		alert("numbers and special characters not allowed in Groom name field");
		mal_name.focus();
		return false;
	}
	
	else if(bride_matrimony_id.value==""){
	alert("Please Enter the Bride id or Groom id");
	//car_name.focus();
	return false;
	}
	
	else if(email_id.value==""){	
	alert("Please Enter the Email ID");
	email_id.focus();
	return false;
	}
	
	else if(!em.match(mail)){
	alert("Please Enter the valid Email-Id");
	e.focus();
	return false;
	}
	else if(datepicker.value==""){	
	alert("Please  enter the marriage date");
	datepicker.focus();
	return false;
	}
	else if(succ_story.value==""){	
	alert("Please  enter your success story");
	succ_story.focus();
	return false;
	}
	
	else{
		return true;
	}
}


function serch_full_validate(){
	
	var e=document.getElementById("user_name_full");
	var em=e.value.replace(/^\s+|\s+$/g,"");
	var mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var password_full=document.getElementById("password_full");
	
	if(user_name_full.value==""){	
	alert("Please Enter the Email ID");
	user_name_full.focus();
	return false;
	}
	
	else if(!em.match(mail)){
	alert("Please Enter the valid Email-Id");
	e.focus();
	return false;
	}
	
	else if(password_full.value==""){	
	alert("Please enter the password");
	password_full.focus();
	return false;
	}
	else{
		return true;
	}
}

/*function pay_first_submit(){

var pay_set=document.getElementById("pay_set");


if((pay_set.checked==false)){	
	alert("Please choose any one payment method");
	pay_set.focus();
	return false;	
	}
else{
	return true;
	}
}*/

function myFunction(a){
	if(a==0){
	document.getElementById('edu_others').style.display="";	
	}
	else{
		document.getElementById('edu_others').style.display="none";	
	}
}

function myFunction1(a){
	if(a==0){
	document.getElementById('occ_others').style.display="";	
	}
	else{
		document.getElementById('occ_others').style.display="none";	
	}
}


function idcheck(a){
	//alert(a);
	$.ajax({
		type: "POST",
		url: "../ajax/idcheck.php",	//Calling the ajax process php url	
		data: "&dum_id="+a,				
		success: function(html){					
			$("#dum_id_re").html(html);				//Calling the responce IDs						
		}
	});
}

function idcheck_front(a){
	//alert(a);
	$.ajax({
		type: "POST",
		url: "ajax/idcheck1.php",	//Calling the ajax process php url	
		data: "&dum_id="+a,				
		success: function(html){					
			$("#dum_id_re1").html(html);				//Calling the responce IDs						
		}
	});
}



function emailCheck(a) 
//alert("sss");

{   
$.ajax({
		type: "POST",
		url: "ajax/check_player_username_ofc.php",	//Calling the ajax process php url	
		data: "&validateValue="+a,				
		success: function(html){	
			var e=document.getElementById("email");
	var em=e.value.replace(/^\s+|\s+$/g,"");
	var mail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	
	 if(email.value==""){	
	alert("Please enter your Email-Id");
	email.focus();
	return false;
	}
	
	else if(!em.match(mail)){
	alert("Please Enter valid Email-Id");
	e.focus();
	return false;
	}
	else{
		$("#emailError").html(html);
	}
		
							//Calling the responce IDs						
		}
	});
}




function add_image_upload_ph12345(a){
	     $.ajax({
			type: "POST",
			url: "ajax/front_upload_photos.php",	//Calling the ajax process php url				
			data: "&product_id="+a+"&add_i=1"+			
			"&image_file=" + document.getElementById('image_file').value+"&image_name=" + document.getElementById('image_name').value, 
			
			success: function(html){			

				document.getElementById('add_file').style.display = ""
				document.getElementById('add_file_BW').style.display = "none"								
				document.getElementById('upload_btn').style.display = "none";	
				document.getElementById('upload_btn_BW').style.display = "";					
				document.getElementById('image_file1').style.display = "none"			
				
				$("#front_out_put_ajax_image_upload2").html(html);	//Calling the responce IDs			
			
	 
			}
		});		
}


function front_delete_image_upload(a){
	     $.ajax({
			type: "POST",
			url: "ajax/front_upload_photos.php",	//Calling the ajax process php url				
			data: "&delete_id="+a,	
			success: function(html){			
		
				$("#front_out_put_ajax_image_upload2").html(html);				//Calling the responce IDs			
			
	 
			}
		});		
}


function onlyNumbers(evt)
{
		
	var charCode = (evt.which) ? evt.which : event.keyCode
	 if (charCode > 31 && (charCode < 45 || charCode > 45 && charCode < 48 || charCode > 57))
		return false;
		
	 return true;
}

function age_calc(a){
	//alert("fsdgfg");
		$.ajax({
			   type:"POST",
			   url:"ajax/age_calc.php",
			   data:"&age_id="+a,
			   success:function(html){
				   $("#age_txt").val(html);
				   }
			   })
}


function regis_height(){
		
		document.getElementById("dis").style.display = ""
		document.getElementById("view").style.display = "none"
	
	} 
	
function regis_height_cms(){
		
		document.getElementById("hight_feet_dis").style.display = ""
		document.getElementById("hight_feet_view").style.display = "none"
	
}
	
function clear_height(){	
		//alert("dff");
		document.getElementById("view").style.display = ""
		document.getElementById("hight_feet_view").style.display = ""
		document.getElementById("dis").style.display = "none"
		document.getElementById("hight_feet_dis").style.display = "none"
} 

function onlyNumbers_reg(evt)
{
		
	var charCode = (evt.which) ? evt.which : event.keyCode
	 if (charCode > 31 && (charCode < 43 || charCode > 43 && charCode < 45 || charCode > 45 && charCode < 48 || charCode > 57))
		return false;
		
	 return true;
}

function onlyNumbers_age(evt)
{
		
	var charCode = (evt.which) ? evt.which : event.keyCode
	 if ((charCode < 41 || charCode > 42))
		return false;
		
	 return true;
}