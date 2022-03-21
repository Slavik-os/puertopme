<?php
require('../fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetTextColor(128,128,140);
$pdf->SetFont('Arial','',8);
$pdf->Cell(55,5,'ndex : ',1,0);


$pdf->Output();
?>
