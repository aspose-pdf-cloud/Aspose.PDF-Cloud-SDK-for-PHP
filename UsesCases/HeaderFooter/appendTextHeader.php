<?php

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Model\TextHeader;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'C:\\Samples\\',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'HEADER_VALUE' => 'New Header Value',
];

class PdfHeaderFooter {
    private $pdfApi;
    private $configParams;

    private function _create_rest_api() {
        $credentials = json_decode(file_get_contents("./Credentials/credentials.json"), true);

        $configAuth = new Configuration();
        $configAuth->setAppKey($credentials['key']);
        $configAuth->setAppSid($credentials['id']);

        $this->pdfApi = new PdfApi(null, $configAuth);
     }

    public function __construct($config) {
        $this->configParams = $config;
        $this->_create_rest_api();
    }

    public function uploadDocument() {
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['PDF_DOCUMENT_NAME'];
        $fileData = file_get_contents($filePath);

        $response = $this->pdfApi->uploadFile($this->configParams['PDF_DOCUMENT_NAME'], $fileData);
        if ($response->getCode() === 200) {
            echo "Uploaded file: {$filePath}\n";
        } else {
            echo 'Failed to upload file.';
        }
    }

    public function downloadResult() {
        $response = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];

        if ($response->getCode() === 200) {
            file_put_contents($filePath, $response->getContents());
            echo "Downloaded: $filePath\n";
        } else {
            echo "Failed to download file.";
        }
    }

    public function addTextHeader () {
        $textHeader = new TextHeader(array(
            'background' => true,
            'value' => $this->configParams['HEADER_VALUE'],
            'horizontal_alignment' => \Aspose\PDF\Model\HorizontalAlignment::CENTER,
        ));
        $resultHeader = $this->pdfApi->postDocumentTextFooter($this->configParams['PDF_DOCUMENT_NAME'], $textHeader);

        if ($resultHeader->getCode() === 200) {
            echo 'Successfully appended text footer "' . $this->configParams['HEDAER_VALUE'] .'"';
        }
        else
            throw new Error("Unexpected error : can't append text footer!");
    }
}

function main() {
    global $configParams;

    try {
        $pdfHeaderFooter = new PdfHeaderFooter($configParams);
        $pdfHeaderFooter->uploadDocument();
        $pdfHeaderFooter->addTextHeader();
        $pdfHeaderFooter->downloadResult();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();