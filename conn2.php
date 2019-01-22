<?php

		$conn2 = mysqli_connect("localhost","root","","river_data");
		if(mysqli_connect_errno())			
			{
				echo mysqli_connect_errno();
				echo "connectivity error";
			}
?>