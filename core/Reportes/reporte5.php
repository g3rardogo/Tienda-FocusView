<?php

require_once('../reportes/plantilla.php');
require_once('../helpers/Conexion.php');
require_once('../helpers/Validator.php');
require_once('../models/Productos.php');

/* Creamos el objeto pdf (con medidas en milímetros):  */
$pdf = new PDF('P', 'mm', 'Letter');
//Se establecen los margenes (izquierdo, superior, derecho)
$pdf->SetMargins(10, 10, 10);
//Se establece el auto salto de pagina, el segundo parámetro el que establece la activación por defecto son 2 cm
$pdf->SetAutoPageBreak(true,20);
//Agregamos la primera pagina al documento pdf  
$pdf->addPage();
$productos = new Productos();
$pdf->SetFont('Arial','B',10);
$pdf->Ln();
$pdf->setX(60);
$pdf->Cell(100,5, utf8_decode('REPORTE DE BITÁCORA'), 0, 0, 'C');  
$pdf->Ln(10);
// Seteamos la posición de la proxima celda en forma fija a 3.8 cm hacia la derecha de la pagina
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


