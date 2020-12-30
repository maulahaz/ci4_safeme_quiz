<?php
// Include library:
$pdf = new TPdf();

// Add a page:
$pdf->AddPage('P', 'A4', 'mm');

// Remove default header and footer:
// $pdf->setPrintHeader(false);
// $pdf->setPrintFooter(false);

// BOF-Add content:
//---Judul, Font 14
$pdf->SetFont('Helvetica', '', 14);
$pdf->Cell(195,10,$title,1,1,'C');

// $pdf->writeHTMLCell(0,0,'','',$pdfTitle,0,1,0,true,'C',true); 
//---Spasi
$pdf->Ln(5);	
// <th align="center" style="border:0.5px solid #000; padding:1px; width:30px;">#</th>
//---Set font 10
$pdf->SetFont('Helvetica', '', 10);
$table = '
	<style> 
		th{ border: 0.5px solid #000; text-align: center; font-weight: bold; color: #000080;}
		td{ border: 0.5px solid #000; text-align: center; }
	</style>
	<table style="border:0.5px solid #000;">
		<thead>
		<tr>
			<th style="width:30px;">#</th>
			<th>Key</th> 	
			<th>Taken Date&Time</th>
			<th>Taken By</th>
			<th>Reason</th>
			<th>Return Date&Time</th>
			<th>Return By</th>
			<th style="width:120px;">Notes</th>
		</tr>
		</thead>
		<tbody>
	';
$sn = 1;
foreach ($qryKeyreg as $row) {
	$table .= '<tr>
				<td style="width:30px;">'.$sn++.'</td>
				<td>'.$row['Keyreg_type'].'</td>
				<td>'.get_nice_date($row['Taken_dtm'],"overtime").'</td>
				<td>'.$row['Taken_by'].'</td>
				<td align="left" style="border:0.5px solid #000">'.$row['Reason'].'</td>
				<td>'.get_nice_date($row['Return_dtm'],"overtime").'</td>
				<td>'.$row['Return_by'].'</td>
				<td align="left" style="width:120px;">'.$row['Notes'].'</td>
			</tr>';			
}

$table .= '
		</tbody>
	</table>

';	

$pdf->writeHTMLCell(0,0,'','',$table,0,1,0,true,'C',true); 
// Move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

ob_clean();

// EOF-content:

//Close and output PDF document
$pdf->Output('Keyreg.pdf', 'I');
exit(); 
//============================================================+
// END OF FILE
//============================================================+


// Note:
// Cell(195,10,$title,1*,1,'C')
/// 195 : Lebar area print mm. A4 Portrait size: 210mm X 297mm
/// 10 : Tinggi area print mm.
/// $title : Text.
/// 1* : Border. 0=> No Border, 1=>Frame.
/// C : Align Center. Opsi: L, C, R.