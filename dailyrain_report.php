<html>
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
	if(isset($_POST['report'])){
	
	$date=$_POST['date'];
	$siteid=$_POST['siteid'];
	
	include('conn2.php');

	$query= "select time(date) as time,(select round(lntr/(12*30),3) from threshold_value where site_id= '$siteid') as lntr, round(actual_rainfall,2) as actual_rainfall, round(water_level,2) as water_level, round((((round(actual_rainfall,3)-(select round(lntr/(12*30),3) from threshold_value where site_id='$siteid'))/(select round(lntr/(12*30),3) from threshold_value where site_id='$siteid'))*100),3) as percent from rainfall_data where date(DATE) = '".$date."' and site_id = '$siteid' ";
	$result = mysqli_query($conn2, $query);
	$count=0;
	
	if(mysqli_num_rows($result)!=0)
	{ ?>
	<div class="content">
	<center>
	<div class="register autowidth autoheight" id="page1" style="background-color:#87ceeb; padding-top:40px; padding-bottom:40px;">
        <div style="background-color:#87ceeb; width:750px; height:auto; padding-top:15px; padding-bottom:15px">
	<center>
	<div class="tophead" style="color:#000; height:35px">Daily Report of RainFall Data</div>
	
	<table border="1" bordercolor="#000000" cellpadding="5px" cellspacing="0" width="700px">
	<caption><h3>Date:&nbsp;&nbsp;<?php echo $date?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site_ID:&nbsp;&nbsp;<?php echo $siteid ?></h3><caption>
        <tr class="gtophead" style=" font-size:14px;">
	<th><center>SI.No</center></th>
	<th><center>Time</center></th>
	<th><center>Long Term Normal RainFall: </center></th>
	<th><center>Actual Rainfall: </center></th>
	<th><center>Live Water Level: </center></th>
	<th><center>Precentage Deviation from LTNR: </center></th>
	</tr>
<?php
	$time='';
	$lntr='';
	$actual_rain='';
	$live_water='';
	$percent='';
	while($row = mysqli_fetch_assoc($result))
	{
		$count++;
		$time=$row['time'];
		$lntr=$row['lntr'];
		$actual_rain=$row['actual_rainfall'];
		$live_water=$row['water_level'];
		$percent=$row['percent'];
?>
<tr style='height:30px; font-size:15px; font-family:Arial, Helvetica, sans-serif'>
<td><center><?php echo $count; ?></center></td>
<td><center><?php echo $time; ?></center></td>
<td><center><?php echo $lntr; ?></center></td>
<td><center><?php echo $actual_rain; ?></center></td>
<td><center><?php echo $live_water; ?></center></td>
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
	<div class="tophead" style="color:#000; height:35px">Daily Report of RainFall Data</div>
	
	<table border="1" bordercolor="#000000" cellpadding="5px" cellspacing="0" width="700px">
        <tr class="gtophead" style=" font-size:14px;">
	<th><center>SI.No</center></th>
	<th><center>Time</center></th>
	<th><center>Long Term Normal RainFall: </center></th>
	<th><center>Actual Rainfall: </center></th>
	<th><center>Live Water Level: </center></th>
	<th><center>Precentage Deviation from LNTR: </center></th>
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