
 
<?php

session_start();
require 'connect.php';

	

	if(isset($_POST['group_name'],$_POST['subm_day'],$_POST['subm_Month'],$_POST['subm_Year'],$_POST['status']))
		{
	
			
			$group_name = trim($_POST['group_name']);
			$subm_day = trim($_POST['subm_day']);
			$subm_month = trim($_POST['subm_Month']);
			$subm_year = trim($_POST['subm_Year']);
			$status = trim($_POST['status']);
	
			
		
			
		
				

				$g_id = substr(md5($group_name),0,6);
				
				$sql5 = "UPDATE projects SET status='$status',submission_date='$subm_year-$subm_month-$subm_day' WHERE group_id = '$g_id'";
				$r1 = $db->query($sql5);

		if ($r1 === TRUE) 
		{
			
				?>
					<script>
						alert("SUCCESS");
						window.location.href = 'admin_home.php';
					</script>
				<?php
		} 
		else echo "Error: " . $sql5 . "<br>" . $db->error;	
		}

?>
