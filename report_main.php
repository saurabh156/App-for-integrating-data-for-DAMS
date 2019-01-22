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

<?php
include('comparasion.php');
?>

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
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Data Entry<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="dischargeentry.php">Discharge Data</a></li>
          <li><a href="rainfall.php">Rain Entry</a></li>
          <li><a href="turbine_status.php">Turbine Entry</a></li>
        </ul>
      </li>
	  <li><a href="report_main.php">Reports</a></li>
      <li><a href="supadmin.php">Super Admin</a></li>
      <li><a href="executive.php">Executive</a></li>
    </ul>
</nav>
   <!-----------------------------header------------------------------------------------------------------------------------------------------>
</div>
<div class="container">
<!-----------------------------imgslider------------------------------------------------------------------------------------------------------>
	<div class="row">	
	<div id="outerbox" class="col-sm-8" style="padding:2em">
		<div id="sliderbox" height="20%">
		<img src="images/demo/1.jpg" width="10.7%" height="100%">
		<img src="images/demo/2.jpg" width="10.7%" height="100%" >
		<img src="images/demo/3.jpg" width="10.7%" height="100%">
		<img src="images/demo/4.jpg" width="10.7%" height="100%">
		<img src="images/demo/5.jpg" width="10.7%" height="100%">
		</div>
	</div>
	<div class="col-sm-1"></div>
	<div class="col-sm-4 well" style="padding:2em">
		<div class="mapouter"><div class="gmap_canvas"><iframe width="320" height="350" id="gmap_canvas" src=
					"https://maps.google.com/maps?q=26.20073,91.74683&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" 
					scrolling="no" marginheight="0" marginwidth="0"></iframe></div><a href="https://www.webdesign-muenchen-pb.de"></a>
		</div>
	</div>
	</div>
	
<!-----------------------------imgslider--------------------------------------------------------------------------->

<!---------------------------------------page start--------------------------------------------------------------------------->
<h1 style="font-family:cambria">Select Report Type</h1>
<br><br>
<input type="submit" value="Discharge Data Report" id="discharge"class="btn btn-md btn-info"/>
<input type="submit" value="Power Data Report" id="power"class="btn btn-md btn-info"/>
<input type="submit" value="Rainfall Data Report" id="rainfall"class="btn btn-md btn-info"/>
<br><br>
<form id="view_report" class="form-inline">
<input type="button" value="View Daily Discharge Report" id="dailydischarge" class="btn btn-md btn-info"/>
<input type="button" value="View Monthly Discharge Report" id="monthlydischarge" class="btn btn-md btn-info"/>
<input type="button" value="View Yearly Discharge Report" id="yearlydischarge" class="btn btn-md btn-info"/>
</form>

<form action="powerentry.php" class="form-inline" method="post" id="view_report1">
Select Month: <select class="gender form-control" id="month" name="month" required>
								    <option style="font-size:20"value="">Month</option>
						            <option style="font-size:20"value="January">January</option>
									<option style="font-size:20"value="February">February</option>
									<option style="font-size:20"value="March">March</option>
									<option style="font-size:20"value="April">April</option>
									<option style="font-size:20"value="May">May</option>
									<option style="font-size:20"value="June">June</option>
									<option style="font-size:20"value="July">July</option>
									<option style="font-size:20"value="August">August</option>
									<option style="font-size:20"value="September">September</option>
									<option style="font-size:20"value="October">October</option>
									<option style="font-size:20"value="November">November</option>
									<option style="font-size:20"value="December">December</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Enter Running Hours of turbine: <input type="text" name="running_hrs">
Select Site ID: <input type="text"class="form-control" name="siteid" value="">
<input type="submit" name="power" class="btn btn-md btn-success"  value="Calculate the Power">
</form>

<br><br>
<form id="view_report2" class="form-inline">
<input type="button" value="View Daily RainFall Report" id="dailyrain" class="btn btn-md btn-info"/>
<input type="button" value="View Monthly RainFall Report" id="monthlyrain" class="btn btn-md btn-info"/>
<input type="button" value="View Yearly RainFall Report" id="yearlyrain" class="btn btn-md btn-info"/>
</form>
<br><br>
<form action="daily_reportshow.php" class="form-inline" method="post" id="daily_show">
Select Date: <input type="date"class="form-control" name="date"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Select Site ID:<input type="text"class="form-control" name="siteid">
<input type="submit" name="report" class="btn btn-md btn-success" value="View Report">
</form>

<form action="dailyrain_report.php" class="form-inline" method="post" id="dailyrain_show">
Select Date: <input type="date" class="form-control"name="date"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Select Site ID:<input type="text" class="form-control"name="siteid">
<input  type="submit" name="report" class="btn btn-md btn-success" value="View Report">
</form>


