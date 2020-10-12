<?php
/* Database connection settings */
	$host = 'fdb29.awardspace.net';
	$user = '3519580_goijob';
	$pass = 'GOIJOB2020';
	$db = '3519580_goijob';
  $mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
  
require('../fpdf/fpdf.php');


class PDF extends FPDF
{
// Cabecera de página
  function Header()
  {
      // Logo
      // Arial bold 15
      $this->SetFont('Arial','B',12);
      // Movernos a la derecha
      $this->Cell(45);
      // Título
      $this->Cell(100,10,'Reporte de usuarios registrados',0,0,'C');
      // Salto de línea
      $this->Ln(20);


        $this->Cell(45,10,'Nombre',1,0,'C',0);
        $this->Cell(30,10,'Tel',1,0,'C',0);
        $this->Cell(45,10,'Correo',1,0,'C',0);
        $this->Cell(30,10,'Ciudad',1,0,'C',0);
        $this->Cell(40,10,utf8_decode('Ocupación'),1,1,'C',0);
  }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Page ').$this->PageNo().'/{nb}',0,0,'C');
    }
}

$consulta = "SELECT nombre, tel, correoel, ciudad, ocupacion FROM datospersonales";
$resultado = $mysqli->query($consulta);



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row = $resultado->fetch_assoc()){
  $pdf->Cell(45,10,$row['nombre'],1,0,'C',0);
  $pdf->Cell(30,10,$row['tel'],1,0,'C',0);
  $pdf->Cell(45,10,$row['correoel'],1,0,'C',0);
  $pdf->Cell(30,10,$row['ciudad'],1,0,'C',0);  
  $pdf->Cell(40,10,utf8_decode($row['ocupacion']),1,1,'C',0);
}



$pdf->Output();
?>