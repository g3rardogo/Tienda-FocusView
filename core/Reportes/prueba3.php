<?php

require_once('../reportes/plantilla3.php');
require_once('../helpers/Conexion.php');
require_once('../helpers/Validator.php');
require_once('../models/pedidos.php');

/* Creamos el objeto pdf (con medidas en milímetros):  */
$pdf = new PDF('P', 'mm', 'Letter');
$pdf->SetMargins(2, 2 , 2);
$pdf->SetAutoPageBreak(true,20);  
$pdf->addPage();
$ventas = new Pedidos();
$pdf->SetFont('Arial','B',10);
$data = $ventas->readVendidos();
// Cell(ancho, Alto, texto, borde, salto de linea, alineación de texto)
$pdf->Ln();
$pdf->setX(38);

$pdf->Ln();
$id = '';

foreach($data as $datos){
    if(utf8_decode($datos['id_producto']) != $id){
        $pdf->SetFillColor(150,25,0);
		$pdf->SetTextColor(0,0,0);
        $pdf->Cell(45,10, utf8_decode($datos['id_producto']),1,0,'C',true);
        $pdf->Ln(10);        
        $pdf->setX(38);
        $pdf->Cell(25,10, utf8_decode('Cantidad'),1,0,'C');
        $pdf->Cell(25,10, utf8_decode('Nombre'),1,0,'C');
        $id = $datos['id_producto'];
        $pdf->Ln();
    }
    $pdf->setX(38);
    
        $pdf->Cell(25,10, utf8_decode($datos['Cantidad']),1,0,'C');
        $pdf->Cell(25,10, utf8_decode($datos['Nombre_producto']),1,0,'C');
        
    $pdf->Ln();
}



$pdf->Output();


