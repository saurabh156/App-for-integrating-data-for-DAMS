<?php session_start();
	
	$did=$_SESSION['district_id'];
	$role=$_SESSION['role'];
	$uid=$_SESSION['uid'];
?>


 <!DOCTYPE html>
<html lang="en">
<head>
	<title>DHAARA</title>
	<link rel="icon" href="images/demo/dharalogo.png" type="image/gif" sizes="16x16">
	<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->.
	<link rel="stylesheet" href="layout/ad_styles/tst.css" type="text/css" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="tst.css" type="text/css" />

</head>
<body style="background-color:lavender">
<div class="container-fluid">
<!-----------------------------header------------------------------------------------------------------------------------------------------>
  <div class="page-header" style="background-color:#000000">
	<div class="container-fluid" style="100">
	<p></p>
	<img src="images/demo/abc.gif" align="left">
	<img src="images/demo/275x180.gif" align="right">
	<h1 style="color:#FFFFFF"><center> GOVERNMENT OF ARUNACHAL PRADESH </center></h1>
	<h1 style="color:#5F27CD"><center><b>DHAARA</b></center></h1>
	<center><h3 style="color:#FFFFFF">DISCHARGE DATA & HYDROPOWER ADVANCED ANALYSIS REPORTING & ALERT SYSTEM</h3></center></p>
	</div>
   </div>
   <nav class="navbar navbar-inverse navbar-expand-sm bg">
	<ul class="nav navbar-nav">
      <li class="active"><a href="executive.php">Home</a></li>
	  <li><a href="report_main.php">Reports</a></li>
	  <li><a href="contact.php"> Contact Us</a></li>
	  <li><a href="logout.php"> Logout</a></li>
      </ul>
</nav>
   <!-----------------------------header------------------------------------------------------------------------------------------------------>
</div>


<div class="container">
  <h2>Add Admin</h2>
  <form class="form-horizontal" action="admin_add.php" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2">Name:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" placeholder="Enter Name" name="name">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2">Email:</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2">User_ID:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" placeholder="Enter user id" name="uid">
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2">Assigned District:</label>
      <div class="col-sm-5">
	  <input type="text" name="district" value="<?php echo $did; ?>" readonly>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2">Select River:</label>
      <div class="col-sm-5">
	<select name="rid">
<?php 

include('conn2.php');
$query="select rid,river_name from river_nameinfo where did='$did'";
$result = mysqli_query($conn2, $query);
while($row = mysqli_fetch_assoc($result))
	{
echo '<option value="'.$row['rid'].'">' . $row['river_name'] . '</option>';
}
mysqli_close($conn2);

	?>
	</select>
      </div>
    </div>
	
	<div class="form-group">
      <label class="control-label col-sm-2">Enter Site ID:</label>
      <div class="col-sm-5">
	<input type="text" name="sid">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"name="add">Add</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>
