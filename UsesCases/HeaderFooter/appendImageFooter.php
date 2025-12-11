<?php

require __DIR__.'/../../vendor/autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Model\ImageFooter;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'testData/',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'IMAGE_FOOTER_FILE' => 'sample.png',
];

class PdfHeaderFooter {
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

    public function uploadFile($fileName) {
        $filePath = $this->configParams['LOCAL_FOLDER'] . $fileName;
        $response = $this->pdfApi->uploadFile($fileName, $filePath);
        if (count($response->getUploaded()) === 1) {
            echo "Uploaded file: {$filePath}\n";
        } else {
            echo 'Failed to upload file.';
        }
    }

    public function uploadDocument() {
        $this->uploadFile($this->configParams['PDF_DOCUMENT_NAME']);
    }

    public function downloadResult() {
        $response = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];
        $response->rewind();
        $content = $response->fread($response->getSize());
        file_put_contents($filePath, $content);
        echo "Downloaded: {$filePath}\n";
    }

    public function addImageFooter () {
        $imageFooter = new ImageFooter(array(
            'background' => true,
            'horizontal_alignment' => \Aspose\PDF\Model\HorizontalAlignment::CENTER,
            'file_name' => $this->configParams['IMAGE_FOOTER_FILE'],
            'width' => 24,
            'height' => 24,
        ));
        $resultFooter = $this->pdfApi->postDocumentImageFooter($this->configParams['PDF_DOCUMENT_NAME'], $imageFooter);

        if ($resultFooter->getCode() === 200) {
            echo 'Successfully appended image footer ' . $this->configParams['IMAGE_FOOTER_FILE'];
        }
        else
            throw new Error("Unexpected error : can't append image footer!");
    }
}

function main() {
    global $configParams;

    try {
        $pdfHeaderFooter = new PdfHeaderFooter($configParams);
        $pdfHeaderFooter->uploadDocument();
        $pdfHeaderFooter->uploadFile($configParams['IMAGE_FOOTER_FILE']);
        $pdfHeaderFooter->addImageFooter();
        $pdfHeaderFooter->downloadResult();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();
