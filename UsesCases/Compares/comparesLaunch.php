<?php

require_once __DIR__ . '\comparePdfDocuments.php';

try {
    $comparer = new PdfCompares($helper, $pdfApi, $configParams);
    $comparer->comparePdfDocuments(
        $configParams['PDF_DOCUMENT_1'],
        $configParams['PDF_DOCUMENT_2'],
        $configParams['PDF_OUTPUT']
    );
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

?>
