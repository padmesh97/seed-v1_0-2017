<!DOCTYPE html>
<html>
<head>
	<title>S.E.E.D - Society of Electrical and Electronics Department , JSS Noida</title>
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0, user-scalable=no">
    <meta name="description" content="S.E.E.D - JSS,Noida brings you the most updated,interactive and handy student portal to remain updated about happenings going about in the college,university and this technological world related to your branch.To access this fantastic extravanza download its exlusive app available on play store and on its website.">
    <link rel="icon" href="images/favicon.png" type="image/x-icon" /> 
  <!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#FF2C2C">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#FF2C2C">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#FF2C2C">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="index_responsive.css">
    <script src="flexibility.js"></script>
    </style>
</head>

<?php
if(!isset($_COOKIE["visit"]))
{
  setcookie("visit","1",time()+900);
  echo "<body onload=\"spinfunction()\">";

 echo "<div id=\"container1\" style=\"display: block\">\n<div class=\"vignette\"></div>\n<div style=\"height:100%;width:100%;position:fixed;display: flex;justify-content: center;flex-direction: column;\">";
 echo "<center>
      <img src=\"images/loader1.jpg\"  style=\"height: 80%;width: 80%\">
      <br><br><br>
      <img class=\"spin\" src=\"images/loader2.png\">
      </center>
      </div>
       </div>


      <div id=\"container2\" style=\"display: none\">";
}
else
{ 
  echo "<body onload=\"sliders()\">";
  echo "<div id=\"container2\" style=\"display:block\">";
}

?>


<header style="background: #EE340F;box-shadow: 1px 1px 5px grey">
<strong>
S.E.E.D
</strong>
</header>

<span style="position:fixed;z-index:4;height:24px;width: 24px;padding-top: 11px;padding-left: 13px;cursor: pointer;" onclick="openNav()"><img src="images/nav_lines.png" width="22px" height="22px"></span>



<div  id="sidenav1" class="sidenav">
<div id="img_nav">
  <span style="position:absolute;display:block;top:110px;left:15px;font-family: font2;width:100%;float:left;color:white">
  <span style="font-size:14px;letter-spacing: 4px;">
  S.E.E.D
  </span>
  <br>
  <span style="font-size:16px;letter-spacing: 2px;">
  JSS , Noida
  </span>
  </span>
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
        <img src="images/fb_s.ico" style="position: relative;padding:20px 0 0 0;width:40px" height="40px" width="40px">
     </a>
     &nbsp;
     <a href="https://www.youtube.com/channel/UCkAjX_ngcjQ_rjJ2m5pFUjg">
        <img src="images/yt_s.ico" style="position: relative;padding:20px 0 0 0;width:40px" height="40px" width="40px">
     </a>
     </center>
 </div>

</div>

<a href="javascript:void(0)" id="sidenav2" class="sidenav_rest" onclick="closeNav()"></a>

 <section id="s1">
   <a href="electrino.html" style="text-decoration: none;color: inherit;">
      <span id="img1" class="fade">
      <center>
      <span id="in_image">
      <img src="images/elechome_2.png" height="45px" width="45px" style="padding-left: 20%;padding-bottom: 4px;padding-top: 13px;">
          <div id="text">
         Electrino
          </div>
      </span>
      </center>
      </span>
   </a>

  <a href="innovation.html" style="text-decoration: none;color: inherit;">
      <span id="img2" class="fade">
      <center>
      <span id="in_image">
      <img src="images/innohome_2.png" height="60px" width="60px" style="padding-left: 20%;padding-bottom: 7px;">
          <div id="text">
          Innovations
          </div>
      </span>
      </center>
      </span>
 </section>
 </a>


<section id="s1">
 	<span id="img3">
  <?php
  include 'img_data.php';
  while($row=mysql_fetch_array($data))
{
  $detail=$row['detail'];
  $url=$row['url'];
  if($count==0)
  {
  echo "<img class=\"img_vis fade ss_image\" src=\"".$url."\" style=\"display:block;width:100%;height:100%;left:100%\">\n";
  echo "<div class=\"img_cap cap cap_change\" style=\"display:block\"><span class=\"fade\">".$detail."</span></div>\n";
  }
  else
  {
  echo "<img class=\"img_vis fade ss_image\" src=\"".$url."\">\n";
  echo "<div class=\"img_cap cap cap_change\"><span class=\"fade\">".$detail."</span></div>\n";
  }
  $count++;
}
mysql_close($conn);
?>
<div class="dis-bottommiddle">

