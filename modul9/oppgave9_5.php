<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use setasign\Fpdi\Fpdi;
require_once("fpdf/fpdf.php");
require_once("./FPDI/src/autoload.php");

$pdf = new Fpdi();

$pdf->AddPage();

$pdf->setSourceFile("./files/Innlevering 9_fakturamal.pdf");

$fs = $pdf->importPage(1);

$pdf->useTemplate($fs);

//funksjon for å gjøre neste del litt lettere

/*oppgaven beskriver kun at det er bildet som skal plaseres et spesielt sted,
 * derfor har jeg bare puttet den andre informasjonen inn der jeg tror det skal
 * i malen
  */
$pdf->setFont("Arial", "", 10);

$pdf->Image('./files/flower.jpg', 187, 3, 20);

$pdf->setY(40);
$pdf->cell(100, 5, "bruker: kristian", 0, 1, "L");
$pdf->cell(100, 5, "addresse: boblegata 20", 0, 1, "L");
$pdf->setY(88);
$pdf->cell(90, 5, "produkt: php-tekstbok", 0, 0, "L");
$pdf->cell(95, 5, "pris: 799kr", 0, 1, "R");
$pdf->setY(187.5);
$pdf->cell(120, 5, "totalsum: 799kr", 0, 1, "R");
$pdf->output("filer/fil.pdf", "I");
?>
