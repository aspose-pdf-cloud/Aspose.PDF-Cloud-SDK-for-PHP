<?php

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Model\ImageFooter;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'C:\\Samples\\',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'IMAGE_FOOTER_FILE' => 'sample.png',
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

    public function uploadFile($fileName) {
        $filePath = $this->configParams['LOCAL_FOLDER'] . $fileName;
        $fileData = file_get_contents($filePath);

        $response = $this->pdfApi->uploadFile($fileName, $fileData);
        if ($response->getCode() === 200) {
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

        if ($response->getCode() === 200) {
            file_put_contents($filePath, $response->getContents());
            echo "Downloaded: $filePath\n";
        } else {
            echo "Failed to download file.";
        }
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
