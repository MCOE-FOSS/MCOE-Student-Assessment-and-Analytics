<?php
require 'connect.php';
session_start();
if(!empty($_POST))
{

if(isset($_POST['lead_name'],$_POST['lead_passwd']))
{
 $lead_name = trim($_POST['lead_name']);
 $lead_passwd = trim($_POST['lead_passwd']);
 $_SESSION['grp_name']=$lead_name;
$checkQuery = "select * from login_info where lead_name = '$lead_name' and lead_passwd = '$lead_passwd'";
$res = mysqli_query($db,$checkQuery) or exit(mysqli_error($db));
print_r($res);
$row = mysqli_num_rows($res);

if($row > 0)
{
	?>
		<script>
			
			window.location.href = 'update_member0.php';
		</script>
	<?php
}
else
{
		?>
		<script>
			alert('Please Sign-Up First :)');
			window.location.href = 'signup.php';
		</script>
		<?php
		

 
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
		<p style="font-size:130%;color:black;font-family:verdana;">Login</p>
		<input type="text" name="lead_name" placeholder="Enter Group Name">
		<input type="password" name="lead_passwd" placeholder="Enter Password"><br /> <br />
		<input type="submit" name="login" value="LOGIN" id="submit1" class="btn-login">
	
		
	</form>
	</div>
</body>
</html>
