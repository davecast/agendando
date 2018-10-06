<?php
    ob_start();
    session_start();
    include_once ('functions.php');
    
	require ('../fpdf/fpdf.php');

	error_reporting(E_ERROR | E_PARSE);
?>




<?php

class PDF extends FPDF
{

    // ****** Cabecera de página *****
    function Header()
    {
        // ****** imagen de fondo ******
        // $this->image('imagenes/nombre.ext','x','y','w','h', 'Tipo');

        // ****** imagen de fondo horizontal ******
        $this->image('../temp/icon.png','10','0','35','35', 'png');

        // ****** Formato de Fuente en Página ******
        // $this->SetFont('FUENTE','B-I',Tam);

        // ****** Arial bold 15 en Header ******
        $this->SetFont('Arial','B',20);

        // ****** Formato de Cell ******
        // $this->Cell(w,h,text,border,ln,align,fill,link);

        // ****** Movernos a la derecha en Header ******
        $this->Ln(10);
        $this->Cell(80);

        // ****** Título ******
        $this->Cell(40,20,'LISTADO DE RECORDATORIOS',0,1,'C');
        // ****** Fecha ******
        $this->SetFont('Arial','',10);
        $this->Cell(0,8,'Fecha : '.date("d-m-Y h:m:s"),0,0,'R');
        // ****** Salto de línea Header ******
        $this->Ln(10);
    }
    // ****** Pie de página ******
    function Footer()
    {
        // ****** Posición: a 1,5 cm del final ******
        $this->SetY(-15);
        // ****** Arial italic 8 ******
        $this->SetFont('Arial','I',8);
        // ****** Número de página ******
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }

}

// ****** Hoja Vertical ******
$pdf = new PDF('P','mm','A4');
// ****** Hoja Horizontal ******
// $pdf = new PDF('L','mm','A4');
// ****** Agregar Página ******
$pdf->AddPage();
// ****** Inv ******
$pdf->AliasNbPages();
// ****** Formato de Fuente en Página ******
$pdf->SetFont('Arial','',10);


// Buscar en la Base de Datos
$id_user = $_SESSION['id_user'];

$sql = "SELECT * FROM users WHERE id_user=1";

$result = selectDataBase($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$username = $row['username'];
    }

}
// ****** Formato de Cell ******
// $pdf->Cell(w,h,text,border,ln,align,fill,link);

$pdf->Cell(0,8,utf8_decode('Datos del Usuario'),0,1,'L',false);

$pdf->Cell(95,8,utf8_decode('Usuario : '.$username),1,0,'L',false);

// ****** Línea en Blanco ******
$pdf->Cell(0,8,utf8_decode(''),0,1,'L',false);

$pdf->Cell(0,8,utf8_decode('Datos del Reporte'),0,1,'L',false);

// ****** Formato de Fuente en Página ******
$pdf->SetFont('Arial','',9);

$pdf->Cell(7,8,utf8_decode('Nro'),1,0,'C',false);
$pdf->Cell(125,8,utf8_decode('Descripcion'),1,0,'L',false);
$pdf->Cell(30,8,utf8_decode('Hora'),1,0,'C',false);
$pdf->Cell(30,8,utf8_decode('Fecha'),1,1,'C',false);

$sql = "SELECT * FROM reminders WHERE id_user={$id_user}";
$results = selectDataBase($sql);

if (mysqli_num_rows($results) > 0 )
{
    $nro = 0;
    while (($fila=mysqli_fetch_array($results)))
    {
        $description = $fila['description'];
        $date = $fila['fecha'];
        $time = $fila['time'];

        $nro++;
        $pdf->Cell(7,8,utf8_decode($nro),1,0,'L',false);
        $pdf->Cell(125,8,utf8_decode($description),1,0,'L',false);
        $pdf->Cell(30,8,utf8_decode($time),1,0,'C',false);
        $pdf->Cell(30,8,utf8_decode($date),1,1,'C',false);

			// $this->Cell(w,h,text,border,ln,align,fill,link);
    }

}

// ****** Guardar como ******
    $pdf->Output('reporte_'.$id_user.'_'.date("d-m-Y").'.pdf','I','_blank');

// Vaciar (enviar) el búfer de salida
ob_end_flush();

?>