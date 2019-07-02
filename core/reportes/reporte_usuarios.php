<?php 
require_once('plantilla.php');
require_once('../helpers/conexion.php');
require_once('../helpers/validator.php');
require_once('../models/usuarios.php');

    $pdf = new PDF();
    $pdf-> addPage();
    $usuario = new Usuarios();
   // $pdf->head('Reporte usuarios');
    $pdf->SetFont('Times','','12');
    $data = $usuario->reporteUsuarios();
    $pdf->Cell(50,10, utf8_decode('Usuario'),1,0,'C');
    $pdf->Cell(50,10, utf8_decode('Nombre'),1,0,'C');
    $pdf->Cell(50,10, utf8_decode('Apellido'),1,0,'C');
    $pdf->Cell(50,10, utf8_decode('Correo'),1,0,'C');
    $pdf->Ln();
    foreach($data as $datos){
        $pdf->Cell(15,10, utf8_decode($datos['Nombre_Usuario']),1,0,'c');
        $pdf->Cell(15,10, utf8_decode($datos['Nombre']),1,0,'c');
        $pdf->Cell(15,10, utf8_decode($datos['Apellido']),1,0,'c');
        $pdf->Cell(15,10, utf8_decode($datos['Correo']),1,0,'c');
        $pdf->Ln(); 
    }
    $pdf->Output();
?>