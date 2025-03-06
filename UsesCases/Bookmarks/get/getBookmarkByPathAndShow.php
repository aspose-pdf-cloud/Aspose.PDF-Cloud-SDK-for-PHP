<?php

namespace Aspose\PDF;

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Configuration;

$credentials = json_decode(file_get_contents(__DIR__.'../../../credentials.json'), true);

$configParams = [
    'LOCAL_FOLDER' => 'C:\\Samples\\',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'BOOKMARK_PATH' => '/5',
];

// API Initialization...
$configAuth = new Configuration();
$configAuth->setAppKey($credentials['key']);
$configAuth->setAppSid($credentials['id']);

$pdfApi = new PdfApi(null, $configAuth, null);

class PdfBookmarks {
    private $pdfApi;
    private $configParams;

    public function __construct($pdfApi, $configParams) {
        $this->pdfApi = $pdfApi;
        $this->configParams = $configParams;
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
        $resultBookmark = $this->pdfApi->getBookmark($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['BOOKMARK_PATH']);
        if ($resultBookmark->getCode() === 200) 
        {
            echo "Found bookmark title: {$resultBookmark->bookmark->title}";
            return $resultBookmark->bookmark;
        }
    }
}

function main() {
    global $pdfApi, $configParams;

    try {
        $pdfBookmarks = new PdfBookmarks($pdfApi, $configParams);
        $pdfBookmarks->uploadDocument();
        $pdfBookmarks->getBookmarkByPath();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();