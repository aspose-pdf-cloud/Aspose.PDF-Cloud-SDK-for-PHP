<?php

require __DIR__.'/../../vendor/autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'testData/',
    'PDF_DOCUMENT_NAME' => '4pagesEncrypted.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'DOCUMENT_PASSWORD' => 'user $^Password!&',
];

class PdfEncoder {
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
        $this->pdfApi->uploadFile($this->configParams['PDF_DOCUMENT_NAME'], $filePath);
        echo "File: '{$this->configParams['PDF_DOCUMENT_NAME']}' successfully uploaded.\n";
    }

    public function downloadResult() {
        $response = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $outputPath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];
        $response->rewind();
        $content = $response->fread($response->getSize());
        file_put_contents($outputPath, $content);
        echo "Downloaded: {$outputPath}\n";
    }

    public function decryptDocument() {
        $documentPassword = base64_encode($this->configParams['DOCUMENT_PASSWORD']);

        $response = $this->pdfApi->postDecryptDocumentInStorage(
            $this->configParams['PDF_DOCUMENT_NAME'],
            $documentPassword
        );

        if ($response->getCode() == 200) {
            echo "decryptDocument(): Document '{$this->configParams['PDF_DOCUMENT_NAME']}' successfully decryped.\n";
        } else {
            throw new Exception("decryptDocument(): Failed to decrypt document '{$this->configParams['PDF_DOCUMENT_NAME']}'. Response code: {$response['code']}");
        }
    }
}

function main() {
    global $configParams;

    $encoder = new PdfEncoder($configParams);

    try {
        $encoder->uploadDocument();
        $encoder->decryptDocument();
        $encoder->downloadResult();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();