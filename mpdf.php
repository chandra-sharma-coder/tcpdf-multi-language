<?php
require_once __DIR__ . './vendor/autoload.php';

echo __DIR__ ;
// Create an instance of the class:
$mpdf = new \Mpdf\Mpdf();

// Write some HTML code:
$mpdf->WriteHTML('Hello World');

// Output a PDF file directly to the browser
$mpdf->Output();