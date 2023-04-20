<html>
<?php 
	print $_GET["fname"]."<br/>";
	print $_GET["lname"]."<br/>";
	print $_GET["city"]."</br>";
	print $_GET["age"]."</br>";
$db="student";
$dbhost="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($dbhost,$user,$pass);
if(!$conn)
{
die("can't connect");
}
echo "connected"."<br/>";
mysqli_select_db($conn,"db");
$sql="insert into stud(fname,lname,age,city) values(fname,lname,age,city)";
$ret=mysqli_query($conn,$sql);
if(!$ret)
{
die("can't fire query");
}
mysqli_close($conn);
?>
<body>
	<form method="get" action="<?php $_PHP_SELF?>">
	
	firstname:<input type="text" name="fname"/>
	lastname:<input type="text" name="lname"/>
	age:<input type="text" name="age"/>
	city:<input type="text" name="city"/>
	<input type="submit"/>
	</form>
</body>
</html>
	