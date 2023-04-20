<?php
$d=226;
$a=0;
for($i=1;$i<=4;$i++)
{ 
if($d>10)
{
	$p=$d%10;
	$r=(int)$d/10;
	print $r;
	$a=$a+$p;

	$d=$r;
}

}
$a=$a+$d;

print $a;
if($a==1)
{
print "lucky";
}
else
{
	print "not lucky";
}
?>