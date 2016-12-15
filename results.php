
<!DOCTYPE html>
<html>
<head>
	<title>TECHrunch</title>
	<link type="text/css" rel="stylesheet" href="formstyle3.css" />
</head>
<body>
	<!div class="container" style="font-size:200%;color:black;font-family:verdana;">
<div id="Image" style="padding-bottom:50px;" align="center">
	<img src="techcrunch.png" style="width:400px;height:100px;border:0" />
</div>
	
<div id="Body">
<p style="font-size:200%;color:green;font-family:verdana;" align="center">Statistical Analysis</p>

<br />
<br />
 

 



<form>	

<?php

//session_start();
require 'connect.php';
//include the library
	include "libchart/libchart/classes/libchart.php";

	//new pie chart instance
	$chart = new PieChart( 600, 300 );

	//data set instance
	$dataSet = new XYDataSet();
	

	
	

		$query = "SELECT * FROM projects";
		$result=$db->query($query);
		
		
		
		$mysql_count_query = "SELECT * FROM projects where db_tech = 'mysql'";
		$result_mysql=$db->query($mysql_count_query);
		$mongo_count_query = "SELECT * FROM projects where db_tech = 'mongodb'";
		$result_mongo=$db->query($mongo_count_query);
		$cassandra_count_query = "SELECT * FROM projects where db_tech = 'cassandra'";
		$result_cass=$db->query($cassandra_count_query);
		
			$num_results = $result->num_rows;

	if( $num_results > 0){

	$row = $result->fetch_assoc();
		
	extract($row);
		$dataSet->addPoint(new Point("MySQL", $result_mysql->num_rows));
		$dataSet->addPoint(new Point("MongoDB", $result_mongo->num_rows));
		$dataSet->addPoint(new Point("Cassandra", $result_cass->num_rows));
	
	//finalize dataset
	$chart->setDataSet($dataSet);

	//set chart title
	$chart->setTitle("Back End");
	
	//render as an image and store under "generated" folder
	$chart->render("generated/3.png");

	//pull the generated chart where it was stored
	echo "<img alt='Pie chart'  src='generated/3.png' />";
		


}
		
		
		
		$db->close();
		
		
	






?>
&emsp;
&emsp;

<?php
	$chart2 = new PieChart( 600, 300 );

	//data set instance
	$dataSet3 = new XYDataSet();
	
	//actual data
	//get data from the database
	
	//include database connection
	require 'connect.php';

	$query1 = "SELECT * FROM projects";
		$result1=$db->query($query1);
		
		
		
		$html_count_query = "SELECT * FROM projects where frontend = 'html'";
		$result_html=$db->query($html_count_query);
		$swing_count_query = "SELECT * FROM projects where frontend = 'swing'";
		$result_swing=$db->query($swing_count_query);
		$css_count_query = "SELECT * FROM projects where frontend = 'htmlcss'";
		$result_css=$db->query($css_count_query);
		$javafx_count_query = "SELECT * FROM projects where frontend = 'javafx'";
		$result_javafx=$db->query($javafx_count_query);
		
			$num_results1 = $result1->num_rows;
	//$Num_results = $Result->num_rows;

	if( $num_results1 > 0){
	
	$Row = $result1->fetch_assoc();
		extract($Row);
		$dataSet3->addPoint(new Point("HTML", $result_html->num_rows));
		$dataSet3->addPoint(new Point("HTML+CSS", $result_css->num_rows));
		$dataSet3->addPoint(new Point("JavaFX", $result_javafx->num_rows));
		$dataSet3->addPoint(new Point("Swing", $result_swing->num_rows));
	
	//finalize dataset
	$chart2->setDataSet($dataSet3);

	//set chart title
	$chart2->setTitle("Frontend");
	
	//render as an image and store under "generated" folder
	$chart2->render("generated/5.png");

	//pull the generated chart where it was stored
	echo "<img alt='Pie chart'  src='generated/5.png' />";
	
	}
?>
<br />
<br />
<br />

<?php
	require 'connect.php';
	$chart1 = new VerticalBarChart();

	$dispQuery = "SELECT marks, COUNT(marks) from student GROUP BY marks ORDER BY marks;";
	//$r = mysqli_query($conn,$dispQuery);
	$result12 = $db->query($dispQuery);
	$dataSet1 = new XYDataSet();
	$skipCount = 1;
	//$row = $result->fetch_row()
	while($arr = $result12->fetch_row())
	{
		if ($arr[0] == 0) {
			continue;
		}
		else{
			$dataSet1->addPoint(new Point($arr[0],$arr[1]));
		}
	}
	$chart1->setDataSet($dataSet1);

	$chart1->setTitle("Average Marks");
	$chart1->render("generated/4.png");

	//pull the generated chart where it was stored
	echo "<img src='generated/4.png' />";

?>

<?php
	$chart2 = new PieChart( 600, 300 );

	//data set instance
	$dataSet3 = new XYDataSet();
	
	//actual data
	//get data from the database
	
	//include database connection
	require 'connect.php';

	$query12 = "SELECT * FROM projects";
		$result12=$db->query($query12);
		
		
		
		$jdbc_count_query = "SELECT * FROM projects where connection_tech = 'jdbc'";
		$result_jdbc=$db->query($jdbc_count_query);
		$php_count_query = "SELECT * FROM projects where connection_tech = 'php'";
		$result_php=$db->query($php_count_query);
		$mongoj_count_query = "SELECT * FROM projects where connection_tech = 'mongojava'";
		$result_mongoj=$db->query($mongoj_count_query);
		$cassj_count_query = "SELECT * FROM projects where connection_tech = 'cassjava'";
		$result_cassj=$db->query($cassj_count_query);
		
			$num_results12 = $result12->num_rows;
	//$Num_results = $Result->num_rows;

	if( $num_results12 > 0){
	
	$Row1 = $result12->fetch_assoc();
		extract($Row1);
		$dataSet3->addPoint(new Point("JDBC", $result_jdbc->num_rows));
		$dataSet3->addPoint(new Point("php", $result_php->num_rows));
		$dataSet3->addPoint(new Point("mongo-java", $result_mongoj->num_rows));
		$dataSet3->addPoint(new Point("cass-java", $result_cassj->num_rows));
	
	//finalize dataset
	$chart2->setDataSet($dataSet3);

	//set chart title
	$chart2->setTitle("Connection Technology");
	
	//render as an image and store under "generated" folder
	$chart2->render("generated/8.png");

	//pull the generated chart where it was stored
	echo "<img alt='Pie chart'  src='generated/8.png' />";
	
	}
?>
<br />
<br />
<br />
</div>
</form>


		<a href="admin_home.php#">
  <img src="home-button.png" alt="RESULTS" style="width:100px;height:100px;border:0" align="right" hspace="600">
		</a>

		
		<br>
		<br>
	
	
</body>
</html>
