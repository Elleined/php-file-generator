<?php
namespace Elleined\PHPFileGenerator;

use Elleined\PHPFileGenerator\Generator;
use FPDF;

class PDFGenerator implements Generator {
    /**
     * @overrides
     */
    public function generate(string $fileName, array $headers, array $data): void {
        $fpdf = new FPDF();

        // Document Details
        $fpdf -> SetAuthor("Denielle Mar M. De Guzman (Elleined)", true);
        $fpdf -> SetCreator("PHP File Generator Project of Elleined", true);
        $fpdf -> SetSubject("Generating PDF file using PHP", true);
        $fpdf -> SetTitle("Creating sample PDF file.", true);
        $fpdf -> SetKeywords("PHP PDF", true);

        // Document Page Properties
        $fpdf -> AddPage();
        $fpdf -> SetLeftMargin(14);

        $fpdf -> SetFont("Courier", "B", 20);
        $fpdf -> Cell(25, 10, "Customer Table", 0, 0, "L");
        $fpdf -> Ln();

        $fpdf -> SetFont("Courier", "", 12);
        foreach ($headers as $header) {
            $fpdf -> Cell(45, 6, $header, 1, 0, "C");
        }
        $fpdf -> Ln();


        foreach ($data as $row) {
            foreach ($row as $col) {
                $fpdf -> Cell(45, 6, $col, 1, 0, "L");
            }
            $fpdf -> Ln();
        }

        $fpdf -> Output("", "$fileName.pdf", true);
    }

    public function codeSample(string $fileName): void {
        $fpdf = new FPDF();

        // Document Details
        $fpdf -> SetAuthor("Denielle Mar M. De Guzman (Elleined)", true);
        $fpdf -> SetCreator("PHP File Generator Project of Elleined", true);
        $fpdf -> SetSubject("Generating PDF file using PHP", true);
        $fpdf -> SetTitle("Creating sample PDF file.", true);
        $fpdf -> SetKeywords("PHP PDF", true);

        // Document Properties
        $fpdf -> SetTextColor(255, 0, 0); // Sets the cell text colors
        $fpdf -> SetFillColor(255, 255, 0); // Sets the cell background color when cell fill parameter is true
        $fpdf -> SetFont("Courier");
        $fpdf -> SetFontSize("20");

        // Document Page Properties
        $fpdf -> AddPage();
        $fpdf -> SetMargins(10, 10, 10);

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