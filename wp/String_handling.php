<?php
$s1="hello";
$s2="hello";
$age=50;
printf("hi %d",$age);
print "</br>len: ".strlen($s1);
if(strcmp($s1,$s2)==0)
{
	print "</br>match</br>";
}
else
{
	print "not matched";
}
$up=strtoupper($s1);
print $up;
$low=strtolower($s1);
print "</br>".$low;
$rev=strrev($s1);
print "</br>".$rev;
$pos=strpos($s1,"h");
print "</br>".$pos;
$rpos=strrpos($s1,"o");
print "</br>".$rpos;
?>