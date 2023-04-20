<?php
$q="show databases";
$result=mysqli_query($q);
while($row=mysqli_fetch_assoc)
{
	print "<br/>".$row['Database'];
}
?>