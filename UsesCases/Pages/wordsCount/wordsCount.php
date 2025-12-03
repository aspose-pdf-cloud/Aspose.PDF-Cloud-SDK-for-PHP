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

    public function getWordsCount () {
        $resultPages = $this->pdfApi->getWordsPerPage($this->configParams['PDF_DOCUMENT_NAME']);

        if ($resultPages->getCode() == 200) {
            echo 'Words count in Pdf document:';
            var_dump($resultPages->getWordsPerPage()->getList());
        }
        else
            echo "Unexpected error : can't get words count in document!!!";
    }
}

function main() {
    global $configParams;

    try {
        $pdfPages = new PdfPages($configParams);
        $pdfPages->uploadDocument();
        $pdfPages->getWordsCount();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();