<?php

require __DIR__.'\..\..\vendor\autoload.php';

use \Aspose\PDF\Configuration;
use \Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'C:\\Samples\\',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'BOOKMARK_PATH' => '/5',
];

class PdfBookmarks {
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

        $response = $this->pdfApi->uploadFile($this->configParams['PDF_DOCUMENT_NAME'], $fileData);
        if ($response->getCode() === 200) {
            echo "Uploaded file: {$this->configParams['PDF_DOCUMENT_NAME']}\n";
        } else {
            echo "Failed to upload file.";
        }
    }

    public function getBookmarkByPath()  {
        $resultBookmark = $this->pdfApi->getBookmarks($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['BOOKMARK_PATH']);
        if ($resultBookmark->getCode() === 200) 
            echo "Found bookmark title: {$resultBookmark->getBookmark()->getTitle()}";
        else
            echo "Unexpected error : Bookmark not found!";
    }
}

function main() {
    global $configParams;

    try {
        $pdfBookmarks = new PdfBookmarks($configParams);
        $pdfBookmarks->uploadDocument();
        $pdfBookmarks->getBookmarkByPath();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();
