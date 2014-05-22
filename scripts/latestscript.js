// JavaScript Document
function change(a){
	
		if(a==1){
		document.getElementById('check1').className='checked';
		document.getElementById('check2').className='un_checked';
		document.getElementById('month').value=5;
		}
		if(a==2){
		document.getElementById('check1').className='un_checked';
		document.getElementById('check2').className='checked';
		document.getElementById('month').value=12;		
		}
		
}

function change1(a){
	
		if(a==3){
		document.getElementById('check3').className='checked';
		document.getElementById('check4').className='un_checked';
		document.getElementById('marrgs').value=1;
		}
		if(a==4){
		document.getElementById('check3').className='un_checked';
		document.getElementById('check4').className='checked';
		document.getElementById('marrgs').value=2;		
		}
		
}

function change_new(a){
		if(document.getElementById('check'+a).className=='un_checked'){
			document.getElementById('check'+a).className='checked';	
			document.getElementById('check'+a+'_v').value=1;	
		}
		else{
			document.getElementById('check'+a).className='un_checked';		
			document.getElementById('check'+a+'_v').value=0;							
		}		
}


function  rasi_add(p){
    x = document.getElementById("rasi_add").value;y = document.getElementById("rasi_box").value;document.getElementById(y+'_R_'+x).style.display='';
	$.ajax({
		type: "POST",
		url: "../ajax/rasi_add.php",	
		data: "&val="+x+"&user_id="+p+"&rasi_add=1"+"&rasi_box="+y,				
		success: function(html){					
			$("#rasi_add_span").html(html);				//Calling the responce IDs						
		}
	});
	$.ajax({
		type: "POST",
		url: "../ajax/rasi_remove.php",	
		data: "&val="+x+"&user_id="+p+"&rasi_remove=1"+"&rasi_box="+y,								
		success: function(html){					
			$("#rasi_remove_span").html(html);				//Calling the responce IDs						
		}
	});	
}



function  rasi_add12(p){
    x = document.getElementById("rasi_add").value;y = document.getElementById("rasi_box").value;document.getElementById(y+'_R_'+x).style.display='';
	$.ajax({
		type: "POST",
		url: "ajax/rasi_add12.php",	
		data: "&val="+x+"&user_id="+p+"&rasi_add=1"+"&rasi_box="+y,				
		success: function(html){					
			$("#rasi_add_span").html(html);				//Calling the responce IDs						
		}
	});
	$.ajax({
		type: "POST",
		url: "ajax/rasi_remove12.php",	
		data: "&val="+x+"&user_id="+p+"&rasi_remove=1"+"&rasi_box="+y,								
		success: function(html){					
			$("#rasi_remove_span").html(html);				//Calling the responce IDs						
		}
	});	
}


function  nakshathra(){
    nakshathra_val = document.getElementById("nakshathra_val").value;	
	$.ajax({
		type: "POST",
		url: "../ajax/nach_add.php",	
		data: "&val="+nakshathra_val,				
		success: function(html){					
			$("#nakshathra_out").html(html);				//Calling the responce IDs						
		}
	});
	$.ajax({
		type: "POST",
		url: "../ajax/nach_remove.php",	
		data: "&val="+nakshathra_val,							
		success: function(html){					
			$("#nach_add_span").html(html);				//Calling the responce IDs						
		}
	});	
}



function  amsam_add(p){
    x = document.getElementById("amsam_add").value;y = document.getElementById("amsam_box").value;document.getElementById(y+'_A_'+x).style.display='';
	$.ajax({
		type: "POST",
		url: "../ajax/amsam_add.php",	
		data: "&val="+x+"&user_id="+p+"&amsam_add=1"+"&amsam_box="+y,				
			success: function(html){					
			$("#amsam_add_span").html(html);				//Calling the responce IDs						
		}
	});	
	$.ajax({
		type: "POST",
		url: "../ajax/amsam_remove.php",	
		data: "&val="+x+"&user_id="+p+"&amsam_remove=1"+"&amsam_box="+y,								
		success: function(html){					
			$("#amsam_remove_span").html(html);				//Calling the responce IDs						
		}
	});	
}



