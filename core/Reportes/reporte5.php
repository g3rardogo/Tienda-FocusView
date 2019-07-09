<?php

require_once('../reportes/plantilla.php');
require_once('../helpers/Conexion.php');
require_once('../helpers/Validator.php');
require_once('../models/Productos.php');

/* Creamos el objeto pdf (con medidas en milímetros):  */
$pdf = new PDF('P', 'mm', 'Letter');
$pdf->SetMargins(2, 2 , 2);
$pdf->SetAutoPageBreak(true,20);  
$pdf->addPage();
$productos = new Productos();
$pdf->SetFont('Arial','B',10);
$pdf->Ln();
$pdf->setX(60);
$pdf->Cell(100,5, utf8_decode('REPORTE DE BITÁCORA'), 0, 0, 'C');  
$pdf->Ln(10);
$pdf->setX(30);
$pdf->SetFillColor(148,155,255);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(50,10, utf8_decode('Producto'),1,0,'C', true);
$pdf->Cell(35,10, utf8_decode('Fecha y hora'),1,0,'C', true);
$pdf->Cell(65,10, utf8_decode('Acción'),1,0,'C', true);
$pdf->Ln();
$data = $productos->Bitacora();


foreach($data as $datos){
        $pdf->setX(30);
        $pdf->Cell(50,10, utf8_decode($datos['Producto']),1,0,'C');
        $pdf->Cell(35,10, utf8_decode($datos['Fecha']),1,0,'C');
        $pdf->Cell(65,10, utf8_decode($datos['Accion']),1,0,'C');
        $pdf->Ln();
}


$pdf->AliasNbPages();
$pdf->Output();


