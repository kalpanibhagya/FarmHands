<?php
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
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
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('Farmers Report');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

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
$pdf->SetFont('times', '', 12);

// add a page
$pdf->AddPage();
$pdf->Ln(2);

$html = <<<EOD
<h3 class="text-center">Registered Farmers</h3>
EOD;

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, 'center');

$pdf->Ln(8);

$table = '<table style="border: 1px solid black">';
$table .= '<tr style="background-color: lightgrey">
            <th style="border: 1px solid black">Farm Name</th>
            <th style="border: 1px solid black">Location</th>
            <th style="border: 1px solid black">Description</th>
            <th style="border: 1px solid black">Farmer ID</th>
            </tr>';
foreach ($farms as $record){
    $table .= '<tr>
                <td style="border: 1px solid black">'.$record->farm_name.'</td>
                <td style="border: 1px solid black">'.$record->location.'</td>
                <td style="border: 1px solid black">'.$record->description.'</td>
                <td style="border: 1px solid black">'.$record->farmer_id.'</td>
                </tr>';
}
$table .= '</table>';


$pdf->writeHTML($table, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
ob_clean();
$pdf->Output('farms_report.pdf', 'I');
//============================================================+
// END OF FILE
//============================================================+
