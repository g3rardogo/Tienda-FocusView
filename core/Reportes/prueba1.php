<?php

require_once('prueba.php');
require_once('../helpers/Conexion.php');
require_once('../helpers/Validator.php');
require_once('../models/Productos.php');

ini_set('data.timezone', 'America/El_Salvador');
$pdf = new PDF();
$pdf->addPage();
$productos = new Productos();
$pdf->SetFont('Times','',12);
$data = $productos->readProductos1();
$pdf->Cell(15,10, utf8_decode('Fecha:'),0,0,'C');
$pdf->Cell(40,10,date('d/m/Y'),0,1,'L');
// Cell(ancho, Alto, texto, borde, salto de linea, alineacion de texto)
$pdf->Ln();
$pdf->setX(38);

$pdf->Ln();
$categoria = '';

foreach($data as $datos){
    if(utf8_decode($datos['Nombre_categoria']) != $categoria){
        $pdf->Cell(45,10, utf8_decode($datos['Nombre_categoria']),1,0,'C');
        $pdf->Ln(10);        
        $pdf->setX(38);
        $pdf->Cell(15,10, utf8_decode('id'),1,0,'C');
        $pdf->Cell(45,10, utf8_decode('Nombre'),1,0,'C');
        $pdf->Cell(25,10, utf8_decode('Precio'),1,0,'C');
        $pdf->Cell(20,10, utf8_decode('Cantidad'),1,0,'C');
        $categoria = $datos['Nombre_categoria'];
        $pdf->Ln();
    }
    $pdf->setX(38);
    
        $pdf->Cell(15,10, utf8_decode($datos['id_producto']),1,0,'C');
        $pdf->Cell(45,10, utf8_decode($datos['Nombre_producto']),1,0,'C');
        $pdf->Cell(25,10, utf8_decode($datos['Precio']),1,0,'C');
        $pdf->Cell(20,10, utf8_decode($datos['Cantidad']),1,0,'C');
    $pdf->Ln();
}



$pdf->Output();


