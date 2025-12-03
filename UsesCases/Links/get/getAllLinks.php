<?php

require __DIR__.'/../../../vendor/autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'testData/',
    'PDF_DOCUMENT_NAME' => 'PdfWithLinks.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'PAGE_NUMBER' => 1,     // Your document page number...
];

class PdfLinks {
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
       
    public function getAllPageLinks () {
        $result_links = $this->pdfApi->getPageLinkAnnotations($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['PAGE_NUMBER']);

        if ($result_links->getCode() == 200) {
            echo "Links array:";
            var_dump($result_links->getLinks());
        }
        else
           echo "Unexpected error : can't get links!!!";
    }
}

function main() {
    global $configParams;

    try {
        $pdfLinks = new PdfLinks($configParams);
        $pdfLinks->uploadDocument();
        $pdfLinks->getAllPageLinks();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();
