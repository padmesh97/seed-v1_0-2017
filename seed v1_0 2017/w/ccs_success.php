<!DOCTYPE html>
<html>
<head>
	<title>Register - S.E.E.D</title>
	<meta name="viewport" content="width=screen-width,height=device-height,initial-scale=1.0">
	<link rel="icon" href="images/favicon.png" type="image/x-icon" /> 
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style type="text/css">
    @media screen and (max-width:1275px)
    {
    body{
      width:1275px;
    }
    }
    	input[type='text']
		{
		margin-top: 7px;
		margin-bottom: 7px; 
		margin-right:20px;
    	font-family: main2;
    	width:185px;
    	height: 25px;
    	border:1px solid rgb(238,19,19);
    	padding-left: 10px;
    	box-shadow:0 0 8px rgb(238,19,19);
    	border-radius: 4px;
		}
		input[type='submit']
		{
			font-family: main2;
			border: 1px solid green;
			background: none;
			color: green;
			font-size:18px;
			width: 360px;
			height: 37px;
			margin-top: 15px;
			margin-bottom: 30px;
			margin-left:20px;
			cursor: pointer;
		}
		input[type='submit']:hover
		{
			color: white;
			background-color: green;
			transition: 0.3s ease;
		}
		input[type='radio']
		{
			width: 15px;
			height: 15px;
		}
		.rupee::before{
		font-family: fontawesome;
		content: "\f156";
		font-weight: lighter;
		}
		select{
			bottom: 5px;
			border:1px solid rgb(238,19,19);
			box-shadow:0 0 8px rgb(238,19,19);
			font-family: main2;
    		border-radius: 4px;
    		height: 25px;
    		width: 120px
		}
    </style>
</head>
<body>
<header>
	<img id="top_head" src="images/b9.jpg" style="position: absolute;width: 100%;height: 105px;margin-top: 0;margin-left: 0;z-index: -2;opacity: 0.08">
	<center>
	<div style="margin-top:35px;margin-left: 3%;width:125px;border:2px solid white;border-radius:20%;display:inline-block"></div>
	<div style="font-size: 30px;padding:0 2% 0 2%;display:inline">Society of Electrical <span style="font-family: main2">&</span> Electronics Department</div>
	<div style="width:125px;border:2px solid white;border-radius:20%;display:inline-block"></div>
	<div style="margin-top: 23px;margin-left: 3%">
	<a href="index.php#top_head" class="a">Home</a>
	<a href="index.php#about_scroll" class="a">About</a>
	<a href="index.phpabout_app.html" class="a">About the S.E.E.D App</a>
	<a href="index.php#lu_scroll" class="a">Latest News</a>
	<a href="index.php#contact_scroll" class="a">Contact Us</a>
	<a class="a" onmouseover="show_quicklinks(1)" onmouseout="show_quicklinks(0)"><span class="chevron" style="display: inline-block;">Extras
	<div class="quicklinks" id="ql" style="display: none;">
	<span class="quicklinks_tab" onclick="ql_surf(1)">JSS SIM Login</span>
	<span class="quicklinks_tab" onclick="ql_surf(2)">JSS InfoConnect</span>
	<span class="quicklinks_tab" onclick="ql_surf(3)">JSS Website</span>
	<span class="quicklinks_tab" onclick="ql_surf(4)">AKTU Website</span>
	</div></span>
	</a>
	</div>
	</center>
	<img src="images/logo_small.jpeg" class="img_overlay fade" height="84px" width="84px" style="position: absolute;margin-left:4%;top:11px;border-radius: 100%;background-color:white;box-sizing: border-box;">
	<div style="position: absolute;top:70px;width:164px;right:1%;line-height: 28px;text-align: center;border-radius:8px 8px 0 0;background-color: rgba(255,255,255,0.2);">
	<a href="https://www.facebook.com/jssseed" target="_blank"><div class="fb social" ></div></a>
	<a href="https://www.youtube.com/channel/UCkAjX_ngcjQ_rjJ2m5pFUjg" target="_blank"><div class="yt social"></div></a>
	<a href="https://www.plus.google.com" target="_blank"><div class="gle social"></div></a>
	</div>
</header>
<section>
<center>
	<div style="margin-top: 110px;font-family: main2;letter-spacing: 0.5px;font-size: 16px;line-height: 30px">
	<div style="font-size: 24px;color:rgb(238,19,19);line-height: 60px;margin-bottom: 20px;">
	<div style="border:3px solid rgb(238,19,19);padding: 6px 30px 6px 30px;margin-top: 20%;width: 60%">You Have been Registered for Career Counselling Session Successfully.
	<br><br><span style="color: purple"><b>Date</b>: 6th Nov 2017 (Monday)<br><b>Venue</b> : AB3-213 Seminar Hall<br><b>Time</b>: 3:45pm - 4:30pm</span>
	<br><span style="font-size: 15px">Time and date of registration: 
	<?php
	$t=$_GET['t'];
	echo $t;
	?>
	</span>
	</div>
	</div>
	</div>
	</center>
	</section>
	</body>
	
<script>
function show_quicklinks(l)
{
	if(l==1)
	{
	document.getElementById("ql").style.display="block";
	document.getElementById("ql").className="quicklinks quicklinks_trans";
	}
	if(l==0)
	{
	document.getElementById("ql").style.display="none";
	}
}
function ql_surf(t){
	if(t==1)
	window.location.href = 'http://210.212.85.154/isimjss/login';
	if(t==2)
	window.location.href = 'http://210.212.85.155';
	if(t==3)
	window.location.href = 'http://www.jssaten.ac.in';
	if(t==4)
	window.location.href = 'https://aktu.ac.in';
}
</script>
</body>
</html>