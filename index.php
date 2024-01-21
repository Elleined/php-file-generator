<?php

use Elleined\PHPFileGenerator\CSVGenerator;
use Elleined\PHPFileGenerator\ExcelGenerator;
use Elleined\PHPFileGenerator\PDFGenerator;

require_once "./vendor/autoload.php";
require_once "./src/Generator.php";
require_once "./src/CSVGenerator.php";
require_once "./src/PDFGenerator.php";

$headers = ['Name', "Email", "Number", "Country"];

$data = [
    ['John Smith', 'john@example.com', '555-555-1212', "Philippines"],
    ['Jane Doe', 'jane@example.com', '555-555-1213', "Malaysia"]
];

// $csvGenerator = new CSVGenerator();
// $csvGenerator -> generate("my_first_generated_csv_file", $headers, $data);

// $pdfGenerator = new PDFGenerator();
// $pdfGenerator -> generate("my_first_generated_pdf_file", $headers, $data);

$excelGenerator = new ExcelGenerator();
$excelGenerator -> generate("my_first_generated_excel_file", $headers, $data);