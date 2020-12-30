<?php
//============================================================+
// File name   : example_005.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 005 for TCPDF class
//               Multicell
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Multicell
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// $pdf = new TPdf();
// create new PDF document
$pdf = new TPdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 10);

// add a page
// $pdf->AddPage();
$pdf->AddPage('P', 'A4');

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)


$pdfTitle = '<h3>'.$title.'</h3>';
$pdf->writeHTMLCell(0,0,'','',$pdfTitle,0,1,0,true,'C',true); 

$table = '
	<table style="border:1px solid #000; padding:2px">
		<thead>
		<tr>
			<th style="border:1px solid #000; padding:2px; width:30px;">#</th>
			<th style="border:1px solid #000; padding:2px">Key</th>
			<th style="border:1px solid #000; padding:2px">Taken Date&Time</th>
			<th style="border:1px solid #000; padding:2px">Taken By</th>
			<th style="border:1px solid #000; padding:2px">Reason</th>
			<th style="border:1px solid #000; padding:2px">Return Date&Time</th>
			<th style="border:1px solid #000; padding:2px">Return By</th>
			<th style="border:1px solid #000; padding:2px; width:200px;">Notes</th>
		</tr>
		</thead>
		<tbody>
	';
$sn = 1;
foreach ($qryKeyreg as $row) {
	$table .= 	'<tr>
					<td style="border:1px solid #000; padding:2px; width:30px;">'.$sn++.'</td>
					<td style="border:1px solid #000; padding:2px">'.$row['Keyreg_type'].'</td>
					<td style="border:1px solid #000; padding:2px">'.get_nice_date($row['Taken_dtm'],"overtime").'</td>
					<td style="border:1px solid #000; padding:2px">'.$row['Taken_by'].'</td>
					<td style="border:1px solid #000; padding:2px">'.$row['Reason'].'</td>
					<td style="border:1px solid #000; padding:2px">'.get_nice_date($row['Return_dtm'],"overtime").'</td>
					<td style="border:1px solid #000; padding:2px">'.$row['Return_by'].'</td>
					<td style="border:1px solid #000; padding:2px; width:200px;">'.$row['Notes'].'</td>
				</tr>';				
}

$table .= '
		</tbody>
	</table>

';

$pdf->writeHTMLCell(0,0,'','',$table,0,1,0,true,'C',true); 
// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

ob_clean();
//Close and output PDF document
$pdf->Output('Keyreg.pdf', 'I');
exit(); 
//============================================================+
// END OF FILE
//============================================================+
