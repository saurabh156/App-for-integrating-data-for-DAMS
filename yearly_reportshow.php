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
.rotation  { 
            /* background: pink;  need a color for filter */
             -moz-transform: rotate(90deg);
             -webkit-transform: rotate(90deg);
             -o-transform: rotate(90deg);
             -ms-transform: rotate(90deg);
             transform: rotate(270deg); }
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
<?php
	if(isset($_POST['yearly'])){
	$year=$_POST['year'];
	$siteid=$_POST['siteid'];	
	include('conn2.php');
	
	$query= "SELECT month(date) AS mm, monthName(date) AS month, Round(Min(height),2) AS minheight, Round(Max(height),2) AS maxheight, Round(Avg(height),2) AS avgheight, Round(Avg(capacity),2) AS avgcapacity, Round(min(capacity),2) AS mincapacity, Round(max(capacity)) as maxcapacity, Round(Avg(discharge),2) as avgdischarge, Round(min(discharge),2) as mindischarge, Round(max(discharge),2) as maxdischarge FROM dr_data WHERE site_id= '$siteid' AND year(date) = $year GROUP BY monthname(date) ORDER BY month(date)";
	
	$result = mysqli_query($conn2, $query);
	$count=0;
	
	if(mysqli_num_rows($result)!=0)
	{ ?>
	<div class="content">
	<center>
	
	<div class="register autowidth autoheight" id="page1" style="background-color:#87ceeb; padding-top:40px; padding-bottom:40px;">
        <div class="tophead" style="color:#000; height:35px">Yearly Report of Discharge Data</div>
		<div style="background-color:#87ceeb; width:750px; height:auto; padding-top:15px; padding-bottom:15px">
			<center>
		<table border="1" bordercolor="#000000" cellpadding="5px" cellspacing="0" width="700px">
	<caption><h3>Year:&nbsp;&nbsp;<?php echo $year?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Site_ID:&nbsp;&nbsp;<?php echo $siteid ?></h3><caption>
        <tr class="gtophead" style=" font-size:14px;">
	<th><center>Month</center></th>
	<th><center>Minimum Height(in mtrs)</center></th>
	<th><center>Maximum Height(in mtrs)</center></th>
	<th><center>Average Height(in mtrs)</center></th>
	<th><center>Average Live Capacity(in cusecs)</center></th>
	<th><center>Minimum Live Capacity(in cusecs)</center></th>
	<th><center>Maximum Live Capacity(in cusecs)</center></th>
	<th><center>Average Discharge(in cusecs)</center></th>
	<th><center>Minimum Discharge(in cusecs)</center></th>
	<th><center>Maximum Discharge(in cusecs)</center></th>
	</tr>
	<?php
	$month='';
	$minheight='';
	$maxheight='';
	$avgheight='';
	$mincapacity='';
	$maxcapacity='';
	$avgcapacity='';
	$avgdischarge='';
	$mindischarge='';
	$maxdischarge='';
	while($row = mysqli_fetch_assoc($result))
	{
		$count++;
		$month=$row['month'];
		$minheight=$row['minheight'];
		$maxheight=$row['maxheight'];
		$avgheight=$row['avgheight'];
		$mincapacity=$row['mincapacity'];
		$maxcapacity=$row['maxcapacity'];
		$avgcapacity=$row['avgcapacity'];
		$mindischarge=$row['mindischarge'];
		$maxdischarge=$row['maxdischarge'];
		$avgdischarge=$row['avgdischarge'];
?>
<tr style='height:30px; font-size:15px; font-family:Arial, Helvetica, sans-serif'>
<td><center><?php echo $month; ?></center></td>
<td><center><?php echo $minheight; ?></center></td>
<td><center><?php echo $maxheight; ?></center></td>
<td><center><?php echo $avgheight; ?></center></td>
<td><center><?php echo $avgcapacity; ?></center></td>
<td><center><?php echo $mincapacity; ?></center></td>
<td><center><?php echo $maxcapacity; ?></center></td>
<td><center><?php echo $avgdischarge; ?></center></td>
<td><center><?php echo $mindischarge; ?></center></td>
<td><center><?php echo $maxdischarge; ?></center></td>
</tr>
<?php
	}
	?>
</table>
</center>
 <?php
	}
	else
	{
	?>
	<div class="register autowidth autoheight" id="page1" style="background-color:#87ceeb; padding-top:40px; padding-bottom:40px;">
        <div style="background-color:#87ceeb; width:750px; height:auto; padding-top:15px; padding-bottom:15px">
<center>
	<div class="tophead" style="color:#000; height:35px">Yearly Report of Discharge Data</div>
	
	<table border="1" bordercolor="#000000" cellpadding="5px" cellspacing="0" width="700px">
        <tr class="gtophead" style=" font-size:14px;">
	<td><center>Month</center></td>
	<td><center>Minimum Height</center></td>
	<td><center>Maximum Height</center></td>
	<td><center>Average Height</center></td>
	<td><center>Average Capacity</center></td>
	<td><center>Minimum Capacity</center></td>
	<td><center>Maximum Capacity</center></td>
	<td><center>Average Discharge</center></td>
	<td><center>Minimum Discharge</center></td>
	<td><center>Maximum Discharge</center></td>
	</tr>
	<tr>
	<td colspan="6">No Records found</td>
	</tr>
</table></center>
<?php
	}
	}
	else 
		header('location:report.php');
   mysqli_close($conn2);
	?>	
	</div>
        </div><br>
 <button class="btn btn-lg btn-success"onClick="printcontent('page1')">PRINT REPORT</button>
        </center>
    </div>
</body>
<script>
function p()
	{
	  
	   window.print() ;
	}
function printcontent(e)
{
var restorepage = document.body.innerHTML;
var printcont = document.getElementById(e).innerHTML;
document.body.innerHTML = printcont;
window.print();
document.body.innerHTML = restorepage;
}
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

</html>
