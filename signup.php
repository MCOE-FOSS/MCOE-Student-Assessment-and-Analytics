<?php
require 'connect.php';
if(!empty($_POST))
{

if(isset($_POST['group_name'],$_POST['Passcode']))
{
 $group_name = trim($_POST['group_name']);
 $passcode = trim($_POST['Passcode']);

$checkQuery = "select * from login_info where lead_name = '$group_name'";
$res = mysqli_query($db,$checkQuery) or exit(mysqli_error($db));
//print_r($res);
$row = mysqli_num_rows($res);

if($row > 0)
{
	?>
		<script>
			alert('User name or password taken');
			window.location.href = 'signup.php';
		</script>
	<?php
}
else
{
	

	$sql = "INSERT INTO login_info (lead_name, lead_passwd) VALUES ('$group_name','$passcode')";
		
	$db->query($sql);
	?>
		<script>
			alert('Sign-Up Success :)');
			window.location.href = 'member0.php';
		</script>
	<?php
	
	//header('Location: member0.php');  
}
}
else{echo "error";}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>TECHrunch</title>
	<link type="text/css" rel="stylesheet" href="formstyle1.css" />
</head>
<body>

</body>
<div class="container">
	<form action="" method="POST">
		
		<img src="logo.png" />
		<p style="font-size:130%;color:black;font-family:verdana;">Group Signup</p>
		<input type="text" name="group_name" placeholder="Enter Group Name">
		<input type="password" name="Passcode" placeholder="Enter Passcode"><br /> <br />
		<input type="submit" name="submit" value="SIGN UP" class="btn-login">

	</form>
	</div>
</body>
</html>
