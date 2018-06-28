<!--
       Creator :PADMESH KUNWAR(India)
       Under no circumtances this source code is not public entity to be copied or distributed. 
       For any violation S.E.E.D-Society has right to take an Action against it
-->
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
  <style type="text/css">
  .lala1{font-size: 18px}.n_lines{height:24px;width: 24px;padding-top: 11px;padding-left: 13px;}
      @media screen and (min-width: 760px) {
      #text{font-size: 85px}
    }
    @media screen and (min-width: 600px) {
      #text{font-size: 38px}#last{font-size: 25px}#banner{padding-top:17px;}
    }
    @media screen and (min-width: 1000px) {
      #text{font-size: 60px}.lala1{font-size: 35px;padding-top: 25px}.lala2{font-size: 22px;line-height:50px}.lala3{height: 125px;width: 300px;padding-left:24%}#banner{padding-top:30px;}.n_lines{height:48px;width: 48px;padding-top:25px;padding-left:35px}.n_lines2{height:55px;width: 55px}}
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


<header style="">
<strong>
S.E.E.D
</strong>
</header>

<span class="n_lines" style="position:fixed;z-index:4;cursor: pointer;" onclick="openNav()"><img class="n_lines2" src="images/nav_lines.png" width="85%" height="85%"></span>



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

 <section id="s1">
   <a href="electrino.html" style="text-decoration: none;color: inherit;">
      <span id="img1" class="fade" style="top: 0;height: 0">
      <span id="in_image">
      <center>
      <img src="images/elechome_2.png" height="38px" width="38px">
          <div id="text" style="margin-top: 10px">
         Electrino
          </div>
          </center>
      </span>
      </span>
   </a>

  <a href="innovation.html" style="text-decoration: none;color: inherit;">
      <span id="img2" class="fade" style="top: 0;height: 0">
      <span id="in_image">
      <center>
      <img src="images/innohome_2.png" height="40px" width="40px">
          <div id="text" style="margin-top: 10px">
          Innovations
          </div>
          </center>
      </span>
      </span>
 </section>
 </a>


<section id="s1">
 	<span id="img3" style="top: 0;height: 0">
  <?php
  include '../img_data.php';
  while($row=mysqli_fetch_array($data,MYSQLI_BOTH))
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
mysqli_close($conn);
?>
<div class="dis-bottommiddle">

<?php
for($j=0;$j<$count;$j++)
  if($j==0)
  echo "<span class=\"dots\"  onclick=\"change(".$j.")\"><span class=\"dot_filled\"></span></span>\n";
  else
  echo "<span class=\"dots\"  onclick=\"change(".$j.")\"><span class=\"dot_empty\"></span></span>\n";
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
  	<span id="img4" class="fade" style="top: 0;height: 0">
      <span id="in_image_2">
      <center>
      <img src="images/univ_2.png" height="23px" width="23px">
          <div id="text">
          University
          </div>
          </center>
      </span>
      </span>
  </div>
  </a>
<a href="books.html" style="text-decoration: none;color: inherit;">
  <div class="short">
  	<span id="img5" class="fade" style="top: 0;height: 0">
      <span id="in_image_2">
      <center>
      <img src="images/bookshome_2.png" height="23px" width="23px">
          <div id="text">
          Books
          </div>
          </center>
      </span>
      </span>
  </div>
</a>
  
<a href="extrapedia.html" style="text-decoration: none;color: inherit;">
  <div class="short">
  	<span id="img7" class="fade" style="top: 0;height: 0">
      <span id="in_image_2" >
      <center>
      <img src="images/ephome_2.png" height="23px" width="23px" >
          <div id="text">
          Extrapedia
          </div>
          </center>
      </span>
      </span>
  </div>
</a>

<a href="exams.html" style="text-decoration: none;color: inherit;">
  <div class="short">
  	<span id="img8" class="fade" style="top: 0;height: 0">
      <span id="in_image_2" >
      <center>
      <img src="images/examhome_2.png" height="23px" width="23px">
          <div id="text">
          Exams
          </div>
          </center>
      </span>
      </span>
  </div>
</a>

<a href="support.html" style="text-decoration: none;color: inherit;">
  <div class="long">
  	<span id="img6" class="fade" style="top: 0;height: 0">
      <span id="in_image_3" >
      <center>
      <img src="images/tthome_2.png" height="35px" width="35px">
          <div id="text" style="padding-top: 7%">
          Support
          </div>
          </center>
      </span>
      </span>
  </div>
</div>
</a>
 </section>



<section id="s1">
      <span id="img9" class="fade" style="top: 0;height: 0">
      <span id="in_image_4">
      <center>
      <img src="images/uphome_2.png" height="30px" width="30px" style="padding-bottom: 4px;">
          <div id="text">
          Updates
          </div>
          </center>
      </span>
      </span>


      <span id="img10" class="fade" style="top: 0;height: 0">
      <span id="in_image_4">
      <center>
      <img src="images/calhome_2.png" height="30px" width="30px">
          <div id="text" >
          Calendar
          </div>
          </center>
      </span>
      </span>
 </section>

 <section id="s1">
 <div id="banner" style="box-sizing: border-box;box-shadow: 0 0 40px rgba(255,0,0,0.3) inset;top: 0;height: 0">
 <div style="width:40%;float: left;position: relative;display: block;margin-top: 30px;margin-left: 7%;">
 <center>
 <span class="lala1" style="font-family: font1">
 Get the App now.
 </span>
 <br>
 <span style="font-size:12px;">
 <b><a href="info_app.html" class="lala2" style="text-decoration:none;color: red"><span style="padding-bottom: 1px;border-bottom: 1px solid rgb(238,19,19)">Learn More</span></a></b>
 </span>
 </div>
 <div style="width: 50%;float: left;position: relative;display: block;margin-top: 15px;">
 <a href="https://play.google.com/store/apps/details?id=com.blackbear.seedjss&hl=en">
 <img class="lala3" src="images/main_banner.png" alt="Google play Store logo" height="75px" width="190px">
 </a>
 </div>
 </center>
 </div>
 </section>

 <section id="s1">
   <span id="last" style="display: flex;justify-content: center;flex-direction: column;height: 0;top:0">
   <center>
   <div id="text" style="color:white;font-family: font2;opacity:0.8;font-size: 73%">
          &copy;&nbsp;<span style="letter-spacing: 1px">S.E.E.D</span> - 2017
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
     var timer;

function spinfunction() {
  document.getElementById("container1").style.display = "none"
  document.getElementById("container1").style.width = "0";
  document.getElementById("container2").style.display = "block";
  timer=window.setInterval(function(){change(69)},3000);//taking default timer iteration value 69
  height_set();
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
    d[index2].innerHTML = "<span class=\"dot_empty\"></span>"; 

      x[myIndex].style.display="block";
      x[myIndex].style.width = "100%";
      x[myIndex].style.height = "100%";
      x[myIndex].style.left = "100%";
      c[myIndex].style.display="block";
      d[myIndex].innerHTML = "<span class=\"dot_filled\"></span>"; 
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
      d[myIndex].innerHTML = "<span class=\"dot_filled\"></span>"; 

    x[index2].style.display="none";
    x[index2].style.width = "0";
    x[index2].style.height = "0";
    x[index2].style.left = "0";
    c[index2].style.display="none";
    d[index2].innerHTML = "<span class=\"dot_empty\"></span>";
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
      d[myIndex].innerHTML = "<span class=\"dot_filled\"></span>"; 

    x[index2].style.display="none";
    x[index2].style.width = "0";
    x[index2].style.height = "0";
    x[index2].style.left = "0";
    c[index2].style.display="none";
    d[index2].innerHTML = "<span class=\"dot_empty\"></span>";
  }
  if(n!=69)
  timer=window.setInterval(function(){change(69)},3000);
}

