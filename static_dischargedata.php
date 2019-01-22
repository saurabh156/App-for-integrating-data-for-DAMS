<?php
if(isset($_POST['static']))
{
	$rise=$_POST['rise'];
	$run=$_POST['run'];
	$diameter=$_POST['diameter'];
	$site_id=$_POST['site_id'];
	$river_id=$_POST['river_id'];
	$slope=$rise/$run;
	include('conn2.php');
	$query="insert into static_dischargedata values('$site_id','$river_id',round('$slope',3),round('$diameter',2))";
	if(mysqli_query($conn2,$query))
	{
		?>
		<script language="javascript">
		alert("Data Successfully Entered");
		window.location = "admin.php";
		</script>
	<?php 
	}
	else
		echo"Error";
}
else
	header('location:admin.php');
?>