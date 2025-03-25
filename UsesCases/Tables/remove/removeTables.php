<?php

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'C:\\Samples\\',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'TABLE_ID' => "GE5TCOZSGAYCYNRQGUWDINZVFQ3DGMA",
    'PAGE_NUMBER' => 2,
];

class PdfTables {
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

    public function getAllTablesInfo () {
        $resultTables = $this->pdfApi->getDocumentTables($this->configParams['PDF_DOCUMENT_NAME']);

        if ($resultTables->getCode() == 200) {
            echo "All tables:";
            var_dump($resultTables->getTables()->getList());
        }
        else
            echo "Unexpected error : can't get tables !!!\n";
    }
       
    public function deleteTable () {
        $resultTables = $this->pdfApi->deleteTable($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['TABLE_ID']);
        
        if ($resultTables->getCode() == 200)
            echo "Table #{$this->configParams['TABLE_ID']} deleted!\n";
        else
            echo "Unexpected error : can't delete table !\n";
    }

    public function deleteTablesOnPage () {
        $resultTables = $this->pdfApi->deletePageTables($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['PAGE_NUMBER']);

        if ($resultTables->getCode() == 200)
            echo "Tables on page #{$this->configParams['PAGE_NUMBER']} deleted!\n";
        else
            echo "Unexpected error : can't delete tables!!!\n";
    }
}

function main() {
    global $configParams;

    try {
        $pdfTables = new PdfTables($configParams);
        $pdfTables->uploadDocument();

        $pdfTables->getAllTablesInfo();
        $pdfTables->deleteTable();
        $pdfTables->getAllTablesInfo();

        $pdfTables->deleteTablesOnPage();
        $pdfTables->getAllTablesInfo();

        $pdfTables->downloadResult();
    } catch (\Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();