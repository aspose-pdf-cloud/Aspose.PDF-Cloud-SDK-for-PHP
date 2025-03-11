<?php

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Api\PdfApi;

$configParams = [
    'LOCAL_FOLDER' => 'C:\\Samples\\',
    'PDF_DOCUMENT_NAME' => 'sample.pdf',
    'LOCAL_RESULT_DOCUMENT_NAME' => 'output_sample.pdf',
    'PAGE_NUMBER' => 2,                                                         // Your document page number...
    'LINK_REMOVE_ID' => 'GI5UO32UN5KVESKBMN2GS33OHMZTEMJMGUYDQLBTGYYCYNJSGE',   // Your link ID to replace...
    'NEW_LINK_ACTION' => 'https://reference.aspose.cloud/pdf/#/',               // Your new link action for link ID...
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

    public function show_links($links, $prefix) {
        if (is_array($links) && count($links) > 0)
        {
            foreach ($links as $link) {
                echo $prefix . " => '" . $link->id . "', '" . $link->action;
            }
        }
    }
        
    public function get_link_by_id() {
        $result_link = $this->pdfApi->getPageLinkAnnotation($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['PAGE_NUMBER'], $this->configParams['LINK_FIND_ID']);

        if ($result_link->code == 200) {
            $this->show_links([ $result_link->link ], 'found');
            return$result_link->link;
        }
        else{
            echo "Unexpected error : can't get link!!!";
            return null;
        }
    }

    public function replace_link () {
        $link = $this->get_link_by_id($this->configParams['LINK_REMOVE_ID']);

        if ($link)
        {
            $link->action = $this->configParams['LNEW_LINK_ACTION'];
            
            $update_response = $this->pdfApi->putLinkAnnotation($this->configParams['PDF_DOCUMENT_NAME'], $this->configParams['LINK_REMOVE_ID'], $link);

            if ($update_response->code == 200) {
                $this->show_links( [ $update_response->link ], "drop");
                return $update_response->link;
            }
            else{
                echo "Unexpected error : can't append link!!!";
                return null;
            }
        }
        else {
            echo "Unexpected error : can't get link!!!";
            return null;
        }
    }
}

$pdfLinks = new PdfLinks($configParams, $pdfApi);

try {
    $pdfLinks->upload_document();
    $pdfLinks->replace_link();
    $pdfLinks->download_result();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}