 <!--
			 Creator :PADMESH KUNWAR(India)
			 Under no circumtances this source code is not public entity to be copied or distributed. 
			 For any violation S.E.E.D-Society has right to take an Action against it
-->
<!DOCTYPE html>
<html>
<head>
	<title>S.E.E.D - Society of Electrical and Electronics Department , JSS Noida</title>
    <meta name="viewport" content="width=screen-width,height=device-height,initial-scale=1.0">
    <meta name="description" content="S.E.E.D - JSS,Noida brings you the most updated,interactive and handy student portal to remain updated about happenings going about in the college,university and this technological world related to your branch.To access this fantastic extravanza download its exlusive app available on play store and on its website.">
    <link rel="icon" href="images/favicon.png" type="image/x-icon" /> 
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style type="text/css">
     @font-face{
    font-family:'main';
    src:url('fonts/Nunito/Nunito-Light.ttf') format('truetype');
}
    @media screen and (max-width:1275px)
    {
    body{
      width:1275px;
    }
    }
    input[type='text'],textarea
		{
		margin-top: 7px;
		margin-bottom: 7px; 
    	font-family: main2;
    	width:185px;
    	height: 25px;
    	border:1px solid #969696;
    	background-color:rgba(255,255,255,0.1);
    	filter: alpha(100);
    	border-radius: 2px;
    	color: rgb(238,19,19)
		}
		input[type='submit']
		{
			font-family: main2;
			border: 1px solid rgb(238,19,19);
			background: none;
			color: rgb(238,19,19);
			font-size:18px;
			width: 50%;
			height: 37px;
			margin-top: 15px;
			cursor: pointer;
		}
		input[type='submit']:hover
		{
			color: white;
			background-color: rgb(238,19,19);
			transition: 0.3s ease;
			border-radius: 3px
		}
		select{
      	margin-top: 8px;
      	margin-bottom: 8px;
      	border:1px solid #969696;
      	padding-left: 15px;
      	font-family: main;
      	border-radius: 4px;
      	box-sizing: border-box;
      	background-color:rgba(255,255,255,0.1);
      	height: 30px;
      	width: 35%;
   	   }
    </style>
</head>
<body onload="sliders()">
<a href="#top_head"><div class="btn_up" id="btn_up" style="display: none;"></div></a>
<header>
	<img id="top_head" src="images/b9.jpg" style="position: absolute;width: 100%;height: 105px;margin-top: 0;margin-left: 0;z-index: -2;opacity: 0.08">
	<center>
	<div style="margin-top:35px;margin-left: 3%;width:125px;border:2px solid white;border-radius:20%;display:inline-block"></div>
	<div style="font-size: 30px;padding:0 2% 0 2%;display:inline">Society of Electrical <span style="font-family: main2">&</span> Electronics Department</div>
	<div style="width:125px;border:2px solid white;border-radius:20%;display:inline-block"></div>
	<div style="margin-top: 29px;margin-left: 3%">
	<a href="#top_head" class="a">Home</a>
	<a href="#about_scroll" class="a">About</a>
	<a href="about_app.html" class="a">About the S.E.E.D App</a>
	<a href="#lu_scroll" class="a">Latest News</a>
	<a href="#contact_scroll" class="a">Contact Us</a>
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
	<div style="position: absolute;top:71px;width:164px;right:1%;line-height: 28px;text-align: center;border-radius:8px 8px 0 0;background-color: rgba(255,255,255,0.2);">
	<a href="https://www.facebook.com/jssseed" target="_blank"><div class="fb social" ></div></a>
	<a href="https://www.youtube.com/channel/UCkAjX_ngcjQ_rjJ2m5pFUjg" target="_blank"><div class="yt social"></div></a>
	<a href="https://www.plus.google.com" target="_blank"><div class="gle social"></div></a>
	</div>
