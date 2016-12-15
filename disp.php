<!DOCTYPE html>
<html>
<head>
	<title>TECHrunch</title>
	<link type="text/css" rel="stylesheet" href="formstyle2.css" />
</head>
<body>
	<div class="container" style="font-size:200%;color:black;font-family:verdana;">
	
		<br>
		

		<p style="font-size:150%;color:black;font-family:verdana;" >Student Details</p>
 
<?php

session_start();
require 'connect.php';
$r1=0;
	
$roll_no=$_SESSION['roll_no'];
	if(isset($_POST['marks']))
	{
	
			$roll_no1 = $_SESSION['roll_no'];
			
			$marks = trim($_POST['marks']);
			
	
			if(($marks!=0))
		
			
		
			{
				$sql4 = "update student set marks = '$marks' where roll_number='$roll_no1'";
				$r1 = $db->query($sql4);

		
			}
			 
		}

if($r1 === TRUE)
{ 
if(!empty($_POST))
{
	if(isset($_POST['roll_no']))
	{
	
		$roll_no = trim($_POST['roll_no']);
	
		$_SESSION['roll_no']=$roll_no;
		
		//$g_id = md5($group_name);
		
		
		$sql = "select * from student where roll_number='$roll_no'";

		$sql1 = "select * from groups where roll_number='$roll_no'";

		
		
		
		
		if (($result1=$db->query($sql)) and ($result2=$db->query($sql1))) 
		{
			while ($row1 = $result1->fetch_assoc()) {
       		 		printf ("<br />Roll Number: %s<br /><br />Name: %s %s<br /><br />Date of Birth: %s<br /><br />Year: %s<br /><br />Department: %s<br /><br />", $row1["roll_number"], $row1["first_name"],$row1["last_name"],$row1["dob"],$row1["year"],$row1["Department"]);
				
    			}

    			/* free result set */
    			$result1->free();

			while ($row2 = $result2->fetch_assoc()) {
       		 		printf ("Group ID: %s<br /><br />Group Name: %s<br /><br />Project Name: %s<br /><br /> ", $row2["group_id"], $row2["group_name"],$row2["project_name"]);
    			}

    			/* free result set */
    			$result2->free();

	
		} 

		
		else 
		{
			echo "Error: " . $sql . "<br>" . $db->error;
			echo "Error: " . $sql1 . "<br>" . $db->error;
		}




		
		
		
		$db->close();
		
		
	}
	
		
	

}
}

?>
</div>

		<a href="admin_home.php#">
  <img src="home-button.png" alt="home" style="width:100px;height:100px;border:0" align="right" hspace="600">
		</a>

		
		<br>
		<br>
	
	
</body>
</html>




