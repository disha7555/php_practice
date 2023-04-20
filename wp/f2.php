<?php
$_username=$_GET['username'];
$_password=$_GET['password'];
if($_username=="admin" && $_password=="admin")
{
	session_start();
if(isset($_SESSION["ww"]))
{
	$_SESSION["ww"]+=1;
	print $_SESSION["ww"];
	header("location:f3.php");
	
}
}
else
{
	header("location:f1.html");
}
?>