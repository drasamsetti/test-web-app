<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="images/favicon.ico">
<title>Idea Generation Reports</title>
<script language="JavaScript" src="FusionCharts.js"></script>
<script language="JavaScript" src="PowerMap.js"></script>
<link  rel='stylesheet' href="Contents/Style.css" />
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #eeeeee;
}
-->

</style></head>

<body>
<script type="text/javascript">
function renderTech()
{
	var myChart = new FusionCharts("Gadgets/AngularGauge.swf", "chart3", "300", "300", "0", "0");
    myChart.setDataURL("Data/themes_total.php");
    myChart.render("chart3");
}
function renderPdd()
{
	var myChart = new FusionCharts("Charts/AngularGauge.swf", "chart4", "340", "340", "0", "0");
	myChart.setDataURL("Data/ideas_total.php");
	myChart.render("chart4");
}
</script>
<table width="960" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td width="8" rowspan="2" background="Images/page_bg.gif">&nbsp;</td>
    <td><table width="964" border="0" cellspacing="0" cellpadding="0">
      <tr>
    <td width="188" align="center" id='cscLogo'><img src = "Images/logo.jpg" border="0"></td>
    <td width="575" align="center">
    <object width="560" height="81">
	<param name="movie" value="Images/logoIdea.swf">
	<embed src="Images/logoIdea.swf" width="560" height="81">
	</embed>
	</object>
	</td>
    <td width="111" align="right"><img src="Images/ooi4.jpg"></td>
  </tr>
    </table></td>
    <td width="8" rowspan="2" background="Images/page_bg.gif">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="964" border="0" cellpadding="0" cellspacing="0" class="bordertop" style='BORDER-BOTTOM:#eeeeee 1px solid;'>
      <tr>
        <td width="600" valign="top"><table width="600" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>          
				<div id="chart1" align="left"></div>
				<script type="text/javascript">
				    var myChart = new FusionCharts("Doughnut3D.swf", "chart1", "600", "300", "0", "0");
				    myChart.setDataURL("Data/themes.php");
				    myChart.render("chart1");
			    </script>
			</td>
			
			<div><img src="Images/dot_white.png" width="1" height="60" /></div>
			
          	<div id="chart5" align="center"></div>
			<script type="text/javascript">
			    var myChart = new FusionCharts("Column3D.swf", "chart5", "600", "350", "0", "0");
			    myChart.setDataURL("Data/stats.php");
			    myChart.render("chart5");
		    </script>
          </tr>
		  
        </table></td>
        
        <td width="364" valign="top" class="rightcol"><table width="364" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="tab"><div align="center">Total Number of Themes</div></td>
          </tr>
          <tr>
            <td><img src="Images/dot_white.png" width="1" height="15" /></td>
          </tr>
          <tr>
            <td><div id="chart3" align="center"></div>
				<script type="text/javascript">
				renderTech();
			    </script></td>
          </tr>
          <tr>
            <td><img src="Images/dot_white.png" width="1" height="15" /></td>
          </tr>
          <tr>
            <td class="tab"><div align="center">Total Number of Ideas</div></td>
          </tr>
          <tr>
            <td><img src="Images/dot_white.png" width="1" height="15" /></td>
          </tr>
          <tr>
            <td><div id="chart4" align="center"></div>
				<script type="text/javascript">
				renderPdd();
			    </script></td>
          </tr>
 
        </table></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td background="Images/page_bg.gif">&nbsp;</td>
  </tr>
  
</table>
</body>
</html>