<?php
for($j=0;$j<$count;$j++)
  if($j==0)
  echo "<span class=\"dots\"  onclick=\"change(".$j.")\"><img src=\"images\/circle_filled.png\" width=\"9px\" height=\"9px\"></span>\n";
  else
  echo "<span class=\"dots\"  onclick=\"change(".$j.")\"><img src=\"images\/circle_empty.png\" width=\"9px\" height=\"9px\"></span>\n";
?>

</div>

<div class="img_cover_left" onclick="change(99)"></div>
<div class="img_cover_right" onclick="change(100)"></div>

 </span>
</section>
 

  <section id="s1" style="display: flex;flex-flow: column;">
 
 <div class="container b">

<a href="university.html" style="text-decoration: none;color: inherit;">
  <div class="short">
  	<span id="img4" class="fade">
      <center>
      <span id="in_image_2">
      <img src="images/univ_2.png" height="30px" width="30px" style="padding-left: 25%;padding-bottom: 7px;">
          <div id="text">
          University
          </div>
      </span>
      </center>
      </span>
  </div>
  </a>
<a href="books.html" style="text-decoration: none;color: inherit;">
  <div class="short">
  	<span id="img5" class="fade">
      <center>
      <span id="in_image_2">
      <img src="images/bookshome_2.png" height="30px" width="30px" style="padding-left: 23%;padding-bottom: 7px;">
          <div id="text">
          Books
          </div>
      </span>
      </center>
      </span>
  </div>
</a>
  
<a href="extrapedia.html" style="text-decoration: none;color: inherit;">
  <div class="short">
  	<span id="img7" class="fade">
      <center>
      <span id="in_image_2">
      <img src="images/ephome_2.png" height="30px" width="30px" style="padding-left: 20%;padding-bottom: 7px;">
          <div id="text">
          Extrapedia
          </div>
      </span>
      </center>
      </span>
  </div>
</a>

<a href="exams.html" style="text-decoration: none;color: inherit;">
  <div class="short">
  	<span id="img8" class="fade">
      <center>
      <span id="in_image_2">
      <img src="images/examhome_2.png" height="30px" width="30px" style="padding-left: 20%;padding-bottom: 7px;">
          <div id="text">
          Exams
          </div>
      </span>
      </center>
      </span>
  </div>
</a>

<a href="tt.html" style="text-decoration: none;color: inherit;">
  <div class="long">
  	<span id="img6" class="fade">
      <center>
      <span id="in_image_3">
      <img src="images/tthome_2.png" height="40px" width="40px" style="padding-left: 20%;padding-bottom: 7px;">
          <div id="text">
          Time Table
          </div>
      </span>
      </center>
      </span>
  </div>
</div>
</a>
 </section>



<section id="s1">
      <span id="img9" class="fade">
      <center>
      <span id="in_image_4">
      <img src="images/uphome_2.png" height="30px" width="30px" style="padding-left: 20%;padding-bottom: 4px;padding-top: 13px;">
          <div id="text">
          Updates
          </div>
      </span>
      </center>
      </span>


      <span id="img10" class="fade">
      <center>
      <span id="in_image_4">
      <img src="images/calhome_2.png" height="30px" width="30px" style="padding-left: 20%;padding-bottom: 7px;">
          <div id="text">
          Calendar
          </div>
      </span>
      </center>
      </span>
 </section>

 <section id="s1">
 <div id="banner" style="box-sizing: border-box;box-shadow: 0 0 40px rgba(255,0,0,0.3) inset;">
 <div style="width:40%;float: left;position: relative;display: block;margin-top: 30px;margin-left: 7%;">
 <center>
 <span style="font-size: 18px;">
 Get the App now.
 </span>
 <br>
 <span style="font-size:12px;">
 <b><u><a href="info_app.html" style="text-decoration:none;color: red">Learn More</a></u></b>
 </span>
 </div>
 <div style="width: 50%;float: left;position: relative;display: block;margin-top: 15px;">
 <a href="https://play.google.com/store/apps/details?id=com.blackbear.seedjss&hl=en">
 <img src="images/main_banner.png" alt="Google play Store logo" height="75px" width="190px">
 </a>
 </div>
 </center>
 </div>
 </section>

 <section id="s1">
   <span id="last" style="display: flex;justify-content: center;flex-direction: column;">
   <center>
   <div id="text" style="color:white;font-family: font2;opacity:0.8;font-size: 73%">
          All Rights Reserved - &copy; S.E.E.D
          </div>
          </center>
        </span>
 </section>

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
     var myVar;
     var timer;

