<?php

require __DIR__.'/../../vendor/autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Model\TextFooter;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'testData/',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'FOOTER_VALUE' => 'New Footer Value',
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

    public function uploadDocument() {
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['PDF_DOCUMENT_NAME'];
        $response = $this->pdfApi->uploadFile($this->configParams['PDF_DOCUMENT_NAME'], $filePath);
        if (count($response->getUploaded()) === 1) {
            echo "Uploaded file: {$filePath}\n";
        } else {
            echo 'Failed to upload file.';
        }
    }

    public function downloadResult() {
        $response = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];
        $response->rewind();
        $content = $response->fread($response->getSize());
        file_put_contents($filePath, $content);
        echo "Downloaded: {$filePath}\n";
    }

    public function addTextFooter () {
        $textFooter = new TextFooter(array(
            'background' => true,
            'value' => $this->configParams['FOOTER_VALUE'],
            'horizontal_alignment' => \Aspose\PDF\Model\HorizontalAlignment::CENTER,
        ));
        $resultFooter = $this->pdfApi->postDocumentTextFooter($this->configParams['PDF_DOCUMENT_NAME'], $textFooter);

        if ($resultFooter->getCode() === 200) {
            echo 'Successfully appended text footer "' . $this->configParams['FOOTER_VALUE'] . '"';
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
        $pdfHeaderFooter->addTextFooter();
        $pdfHeaderFooter->downloadResult();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();