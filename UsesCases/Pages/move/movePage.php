<?php

require __DIR__.'/../../../vendor/autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'testData/',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'PAGE_NUMBER' => 2,     // Your document page number...
];

class PdfPages {
    private $pdfApi;
    private $configParams;

    private function _create_rest_api() {
        $credentials = json_decode(file_get_contents("./settings/credentials.json"), true);

        $configAuth = new Configuration();
        $configAuth->setClientSecret($credentials['client_secret']);
        $configAuth->setClientId($credentials['client_id']);

        $this->pdfApi = new PdfApi(null, $configAuth);
     }

    public function __construct($config) {
        $this->configParams = $config;
        $this->_create_rest_api();
    }

    public function uploadDocument() {
        $pdfFilePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['PDF_DOCUMENT_NAME'];
        $this->pdfApi->uploadFile($this->configParams['PDF_DOCUMENT_NAME'], $pdfFilePath);
    }

    public function downloadResult() {
        $changedPdfData = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];
        $changedPdfData->rewind();
        $content = $changedPdfData->fread($changedPdfData->getSize());
        file_put_contents($filePath, $content);
        echo "Downloaded: " . $filePath . "\n";
    }

    public function movePage () {
        $pageNumber = $this->configParams['PAGE_NUMBER'];
        $newPageNumber = (int) $pageNumber + 1;
        $resultPages = $this->pdfApi->postMovePage($this->configParams['PDF_DOCUMENT_NAME'], $pageNumber, $newPageNumber);

        if ($resultPages->getCode() == 200) {
            echo "Page #{$pageNumber} moved to #{$newPageNumber} !";
        }
        else
            echo "Unexpected error : can't move page!!!";
    }
}

function main() {
    global $configParams;

    try {
        $pdfPages = new PdfPages($configParams);
        $pdfPages->uploadDocument();
        $pdfPages->movePage();
        $pdfPages->downloadResult();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();