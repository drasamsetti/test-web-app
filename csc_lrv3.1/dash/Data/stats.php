<?php
include("connection.php");

$query1="select count(id) as count from theme_master";
$query2="select count(prob_id) as count from problem_master"; 
$query3="select count(idea_id) as count from idea_master";
$dquery="select id from role_master where role_name='deleted'";
$dresult=mysql_query($dquery);
$drow=mysql_fetch_array($dresult);
$did=$drow['id'];
$query4="select count(short_id) as count from emp_master where role!='$did'";
$result1=mysql_query($query1) or die ("Could not execute query ($query) because ".mysql_error());
$row1=mysql_fetch_array($result1);
$result2=mysql_query($query2) or die ("Could not execute query ($query) because ".mysql_error());
$row2=mysql_fetch_array($result2);
$result3=mysql_query($query3) or die ("Could not execute query ($query) because ".mysql_error());
$row3=mysql_fetch_array($result3);
$result4=mysql_query($query4) or die ("Could not execute query ($query) because ".mysql_error());
$row4=mysql_fetch_array($result4);

$xml="<chart caption='Idea Generation Statistics' xAxisName='' yAxisName='Number' showValues='0' decimals='0' formatNumberScale='0'>
<set label='Total Themes' value='".$row1['count']."' />
<set label='Total Open Ideas' value='".$row2['count']."' />
<set label='Total Ideas' value='".$row3['count']."' />
<set label='Active Users' value='".$row4['count']."' />
</chart>";

header('Content-Type: text/xml');
print $xml;
?>