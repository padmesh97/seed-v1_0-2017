<?php

$a1;$a2;$a3;$a4;$a5;$a6;
$b1;$b2;$b3;$b4;$b5;$b6;
$c1;$c2;$c3;$c4;$c5;$c6;
$d1;$d2;$d3;$a4;$d5;$d6;
$mem;$event;$college;$college_2;$team_no="";$payment;


$a1=$_POST['name1'];
$a2=$_POST['email1'];
$a3=$_POST['contact1'];
$a4=$_POST['branch1'];
$a5=$_POST['year1'];
$a6="NA";
$b1=$_POST['name2'];
$b2=$_POST['email2'];
$b3=$_POST['contact2'];
$b4=$_POST['branch2'];
$b5=$_POST['year2'];
$b6=$_POST['living2'];
$c1=$_POST['name3'];
$c2=$_POST['email3'];
$c3=$_POST['contact3'];
$c4=$_POST['branch3'];
$c5=$_POST['year3'];
$c6=$_POST['living3'];
$d1=$_POST['name4'];
$d2=$_POST['email4'];
$d3=$_POST['contact4'];
$d4=$_POST['branch4'];
$d5=$_POST['year4'];
$d6=$_POST['living4'];
$mem=$_POST['member_quantity'];
$event=$_POST['event'];
$clg=$_POST['college'];
$clg_2=$_POST['college_2'];
$payee=$_POST['payee'];
$payment="NA";

if($clg=="jss")
$college="JSSATEN";
else
$college=$clg_2;

$conn=mysql_connect('localhost','id450961_user1','8765513361S')
or die("Cannot Connect to the MySQL server");
	
mysql_select_db("id450961_elect")
or die("Can't connect to the specified database");

$result=mysql_query("SELECT * FROM registration_op where id=(SELECT MAX(id) FROM registration_op)")
or die("Can't Connect to the specified Table");

$row=mysql_fetch_array($result);

if($row['team_number']==0)
$team_no=0;
else
$team_no=0;

date_default_timezone_set('Asia/Kolkata');
$subject ="Informing about successful Registration - S.E.E.D";
$time = date("h").":".date("i").date("A")."%09%09".date("d")."/".date("m")."/".date("Y");
$message = "This is to inform you that you have been successfully <b>REGISTERED</b> for the upcoming event of <b>Androcar</b> going to be conducted by <b>S.E.E.D</b> .<br><br><div style=\"color: green;font-size:20px\">Your team Number is:<div style=\"color: purple;border:2px solid purple;padding:8px 5px 8px 10px;text-align:center;margin-top:10px\">".$team_no."</div></div>
<br><b><div style=\"color: rgb(238,19,19);font-size:15px;\">*** Please keep this number safe ***</div></b>
<br><br><b><div style=\"color: rgb(238,19,19);\">Venue : </div><div style=\"color: purple\">Academic block - II, Room No:107</div></b><br><br><div style=\"color: rgb(238,19,19);\">Date and timings will be notified as per the slots alloted to the Team.<br><br><b>Please stay in touch.</b></div><br><br>Registration done at : ".$time;

$headers = "From: registration@jssseed.com\r\n"."Reply-To:electrino@jssaten.ac.in\r\n"."MIME-Version: 1.0\r\n"."Content-Type: text/html;charset=UTF-8\r\n"."X-Mailer: PHP/" . phpversion();



if($mem==1)
{
mysql_query("INSERT INTO registration_op(team_number,members,name,email,contact,branch,year,living,college,payment,payee,event) VALUES('$team_no','$mem','$a1','$a2','$a3','$a4','$a5','$a6','$college','$payment','$payee','$event')")
or die(mysql_error());
}

if($mem==2)
{
mysql_query("INSERT INTO registration(team_number,members,name,email,contact,branch,year,living,college,payment,payee,event) VALUES('$team_no','$mem','$a1','$a2','$a3','$a4','$a5','$a6','$college','$payment','$payee','$event')")
or die(mysql_error());
mysql_query("INSERT INTO registration(team_number,members,name,email,contact,branch,year,living,college,payment,payee,event) VALUES('$team_no','$mem','$b1','$b2','$b3','$b4','$b5','$b6','$college','$payment','$payee','$event')")
or die(mysql_error());
//$mailing=mail($a2, $subject, $message, $headers);
//$mailing=mail($b2, $subject, $message, $headers);
}

if($mem==3)
{
mysql_query("INSERT INTO registration(team_number,members,name,email,contact,branch,year,living,college,payment,payee,event) VALUES('$team_no','$mem','$a1','$a2','$a3','$a4','$a5','$a6','$college','$payment','$payee','$event')")
or die(mysql_error());
mysql_query("INSERT INTO registration(team_number,members,name,email,contact,branch,year,living,college,payment,payee,event) VALUES('$team_no','$mem','$b1','$b2','$b3','$b4','$b5','$b6','$college','$payment','$payee','$event')")
or die(mysql_error());
mysql_query("INSERT INTO registration(team_number,members,name,email,contact,branch,year,living,college,payment,payee,event) VALUES('$team_no','$mem','$c1','$c2','$c3','$c4','$c5','$c6','$college','$payment','$payee','$event')")
or die(mysql_error());
//$mailing=mail($a2, $subject, $message, $headers);
//$mailing=mail($b2, $subject, $message, $headers);
//$mailing=mail($c2, $subject, $message, $headers);
}

if($mem==4)
{
mysql_query("INSERT INTO registration(team_number,members,name,email,contact,branch,year,living,college,payment,payee,event) VALUES('$team_no','$mem','$a1','$a2','$a3','$a4','$a5','$a6','$college','$payment','$payee','$event')")
or die(mysql_error());
mysql_query("INSERT INTO registration(team_number,members,name,email,contact,branch,year,living,college,payment,payee,event) VALUES('$team_no','$mem','$b1','$b2','$b3','$b4','$b5','$b6','$college','$payment','$payee','$event')")
or die(mysql_error());
mysql_query("INSERT INTO registration(team_number,members,name,email,contact,branch,year,living,college,payment,payee,event) VALUES('$team_no','$mem','$c1','$c2','$c3','$c4','$c5','$c6','$college','$payment','$payee','$event')")
or die(mysql_error());
mysql_query("INSERT INTO registration(team_number,members,name,email,contact,branch,year,living,college,payment,payee,event) VALUES('$team_no','$mem','$d1','$d2','$d3','$d4','$d5','$d6','$college','$payment','$payee','$event')")
or die(mysql_error());
//$mailing=mail($a2, $subject, $message, $headers);
//$mailing=mail($b2, $subject, $message, $headers);
//$mailing=mail($c2, $subject, $message, $headers);
//$mailing=mail($d2, $subject, $message, $headers);
}

$url="Location:op_success.php?t=".$time;
header ($url);
mysql_close($conn);

?>