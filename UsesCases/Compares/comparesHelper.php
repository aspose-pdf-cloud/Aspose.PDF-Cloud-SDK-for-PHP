<?php

use Aspose\PDF\Api\PdfApi;

$credentials = json_decode(file_get_contents(__DIR__ . '/../../../Credentials/credentials.json'), true);

$pdfApi = new PdfApi($credentials['id'], $credentials['key']);

class PdfComparesHelper
{
    private $pdfApi;

    public function __construct($pdfApi)
    {
        $this->pdfApi = $pdfApi;
    }

    public function uploadFile($fileName, $localFolder, $remoteFolder)
    {
        $localFilePath = rtrim($localFolder, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $fileName;
        $remoteFilePath = rtrim($remoteFolder, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $fileName;

        $fileData = file_get_contents($localFilePath);
        $this->pdfApi->uploadFile($remoteFilePath, $fileData);

        echo "Uploaded: $fileName\n";
    }

    public function downloadResult($fileName, $localFolder, $remoteFolder)
    {
        $remoteFilePath = rtrim($remoteFolder, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $fileName;
        $response = $this->pdfApi->downloadFile($remoteFilePath);

        $localFilePath = rtrim($localFolder, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $fileName;
        file_put_contents($localFilePath, $response['body']);

        echo "Downloaded: $localFilePath\n";
    }

    public function joinPath(...$segments)
    {
        return join(DIRECTORY_SEPARATOR, array_map(function($s) {
            return trim($s, DIRECTORY_SEPARATOR);
        }, $segments));
    }
}
