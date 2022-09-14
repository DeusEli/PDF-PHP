<?php
include('FPDF/fpdf.php');

$fpdf = new FPDF();

// Add a new page
// Portrait (P) or Landscape (L)
// Letter (A4) or Legal (A5) or A3 or A5 or A6 or B4 or B5 or Folio or Executive or Custom size (in mm)
$fpdf->AddPage('P', 'A3');

$fpdf->SetFont('Helvetica', 'B', 20);

$fpdf->SetTitle(utf8_decode('2a Práctica Evaluada'));

//$fpdf->Cell(0, 10, 'Hello World!', 0, 1, 'C');

$fpdf->MultiCell(0, 10, utf8_decode('Ola Queso'), 0, 'C');

$fpdf->SetFont('Arial', 'I', 12);

$fpdf->MultiCell(0, 10, utf8_decode('Con diez cañones por banda,
viento en popa a toda vela,
no corta el mar, sino vuela
un velero bergantín;

bajel pirata que llaman,
por su bravura, el Temido,
en todo mar conocido
del uno al otro confín.'), 0);

//$fpdf->AddPage()

$fpdf->Output('', 'DocPDFDWSL2022.pdf');
