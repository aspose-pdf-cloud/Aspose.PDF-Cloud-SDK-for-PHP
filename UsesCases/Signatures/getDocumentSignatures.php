<?php

require __DIR__.'/../../vendor/autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => "testData/",
    'PDF_DOCUMENT_NAME' => "adbe.x509.rsa_sha1.valid.pdf",
];

class PdfSignatures {
    private $pdfApi;
    private $config;

    private function _create_rest_api() {
        $credentials = json_decode(file_get_contents("./settings/credentials.json"), true);

        $configAuth = new Configuration();
        $configAuth->setClientSecret($credentials['client_secret']);
        $configAuth->setClientId($credentials['client_id']);

        $this->pdfApi = new PdfApi(null, $configAuth);
     }

    public function __construct($config) {
        $this->config = $config;
        $this->_create_rest_api();
    }

    public function uploadDocument() {
        $filePath = $this->config['LOCAL_FOLDER'] . $this->config['PDF_DOCUMENT_NAME'];
        $this->pdfApi->uploadFile($this->config['PDF_DOCUMENT_NAME'], $filePath);
        echo "File: '{$this->config['PDF_DOCUMENT_NAME']}' successfully uploaded.\n";
    }

    private function _showSignatureFieldsArray($fields): void {
        if (empty($fields->getList())) {
            echo "Signature fields are empty!";
        } else {
            foreach ($fields->getList() as $item) {
                echo "Signature field ID: '" . $item->getSignature()->getContact() . "'";
            }
        }
    }

    public function getSignatureFields(): void {
        if ($this->pdfApi) {
            $response = $this->pdfApi->getDocumentSignatureFields($this->config['PDF_DOCUMENT_NAME']);
            if ($response->getCode() === 200) {
                echo "getSignatureFields(): Signature fields successfully extracted from '" . $this->config['PDF_DOCUMENT_NAME'] . "':";
                $this->_showSignatureFieldsArray($response->getFields());
            } else
                echo "getSignatureFields(): Failed to extract signatures. Response code: " . $response->code;
        }
    }
}

try {
    $signatures = new PdfSignatures($configParams);
    $signatures->uploadDocument();
    $signatures->getSignatureFields();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