</header>
<section>
	<div class="arrowleft"  onclick="change(-1)" ></div>
	<div class="arrowright" onclick="change(+1)"></div>
	<div class="whito"></div>
	
	<div class="slide_container fade" id="slider" style="display:block;background-image: url(images/bg1_s.jpg);background-size: 100% 100%;z-index: 1">
	<div class="blacko" style="background-color: rgba(0,0,0,0.5);">
	<center>
	<img src="images/logo.jpeg" height=180px width=180px class="img_overlay2" style="border-radius: 100%;background-color: rgba(255,255,255,0.0);margin-top: 3.5%;">
	</center>
	<div class="slide_text1 trans">
	<span style="font-size:25px;line-height: 35px;">Welcome to,</span>
	<br>
	Society of Electrical and Electronics Department
	<br>
	<span style="letter-spacing: 3px;font-size: 37px;">S.E.E.D</span>
	<br>
	<br>
	<span style="font-size: 30px"><b>JSS,Noida</b></span>
	</div>
	</div>
	</div>


		<div class="slide_container fade" id="slider" style="display:none;background-image: url(images/bg2_s.jpg);background-size: 100% 100%;z-index: 1">
		<div class="blacko" style="background-color: rgba(0,0,0,0.3);">
		<div class="slide_text2 trans2">
		<span style="font-size: 40px;line-height: 50px;width:600px">
		<b>DOWNLOAD THE EXTRAVAGANZA</b>
		</span>
		<br>
		<br>
		<span style="font-size: 25px;line-height: 40px;">
		<span style="letter-spacing: 3px">S.E.E.D&nbsp;</span>brings you a bucket of extravaganza.<br>Grab it soon.<br>Its Live.
		</span>
		</div>
		<center>
		<br>
		<a href="https://play.google.com/store/apps/details?id=com.blackbear.seedjss&hl=en">
			<div class="border_text android">
			DOWNLOAD THE APP
			</div>
			</a>
			<br>
			<a href="about_app.html">
			<span style="font-size: 15px;color: white;font-family: main;">
			<u>Learn More</u>
			</span>
			</a>
		</center>
		<img src="images/smartphone.png" style="position: absolute;bottom:0px;right:100px;opacity: 0.9">
		<img src="images/capture.png" style="position: absolute;bottom:64px;right:220px;height:182px;width:103.5px;">
		</div>
		</div>


		<div class="slide_container fade" id="slider" style="display:none;background-image: url(images/bg3_s.jpg);background-size: 100% 100%;z-index: 1">
		<div class="blacko" style="background-color: rgba(0,0,0,0.4);">
		<div class="slide_text2 trans2">
		<span style="font-size: 40px;line-height: 50px;width:600px">
		<b>LATEST UPDATES</b>
		</span>
		<br>
		<br>
		<span style="font-size: 25px;line-height: 40px;">
		Catch the latest updates,news and live feeds<br>happening in <span style="letter-spacing: 3px">S.E.E.D&nbsp;</span>
		</span>
		</div>
		<center>
		<br>
		<a href="#lu_scroll">
			<div class="border_text ud">
			CATCH LIVE UPDATES
			</div>
			</a>
			</center>
			</div>
			</div>

			<div class="slide_container fade" id="slider" style="display:none;background-image: url(images/bg4_s.jpg);background-size: 100% 100%;z-index: 1">
		<div class="blacko" style="background-color: rgba(0,0,0,0.3);">
		<div class="slide_text2 trans2">
		<span style="font-size: 40px;line-height: 50px;width:600px">
		<b>ABOUT THE SOCIETY</b>
		</span>
		<br>
		<br>
		<span style="font-size: 25px;line-height: 40px;">
		Get in touch with the society <span style="letter-spacing: 3px">S.E.E.D&nbsp;</span>.<br>Know about its aim,<br>
		its functioning and about the<br>
		beautiful crew which make this a<br>
		wonderful place to be.
		</span>
		</div>
		<center>
		<br>
		<br>
		<br>
		<a href="#about_scroll">
			<div class="border_text star" style="width: 250px;">
			KNOW ABOUT THE SOCIETY
			</div>
			</a>
			</center>
			</div>
			</div>


			<div class="slide_container fade" id="slider" style="display:none;background-image: url(images/bg5_s.png);background-size: 100% 100%;z-index: 1">
		<div class="blacko" style="background-color: rgba(0,0,0,0.3);">
		<div class="slide_text2 trans2">
		<span style="font-size: 40px;line-height: 50px;width:600px">
		<b>GLIMPSE FROM PAST</b>
		</span>
		<br>
		<br>
		<span style="font-size: 25px;line-height: 40px;">
		Have a tour on the society's memories it<br>
		wants to share.The gallery is one of<br>
		the most prestigious memoranda the <br>
		society <span style="letter-spacing: 3px">S.E.E.D&nbsp;</span>wants to share with you.
		</span>
		</div>
		<center>
		<br>
		<br>
		<br>
		<a href="#gall_scroll">
			<div class="border_text camera">
			VISIT THE GALLERY
			</div>
			</a>
			</center>
			</div>
			</div>

</section>

