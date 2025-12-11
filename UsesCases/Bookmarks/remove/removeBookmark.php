<?php

require __DIR__.'/../../../vendor/autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'testData/',
    'PDF_DOCUMENT_NAME' => 'PdfWithBookmarks.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'DROP_BOOKMARK_PATH' => '/1',
];

class PdfBookmarks {
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
            echo "Uploaded file: {$this->configParams['PDF_DOCUMENT_NAME']}\n";
        } else {
            echo "Failed to upload file.";
        }
    }

    public function downloadResult() {
        $response = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];

        if ($response != null) {
            $response->rewind();
            $content = $response->fread($response->getSize());
            file_put_contents($filePath, $content);
            echo "Downloaded: $filePath\n";
        } else {
            echo "Failed to download file.";
        }
    }

    public function deleteBookmark() {
        $response = $this->pdfApi->deleteBookmark($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['DROP_BOOKMARK_PATH']);

        if ($response->getCode() === 200) {
            echo "Bookmark '{$this->configParams['DROP_BOOKMARK_PATH']} successfully deleted!";
        }
    }
}

function main() {
    global $configParams;

    try {
        $pdfBookmarks = new PdfBookmarks($configParams);
        $pdfBookmarks->uploadDocument();
        $pdfBookmarks->deleteBookmark();
        $pdfBookmarks->downloadResult();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();
