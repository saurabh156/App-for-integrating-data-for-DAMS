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
	if(isset($_POST['yr_report'])){
	$year=$_POST['year'];
	$siteid=$_POST['siteid'];	
	include('conn2.php');
	
	$query="SELECT month(date) AS mm, monthName(date) AS month,(select round(lntr/(12),3) from threshold_value where site_id= '$siteid') as lntr,round(sum(actual_rainfall),2) as actual_rainfall, round(avg(water_level),2) as water_level, round(((round(sum(actual_rainfall),2)-(select round(lntr/(12),3) from threshold_value where site_id= '$siteid'))/(select round(lntr/(12),3) from threshold_value where site_id= '$siteid'))*100) as percent, round(max(actual_rainfall),3) as max_actual, round(min(actual_rainfall),3) as min_actual, round(max(water_level)) as max_water from rainfall_data where year(date)= $year and site_id= '$siteid' group by monthname(date(date)) order by month(date)";
	
	$result = mysqli_query($conn2, $query);
	$count=0;
	
	if(mysqli_num_rows($result)!=0)
	{ ?>

<div class="content">
	<center>
	
	<div class="register autowidth autoheight" id="page1" style="background-color:#87ceeb; padding-top:40px; padding-bottom:40px;">
        <div class="tophead" style="color:#000; height:35px">Yearly Report of RainFall Data</div>
		<div style="background-color:#87ceeb; width:750px; height:auto; padding-top:15px; padding-bottom:15px">
			<center>
		<table border="1" bordercolor="#000000" cellpadding="5px" cellspacing="0" width="800px">
	<caption><h3>Year:&nbsp;&nbsp;<?php echo $year?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site_ID:&nbsp;&nbsp;<?php echo $siteid ?></h3><caption>
        <tr class="gtophead" style=" font-size:14px;">
	<th><center>Month</center></th>
	<th><center>Long Term Normal Rainfall(Monthly)</center></th>
	<th><center>Actual RainFall(Monthly)</center></th>
	<th><center>Maximum RainFall</center></th>
	<th><center>Minimum RainFall</center></th>
	<th><center>Average Water Level</center></th>
	<th><center>Maximum Water Level</center></th>
	<th><center>Percentage Deviation from LTNR</center></th>
	</tr>
	<?php
	$month='';
	$ltnr='';
	$actual_rainfall='';
	$max_actual='';
	$min_actual='';
	$water_level='';
	$max_water='';
	$percent='';

	while($row = mysqli_fetch_assoc($result))
	{
		$count++;
		$month=$row['month'];
		$ltnr=$row['lntr'];
		$actual_rainfall=$row['actual_rainfall'];
		$max_actual=$row['max_actual'];
		$min_actual=$row['min_actual'];
		$water_level=$row['water_level'];
		$max_water=$row['max_water'];
		$percent=$row['percent'];
?>

<tr style='height:30px; font-size:15px; font-family:Arial, Helvetica, sans-serif'>
<td><center><?php echo $month; ?></center></td>
<td><center><?php echo $ltnr; ?></center></td>
<td><center><?php echo $actual_rainfall; ?></center></td>
<td><center><?php echo $max_actual; ?></center></td>
<td><center><?php echo $min_actual; ?></center></td>
<td><center><?php echo $water_level; ?></center></td>
<td><center><?php echo $max_water; ?></center></td>
<td><center><?php echo $percent; ?></center></td>
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
	<div class="tophead" style="color:#000; height:35px">Yearly Report of RainFall Data</div>
	
	<table border="1" bordercolor="#000000" cellpadding="5px" cellspacing="0" width="700px">
        <tr class="gtophead" style=" font-size:14px;">
	<th><center>Month</center></th>
	<th><center>Long Term Normal Rainfall(Monthly)</center></th>
	<th><center>Actual RainFall(Monthly)</center></th>
	<th><center>Maximum RainFall</center></th>
	<th><center>Minimum RainFall</center></th>
	<th><center>Average Water Level</center></th>
	<th><center>Maximum Water Level</center></th>
	<th><center>Percentage Deviation from LTNR</center></th>
	</tr>
	<tr>
	<td colspan="8">No Records found</td>
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


