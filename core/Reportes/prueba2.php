<?php

require_once('../reportes/plantilla1.php');
require_once('../helpers/Conexion.php');
require_once('../helpers/Validator.php');
require_once('../models/pedidos.php');

/* Creamos el objeto pdf (con medidas en milímetros):  */
$pdf = new PDF('P', 'mm', 'Letter');
$pdf->SetMargins(2, 2 , 2);
$pdf->SetAutoPageBreak(true,20);  
$pdf->addPage();
$Pedidos = new Pedidos();
$pdf->SetFont('Arial','B',10);
$data = $Pedidos->readNumber();
// Cell(ancho, Alto, texto, borde, salto de linea, alineación de texto)
$pdf->Ln();
$pdf->setX(38);

$pdf->Ln();
$id = '';

foreach($data as $datos){
    if(utf8_decode($datos['id_cliente']) != $id){
        $pdf->SetFillColor(148,155,255);
        $pdf->SetTextColor(0,0,0);
        $pdf->setX(30);
        $pdf->Cell(50,10, utf8_decode('CLIENTE'),1,0,'C', true);
        $pdf->Cell(50,10, utf8_decode('USUARIO'),1,0,'C', true);
        $pdf->Cell(50,10, utf8_decode('NÚMERO DE PEDIDOS'),1,0,'C', true);
        $id = $datos['id_cliente'];
        $pdf->Ln();
    }
    $pdf->setX(30);
    
        $pdf->Cell(50,10, utf8_decode($datos['Nombre_cliente']),1,0,'C');
        $pdf->Cell(50,10, utf8_decode($datos['Usuario_cliente']),1,0,'C');
        $pdf->Cell(50,10, utf8_decode($datos['Pedidos']),1,0,'C');
    $pdf->Ln();
}



$pdf->Output();


