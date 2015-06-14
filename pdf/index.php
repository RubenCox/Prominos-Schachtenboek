<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{

    // Arial bold 15
    $this->SetFont('Arial','B',35);
    // Move to the right
    //$this->Cell();
    // Title
    $this->Cell(190,20,'Schachtenboek',1,1,'C');
	$this->Image('Schachtenboek.png',25,12,20);
	$this->Image('Schachtenboek.png',165,12,20);
    // Line break
    $this->Ln(10);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(40,10,'Naam',1,0,'C');
$pdf->Cell(45,10,'Aanwezigheid',1,0,'C');
$pdf->Cell(35,10,'Cantussen',1,0,'C');
$pdf->Cell(40,10,'Opdrachten',1,0,'C');
$pdf->Cell(30,10,'Straffen',1,1,'C');
$pdf->SetFont('Arial','',11);

// Getting Data from database
require_once 'fpdf/medoo.min.php';
$database = new medoo();
										
	$datas = $database->select("Schachten", "*");

		foreach($datas as $data)
		{
			$pdf->Cell(40,10,''.$data['Voornaam'].' '.$data['Naam'].'',1,0,'C');
			$pdf->Cell(45,10,''.$data['Aanwezigheid'].'',1,0,'C');
			$pdf->Cell(35,10,'0',1,0,'C');
			$pdf->Cell(40,10,''.$data['Opdrachten'].'',1,0,'C');
			$pdf->Cell(30,10,''.$data['Straffen'].'',1,1,'C');
		}

	

$pdf->Output();
?>