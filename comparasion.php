<?php session_start();
	
	include('conn2.php');
	$query="select water_level, actual_rainfall, (select norm_waterlvl from threshold_value) as norm_waterlvl, (select max_waterlvl from threshold_value) as max_waterlvl, (select min_rain from threshold_value) as min_rain, (select max_rain from threshold_value) as max_rain from rainfall_data where sno=(select max(sno) from rainfall_data)";
	$result = mysqli_query($conn2, $query);
	while($row = mysqli_fetch_assoc($result))
	{
		$water_level=$row['water_level'];
		$actual_rainfall=$row['actual_rainfall'];
		$norm_waterlvl=$row['norm_waterlvl'];
		$max_waterlvl=$row['max_waterlvl'];
		$min_rain=$row['min_rain'];
		$max_rain=$row['max_rain'];		
		}
		$warning= " WARNING!!!!!   The Water Level is above Normal Level and there is minimum or no Rainfall in the area.  No Chances of Rainfall.";
		$alert= " ALERT!!!!! The water level is at Maximum Level with heavy rainfall. Very High Chances of Flood.";
		$alert_normrain= " ALERT!!!!!   The water level is at Maximum Level with normal rainfall.   High Chances of Flood.";
		$alert_maxwaterlvl= "ALERT!!!!!    The Water Level is at Maximum Level.   High Chances of Flood.";
		$warning_rain= "WARNING!!!!!!  The Water Level is Normal but there is heavy rainfall.   Moderate Chances of Flood.";
		$warning_rain_waterlvl="WARNING!!!    The Water Level is above normal level with heavy rainfall in the area.   Moderate Chances of Flood.";
		$normal_rain_waterlvl= "NORMAL!!!    The Water Level is normal but there is normal rainfall in the area.    Low Chances of Flood.";
		$normal = "NORMAL!!!!    The water level is normal and there is no rainfall in the area.    No chance of flood";
		$below_normal = "NORMAL!!!!   The water level is below normal with heavy Rainfall.   Low Chances of Flood.";
		$normal_waterlvl_normalrain = "NORMAL!!!!!    The water level is below normal level and there is normal rainfall.   Least Chances of Flood.";
		
		
		if(($actual_rainfall>=$min_rain && $actual_rainfall<$max_rain) && $water_level<$norm_waterlvl)
		{?>
		<script language="javascript">
		alert("<?php echo $normal_rain_waterlvl; ?>");
		</script>
				
		<?php
			}
		else
			if($actual_rainfall>=$min_rain && $actual_rainfall<$max_rain && $water_level>=$norm_waterlvl && $water_level<$max_waterlvl)
			{  ?>
		<script language="javascript">
		alert("<?php echo $normal_waterlvl_normalrain; ?>");
		</script>
				
		<?php
			}
		else 
			if($actual_rainfall>=$max_rain && $water_level>=$norm_waterlvl && $water_level<$max_waterlvl)
			{  ?>
		<script language="javascript">
		alert("<?php echo $warning_rain; ?>");
		</script>
				
		<?php
			}
		else 
			if($actual_rainfall>=$min_rain && $actual_rainfall<$max_rain && $water_level>$max_waterlvl)
			{  
				$_SESSION['msg']=$alert_normrain;
		?>
		<script language="javascript">
		alert("<?php echo $alert_normrain; ?>");
		</script>
				
		<?php
			}
		else 
			if($actual_rainfall<$min_rain && $water_level>=$max_waterlvl)
			{ 
				$_SESSION['msg']=$alert_maxwaterlvl;
		?>
		<script language="javascript">
		alert("<?php echo $alert_maxwaterlvl; ?>");
		</script>
				
		<?php
			}
		else 
			if($actual_rainfall<$min_rain && $water_level>=$norm_waterlvl && $water_level<$max_waterlvl)
			{  ?>
		<script language="javascript">
		alert("<?php echo $warning; ?>");
		</script>
				
		<?php
			}
		else 
			if($actual_rainfall<$min_rain && $water_level<=$norm_waterlvl)
			{  ?>
		<script language="javascript">
		alert("<?php echo $normal; ?>");
		</script>
				
		<?php
			}
		else 
			if($actual_rainfall>=$max_rain && $water_level>=$norm_waterlvl && $water_level<=$max_waterlvl)
			{  ?>
		<script language="javascript">
		alert("<?php echo $warning_rain_waterlvl; ?>");
		</script>
				
		<?php
			}
		else 
			if($actual_rainfall>=$max_rain && $water_level>=$max_waterlvl)
			{
				$_SESSION['msg']=$alert;
				?>
		<script language="javascript">
		alert("<?php echo $alert; ?>");
		</script>
				
		<?php
			}
		else 
			if($actual_rainfall>=$max_rain && $water_level<=$norm_waterlvl)
			{  ?>
		<script language="javascript">
		alert("<?php echo $below_normal; ?>");
		</script>
				
		<?php
			}
		
?>