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
$data = $productos->readProductos1();
// Cell(ancho, Alto, texto, borde, salto de linea, alineacion de texto)
$pdf->Ln();
$pdf->setX(60);
$pdf->Cell(100,5, utf8_decode('REPORTE DE PRODUCTOS POR CATEGORIA'), 0, 0, 'C');  
$pdf->Ln(10);
// Seteamos la posición de la proxima celda en forma fija a 3.8 cm hacia la derecha de la pagina
$pdf->setX(38);
$pdf->Ln();
$categoria = '';

//Comienza a crear las filas de productos según la consulta mysql del modelo
foreach($data as $datos){
    if(utf8_decode($datos['Nombre_categoria']) != $categoria){
        //Se coloca el color del fondo de las celdas en formato rgb
        $pdf->SetFillColor(148,155,255);
        //Se coloca el color del texto en formato rgb
        $pdf->SetTextColor(0,0,0);
        $pdf->Ln();
        $pdf->setX(30);
        // Cell(ancho, Alto, texto, borde, salto de linea, alineación de texto, color)
        //convertimos el texto a utf8
        $pdf->Cell(150,10, utf8_decode($datos['Nombre_categoria']),1,0,'C',true);
        $pdf->Ln();        
        $pdf->setX(30);
        $pdf->Cell(10,10, utf8_decode('#'),1,0,'C');
        $pdf->Cell(120,10, utf8_decode('Producto'),1,0,'C');
        $pdf->Cell(20,10, utf8_decode('Precio'),1,0,'C');
        $categoria = $datos['Nombre_categoria'];
        //saldo de linea
        $pdf->Ln();
    }
        
        $pdf->setX(30);
          // Cell(ancho, Alto, texto, borde, salto de linea, alineación de texto, color)
        //convertimos el texto a utf8
        $pdf->Cell(10,10, utf8_decode($datos['id_producto']),1,0,'C');
        $pdf->Cell(120,10, utf8_decode($datos['Nombre_producto']),1,0,'C');
        $pdf->Cell(20,10, utf8_decode($datos['precio_producto']),1,0,'C');
        $pdf->Ln();
}


$pdf->AliasNbPages();
$pdf->Output();


