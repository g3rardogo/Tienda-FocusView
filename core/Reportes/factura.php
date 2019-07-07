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
$pdf->Ln();
$subtotal = 0;
$total = 0;
    if ($pedidos->setCliente($_SESSION['idCliente'])){
        $idPedido = ($pedidos->readUltimoPedido());
        if ($pedidos->setId($idPedido['UltimoPedido'])){
            $data = $pedidos->readDetalleFactura();
            $pdf->SetFillColor(214,209,208);
            $pdf->SetTextColor(0,0,0);
            $pdf->setX(30);
            $pdf->Cell(50,5, utf8_decode('Cliente: '. $idPedido['Nombre_cliente']. ' '. $idPedido['Apellido_cliente']),0,0,'L');
            $pdf->Ln();
            $pdf->setX(30);
            $pdf->Cell(50,5, utf8_decode('Fecha del pedido: '. $idPedido['Fecha_pedido']),0,0,'L');
            $pdf->Ln(20);
            $pdf->setX(30);
            $pdf->Cell(55,10, utf8_decode('Producto'),1,0,'C', true);
            $pdf->Cell(45,10, utf8_decode('Precio Unitario'),1,0,'C', true);
            $pdf->Cell(25,10, utf8_decode('Cantidad'),1,0,'C', true);
            $pdf->Cell(25,10, utf8_decode('Subtotal'),1,0,'C', true);
            $pdf->Ln();

            foreach($data as $datos){
            $subtotal = ($datos['Cantidad'] * $datos['Precio_producto']);
            $pdf->setX(30);
            $pdf->Cell(55,10, utf8_decode($datos['Nombre_producto']),1,0,'C');
            $pdf->Cell(45,10, utf8_decode($datos['Precio_producto']),1,0,'C');
            $pdf->Cell(25,10, utf8_decode($datos['Cantidad']),1,0,'C');
            $pdf->Cell(25,10, utf8_decode($subtotal),1,0,'C');
            $total = $total + $subtotal;
            $pdf->Ln();
            }
            $pdf->setX(130);
            $pdf->Cell(25,10, utf8_decode('Total'),1,0,'C', true);
            $pdf->Cell(25,10, utf8_decode($total),1,0,'C');
        }
    }

$pdf->Output();
   



