<?php

require 'vendor/autoload.php'; // Подключение автозагрузки Composer

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'testData/',
    'PDF_DOCUMENT_NAME' => 'PdfWithTable.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'TABLE_ID' => "GE5TIMJ3HEYCYOBTFQ2TANZMG43TA",
];

class PdfTables {
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

    public function uploadDocument() {
        $fileNamePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['PDF_DOCUMENT_NAME'];
        $this->pdfApi->uploadFile($this->configParams['PDF_DOCUMENT_NAME'], $fileNamePath);
    }

    public function downloadResult() {
        $changedPdfData = $this->pdfApi->downloadFile($this->configParams['PDF_DOCUMENT_NAME']);
        $filePath = $this->configParams['LOCAL_FOLDER'] . $this->configParams['LOCAL_RESULT_DOCUMENT_NAME'];
        $changedPdfData->rewind();
        $content = $changedPdfData->fread($changedPdfData->getSize());
        file_put_contents($filePath, $content);
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
    
        $rows = array();
        for ($rowIndex = 0; $rowIndex < $numOfRows; $rowIndex++) {
            $row = new \Aspose\PDF\Model\Row();
            $cells = array();
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
    
                $cells[] = $cell;
            }

            $row->setCells($cells);
            $rows[] = $row;
        }

        $table->setRows($rows);
        return $table;
    }

    public function replaceTable() {
        $newTable = $this->_init_table();

        $resultTabs = $this->pdfApi->putTable($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['TABLE_ID'], $newTable);
    
        if ($resultTabs->getCode() == 200) {
            echo "New table successfully replaced.\n";
            var_dump($newTable);
        } else {
            echo "Unexpected error: can't replace table !!!\n";
        }
    }
}

function main() {
    global $configParams;
    $pdfTables = new PdfTables($configParams);
    try {
        $pdfTables->uploadDocument();
        $pdfTables->replaceTable();
        $pdfTables->downloadResult();
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage() . "\n";
    }
}

main();