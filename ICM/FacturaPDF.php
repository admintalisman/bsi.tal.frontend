<?php
// use setasign\Fpdi\Fpdi;
use setasign\Fpdi\Tcpdf\Fpdi;

require_once __DIR__ . '/../../ComponentCode/fpdi_2.3.6/autoload.php';

// initiate FPDI
$pdf = new Fpdi();

// Very important
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
// set font
$pdf->SetFont('helvetica', '', 11);

// set the source file
$template_pdf = __DIR__.'/PlantillaFactura.pdf';
$pdf->setSourceFile($template_pdf);
// import page 1
$tplIdx = $pdf->importPage(1);
// get the size of the imported page
$size = $pdf->getTemplateSize($tplIdx);
// add a page with the same orientation and size
$pdf->AddPage($size['orientation'], $size);
// use the imported page
$pdf->useTemplate($tplIdx);

// use the imported page and place it at position 10,10 with a width of 100 mm
// $pdf->useTemplate($tplIdx, 10, 10, 100);
// $pdf->useTemplate($tplIdx, ['adjustPageSize' => true]);

// Obtain measures from the page for the transformation of the Points
$pdf->SetXY(1, 1);
$wPt = 595.32; //  Measures in points of the page
$w   = $pdf->GetPageWidth();
// $hPt = 841.92; //  Measures in points of the page
$hPt = 870; //  Measures in points of the page
$h   = $pdf->GetPageHeight();
$coef_x = $wPt/$w; // X axis transformation coefficient
$coef_y = $hPt/$h; // Y axis transformation coefficient

// now write some text above the imported page
// $pdf->SetFont('Helvetica','B',10); //  Font, type and size
// $pdf->SetTextColor(68, 68, 68); // Color in R, G, B
// $pdf->SetXY(132/$coef_x, 118/$coef_y); // Positioning on the page
// $pdf->Write(0, 'This is just a simple text'); //  Write TXT. Offset in Y points, Text and Link

// -----------------------------------------------Recover invoice data-------------------------------------------------------------------------------------------------------
$idfactura= $_SESSION['idfactura'] ; // invoice identification to obtain

$sql="SELECT Nif, NombreRazonSocial, Domicilio, RestoDomicilio, FechaFactura, TotalFactura FROM factura where idfactura = $idfactura";
$resql=db_query($sql,$conn);
$data=db_fetch_array($resql);
// Variables on different parts of document
$pdf->SetFont('Helvetica','',16); //  Font, type and size
$pdf->SetTextColor(247, 172, 8); // Color in R, G, B
$pdf->SetXY(321/$coef_x, 95/$coef_y); // Positioning on the page
$pdf->Write(0, '#'.$idfactura); //  Numbre invoce
$pdf->SetXY(435/$coef_x, 95/$coef_y); // Positioning on the page
$pdf->Write(0, $data['FechaFactura']); //  Date invoce

$pdf->SetFont('Helvetica','B',10); //  Font, type and size
$pdf->SetTextColor(68, 68, 68); // Color in R, G, B
$pdf->SetXY(132/$coef_x, 118/$coef_y); // Positioning on the page
$pdf->Write(0, $data['Nif']); //  NIF

$pdf->SetXY(132/$coef_x, 132/$coef_y);

$string = $data['NombreRazonSocial']; 
$pdf->Write(0, $string); //  Nombre

$pdf->SetFont('Helvetica','',10); //  Font, type and size
$pdf->SetXY(132/$coef_x, 146/$coef_y);
$string = iconv("UTF-8", "ISO-8859-1//TRANSLIT", $data['Domicilio']); // Convert UTf8
$string = $data['Domicilio']; 
$pdf->Write(0, $string); //  Domicilio
 
$pdf->SetXY(132/$coef_x, 160/$coef_y);
$string = $data['RestoDomicilio']; 
$pdf->Write(0, $string); //  RestoDomicilio

$pdf->SetFont('Courier','',10); //  Font, type and size, COURIER is a fixed size font of all characters
$pdf->SetXY(443/$coef_x, 493/$coef_y);

$number = number_format($data['TotalFactura'], 2, ',', '.');
$number = sprintf("%' 11s",$number);
$pdf->Write(0,$number ); //  TotalFactura
$pdf->SetXY(443/$coef_x, 463/$coef_y);
$pdf->Write(0,$number ); //  TotalFactura

