<?php

	ini_set('date.timezone', 'America/El_Salvador');
	require 'fpdf181/fpdf.php';	
	session_start();
	
	//Creamos la nueva clase pdf que hereda de fpdf
	class PDF extends FPDF
	{
		function Header()
		{
            // seteamos el tipo de letra Arial Negrita 10 
			$this->SetFont('Arial','B',10);
			$this->Ln(10);
			$this->SetX(60);
			$this->Cell(100,5,'FOCUS VIEW', 0, 0, 'C');
			$this->Ln(4);
			$this->Image('../../resources/img/Logo.jpg', 28, 27, 33 );
            // Salto de línea salta 7 lineas
			$this->Ln(7);
			// Seteamos la posición de la proxima celda en forma fija a 15 cm hacia la derecha de la pagina
			$this->SetX(150);
			$this->Cell(50,5,('Fecha: ' .date('d/m/Y')),0,0,'L');
			$this->Ln();
			$this->SetX(150);
			$this->Cell(50,5,('Hora: ' .date('H:i:s')),0,0,'L');
			$this->Ln();
			// Seteamos la posición de la proxima celda en forma fija a 15 cm hacia la derecha de la pagina
			$this->SetX(150);
			$this->Cell(50,5,('Usuario: '.$_SESSION['nombreUsuario']),0,0,'L');
            // Salto de línea salta 10 lineas
			$this->Ln(10);
		}
		
		function Footer()
		{
			// Seteamos la posición de la proxima celda en forma fija a 1,5 cm del final de la pagina
			$this->SetY(-15);
            // seteamos el tipo de letra Arial Negrita 8 
			$this->SetFont('Arial','B', 8);
			 // Número de página, el numero de de pagina se establece mediante la funcion pageno
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		
		}
		
	}
?>