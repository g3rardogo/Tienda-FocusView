<?php

require_once('plantilla_factura.php');
require_once('../helpers/Conexion.php');
require_once('../helpers/Validator.php');
require_once('../models/pedidos.php');

/* Creamos el objeto pdf (con medidas en milímetros):  */
session_start();
$pdf = new PDF('P', 'mm', 'Letter');
$pdf->SetMargins(2, 2 , 2);
$pdf->SetAutoPageBreak(true,20);  
$pdf->addPage();
$pedidos = new Pedidos();
$pdf->SetFont('Arial','B',10);
$data = $pedidos->readDetalle();
// Cell(ancho, Alto, texto, borde, salto de linea, alineacion de texto)
$pdf->Ln();
$pdf->setX(38);

if(isset($_SESSION['idCliente'])){
    if ($pedidos->setCliente($_SESSION['idCliente'])){
        $idPedido = $pedidos->readUltimoPedido();        
        if ($pedidos->setId($idPedido['UltimoPedido'])){
            
            $data = $pedidos->readDetalleFactura();
            $pdf->Cell(55,10, utf8_decode('Producto'),1,0,'C');
            $pdf->Cell(45,10, utf8_decode('Precio Unitario'),1,0,'C');
            $pdf->Cell(25,10, utf8_decode('Subtotal'),1,0,'C');
            $pdf->SetFillColor(150,25,0);
            $pdf->SetTextColor(0,0,0);    
            $pdf->setX(38);
            $pdf->Ln();
            $pdf->setX(38);
            $pdf->Cell(15,10, utf8_decode($datos['Nombre_producto']),1,0,'C');
            $pdf->Cell(45,10, utf8_decode($datos['Precio_producto']),1,0,'C');
            $pdf->Ln();
        }
    }

}

$pdf->Output();
   



