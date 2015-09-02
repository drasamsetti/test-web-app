<?php
include("connection.php");

$query1="SELECT id, name from theme_master where status='open'";
$result1=mysql_query($query1) or die("could not execute query");

$xml="<chart palette='2' showBorder='1' caption='Open Themes with number of Ideas'>";
while($row1=mysql_fetch_array($result1))
{
	$id=$row1['id'];
	$query2="SELECT count(idea_id) as count from idea_master where theme_id=$id";
	$result2=mysql_query($query2) or die("could not execute query");
	$row2=mysql_fetch_array($result2);
	if(isset($row2['count']))
	{
		$icount=$row2['count'];
	}
	else
	{
		$icount=0;
	}
	$xml.="<set label='".$row1['name']."' value='".$icount."'  />";	
}
$xml.="</chart>";
header('Content-Type: text/xml');
print $xml;
?>