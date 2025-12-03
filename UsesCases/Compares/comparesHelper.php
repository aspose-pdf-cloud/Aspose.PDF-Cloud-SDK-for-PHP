<?php

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$credentials = json_decode(file_get_contents("./settings/credentials.json"), true);

$configAuth = new Configuration();
$configAuth->setClientSecret($credentials['client_secret']);
$configAuth->setClientId($credentials['client_id']);

$pdfApi = new PdfApi(null, $configAuth);

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

        $this->pdfApi->uploadFile($remoteFilePath, $localFilePath);

        echo "Uploaded: $fileName\n";
    }

    public function downloadResult($fileName, $localFolder, $remoteFolder)
    {
        $remoteFilePath = rtrim($remoteFolder, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $fileName;
        $response = $this->pdfApi->downloadFile($remoteFilePath);

        $localFilePath = rtrim($localFolder, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $fileName;
        $response->rewind();
        $content = $response->fread($response->getSize());
        file_put_contents($localFilePath, $content);

        echo "Downloaded: $localFilePath\n";
    }

    public function joinPath(...$segments)
    {
        return join(DIRECTORY_SEPARATOR, array_map(function($s) {
            return trim($s, DIRECTORY_SEPARATOR);
        }, $segments));
    }
}
