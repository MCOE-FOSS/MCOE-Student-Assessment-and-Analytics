<?php

session_start();
require 'connect.php';

if(!empty($_POST))
{
	if(isset($_POST['First_Name'],$_POST['Last_Name'],$_POST['Birthday_day'],$_POST['Birthday_Month'],$_POST['Birthday_Year'],$_POST['Year'],$_POST['Department'],$_POST['roll_number'],$_POST['group_name'],$_POST['project_name'],$_POST['db_tech'],$_POST['frontend'],$_POST['connection_tech']))
	{
		$First_Name = trim($_POST['First_Name']);
		$Last_Name = trim($_POST['Last_Name']);
		$Birthday_day  = trim($_POST['Birthday_day']);
		$Birthday_Month  = trim($_POST['Birthday_Month']);
		$Birthday_Year  = trim($_POST['Birthday_Year']);
		$Year = trim($_POST['Year']);
		$Department = trim($_POST['Department']);
		$roll_number = trim($_POST['roll_number']);
		$group_name = trim($_POST['group_name']);
		$project_name = trim($_POST['project_name']);
		$db_tech = trim($_POST['db_tech']);
		$frontend = trim($_POST['frontend']);
		$connection_tech = trim($_POST['connection_tech']);
	
		$_SESSION['group_name'] = $group_name;
		$_SESSION['project_name'] = $project_name;
		
		$g_id = substr(md5($group_name),0,6);
		$_SESSION['group_id'] = $g_id;
		
		$sql = "INSERT INTO student (roll_number, first_name, last_name, dob, year, Department,marks,group_name) VALUES ('$roll_number', '$First_Name', '$Last_Name', '$Birthday_Year-$Birthday_Month-$Birthday_day', '$Year', '$Department','','{$_SESSION['group_name']}')";

		$sql1 = "INSERT INTO groups (group_id, group_name, project_name, roll_number) VALUES ('{$_SESSION['group_id']}', '{$_SESSION['group_name']}', '{$_SESSION['project_name']}', '$roll_number')";

		$sql2 = "INSERT INTO projects (project_name, db_tech, frontend, connection_tech, submission_date, status, group_id) VALUES ('$project_name', '$db_tech', '$frontend', '$connection_tech', '', '', '{$_SESSION['group_id']}')";
		
		
		
		

		
		

		if (($db->query($sql) === TRUE) and ($db->query($sql1) === TRUE) and $db->query($sql2) === TRUE) 
		{
			
				?>
					<script>
						alert("SUCCESS");
						window.location.href = 'member1.php';
					</script>
				<?php
		} 

		
		else 
		{ 
			echo $db->error;	?>
					<script>
						alert("Error");
						window.location.href = 'member0.php';
					</script>
				<?php
			
			
		}

		
		
		$db->close();
		
		
	}

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>TECHrunch</title>
	<link type="text/css" rel="stylesheet" href="new.css" />
</head>
<body>
	<div class="container">
	<form action="" method="post">	
		<br>
		<p style="font-size:200%;color:black;font-family:verdana;">STUDENT REGISTRATION FORM</p>

		<p style="font-size:200%;color:black;font-family:verdana;">Group Leader</p>
 

 
		<!-- First Name -->
		<tr>
		<td><input type="text" name="First_Name" maxlength="30" placeholder="Enter First Name"/>
		</td>
		</tr>
 		<br>
		<!--- Last Name -->
		<tr>
		<td><input type="text" name="Last_Name" maxlength="30" placeholder="Enter Last Name"/>
		</td>
		</tr>
		<br> 
		<!--- Date Of Birth -->
		<tr>
		
		<td>DATE OF BIRTH<td><td><tr>
 
		<td>
		
		<select name="Birthday_day" id="Birthday_Day">
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

	<select id="Birthday_Month" name="Birthday_Month">
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
 
	<select name="Birthday_Year" id="Birthday_Year">
		 
	<option value="-1">Year:</option>
	<option value="2012">2012</option>
	<option value="2011">2011</option>
	<option value="2010">2010</option>
	<option value="2009">2009</option>
	<option value="2008">2008</option>
	<option value="2007">2007</option>
	<option value="2006">2006</option>
	<option value="2005">2005</option>
	<option value="2004">2004</option>
	<option value="2003">2003</option>
	<option value="2002">2002</option>
	<option value="2001">2001</option>	
	<option value="2000">2000</option>
	 
<option value="1999">1999</option>
<option value="1998">1998</option>
<option value="1997">1997</option>
<option value="1996">1996</option>
<option value="1995">1995</option>
<option value="1994">1994</option>
<option value="1993">1993</option>
<option value="1992">1992</option>
<option value="1991">1991</option>
<option value="1990">1990</option>
 
<option value="1989">1989</option>
<option value="1988">1988</option>
<option value="1987">1987</option>
<option value="1986">1986</option>
<option value="1985">1985</option>
<option value="1984">1984</option>
<option value="1983">1983</option>
<option value="1982">1982</option>
<option value="1981">1981</option>
<option value="1980">1980</option>
</select>
</td>
</tr>
 <br> 
<br><br>

<td>Academic Year<td><td><tr>
 
		<td>
		
				<select name="Year" id="Year">
					<option value="fe">FE</option>
					<option value="se">SE</option>
					<option value="te">TE</option>
					<option value="be">BE</option>
				</select> </td> <br><br><br>

<td>Department<td><td><tr>
 
		<td>
		
				<select name="Department" id="Department">
					<option value="comp">Computer</option>
					<option value="it">Information Technology</option>
					<option value="electrical">Electrical</option>
					<option value="electronics">Electronics</option>
					<option value="mechanical">Mechanical</option>
				</select></td> <br><br>
<!--- Roll No -->
 
<tr> 
<td><input type="text" name="roll_number" id="roll_number" maxlength="100"placeholder="Enter Roll Number"/>
<br>

<!--- Project Name -->
 
<tr> 
<td><input type="text" name="project_name" id="project_name" maxlength="100"placeholder="Enter Project Name"/>
<br>
<!--- db_tech -->
 
<tr> 
<td>
<td>Database Technology<td><td><tr>
 
		<td>
		
				<select required  name="db_tech" id="db_tech">
					<option value="mysql">MySQL</option>
					<option value="mongodb">MongoDB</option>
					<option value="cassandra">Cassandra</option>
				</select></td> <br><br>
<br>
<!--- frontend -->
 
<tr> 
<td>
<td>Frontend Technology<td><td><tr>
 
		<td>
		
				<select required  name="frontend" id="frontend">
					<option value="htmlcss">HTML/CSS</option>
					<option value="java">Java</option>
					<option value="html">HTML</option>
					<option value="swing">Swing</option>
					<option value="javafx">JavaFX</option>
				</select></td> <br><br>
<br>
<!--- connection_tech -->
 
<tr> 
<td>
<td>Connection Technology<td><td><tr>
 
		<td>
		
				<select required  name="connection_tech" id="connection_tech">
					<option value="php">pHp</option>
					<option value="jdbc">JDBC</option>
					<option value="mongojava">MongoDB-Java</option>
					<option value="cassjava">Cassandra-java</option>
					<option value="javafx">JavaFX</option>
				</select></td> <br><br>
<br>

<!--- Group Name -->
 
<tr> 
<td><input type="text" name="group_name" id="group_name" maxlength="100"placeholder="Enter Group Name"/>
		<br>
		<input type="submit" name="SAVE" value="SAVE" class="btn-login">
		
		<br>
		<!a href="member1.php#">
  <!img src="submit button.png" alt="Submit" style="width:120px;height:40px;border:0">
		<!/a>



		
		<br>
		<br>
	</form>
	</div>
</body>
</html>
