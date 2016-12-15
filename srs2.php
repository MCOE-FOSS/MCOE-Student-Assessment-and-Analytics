<?php
	error_reporting(0);
   if(isset($_FILES['srs'])){
      $errors= array();
      $file_name = $_FILES['srs']['name'];
      $file_size =$_FILES['srs']['size'];
      $file_tmp =$_FILES['srs']['tmp_name'];
      $file_type=$_FILES['srs']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['srs']['name'])));
      
      $expensions= array("docx","pdf","odt");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a docx or odt or pdf file.";
      }
	  $dir_name = "srss";
       chmod ( $dir_name , 0777 );
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"srss/".$file_name);
      ?>
		<script>
			alert('File Uploaded @ /opt/lampp/htdocs/techrunch/srss');
			window.location.href = 'home.php';
		</script>
	<?php
      }else{
         				?>
					<script>
						alert("extension not allowed, please choose a docx or odt or pdf file");
						window.location.href = 'srs2.php';
					</script>
				<?php
      }
   }
?>
<html>
   
      <head>
      
      <title>TECHrunch</title>
	<link type="text/css" rel="stylesheet" href="formstyle1.css" />

	<div class="container">
	</head>
	<body>
      <form action="" method="POST" enctype="multipart/form-data">
      <br>
		<p style="font-size:200%;color:black;font-family:verdana;"></p>

		<p style="font-size:200%;color:black;font-family:verdana;">Project Documents</p>
 
		<p style="font-size:200%;color:black;font-family:verdana;">Upload Your SRS</p>
         <input type="file" name="srs" />
         <input type="submit" value = "UPLOAD"/>
      </form>
      
   </body>
</html>
