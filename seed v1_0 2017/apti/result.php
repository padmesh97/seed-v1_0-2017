<?php
$q1=$_POST['q1'];
$q2=$_POST['q2'];
$q3=$_POST['q3'];
$q4=$_POST['q4'];
$q5=$_POST['q5'];
$q6=$_POST['q6'];
$q7=$_POST['q7'];
$q8=$_POST['q8'];
$q9=$_POST['q9'];
$q10=$_POST['q10'];
$q11=$_POST['q11'];
$q12=$_POST['q12'];
$q13=$_POST['q13'];
$q14=$_POST['q14'];
$q15=$_POST['q15'];
$name=$_POST['name'];
$branch=$_POST['branch'];
$year=$_POST['year'];

$i=0;

if($q1=="b")
$i++;
if($q2=="d")
$i++;
if($q3=="d")
$i++;
if($q4=="b")
$i++;
if($q5=="c")
$i++;
if($q6=="a")
$i++;
if($q7=="c")
$i++;
if($q8=="c")
$i++;
if($q9=="c")
$i++;
if($q10=="c")
$i++;
if($q11=="b")
$i++;
if($q12=="c")
$i++;
if($q13=="b")
$i++;
if($q14=="a")
$i++;
if($q15=="d")
$i++;

$data=$name."	".$branch."		".$year."	MARKS:".$i."\n";

$file = fopen("data.txt","a");
if($file==false ) 
{       
exit(); 
}
fwrite($file,$data);
fclose($file);

$url="Location:thankyou.html";
header ($url);
?>

