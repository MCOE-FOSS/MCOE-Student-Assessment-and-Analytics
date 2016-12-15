<?php
require('fpdf181/fpdf.php');
require "dbcontroller.php";
$db_handle = new DBController();
$result = $db_handle->runQuery("SELECT * FROM student");
$header = $db_handle->runQuery("SELECT `COLUMN_NAME` 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='techrunch' 
    AND `TABLE_NAME`='student'");

//require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);		
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(27,12,$column_heading,1);
}
foreach($result as $row) {
	$pdf->SetFont('Arial','',12);	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(27,12,$column,1);
}
//$pdf->Output();
$pdf->AddPage();




$result = $db_handle->runQuery("SELECT * FROM groups");
$header = $db_handle->runQuery("SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS` WHERE `TABLE_SCHEMA`='techrunch' AND `TABLE_NAME`='groups'");

//require('fpdf/fpdf.php');

$pdf->SetFont('Arial','B',12);		
foreach($header as $heading) {
	foreach($heading as $column_heading)
		$pdf->Cell(40,12,$column_heading,1);
}
foreach($result as $row) {
	$pdf->SetFont('Arial','',12);	
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(40,12,$column,1);
}
$pdf->Output();

?>
