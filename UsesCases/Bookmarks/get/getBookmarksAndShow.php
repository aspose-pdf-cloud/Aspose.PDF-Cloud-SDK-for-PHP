<?php

require __DIR__.'/../../../vendor/autoload.php';

use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Configuration;
use Aspose\PDF\Model\Bookmarks;

$configParams = [
    'LOCAL_FOLDER' => 'testData/',
    'PDF_DOCUMENT_NAME' => 'PdfWithBookmarks.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'BOOKMARK_PATH' => '/1',
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

    public function getAllBookmarks() {
        $resultBookmarks = $this->pdfApi->getBookmarks($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['BOOKMARK_PATH']);
        if ($resultBookmarks->getCode() === 200) 
        {
            echo "Bookamrks array: ";
            var_dump($resultBookmarks->getBookmarks()->getList());
        }
        else
            echo 'Unexpected error : Bokmarks not found!';
    }
}

function main() {
    global $configParams;

    try {
        $pdfBookmarks = new PdfBookmarks($configParams);
        $pdfBookmarks->uploadDocument();
        $pdfBookmarks->getAllBookmarks();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();
