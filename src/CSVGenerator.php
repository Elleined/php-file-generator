<?
namespace Elleined\PHPFileGenerator;

class CSVGenerator implements Generator {
    use MockDataTrait;

    /**
     * @overrides
     */
    public function generate() : void {
        $this -> getMockData();
        echo "CSV Generating...";
    }
}