<form action="monthlyrain_report.php" class="form-inline " method="post" id="monthlyrain_show">
Select Month: <select class="gender form-control" id="month" name="month" required>
								    <option style="font-size:20"value="">Month</option>
						            <option style="font-size:20"value="January">January</option>
									<option style="font-size:20"value="February">February</option>
									<option style="font-size:20"value="March">March</option>
									<option style="font-size:20"value="April">April</option>
									<option style="font-size:20"value="May">May</option>
									<option style="font-size:20"value="June">June</option>
									<option style="font-size:20"value="July">July</option>
									<option style="font-size:20"value="August">August</option>
									<option style="font-size:20"value="September">September</option>
									<option style="font-size:20"value="October">October</option>
									<option style="font-size:20"value="November">November</option>
									<option style="font-size:20"value="December">December</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Select Site ID: <input type="text"class="form-control" name="siteid" value="">
<input type="submit" name="mm_report" class="btn btn-md btn-success" value="View Report">
</form>

<form action="monthly_reportshow.php" class="form-inline" method="post" id="monthly_show">
Select Month: <select class="gender form-control" id="month" name="month" required>
								    <option style="font-size:20"value="">Month</option>
						            <option style="font-size:20"value="January">January</option>
									<option style="font-size:20"value="February">February</option>
									<option style="font-size:20"value="March">March</option>
									<option style="font-size:20"value="April">April</option>
									<option style="font-size:20"value="May">May</option>
									<option style="font-size:20"value="June">June</option>
									<option style="font-size:20"value="July">July</option>
									<option style="font-size:20"value="August">August</option>
									<option style="font-size:20"value="September">September</option>
									<option style="font-size:20"value="October">October</option>
									<option style="font-size:20"value="November">November</option>
									<option style="font-size:20"value="December">December</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Select Site ID: <input type="text" name="siteid" class="form-control"value="">
<input type="submit" name="monthly" class="btn btn-md btn-success" value="View Report">
</form>

<form action="yearlyrain_report.php" class="form-inline" method="post" id="yearlyrain_show">
Select Month: <select class="gender form-control"name="year" required>
								    <option style="font-size:20"value="">Year</option>
						            <option style="font-size:20"value="2015">2015</option>
									<option style="font-size:20"value="2016">2016</option>
									<option style="font-size:20"value="2017">2017</option>
									<option style="font-size:20"value="2018">2018</option>
									<option style="font-size:20"value="2019">2019</option>
									<option style="font-size:20"value="2020">2020</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Select Site ID: <select class="gender form-control" name="siteid" required>
								    <option style="font-size:20"value="">Site ID</option>
						            <option style="font-size:20"value="rs01">1</option>
									<option style="font-size:20"value="rs02">2</option>
									<option style="font-size:20"value="rs03">3</option>
									<option style="font-size:20"value="rs04">4</option>
									<option style="font-size:20"value="rs05">5</option>
									<option style="font-size:20"value="rs06">6</option>
</select>
<input type="submit" name="yr_report" class="btn btn-md btn-success"value="View Report">
</form>

<form action="yearly_reportshow.php" class="form-inline" method="post" id="yearly_show">
Select Month: <select class="gender form-control" name="year" required>
								    <option style="font-size:20"value="">Year</option>
						            <option style="font-size:20"value="2015">2015</option>
									<option style="font-size:20"value="2016">2016</option>
									<option style="font-size:20"value="2017">2017</option>
									<option style="font-size:20"value="2018">2018</option>
									<option style="font-size:20"value="2019">2019</option>
									<option style="font-size:20"value="2020">2020</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Select Site ID: <select class="gender form-control" name="siteid" required>
								    <option style="font-size:20"value="">Site ID</option>
						            <option style="font-size:20"value="rs01">1</option>
									<option style="font-size:20"value="rs02">2</option>
									<option style="font-size:20"value="rs03">3</option>
									<option style="font-size:20"value="rs04">4</option>
									<option style="font-size:20"value="rs05">5</option>
									<option style="font-size:20"value="rs06">6</option>
</select>
<input type="submit" name="yearly" class="btn btn-md btn-success"value="View Report">
</form>

