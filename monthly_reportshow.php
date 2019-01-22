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
	if(isset($_POST['monthly'])){
	$mm=$_POST['month'];
	$siteid=$_POST['siteid'];	
	include('conn2.php');
	
	$query= "SELECT date(date) as date, Round(Avg(height),2) AS height, Round(Avg(capacity),2) AS capacity, Round(Avg(discharge),2) AS discharge, count(discharge) as numberofentry FROM dr_data WHERE site_id ='$siteid' AND monthname(date)= '$mm' GROUP BY date(date)";
	
	$result = mysqli_query($conn2, $query);
	$count=0;
	
	if(mysqli_num_rows($result)!=0)
	{ ?>
	<div class="content">
	<center>
	<div class="register autowidth autoheight" id="page1" style="background-color:#87ceeb; padding-top:40px; padding-bottom:40px;">
        <div style="background-color:#87ceeb; width:750px; height:auto; padding-top:15px; padding-bottom:15px">
<center>
	<div class="tophead" style="color:#000; height:35px">Monthly Report of Discharge Data</div>
		
		<table border="1" bordercolor="#000000" cellpadding="5px" cellspacing="0" width="700px">
	<caption><h3>Month:&nbsp;&nbsp;<?php echo $mm?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site_ID:&nbsp;&nbsp;<?php echo $siteid ?></h3><caption>
        <tr class="gtophead" style=" font-size:14px;">
	<th><center>SI.No</center></th>
	<th><center>Date</center></th>
	<th><center>Height</center></th>
	<th><center>Capacity</center></th>
	<th><center>Discharge</center></th>
	<th><center>Number of Discharge Entry</center></th>
	</tr>
	
<?php
	$date='';
	$height='';
	$capacity='';
	$discharge='';
	$numberofentry='';
	while($row = mysqli_fetch_assoc($result))
	{
		$count++;
		$date=$row['date'];
		$height=$row['height'];
		$capacity=$row['capacity'];
		$discharge=$row['discharge'];
		$numberofentry=$row['numberofentry'];
?>
<tr style='height:30px; font-size:15px; font-family:Arial, Helvetica, sans-serif'>
<td><center><?php echo $count; ?></center></td>
<td><center><?php echo $date; ?></center></td>
<td><center><?php echo $height; ?></center></td>
<td><center><?php echo $capacity; ?></center></td>
<td><center><?php echo $discharge; ?></center></td>
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
	<div class="tophead" style="color:#000; height:35px">Monthly Report of Discharge Data</div>
	
	<table border="1" bordercolor="#000000" cellpadding="5px" cellspacing="0" width="700px">
        <tr class="gtophead" style=" font-size:14px;">
	<td><center>SI.No</center></td>
	<td><center>Date</center></td>
	<td><center>Height(in mtrs)</center></td>
	<td><center>Live Capacity(in cusecs)</center></td>
	<td><center>Discharge(in cusecs)</center></td>
	<td><center>Number of Entry</center></td>
	</tr>
	<tr>
	<td colspan="6">No Records found</td>
	</tr>
</table></center>
<?php
	}
	}
	else 
		header('location:report.php');
   mysqli_close($conn2);
	?>	
	</div>
        </div><br>
 <button class="btn btn-lg btn-success"onClick="printcontent('page1')">PRINT REPORT</button>
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
