<?php

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$credentials = json_decode(file_get_contents(__DIR__ . '/../../../Credentials/credentials.json'), true);

$configParams = [
    "LOCAL_FOLDER" => "C:\\Samples\\",
    "PDF_DOCUMENT_NAME" => "sample.pdf",
    "TEMP_FOLDER" => "TempPdfCloud",
    "LOCAL_RESULT_DOCUMENT_NAME" => "output_sample.pdf",
];

class PdfCompress
{
    private $pdfApi;
    private $configParams;

    private function _create_rest_api() {
        $credentials = json_decode(file_get_contents("../../../../Credentials/credentials.json"), true);

        $configAuth = new Configuration();
        $configAuth->setAppKey($credentials['key']);
        $configAuth->setAppSid($credentials['id']);

        $this->pdfApi = new PdfApi(null, $configAuth);
    }

    public function __construct($config) {
        $this->configParams = $config;
        $this->_create_rest_api();
    }

    public function uploadDocument()
    {
        $filePath = $this->configParams["LOCAL_FOLDER"] . DIRECTORY_SEPARATOR . $this->configParams["PDF_DOCUMENT_NAME"];
        $fileData = file_get_contents($filePath);

        $storagePath = $this->configParams["TEMP_FOLDER"] . DIRECTORY_SEPARATOR . $this->configParams["PDF_DOCUMENT_NAME"];

        $this->pdfApi->uploadFile($storagePath, $fileData);
        echo "File: '{$this->configParams["PDF_DOCUMENT_NAME"]}' successfully uploaded." . PHP_EOL;
    }

    public function downloadResult()
    {
        $fileName = $this->configParams["TEMP_FOLDER"] . DIRECTORY_SEPARATOR . $this->configParams["PDF_DOCUMENT_NAME"];
        $downloaded = $this->pdfApi->downloadFile($fileName);

        $filePath = $this->configParams["LOCAL_FOLDER"] . DIRECTORY_SEPARATOR . $this->configParams["LOCAL_RESULT_DOCUMENT_NAME"];
        file_put_contents($filePath, $downloaded);
        echo "Downloaded: {$filePath}" . PHP_EOL;
    }

    public function compressPdfDocument()
    {
        $options = new \Aspose\PDF\Model\OptimizeOptions();
        $options->setAllowReusePageContent(true);
        $options->setCompressImages(true);
        $options->setImageQuality(100);
        $options->setLinkDuplcateStreams(true);
        $options->setRemoveUnusedObjects(true);
        $options->setRemoveUnusedStreams(true);
        $options->setUnembedFonts(true);

        $response = $this->pdfApi->postOptimizeDocument(
            $this->configParams["PDF_DOCUMENT_NAME"],
            $options,
            null,
            $this->configParams["TEMP_FOLDER"]
        );

        if ($response->getCode() != 200) {
            echo "compressPdfDocument(): Failed to compress the PDF document!" . PHP_EOL;
        } else {
            echo "compressPdfDocument(): Successfully compressed the PDF document '{$this->configParams["PDF_DOCUMENT_NAME"]}' !" . PHP_EOL;
        }
    }
}

try {
    $compressor = new PdfCompress($pdfApi, $configParams);
    $compressor->uploadDocument();
    $compressor->compressPdfDocument();
    $compressor->downloadResult();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
