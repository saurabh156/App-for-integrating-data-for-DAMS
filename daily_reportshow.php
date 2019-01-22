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
	if(isset($_POST['report'])){
	
	$date1=$_POST['date'];
	$siteid1=$_POST['siteid'];
	
	include('conn2.php');
	
	$query="SELECT date(date) as date, time(date) as time, site_id, height, water_level, discharge FROM dr_data WHERE date(DATE) = '".$date1."' AND site_id = '$siteid1' ";
	$result = mysqli_query($conn2, $query);
	$count=0;
	
	if(mysqli_num_rows($result)!=0)
	{ ?>
	<div class="content">
	<center>
	<div class="register autowidth autoheight" id="page1" style="background-color:#87ceeb; padding-top:40px; padding-bottom:40px;">
        <div style="background-color:#87ceeb; width:750px; height:auto; padding-top:15px; padding-bottom:15px">
<center>
	<div class="tophead" style="color:#000; height:35px">Daily Report of Discharge Data</div>
	
	<table border="1" bordercolor="#000000" cellpadding="5px" cellspacing="0" width="700px">
	<caption><h3>Date:&nbsp;&nbsp;<?php echo $date1?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site_ID:&nbsp;&nbsp;<?php echo $siteid1 ?></h3><caption>
        <tr class="gtophead" style=" font-size:14px;">
	<th><center>SI.No</center></th>
	<th><center>Time</center></th>
	<th><center>Height(in feets)</center></th>
	<th><center>Live Water_Level(feet)</center></th>
	<th><center>Discharge(in Cusecs)</center></th>
	</tr>
<?php
	$date='';
	$time='';
	$siteid='';
	$height='';
	$capacity='';
	$discharge='';
	while($row = mysqli_fetch_assoc($result))
	{
		$count++;
		$date=$row['date'];
		$time=$row['time'];
		$siteid=$row['site_id'];
		$height=$row['height'];
		$water_level=$row['water_level'];
		$discharge=$row['discharge'];
?>
<tr style='height:30px; font-size:15px; font-family:Arial, Helvetica, sans-serif'>
<td><center><?php echo $count; ?></center></td>
<td><center><?php echo $time; ?></center></td>
<td><center><?php echo $height; ?></center></td>
<td><center><?php echo $water_level; ?></center></td>
<td><center><?php echo $discharge; ?></center></td>
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
	<div class="tophead" style="color:#000; height:35px"><b>Daily Report of Discharge Data</b></div>
	
	<table align="center" border="3" bordercolor="#000000" cellpadding="5px" cellspacing="0" width="750px">
        <tr class="gtophead" style=" font-size:14px;">
	<td><center><b>SI.No</b></center></td>
	<td><center><b>Time</b></center></td>
	<td><center><b>Height(feet)</b></center></td>
	<td><center><b>Capacity(feet)</b></center></td>
	<td><center><b>Discharge(cusecs)</b></center></td>
	</tr>
	<tr>
	<td colspan="15">No Records found</td>
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
 <button class="btn btn-lg btn-success" onClick="printcontent('page1')">PRINT REPORT</button>
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