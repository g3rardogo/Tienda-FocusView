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
$data = $productos->readProductos1();
// Cell(ancho, Alto, texto, borde, salto de linea, alineacion de texto)
$pdf->Ln();
$pdf->setX(38);

$pdf->Ln();
$categoria = '';

foreach($data as $datos){
    if(utf8_decode($datos['Nombre_categoria']) != $categoria){
        $pdf->SetFillColor(148,155,255);
        $pdf->SetTextColor(0,0,0);
        $pdf->Ln();
        $pdf->setX(30);
        $pdf->Cell(150,10, utf8_decode($datos['Nombre_categoria']),1,0,'C',true);
        $pdf->Ln();        
        $pdf->setX(30);
        $pdf->Cell(10,10, utf8_decode('#'),1,0,'C');
        $pdf->Cell(120,10, utf8_decode('Producto'),1,0,'C');
        $pdf->Cell(20,10, utf8_decode('Precio'),1,0,'C');
        $categoria = $datos['Nombre_categoria'];
        $pdf->Ln();
    }
        
        $pdf->setX(30);
        $pdf->Cell(10,10, utf8_decode($datos['id_producto']),1,0,'C');
        $pdf->Cell(120,10, utf8_decode($datos['Nombre_producto']),1,0,'C');
        $pdf->Cell(20,10, utf8_decode($datos['precio_producto']),1,0,'C');
        $pdf->Ln();
}



$pdf->Output();


