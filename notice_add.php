<!DOCTYPE html>
<html lang="en">
<head>
	<title>DHAARA</title>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->.
	<link rel="stylesheet" href="layout/ad_styles/tst.css" type="text/css" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="tst.css" type="text/css" />
	<!--<script type="text/javascript">
		$(document).ready(function(){
		$("btton").click(function(){
        $("#loginform").load("login.html #replace");
    });
});
</script>-->

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
      </ul>
</nav>
</div>

<div class="container-fluid">

  <h2>Add Notice</h2>
  <form class="form-horizontal" action="">
    <div class="form-group">
      <label class="control-label col-sm-2">River ID</label>
      <div class="col-sm-5">
        <input type="email" class="form-control" placeholder="River ID">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Site ID</label>
      <div class="col-sm-5">          
        <input type="number" class="form-control" placeholder="Site ID">
      </div>
    </div>
	<div class="form-group col-sm-offset-2 col-sm-10">
      <label for="comment">Add notice here...</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-4">
        <button type="submit" class="btn btn-default">Add</button>
      </div>
    </div>
  </form>
  <form>
    
  </form>
</div>
<,/html>