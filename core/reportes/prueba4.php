<?php

require_once('../reportes/plantilla4.php');
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
$data = $productos->Ganancias();
// Cell(ancho, Alto, texto, borde, salto de linea, alineacion de texto)
$pdf->Ln();
$pdf->setX(38);

$pdf->Ln();
$producto = '';

        $pdf->SetFillColor(148,155,255);
        $pdf->SetTextColor(0,0,0);
        $pdf->Ln();
        $pdf->setX(30);
        $pdf->Ln();        
        $pdf->setX(30);
        $pdf->Cell(110,10, utf8_decode('Producto'),1,0,'C', true);
        $pdf->Cell(20,10, utf8_decode('Cantidad'),1,0,'C', true);
        $pdf->Cell(20,10, utf8_decode('Vendido'),1,0,'C', true);
        $pdf->Ln();
foreach($data as $datos){
        $pdf->setX(30);
        $pdf->Cell(110,10, utf8_decode($datos['Nombre_producto']),1,0,'C');
        $pdf->Cell(20,10, utf8_decode($datos['Cantidad']),1,0,'C');
        $pdf->Cell(20,10, utf8_decode($datos['Ganancia']),1,0,'C');
        $pdf->Ln();
}



$pdf->Output();


