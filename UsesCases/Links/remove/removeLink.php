<?php

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'C:\\Samples\\',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'LINK_REMOVE_ID' => 'GI5UO32UN5KVESKBMN2GS33OHMZTEMJMGUYDQLBTGYYCYNJSGE',   // Your link ID to remove...
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

    public function remove_link () {
        $result_delete = $this->pdfApi->deleteLinkAnnotation($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['LINK_REMOVE_ID']);

        if ($result_delete->getCode() == 200) {
            echo "Link '" . $this->configParams['LINK_REMOVE_ID'] . "' was deleted!";
        }
        else
            echo "Unexpected error : can't get link !!!";
    }
}

$pdfLinks = new PdfLinks($configParams, $pdfApi);

try {
    $pdfLinks->upload_document();
    $pdfLinks->remove_link();
    $pdfLinks->download_result();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
