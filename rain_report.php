<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RainFall Report Generation</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<body>
<h1>Rainfall Report</h1>
<input type="submit" value="View Daily Report" id="dailyrain" />
<input type="submit" value="View Monthly Report" id="monthlyrain" />
<input type="submit" value="View Yearly Report" id="yearlyrain" />

<form action="dailyrain_report.php" method="post" id="daily_show">
Select Date: <input type="date" name="date"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Select Site ID:<input type="number" name="siteid">
<input type="submit" name="report" value="View Report">
</form>


<form action="monthlyrain_report.php" method="post" id="monthly_show">
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
<input type="submit" name="mm_report" value="View Report">
</form>

<form action="yearlyrain_report.php" method="post" id="yearly_show">
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
</select>
<input type="submit" name="yr_report" value="View Report">
</form>

<script>
$().ready = function() {
    $('#daily_show').hide();
	 $('#monthly_show').hide();
	 $('#yearly_show').hide();
    
    $("#dailyrain").click(function() {
        $('#daily_show').toggle();
		$('#monthly_show').hide();
		$('#yearly_show').hide();
    });
	$("#monthlyrain").click(function() {
        $('#monthly_show').toggle();
		$('#daily_show').hide();
		$('#yearly_show').hide();
    });
	$("#yearlyrain").click(function() {
        $('#yearly_show').toggle();
		$('#daily_show').hide();
		$('#monthly_show').hide();
    });

}();
    
</script>
</body>
</html>