function  amsam_add12(p){
    x = document.getElementById("amsam_add").value;y = document.getElementById("amsam_box").value;document.getElementById(y+'_A_'+x).style.display='';
	$.ajax({
		type: "POST",
		url: "ajax/amsam_add12.php",	
		data: "&val="+x+"&user_id="+p+"&amsam_add=1"+"&amsam_box="+y,				
			success: function(html){					
			$("#amsam_add_span").html(html);				//Calling the responce IDs						
		}
	});	
	$.ajax({
		type: "POST",
		url: "ajax/amsam_remove12.php",	
		data: "&val="+x+"&user_id="+p+"&amsam_remove=1"+"&amsam_box="+y,								
		success: function(html){					
			$("#amsam_remove_span").html(html);				//Calling the responce IDs						
		}
	});	
}




function  rasi_remove(p){
    x = document.getElementById("d_rasi_add").value;
	y = document.getElementById("rasi_box").value;		
	document.getElementById(x).style.display='none';	
//	document.getElementById(y+'_R_'+x).style.display='none';	

	$.ajax({
		type: "POST",
		url: "../ajax/rasi_add1.php",	
		data: "&user_id="+p+"&val="+x,				
		success: function(html){					
			$("#rasi_add_span").html(html);				//Calling the responce IDs						
		}
	});
	$.ajax({
		type: "POST",
		url: "../ajax/rasi_remove1.php",	
		data: "&user_id="+p+"&val="+x,					
		success: function(html){					
			$("#rasi_remove_span").html(html);				//Calling the responce IDs						
		}
	});
	
}


function  rasi_remove12(p){
    x = document.getElementById("d_rasi_add").value;
	y = document.getElementById("rasi_box").value;	
	document.getElementById(x).style.display='none';	
	$.ajax({
		type: "POST",
		url: "ajax/rasi_add121.php",	
		data: "&user_id="+p+"&val="+x,				
		success: function(html){					
			$("#rasi_add_span").html(html);				//Calling the responce IDs						
		}
	});
	$.ajax({
		type: "POST",
		url: "ajax/rasi_remove121.php",	
		data: "&user_id="+p+"&val="+x,					
		success: function(html){					
			$("#rasi_remove_span").html(html);				//Calling the responce IDs						
		}
	});
	
}



function  nach_remove(p){
    x = document.getElementById("d_nach_add").value;
	y = document.getElementById("por_box").value;	
	document.getElementById(x).style.display='none';	
	$.ajax({
		type: "POST",
		url: "../ajax/nach_add1.php",	
		data: "&user_id="+p+"&val="+x,				
		success: function(html){					
			$("#nach_add_span").html(html);				//Calling the responce IDs						
		}
	});
	$.ajax({
		type: "POST",
		url: "../ajax/nach_remove1.php",	
		data: "&user_id="+p+"&val="+x,					
		success: function(html){					
			$("#nach_remove_span").html(html);				//Calling the responce IDs						
		}
	});
	
}











function  amsam_remove(p){
    x = document.getElementById("d_amsam_add").value;
	y = document.getElementById("amsam_box").value;	
	document.getElementById(x).style.display='none';	
	$.ajax({
		type: "POST",
		url: "../ajax/amsam_add1.php",	
		data: "&user_id="+p+"&val="+x,				
		success: function(html){					
			$("#amsam_add_span").html(html);				//Calling the responce IDs						
		}
	});
	$.ajax({
		type: "POST",
		url: "../ajax/amsam_remove1.php",	
		data: "&user_id="+p+"&val="+x,					
		success: function(html){					
			$("#amsam_remove_span").html(html);				//Calling the responce IDs						
		}
	});
	
}


function  amsam_remove12(p){
    x = document.getElementById("d_amsam_add").value;
	y = document.getElementById("amsam_box").value;	
	document.getElementById(x).style.display='none';	
	$.ajax({
		type: "POST",
		url: "ajax/amsam_add121.php",	
		data: "&user_id="+p+"&val="+x,				
		success: function(html){					
			$("#amsam_add_span").html(html);				//Calling the responce IDs						
		}
	});
	$.ajax({
		type: "POST",
		url: "ajax/amsam_remove121.php",	
		data: "&user_id="+p+"&val="+x,					
		success: function(html){					
			$("#amsam_remove_span").html(html);				//Calling the responce IDs						
		}
	});
	
}

function show_hedden(){
	}
	
function show_hedden11(){
	}
	
