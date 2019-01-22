<?php
	if(isset($_POST['power'])){
	$running=$_POST['running_hrs'];
	$siteid=$_POST['siteid'];
	$month=$_POST['month'];
	include('conn2.php');
	$db="select diameter, head_height from static_dischargedata where siteid='$siteid'";
	$result = mysqli_query($conn2, $db);
	while($row = mysqli_fetch_assoc($result))
	{
		$diameter=$row['diameter'];
		$head_height=$row['head_height'];
	}
mysqli_close($conn2);
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
	include('conn2.php');
	$query= "select date(date) as date, round(avg(capacity),2) as capacity, round(sum(discharge),2) as discharge from dr_data where site_id= '$siteid' and monthname(date)= '$month' GROUP BY date(date)";
	$result= mysqli_query($conn2,$query);
	if(mysqli_num_rows($result)!=0)
	{ ?>
	<div class="content">
	<center>
	<div class="register autowidth autoheight" id="page1" style="background-color:#87ceeb; padding-top:40px; padding-bottom:40px;">
        <div style="background-color:#87ceeb; width:750px; height:auto; padding-top:15px; padding-bottom:15px">
<center>
	<div class="tophead" style="color:#000; height:35px">Monthly Report of power Generation</div>
		
		<table border="1" bordercolor="#000000" cellpadding="5px" cellspacing="0" width="700px">
	<caption><h3>Month:&nbsp;&nbsp;<?php echo $month?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site_ID:&nbsp;&nbsp;<?php echo $siteid ?></h3><caption>
        <tr class="gtophead" style=" font-size:14px;">
	<th width="15%"><center>Date</center></th>
	<th width="10%"><center>Head</center></th>
	<th><center>Average Capacity</center></th>
	<th><center>Total Discharge</center></th>
	<th><center>Power Generated in KWH</center></th>
	<th><center>Running Hour of a Turbine</center></th>
	<th><center>Total Power Generated in a Day</center></th>
	</tr>
<?php
	$date='';
	$head='';
	$power='';
	$total_power='';
	$capacity='';
	$discharge='';
	$numberofentry='';
	while($row = mysqli_fetch_assoc($result))
	{
		$capacity=$row['capacity'];
		$discharge=$row['discharge'];
		$date=$row['date'];
		
		$discharge_cumec = $discharge/35.315;
		$head=$capacity - ($diameter/2) - $head_height;
		$power= $head * $discharge * 9.81 * 0.85;
		$total_power=$power * $running;
?>
<tr style='height:30px; font-size:15px; font-family:Arial, Helvetica, sans-serif'>
<td><center><?php echo $date; ?></center></td>
<td><center><?php echo $head; ?></center></td>
<td><center><?php echo $capacity; ?></center></td>
<td><center><?php echo $discharge; ?></center></td>
<td><center><?php echo round($power,3); ?></center></td>
<td><center><?php echo $running; ?></center></td>
<td><center><?php echo round($total_power,3); ?></center></td>
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
	<div class="tophead" style="color:#000; height:35px">Monthly Report of Power Generation</div>
	
	<table border="1" bordercolor="#000000" cellpadding="5px" cellspacing="0" width="700px">
        <tr class="gtophead" style=" font-size:14px;">
	<th><center>Date</center></th>
	<th><center>Head</center></th>
	<th><center>Average Capacity</center></th>
	<th><center>Total Discharge</center></th>
	<th><center>Power Generated in KWH</center></th>
	<th><center>Running Hour of a Turbine</center></th>
	<th><center>Total Power Generated in a Day</center></th>
	</tr>
	<tr>
	<td colspan="7">No Records found</td>
	</tr>
</table></center>
<?php
	}
	}
	else 
		header('location:report_main.php');
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
</body>
</html>
