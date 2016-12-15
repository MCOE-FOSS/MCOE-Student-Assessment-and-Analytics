<?php
//error_reporting(1);
require 'connect.php';

if(!empty($_POST))
{
	if(isset($_POST['lead_name'],$_POST['Passcode']))
	{
		$lead_name = trim($_POST['lead_name']);
		$passcode = trim($_POST['Passcode']);

		$sql = "INSERT INTO login_info (lead_name, lead_passwd) VALUES ('$lead_name','$passcode')";
		
		if ($db->query($sql) === TRUE) 
		{
			echo "New record created successfully";
		} 
		
		else 
		{
			echo "Error: " . $sql . "<br>" . $db->error;
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
	<form action="" method="post">
	<div class="container">
	
		<div class="from-input">
		<br><br>
		<p style="font-size:200%;color:black;font-family:verdana;">Group Information</p>
		<input type="text" name="lead_name"
		placeholder="Enter Leader Name"><br>		
	
		<!<input type="text" name="group_name"
		placeholder="Enter Group Name"><br>
		

		<!<input type="text" name="project_name"
		placeholder="Enter Project Name">
		<br>
		<p style="font-size:200%;color:black;font-family:verdana;">Year</p>
				<select>

					<option value="te">TE</option>
					<option value="be">BE</option>
				</select> <br>

		<p style="font-size:100%;color:black;font-family:verdana;">Department</p>
				<select>
					<option value="comp">Computer</option>
					<option value="it">Information Technology</option>

				</select> <br><br>

		<div class="from-input">
		
		<input type="password" name="Passcode"
		placeholder="Enter Passcode"><br>

		<input type="password" name="Passcode"
		placeholder="Re-Enter Passcode">

		</div>
		
		<input type="submit" name="SAVE" value="SAVE" class="btn-login">
		<br>
		<a href="member0.php#">
		<img src="submit button.png" alt="Submit" style="width:120px;height:40px;border:0">
		</a>

		<br>
	</form>
	</div>
</body>
</html>
