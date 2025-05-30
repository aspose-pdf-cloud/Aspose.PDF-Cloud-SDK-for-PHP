<?php

require_once __DIR__ . '\comparesHelper.php';

$configParams = [
    'LOCAL_FOLDER'   => "C:\\Samples\\",
    'REMOTE_FOLDER'  => "Your_Temp_Pdf_Cloud",
    'PDF_DOCUMENT_1' => "sample_compare_1.pdf",
    'PDF_DOCUMENT_2' => "sample_compare_2.pdf",
    'PDF_OUTPUT'     => "output_compare.pdf"
];

$helper = new PdfComparesHelper($pdfApi);

class PdfCompares
{
    private $helper;
    private $api;
    private $config;

    public function __construct($helper, $api, $config)
    {
        $this->helper = $helper;
        $this->api = $api;
        $this->config = $config;
    }

    public function comparePdfDocuments($document1, $document2, $outputDocument)
    {
        $this->helper->uploadFile($document1, $this->config['LOCAL_FOLDER'], $this->config['REMOTE_FOLDER']);
        $this->helper->uploadFile($document2, $this->config['LOCAL_FOLDER'], $this->config['REMOTE_FOLDER']);

        $remotePdf1 = $this->helper->joinPath($this->config['REMOTE_FOLDER'], $document1);
        $remotePdf2 = $this->helper->joinPath($this->config['REMOTE_FOLDER'], $document2);
        $remotePdfOut = $this->helper->joinPath($this->config['REMOTE_FOLDER'], $outputDocument);

        $response = $this->api->postComparePdf($remotePdf1, $remotePdf2, $remotePdfOut);

        if ($response->getCode() == 200) {
            echo "Compare was successfully finished in '{$outputDocument}' file.\n";
            $this->helper->downloadResult($outputDocument, $this->config['LOCAL_FOLDER'], $this->config['REMOTE_FOLDER']);
        }
    }
}
