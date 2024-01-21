<?
namespace Elleined\PHPFileGenerator;

interface Generator {
    public function generate(String $fileName, array $headers, array $data): void;
}