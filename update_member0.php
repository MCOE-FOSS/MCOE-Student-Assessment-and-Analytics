
<!DOCTYPE html>
<html>
<head>
	<title>TECHrunch</title>
	<link type="text/css" rel="stylesheet" href="new.css" />
</head>
<body>
	<div class="container">
	<form action="" method="">	
		<br>
		<p style="font-size:200%;color:black;font-family:verdana;">Group Details</p>

<?php

	session_start();
	require 'connect.php';
	$group_name = $_SESSION['grp_name'];
	echo "<h1>'$group_name'</h1>";
	echo "<div id='table1'>";
		$sql="select * from student where group_name = '{$_SESSION['grp_name']}'";
		$result=$db->query($sql);
		$fields_num = mysqli_num_fields($result);
		echo "<h1>Table: Student Details</h1>";
		echo "<table  align='center' border='1'><tr>";
		// printing table headers
		for($i=0; $i<$fields_num; $i++)
		{
		    $field = mysqli_fetch_field($result);
		    echo "<td>{$field->name}</td>";
		}
		echo "</tr>\n";
		// printing table rows
		while($row = mysqli_fetch_row($result))
		{
		    echo "<tr>";

		    // $row is array... foreach( .. ) puts every element
		    // of $row to $cell variable
		    foreach($row as $cell)
			echo "<td>$cell</td>";

		    echo "</tr>\n";
		}
		mysqli_free_result($result);
		echo "<br /><br /><br />";
		echo "</table>";
	echo "</div>";
	
	echo "<div id='table2'>";
		$sql="select * from groups where group_name = '{$_SESSION['grp_name']}'";
		$result=$db->query($sql);
		$fields_num = mysqli_num_fields($result);
		echo "<h1>Table: Group Details</h1>";
		echo "<table  align='center' border='1'><tr>";
		// printing table headers
		for($i=0; $i<$fields_num; $i++)
		{
		    $field = mysqli_fetch_field($result);
		    echo "<td>{$field->name}</td>";
		}
		echo "</tr>\n";
		// printing table rows
		while($row = mysqli_fetch_row($result))
		{
		    echo "<tr>";

		    // $row is array... foreach( .. ) puts every element
		    // of $row to $cell variable
		    foreach($row as $cell)
			echo "<td>$cell</td>";

		    echo "</tr>\n";
		}
		mysqli_free_result($result);
		echo "<br /><br /><br />";
		echo "</table>";
	echo "</div>";
	
	
	echo "<div id='table3'>";
		
		$g_id = substr(md5($_SESSION['grp_name']),0,6);
		$sql="select * from projects where group_id = '$g_id'";
		$result=$db->query($sql);
		$fields_num = mysqli_num_fields($result);
		echo "<h1>Table: Project Details</h1>";
		echo "<table  align='center'border='1'><tr>";
		
		for($i=0; $i<$fields_num; $i++)
		{
		    $field = mysqli_fetch_field($result);
		    echo "<td>{$field->name}</td>";
		}
		echo "</tr>\n";
		
		while($row = mysqli_fetch_row($result))
		{
		    echo "<tr>";

		    foreach($row as $cell)
			echo "<td>$cell</td>";

		    echo "</tr>\n";
		}
		mysqli_free_result($result);
		echo "<br /><br /><br />\n\n\n\n";
		echo "</table>";
	echo "</div>";
	
	$db->close();
	echo "<br /><br /><br />";
?>


</form>

<form  method="post">
    <input type="submit" name="test" id="test" value="EDIT" class="btn-login" /><br/>
</form>

<?php

function testfun()
{
	require 'connect.php';
    $g_id = substr(md5($_SESSION['grp_name']),0,6);
	$sql11="delete from groups where group_name = '{$_SESSION['grp_name']}'";
	$result11=$db->query($sql11);
	$sql12="delete from student where group_name = '{$_SESSION['grp_name']}'";
	$result12=$db->query($sql12);
	$sql13="delete from projects where group_id = '$g_id'";
	$result13=$db->query($sql13);
	$sql14="DELETE FROM login_info WHERE lead_name = '{$_SESSION['grp_name']}'";
	$result14=$db->query($sql14);
		if (($result11 === TRUE) and ($result12 === TRUE) and ($result13 === TRUE) and ($result14 === TRUE)) 
		{
			
				?>
					<script>
						alert("SUCCESS");
						window.location.href = 'signup.php';
					</script>
				<?php
		} 
}

if(array_key_exists('test',$_POST)){
   testfun();
}

?>

<form action="home.php">
    <input type="submit" value="LOGOUT" class="btn-login" />
</form>
	</div>

 	
</body>
	
</html>
