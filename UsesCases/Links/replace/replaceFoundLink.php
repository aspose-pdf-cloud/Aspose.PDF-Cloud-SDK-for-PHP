<?php

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;
use Aspose\PDF\Model\LinkAnnotation;

$configParams = [
    'LOCAL_FOLDER' => 'C:\\Samples\\',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'PAGE_NUMBER' => 2,                                                         // Your document page number...
    'LINK_REMOVE_ID' => 'GI5UO32UN5KVESKBMN2GS33OHMZTEMJMGUYDQLBTGYYCYNJSGE',   // Your link ID to replace...
    'NEW_LINK_ACTION' => 'https://reference.aspose.cloud/pdf/#/',               // Your new link action for link ID...
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

    public function getPageLinkById(): ?LinkAnnotation {
        $result_link = $this->pdfApi->getPageLinkAnnotation($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['PAGE_NUMBER'], $this->configParams['LINK_FIND_ID']);

        if ($result_link->getCode() == 200) {
            echo "Found link:";
            var_dump($result_link->getLink());
            return $result_link->getLink();
        }
        else{
            echo "Unexpected error : can't get link!!!";
            return NULL;
        }
    }

    public function replaceLinkById() {
        $link = $this->getPageLinkById($this->configParams['LINK_REMOVE_ID']);

        if ($link)
        {
            $link->setAction($this->configParams['LNEW_LINK_ACTION']);
            
            $update_response = $this->pdfApi->putLinkAnnotation($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['LINK_REMOVE_ID'], $link);

            if ($update_response->getCode() == 200) {
                echo "Link '" . $this->configParams['LINK_REMOVE_ID'] . "' was replaced !";
            }
            else
                echo "Unexpected error : can't replace link!!!";
        }
        else {
            echo "Unexpected error : can't get link!!!";
            return null;
        }
    }
}

$pdfLinks = new PdfLinks($configParams, $pdfApi);

try {
    $pdfLinks->uploadDocument();
    $pdfLinks->replaceLinkById();
    $pdfLinks->downloadResult();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
