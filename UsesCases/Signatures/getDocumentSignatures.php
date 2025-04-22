<?php

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$config = [
    'LOCAL_FOLDER' => "C:\\Samples\\",
    'PDF_DOCUMENT_NAME' => "sample-signed.pdf",
];

class PdfSignatures {
    private $pdfApi;
    private $config;

    private function _create_rest_api() {
        $credentials = json_decode(file_get_contents("./Credentials/credentials.json"), true);

        $configAuth = new Configuration();
        $configAuth->setAppKey($credentials['key']);
        $configAuth->setAppSid($credentials['id']);

        $this->pdfApi = new PdfApi(null, $configAuth);
     }

    public function __construct($config) {
        $this->config = $config;
        $this->_create_rest_api();
    }

    public function uploadDocument() {
        $filePath = $this->config['LOCAL_FOLDER'] . $this->config['PDF_DOCUMENT_NAME'];
        $fileData = file_get_contents($filePath);

        $this->pdfApi->uploadFile($this->config['PDF_DOCUMENT_NAME'], $fileData);
        echo "File: '{$this->config['PDF_DOCUMENT_NAME']}' successfully uploaded.\n";
    }

    private function _showSignatureFieldsArray($fields): void {
        if (empty($fields->list)) {
            echo "Signature fields are empty!";
        } else {
            foreach ($fields->list as $item) {
                echo "Signature field ID: '" . $item->signature->contact . "'";
            }
        }
    }

    public function getSignatureFields(): void {
        if ($this->pdfApi) {
            $response = $this->pdfApi->getDocumentSignatureFields($this->config['PDF_DOCUMENT_NAME']);
            if ($response->code === 200) {
                echo "getSignatureFields(): Signature fields successfully extracted from '" . $this->config['PDF_DOCUMENT_NAME'] . "':";
                $this->_showSignatureFieldsArray($response->fields);
            } else
                echo "getSignatureFields(): Failed to extract signatures. Response code: " . $response->code;
        }
    }
}

try {
    $signatures = new PdfSignatures($pdfApi, $configParams);
    $signatures->uploadDocument();
    $signatures->getSignatureFields();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
