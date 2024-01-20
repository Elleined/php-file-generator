<?
namespace Elleined\PHPFileGenerator;

class PDFGenerator implements Generator {

    /**
     * @overrides
     */
    public function generate() : void {
        echo "PDF Generating...";
    }
}