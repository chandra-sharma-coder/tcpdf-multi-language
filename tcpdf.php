<?php
require('./vendor/tecnickcom/tcpdf/tcpdf.php');

//use tecnickcom\tcpdf;

$pdf  = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', false);

// $pdf = new TCPDF('P', 'mm', 'LETTER');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->setTitle('PDF');

$pdf->AddPage();

$pdf->SetFont('Helvetica', '', 24);
$pdf->Cell(190, 10, 'Unicode Test',0, 1);

//Korean
$pdf->SetFont('freeserif', '', 24);
$pdf->Cell(190, 12, 'Punjabi: ਮੈਂ ਘਰ ਜਾ ਰਿਹਾ ਹਾਂ',0, 1);

//Japanese
$pdf->SetFont('cid0jp', '', 24);
$pdf->Cell(190, 14, 'Japanese: 私とあなた',0, 1);

//Korean
$pdf->SetFont('cid0kr', '', 24);
$pdf->Cell(190, 16, 'Korean: 너와 나',0, 1);

//Chinese
$pdf->SetFont('cid0ct', '', 24);
$pdf->Cell(190, 18, 'Chinese: 我和你',0, 1);
$pdf->Ln();

//Hindi
$pdf->SetFont('freesans', '', 24);
$pdf->Cell(190, 18, 'Hindi Sans: मैं और तुम',0, 1);

$pdf->SetFont('freeserif', '', 24);
$pdf->Cell(190, 18, 'Hindi Sans: मैं और तुम',0, 1);

//Urdu
$pdf->SetFont('freeserif', '', 24);
$pdf->Cell(190, 18, 'Arabic: انا و انت',0, 1);


// $html = '<h1> ਅੰਗਰੇਜ਼ੀ ਤੋਂ ਹਿੰਦੀ </h1> <br />
//  <h2> अंग्रेज़ी से हिंदी </h2> <br />
//  <h3> ইংরেজি থেকে হিন্দি </h3>';

// $pdf->writeHTML($html);


$pdf->output('test.pdf', 'I');
?>

