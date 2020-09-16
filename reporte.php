<?php
require('conexion/cn.php');
require('fpdf181/fpdf.php');
//cabecera y footer
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
   // $this->Image('imagenes/prueba.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(60);
    // Title
    $this->Cell(70,10,'Reporte de peso',0,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
}
}

//conexion

$sql="Select * from datos";
$resultado=$con->query($sql);

$pdf = new PDF();
$pdf -> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(60 , 10,utf8_decode('Descripción'), 1, 0, 'C', 0);
    $pdf->Cell(40 , 10, utf8_decode('Peso(Kg)'), 1, 0, 'C', 0);
    $pdf->Cell(60 , 10, utf8_decode('Fecha'), 1, 1, 'C', 0);
 
 while($row = $resultado->fetch_assoc())
{ 
    if($row['cod_alimento']==1){
	$pdf->Cell(60 , 10, 'Carne', 1, 0, 'C', 0);
    $pdf->Cell(40 , 10, $row['peso'], 1, 0, 'C', 0);
     $pdf->Cell(60 , 10, $row['fecha'], 1, 1, 'C', 0);
    }
    else
    {
      $pdf->Cell(60 , 10, 'Pollo', 1, 0, 'C', 0);
    $pdf->Cell(40 , 10, $row['peso'], 1, 0, 'C', 0);
     $pdf->Cell(60 , 10, $row['fecha'], 1, 1, 'C', 0);  
    }

}

$pdf->Output();
?>