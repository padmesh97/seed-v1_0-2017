<?php
$name=$_POST['name'];
$email=$_POST['email'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$contact=$_POST['contact'];
$message=$_POST['message'];
$to="jsseeeapp@gmail.com";

$subject ="Feedback from website - jssseed.com";
$msg="Name : ".$name."<br>Email : ".$email."<br>Branch : ".$branch."<br>Year : ".$year."<br>Contact : ".$contact."<br>Message : ".$message;
$headers = "From:".$email."\r\n"."Reply-To:electrino@jssaten.ac.in\r\n"."MIME-Version: 1.0\r\n"."Content-Type: text/html;charset=UTF-8\r\n"."X-Mailer: PHP/" . phpversion();
$mailing=mail($to, $subject, $msg, $headers);

$url="Location:index.php";
header ($url);