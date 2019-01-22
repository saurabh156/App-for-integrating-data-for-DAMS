<?php

date_default_timezone_set('Asia/calcutta');
			$date = date("Y-m-d h:i:sa");
			
			
	$livewater=$_POST['livewater'];
	$actualrain=$_POST['actualrain'];
	$siteid=$_POST['siteid'];
	
	include('conn2.php');
	
	$query = "insert into rainfall_data(date,site_id,actual_rainfall,water_level) values('$date','$siteid',round('$actualrain',2),round('$livewater',2))";
	if(mysqli_query($conn2, $query))
	{
			include('comparasion.php');
			include('sms.php');
?>	
		<script language="javascript">
		alert("message successfully sent");
		window.location = "rainfall.php";
		</script>
		
<?php
	}
?>