<section>
<div class="live_up_container" id="lu_scroll">
	<div class="cont_head"><span id="lu_heading" style="display:none;">LIVE UPDATES</span></div>
	<img src="images/b9.jpg" style="position: absolute;width: 100%;height: 100px;top: 0;margin-left: 0;z-index: 0;opacity: 0.06">

	<div class="live_up_text trans4 live_up_gradient" id="lu1" style="display:none;margin-top:40px;margin-left: 90px;width:300px;border:8px solid rgb(238,19,19);border-radius: 10px;background-color:  rgb(250,250,250)">
	<center>
		<span style="font-size:21px;line-height:40px;margin-top:15px;color: rgb(238,19,19);padding-bottom:3px;border-bottom: 2.5px solid rgba(238,19,19,0.9);">Event / Workshop</span>
		<br>
		<span style="font-size:17px;line-height:40px;color:blue"><b>CAREER COUNSELLING SESSION</b></span>
	</center>
	<span style="font-size:17.5px;line-height:30px;padding:0 2px 15px 18px;box-sizing: border-box;display: inline-block;"><b>S.E.E.D (JSS,Noida)</b> in collaboration with <b>IES Masters</b> conducting a career counselling session with <b>Mr.Vishal Soni (25<sup>th</sup> Rank,ESE-2015)</b> as guest speaker.Dont't miss the chance to be a part of this Auspicious moment.
	</span>
	</div>

	<div class="live_up_text trans4 live_up_gradient" id="lu2" style="display:none;margin-top:350px;margin-left: 90px;width:300px;border:8px solid rgb(238,19,19);border-radius: 10px;background-color:  rgb(250,250,250)">
	<center>
		<span style="font-size:21px;line-height:40px;margin-top:15px;color: rgb(238,19,19);padding-bottom:3px;border-bottom: 2.5px solid rgba(238,19,19,0.9);">Date</span>
		<br>
	<span style="font-size:17px;line-height:30px;padding:5px 2px 15px 18px;box-sizing: border-box;display: inline-block;">6<sup>th</sup> November,2017
	</span>
	</center>
	</div>

	<div class="live_up_text trans5 live_up_gradient" id="lu3" style="display:none;margin-top:40px;margin-left: 450px;width:300px;border:8px solid rgb(238,19,19);border-radius: 10px;background-color: rgb(250,250,250);font-weight:120;">
	<center>
		<span style="font-size:21px;line-height:40px;margin-top:15px;color: rgb(238,19,19);padding-bottom:3px;border-bottom: 2.5px solid rgba(238,19,19,0.9);">Venue</span>
		<br>
	<span style="font-size:17px;line-height:30px;padding:5px 2px 15px 18px;box-sizing: border-box;display: inline-block;">AB-3 ,Room No. : 213<br>JSSATE,Noida
	</span>
	</center>
	</div>

	<div class="live_up_text trans5 live_up_gradient" id="lu4" style="display:none;margin-top:350px;margin-left: 450px;width:300px;border:8px solid rgb(238,19,19);border-radius: 10px;background-color: rgb(250,250,250)">
	<center>
		<span style="font-size:21px;line-height:40px;margin-top:15px;color: rgb(238,19,19);padding-bottom:3px;border-bottom: 2.5px solid rgba(238,19,19,0.9);">Timing</span>
		<br>
	<span style="font-size:17px;line-height:30px;padding:5px 2px 15px 18px;box-sizing: border-box;display: inline-block;">3:45PM to 4:45PM
	</span>
	</center>
	</div>

	<a href="../register" title="Register for the Event">
	<div class="trans4" style="position:absolute;width:160px;margin-top:480px;margin-left: 130px;background-color: #2ECC71;color: white;line-height: 35px;font-size: 16px;border-radius: 3px;border:1px solid #229954;font-family: main2;text-align: center;display:block;">
  <strong>Register Now</strong>
  </div>
  </a>

	<img src="images/poster.jpg" alt="Apply Event's Poster Here" style="position:absolute;width: 415px;height: 500px;margin-top:20px;right:35px;border:8px solid rgb(238,19,19);">

</div>
</section>

