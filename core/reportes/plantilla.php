<?php
	require_once('../libraries/fpdf181/fpdf.php');
	
	class PDF extends FPDF
	{
		function Header()
		{
			//$this->Image('../../resources/img/dasboard/fondo_login.jpg', 5, 5, 30 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Reporte De Usuarios',0,0,'C');
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