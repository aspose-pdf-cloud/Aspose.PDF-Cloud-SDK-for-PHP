<?php

require 'vendor/autoload.php'; // Подключение автозагрузки Composer

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'testData/',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf'
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
        $fileNamePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['PDF_DOCUMENT_NAME'];
        $this->pdfApi->uploadFile($this->configParams['PDF_DOCUMENT_NAME'], $fileNamePath);
    }

    public function downloadResult() {
        $changedPdfData = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];
        $changedPdfData->rewind();
        $content = $changedPdfData->fread($changedPdfData->getSize());
        file_put_contents($filePath, $content);
        echo "Downloaded: " . $filePath . "\n";
    }

    public function appendPage() {
        $resultPages = $this->pdfApi->putAddNewPage($this->configParams['PDF_DOCUMENT_NAME']);
        if ($resultPages->getCode() == 200) {
            $newPage = end($resultPages->getPages()->getList('list'));
            echo "Appended page:";
            var_dump($newPage);
        } else {
            echo "Unexpected error: can't get pages!!!\n";
        }
    }
}

function main() {
    global $configParams;
    $pdfPages = new PdfPages($configParams);
    try {
        $pdfPages->uploadDocument();
        $pdfPages->appendPage();
        $pdfPages->downloadResult();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();