<section>
	<div class="about_container" id="about_scroll">
	<div class="cont_head"><span id="about_heading" style="display:none;">THE TEAM</span></div>
	<img src="images/b9.jpg" style="position: absolute;width: 100%;height: 100px;top: 0;margin-left: 0;z-index: 0;opacity: 0.06">
	<div class="about_text">
	
	<div id="about_part1" style="display: block;">
	<div style="position:absolute;box-sizing: border-box;margin-left: 45px;margin-top:25px;width:250px;height: 255px;">
	<center>
		<img src="images/people/mohit.jpg" style="width:135px;height: 135px;box-sizing: border-box;border:4px solid rgb(238,19,19);border-radius: 100%;">
		<br>
		<span style="line-height: 40px;font-size:23px;color: white;background-color: rgb(238,19,19);padding:4px 10px 4px 10px">
      MOHIT MALHOTRA
      </span>
      <br>
      <span style="line-height: 27px;font-size:20px;">
       <b>President</b> , S.E.E.D
      </span>
      <br>
      <span style="line-height: 27px;font-size:18px;">
      jssateneee@gmail.com
      </span>
      <br>
      <span style="line-height: 27px;font-size:18;font-family:main2;">
      +91 9818260294 
      </span>
    </span>
	</center>
	</div>

	<div style="position:absolute;box-sizing: border-box;margin-left: 78%;margin-top:25px;width:250px;height: 255px;">
	<center>
		<img src="images/people/vp.jpg" style="width:135px;height: 135px;box-sizing: border-box;border:4px solid rgb(238,19,19);border-radius: 100%;">
		<br>
		<span style="line-height: 40px;font-size:23px;color: white;background-color: rgb(238,19,19);padding:4px 10px 4px 10px">
      UTKARSHA SHUKLA
      </span>
      <br>
      <span style="line-height: 27px;font-size:20px;">
      <b>Vice-President</b> , S.E.E.D
      </span>
      <br>
      <span style="line-height: 27px;font-size:18px;">
      email@company.com
      </span>
      <br>
      <span style="line-height: 27px;font-size:18;font-family: main2;">
      +91 XXXXXXXXXX 
      </span>
    </span>
	</center>
	</div>

	<center>
	<div style="padding-top:10px;padding-bottom:0px;font-family: main;font-size: 25px;width:70px;"> AIM</div>
	<div style="width:48.5%;line-height: 28px;font-size:18px;">Electrino is an initiative by the students of Electrical and Electronics department at JSSATE Noida . We hereby aim to deliver the best to the students in terms of technical knowledge and innovations going on in the field of Engineering. We associate ourselves with one of the prestigious college of northern India, JSS Academy of Technical Education. It is hitherto our aim to live upto the expectations of the name that we carry.
	</div>
	<br><br><br>
	<span style="font-size: 25px;font-weight: bold">CORE TEAM</span>
	</center>

	<center>
		<div style="margin-top:30px;height: 225px;width: 100%;box-sizing: border-box;padding-top: 8px">
			
			<div style="position:absolute;margin-left: 0.74%;width:12.96%;">
			<img src="images/people/us_ctc.jpg" height="115px" width="115px" style="box-sizing: border-box;border-radius: 100%">
			<br>
			<span style="line-height: 40px;font-size: 17px;">
			UTKARSH SINGH
			</span>
			<br>
			<span style="line-height: 35px;font-size: 16px;border:1px solid rgb(238,19,19);padding:4px 7px 4px 7px;color:rgb(238,19,19)">
			CTC Head
			</span>
			</div>

			<div style="position:absolute;margin-left: 14.44%;width:12.96%">
			<img src="images/people/somesh.jpg" height="115px" width="115px" style="box-sizing: border-box;border-radius: 100%">
			<br>
			<span style="line-height: 40px;font-size: 17px;">
			SOMESH JAISWAL
			</span>
			<br>
			<span style="line-height: 35px;font-size: 16px;border:1px solid rgb(238,19,19);padding:4px 7px 4px 7px;color:rgb(238,19,19)">
			Editorial Head
			</span>
			</div>

			<div style="position:absolute;margin-left: 28.15%;width:14.44%">
			<img src="images/people/shubham.png" height="115px" width="115px" style="box-sizing: border-box;border-radius: 100%">
			<br>
			<span style="line-height: 40px;font-size: 16px;">
			SHUBHAM SRIVASTAVA
			</span>
			<br>
			<span style="line-height: 35px;font-size: 16px;border:1px solid rgb(238,19,19);padding:4px 7px 4px 7px;color:rgb(238,19,19)">
			Technical Head
			</span>
			</div>

			<div style="position:absolute;margin-left: 44.07%;width:12.96%">
			<img src="images/people/ujjwal.jpg" height="115px" width="115px" style="box-sizing: border-box;border-radius: 100%">
			<br>
			<span style="line-height: 40px;font-size: 17px;">
			UJJWAL CHAUHAN
			</span>
			<br>
			<span style="line-height: 35px;font-size: 16px;border:1px solid rgb(238,19,19);padding:4px 7px 4px 7px;color:rgb(238,19,19)">
			R & D Head
			</span>
			</div>

			<div style="position:absolute;margin-left: 58.15%;width:12.96%">
			<img src="images/people/zenab.jpg" height="115px" width="115px" style="box-sizing: border-box;border-radius: 100%">
			<br>
			<span style="line-height: 40px;font-size: 17px;">
			ZENAB MUSTAFA
			</span>
			<br>
			<span style="line-height: 35px;font-size: 16px;border:1px solid rgb(238,19,19);padding:4px 7px 4px 7px;color:rgb(238,19,19)">
			Publicity Head
			</span>
			</div>

			<div style="position:absolute;margin-left: 72.22%;width:12.96%">
			<img src="images/people/rishabh.jpg" height="115px" width="115px" style="box-sizing: border-box;border-radius: 100%">
			<br>
			<span style="line-height: 40px;font-size: 17px;">
			RISHABH SHARMA
			</span>
			<br>
			<span style="line-height: 35px;font-size: 16px;border:1px solid rgb(238,19,19);padding:4px 7px 4px 7px;color:rgb(238,19,19)">
			Management Head
			</span>
			</div>

			<div style="position:absolute;margin-left: 85.56%;width:14.07%">
			<img src="images/people/sand.png" height="115px" width="115px" style="box-sizing: border-box;border-radius: 100%">
			<br>
			<span style="line-height: 40px;font-size: 16px;">
			SHREYANSH R. SAND
			</span>
			<br>
			<span style="line-height: 35px;font-size: 15px;border:1px solid rgb(238,19,19);padding:4px 7px 4px 7px;color:rgb(238,19,19)">
			Security Head
			</span>
			</div>


		</div>
			<br>
				<span class="view_crew" onclick="view_crew()">View the Full Crew</span>
			</center>
			</div>

			<div id="about_part2" style="display: none;color: #ECECEC;">
			<center>
			<div class="arrowleft_about" onclick="view_back()">&nbsp;&nbsp;&nbsp;Go Back</div>
			<div  style="width:880px;font-family: main2;cursor: pointer;color: #757575;">
			<div class="about_part2_tab" id="tab1" onclick="view_chiefs()" style="margin-left: 0;">OUR CHEIF'S</div>
			<div class="about_part2_tab" id="tab2" onclick="view_3rdyear()" style="margin-left: 220px;">3rd YEARS</div>
			<div class="about_part2_tab" id="tab3" onclick="view_2ndyear()" style="margin-left: 440px;">2nd YEARS</div>
			<div class="about_part2_tab" id="tab4" onclick="view_1styear()" style="margin-left: 660px">1st YEARS</div>
			</div>
			</center>

			<div id="our_cheifs" style="display: none;">
			<center>
			<div style="box-sizing: border-box;width:430px;height:150px;margin-top: 100px;border:1px solid darkgrey">
			<img src="images/people/hod.jpg" style="float:left;margin-left:20px;margin-top:5px;width:140px;height: 140px;">
    		<span style="float:left;margin-top:20px;margin-left:20px;box-sizing: border-box;width:200px">
      		<span style="line-height: 44px;font-size:22px;">
      		 Dr. Ashish Srivastav
      		</span>
     		 <br>
      		<span style="line-height: 25px;font-size:17px;right: 0px">
      		 HOD EE/EEE
      		</span>
      		<br>
      		<span style="line-height: 25px;font-size:16.5px;">
      	    hodee@jssaten.ac.in
      		</span>
   			</span>
			</div>

			<div style="box-sizing: border-box;width:430px;height:150px;margin-top: 50px;border:1px solid darkgrey">
			<img src="images/people/coordinator.jpg" style="float:left;margin-left:20px;margin-top:4px;width:140px;height: 140px;">
    		<span style="float:left;margin-top:20px;margin-left:20px;box-sizing: border-box;width:200px">
      		<span style="line-height: 44px;font-size:22px;">
      		  Anand Kr. Pandey
      		</span>
     		 <br>
      		<span style="line-height: 25px;font-size:17px;right: 0px">
      		  Co-ordinator, S.E.E.D
      		</span>
      		<br>
      		<span style="line-height: 25px;font-size:16.5px;">
      	    anandkrpandey@ jssaten.ac.in
      		</span>
   			</span>
			</div>
			</center>
			</div>

			<div id="3rd_year" style="display: none;">
			<center>
				<div style="box-sizing: border-box;width:850px;height:150px;margin-top: 55px;">
				<div style="float: left;width:120px;margin-left:40px;">
				<img src="images/people/nitin.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px">NITIN SINGH</span>
				</div>
				<div style="float: left;width:150px;margin-left:25px;">
				<img src="images/people/ayush.png" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">AAYUSH KASHYAP</span>
				</div>
				<div style="float: left;width:150px;margin-left:25px;">
				<img src="images/people/saumya.png" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">SAUMYA</span>
				</div>
				<div style="float: left;width:140px;margin-left:25px;">
				<img src="images/people/saloni.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">SALONI SHARMA</span>
				</div>
				<div style="float: left;width:140px;margin-left:25px;">
				<img src="images/people/ritika.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">RITIKA MAKAR</span>
				</div>
				</div>

				<div style="box-sizing: border-box;width:850px;height:150px;margin-top: 30px;">
				<div style="float: left;width:120px;margin-left:40px;">
				<img src="images/people/sneha.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px">SNEHA SINGH</span>
				</div>
				<div style="float: left;width:150px;margin-left:25px;">
				<img src="images/people/sonu.png" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">SONU KUMAR</span>
				</div>
				<div style="float: left;width:160px;margin-left:15px;">
				<img src="images/people/sandeep.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">SANDEEP BELDAAR</span>
				</div>
				<div style="float: left;width:140px;margin-left:25px;">
				<img src="images/people/rohan.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">ROHAN SONI</span>
				</div>
				<div style="float: left;width:140px;margin-left:25px;">
				<img src="images/people/abhijeet.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">ABHIJEET GUPTA</span>
				</div>
				</div>

				<div style="box-sizing: border-box;width:850px;height:150px;margin-top: 30px;">
				<div style="float: left;width:120px;margin-left:40px;">
				<img src="images/people/ayushi.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px">AYUSHI SINGH</span>
				</div>
				<div style="float: left;width:150px;margin-left:25px;display: none;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">Sample space 2</span>
				</div>
				<div style="float: left;width:150px;margin-left:25px;display: none;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">Sample space 3</span>
				</div>
				</div>
			</center>
			</div>

			<div id="2nd_year" style="display: none;">
			<center>
				<div style="box-sizing: border-box;width:850px;height:150px;margin-top: 55px;">
				<div style="float: left;width:160px;margin-left:10px;">
				<img src="images/people/deepak_s_b.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px">DEEPAK SRIBATHAM</span>
				</div>
				<div style="float: left;width:150px;margin-left:15px;">
				<img src="images/people/pulkit.png" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">PULKIT BANSAL</span>
				</div>
				<div style="float: left;width:140px;margin-left:15px;">
				<img src="images/people/prateek.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">PRATEEK RANJAN</span>
				</div>
				<div style="float: left;width:160px;margin-left:20px;">
				<img src="images/people/padmesh.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">PADMESH KUNWAR</span>
				</div>
				<div style="float: left;width:150px;margin-left:20px;">
				<img src="images/people/ishita.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">ISHITA SRIVASTAVA</span>
				</div>
				</div>

				<div style="box-sizing: border-box;width:850px;height:150px;margin-top: 20px;">
				<div style="float: left;width:140px;margin-left:20px;">
				<img src="images/people/shailza.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px">SHAILZA DUBEY</span>
				</div>
				<div style="float: left;width:150px;margin-left:25px;">
				<img src="images/people/abhishek.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">ABHISHEK SINGH</span>
				</div>
				<div style="float: left;width:160px;margin-left:10px;">
				<img src="images/people/jayant.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">JAYANT PATEL</span>
				</div>
				<div style="float: left;width:140px;margin-left:15px;">
				<img src="images/people/komal.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">KOMAL GUPTA</span>
				</div>
				<div style="float: left;width:150px;margin-left:30px;">
				<img src="images/people/padmaja.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">PADMAJA PANDE</span>
				</div>
				</div>

				<div style="box-sizing: border-box;width:850px;height:150px;margin-top: 30px;">
				<div style="float: left;width:120px;margin-left:30px;">
				<img src="images/people/shelly.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px">SHELLY YADAV</span>
				</div>
				<div style="float: left;width:170px;margin-left:20px;">
				<img src="images/people/shivangi.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">SHIVANGI THAPLIYAL</span>
				</div>
				<div style="float: left;width:180px;margin-left:10px;">
				<img src="images/people/divakar.jpg" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">DIVAKAR CHOUDHARY</span>
				</div>
				</div>
			</center>
			</div>

			<div id="1st_year" style="display: none;">
			<center>
			<div style="z-index: 1000;font-size: 50px;font-weight: bold;margin-top:250px">Coming Soon !!!</div>
			<div style="display: none;"><!--closed this div just before next </center>-->
				<div style="box-sizing: border-box;width:850px;height:150px;margin-top:55px;">
				<div style="float: left;width:120px;margin-left:40px;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px">NA</span>
				</div>
				<div style="float: left;width:150px;margin-left:25px;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">NA</span>
				</div>
				<div style="float: left;width:120px;margin-left:25px;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">NA</span>
				</div>
				<div style="float: left;width:150px;margin-left:25px;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">NA</span>
				</div>
				<div style="float: left;width:150px;margin-left:25px;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">NA</span>
				</div>
				</div>

				<div style="box-sizing: border-box;width:850px;height:150px;margin-top: 30px;">
				<div style="float: left;width:120px;margin-left:40px;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px">NA</span>
				</div>
				<div style="float: left;width:150px;margin-left:25px;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">NA</span>
				</div>
				<div style="float: left;width:160px;margin-left:25px;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">NA</span>
				</div>
				<div style="float: left;width:140px;margin-left:25px;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">NA</span>
				</div>
				<div style="float: left;width:120px;margin-left:25px;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">NA</span>
				</div>
				</div>

				<div style="box-sizing: border-box;width:850px;height:150px;margin-top: 30px;">
				<div style="float: left;width:120px;margin-left:40px;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px">NA</span>
				</div>
				<div style="float: left;width:150px;margin-left:25px;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">NA</span>
				</div>
				<div style="float: left;width:150px;margin-left:25px;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">NA</span>
				</div>
				<div style="float: left;width:150px;margin-left:25px;">
				<img src="images/people/" style="width:110px;height:110px;box-sizing: border-box;border-radius: 100%">
				<br>
				<span style="line-height: 30px;font-size:17px;">NA</span>
				</div>
				</div>
				</div>
				</div>
			</center>
			</div>


			</div>
	  </div>
			
	 </div>
