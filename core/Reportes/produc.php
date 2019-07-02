<?php

require_once('reporte2.php');
require_once('../helpers/Conexion.php');
require_once('../helpers/Validator.php');
require_once('../models/Productos.php');


$pdf = new FPDF();
$pdf->addPage();
$productos = new Productos();
$pdf->SetFont('Times','',12);
$data = $productos->readProductos1();

// Cell(ancho, Alto, texto, borde, salto de linea, alineacion de texto)
$pdf->Ln();

foreach($data as $datos){
    $pdf->Cell(15,10, utf8_decode($datos['id_producto']),1,0,'C');
    $pdf->Cell(45,10, utf8_decode($datos['Nombre_producto']),1,0,'C');
    $pdf->Cell(20,10, utf8_decode($datos['Precio']),1,0,'C');
    $pdf->Ln();
}  

$pdf->Output();