<?php
table($header) {
    //Cabecera
    foreach($header as $col) {
		$this->Cell(40,7,$col,1);
		$this->Ln();
		$this->Cell(40,5,"hola",1);
		$this->Cell(40,5,"hola2",1);
		$this->Cell(40,5,"hola3",1);
		$this->Cell(40,5,"hola4",1);
		$this->Ln();
		$this->Cell(40,5,"linea ",1);
		$this->Cell(40,5,"linea 2",1);
		$this->Cell(40,5,"linea 3",1);
		$this->Cell(40,5,"linea 4",1);
	}
    $this->Cell(40,7,$col,1);
    $this->Ln();
   
      
   }

   table($header) {
	foreach($header as $col)
	$this->Cell(40,7,$col,1);
	$this->Ln();
   }