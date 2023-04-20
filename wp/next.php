<?php
session_start();
if(isset($_SESSION["ww"]))
{
	print "value=".$_SESSION["ww"];
}
else
{
		print "session not set";
}
session.destroy();
?>