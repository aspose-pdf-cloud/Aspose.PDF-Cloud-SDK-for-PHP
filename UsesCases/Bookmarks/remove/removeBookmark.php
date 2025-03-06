<?php

namespace Aspose\PDF\Api;

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Configuration;
use Aspose\PDF\Model\Bookmark;
use Aspose\PDF\Model\Color;
use Aspose\PDF\Model\Link;

$credentials = json_decode(file_get_contents('./Credentials/credentials.json'), true);

$configParams = [
    'LOCAL_FOLDER' => 'C:\\Samples\\',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'DROP_BOOKMARK_PATH' => '/1',
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

    public function downloadResult() {
        $response = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];

        if ($response->getCode() === 200) {
            file_put_contents($filePath, $response->getContents());
            echo "Downloaded: $filePath\n";
        } else {
            echo "Failed to download file.";
        }
    }

    public function deleteBookmark() {
        $response = $this->pdfApi->deleteBookmark($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['BOOKMARK_PATH']);

        if ($response->getCode() === 200) {
            echo "Bookmark '{$this->configParams['DROP_BOOKMARK_PATH']} successfully deleted!";
        }
    }
}

function main() {
    global $pdfApi, $configParams;

    try {
        $pdfBookmarks = new PdfBookmarks($pdfApi, $configParams);
        $pdfBookmarks->uploadDocument();
        $pdfBookmarks->deleteBookmark();
        $pdfBookmarks->downloadResult();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();