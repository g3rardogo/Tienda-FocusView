<?php
require('fpdf181/fpdf.php');

//Instaciamos la clase para genrear el documento pdf
$pdf=new FPDF();
 
//Agregamos la primera pagina al documento pdf
$pdf->AddPage();
 
//Seteamos el inicio del margen superior en 25 pixeles
 
$y_axis_initial = 25;
 
//Seteamos el tiupo de letra y creamos el titulo de la pagina. No es un encabezado no se repetira
$pdf->SetFont('Arial','B',12);
 
$pdf->Cell(40,6,'',0,0,'C');
$pdf->Cell(100,6,'LISTA DE PRODUCTOS',1,0,'C');
 
$pdf->Ln(10);
 
//Creamos las celdas para los titulo de cada columna y le asignamos un fondo gris y el tipo de letra
$pdf->SetFillColor(232,232,232);
 

 
$pdf->Ln(10);

