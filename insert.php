<?php
$u=$_REQUEST['username'];
$p=$_REQUEST['password'];
 
$con=mysqli_connect('localhost',"root","");
$db=mysqli_select_db($con,"sadhguru") or die(mysqli_error());
$query=mysqli_query($con,"SELECT * from login where uname='$u'");
$numrows=mysqli_num_rows($query);
if($numrows!=0)
{	
	echo "<script>alert('Account already exists!');</script>";
	echo "<script>window.location.href='register.html';</script>";
}
else
{	$write=mysqli_query($con,"insert into login VALUES('$u','$p')");
	echo "<script>alert('Account created!');</script>";
	echo "<script>window.location.href='login.html';</script>";
}?>
