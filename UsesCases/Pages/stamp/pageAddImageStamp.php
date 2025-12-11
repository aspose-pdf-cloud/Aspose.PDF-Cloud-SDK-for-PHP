<?php

require __DIR__.'/../../../vendor/autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Model\Stamp;
use Aspose\PDF\Model\StampType;
use Aspose\PDF\Model\HorizontalAlignment;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'testData/',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'IMAGE_STAMP_FILE' => "sample.png",
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'PAGE_NUMBER' => 2,     // Your document page number...
    'TEXT_STAMP_VALUE' => "NEW TEXT STAMP",
    'IMAGE_STAMP_LLY' => 600,
    'IMAGE_STAMP_WIDTH' => 24,
    'IMAGE_STAMP_HEIGHT' => 24,
];

class PdfPages {
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

    public function uploadFile($fileName) {
        $filePath = $this->configParams['LOCAL_FOLDER'] . $fileName;
        $this->pdfApi->uploadFile($fileName, $filePath);
    }

    public function uploadDocument() {
        $this->uploadFile($this->configParams['PDF_DOCUMENT_NAME']);
    }

    public function downloadResult() {
        $changedPdfData = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];
        $changedPdfData->rewind();
        $content = $changedPdfData->fread($changedPdfData->getSize());
        file_put_contents($filePath, $content);
        echo "Downloaded: " . $filePath . "\n";
    }

    public function addPageImageStamp () {
        $pageStamp = new Stamp();
        $pageStamp->setType(StampType::IMAGE);
        $pageStamp->setBackground(true);
        $pageStamp->setHorizontalAlignment(HorizontalAlignment::CENTER);
        $pageStamp->setValue($this->configParams['TEXT_STAMP_VALUE']);
        $pageStamp->setPageIndex($this->configParams['PAGE_NUMBER']);
        $pageStamp->setFileName($this->configParams['IMAGE_STAMP_FILE']);
        $pageStamp->setYIndent($this->configParams['IMAGE_STAMP_LLY']);
        $pageStamp->setWidth($this->configParams['IMAGE_STAMP_WIDTH']);
        $pageStamp->setHeight($this->configParams['IMAGE_STAMP_HEIGHT']);
        
       $resultPages = $this->pdfApi->putPageAddStamp($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['PAGE_NUMBER'], $pageStamp);

        if ($resultPages->getCode() == 200)
            echo "Image Stamp appended successfully!";
        else
            echo "Unexpected error : can't append stamp!!!";
    }
}

function main() {
    global $configParams;

    try {
        $pdfPages = new PdfPages($configParams);
        $pdfPages->uploadDocument();
        $pdfPages->uploadFile($configParams['IMAGE_STAMP_FILE']);
        $pdfPages->addPageImageStamp();
        $pdfPages->downloadResult();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();