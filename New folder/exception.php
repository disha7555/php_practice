<?php
class MyExc extends Exception{}
try
{
	$a=9;
	$b=0;
	if($b==0)
	{
		throw new MyExc("division invalid");
	}
	else
	{
		print $a/$b;
	}
}
catch(MyExc $me)
{
	print $me->getMessage();
}
?>