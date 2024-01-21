<?
namespace Elleined\PHPFileGenerator;

class CSVGenerator implements Generator {

    /**
     * @overrides
     */
    public function generate(String $fileName, array $headers, array $data) : void {
        header('Content-Type: text/csv; charset=utf-8');
        header("Content-Disposition: attachment; filename = $fileName .csv");
        $fileToBeGenerated = fopen('php://output', 'w');

        fputcsv($fileToBeGenerated, $headers);

        foreach ($data as $row) {
          fputcsv($fileToBeGenerated, $row);
        }
        fclose($fileToBeGenerated);
    }
}