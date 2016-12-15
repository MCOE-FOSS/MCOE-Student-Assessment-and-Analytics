<?php 

require 'connect.php';
if(!empty($_POST))
{

if(isset($_POST['loginName'],$_POST['Password']))
	{	
	 	$user = trim($_POST['loginName']);
		$pwd = trim($_POST['Password']);
		$checkQuery = "select * from admin_login where admin_name = '$user' and admin_passwd = '$pwd'";
		$res = mysqli_query($db,$checkQuery) or exit(mysqli_error($db));
		$row = mysqli_num_rows($res);

		if($row == 0)
		{
			?>
			<script>
				alert('Invalid Username or Password');
				window.location.href = 'home.php';
			</script>
			<?php
		}
		else
		{
			
			?>
			<script>
				window.location.href = 'admin_home.php';
			</script>
			<?php
		}
	}
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
				<p style="font-size:120%;color:black;font-family:verdana;">Admin Login</p>
	
		
		<input type="text" name="loginName" placeholder="Admin">
		<input type="password" name="Password" placeholder="Pin"><br /><br />
		<input type="submit" name="submit" value="Admin LOGIN" class="btn-login">

	</form>
	</div>


</body>
</html>
