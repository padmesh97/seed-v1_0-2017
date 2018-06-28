<!DOCTYPE html>
<html>
<head>
	<title>Pay Now - S.E.E.D</title>
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
<header style="position: fixed;z-index: 5;">
    <img id="top_head" src="images/b9.jpg" style="position: absolute;width: 100%;height: 105px;margin-top: 0;margin-left: 0;z-index: -2;opacity: 0.08">
    <center>
    <div style="margin-top:35px;margin-left: 3%;width:125px;border:2px solid white;border-radius:20%;display:inline-block"></div>
    <div style="font-size: 30px;padding:0 2% 0 2%;display:inline">Society of Electrical <span style="font-family: main2">&</span> Electronics Department</div>
    <div style="width:125px;border:2px solid white;border-radius:20%;display:inline-block"></div>
    <div style="margin-top: 23px;margin-left: 3%">
    <a href="index.php#top_head" class="a">Home</a>
    <a href="index.php#about_scroll" class="a">About</a>
    <a href="about_app.html" class="a">About the S.E.E.D App</a>
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
<div id="part1" style="margin-top:227px;font-family: main2;display:block;">
<center>
    <div style="border:1px solid green;padding: 20px;font-size: 20px;color: green;width: 50%;background-color: white">
    You Have been registered successfully.
    <br><br>
    <span style="font-size: 18px;">
    Your Team Number is :&nbsp;&nbsp;
    <span id="team" style="border:2px solid purple;color: purple;padding: 8px 5px 8px 10px;font-size: 22px">
       <?php
       $t=$_GET['t'];
       echo $t;
       ?> 
    </span>
    <br>
    <br>
    <span style="color: rgb(238,19,19);font-size: 15;"><strong>*** Please Keep this number safe ***</strong>
    </span>
    </span>
    </div>
    <br><br><br>
    <span class="hh" style="margin-top: 20px;" onclick="change_sec()">Complete Your Registration</span>
    </center>
</div>
<div id="part2" style="margin-top:130px;font-family: main2;display:none;">
<center>
    <div style="border: 3px solid purple;color: purple;width: 45%;margin-top: 20px;padding: 10px 0 10px 0;font-size: 18px;line-height: 30px">
    Please Send the Amount to the following PayTM Account :
    <br><br><span style="color: red;font-size:16px;font-weight:bold">Please enter your team number in optional comment field while paying from paytm.<br><br></span><hr size="1" colour="grey">
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
<div id="part3" style="margin-top:130px;font-family: main2;display:none;">
<center>
    <div style="border: 3px solid purple;color: purple;width: 45%;margin-top:20%;padding: 10px 0 10px 0;font-size: 18px;line-height: 30px">
    Please Submit the Amount to the following :
    <br>
    <hr size="1" colour="grey">
    <br>
    <strong>1.) SONU KUMAR<br>Room No: 315<br>Contact Number:7053120261</strong>
    <br><br>
    <strong>1.) AYUSHI SINGH<br>Room No: 232<br>Contact Number:8299715331</strong>
    </div>
    <br>
</center>
</div>
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