</section>

<section>
  <div class="gallery_container" id="gall_scroll">
  <div class="cont_head"><span id="gallery_heading" style="display:none;"><span style="letter-spacing: 3px">S.E.E.D</span> GALLERY</span></div>
  <img src="images/b9.jpg" style="position: absolute;width: 100%;height: 100px;top: 0;margin-left: 0;z-index: 0;opacity: 0.06">
  <div class="arrowleft_gall" onclick="change2(99)"></div>
  <div class="arrowright_gall" onclick="change2(100)"></div>
    <center>
    <div style="width:1000px;height:557px;top:100px;z-index: 1">
    <div class="whito2"></div>
    <?php
  include '../img_data.php';
  while($row=mysqli_fetch_array($data,MYSQLI_BOTH))
{
  $detail=$row['detail'];
  $url=$row['url'];
  if($count==0)
  {
  echo "<div class=\"gallery_img\" style=\"display:block\"><img class=\"fade\" src=\"".$url."\" style=\"float:left;width:1000px;height:557px;\"></div>\n";
  echo "<div class=\"gallery_caption gall_cap gall_cap_text\" style=\"display:block\">".$detail."</div>\n";
  }
  else
  {
  echo "<div class=\"gallery_img\" style=\"display:none\"><img class=\"fade\" src=\"".$url."\" style=\"float:left;width:1000px;height:557px;\"></div>\n";
  echo "<div class=\"gallery_caption gall_cap gall_cap_text\" style=\"display:none\">".$detail."</div>\n";
  }
  $count++;
}
mysqli_close($conn);
?>
</div>
    </center>
    <div class="dis_bottommiddle">
