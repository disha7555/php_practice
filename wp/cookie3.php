<?php
setCookie("disha","hiiii",time()+3600000);
print "cookie added</br>";
if(isset($_COOKIE1["disha"]))
{
	echo "welcome ".$_COOKIE1["disha"];
}
else
{
	echo "cookie not set</br>";
}
//setCookie("name1","",time()-60);
//if(isset($_COOKIE["name1"]))
//{
//	echo "welcome </br>".$_COOKIE["name1"];
//}
//else
//{
//	echo "</br>cookie not set";
//	}
?>