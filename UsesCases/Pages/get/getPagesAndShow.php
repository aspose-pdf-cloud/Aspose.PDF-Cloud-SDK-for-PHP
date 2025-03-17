<?php

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'C:\\Samples\\',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'PAGE_NUMBER' => 2,     // Your document page number...
];

class PdfPages {
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
        $pdfFilePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['PDF_DOCUMENT_NAME'];
        $pdfFileData = file_get_contents($pdfFilePath);
        $this->pdfApi->uploadFile($this->configParams['PDF_DOCUMENT_NAME'], $pdfFileData);
    }

    public function getAllPagesInfo () {
        $resultPages = $this->pdfApi->getPages($this->configParams['PDF_DOCUMENT_NAME']);

        if ($resultPages->getCode() == 200) {
            echo "All pages:";
            var_dump($resultPages->getPages()->getList());
        }
        else
            echo "Unexpected error : can't get pages!!!";
    }
       
    public function getPageInfoByPageNumber () {
        $resultPage = $this->pdfApi->getPage($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['PAGE_NUMBER']);

        if ($resultPage->getCode() == 200) {
            echo "Page {$this->configParams['PAGE_NUMBER']} info:";
            var_dump($resultPage->getPage());
        }
        else
            echo "Unexpected error : can't get page {$this->configParams['PAGE_NUMBER']} info!!!";
    }
}

function main() {
    global $configParams;

    try {
        $pdfPages = new PdfPages($configParams);
        $pdfPages->uploadDocument();
        $pdfPages->getAllPagesInfo();
        $pdfPages->getPageInfoByPageNumber();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();