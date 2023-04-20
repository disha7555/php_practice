<?php
$q="select * from student";
$ret=mysqli_query($q);
while($r=mysql_fetch_assoc($ret));
{
	print "<br/>".$r["id"];
	print "<br/>".$r["name"];
}
?>