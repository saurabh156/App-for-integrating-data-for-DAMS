<?php session_start();
$did=$_SESSION['did'];
$sid=$_SESSION['sid'];
$rid=$_SESSION['rid'];
$uid=$_SESSION['uid'];

if(isset($_POST['ddata']))
{
	date_default_timezone_set('Asia/calcutta');
		$time =  date("h:i:sa");
		$date = date("Y-m-d h:i:sa");
		
$coefficient=$_POST['material'];
$water_level=$_POST['waterlvl'];
$height=$_POST['height'];
$float_depth=$_POST['depth'];
$float_width=$_POST['width'];
$float_vel=$_POST['velocity'];
$float_roughness=$_POST['roughness'];

include('conn2.php');

$db= "select * from static_dischargedata where siteid = '$sid'";
$result2 = mysqli_query($conn2, $db);
while($row2= mysqli_fetch_assoc($result2))
{
	$slope=$row2['slope'];
	$diameter=$row2['diameter'];
}
$dbyD=$height/$diameter;
$sql= "select * from radius_data where round(dbyD,2) =$dbyD";
$result = mysqli_query($conn2, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
	$a=$row["acf"];
	$r=$row["rcf"];
}
}
mysqli_close($conn2);
?>
<?php
include('conn2.php');
$area=$a*pow(2,2);
$radius=$r*2;
$discharge= (1.49*$area*pow($radius,2/3)*pow($slope,1/2))/$coefficient;
$float_discharge= (($float_depth*$float_width)*$float_vel*$float_roughness);
$query="insert into dr_data(date,site_id,height,capacity,water_level,discharge) values('$date','$sid',round('$height',2),round('$capacity',2),round('$water_level',3),round('$discharge',2))";

$db="insert into float_discharge values('$sid','$float_depth','$float_width','$float_vel','$float_roughness','$float_discharge')";
if(mysqli_query($conn2,$query) && mysqli_query($conn2,$db))
	{
		?>
		<script language="javascript">
		alert("Data Successfully Entered");
		window.location = "dataentry.php";
		</script>
	<?php 
	}
	else
		{
		?>
		<script language="javascript">
		alert("Error In Insertion of data");
		window.location = "dataentry.php";
		</script>
	<?php 
	}
}
else
	header('location:dataentry.php');
?>