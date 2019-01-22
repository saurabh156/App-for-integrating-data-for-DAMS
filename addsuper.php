<?php
if(isset($_POST['add']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$uid=$_POST['uid'];
	$did=$_POST['did'];
	$psw=$_POST['pwd'];
	$role="superadmin";

include('conn2.php');
$query="insert into login_table(Name, email, role, usn, password, district_id) values('$name','$email','$role','$uid','$psw','$did')";
if(mysqli_query($conn2,$query))
	{
		?>
		<script language="javascript">
		alert("Data Successfully Entered");
		window.location = "executive.php";
		</script>
	<?php
	}
	else
		{
		?>
		<script language="javascript">
		alert("Error In Insertion of data");
		window.location = "formsupadmin_add.php";
		</script>
	<?php 
	}
}

?>