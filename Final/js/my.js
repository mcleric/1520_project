
var page_loc;
var prev_loc;

var resume_parts = ["r0", "r1", "r2", "r3", "r4", "r5"];
var contact_parts = ["c0", "c1", "c2", "c3", "c4", "c5", "c6"];
var about_parts = ["a0", "a1", "a2", "a3", "a4", "a5", "a6", "a7", "a8", "a9", "a10", "a11", "a12", "a13"];
var colors = ["red", "orange", "gold", "green", "blue", "indigo", "violet"];
var tmout;
var i, j;
var cc;//var to hold sessionstorage var for color-changing
var ccb; //var to determine if color-changing text will be used--boolean


var prop = {step:20, fps:20, text:"", callback:bio_shuffle};

$(document).ready(function(){
	var anim = false;
	i=0;
	j=0;
	
	load_s('cs');
	
	
	
	
	if(window.location.hash == "" || window.location.hash == "#home" || window.location.hash == "#contact")
	{
		
		if(window.location.hash == ""){
			anim = true; //for shuffleLetters anim. only want to do this on initial page load
			window.location = "#home";
			$("#bio_head").hide();
			$("#bio").hide();
			if(confirm("Would you like to include the cheesy color-changing text animation?") == true){
				sessionStorage.setItem('cc', 'yes');
				
			}else{
				sessionStorage.setItem('cc', 'no');
			}
			
		}else if(window.location.hash == "#home")
			page_loc = "about";
		
		cc = sessionStorage.getItem('cc');
		if(cc == 'yes'){
			ccb = true;
		}else if(cc == 'no' || cc == null){
			ccb = false;
		}
		
		//this resumes color-changing text after form submit is necessary.  also makes it so #contact hash always reloads to contact section
		if(window.location.hash == "#contact")
		{
				window.location = "#contact";
				contact_change(i,j);
		}
		
		
		if(anim == true){
			$("#bio_head").show();
			$("#bio_head").shuffleLetters(prop);
		}else{
			$("#bio_head").show();
			$("#bio").show();
			abt_change();
		}
		
	}
	
	
});

function bio_shuffle()
{	
	prop = {step:12, fps:200, text:"", callback:abt_change};
	$("#bio").show();
	setTimeout($("#bio").shuffleLetters(prop), 1000);
}

$("#clear").on('click', function(){
	$("#curtain").animate({height:"82.5%"}, curtain_up);
});

function curtain_up()
{
	document.getElementById("contactForm").reset();
	setTimeout(function(){
		$("#curtain").animate({height:"1%"});
	}, 1000);

}

$('#about_btn').on('click', function(){
	
	prev_loc = page_loc;
	page_loc = "about";
	
	
	//most of this code is fixing color changing
	clearInterval(tmout);
	var x = 0;
	while(x < contact_parts.length)
	{
		document.getElementById(contact_parts[x]).style.color = "black";
		x++;
	}
	x = 0;
	while(x < resume_parts.length)
	{
		document.getElementById(resume_parts[x]).style.color = "black";
		x++;
	}
	
	abt_change();
	
	
	
});

function abt_change()
{

	if(ccb){	
		if(page_loc != prev_loc)
		{
			i = 0;
			j = 0;
		}
		if(page_loc == "about")
		{
		tmout = setInterval(function(){
			document.getElementById(about_parts[i]).style.color = colors[j];
			i++;
			if(i >= about_parts.length)
			{
				i = 0;
				j++;
				if(j >= colors.length)
				{
					j = 0;
				}
			}
		
		
		}, 750);

		}

	}


}


$('#resume_btn').on('click', function(){
	//window.location.hash = "#resume";
	prev_loc = page_loc;
	page_loc = "resume";
	
	clearInterval(tmout);
	var x = 0;
	while(x < contact_parts.length)
	{
		document.getElementById(contact_parts[x]).style.color = "black";
		x++;
	}
	x = 0;
	while(x < about_parts.length)
	{
		document.getElementById(about_parts[x]).style.color = "black";
		x++;
	}
	
	
	if(page_loc != prev_loc)
	{
		i = 0;
		j = 0;
	}
	
	res_change(i, j);
	
});

function res_change(y, z)
{
	if(ccb){
		tmout = setInterval(function(){
			document.getElementById(resume_parts[y]).style.color = colors[z];
			y++;
			i++;
			if(y >= resume_parts.length)
			{
				y = 0;
				i = 0;
				z++;
				j++;
				if(z >= colors.length)
				{
					z = 0;
					j = 0;
				}
			}
		
		
		}, 750);
		
	}
	return;



}

$('#contact_btn').on('click', function(){
	
	prev_loc = page_loc;
	page_loc = "contact";
	
	clearInterval(tmout);
	var x = 0;
	while(x < resume_parts.length)
	{
		document.getElementById(resume_parts[x]).style.color = "black";
		x++;
	}
	x = 0;
	while(x < about_parts.length)
	{
		document.getElementById(about_parts[x]).style.color = "black";
		x++;
	}
	
	
	if(page_loc != prev_loc)
	{
		i = 0;
		j = 0;
	}
	
	contact_change(i,j);
	
});

function contact_change(y,z)
{
	
	if(ccb){
		tmout = setInterval(function(){
			document.getElementById(contact_parts[y]).style.color = colors[z];
			y++;
			i++;
			if(y >= contact_parts.length)
			{
				y = 0;
				i = 0;
				z++;
				j++;
				if(z >= colors.length)
				{
					z = 0;
					j = 0;
				}
			}
		
		
		}, 750);
	
	}
	
	return;

}

function load_s(arg) {

	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4 && xhttp.status == 200) {
			document.getElementById("res_load").innerHTML = xhttp.responseText;
		}
	};
	if(arg == 'cs'){
		xhttp.open("GET", "docs/cs.txt", true);
	}else if(arg == 'neuro'){
		xhttp.open("GET", "docs/neuro.txt", true);
	}else if(arg == 'work'){
		xhttp.open("GET", "docs/work.txt", true);
	}



 xhttp.send();
 return;
}




$('#cs_btn').on('click', function(){
	clearInterval(tmout);
	res_change(i, j);
});
	
$('#neuro_btn').on('click', function(){
	clearInterval(tmout);
	res_change(i, j);
});

$('#work_btn').on('click', function(){
	clearInterval(tmout);
	res_change(i, j);
});

