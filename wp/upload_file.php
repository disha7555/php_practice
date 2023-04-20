<?php
if(isset($_FILES["i1"]))
{
	$errors=array();
	$fname=$_FILES["i1"]["name"];
	print "</br>Filename=$fname";
	$fsize=$_FILES["i1"]["size"];
	$ftemp=$_FILES["i1"]["tmp_name"];
	$explode=explode('.',$fname);
	$end=end($explode);
	print "</br>File end=$end";
	$file_ext=strtolower($end);
	$extensions=array("jpg","png","jpeg");
	if(in_array($file_ext,$extensions)==false)
	{
		$errors[]="only image file is allowed";
	}
	if($fsize>2097152)
	{
		$errors[]="size of file exceeded";
	}
	if(empty($errors)==true)
	{
		move_uploaded_file($ftemp,"New folder/".$fname);
	}
	else
	{
		print_r($errors);
	}
}
?>
	
	