<?php
for($j=0;$j<$count;$j++)
  if($j==0)
  echo "<span class=\"dots dot_filled\" onclick=\"change2(".$j.")\"></span>\n";
  else
  echo "<span class=\"dots dot_empty\" onclick=\"change2(".$j.")\"></span>\n";
?>
    </div>
  </div>
</section>

<section>
	<div class="contact_container" id="contact_scroll">
	<img id="fixed_img" src="images/contact_us_bg.jpg" style="position: fixed;top:0px;width: 100%;height: 100%;z-index: -10;">
	<div class="cont_head"><span id="contact_heading" style="display:none;"> CONTACT US</span></div>
	<img src="images/b9.jpg" style="position: absolute;width: 100%;height: 100px;top: 0;margin-left: 0;z-index: 0;opacity: 0.06">
	<center>
		<div style="width:1050px;height:513px;top:0px;background-color: rgba(255,255,255,0.5);">
		<div class="ct" style="margin-top: 45px;">
		<div class="address" style="float:left;width:100px;height:110px;background-color: #f8f9f9"></div>
		<div style="position:absolute;float:left;width:280px;height:110px;margin-left: 100px">
			<div style="border-bottom: 1px solid #969696;width:100%;height:30px;line-height: 30px">ADDRESS</div>
			<div style="box-sizing: border-box;padding-top:10px;width:100%;height:75px;line-height: 30px;font-size:20px;">Academic Block-2<br>JSSATE , Noida</div>
		</div>
		</div>

		<div class="ct" style="margin-top: 185px;">
		<div class="email" style="float:left;width:100px;height:110px;background-color: #f8f9f9"></div>
		<div style="position:absolute;float:left;width:280px;height:110px;margin-left: 100px">
			<div style="border-bottom: 1px solid #969696;width:100%;height:30px;line-height: 30px">EMAIL</div>
			<div style="box-sizing: border-box;padding-top:10px;width:100%;height:75px;line-height: 60px;font-size:20px;">electrino@jssaten.ac.in</div>
		</div>
		</div>

		<div class="ct" style="margin-top: 325px;">
		<div class="phone" style="float:left;width:100px;height:110px;background-color: #f8f9f9"></div>
		<div style="position:absolute;float:left;width:280px;height:110px;margin-left: 100px">
			<div style="border-bottom: 1px solid #969696;width:100%;height:30px;line-height: 30px">CALL</div>
			<div style="box-sizing: border-box;padding-top:10px;width:100%;height:75px;line-height: 60px;font-size:20px;">+91 9818260294</div>
		</div>
		</div>

		<div class="ct_feed">
		<span class="write" style="line-height: 45px;font-size: 18px">WRITE TO US</span>
		<hr size="1">
		<form action="feedback_submit.php" method="post">
		<input type="text" name="name" placeholder="NAME" style="text-align: center;">&nbsp;&nbsp;&nbsp;
		<input type="text" name="email" placeholder="EMAIL" style="text-align: center;">
		<br>
		<select name="year" id="year"><option value="0">Select Year</option><option value="1">1st Year</option><option value="2">2nd Year</option><option value="3">3rd Year</option><option value="4">4th Year</option></select>&nbsp;&nbsp;&nbsp;
		<select name="branch" id="branch"><option value="0">Select Branch</option><option value="CS">CS</option><option value="EC">EC</option><option value="IT">IT</option><option value="EE">EE</option><option value="EEE">EEE</option><option value="CE">CE</option><option value="ME">ME</option><option value="IC">IC</option></select>
		<br>
		<input type="text" name="contact" placeholder="Contact Number (+91)" maxlength="10" style="text-align: center;color: purple">
		<br>
		<textarea name="message" style="width: 70%;height: 70px;padding: 10px" placeholder="Message Here"></textarea>
		<input type="submit" value="Send Query / Feedback">
		</form>
		</div>

		</div>
	</center>
