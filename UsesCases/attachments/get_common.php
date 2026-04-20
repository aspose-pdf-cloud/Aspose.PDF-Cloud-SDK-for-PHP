<?php
/*****************************************************************************************************************
    1. Import required libraries
    2. Define callback functiions for read attachments from Pdf file and append new attachment into this Pdf file
    3. Initialize credentials for calling Pdf.Cloud.Python REST API functions
    4. Initialize Pdf ile name
    5. Create Pdf.Cloud.Python REST API object
    6. Perform reading attachments from Pdf file using get_document_attachments() fiunction
    7. Initialize new AttachmentInfo object
    8. Perform appending attachment into Pdf file using post_add_document_attachment() function
    
    All values of variables starting with "YOUR_****" should be replaced by real user values
********************************************************************************************************************/

require_once 'src\Aspose\PDF\Api\PdfApi.php';  // Path to Your PdfApi.php

use src\Aspose\PDF\Api\PdfApi;
use src\Aspose\PDF\Configuration;

$config = new Configuation();
$config->setAppKey('YOUR_APP_KEY');
$config->setAppSID('YOUR_APP_SID');

$pdfApi = new PdfApi(null, $config);

$fileName = 'YOUR_PDF_FILE_WITH_PATH.pdf';
uploadFile($name);

$attachmentIndex = 0;

$response = $pdfApi->getDocumentAttachmentByIndex($fileName, $attachmentIndex);

if ($response->getCode() === 200) {
    $attachment = $response->getAttachment();
    echo "Attachment Name: " . $attachment->getName() . "\n";
    echo "Attachment MimeType: " . $attachment->getMimeType() . "\n";
    echo "Attachment Description: " . $attachment->getDescription() . "\n";
} else {
    echo "Error: Unable to retrieve attachment.\n";
}

function uploadFile($fileName) 
{
    $path = dirname($fileName);
	$file = basename($fileName);
	$result = $pdfApi->uploadFile($Path=$path, $file);
    if ($response->getSta)
} 

?>
