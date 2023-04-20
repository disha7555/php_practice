<html>
<?php 
if(isset($_GET["uname"]) && isset($_GET["age"]))
{
	print "welcome".$_GET["uname"];
	print "Your age".$_GET["age"];
	exit();
}
?>
<body>
	<form method="get" action="<?php $_PHP_SELF?>">
	
	name:<input type="text" name="uname"/>
	age:<input type="text" name="age"/>
	<input type="submit"/>
	</form>
</body>													

</html>
