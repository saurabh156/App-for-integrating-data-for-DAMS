<?php session_start();
if(isset($_POST['login']))
{
		$usn=$_POST['usn']; 
		$psw=$_POST['psw'];	
		include('conn2.php');
		$db = "select * from login_table where usn = '$usn'";
		$login = mysqli_query($conn2,$db);
		while($log = mysqli_fetch_assoc($login))
		{
			$dbpass=$log['password'];
			$role=$log['role'];
			$uid=$log['usn'];
			$rid=$log['river_id'];
			$sid=$log['site_id'];
			$did=$log['district_id'];
		}
		if($dbpass==$psw && $role =='executive')
		{
			$_SESSION['uid']=$uid;
			$_SESSION['pass']=$dbpass;
			$_SESSION['role']=$role;
			header("location:executive.php");
		}
		else
		if($dbpass==$psw && $role =='superadmin')
		{
			$_SESSION['uid']=$uid;
			$_SESSION['role']=$role;
			$_SESSION['district_id']=$did;
			header("location:superadmin.php");
			}
		if($dbpass==$psw && $role =='admin')
		{
			$_SESSION['uid']=$uid;
			$_SESSION['rid']=$rid;
			$_SESSION['pass']=$dbpass;
			$_SESSION['did']=$did;
			$_SESSION['sid']=$sid;
			$_SESSION['role']=$role;
			header("location:admin.php");
			}
	else 
		header("locaton:index.php");
}
?>