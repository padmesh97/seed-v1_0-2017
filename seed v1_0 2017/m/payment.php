<!DOCTYPE html>
<html>
<head>
	<title>Pay Now - S.E.E.D</title>
	<meta name="viewport" content="width=screen-width,height=device-height,initial-scale=1.0">
	<link rel="icon" href="images/favicon.png" type="image/x-icon" /> 
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
    .hh{
        border:1px solid green;color:green;padding: 6px 30px 6px 30px;height: 25px;line-height:25px;font-size: 17px;cursor: pointer;background-color: white;
    }
    .hh:hover{
        background-color: green;
        color: white;
        transition: 0.5s ease;
    }
    .bdy{
        position: absolute;
       background-image:url("images/p_bg.jpg");
       background-repeat:repeat;
    }
    </style>
    </head>
<body class="bdy">
<header style="background-color: rgb(238,19,19);box-shadow: 1px 1px 5px grey">
<strong>
S.E.E.D
</strong>
</header>

<span style="position:fixed;z-index:4;height:24px;width: 24px;padding-top: 11px;top:8px;padding-left: 13px;cursor: pointer;" onclick="openNav()"><img src="images/nav_lines.png" width="22px" height="22px"></span>



<div  id="sidenav1" class="sidenav">
<div id="img_nav">
  <div style="position:absolute;display:block;top:110px;margin-left:15px;font-family: font2;width:80%;float:left;color:white">
  <span style="font-size:14px;letter-spacing: 4px;">
  S.E.E.D
  </span>
  <br>
  <span style="font-size:16px;letter-spacing: 2px;">
  JSS , Noida
  </span>
  </div>
</div>
  <div class="sidenav_bar">
     <a href="index.php">
        <img src="images/home_s.png" height="50px" width="50px">
        <span class="sidenav_text2">Home</span>
     </a>
  </div>

  <div class="sidenav_bar">
     <a href="about.html">
        <img src="images/about_s.png" height="50px" width="50px">
        <span class="sidenav_text2">About</span>
     </a>
  </div>

  <div class="sidenav_bar">
     <a href="contact.html">
        <img src="images/contact_s.png" height="50px" width="50px">
        <span class="sidenav_text2">Contact Us</span>
     </a>
  </div>

  <div class="sidenav_bar">
     <a href="info_app.html">
        <img src="images/info_s.png" height="50px" width="50px">
        <span class="sidenav_text2">About S.E.E.D App</span>
     </a>
  </div>

  <div class="sidenav_bar">
     <a href="live_up.html">
        <img src="images/gift_s.png" height="50px" width="50px">
        <span class="sidenav_text2">S.E.E.D Live Updates</span>
     </a>
  </div>

  <hr size=1 style="position: relative;width:100%;" >

  <div style="height:30px;width:100%;box-sizing: border-box;padding:0 0 0 10px;font-size: 110%;z-index: 6;color:#A3A3A3;display: inline-block;">Extras
  </div>

  <div class="sidenav_bar">
     <a href="http://210.212.85.154/isimjss/login">
        <img src="images/extra_s.png" height="50px" width="50px">
        <span class="sidenav_text2">JSS SIM</span>
     </a>
  </div>

  <div class="sidenav_bar">
     <a href="http://210.212.85.155">
        <img src="images/extra_s.png" height="50px" width="50px">
        <span class="sidenav_text2">JSS InfoConnect</span>
     </a>
  </div>

  <div class="sidenav_bar">
     <a href="https://aktu.ac.in">
        <img src="images/extra_s.png" height="50px" width="50px">
        <span class="sidenav_text2">AKTU Website</span>
     </a>
  </div>

  <div class="sidenav_bar" >
     <a href="http://www.jssaten.ac.in">
        <img src="images/extra_s.png" height="50px" width="50px">
        <span class="sidenav_text2">JSS Website</span>
     </a>
  </div>

  <div style="height:70px;width: 100%; display: inline-block;box-sizing: border-box;z-index: 6;">
  <center>
     <a href="https://www.facebook.com/jssseed">
        <img src="images/fb_s.ico" style="position: relative;padding:20px 0 0 0;width:40px" height="30px" width="30px">
     </a>
     &nbsp;
     <a href="https://www.youtube.com/channel/UCkAjX_ngcjQ_rjJ2m5pFUjg">
        <img src="images/yt_s.ico" style="position: relative;padding:20px 0 0 0;width:40px" height="30px" width="30px">
     </a>
     &nbsp;
     <a href="https://www.plus.google.com">
        <img src="images/gle_s.png" style="position: relative;padding:20px 0 0 0;width:40px" height="30px" width="30px">
     </a>
     </center>
 </div>

