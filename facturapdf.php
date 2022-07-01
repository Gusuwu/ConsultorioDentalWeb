<?php
require_once('vendor/autoload.php');
require_once('factura.php');
require_once('turnosdb.php');

$css= file_get_contents('style.css');



$mpdf = new \Mpdf\Mpdf([


]);

$plantilla=getPlantilla($turnos,$cliente);
$mpdf -> writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf -> writeHtml($plantilla, \Mpdf\HTMLParserMode::HTML_BODY);


$mpdf -> Output("factura.pdf","D");

?>
