<?php

require_once 'vendor/autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Model\CryptoAlgorithm;
use Aspose\PDF\Api\PdfApi;

$credentials = json_decode(file_get_contents(__DIR__ . "/../../../Credentials/credentials.json"), true);

$configParams = [
    'LOCAL_FOLDER' => 'C:\\Samples\\',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'ENCRYPT_ALGORITHM' => CryptoAlgorithm::AE_SX256,
    'USER_PASSWORD' => 'User-Password',
    'OWNER_PASSWORD' => 'Owner-Password',
];

class PdfEncoder {
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

    public function uploadDocument() {
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['PDF_DOCUMENT_NAME'];
        $fileData = file_get_contents($filePath);

        $this->pdfApi->uploadFile($this->configParams['PDF_DOCUMENT_NAME'], $fileData);
        echo "File: '{$this->configParams['PDF_DOCUMENT_NAME']}' successfully uploaded.\n";
    }

    public function downloadResult() {
        $result = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $outputPath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];
        file_put_contents($outputPath, $result['body']);
        echo "Downloaded: {$outputPath}\n";
    }

    public function encryptDocument() {
        $userPassword = base64_encode($this->configParams['USER_PASSWORD']);
        $ownerPassword = base64_encode($this->configParams['OWNER_PASSWORD']);

        $response = $this->pdfApi->postEncryptDocumentInStorage(
            $this->configParams['PDF_DOCUMENT_NAME'],
            $userPassword,
            $ownerPassword,
            $this->configParams['ENCRYPT_ALGORITHM']
        );

        if ($response['body']['code'] == 200) {
            echo "encryptDocument(): Document '{$this->configParams['PDF_DOCUMENT_NAME']}' successfully encrypted.\n";
        } else {
            throw new Exception("encryptDocument(): Failed to encrypt document '{$this->configParams['PDF_DOCUMENT_NAME']}'. Response code: {$response['code']}");
        }
    }
}

function main() {
    global $configParams;

    $encoder = new PdfEncoder($configParams);

    try {
        $encoder->uploadDocument();
        $encoder->encryptDocument();
        $encoder->downloadResult();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();