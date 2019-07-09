<?php

require_once('../reportes/plantilla3.php');
require_once('../helpers/Conexion.php');
require_once('../helpers/Validator.php');
require_once('../models/pedidos.php');
require_once('../models/Usuarios.php');

/* Creamos el objeto pdf (con medidas en milímetros):  */
$pdf = new PDF('P', 'mm', 'Letter');
//Se establecen los margenes
$pdf->SetMargins(2, 2 , 2);
//Se establece el auto salto de pagina, el segundo parámetro el que establece la activación por defecto son 2 cm
$pdf->SetAutoPageBreak(true,20);  
//Agregamos la primera pagina al documento pdf  
$pdf->addPage();
$ventas = new Pedidos();
$usuario = new Usuarios();
$pdf->SetFont('Arial','B',10);
$data = $ventas->readVendidos();
$pdf->Ln();
// Seteamos la posición de la proxima celda en forma fija a 3.8 cm hacia la derecha de la pagina
$pdf->setX(30);      
//Se coloca el color del fondo de las celdas en formato rgb
$pdf->SetFillColor(148,155,255);
//Se coloca el color del texto en formato rgb
$pdf->SetTextColor(0,0,0);
$pdf->Cell(125,10, utf8_decode('Producto'),1,0,'C', true);
$pdf->Cell(25,10, utf8_decode('Cantidad'),1,0,'C', true);
$pdf->Ln();

 //Comienza a crear las filas de productos según la consulta mysql del modelo
foreach($data as $datos){
        $pdf->setX(30);
         // Cell(ancho, Alto, texto, borde, salto de linea, alineación de texto, color)
        //convertimos el texto a utf8
        $pdf->Cell(125,10, utf8_decode($datos['Nombre_producto']),1,0,'C');
        $pdf->Cell(25,10, utf8_decode($datos['Cantidad']),1,0,'C');
        //saldo de linea
        $pdf->Ln();
}


//Mostramos el documento pdf
$pdf->Output();


