<?php


//Incluímos a la clase PDF_MC_Table

require_once  APPROOT . '\views\fpdf184\PDF_MC_Table_ok.php';


//Instanciamos la clase para generar el documento pdf
$pdf = new PDF_MC_Table();

//Agregamos la primera página al documento pdf
$pdf->AddPage();

//Seteamos el inicio del margen superior en 25 pixeles 
$y_axis_initial = 25;

//Seteamos el tipo de letra y creamos el título de la página. No es un encabezado no se repetirá
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(100, 6,  SITENAME, 0, 1, 'C');
$pdf->Cell(100, 6, 'USUARIOS ', 0, 1, 'C');
$pdf->Ln(3);

//Creamos las celdas para los títulos de cada columna y le asignamos un fondo gris y el tipo de letra
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(40, 6, 'Nombre', 1, 0, 'C', 1);
$pdf->Cell(23, 6, utf8_decode('Telefono'), 1, 0, 'C', 1);
$pdf->Cell(40, 6, utf8_decode('Email'), 1, 0, 'C', 1);
$pdf->Cell(20, 6, utf8_decode('Usuario'), 1, 0, 'C', 1);
$pdf->Cell(40, 6, utf8_decode('Contraseña'), 1, 0, 'C', 1);
$pdf->Cell(25, 6, utf8_decode('Rol'), 1, 0, 'C', 1);

$pdf->Ln(10);

//Table with 20 rows and 4 columns
$pdf->SetWidths(array(40, 23, 40, 20, 40, 25));

/* require_once('app/listarPacientes.php'); */
//48
$contador = 0;
foreach ($data as $usuario) {
    if($contador==48):
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(100, 6,  SITENAME, 0, 1, 'C');
        $pdf->Cell(100, 6, 'USUARIOS ', 0, 1, 'C');
        $pdf->Ln(3);
        $pdf->SetFillColor(232, 232, 232);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(40, 6, 'Nombre', 1, 0, 'C', 1);
        $pdf->Cell(23, 6, utf8_decode('Telefono'), 1, 0, 'C', 1);
        $pdf->Cell(40, 6, utf8_decode('Email'), 1, 0, 'C', 1);
        $pdf->Cell(20, 6, utf8_decode('Usuario'), 1, 0, 'C', 1);
        $pdf->Cell(40, 6, utf8_decode('Contraseña'), 1, 0, 'C', 1);
        $pdf->Cell(25, 6, utf8_decode('Rol'), 1, 0, 'C', 1);
        $pdf->Ln(10);
        $pdf->SetWidths(array(40, 23, 40, 20, 40, 25));
        $contador=0;
    endif;
    #$nombre = $reg->nombre;
    $nombre = $usuario->nombre1Usuario.' '.$usuario->nombre2Usuario.' '.$usuario->apellido1Usuario.' '.$usuario->apellido2Usuario;
    $telefono = $usuario->telefonoUsuario;
    $email = $usuario->emailUsuario;
    $usuario = $usuario->usuarioUsuario;
    /* $password = $usuario->passwordUsuario;
    $rol = $usuario->nombreRol; */
    
    $pdf->SetFont('Arial', '', 10);
    $pdf->Row(array($nombre, $telefono, $email, $usuario));
    $contador += 1;
};

$pdf->footer();
//Mostramos el documento pdf
$pdf->Output('I');
