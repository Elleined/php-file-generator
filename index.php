<?php

use Elleined\PHPFileGenerator\CSVGenerator;
use Elleined\PHPFileGenerator\EXCELGenerator;
use Elleined\PHPFileGenerator\PDFGenerator;

require_once "./vendor/autoload.php";

require_once "./src/MockDataTrait.php";
require_once "./src/Generator.php";
require_once "./src/CSVGenerator.php";
require_once "./src/EXCELGenerator.php";
require_once "./src/PDFGenerator.php";

$pdfGenerator = new PDFGenerator();
$pdfGenerator -> generate();

$csvGenerator = new CSVGenerator();
$csvGenerator -> generate();

$excelGenerator = new EXCELGenerator();
$excelGenerator -> generate();