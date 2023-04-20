<?php
$q="select * from student";
$ret=mysql_query($q);
while($r=mysql_fetch_assoc($ret));
{
	print "<br/>".$r["id"];
	print "<br/>".$r["name"];
}
>