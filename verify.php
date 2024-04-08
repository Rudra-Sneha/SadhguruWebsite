<?php
$uname=$_REQUEST['username'];
$pwd=$_REQUEST['password'];
$con=mysqli_connect('localhost',"root","") or die(mysqli_error());
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
$db=mysqli_select_db($con,"sadhguru") or die(mysqli_error());
$dbuname="";
$result=mysqli_query($con,"select * from login where uname='$uname' and pwd='$pwd'");
if (mysqli_num_rows($result) > 0) {
	echo "<script>alert('Successfully logged in ');</script>";
	echo "<script>window.location.href='homepage.html';</script>";
}	
else{
	echo "<script>alert('Invalid username or password');</script>";
	echo "<script>window.location.href='login.html';</script>";
}?>
