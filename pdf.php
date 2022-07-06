<?php
require('pdf/fpdf.php');


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('1.jpg',10,8,25);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte del Personal',1,0,'C');
    // Salto de línea
    $this->Ln(20);

$this->Cell(10,10,'nombre', 1, 0, 'C', 0);
$this->Cell(10,10,'apellidop', 1, 0, 'C', 0);
$this->Cell(10,10,'apellidom', 1, 0, 'C', 0);
$this->Cell(10,10,'fecha_nacimiento', 1, 0, 'C', 0);
$this->Cell(10,10,'ci', 1, 0, 'C', 0);
$this->Cell(10,10,'celular', 1, 0, 'C', 0);
$this->Cell(10,10,'direccion', 1, 0, 'C', 0);
$this->Cell(10,10,'cargo', 1, 0, 'C', 0);



}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'modelo/conexion.php';
$consulta="SELECT * FROM personales";
$resultado=$mysqli->query($consulta);


// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
//for($i=1;$i<=1;$i++)
  //  $pdf->Cell(0,10,utf8_decode('Imprimiendo línea número ').$i,0,1); //se coloca utf8_decode para que no salga unicode las letras

  while($row=$resultado->fetch_assoc()){
    $pdf->Cell(90,10,$row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(10,10,$row['apellidop'], 1, 0, 'C', 0);
    $pdf->Cell(10,10,$row['apellidom'], 1, 0, 'C', 0);
    $pdf->Cell(10,10,$row['fecha_nacimiento'], 1, 0, 'C', 0);
    $pdf->Cell(10,10,$row['ci'], 1, 0, 'C', 0);
    $pdf->Cell(10,10,$row['celular'], 1, 0, 'C', 0);
    $pdf->Cell(10,10,$row['direccion'], 1, 0, 'C', 0);
    $pdf->Cell(10,10,$row['cargo'], 1, 1, 'C', 0);
  }

  $pdf->Output();
?>