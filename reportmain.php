<html xmlns="http://www.w3.org/1999/xhtml">
<!DOCTYPE html>
<head>
	<title>Report Generation</title>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->.
	<link rel="stylesheet" href="layout/ad_styles/tst.css" type="text/css" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="tst.css" type="text/css" />
	<script type="text/javascript">
		$(document).ready(function(){
		$("btton").click(function(){
        $("#loginform").load("login.html #replace");
    });
});
</script>

</head>
<body style="background-color:lavender">
<div class="container-fluid">
<!-----------------------------header------------------------------------------------------------------------------------------------------>
  <div class="page-header" style="background-color:#000000">
	<div class="container" style="100">
	<p></p>
	<img src="images/demo/abc.gif" align="left">
	<img src="images/demo/275x180.gif" align="right">
	<h1 style="color:#FFFFFF"><center> GOVERNMENT OF ARUNACHAL PRADESH </center></h1>
	<h1 style="color:#5F27CD"><a href="index.html"><center><b>DHAARA</b></center></a></h1>
	<p><center><h2><small>DISCHARGE DATA & HYDROPOWER ADVANCED ANALYSIS REPORTING & ALERT SYSTEM</small></h2></center></p>
	</div>
   </div>
   <div class="col-sm-12" style="background-color:lavender">.</div>
<!-----------------------------header------------------------------------------------------------------------------------------------------>
</div>
<div class="container-fluid">
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
	
<!-----------------------------imgslider------------------------------------------------------------------------------------------------------>
	<div class="row">
		<div class="col-sm-8">
			<a href=#dailylink><input type="submit" class="form-control"value="View Daily Report" id="daily" style="background-color:#f8c291"/>
			<br><br></a>
			<a href=#monthlylink><input type="submit" class="form-control"value="View Monthly Report" id="monthly" style="background-color:#ff7979"/>
			<br><br></a>
			<a href=#yearlylink><input type="submit" class="form-control"value="View Yearly Report" id="yearly" style="background-color:#67e6dc"/>
			<br><br></a>
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
	</div>
	
	<a id=dailylink>
	<form action="daily_reportshow.php" method="post" id="daily_show">
		Select Date: <input type="date" name="date" value="<?php echo$date1; ?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Select Site ID:<input type="number" name="siteid">
		<input type="submit" name="report" value="View Report">
	</form>
	</a>

	<a id=monthlylink>
	<form action="monthly_reportshow.php" method="post" id="monthly_show">
		Select Month: <select class="gender" id="month" name="month" >
								    <option value="">Month</option>
						            <option value="January">January</option>
									<option value="February">February</option>
									<option value="March">March</option>
									<option value="April">April</option>
									<option value="May">May</option>
									<option value="June">June</option>
									<option value="July">July</option>
									<option value="August">August</option>
									<option value="September">September</option>
									<option value="October">October</option>
									<option value="November">November</option>
									<option value="December">December</option>
		</select>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Select Site ID: <input type="text" name="siteid" value="">
		<input type="submit" name="monthly" value="View Report">
	</form>
	</a>


	<a id=yearlylink>
	<form action="yearly_reportshow.php" method="post" id="yearly_show">
		Select Month: <select class="gender" name="year" >
								    <option value="">Year</option>
						            <option value="2015">2015</option>
									<option value="2016">2016</option>
									<option value="2017">2017</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
		</select>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Select Site ID: <select class="gender" name="siteid" >
								    <option value="">Site ID</option>
						            <option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
		</select><br><br>
		<input type="submit" name="yearly" class="btn btn-md btn-info" value="View Report">
	</form>
	</a>

	<script>
		$().ready = function() {
		$('#daily_show').hide();
		$('#monthly_show').hide();
		$('#yearly_show').hide();
    
			$("#daily").click(function() {
				$('#daily_show').toggle();
				$('#monthly_show').hide();
				$('#yearly_show').hide();
			});
			$("#monthly").click(function() {
				$('#monthly_show').toggle();
				$('#daily_show').hide();
				$('#yearly_show').hide();
			});
			$("#yearly").click(function() {
				$('#yearly_show').toggle();
				$('#daily_show').hide();
				$('#monthly_show').hide();
			});
		}();
    
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