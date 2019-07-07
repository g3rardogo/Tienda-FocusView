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
            $this->Image('../../resources/img/Logo.jpg', 10, 8, 33 );
			$this->SetFont('Arial','B',14);
			$this->Cell(50);
			$this->Cell(100,10, 'Reporte De Pedidos',1,0,'C', true);
			$this->Ln(10);
			$this->Cell(190,20,('Fecha: ' .date('d/m/Y')),0,1,'L');
			$this->Cell(100,10,('Hora: ' .date('H:i:s')),0,1,'L');
			$this->Cell(5);
			$this->Ln(10);

		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','B', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
			
		}		
	}
?>