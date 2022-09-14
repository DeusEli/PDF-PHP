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

$fpdf->AddPage('L', 'legal');

$fpdf->Image('images/img.jpg', 125, 10, 100, 100);

$fpdf->ln();
$fpdf->ln();
$fpdf->ln();
$fpdf->ln();
$fpdf->ln();
$fpdf->ln();
$fpdf->ln();
$fpdf->ln();
$fpdf->ln();
$fpdf->ln();
$fpdf->ln();
$fpdf->ln();

$fpdf->SetFont('Times', '', 11);

//No entendí correctamente la indicación de la práctica, en la que solicitaba que este texto fuera sin cortes, por lo que lo he hecho con el método MultiCell para que el texto se aprecie por completo y Cell que creo que es a lo que se refería con lo de "sin cortes".
$fpdf->Cell(0, 10, utf8_decode('¡Alimenten y propaguen el fuego de Cristo que tienen en ustedes! Lo dijo el Papa Francisco esta mañana al recibir en audiencia en el Vaticano a los jóvenes participantes en el XI Forum Internacional de Jóvenes, que tuvo lugar en Ciampino, a pocos kilómetros de Roma en la Casa “El Carmelo”. Tres días de encuentro organizados por el Dicasterio para los Laicos, la Familia y la Vida con el objetivo de promover la implementación del Sínodo 2018 centrado en el tema: Los jóvenes, la fe y el discernimiento vocacional.'), 0, 'J');

$fpdf->ln();
$fpdf->ln();

$fpdf->MultiCell(0, 10, utf8_decode('¡Alimenten y propaguen el fuego de Cristo que tienen en ustedes! Lo dijo el Papa Francisco esta mañana al recibir en audiencia en el Vaticano a los jóvenes participantes en el XI Forum Internacional de Jóvenes, que tuvo lugar en Ciampino, a pocos kilómetros de Roma en la Casa “El Carmelo”. Tres días de encuentro organizados por el Dicasterio para los Laicos, la Familia y la Vida con el objetivo de promover la implementación del Sínodo 2018 centrado en el tema: Los jóvenes, la fe y el discernimiento vocacional.'), 0, 'J');

$fpdf->Output('', 'DocPDFDWSL2022.pdf');
