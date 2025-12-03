<?php

require __DIR__.'/../../vendor/autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => "testData/",
    'PDF_DOCUMENT_NAME' => "adbe.x509.rsa_sha1.valid.pdf",
    'SIGNATURE_NAME' => 'Signature1',
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

    public function verifySignature(): void {
        if ($this->pdfApi) {
            $response = $this->pdfApi->getVerifySignature($this->config['PDF_DOCUMENT_NAME'], $this->config['SIGNATURE_NAME']);
            if ($response->getCode() === 200) {
                if ($response->getValid() == TRUE)
                    echo "verifySignature(): Signature is VALID for the '" . $this->config['PDF_DOCUMENT_NAME'] . "' document.";
                else
                    echo "verifySignature(): Signature is NOT VALID for the '" . $this->config['PDF_DOCUMENT_NAME'] . "' document.";
            }
        }
    }
}

try {
    $signatures = new PdfSignatures($configParams);
    $signatures->uploadDocument();
    $signatures->verifySignature();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
