<?php
setCookie("nam","value",time()+3600);
print "cookie added</br>";
if(isset($_COOKIE["nam"]))
{
	echo "welcome ".$_COOKIE["nam"];
}
else
{
	echo "cookie not set";
}
?>