function sliders(){
  height_set();
  timer=window.setInterval(function(){change(69)},3000);
}

  function height_set()
  {
    var jj;
    var text1=screen.height*0.0328125;
    var head=screen.height*0.0265625;
    var top1=screen.height*0.090625;
    var hei1=screen.height*0.2032;
    var top2=screen.height*0.29375;
    var hei2=screen.height*0.403;
    var top3=screen.height*0.696875;
    var top3_x=screen.height*0.82187;
    var hei3=screen.height*0.125;
    var top4=screen.height*0.696875;
    var hei4=screen.height*0.25;
    var top5=screen.height*0.946875;
    var hei5=screen.height*0.15625;
    var top6=screen.height*1.103125;
    var hei6=screen.height*0.15625;
    var top7=screen.height*1.25937;
    var hei7=screen.height*0.0546;
    document.getElementsByTagName("header")[0].style= "background: #EE340F;box-shadow: 1px 1px 5px rgba(0,0,0,0.6);font-size:"+text1+"px;padding:"+head+"px 0px";
    document.getElementById("img1").style.top = top1+"px";
    document.getElementById("img1").style.height = hei1+"px";
    document.getElementById("img2").style.top = top1+"px";
    document.getElementById("img2").style.height = hei1+"px";
    document.getElementById("img3").style.top = top2+"px";
    document.getElementById("img3").style.height = hei2+"px";
    document.getElementById("img4").style.top = top3+"px";
    document.getElementById("img4").style.height =hei3+"px";
    document.getElementById("img5").style.top = top3+"px";
    document.getElementById("img5").style.height = hei3+"px";
    document.getElementById("img6").style.top = top4+"px";
    document.getElementById("img6").style.height = hei4+"px";
    document.getElementById("img7").style.top = top3_x+"px";
    document.getElementById("img7").style.height = hei3+"px";
    document.getElementById("img8").style.top = top3_x+"px";
    document.getElementById("img8").style.height = hei3+"px";
    document.getElementById("img9").style.top = top5+"px";
    document.getElementById("img9").style.height = hei5+"px";
    document.getElementById("img10").style.top = top5+"px";
    document.getElementById("img10").style.height = hei5+"px";
    document.getElementById("banner").style.top = top6+"px";
    document.getElementById("banner").style.height = hei6+"px";
    document.getElementById("last").style.top = top7+"px";
    document.getElementById("last").style.height = hei7+"px";
  }
</script>

</body>
</html>