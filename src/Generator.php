<?
namespace Elleined\PHPFileGenerator;

interface Generator {
    public function generate(String $fileName, array $data): void;
}