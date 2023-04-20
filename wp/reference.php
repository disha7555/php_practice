<?php
function myref(&$p)
{
	$p+=5;
}
$x=90;
myref($x);
print $x;
?>