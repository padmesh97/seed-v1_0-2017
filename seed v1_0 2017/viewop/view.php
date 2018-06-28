<!DOCTYPE html>
<html>
<head>
	<title>All Registrations - S.E.E.D</title>
	<link rel="icon" href="../images/favicon.png" type="image/x-icon" />
	<style type="text/css">
	@font-face{
	font-family:'fa';
	src:url('../w/fonts/fontawesome.ttf') format('truetype');
}
	.cross::before{
		font-family:fa;
		content: '\f00d';
		font-size: 80px
	}
	table {
    border-collapse: collapse;
    background-color: #f2f2f2;
    width: 95%;
    font-weight: lighter;
}
tr:nth-child(even) {background-color: white}
table tr th{
		border:0px solid grey;
		padding: 5px 0 5px 0;
	}
	@font-face{
font-family:'main';
src:url('../w/fonts/Raleway-Light.ttf') format('truetype');
}
@font-face{
font-family:'main2';
src:url('../w/fonts/Nunito/Nunito-Regular.ttf') format('truetype');
}
	</style>
</head style="background-color: rgb(250,250,250)">
<body style="font-family: main;line-height: 30px;font-size: 13.5px">
<?php
error_reporting(0);
$file = fopen( "info", "r+" );
if( $file == false )
{
exit(); 
}
$linetext=fgets($file);
$pass_auth=hash(sha256,$_POST['password']);
if($linetext==$pass_auth)
{
?>
<center>
	<div style="margin-top:30px;">
	<table width="85%" style="border:1px solid rgb(80,80,80)">
	<tr style="font-size: 17px;color: rgb(80,80,80)">
		<th style="border:1px solid black">NAME</th>
		<th style="border:1px solid black">CONTACT</th>
		<th style="border:1px solid black">E-Mail</th>
		<th style="border:1px solid black">BRANCH</th>
		<th style="border:1px solid black">YEAR</th>
		<th style="border:1px solid black">COLLEGE</th>
		<th style="border:1px solid black">EVENT</th>
	</tr>
	<?php
	include 'data.php';
	$row=mysql_fetch_array($data);
	$j=0;$i=5;
	while($row=mysql_fetch_array($data))
	{
	$team_number=$row['team_number'];
	$mem=$row['members'];
	$name=$row['name'];
	$email=$row['email'];
	$contact=$row['contact'];
	$branch=$row['branch'];
	$year=$row['year'];
	$living=$row['living'];
	$college=$row['college'];
	$payer=$row['payee'];
	$event=$row['event'];
	$mode=$row['payment'];
	echo "<tr>\n";
	echo "<th>".$name."</th>\n";
	echo "<th><span style=\"font-family:main2;\">".$contact."</span></th>\n";
	echo "<th>".$email."</th>\n";
	echo "<th>".$branch."</th>\n";
	echo "<th>".$year."</th>\n";
	echo "<th>".$college."</th>\n";
	echo "<th>".$event."</th>\n";
	echo "</tr>\n";
	}
	mysql_close($conn);
	}
	else
		echo "<center><br><br><h1><span class=\"cross\"></span><br><br><br><b>ACCESS FORBIDDEN ! ! !</b><br><br><br><br>Wrong password Entered.Please go back and RETRY.</h1></center>";
	?>
	</div>
</center>
</body>
</html>