<?php
$conn=mysql_connect("localhost","root","");
if(!$conn)
{
die("Cannot establish connection");
}
$selectdb=mysql_select_db("country",$conn);
if(!$selectdb)
{
die("Not selected db");
}
?>
<div id="form">
<h2>Select country</h2>
<select id="country_select">
<option disabled selected>
Please select Country </option>
<?php
$sql="select * from country";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result))
{
?>
<option value="<?php echo $row["no"]?>">
<?php echo $row["name"]?>
</option>
<?php } ?>
</select>
<script type="text/javascript">
function getState()
{
var country_select=document.getElementById('country_select');
country_id=country_select.options[country_select.selectedIndex].value;
console.log("country_id="+country_id);
var xhr=new XMLHttpRequest();
var url="states.php?country_id="+country_id;
xhr.open("GET",url,true);
xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xhr.onreadystatechange=function()
{
if(xhr.readyState==4&&xhr.status==200)
{
var text=xhr.responseText;
var state_select=document.getElementById("state_select");
state_select.innerHTML=text;
state_select.style.display="inline";
}
}
xhr.send();
var country-select=document.getElementById('country_select');
country-select.addEventListener("change",getState);
</script>
</div>
 