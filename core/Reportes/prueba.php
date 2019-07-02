<?php
	require 'fpdf181/fpdf.php';
	
	class PDF extends FPDF
	{
		function Header()
		{
			  // Colores de los bordes, fondo y texto
			$this->SetFillColor(150,25,0);  
			$this->SetDrawColor(90,124,152);
			$this->SetTextColor(0,0,0);
            $this->Image('../../resources/img/logo.jpg', 10, 8, 33 );
			$this->SetFont('Arial','B',15);
			$this->Cell(50);
			$this->Cell(100,10, 'Reporte De Productos',1,0,'C', true);
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
?>