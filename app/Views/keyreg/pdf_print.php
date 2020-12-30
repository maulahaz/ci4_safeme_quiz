<?php

$pdf = new TPdf();
$pdf->SetTitle('Key Register - SafeMe::Safety Apps System By MHz');
$pdf->SetHeaderMargin(30);
// $pdf->SetTopMargin(10);
$pdf->setPrintHeader(false);
// $pdf->setPrintFooter(false);
$pdf->setFooterMargin(10);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('MHz');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage('L', 'mm', 'A4');
//A4 Landscape 297x210mm, margin each Left and Right = 10mm; 

//Converted variable:
// $validFrom = getNiceDateFromStr(qryP->Valid_from, "overtime");
// $validUntil = getNiceDateFromStr(qryP->Valid_until, "overtime");

//------------Header:
$pdf->SetFont('helvetica','',12);
$pdf->Cell(40,10,'Borouge Logo',1,0,'C');
// $pdf->Cell(197,10,'',0,0,'C');
// $pdf->Cell(40,10,'Barcode',1,1,'C');
$pdf->Ln(5);
//Header Permit-1
$pdf->SetFont('freesans','B',12);
$pdf->SetFillColor(245,110,0);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(80,7,'ISOLATION CERTIFICATE',0,0,'L',1);
$pdf->Cell(0,7,'',0,1,'L',1); //eol
$pdf->Cell(40,7,'ICC Number',0,0,'L',1);
$pdf->Cell(0,7,': 0012345654',0,1,'L',1); //eol
$pdf->Cell(40,7,'ICC Status',0,0,'L',1);
$pdf->Cell(0,7,': Isolation In Progress',0,1,'L',1); //eol
$pdf->Ln(3);

$pdf->SetFont('freesans','',10);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(50,7,'Title',0,0,'L',0);
$pdf->Cell(0,7,': xTitle',0,1,'L',0); //eol
$pdf->Cell(50,7,'Description',0,0,'L',0);
$pdf->Cell(0,7,': xDescr',0,1,'L',0); //eol
$pdf->Ln(3);

//------------Detail:
$pdf->SetFont('freesans','B',12);
$pdf->SetFillColor(245,110,0);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(0,7,'Details',0,1,'L',1);
$pdf->Ln(3);
//Detail section:
$pdf->SetFont('freesans','',10);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(50,7,'Planned Start Date',0,0,'L',0);
$pdf->Cell(0,7,': validFrom',0,1,'L',0); //eol
$pdf->Cell(50,7,'Planned End Date',0,0,'L',0);
$pdf->Cell(0,7,': validUntil',0,1,'L',0); //eol
$pdf->Cell(50,7,'Work Area',0,0,'L',0);
$pdf->Cell(0,7,': xArea',0,1,'L',0); //eol
$pdf->Cell(50,7,'Work Location',0,0,'L',0);
$pdf->Cell(0,7,': xLocation',0,1,'L',0); //eol
$pdf->Cell(50,7,'Tag Number',0,0,'L',0);
$pdf->Cell(0,7,': xTag_uid',0,1,'L',0); //eol
$pdf->Cell(50,7,'ICC Number',0,0,'L',0);
$pdf->Cell(0,7,': xICC_uid',0,1,'L',0); //eol
$pdf->Ln(8);

//------------Signatories:
$pdf->SetFont('freesans','B',12);
$pdf->setFillColor(245,110,0); 
$pdf->SetTextColor(255, 255, 255);//white
$pdf->Cell(0,7,'Signatures',0,1,'L',1);
$pdf->Ln(3);
//Signatories section:
$pdf->SetFont('freesans','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(60,7,'Signature',0,0,'L',0);
$pdf->Cell(50,7,'Name',0,0,'L',0);
$pdf->Cell(50,7,'Date',0,0,'L',0);
$pdf->Cell(40,7,'Dept',0,1,'L',0); //eol
$pdf->SetFont('freesans','',10);
$pdf->Cell(60,7,'Approver',0,0,'L',0);
$pdf->Cell(50,7,'Soni Yusup',0,0,'L',0);
$pdf->Cell(50,7,'20-Jul-2020 06:30',0,0,'L',0);
$pdf->Cell(40,7,'Operation',0,1,'L',0); //eol
$pdf->Cell(60,7,'Area Authority',0,0,'L',0);
$pdf->Cell(50,7,'Paresh Savaliya',0,0,'L',0);
$pdf->Cell(50,7,'20-Jul-2020 06:35',0,0,'L',0);
$pdf->Cell(40,7,'Operation',0,1,'L',0); //eol
$pdf->Ln(3);

$pdf->Output('Keyreg.pdf', 'I');
exit(); 
?>