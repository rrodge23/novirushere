<?php
require('WriteHTML.php');

$html = '
	<div style="background-color:blue;">asdfasdf</div>
';

$pdf=new PDF_HTML();
$pdf->AddPage();
$pdf->SetFont('Arial');
$stylesheet = file_get_contents('fpdf.css');
$pdf->WriteHTML($html);
$pdf->Output('I');

?>