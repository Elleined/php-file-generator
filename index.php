<?php

use Elleined\PHPFileGenerator\CSVGenerator;
use Elleined\PHPFileGenerator\EXCELGenerator;
use Elleined\PHPFileGenerator\PDFGenerator;

require_once "./vendor/autoload.php";
require_once "./src/Generator.php";
require_once "./src/CSVGenerator.php";
require_once "./src/PDFGenerator.php";

$data = [
    ['John Smith', 'john@example.com', '555-555-1212'],
    ['Jane Doe', 'jane@example.com', '555-555-1213']
];

// $csvGenerator = new CSVGenerator();
// $csvGenerator -> generate("my_first_generated_csv_file", $data);

$pdfGenerator = new PDFGenerator();
$pdfGenerator -> generate("my_first_generated_pdf_file", $data)