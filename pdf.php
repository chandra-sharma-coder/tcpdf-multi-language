<?php
$filename = "newpdffile";

// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;
use Dompdf\Options;

//font directory
$fontDirectory = '/font';

$options = new Options();
$options->setChroot($fontDirectory);

// instantiate and use the dompdf class
$dompdf = new Dompdf($options);

//Initiate get Font Metrice
$dompdf->getFontMetrics()->registerFont(
  ['family'=> 'Arya, Regular', 
  'style' => 'normal', 
  'weight' => 'normal'],
  $fontDirectory.'/Arya-Regular.ttf'
);


$html = '
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <style>
 *{font-family: DejaVu Sans; }

 @font-face{
  src: url(font/Arya-Regular.ttf) format("truetype");
  font-family: "Saab";
}

.paragraph{
  font-family: "Saab";
  font-size: 50px;
  line-height: 62px;
}

table {
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>

<body>
<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td style="font-family: Arya Regular, AnmolLipi, Saab;">ਗੂਗਲ</td>
    <td style="font-family: AnmolLipi, Saab;">ਟ੍ਰਾਂਸਲੇਟ</td>
    <td>ਇੱਕ</td>
  </tr>
  <tr>
    <td>انگریزی سے ہندی</td>
    <td>انگریزی سے ہندی</td>
    <td>Mexico</td>
  </tr>
  <tr>
  <td>انگریزی سے ہندی</td>
  <td>انگریزی سے ہندی</td>
  <td>von Englisch nach Hindi</td>
</tr>
  
  <tr>
    <td style="font-family: Arya Regular;">अंग्रेज़ी से हिंदी</td>
    <td>Αγγλικά σε Χίντι</td>
    <td>de langlais vers lhindi</td>
  </tr>
</table>
</body>
</html>';
// $html = preg_replace( '/[^[:print:]]/', '', $html);

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream($filename);

// $document->loadHtml($html);

//set page size and orientation

// $document->setPaper('A4', 'landscape');

//Render the HTML as PDF
// 
// $document->render();

//Get output of generated pdf in Browser

// $document->stream("", array("Attachment" => false));