function spinfunction() {
    myVar = setTimeout(showPage, 1800);//set time for container to 1.8sec
}

function showPage() {
  document.getElementById("container1").style.display = "none"
  document.getElementById("container1").style.width = "0";
  document.getElementById("container2").style.display = "block";
  timer=window.setInterval(function(){change(69)},3000);//taking default timer iteration value 69
} 
   
var x = document.getElementsByClassName("ss_image");
var d = document.getElementsByClassName("dots");
var c = document.getElementsByClassName("cap");
var myIndex = 0;

function change(n)
{
  var index2;
  if(n!=69)
  window.clearInterval(timer);
  if(myIndex==0 && n==99)
  {
    myIndex=x.length-1;
    index2=0;
    x[index2].style.display="none";
    x[index2].style.width = "0";
    x[index2].style.height = "0";
    x[index2].style.left = "0";
    c[index2].style.display="none";
    d[index2].innerHTML = "<img src=\"images\/circle_empty.png\" width=\"9px\" height=\"9px\">"; 

      x[myIndex].style.display="block";
      x[myIndex].style.width = "100%";
      x[myIndex].style.height = "100%";
      x[myIndex].style.left = "100%";
      c[myIndex].style.display="block";
      d[myIndex].innerHTML = "<img src=\"images\/circle_filled.png\" width=\"9px\" height=\"9px\">"; 
  }
  else if(myIndex==x.length-1 && (n==100||n==69))
  {
    myIndex=0;
    index2=d.length-1;
      x[myIndex].style.display="block";
      x[myIndex].style.width = "100%";
      x[myIndex].style.height = "100%";
      x[myIndex].style.left = "100%";
      c[myIndex].style.display="block";
      d[myIndex].innerHTML = "<img src=\"images\/circle_filled.png\" width=\"9px\" height=\"9px\">"; 

    x[index2].style.display="none";
    x[index2].style.width = "0";
    x[index2].style.height = "0";
    x[index2].style.left = "0";
    c[index2].style.display="none";
    d[index2].innerHTML = "<img src=\"images\/circle_empty.png\" width=\"9px\" height=\"9px\">";
  }
  else
  {
    if(n==69||n==100)
    {
      myIndex+=1;
      index2=myIndex-1;
    }
    if(n==99)
     {
      myIndex-=1;
      index2=myIndex+1;
     }
    if(n!=69&&n!=99&&n!=100)
    {
      index2=myIndex;
      myIndex=n;
    }
     x[myIndex].style.display="block";
      x[myIndex].style.width = "100%";
      x[myIndex].style.height = "100%";
      x[myIndex].style.left = "100%";
      c[myIndex].style.display="block";
      d[myIndex].innerHTML = "<img src=\"images\/circle_filled.png\" width=\"9px\" height=\"9px\">"; 

    x[index2].style.display="none";
    x[index2].style.width = "0";
    x[index2].style.height = "0";
    x[index2].style.left = "0";
    c[index2].style.display="none";
    d[index2].innerHTML = "<img src=\"images\/circle_empty.png\" width=\"9px\" height=\"9px\">";
  }
  if(n!=69)
  timer=window.setInterval(function(){change(69)},3000);
}

function sliders(){
  timer=window.setInterval(function(){change(69)},3000);
}
</script>

</body>
</html>