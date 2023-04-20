<?php
$conn=mysql_connect("localhost","root","");
$q="alter table stud add lastname varchar(30)";
$result=mysql_query($q);
?>