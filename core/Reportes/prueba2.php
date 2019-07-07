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
        $pdf->SetFillColor(150,25,0);
		$pdf->SetTextColor(0,0,0);
        $pdf->Cell(45,10, utf8_decode($datos['id_cliente']),1,0,'C',true);
        $pdf->Ln(10);        
        $pdf->setX(38);
        $pdf->Cell(25,10, utf8_decode('Nombre'),1,0,'C');
        $pdf->Cell(25,10, utf8_decode('Usuario'),1,0,'C');
        $pdf->Cell(15,10, utf8_decode('Pedidos'),1,0,'C');
        $id = $datos['id_cliente'];
        $pdf->Ln();
    }
    $pdf->setX(38);
    
        $pdf->Cell(25,10, utf8_decode($datos['Nombre_cliente']),1,0,'C');
        $pdf->Cell(25,10, utf8_decode($datos['Usuario_cliente']),1,0,'C');
        $pdf->Cell(15,10, utf8_decode($datos['Pedidos']),1,0,'C');
    $pdf->Ln();
}



$pdf->Output();

