<?php
$db="student";
$dbhost="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($dbhost,$user,$pass);
if(!$conn)
{
die("can't connect");
}
echo "connected";
mysqli_select_db("db",$conn);
$sql="create table student(id int,age int,name varchar(30))";
$ret=mysqli_query($conn,$sql);
if(!$ret)
{
die("can't fire query");
}
mysqli_close($conn);
?>