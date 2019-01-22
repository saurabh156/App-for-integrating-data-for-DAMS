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

<style>
	.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color:#e74c3c;<!--for on condition-->
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;<!--for round marker-->
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color:#2ecc71;
  value:OFF<!--for off condition-->
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
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

<body style="background-color:lavender">
<div class="container-fluid">

<div class="container">
<!-----------------------------imgslider------------------------------------------------------------------------------------------------------>
	<div class="row">
	
	<div id="outerbox" class="col-sm-8" style="padding:2em">
		<div id="sliderbox" height="20%">
		<img src="images/demo/1.jpg" width="10.7%" height="30%">
		<img src="images/demo/2.jpg" width="10.7%" height="30%" >
		<img src="images/demo/3.jpg" width="10.7%" height="30%">
		<img src="images/demo/4.jpg" width="10.7%" height="30%">
		<img src="images/demo/5.jpg" width="10.7%" height="30%">
		</div>
	</div>
<!-----------------------------imgslider------------------------------------------------------------------------------------------------------>
	<div class="col-sm-1"></div>
<!-----------------------------map------------------------------------------------------------------------------------------------------>
	<div class="col-sm-4 well" style="padding:2em">
		<div class="mapouter"><div class="gmap_canvas"><iframe width="320" height="350" id="gmap_canvas" src=
					"https://maps.google.com/maps?q=26.20073,91.74683&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" 
					scrolling="no" marginheight="0" marginwidth="0"></iframe></div><a href="https://www.webdesign-muenchen-pb.de"></a>
		</div>
	</div>
<!-----------------------------map------------------------------------------------------------------------------------------------------>
</div>
<!-----------------------------row1------------------------------------------------------------------------------------------------------>
	
<!-----------------------------row2------------------------------------------------------------------------------------------------------>
	<div class="row">
					
				<div class="col-sm-8">
				<form action="" method="post">
				<table>
						<tr>
							<td><h3>Running hour of the turbine: </h3></td>
						</tr>
						<tr>
							<td>
							<label class="switch">
								<input type="checkbox" checked>
								<span class="slider round"></span>
							</label>
							</td>
							</tr>
					</table>
Enter Site ID :<input type="number" name="siteid">
Enter Running Hours :<input type="decimal" name="running_hour">
<input type="submit" name="turbine_status" value="Submit">
</form>	
</div>
			<h2 align="center"><u>Latest News</u></h2>
				<div class="col-sm-4"style="font-size:16px">
					<marquee direction="up" scrolldelay="100"   onMouseover="this.stop();"  onmouseout="this.start();" height="300px;"width="350px">
						<div class="row"style="padding:1.3em">
							<div class="col-sm-12">
								<img src="images/demo/80x80.gif"alt="">
							</div>
							<div class="col-sm-12"> 
								<strong><a href="#">  <small>ANY FLOOD CONDITION RELATED NEWS.</a></strong>  THIS WILL GIVE THE LATEST NEWS ABOUT THE FLOOD CONDITION IF ANY</small>
							</div>
						</div>
						<div class="row" style="padding:1.3em">
							<div class="col-sm-12">
								<img src="images/demo/81x81.gif" alt="" >
							</div>	
							<div class="col-sm-12"><small>
								<strong><a href="#">ANY HEAVY RAINFALL RELATED NEWS</a></strong> THIS WILL GIVE THE LATEST NEWS ABOUT THE HEAVY RAINFALL IN A REGION IF ANY</small>
							</div>
						</div>
						<div class="row" style="padding:1.3em">
							<div class="col-sm-12">
								<img src="images/demo/82x82.gif" alt="" >
							</div>
							<div class="col-sm-12"> <small>		
								<strong><a href="#">DISASTER MANAGEMENT NEWS</a></strong> THIS WILL GIVE LATEST NEWS ABOUT ANY OTHER DISASTER MANAGEMENT PROBLEM</small>
							</div>	
						</div>	
					</marquee>
				</div>
	</div>
				<br>
<!-----------------------------row2---------------------------------------------------------------------------------------------------->
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

<?php

	date_default_timezone_set('Asia/calcutta');
			$date = date("Y-m-d h:i:sa");
	$turbine=$_POST['turbine'];
	$siteid=$_POST['siteid'];
	
	include('conn2.php');
	$query="insert into turbine_running values('$date','$siteid','$turbine')";
	if(mysqli_query($conn2, $query))
	{
		echo"Records inserted Successfully";
	}

?>