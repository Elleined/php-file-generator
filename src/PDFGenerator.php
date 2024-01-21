<?php
namespace Elleined\PHPFileGenerator;

use Elleined\PHPFileGenerator\Generator;
use FPDF;

class PDFGenerator implements Generator {
    /**
     * @overrides
     */
    public function generate(string $fileName, array $data): void {
        $fpdf = new FPDF();

        // Document Details
        $fpdf -> SetAuthor("Denielle Mar M. De Guzman (Elleined)", true);
        $fpdf -> SetCreator("PHP File Generator Project of Elleined", true);
        $fpdf -> SetSubject("Generating PDF file using PHP", true);
        $fpdf -> SetTitle("Creating sample PDF file.", true);
        $fpdf -> SetKeywords("PHP PDF", true);

        // Document Properties
        $fpdf -> SetTextColor(255, 0, 0); // Sets the cell text colors
        $fpdf -> SetFillColor(255, 255, 0);
        $fpdf -> SetFont("Courier");
        $fpdf -> SetFontSize("20");

        // Document Margins
        $fpdf -> SetMargins(10, 10, 10);

        $fpdf -> AddPage();

        /**
         * Cell Documentation
         * http://www.fpdf.org/en/doc/cell.htm
         */
        $fpdf -> Cell(52, 10, "Hello World!", "1LTRB", 0, 'C');
        $fpdf -> Cell(100, 10, "", 0, 0, 'L');
        $fpdf -> Cell(40, 10, "Denielle", "1LTRB", 0, 'C', true);

        $fpdf -> Ln(20);  // Adding line break to go in new line
        $fpdf -> Cell(52, 10, "Hello World!", "1LTRB", 0, 'C');
        $fpdf -> Cell(100, 10, "", 0, 0, 'L');
        $fpdf -> Cell(40, 10, "Denielle", "1LTRB", 0, 'C', true);

        $fpdf -> SetXY(10, 60); // Setting the xy to jump into specific location in document
        $fpdf -> Cell(52, 10, "Hello World!", "1LTRB", 0, 'C');
        $fpdf -> Cell(100, 10, "", 0, 0, 'L');
        $fpdf -> Cell(40, 10, "Denielle", "1LTRB", 0, 'C', true);

        $fpdf -> Output("", "$fileName.pdf", true);
    }
}