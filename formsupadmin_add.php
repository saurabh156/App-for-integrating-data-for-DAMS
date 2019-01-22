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
  <h2>Add Super Admin</h2>
  <form class="form-horizontal" action="addsuper.php" method="post">
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
      <label class="control-label col-sm-2">Select District:</label>
      <div class="col-sm-5">
        <select name="did">
    <option value="" disabled selected>Select</option>
    <option value="01">Anjaw</option>
    <option value="02">Changlang</option>
    <option value="03">Dibang Valley</option>
	<option value="04">East Kameng</option>
	<option value="05">East Siang</option>
	<option value="06">Kra Daadi</option>
	<option value="07">Kurung Kumey</option>
	<option value="08">Lohit</option>
	<option value="09">Longding</option>
	<option value="10">Lower Dibang Valley</option>
	<option value="11">Lower Subansiri</option>
	<option value="12">Namsai</option>
	<option value="13">Papum Pare</option>
	</select>
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