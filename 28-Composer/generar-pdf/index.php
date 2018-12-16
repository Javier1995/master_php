<?php
require '../vendor/autoload.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the edito
 * 
 */
use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

ob_start();
include './pdf_generador.php';
$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->output("pdf_generador.pdf");