<footer>
<span style="font-size: 17px;color: white;">&copy;&nbsp;</span><span style="letter-spacing: 1px">S.E.E.D</span> - 2017
<br>
<span style="position:absolute;font-size: 12.5px;bottom:5px;right:10px;font-family: main;cursor: pointer;letter-spacing: 1px"><a href="mailto:kunwarpadmesh@yahoo.com" style="text-decoration: none;color: inherit;">Website designed and developed by : Padmesh Kunwar</a></span>
</footer>
</div>
</section>
<script>
var index=0;
var x;
var timer;
var d=document.getElementsByClassName("slide_container");
function change(a)
{
	var index2;
	if(a==+1 || a==-1)
	window.clearInterval(x);
	if(index==0 && a==-1)
	{
		index=d.length-1;
		index2=0;
		d[index].style.display = "block";
    	d[index2].style.display = "none";
	}
	else if(index==d.length-1 && (a==+1||a==0))
	{
		index=0;
		index2=d.length-1;
		d[index].style.display = "block";
    	d[index2].style.display = "none";
	}
	else
	{
		index+=a;
		if(a==0)
		index+=1;
		if(a==-1)
		index2=index+1;
		if(a==+1||a==0)
		index2=index-1;
		d[index].style.display = "block";
    	d[index2].style.display = "none";
	}
	if(a==+1 || a==-1)
	x=window.setInterval(function(){change(0)},7000);
}

