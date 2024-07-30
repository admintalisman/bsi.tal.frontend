<?php

require_once __DIR__ . '/ComponentCode/PHPWord_0.17/autoload.php'; 

/*
use PhpOffice\PhpWord\Settings;

date_default_timezone_set('UTC+1');
// error_reporting(E_ALL);
define('CLI', (PHP_SAPI == 'cli') ? true : false);
define('EOL', CLI ? PHP_EOL : '<br />');
define('SCRIPT_FILENAME', basename($_SERVER['SCRIPT_FILENAME'], '.php'));
define('IS_INDEX', SCRIPT_FILENAME == 'index');

Settings::loadConfig();
// Set writers
$writers = array('Word2007' => 'docx', 'ODText' => 'odt', 'RTF' => 'rtf', 'HTML' => 'html', 'PDF' => 'pdf');
// Turn output escaping on
Settings::setOutputEscapingEnabled(true);
*/

// ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//$idfactura= $_SESSION['idfactura'] ; // identificación de factura a obtener

// Template processor instance creation
$template_word = __DIR__.'/letterhead.docx';
$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor($template_word);

// -------------------- ^ cabecera necesaria para las plantillas de Word ------------------
$sql="SELECT * FROM SURAT where ID = 3";
$resql=db_query($sql,$conn);
$data=db_fetch_array($resql);



// Variables on different parts of document
$templateProcessor->setValue('judul', $data['judul']); 
$templateProcessor->setValue('isi', $data['isi']);  

$temp_file = tempnam(sys_get_temp_dir(), 'Word');
$templateProcessor->saveAS($temp_file);

// ------------------ Operation with file result -------------------------------------------
$documento = file_get_contents($temp_file);
unlink($temp_file);  // delete file tmp
header("Content-Disposition: attachment; filename= factura.docx");
header('Content-Type: application/word');
echo $documento;
?>
