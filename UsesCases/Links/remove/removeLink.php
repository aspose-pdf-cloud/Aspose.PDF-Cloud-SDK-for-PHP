<?php

require __DIR__.'/../../../vendor/autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'testData/',
    'PDF_DOCUMENT_NAME' => 'PdfWithLinks.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'LINK_REMOVE_ID' => 'GE5UO32UN5AWG5DJN5XDWOBYFQ3TGMJMGEZTMLBXGQ3A',   // Your link ID to remove...
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

    public function downloadResult() {
        $response = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];
        $response->rewind();
        $content = $response->fread($response->getSize());
        file_put_contents($filePath, $content);
        echo "Downloaded: " . $filePath . "\n";
    }

    public function removeLinkById() {
        $result_delete = $this->pdfApi->deleteLinkAnnotation($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['LINK_REMOVE_ID']);

        if ($result_delete->getCode() == 200) {
            echo "Link '" . $this->configParams['LINK_REMOVE_ID'] . "' was deleted!";
        }
        else
            echo "Unexpected error : can't get link !!!";
    }
}

function main() {
    global $configParams;

    try {
        $pdfLinks = new PdfLinks($configParams);
        $pdfLinks->uploadDocument();
        $pdfLinks->removeLinkById();
        $pdfLinks->downloadResult();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();
