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
    'NEW_BOOKMARK_TITLE' => '• Increased performance',
    'PARENT_BOOKMARK_FOR_APPEND' => '',  // Specify an empty string when adding a bookmark to the root 
    'NEW_BOOKMARK_PAGE_NUMBER' => 2,
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

    public function appendBookmarkLink() {
        $bookmarkLink = new Link(['rel' => 'self']);
        $bookmarkColor = new Color(['a' => 255, 'r' => 0, 'g' => 255, 'b' => 0]);

        $newBookmark = new Bookmark([
            'title' => $this->configParams['NEW_BOOKMARK_TITLE'],
            'italic' => true,
            'bold' => false,
            'links' => [$bookmarkLink],
            'color' => $bookmarkColor,
            'action' => 'GoTo',
            'level' => 1,
            'pageDisplayLeft' => 83,
            'pageDisplayTop' => 751,
            'pageDisplayZoom' => 2,
            'pageNumber' => $this->configParams['NEW_BOOKMARK_PAGE_NUMBER']
        ]);

        $response = $this->pdfApi->postBookmark($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['PARENT_BOOKMARK_FOR_APPEND'], [$newBookmark]);

        if ($response->getCode() === 200 && null !== $response->getBookmarks()->getList()) {
            $bookmarks = $response->getBookmarks()->getList();
            $addedBookmark = end($bookmarks);
            echo "Appended bookmark: {$addedBookmark->getLinks()[0]->getHref()} => {$addedBookmark->getTitle()}\n";
            return $addedBookmark;
        } else {
            echo "Failed to append bookmark.";
        }
    }
}

function main() {
    global $pdfApi, $configParams;

    try {
        $pdfBookmarks = new PdfBookmarks($pdfApi, $configParams);
        $pdfBookmarks->uploadDocument();
        $pdfBookmarks->appendBookmarkLink();
        $pdfBookmarks->downloadResult();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();