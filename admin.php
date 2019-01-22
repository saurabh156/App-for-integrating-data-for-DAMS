<?php session_start();
$sid=$_SESSION['sid'];
$rid=$_SESSION['rid'];
include('conn2.php');
$query="select * from static_dischargedata where siteid= '$sid' and riverid= '$rid'";
$result = mysqli_query($conn2, $query);
while($row= mysqli_fetch_assoc($result))
{
	$slope=$row['slope'];
	$diameter=$row['diameter'];
	$gauge=$row['gauge'];
	$head=$row['head_height'];
}
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
      <li class="active"><a href="admin.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Data Entry<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="dischargeentry.php">Discharge Data</a></li>
          <li><a href="rainfall.php">Rain Entry</a></li>
          <li><a href="turbine_status.php">Turbine Entry</a></li>
        </ul>
      </li>
	  <li><a href="report_main.php">Reports</a></li>
	  <li style="align:right"><a href="logout.php"> Logout</a></li>
</nav>
   <!-----------------------------header------------------------------------------------------------------------------------------------------>
</div>
   
<!-----------------------------header------------------------------------------------------------------------------------------------------>

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
	<div class="row">
		<div class="col-sm-8" id="data">
		<h1 style="font-family:cambria"> The Data of the Run off river Plant and Penstock</h1>
		<br><br>
		<form action="static_dischargedata.php" method="post">
			<div class="row">
				<div class="col-sm-3"><span style="100font-size:24">Site id:</div>
				<div class="col-sm-5"><input type="text" class="form-control" name="site_id" value="<?php if(isset($sid)) echo $sid; ?>" readonly>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
			</div>
			<div class="row">
				<div class="col-sm-3"><span style="100font-size:24">Enter River id: </div>
				<div class="col-sm-5"><input type="text" class="form-control" name="river_id" value="<?php if(isset($rid)) echo $rid; ?>" readonly><br><br></div>
			</div>
			<table>
				<tr>
				<td><span style="100font-size:22">Enter the Rise of the Slope:</td>
				<td><input type="text" class="form-control" name="rise"></td>
				</tr>
				<tr>
				<td><span style="100font-size:22">Enter the Run of the Slope:</td>
				<td><input type="text" class="form-control" name="run"></td>
				</tr>
				<tr>
				<td><span style="100font-size:22">Enter the Diameter of the Pipe:</td>
				<td><input type="text" class="form-control" name="diameter"value="<?php if(isset($diameter)) echo $diameter; ?>"></td>
				</tr>
				<tr>
				<td><span style="100font-size:22">Enter the Height of Penstock from bed:</td>
				<td><input type="text" class="form-control" name="diameter" value="<?php if(isset($head)) echo $head; ?>"></td>
				</tr>
				<tr>
				<td><span style="100font-size:22">Enter Total Number of Gauge: </td>
				<td><input type="text" class="form-control" name="gauge" value="<?php if(isset($gauge)) echo $gauge; ?>"></td>
				</tr>
			</table>
			<p></p><p></p><p></p>
				<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-2"><br>
				<a href=#data><input type="submit" class="btn btn-success" name="static" value="Enter Data"></a>
				</div></div>
		</form>
		</div>
		<div class="col-sm-4">
			<h2 align="center">Latest News</h2>
				<marquee direction="up" scrolldelay="100"   onMouseover="this.stop();"  onmouseout="this.start();" height="300px;"width="350px">
					<div class="row"style="padding:1.3em">
						<div class="col-sm-12">
						<img src="images/demo/80x80.gif"alt="">
						</div>
						<div class="col-sm-12" style="align:justify">
						<strong><a href="#">  ANY FLOOD CONDITION RELATED NEWS.</a></strong>  THIS WILL GIVE THE LATEST NEWS ABOUT THE FLOOD CONDITION IF ANY
						</div>
					</div>
					<div class="row" style="padding:1.3em">
						<div class="col-sm-12">
							<img src="images/demo/81x81.gif" alt="" >
						</div>	
						<div class="col-sm-12">
							<strong><a href="#">ANY HEAVY RAINFALL RELATED NEWS</a></strong> THIS WILL GIVE THE LATEST NEWS ABOUT THE HEAVY RAINFALL IN A REGION IF ANY
						</div>
					</div>
					<div class="row" style="padding:1.3em">
						<div class="col-sm-12">
							<img src="images/demo/82x82.gif" alt="" >
						</div>
						<div class="col-sm-12">		
							<strong><a href="#">DISASTER MANAGEMENT NEWS</a></strong> THIS WILL GIVE LATEST NEWS ABOUT ANY OTHER DISASTER MANAGEMENT PROBLEM
						</div>
					</div>
				</marquee>
		</div>
	</div>
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