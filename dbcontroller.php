<?php

class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "techrunch";
	
	function __construct() {
		$conn = $this->connectDB();
		
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	
	
	function runQuery($query) {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		$result = $conn->query($query); 
		while($row=$result->fetch_assoc()) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysql_query($query);
		$rowcount = mysql_num_rows($result);
		return $rowcount;	
	}
}
?>
