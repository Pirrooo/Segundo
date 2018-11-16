<?php

//ob_start();
require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

ob_start();
require_once 'Pruebas.php';
$html = ob_get_clean();
//echo $html;
$html2Pdf = new Html2Pdf('p', 'A4', 'es', 'true', 'UTF-8');
//$html2Pdf = new Html2Pdf('p', 'A4', 'es');
//$html2Pdf->setTestTdInOnePage(false);
$html2Pdf->writeHTML($html);
$html2Pdf->output('IsmaelCV.pdf');
?>
