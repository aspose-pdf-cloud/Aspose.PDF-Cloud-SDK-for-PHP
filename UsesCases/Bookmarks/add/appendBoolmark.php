<?php

require __DIR__.'/../../../vendor/autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Model\Bookmark;
use Aspose\PDF\Model\Color;
use Aspose\PDF\Model\Link;
use Aspose\PDF\Model\LinkActionType;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'testData/',
    'PDF_DOCUMENT_NAME' => 'PdfWithBookmarks.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'NEW_BOOKMARK_TITLE' => '• Increased performance',
    'PARENT_BOOKMARK_FOR_APPEND' => '',  // Specify an empty string when adding a bookmark to the root 
    'NEW_BOOKMARK_PAGE_NUMBER' => 2,
];

class PdfBookmarks {
    private $pdfApi;
    private $configParams;

    private function _create_rest_api() {
        $credentials = json_decode(file_get_contents("settings/credentials.json"), true);

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

    public function appendBookmarkLink() {
        $bookmarkLink = new Link(array('rel' => 'self'));
        $bookmarkColor = new Color(array('a' => 255, 'r' => 0, 'g' => 255, 'b' => 0));

        $newBookmark = new Bookmark(array(
            'title' => $this->configParams['NEW_BOOKMARK_TITLE'],
            'italic' => true,
            'bold' => false,
            'links' => array( $bookmarkLink ),
            'color' => $bookmarkColor,
            'action' => "GoTo",
            'level' => 1,
            'page_display' => 'XYZ',
            'page_display_left' => 83,
            'page_display_top' => 751,
            'page_display_zoom' => 2,
            'page_number' => $this->configParams['NEW_BOOKMARK_PAGE_NUMBER']
        ));

        $response = $this->pdfApi->postBookmark( $this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['PARENT_BOOKMARK_FOR_APPEND'], array( $newBookmark ) );
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
    global $configParams;

    try {
        $pdfBookmarks = new PdfBookmarks($configParams);
        $pdfBookmarks->uploadDocument();
        $pdfBookmarks->appendBookmarkLink();
        $pdfBookmarks->downloadResult();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();
