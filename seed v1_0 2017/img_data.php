<?php

$count=0;$j;

$conn=mysqli_connect('localhost','root','password','seed');

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$data=mysqli_query($conn,"SELECT * FROM images")
or die("Can't Connect to the specified Table");


?>