// --------------------------------------------------------------
$sql="SELECT producto_idproducto, Nombre, Precio, Cantidad, Valor   FROM linea_factura where factura_idfactura= $idfactura ";
$rsSql=db_query($sql,$conn);
$countLines=0;
while ($data2 = db_fetch_array($rsSql)){

		$pdf->SetXY(55/$coef_x, ((206.5+($countLines*14.63))/$coef_y));
		$number = number_format($data2['producto_idproducto'], 0, ',', '.');
		$number = sprintf("%' 9s",$number);
		$pdf->Write(0,$number ); //  Id Producto

		$pdf->SetXY(128/$coef_x, ((206.5+($countLines*14.63))/$coef_y));
		$string = $data2['Nombre']; 
		$pdf->Write(0,$string); // Nonbre

		$pdf->SetXY(322.71/$coef_x, ((206.5+($countLines*14.63))/$coef_y));
		$number = number_format($data2['Precio'], 2, ',', '.');
		$number = sprintf("%' 7s",$number);
		$pdf->Write(0,$number ); //  Precio

		$pdf->SetXY(375/$coef_x, ((206.5+($countLines*14.63))/$coef_y));
		$number = number_format($data2['Cantidad'], 0, ',', '.');
		$number = sprintf("%' 10s",$number);
		$pdf->Write(0,$number ); //  Cantidad

		$pdf->SetXY(443/$coef_x, ((206.5+($countLines*14.63))/$coef_y));
		$number = number_format($data2['Valor'], 2, ',', '.');
		$number = sprintf("%' 11s",$number);
		$pdf->Write(0,$number ); //  Valor

		$countLines=$countLines+1;

	}
// Insert image
$pdf->Image(__DIR__.'/QR_prueba.png' , 180 , 5, 20 , 20,'PNG', 'https://fhumanes.com/');

// -----------------------------------------------------------------------------------------
//  adding the second page of the template
$tplIdx2 = $pdf->importPage(2);
// get the size of the imported page
$size = $pdf->getTemplateSize($tplIdx2);
// add a page with the same orientation and size
$pdf->AddPage($size['orientation'], $size);
// use the imported page
// $pdf->useTemplate($tplIdx);
$pdf->useImportedPage($tplIdx2);

// ---------------------------------------------------------

/*
NOTES:
 - To create self-signed signature: openssl req -x509 -nodes -days 365000 -newkey rsa:1024 -keyout tcpdf.crt -out tcpdf.crt
 - To export crt to p12: openssl pkcs12 -export -in tcpdf.crt -out tcpdf.p12
 - To convert pfx certificate to pem: openssl pkcs12 -in tcpdf.pfx -out tcpdf.crt -nodes
*/

// set certificate file
$certificate = "file://".__DIR__.'/certificate/tcpdf2.crt';

// set additional information
$info = array(
	'Name' => 'Fernando Humanes',
	'Location' => 'Mi Empresa',
	'Reason' => 'Testing TCPDF',
	'ContactInfo' => 'https://fhumanes.com',
	);

// set document signature
// $pdf->setSignature($certificate, $certificate, 'tcpdfdemo', '', 2, $info);
$pdf->setSignature($certificate, $certificate, 'Secret', '', 2, $info);

// set font
// $pdf->SetFont('helvetica', '', 12);

// add a page
// $pdf->AddPage();

// print a line of text
// $text = 'This is a <b color="#FF0000">digitally signed document</b> using the default (example) <b>tcpdf.crt</b> certificate.<br />To validate this signature you have to load the <b color="#006600">tcpdf.fdf</b> on the Arobat Reader to add the certificate to <i>List of Trusted Identities</i>.<br /><br />For more information check the source code of this example and the source code documentation for the <i>setSignature()</i> method.<br /><br /><a href="http://www.tcpdf.org">www.tcpdf.org</a>';
// $pdf->writeHTML($text, true, 0, true, 0);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// *** set signature appearance ***

// create content for signature (image and/or text)
// $pdf->Image(__DIR__.'/certificate/tcpdf_signature.png', 180, 60, 15, 15, 'PNG');

// define active area for signature appearance
// $pdf->setSignatureAppearance(180, 80, 15, 15);

// $pdf->Output('I','Factura.pdf');
$pdf->Output('Factura.pdf', 'I');
// $pdf->Output();
/*
// --------------------  foot to save the new PDF document ------------------
$temp_file = tempnam(sys_get_temp_dir(), 'PDF');
$pdf->Output('F',$temp_file);

// ------------------ Operation with file result -------------------------------------------
$documento = file_get_contents($temp_file);
unlink($temp_file);  // delete file tmp
header("Content-Disposition: attachment; filename= factura.pdf");
header('Content-Type: application/pdf');
echo $documento;
*/

?>