<?php

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Api\PdfApi;

// Load credentials. Format must be {"id": "*****", "key": "****"}
$credentials = json_decode(file_get_contents(__DIR__ . '/../../../Credentials/credentials.json'), true);

$localFolder = "C:\\Samples\\";
$pdfDocument = "output_sample.pdf";

// Create Pdf Rest API object
$pdfApi = new PdfApi($credentials["id"], $credentials["key"]);

try {
    // Create empty Pdf document
    $response = $pdfApi->putCreateDocument($pdfDocument, null, null);
    
    if ($response->getCode() === 200) {
        echo "Document #" . $pdfDocument . " successfully created." . PHP_EOL;

        // Download empty Pdf document to local folder
        $downloaded = $pdfApi->downloadFile($pdfDocument);

        $filePath = $localFolder . DIRECTORY_SEPARATOR . $pdfDocument;
        file_put_contents($filePath, $downloaded->getBody());

        echo "Downloaded: " . $filePath . PHP_EOL;
    } else {
        echo "Failed to create empty PDF document '" . $pdfDocument . "'!" . PHP_EOL;
    }

} catch (Exception $e) {
    // Catch any exceptions
    echo "Failed to create empty PDF document '" . $pdfDocument . "'!" . PHP_EOL;
    echo "Error: " . $e->getMessage() . PHP_EOL;
}