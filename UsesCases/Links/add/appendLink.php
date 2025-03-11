<?php

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Model\Color;
use Aspose\PDF\Model\Link;
use Aspose\PDF\Model\Rectangle;
use Aspose\PDF\Model\LinkAnnotation;
use Aspose\PDF\Model\LinkHighlightingMode;
use Aspose\PDF\Model\LinkActionType;

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

$credentials = json_decode(file_get_contents('./Credentials/credentials.json'), true);
$pdfApi = new PdfApi($credentials['id'], $credentials['key']);

class PdfLinks {
    private $configParams;
    private $pdfApi;

    public function __construct($configParams, $pdfApi) {
        $this->configParams = $configParams;
        $this->pdfApi = $pdfApi;
    }

    public function upload_document() {
        $pdfFilePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['PDF_DOCUMENT_NAME'];
        $pdfFileData = file_get_contents($pdfFilePath);
        $this->pdfApi->uploadFile($this->configParams['PDF_DOCUMENT_NAME'], $pdfFileData);
    }

    public function download_result() {
        $changedPdfData = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];
        file_put_contents($filePath, $changedPdfData);
        echo "Downloaded: " . $filePath . "\n";
    }

    public function append_link() {
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

$pdfLinks = new PdfLinks($configParams, $pdfApi);

try {
    $pdfLinks->upload_document();
    $pdfLinks->append_link();
    $pdfLinks->download_result();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
