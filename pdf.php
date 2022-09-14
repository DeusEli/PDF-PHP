<?php
include('FPDF/fpdf.php');

class PDF extends FPDF
{
	function Header()
	{
		$this->SetFont('Arial', 'B', 15);
		$this->SetX(15);
		$this->Image('./images/logo.jpg', 265, 5, 25, 25);
		$this->Cell(0, 10, utf8_decode('Elí Adonay Valencia Machado'), 0, 1);
	}

	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial', 'I', 8);
		$this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
	}
}

$fpdf = new PDF();
$fpdf->AliasNbPages();

// Add a new page
// Portrait (P) or Landscape (L)
// Letter (A4) or Legal (A5) or A3 or A5 or A6 or B4 or B5 or Folio or Executive or Custom size (in mm)
$fpdf->AddPage('P', 'A3');

$fpdf->SetFont('Helvetica', 'B', 20);

$fpdf->SetTitle(utf8_decode('2a Práctica Evaluada'));

//$fpdf->Cell(0, 10, 'Hello World!', 0, 1, 'C');

// $fpdf->MultiCell(0, 10, utf8_decode('Ola Queso'), 0, 'C');

$fpdf->ln();
$fpdf->ln();
$fpdf->ln();

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

$fpdf->Image('images/img.jpg', 150, 35, 50, 50);

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

$fpdf->ln();

$fpdf->SetFont('Helvetica', 'B', 16);

$fpdf->Cell(100, 10, 'Autor', 1, 0, 'C', 0);
$fpdf->Cell(100, 10, 'Libro', 1, 0, 'C', 0);
$fpdf->Cell(100, 10, utf8_decode('Año'), 1, 0, 'C', 0);
$fpdf->ln();

$fpdf->SetFont('Helvetica', '', 12);

$fpdf->Cell(100, 10, 'Miguel de Cervantes', 1, 0, 'C', 0);
$fpdf->Cell(100, 10, 'Quijote de la Mancha', 1, 0, 'C', 0);
$fpdf->Cell(100, 10, '1605', 1, 0, 'C', 0);
$fpdf->ln();
$fpdf->Cell(100, 10, 'Insoportable levedad del ser', 1, 0, 'C', 0);
$fpdf->Cell(100, 10, 'Milan Kundera', 1, 0, 'C', 0);
$fpdf->Cell(100, 10, '1984', 1, 0, 'C', 0);
$fpdf->ln();
$fpdf->Cell(100, 10, 'Salvifici Doloris', 1, 0, 'C', 0);
$fpdf->Cell(100, 10, 'Juan Pablo II', 1, 0, 'C', 0);
$fpdf->Cell(100, 10, '1984', 1, 0, 'C', 0);

$fpdf->Output('', 'DocPDFDWSL2022.pdf');
