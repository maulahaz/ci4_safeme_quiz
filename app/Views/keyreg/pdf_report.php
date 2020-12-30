<?php

$pdf = new TPdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$pdf->setPrintHeader(false);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set font
$pdf->SetFont('times', '', 12);

// add a page
// $pdf->AddPage();
$pdf->AddPage('L', 'mm', 'A4');

//------------Header:
$pdf->SetFont('helvetica','',12);
$pdf->Cell(40,10,'Borouge Logo',1,1,'C');
// $pdf->Cell(197,10,'',0,0,'C');
// $pdf->Cell(40,10,'Barcode',1,1,'C');
$pdf->Ln(2);

$pdfTitle = '<h3>'.$title.'</h3>';
$pdf->writeHTMLCell(0,0,'','',$pdfTitle,0,1,0,true,'C',true); 
$pdf->Ln(5);

$table = '
	<style>
	  th{text-align: center; font-weight: bold;}
	  .center-it{text-align: center;}
	</style>
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
			<th style="border:1px solid #000; padding:2px; width:220px;">Notes</th>
		</tr>
		</thead>
		<tbody>
	';
$sn = 1;
foreach ($qryKeyreg as $row) {
	// $row['Keyreg_type'];
	$kr = implode('<br>',explode(',',$row['Keyreg_type']));
	$table .= 	'<tr>
					<td class="center-it" style="border:1px solid #000; padding:2px; width:30px;">'.$sn++.'</td>
					<td class="center-it" style="border:1px solid #000; padding:2px">'.$kr.'</td>
					<td class="center-it" style="border:1px solid #000; padding:2px">'.get_nice_date($row['Taken_dtm'],"overtime").'</td>
					<td class="center-it" style="border:1px solid #000; padding:2px">'.$row['Taken_by'].'</td>
					<td style="border:1px solid #000; padding:2px">'.$row['Reason'].'</td>
					<td class="center-it" style="border:1px solid #000; padding:2px">'.get_nice_date($row['Return_dtm'],"overtime").'</td>
					<td class="center-it" style="border:1px solid #000; padding:2px">'.$row['Return_by'].'</td>
					<td style="border:1px solid #000; padding:2px; width:220px;">'.$row['Notes'].'</td>
				</tr>';				
}

$table .= '
		</tbody>
	</table>

';

$pdf->writeHTMLCell(0,0,'','',$table,0,1,0,true,'',true); 
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
