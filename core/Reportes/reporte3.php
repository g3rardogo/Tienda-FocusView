<?php

require_once('../reportes/plantilla.php');
require_once('../helpers/Conexion.php');
require_once('../helpers/Validator.php');
require_once('../models/Productos.php');

/* Creamos el objeto pdf (con medidas en milímetros):  */
$pdf = new PDF('P', 'mm', 'Letter');
//Se establecen los margenes (izquierdo, superior, derecho)
$pdf->SetMargins(10, 10, 10);
//Se establece el auto salto de pagina, el segundo parámetro el que establece la activación por defecto son 2 cm
$pdf->SetAutoPageBreak(true,20);
//Agregamos la primera pagina al documento pdf  
$pdf->addPage();
$productos = new Productos();
$pdf->SetFont('Arial','B',10);
$data = $productos->Ganancias();
$pdf->Ln();
$pdf->setX(60);
$pdf->Cell(100,5, utf8_decode('REPORTE DE GANANCIAS'), 0, 0, 'C');  
$pdf->Ln(10);
// Seteamos la posición de la proxima celda en forma fija a 3.8 cm hacia la derecha de la pagina
$pdf->setX(38);
$pdf->Ln();
$producto = '';
        //Se coloca el color del fondo de las celdas en formato rgb
        $pdf->SetFillColor(148,155,255);
        //Se coloca el color del texto en formato rgb
        $pdf->SetTextColor(0,0,0);
        $pdf->Ln();
        $pdf->setX(30);
        $pdf->Ln();        
        $pdf->setX(30);
        // Cell(ancho, Alto, texto, borde, salto de linea, alineación de texto, color)
        //convertimos el texto a utf8
        $pdf->Cell(110,10, utf8_decode('Producto'),1,0,'C', true);
        $pdf->Cell(20,10, utf8_decode('Cantidad'),1,0,'C', true);
        $pdf->Cell(20,10, utf8_decode('Vendido'),1,0,'C', true);
        //saldo de linea
        $pdf->Ln();

        //Comienza a crear las filas de productos según la consulta mysql del modelo
foreach($data as $datos){
        $pdf->setX(30);
        // Cell(ancho, Alto, texto, borde, salto de linea, alineación de texto, color)
        //convertimos el texto a utf8
        $pdf->Cell(110,10, utf8_decode($datos['Nombre_producto']),1,0,'C');
        $pdf->Cell(20,10, utf8_decode($datos['Cantidad']),1,0,'C');
        $pdf->Cell(20,10, utf8_decode($datos['Ganancia']),1,0,'C');
        //salto de linea
        $pdf->Ln();
}

$pdf->AliasNbPages();
//Mostramos el documento pdf
$pdf->Output();


