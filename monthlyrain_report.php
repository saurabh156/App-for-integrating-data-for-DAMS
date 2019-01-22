<?php
$siteid=$_POST['siteid'];
include('conn2.php');
$query="select site_name from site_name where sid='$siteid'";
$result = mysqli_query($conn2, $query);
while($row = mysqli_fetch_assoc($result))
	{
		$site_name=$row['site_name'];
	}

?>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Information Book</title>

<link href="style/styles.css" rel="stylesheet" type="text/css" />

<link href="style/picture.css" rel="stylesheet" type="text/css" />
<style>
.rotation  { 
            /* background: pink;  need a color for filter */
             -moz-transform: rotate(90deg);
             -webkit-transform: rotate(90deg);
             -o-transform: rotate(90deg);
             -ms-transform: rotate(90deg);
             transform: rotate(270deg); }
</style>
</head>
<body>
<?php

	if(isset($_POST['mm_report'])){
	$mm=$_POST['month'];	
	include('conn2.php');
		
	$query="select date(date) as date,(select sum(round(lntr/(12*30),3)) from threshold_value where site_id= '$siteid') as lntr,round(sum(actual_rainfall),2) as actual_rainfall, round(avg(water_level),2) as water_level,round(((round(sum(actual_rainfall),2)-(select round(lntr/(12*30),3) from threshold_value where site_id= '$siteid'))/(select round(lntr/(12*30),3) from threshold_value where site_id= '$siteid'))*100) as percent, count(actual_rainfall) as numberofentry from rainfall_data where monthname(date(DATE)) = '$mm' and site_id = '$siteid' group by date(date)";
	
	$result = mysqli_query($conn2, $query);
	$count=0;
	
	if(mysqli_num_rows($result)!=0)
	{ ?>

<div class="content">
	<center>
	<div class="register autowidth autoheight" id="page1" style="background-color:#87ceeb; padding-top:40px; padding-bottom:40px;">
        <div style="background-color:#87ceeb; width:750px; height:auto; padding-top:15px; padding-bottom:15px">
<center>
	<div class="tophead" style="color:#000; height:35px">Monthly Report of Rainfall Data</div>
		
		<table border="1" bordercolor="#000000" cellpadding="5px" cellspacing="0" width="700px">
	<caption><h3>Month:&nbsp;&nbsp;<?php echo $mm?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site_Name:&nbsp;&nbsp;<?php echo $site_name ?></h3><caption>
        <tr class="gtophead" style=" font-size:14px;">
	<th><center>Date</center></th>
	<th><center>Long Term Normal Rainfall</center></th>
	<th><center>Actual Rainfall(Daily)</center></th>
	<th><center>Average Water Level</center></th>
	<th><center>Percentage Deviation from LTNR</center></th>
	<th><center>Total Number of Entry in one Day</center></th>
	</tr>
	<?php
	$date='';
	$ltnr='';
	$actual_rainfall='';
	$water_lvl='';
	$percent='';
	$numberofentry='';
	while($row = mysqli_fetch_assoc($result))
	{
		$count++;
		$date=$row['date'];
		$ltnr=$row['lntr'];
		$actual_rainfall=$row['actual_rainfall'];
		$water_lvl=$row['water_level'];
		$percent=$row['percent'];
		$numberofentry=$row['numberofentry'];
?>
<tr style='height:30px; font-size:15px; font-family:Arial, Helvetica, sans-serif'>
<td width="20%"><center><?php echo $date; ?></center></td>
<td><center><?php echo $ltnr; ?></center></td>
<td><center><?php echo $actual_rainfall; ?></center></td>
<td><center><?php echo $water_lvl; ?></center></td>
<td><center><?php echo $percent; ?></center></td>
<td><center><?php echo $numberofentry; ?></center></td>
</tr>
<?php
	}
	?>
</table>
</center>

	<?php
	}
	else
	{
	?>
	<div class="register autowidth autoheight" id="page1" style="background-color:#87ceeb; padding-top:40px; padding-bottom:40px;">
        <div style="background-color:#87ceeb; width:750px; height:auto; padding-top:15px; padding-bottom:15px">
<center>
	<div class="tophead" style="color:#000; height:35px">Monthly Report of Rainfall Data</div>
	
	<table border="1" bordercolor="#000000" cellpadding="5px" cellspacing="0" width="700px">
        <tr class="gtophead" style=" font-size:14px;">
		<th><center>Date</center></th>
	<th><center>Long Term Normal Rainfall</center></th>
	<th><center>Actual Rainfall(Daily)</center></th>
	<th><center>Average Water Level</center></th>
	<th><center>Percentage Deviation from LTNR</center></th>
	<th><center>Total Number of Entry in one Day</center></th>
	</tr>
<tr>
	<td colspan="6">No Records found</td>
	</tr>
</table></center>
<?php
	}
	}
	else 
		header('location:rain_report.php');
   mysqli_close($conn2);
	?>	
	</div>
        </div><br>
 <button onClick="printcontent('page1')">PRINT REPORT</button>
        </center>
    </div>
</body>
<script>
function p()
	{
	  
	   window.print() ;
	}
function printcontent(e)
{
var restorepage = document.body.innerHTML;
var printcont = document.getElementById(e).innerHTML;
document.body.innerHTML = printcont;
window.print();
document.body.innerHTML = restorepage;
}
</script>
</html>

		