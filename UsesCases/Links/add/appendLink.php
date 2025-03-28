<?php

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Model\Color;
use Aspose\PDF\Model\Link;
use Aspose\PDF\Model\Rectangle;
use Aspose\PDF\Model\LinkAnnotation;
use Aspose\PDF\Model\LinkHighlightingMode;
use Aspose\PDF\Model\LinkActionType;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'C:\\Samples\\',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'NEW_LINK_ACTION' => 'https://reference.aspose.cloud/pdf/#/',
    'PAGE_NUMBER' => 2,     // Your document page number...
    'LINK_POS_LLX' => 244.914,
    'LINK_POS_LLY' => 488.622,
    'LINK_POS_URX' => 284.776,
    'LINK_POS_URY' => 498.588,
];

class PdfLinks {
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
        $pdfFilePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['PDF_DOCUMENT_NAME'];
        $pdfFileData = file_get_contents($pdfFilePath);
        $this->pdfApi->uploadFile($this->configParams['PDF_DOCUMENT_NAME'], $pdfFileData);
    }

    public function downloadResult() {
        $changedPdfData = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];
        file_put_contents($filePath, $changedPdfData);
        echo "Downloaded: " . $filePath . "\n";
    }

    public function appendLinkOnPage() {
        $linkColor = new Color(['a' => 255, 'r' => 0, 'g' => 255, 'b' => 0]);

        $linkRectangle = new Rectangle();
        $linkRectangle->setLLX($this->configParams['LINK_POS_LLX']);
        $linkRectangle->setLLY($this->configParams['LINK_POS_LLY']);
        $linkRectangle->setURX($this->configParams['LINK_POS_URX']);
        $linkRectangle->setURY($this->configParams['LINK_POS_URY']);

        $linkItem = new Link(['rel' => "self"]);

        $newLink = new LinkAnnotation();
        $newLink->setLinks([$linkItem]);
        $newLink->setActionType(LinkActionType::GO_TO_URI_ACTION);
        $newLink->setAction($this->configParams['NEW_LINK_ACTION']);
        $newLink->setHighlighting(LinkHighlightingMode::INVERT);
        $newLink->setColor($linkColor);
        $newLink->setRect($linkRectangle);

        $addResponse = $this->pdfApi->postPageLinkAnnotations($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['PAGE_NUMBER'], [$newLink]);

        if ($addResponse->getCode() == 200) {
            echo "Append link successful!\n";
            return true;
        }
    }
}

function main() {
    global $configParams;

    try {
        $pdfLinks = new PdfLinks($configParams);
        $pdfLinks->uploadDocument();
        $pdfLinks->appendLinkOnPage();
        $pdfLinks->downloadResult();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();
