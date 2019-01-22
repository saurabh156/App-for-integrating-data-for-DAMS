<!DOCTYPE html>
<html lang="en">
<head>
<style>
input[type=submit]
{
	background-color:#4CAF50;
	border:none;
	color:white;
	padding:16px 32px;
	margin:4px 2px;
	cursor:pointer;
}
</style>
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
   <!-----------------------------header------------------------------------------------------------------------------------------------------>
</div>

<!-----------------------------navbar------------------------------------------------------------------------------------------------------>
<div class="container">
<!-----------------------------imgslider------------------------------------------------------------------------------------------------------>
	<div class="row">
	<div>
	<div id="outerbox" class="col-sm-8" style="padding:2em" margin-left:"1em">
		<div id="sliderbox" height="20%">
		<img src="images/demo/1.jpg" width="10.7%" height="30%">
		<img src="images/demo/2.jpg" width="10.7%" height="30%" >
		<img src="images/demo/3.jpg" width="10.7%" height="30%">
		<img src="images/demo/4.jpg" width="10.7%" height="30%">
		<img src="images/demo/5.jpg" width="10.7%" height="30%">
		</div>
	</div>
	
	</div>
<!-----------------------------imgslider------------------------------------------------------------------------------------------------------>
	<div class="col-sm-1" >
	</div>	
	<div class="col-sm-4" style="padding:2em">
		<div class="well" style="border:.2em solid #192A56">
		
		<h2 align="center"style="font-family:cambria"><b><u>-:Members Login:-</u></b></h2><br><br>
		<form class="form-horizontal" action="log_process.php" method="post">
			<div class="form-group">
				<label class="control-label col-sm-4" for="email">Username:</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" placeholder="Enter Username" name="usn">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-4" for="pwd">Password:</label> 
				<div class="col-sm-8">
				<input name="psw" class="form-control" type="password" id="password" placeholder="Enter password.." /><br><br>
				</div>
			</div>
			<div class="form-group">        
					<label class="control-label col-sm-6" for="pwd" id="fpassword"><a href="#">Forgot Password?</label>
			</div>
			<div class="form-group">        
				<div class="col-sm-offset-0 col-sm-8">
					<div class="checkbox">
						<label><input type="checkbox" name="remember"> Remember me</label>
					</div>
				</div>
			</div>
			
			<div class="form-group">        
				<div class="col-sm-offset-4 col-sm-10">
					<input type="submit" class="btn btn-sm btn-success"name="login" value="LOGIN">
				</div>
				</div>
			</div>
		</form>
		</div>
	</div>
	</div>
	</div>
	<div class="container">
	<div class="row"></div>
	<div class="row">
		<div class="col-sm-6 text-justify"><button type="submit" class="btn btn-lg btn-warning"><a href="report_main.php">View Report</button></a><br><br>
		<font size="3">Discharge Data and Hydropower Analysis, Reporting and Alert System (DHARA) is a bespoke web-based software package to support the effective collection and management of rivers and streams . The software is designed for users at Central and State level, with user permission rights governed by their respective licenses. The access to software is governed through user accounts; and for creation of a new user account, the interested persons may contact appropriate licensee (i.e. any of the Central, State or Other Licensees). General Public can have access to an overview of DHARA Data in terms of National or State Level Inventory, or in terms of brief report of any individual river. Development of DHARA is taken up in phased manner.
		The access to software is governed through user accounts; and for creation of a new user account, the interested persons may contact appropriate licensee (i.e. any of the Central, State or Other Licensees). General Public can have access to an overview of DHARA Data in terms of National or State Level Inventory, or in terms of brief report of any individual river. Development of DHARA is taken up in phased manner
		</div>
		<div class="col-sm-2">
		</div>
		<div class="col-sm-4">
			<h2 align="center"><u>Latest News</u></h2>
				<marquee direction="up" scrolldelay="100"   onMouseover="this.stop();"  onmouseout="this.start();" height="300px;"width="350px">
					<div class="row"style="padding:1.3em">
						<div class="col-sm-12">
						<img src="images/demo/80x80.gif"alt="">
						</div>
						<div class="col-sm-12" style="align:justify">
						<strong><a href="#">  ANY FLOOD CONDITION RELATED NEWS.</a></strong> <br> THIS WILL GIVE THE LATEST NEWS ABOUT THE FLOOD CONDITION IF ANY
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
	<br><br>
	<div id="hpage_latest">
				<table padding=1em width="80%" height="55%" border=4px black>
				<tr border=0>
					<td border=0>
					<div class="mapouter"><div class="gmap_canvas"><iframe width="290" height="400" id="gmap_canvas" src=
					"https://maps.google.com/maps?q=26.20073,91.74683&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" 
					scrolling="no" marginheight="0" marginwidth="0"></iframe></div><a href="https://www.webdesign-muenchen-pb.de"></a>
					</div>
					</td>
					<td border=0>
					<div class="mapouter"><div class="gmap_canvas"><iframe width="260" height="400" id="gmap_canvas" src=
					"https://maps.google.com/maps?q=27.7999968,95.4666648&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" 
					scrolling="no" marginheight="0" marginwidth="0"></iframe></div><a href="https://www.webdesign-muenchen-pb.de"></a>
					</div>
					</td>
					<td border=0>
					<div class="mapouter"><div class="gmap_canvas"><iframe width="280" height="400" id="gmap_canvas" src=
					"https://maps.google.com/maps?q=27.26149,92.81843&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" 
					scrolling="no" marginheight="0" marginwidth="0"></iframe></div><a href="https://www.webdesign-muenchen-pb.de"></a>
					</div>
					</td>
				</tr>
				<tr border=0>
					<td border=0>
					<p align="center"><strong><a href="https://en.wikipedia.org/wiki/Brahmaputra_River">BRAHMAPUTRA RIVER</a></strong>
					<p align="center">The Brahmaputra (/ˌbrɑːməˈpuːtrə/ is one of the major rivers of Asia, a trans-boundary river which flows through China, India and Bangladesh. As such, it is known by various</p>
					<p class="readmore" align="center"><a href="https://en.wikipedia.org/wiki/Brahmaputra_River">Continue Reading &raquo;</a></p>
					</p>
					</td>
					<td border=0>
					<p align="center"><strong><a href="https://en.wikipedia.org/wiki/Lohit_River">LOHIT RIVER</a></STRONG>
					<p align="center">This will give inormation about the river 2 of ARUNACHAL PRADESH</p>
					<p class="readmore" align="center"><a href="https://en.wikipedia.org/wiki/Lohit_River">Continue Reading &raquo;</a></p>
					</p>
					</td>
					<td border=0>	
					<p align="center"><strong><a href="https://en.wikipedia.org/wiki/Lohit_River">KAMENG RIVER</a></strong>
					<p align="center">This will give inormation about the river 3 of ARUNACHAL PRADESH</p>
					<p class="readmore" align="center"><a href="https://en.wikipedia.org/wiki/Kameng_River">Continue Reading &raquo;</a></p>
					</p>
					</td>
				</tr>
				</table>
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
