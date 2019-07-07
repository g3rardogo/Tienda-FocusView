<?php
	require 'fpdf181/fpdf.php';	
	
	
	class PDF extends FPDF
	{
		function Header()
		{
			  // Colores de los bordes, fondo y texto
			date_default_timezone_set('GMT');
			$this->SetFont('Arial','B',10);
			$this->Ln(10);
			$this->SetX(50);
			$this->Cell(100,5,'FOCUS VIEW', 0, 0, 'C');
			$this->Ln(4);
			$this->SetX(50);
			$this->Cell(100,5,'REPORTE DE VENTA', 0, 0, 'C');
			$this->Ln();
			$this->Image('../../resources/img/Logo.jpg', 28, 27, 33 );
			$this->Ln(7);
			$this->SetX(150);
			$this->Cell(50,5,('Fecha: ' .date('d/m/Y')),0,0,'L');
			$this->Ln();
			$this->SetX(150);
			$this->Cell(50,5,('Hora: ' .date('H:i:s')),0,0,'L');
			$this->Ln(10);

		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','B', 8);
			$this->Cell(0,10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C' );
			
		}		
	}
?>