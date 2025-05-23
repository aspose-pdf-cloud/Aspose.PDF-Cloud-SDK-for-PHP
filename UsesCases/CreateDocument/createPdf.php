<?php

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

// Загрузка JSON с учетными данными
$credentials = json_decode(file_get_contents(__DIR__ . '/../../../Credentials/credentials.json'), true);

$configParams = [
    "LOCAL_FOLDER" => "C:\\Samples\\",
    "TEMP_FOLDER" => "TempPdfCloud",
    "LOCAL_RESULT_DOCUMENT_NAME" => "output_sample.pdf",
    "PAGE_WIDTH" => 590,
    "PAGE_HEIGHT" => 894,
    "PAGES_COUNT" => 5,
];

class PdfPageChanges
{
    private $pdfApi;
    private $configParams;

    private function _create_rest_api() {
        $credentials = json_decode(file_get_contents("../../../../Credentials/credentials.json"), true);

        $configAuth = new Configuration();
        $configAuth->setAppKey($credentials['key']);
        $configAuth->setAppSid($credentials['id']);

        $this->pdfApi = new PdfApi(null, $configAuth);
    }

    public function __construct($config) {
        $this->configParams = $config;
        $this->_create_rest_api();
    }

    public function downloadResult()
    {
        $fileName = $this->configParams["TEMP_FOLDER"] . DIRECTORY_SEPARATOR . $this->configParams["LOCAL_RESULT_DOCUMENT_NAME"];
        $changedPdfData = $this->pdfApi->downloadFile($fileName);
        $filePath = $this->configParams["LOCAL_FOLDER"] . DIRECTORY_SEPARATOR . $this->configParams["LOCAL_RESULT_DOCUMENT_NAME"];
        file_put_contents($filePath, $changedPdfData->getBody());
        echo "Downloaded: " . $filePath . PHP_EOL;
    }

    public function createPdfDocument()
    {
        $pdfConfig = new \Aspose\PDF\Model\DocumentConfig();
        $pdfConfig->setPagesCount($this->configParams["PAGES_COUNT"]);

        $displayProps = new \Aspose\PDF\Model\DisplayProperties();
        $displayProps->setCenterWindow(true);
        $displayProps->setHideMenuBar(true);
        $displayProps->setDirection(\Aspose\PDF\Model\Direction::L2_R);
        $displayProps->setDisplayDocTitle(true);
        $displayProps->setHideToolBar(true);
        $displayProps->setHideWindowUI(true);
        $displayProps->setNonFullScreenPageMode(\Aspose\PDF\Model\PageMode::USE_THUMBS);
        $displayProps->setPageLayout(\Aspose\PDF\Model\PageLayout::TWO_PAGE_LEFT);
        $displayProps->setPageMode(\Aspose\PDF\Model\PageMode::USE_THUMBS);
        $pdfConfig->setDisplayProperties($displayProps);

        $docProps = new \Aspose\PDF\Model\DocumentProperties();
        $docProp = new \Aspose\PDF\Model\DocumentProperty();
        $docProp->setBuiltIn(false);
        $docProp->setName("prop1");
        $docProp->setValue("Val1");
        $docProps->setList([$docProp]);
        $pdfConfig->setDocumentProperties($docProps);

        $defaultPageConfig = new \Aspose\PDF\Model\DefaultPageConfig();
        $defaultPageConfig->setWidth($this->configParams["PAGE_WIDTH"]);
        $defaultPageConfig->setHeight($this->configParams["PAGE_HEIGHT"]);
        $pdfConfig->setDefaultPageConfig($defaultPageConfig);

        $response = $this->pdfApi->postCreateDocument(
            $this->configParams["LOCAL_RESULT_DOCUMENT_NAME"],
            $pdfConfig,
            null,
            $this->configParams["TEMP_FOLDER"]
        );

        echo "Document #" . $this->configParams["LOCAL_RESULT_DOCUMENT_NAME"] . " created." . PHP_EOL;
        return $response;
    }
}

try {
    $pdfManager = new PdfPageChanges($pdfApi, $configParams);
    $pdfManager->createPdfDocument();
    $pdfManager->downloadResult();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