</div>

<a href="javascript:void(0)" id="sidenav2" class="sidenav_rest" onclick="closeNav()"></a>
<div id="part1" style="margin-top:215px;font-family: main;display:block;">
<center>
    <div style="border:1px solid green;padding: 20px;font-size: 18px;color: green;width: 70%;background-color: white">
    You Have been registered successfully.
    <br><br>
    <span style="font-size: 18px;">
    Your Team Number is :&nbsp;&nbsp;
    <span id="team" style="border:2px solid purple;color: purple;padding: 8px 10px 8px 10px;font-size: 22px">
       <?php
       $t=$_GET['t'];
       echo $t;
       ?> 
    </span>
    <br>
    <br>
    <span style="color: rgb(238,19,19);font-size: 14.5px;"><strong>*** Please Keep this number safe ***</strong></span>
    </span>
    </div>
     <br>
    <br>
    <span class="hh" onclick="change_sec()">Complete Your Registration</span>
    </center>
</div>
<div id="part2" style="margin-top:100px;font-family: main;display: none;margin-bottom: 40px">
<center>
    <div style="border: 3px solid purple;color: purple;width: 80%;margin-top: 20px;padding: 10px 0 10px 0;font-size: 18px;line-height: 30px">
   <strong> Please Send the Amount to the following PayTM Account :</strong>
   <br>
    <hr size="1" colour="grey">
    <br><span style="color: red;font-size:16px;font-weight:bold">Please enter your team number in optional comment field while paying from paytm.<br><br></span><hr size="1" colour="grey">
    Scan the QR Code :
    <br>
    <img src="images/qr_code.jpg" alt="QR Code of the PayTM Account" title="Send amount through this QR Code on PayTM" style="height: 200px;width: 200px">
    <br>
    <hr size="1" colour="grey">
    or
    <hr size="1" colour="grey">
    Enter the Mobile Number : <strong>8299715331</strong>
    </div>
</center>
</div>
<div id="part3" style="margin-top:100px;font-family: main;display: none;margin-bottom: 40px">
<center>
    <div style="border: 3px solid purple;color: purple;width: 80%;margin-top: 20px;padding: 10px 0 10px 0;font-size: 16px;line-height: 30px">
   Amount can be submitted to:
   <br>
    <hr size="1" colour="purple">
    <br>
    <strong>1.) SONU KUMAR<br>Room No: 315<br>Contact Number:7053120261</strong>
    <br><br>
    <strong>1.) AYUSHI SINGH<br>Room No: 232<br>Contact Number:8299715331</strong>
    </div>
</center>
</div>
<script>
function openNav() {
    document.getElementById("sidenav1").style.width = "80%";
    document.getElementById("sidenav2").style.width = "20%";
    document.getElementById("sidenav2").style.left = "80%";
}

function closeNav() {
    document.getElementById("sidenav1").style.width = "0";
    document.getElementById("sidenav2").style.width = "0";
    document.getElementById("sidenav2").style.left = "0";
}
</script>
<script type="text/javascript">
    function change_sec()
    {
        var mode="none";
        <?php echo "var mode=\"".$_GET['p']."\";"; ?>
        if(mode=="paytm")
        {
        document.getElementById("part1").style.display="none";
        document.getElementById("part2").style.display="block";
        }
        if(mode=="cash")
        {
        document.getElementById("part1").style.display="none";
        document.getElementById("part3").style.display="block";
        }
        document.getElementsByTagName("body")[0].className="";
    }
</script>
</body>
</html>