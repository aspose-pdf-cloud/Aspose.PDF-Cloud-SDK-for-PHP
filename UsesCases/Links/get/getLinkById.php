<?php

require __DIR__.'/../../../vendor/autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'testData/',
    'PDF_DOCUMENT_NAME' => 'PdfWithLinks.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'PAGE_NUMBER' => 1,                                                     // Your document page number...
    'LINK_FIND_ID' => 'GE5UO32UN5AWG5DJN5XDWOBYFQ3TGMJMGEZTMLBXGQ3A', // Your link ID...
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

    public function getPageLinkById() {
        $result_link = $this->pdfApi->getPageLinkAnnotation($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['PAGE_NUMBER'], $this->configParams['LINK_FIND_ID']);

        if ($result_link->getCode() == 200) {
            echo "Found link:";
            var_dump($result_link->getLink());
        }
        else
           echo "Unexpected error : can't get link!!!";
    }
}

function main() {
    global $configParams;

    try {
        $pdfLinks = new PdfLinks($configParams);
        $pdfLinks->uploadDocument();
        $pdfLinks->getPageLinkById();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();