<script>
$().ready = function() {
    $('#daily_show').hide();
	$('#dailyrain_show').hide();
	 $('#monthly_show').hide();
	 $('#monthlyrain_show').hide();
	 $('#yearly_show').hide();
	 $('#yearlyrain_show').hide();
	 $('#view_report').hide();
	 $('#view_report1').hide();
	 $('#view_report2').hide();
    
    $("#dailyrain").click(function() {
        $('#dailyrain_show').toggle();
		$('#daily_show').hide();
		$('#monthly_show').hide();
		$('#monthlyrain_show').hide();
		$('#yearly_show').hide();
		$('#yearlyrain_show').hide();
    });
	$("#dailydischarge").click(function() {
        $('#dailyrain_show').hide();
		$('#daily_show').toggle();
		$('#monthly_show').hide();
		$('#monthlyrain_show').hide();
		$('#yearly_show').hide();
		$('#yearlyrain_show').hide();
    });
	$("#monthlyrain").click(function() {
        $('#dailyrain_show').hide();
		$('#daily_show').hide();
		$('#monthly_show').hide();
		$('#monthlyrain_show').toggle();
		$('#yearly_show').hide();
		$('#yearlyrain_show').hide();
    });
	$("#monthlydischarge").click(function() {
        $('#dailyrain_show').hide();
		$('#daily_show').hide();
		$('#monthly_show').toggle();
		$('#monthlyrain_show').hide();
		$('#yearly_show').hide();
		$('#yearlyrain_show').hide();
    });
	$("#yearlyrain").click(function() {
        $('#dailyrain_show').hide();
		$('#daily_show').hide();
		$('#monthly_show').hide();
		$('#monthlyrain_show').hide();
		$('#yearly_show').hide();
		$('#yearlyrain_show').toggle();
    });
	$("#yearlydischarge").click(function() {
        $('#dailyrain_show').hide();
		$('#daily_show').hide();
		$('#monthly_show').hide();
		$('#monthlyrain_show').hide();
		$('#yearly_show').toggle();
		$('#yearlyrain_show').hide();
    });
	$("#discharge").click(function() {
        $('#view_report').toggle();
		$('#view_report1').hide();
		$('#view_report2').hide();
		$('#dailyrain_show').hide();
		$('#daily_show').hide();
		$('#monthly_show').hide();
		$('#monthlyrain_show').hide();
		$('#yearly_show').hide();
		$('#yearlyrain_show').hide();
    });
	$("#power").click(function() {
        $('#view_report1').toggle();
		$('#view_report').hide();
		$('#view_report2').hide();
		$('#dailyrain_show').hide();
		$('#daily_show').hide();
		$('#monthly_show').hide();
		$('#monthlyrain_show').hide();
		$('#yearly_show').hide();
		$('#yearlyrain_show').hide();
    });
	$("#rainfall").click(function() {
        $('#view_report2').toggle();
		$('#view_report').hide();
		$('#view_report1').hide();
		$('#dailyrain_show').hide();
		$('#daily_show').hide();
		$('#monthly_show').hide();
		$('#monthlyrain_show').hide();
		$('#yearly_show').hide();
		$('#yearlyrain_show').hide();
    });
}();
  <!------------------------------------------------------------------page ends-------------------------------------------------->  
</script>
<!-----------------------------bottom---------------------------------------------------------------------------------------------------->
		<div class="row" style="padding:1em">
		<h2 style="padding:2em" align="center"><u>Upcoming Projects</u></h2>
			<div class="col-sm-4"><a href="https://www.pppinindia.gov.in/infrastructureindia/view-project?p_p_id=viewproject_WAR_Projectportlet&p_p_lifecycle=0&p_p_col_id=column-1&p_p_col_count=1&_viewproject_WAR_Projectportlet_jspPage=%2Fhtml%2Fviewproject%2Fview.jsp&_viewproject_WAR_Projectportlet_ppp=Government+Infrastructure+Projects+%28PPP%29&_viewproject_WAR_Projectportlet_projectId=29006&_viewproject_WAR_Projectportlet_currURL=%2Finfrastructureindia%2Fproject-list%3Fp_p_id%3Dprojectlist_WAR_Projectportlet%26p_p_lifecycle%3D0%26p_p_state%3Dnormal%26p_p_mode%3Dview%26p_p_col_id%3Dcolumn-1%26p_p_col_count%3D1%26_projectlist_WAR_Projectportlet_jspPage%3D%252Fhtml%252Fprojectlist%252Fview.jsp%26_projectlist_WAR_Projectportlet_searchName%3D%26_projectlist_WAR_Projectportlet_searchType%3DProject%2BStatus%26_projectlist_WAR_Projectportlet_id%3D1401%26_projectlist_WAR_Projectportlet_projectTypeeids%3D%26_projectlist_WAR_Projectportlet_authorityName%3D%26_projectlist_WAR_Projectportlet_isShowAllTerminatedProjects%3Dtrue%26_projectlist_WAR_Projectportlet_cur%3D15%26_projectlist_WAR_Projectportlet_delta%3D20%26_projectlist_WAR_Projectportlet_keywords%3D%26_projectlist_WAR_Projectportlet_advancedSearch%3Dfalse%26_projectlist_WAR_Projectportlet_andOperator%3Dtrue%26_projectlist_WAR_Projectportlet_orderByCol%3DprojectName%26_projectlist_WAR_Projectportlet_orderByType%3Ddesc"><h4 align="center">PANYOR PROJECT</h4></div>
			<div class="col-sm-4"><a href="http://www.smec.com/en_au/what-we-do/projects/Kameng-Hydropower-Project"><h4 align="center">KAMENG PROJECT</h4></div>
			<div class="col-sm-4"><a href="http://india-wris.nrsc.gov.in/wrpinfo/index.php?title=RANGANADI_HE_Project_(NEEPCO)"><h4 align="center">RANGANADI  PROJECT</h4></div>
		</div>
		<div class="row" style="padding:2em" align="center">
			<div class="col-sm-4"><a href="#"><img src="images/demo/ab.gif"></div>
			<div class="col-sm-4"><a href="#"><img src="images/demo/cd.gif"></div>
			<div class="col-sm-4"><a href="#"><img src="images/demo/ef.gif"></div>
		</div>		
<!-----------------------------bottom---------------------------------------------------------------------------------------------------->
</div>
</body>
</html>