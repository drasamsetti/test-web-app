<?php
include("connection.php");
$query="SELECT a.fn, count(b.project_id) from mentors.personal a, iic.mentor_project b, iic.checklist c where a.id=b.mentor_id and b.project_id=c.project_id group by a.fn";
$result=mysql_query($query) or die("could not execute query");
$xml="<chart palette='1' caption='Mentor Activity' shownames='1' showvalues='0' showSum='1' decimals='0' overlapBars='0' showShadow='1'>
<categories>";
while($row=mysql_fetch_row($result))
{
	$name=$row[0];
	$xml.="<category label='$name' />";
}
mysql_data_seek($result,0);
$xml.="</categories>";
/*
<dataset seriesName='Total Projects' showValues='1'>";
while($row=mysql_fetch_row($result))
{
	$count=$row[1];
	$xml.="<set value='$count' />";
}*/
$xml.="<dataset seriesName='Tech Not Received' showValues='1'>";

$query="select distinct a.id from mentors.personal a, iic.mentor_project b where a.id=b.mentor_id order by a.fn";
$result=mysql_query($query) or die("could not execute query1");
while($row=mysql_fetch_row($result))
{
	$id=$row[0];
	$query2="select distinct count(c.tech_rec) from mentors.personal a, iic.mentor_project b, iic.checklist c where a.id=b.mentor_id and b.project_id=c.project_id and c.tech_rec='' and a.id=$id group by a.fn";
	$result2=mysql_query($query2) or die("could not execute query2");
	$row2=mysql_fetch_row($result2);
	$tech_not_rec=$row2[0];
	$xml.="<set value='$tech_not_rec' link=\"javascript:renderTech($id); renderPdd($id);\" />";
}
$xml.="</dataset><dataset seriesName='Tech Received' showValues='1'>";




$query="select distinct a.id from mentors.personal a, iic.mentor_project b where a.id=b.mentor_id order by a.fn";
$result=mysql_query($query) or die("could not execute query1");
while($row=mysql_fetch_row($result))
{
	$id=$row[0];
	$query2="select distinct count(c.tech_rec) from mentors.personal a, iic.mentor_project b, iic.checklist c where a.id=b.mentor_id and b.project_id=c.project_id and c.tech_rec='on' and a.id=$id group by a.fn";
	$result2=mysql_query($query2) or die("could not execute query2");
	$row2=mysql_fetch_row($result2);
	$tech_rec=$row2[0];
	$xml.="<set value='$tech_rec' link=\"javascript:renderTech($id); renderPdd($id);\" />";
}
$xml.="</dataset></chart>";
header('Content-Type: text/xml');
print $xml;
?>