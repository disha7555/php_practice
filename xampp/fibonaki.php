<?php
$a=0;
$b=1;
print $a;
print $b;
for($i=1;$i<=10;$i++)
{ 
	$c=$a+$b;
print $c;
	
	$a=$b;
	$b=$c;
}
?>
