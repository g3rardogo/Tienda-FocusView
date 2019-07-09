<?php

require_once('../reportes/plantilla3.php');
require_once('../helpers/Conexion.php');
require_once('../helpers/Validator.php');
require_once('../models/pedidos.php');
require_once('../models/usuarios.php');

/* Creamos el objeto pdf (con medidas en milímetros):  */
$pdf = new PDF('P', 'mm', 'Letter');
$pdf->SetMargins(2, 2 , 2);
$pdf->SetAutoPageBreak(true,20);  
$pdf->addPage();
$ventas = new Pedidos();
$usuario = new Usuarios();
$pdf->SetFont('Arial','B',10);
$data = $ventas->readVendidos();
$pdf->Ln();
$pdf->setX(30);      
$pdf->SetFillColor(148,155,255);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(125,10, utf8_decode('Producto'),1,0,'C', true);
$pdf->Cell(25,10, utf8_decode('Cantidad'),1,0,'C', true);
$pdf->Ln();


foreach($data as $datos){
        $pdf->setX(30);
        $pdf->Cell(125,10, utf8_decode($datos['Nombre_producto']),1,0,'C');
        $pdf->Cell(25,10, utf8_decode($datos['Cantidad']),1,0,'C');
        $pdf->Ln();
}



$pdf->Output();


