
<!DOCTYPE html>
<html>
<head>
	<title>TECHrunch</title>
	<link type="text/css" rel="stylesheet" href="formstyle2.css" />
</head>
<body>
	<div class="container" style="font-size:200%;color:black;font-family:verdana;">
<form action="" method="post">	
		<br>
		

		<p style="font-size:150%;color:black;font-family:verdana;">Student Details</p>
 

 

<!--- Group Name -->
 
<tr> 
<td><input required type="text" name="roll_no" id="roll_no" maxlength="100"placeholder="Enter Roll Number"/> </tr></td>
<tr> 
<td><input type="text" name="marks" id="marks" maxlength="100"placeholder="Enter Marks"/> </td></tr>
<input  type="submit" name="SEARCH" value="SEARCH" class="btn-login">

<?php

session_start();
require 'connect.php';

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
       		 		printf ("<br />Roll Number: %s<br /><br /><br />Name: %s %s<br /><br /><br />Date of Birth: %s<br /><br /><br />Year: %s<br /><br /><br />Department: %s<br />Marks: %s<br />", $row1["roll_number"], $row1["first_name"],$row1["last_name"],$row1["dob"],$row1["year"],$row1["Department"],$row1["marks"]);
				
    			}

    			/* free result set */
    			$result1->free();

			while ($row2 = $result2->fetch_assoc()) {
       		 		printf ("<br />Group ID: %s<br /><br /><br />Group Name: %s<br /><br /><br />Project Name: %s<br /><br /><br /> ", $row2["group_id"], $row2["group_name"],$row2["project_name"]);
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

require 'connect.php';
	//session_start();

	if(isset($_POST['marks']))
		{
	
			$roll_no1 = $_SESSION['roll_no'];
			
			$marks = trim($_POST['marks']);
	
			if($marks!=0)
		
			//$g_id = md5($group_name);
		
		{
			$sql4 = "update student set marks = '$marks' where roll_number='$roll_no1'";
			$db->query($sql4);
		}
			//header('Location: display.php');  
		}

//header('Location: display.php');  
?>






</form>
</div>
<!form action="" method ="post">
		<!br>
		<!a href="genpdf.php#">
  <!img src="pdf-button.png" alt="PDF" style="width:100px;height:100px;border:0" align="left" hspace="599">
		<!/a>
<!/form>
		<a href="results.php#">
  <img src="results-button.png" alt="RESULTS" style="width:100px;height:100px;border:0" align="right" hspace="600">
		</a>

		
		<br>
		<br>
	
	
</body>
</html>
