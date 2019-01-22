
<html>
<body>
<h1><center>Power generation Data</center></h1>
<form action="powerentry.php" method="post">
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
Enter Running Hours of turbine:</td><td><input type="text" name="running_hrs">
Select Site Id:<input type="text" name="siteid">
<input type="submit" name="power" value="Calculate the Power">
</form>
</body>
</html>