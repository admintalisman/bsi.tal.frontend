<?php

require_once __DIR__ . '/../../ComponentCode/PhpSpreadsheet_1.10/autoload.php';
 
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\NamedRange;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;;

//  Template processor instance creation
$reader = IOFactory::createReader('Xlsx');
$spreadsheet = $reader->load(__DIR__ . '/PlantillaFactura.xlsx');

$idfactura= $_SESSION['idfactura'] ; // identificación de factura a obtener


// Recuperar datos de factura
$sql="SELECT Nif, NombreRazonSocial, Domicilio, RestoDomicilio, FechaFactura, TotalFactura FROM factura where idfactura = $idfactura";
$resql=db_query($sql,$conn);
$data=db_fetch_array($resql);

// Variables on different parts of document
$FechaFactura=$data['FechaFactura'];
$spreadsheet->getActiveSheet()->setCellValue('D1', Date::PHPToExcel($data['FechaFactura']));
$spreadsheet->getActiveSheet()->setCellValue('B2', $data['Nif']);
$spreadsheet->getActiveSheet()->setCellValue('B3', $data['NombreRazonSocial']);
$spreadsheet->getActiveSheet()->setCellValue('B5', $data['Domicilio']);
$spreadsheet->getActiveSheet()->setCellValue('B6', $data['RestoDomicilio']);

// read lines the invoice
$sql="SELECT Nombre, Precio, Cantidad, Valor  FROM linea_factura where factura_idfactura= $idfactura ";
$rsSql=db_query($sql,$conn);

$baseRow = 10;
$r=0;

while ($data2 = db_fetch_array($rsSql)){
    $row = $baseRow + $r;
    $spreadsheet->getActiveSheet()->insertNewRowBefore($row, 1);

    $spreadsheet->getActiveSheet()->setCellValue('A' . $row, $r + 1)
        ->setCellValue('B' . $row, $data2['Nombre'])
        ->setCellValue('C' . $row, $data2['Precio'])
        ->setCellValue('D' . $row, $data2['Cantidad'])
        ->setCellValue('E' . $row, $data2['Valor']);
		$r= $r+1;
	}
$spreadsheet->getActiveSheet()->removeRow($baseRow - 1, 1);


// -------------------- v pie para salvar el nuevo documento Word ------------------
$temp_file = tempnam(sys_get_temp_dir(), 'Excel');
// Save EXCEL
$writer = new Xlsx($spreadsheet);
$writer->save($temp_file);

// ------------------ Operation with file result -------------------------------------------
$documento = file_get_contents($temp_file);
unlink($temp_file);  // delete file tmp
header("Content-Disposition: attachment; filename= factura.xlsx");
header('Content-Type: application/excel');
echo $documento;
?>
