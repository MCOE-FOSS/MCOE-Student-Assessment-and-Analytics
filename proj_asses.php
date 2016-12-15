<!DOCTYPE html>
<html>
<head>
	<title>TECHrunch</title>
	<link type="text/css" rel="stylesheet" href="formstyle2.css" />
</head>
<body>
	<div class="container" style="font-size:200%;color:black;font-family:verdana;">
<form action="proj.php" method="post">	
		<br>

<p style="font-size:150%;color:black;font-family:verdana;" >Group Details</p>
<td><input required type="text" name="group_name" id="group_name" maxlength="100"placeholder="Enter Group Name"/> </td></tr>
<br>
<td>  <p style="font-size:70%;color:black;font-family:verdana;"> Submission Date </p> 
		
		<select required name="subm_day" id="subm_Day">
		<option value="-1">Day:</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
 
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
 
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		<option value="21">21</option>
		 
		<option value="22">22</option>
		<option value="23">23</option>
		<option value="24">24</option>
		<option value="25">25</option>
		<option value="26">26</option>
		<option value="27">27</option>
		<option value="28">28</option>
		<option value="29">29</option>
		<option value="30">30</option>
 
		<option value="31">31</option>
		</select>

	<select required id="subm_Month" name="subm_Month">
	<option value="-1">Month:</option>
	<option value="01">Jan</option>
	<option value="02">Feb</option>
	<option value="03">Mar</option>
	<option value="04">Apr</option>
	<option value="05">May</option>
	<option value="06">Jun</option>
	<option value="07">Jul</option>
	<option value="08">Aug</option>
	<option value="09">Sep</option>
	<option value="10">Oct</option>
	<option value="11">Nov</option>
	<option value="12">Dec</option>
	</select>
 
	<select required name="subm_Year" id="subm_Year">
		 
	<option value="-1">Year:</option>
	<option value="2016">2016</option>
	<option value="2015">2015</option>
	<option value="2014">2014</option>

</select>
</td>
</tr> 
<br>
<br>
<td><p style="font-size:70%;color:black;font-family:verdana;"> Submission Status </p> <td><td><tr>
 
		<td>
		
				<select required name="status" id="status">
					<option value="y">Completed</option>
					<option value="n">Incomplete</option>
				
				</select></td> <br><br>
<br>

<input  type="submit" name="SEARCH" value="SEARCH" class="btn-login">



</form>
</div>

		<!a href="results.php#">
  <!img src="results-button.png" alt="RESULTS" style="width:100px;height:100px;border:0" align="right" hspace="600">
		<!/a>

		
		<br>
		<br>
	
	
</body>
</html>
