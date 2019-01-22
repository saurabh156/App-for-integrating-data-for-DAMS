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
<!-----------------------------header------------------------------------------------------------------------------------------------------>

<div class="container">
<!-----------------------------row1------------------------------------------------------------------------------------------------------>
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
				<h3><span style="font-size:32">Enter the data to calculate discharge for Penstock pipe.</h3>
				<br><br>	
				<div class="col-sm-8">
					<form action="datalog.php" method="post">
					<table>
						<tr>
							<td span style="100font-size:22">Enter height of flow from the pipe(feet):</td>
							<td><input type="decimal" class="form-control" name="height" value="" required></td>
						</tr>
						<tr>
							<td span style="100font-size:22">Enter live water level(feet):</td>
							<td><input type="decimal" name="waterlvl" class="form-control" value="" required></td>
						</tr>
						<tr><td>
							<h3>Enter the material of the pipe: </h3>
					<select class="gender form-control" name="material" required>
						<option style="font-size:20"value="">Select the material</option>
						<option style="font-size:20"value="0.012">Steel conduit-lockbar and welded</option>
						<option style="font-size:20"value="0.016">Steel conduit-riveted and spiral</option>
						<option style="font-size:20"value="0.009">Acrylic conduit</option>
						<option style="font-size:20"value="0.011">Concrete conduit-straight and free of debris</option>
						<option style="font-size:20"value="0.013">Concrete conduit-with bends and some debris</option>
						<option style="font-size:20"value="0.012">Metal channel-smooth steel surface</option>
						<option style="font-size:20"value="0.013">Cement channel-mortar</option>
						<option style="font-size:20"value="0.017">Concrete channel-finished or unfinished</option>
						<option style="font-size:20"value="0.022">Excavated earthen channel-straight and uniform</option>
						<option style="font-size:20"value="0.030">Excavated earthen channel-winding and sluggish</option>
						<option style="font-size:20"value="0.050">Natural channel-fairly regular section</option>
						<option style="font-size:20"value="0.070">Natural channel-irregular section with pools</option>
						<option style="font-size:20"value="0.030">Mowed grass channel-some weeds</option>
						<option style="font-size:20"value="0.035">High grass channel or dense weeds and plants</option>
					</select>
						</td>
						</tr>
						<tr>
						<td>
						<h3><span style="font-size:32">Data for Discharge Calculation</h3>
						</td>
						</tr>
						<tr>
							<td span style="100font-size:22">Enter the Depth of the River(feet):</td>
							<td><input type="decimal" name="depth" class="form-control" value="" required></td>
						</tr>
						<tr>
							<td span style="100font-size:22">Enter the Width of the River(feet):</td>
							<td><input type="decimal" name="width" class="form-control" value="" required></td>
						</tr>
						<tr>
							<td span style="100font-size:22">Enter the Surface Velocity(feet/sec):</td>
							<td><input type="decimal" name="velocity" class="form-control" value="" required></td>
						</tr>
						<tr>
						<td span style="100font-size:22">Select the Stream Bed:</td>
							<td><select class="gender form-control" name="roughness" required>
							<option style="font-size:20"value="">Select</option>
						<option style="font-size:20"value="0.09">Smooth Sand, Mud or Bedrock</option>
						<option style="font-size:20"value="0.08">Rock, Twigs or Weeds</option>
							</style>
							</td>
						</tr>
						
					</table>
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<br>
					<div class="col-sm-10"></div>
					<div class="col-sm-2"><input type="submit" name="ddata"class="btn btn-success" value="Enter Data"></div>
					</form>
					
				</div>
				<h2 align="center"><u>Manning’s Equation</u></h2>
				<br><br>
				<div class="col-sm-4"style="font-size:16px">
					<table align="center">
					<tr style="font-size:28">
						<td><h4>Q =&nbsp;&nbsp;</h4></td><td><h4>((1.00).A.R<sup>2/3</sup>.S<sup>1/2</sup>)<br>&#x2013;&#x2013;&#x2013;&#x2013;&#x2013;&#x2013;&#x2013;&#x2013;&#x2013;&#x2013;&#x2013;&#x2013;&#x2013;&#x2013;<br> </h4> <h4 align="center">n </h4></td></tr>
					</table>
					<br>
					<table align="center"
						<tr>
						<td>A = cross-sectional area</td></tr>
						<tr>
						<td>R = hydraulic radius</td></tr>
						<tr>
						<td>S = slope</td></tr>
						<tr>
						<td>n = Manning’s roughness coefficient</td></tr>
						<tr>
						<td>Q = discharge</td>
						</tr>
						</table>
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
