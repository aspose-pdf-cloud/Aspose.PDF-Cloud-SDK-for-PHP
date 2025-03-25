<?php

require 'vendor/autoload.php'; // Подключение автозагрузки Composer

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'C:\\Samples\\',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'PAGE_NUMBER' => 2,
];

class PdfTables {
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

    public function uploadDocument() {
        $fileNamePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['PDF_DOCUMENT_NAME'];
        $pdfFileData = file_get_contents($fileNamePath);
        $this->pdfApi->uploadFile($this->configParams['PDF_DOCUMENT_NAME'], $pdfFileData);
    }

    public function downloadResult() {
        $changedPdfData = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];
        file_put_contents($filePath, $changedPdfData);
        echo "Downloaded: " . $filePath . "\n";
    }

    private function _init_table() {
        $numOfCols = 5;
        $numOfRows = 5;
    
        $headerTextState = [
            "font" => "Arial Bold",
            "fontSize" => 11,
            "foregroundColor" => ["a" => 0xFF, "r" => 0xFF, "g" => 0xFF, "b" => 0xFF],
            "fontStyle" => "Bold"
        ];
    
        $commonTextState = [
            "font" => "Arial Bold",
            "fontSize" => 11,
            "foregroundColor" => ["a" => 0xFF, "r" => 0x70, "g" => 0x70, "b" => 0x70]
        ];
    
        $table = new \Aspose\PDF\Model\Table();
        $table->setRows([]);
        $table->setColumnWidths(str_repeat(" 70", $numOfCols));
    
        $borderTableBorder = new \Aspose\PDF\Model\GraphInfo();
        $borderTableBorder->setColor(["a" => 0xFF, "r" => 0x00, "g" => 0xFF, "b" => 0x00]);
        $borderTableBorder->setLineWidth(0.5);
    
        $table->setDefaultCellBorder([
            "top" => $borderTableBorder,
            "right" => $borderTableBorder,
            "bottom" => $borderTableBorder,
            "left" => $borderTableBorder,
            "roundedBorderRadius" => 0
        ]);
        $table->setLeft(150);
        $table->setTop(250);
    
        for ($rowIndex = 0; $rowIndex < $numOfRows; $rowIndex++) {
            $row = new \Aspose\PDF\Model\Row();
            $row->setCells([]);
    
            for ($colIndex = 0; $colIndex < $numOfCols; $colIndex++) {
                $cell = new \Aspose\PDF\Model\Cell();
                $cell->setDefaultCellTextState($commonTextState);
    
                if ($rowIndex == 0) {
                    $cell->setBackgroundColor(["a" => 0xFF, "r" => 0x80, "g" => 0x80, "b" => 0x80]);
                    $cell->setDefaultCellTextState($headerTextState);
                } else {
                    $cell->setBackgroundColor(["a" => 0xFF, "r" => 0xFF, "g" => 0xFF, "b" => 0xFF]);
                }
    
                $textRect = new \Aspose\PDF\Model\TextRect();
                $textRect->setText($rowIndex == 0 ? "header #" . $colIndex : "value #(" . $rowIndex . "," . $colIndex . ")");
                $cell->setParagraphs([$textRect]);
    
                $row->getCells()[] = $cell;
            }
            $table->getRows()[] = $row;
        }
        return $table;
    }

    public function addTableOnPage() {
        $newTable = $this->_init_table();

        $resultTabs = $this->pdfApi->postPageTables($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['PAGE_NUMBER'], [$newTable]);
    
        if ($resultTabs->getCode() == 200) {
            echo "New table successfully appended.\n";
            var_dump($newTable);
        } else {
            echo "Unexpected error: can't append new table !!!\n";
        }
    }
}

function main() {
    global $configParams;
    $pdfTables = new PdfTables($configParams);
    try {
        $pdfTables->uploadDocument();
        $pdfTables->addTableOnPage();
        $pdfTables->downloadResult();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();