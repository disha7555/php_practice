<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
die("cannot established");
}
$selectdb=mysql_select_db("country",$conn);
if(!$selectdb)
{
die("cannot select db");
}
$country_id=(int)$_GET["country_id"];
$sql="select * from state where country_id=$country_id";
$result=mysql_query($conn,$sql);
echo"<option disabled selected>
Please Select State </option>";
while($row=mysql_fetch_assoc($result))
{
echo"<option value='".$row["no"]"'>".$row["Name"].</option>";
}
?>
