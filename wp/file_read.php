<?php
$f=fopen("E:/my java files/t1.txt","r");
if($f==false)
{
print "couldn't open";
exit();
}
$size=filesize("E:/my java files/t1.txt");
$text=fread($f,$size);
print "<pre>$text</pre>";
fclose($f);
?>