function sliders(){
	x=window.setInterval(function(){change(0)},7000);
	timer=window.setInterval(function(){change2(69)},5000);
}
</script>

<script type="text/javascript">
	function view_crew()
	{
		document.getElementById("about_part1").style.display="none";
		document.getElementById("about_part2").style.display="block";
		document.getElementById("our_cheifs").style.display="block";
		document.getElementById("tab1").className="about_part2_tab about_part2_tab_2";

	}
	function view_chiefs()
	{
		document.getElementById("our_cheifs").style.display="block";
		document.getElementById("3rd_year").style.display="none";
		document.getElementById("2nd_year").style.display="none";
		document.getElementById("1st_year").style.display="none";
		document.getElementById("tab1").className="about_part2_tab about_part2_tab_2";
		document.getElementById("tab2").className="about_part2_tab";
		document.getElementById("tab3").className="about_part2_tab";
		document.getElementById("tab4").className="about_part2_tab";

	}
	function view_3rdyear()
	{
		document.getElementById("3rd_year").style.display="block";
		document.getElementById("our_cheifs").style.display="none";
		document.getElementById("2nd_year").style.display="none";
		document.getElementById("1st_year").style.display="none";
		document.getElementById("tab2").className="about_part2_tab about_part2_tab_2";
		document.getElementById("tab1").className="about_part2_tab";
		document.getElementById("tab3").className="about_part2_tab";
		document.getElementById("tab4").className="about_part2_tab";

	}
	function view_2ndyear()
	{
		document.getElementById("2nd_year").style.display="block";
		document.getElementById("our_cheifs").style.display="none";
		document.getElementById("3rd_year").style.display="none";
		document.getElementById("1st_year").style.display="none";
		document.getElementById("tab3").className="about_part2_tab about_part2_tab_2";
		document.getElementById("tab1").className="about_part2_tab";
		document.getElementById("tab2").className="about_part2_tab";
		document.getElementById("tab4").className="about_part2_tab";

	}
	function view_1styear()
	{
		document.getElementById("1st_year").style.display="block";
		document.getElementById("our_cheifs").style.display="none";
		document.getElementById("2nd_year").style.display="none";
		document.getElementById("3rd_year").style.display="none";
		document.getElementById("tab4").className="about_part2_tab about_part2_tab_2";
		document.getElementById("tab1").className="about_part2_tab";
		document.getElementById("tab3").className="about_part2_tab";
		document.getElementById("tab2").className="about_part2_tab";

	}
	function view_back()
	{
		document.getElementById("3rd_year").style.display="none";
		document.getElementById("our_cheifs").style.display="none";
		document.getElementById("2nd_year").style.display="none";
		document.getElementById("1st_year").style.display="none";
		document.getElementById("about_part2").style.display="none";
		document.getElementById("about_part1").style.display="block";
		document.getElementById("tab4").className="about_part2_tab";
		document.getElementById("tab1").className="about_part2_tab";
		document.getElementById("tab3").className="about_part2_tab";
		document.getElementById("tab2").className="about_part2_tab";
	}
</script>
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
<script src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="scroll.js"></script>
</body>
</html>