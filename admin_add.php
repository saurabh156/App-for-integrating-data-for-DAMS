<?php session_start();
$did=$_SESSION['district_id'];
	if(isset($_POST['add']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$uid=$_POST['uid'];
		$rid=$_POST['rid'];
		$psw=$_POST['pwd'];
		$role="admin";
		$sid=$_POST['sid'];
		include('conn2.php');
		$query= "insert into login_table(Name, email, role, usn, password, river_id, site_id, district_id) values('$name','$email','$role','$uid','$psw','$rid','$sid','$did')";
		echo $query;
		if(mysqli_query($conn2,$query))
		mysqli_close($conn2);
	?>
	<script language="javascript">
		alert("Moderator Successfully added");
		window.location = "superadmin.php";
	</script>
	<?php 
	}
	
?>