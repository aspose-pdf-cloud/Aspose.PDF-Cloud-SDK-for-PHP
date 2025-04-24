<?php

require __DIR__.'\..\..\vendor\autoload.php';

use Aspose\PDF\Configuration;
use Aspose\PDF\Api\PdfApi;

$config = [
    'LOCAL_FOLDER' => "C:\\Samples\\",
    'PDF_DOCUMENT_NAME' => "sample.pdf",
    'LOCAL_RESULT_DOCUMENT_NAME' => "output_sample.pdf",
    'LOCAL_SIGNATURE_PATH' => "C:\\Samples\\Signatures\\3",
    'SIGNATURE_PFX' => "signature.pfx",
    'SIGNATURE_FORM_FIELD' => 'Signature_1',
    'SIGNATURE_PASSWORD' => 'Password',
    'SIGNATURE_CONTACT' => 'Contact',
    'SIGNATURE_LOCATION' => 'Location',
    'SIGNATURE_AUTHORITY' => 'Issuer',
    'SIGNATURE_DATE' => '04/19/2025 12:15:00.000 PM',
    'SIGNATURE_RECT' => new Aspose\PDF\Model\Rectangle(array('llx' => 100, 'lly' => 100, 'urx' => 0, 'ury' => 0))
];

class PdfSignatures {
    private $pdfApi;
    private $config;

    private function _create_rest_api() {
        $credentials = json_decode(file_get_contents("./Credentials/credentials.json"), true);

        $configAuth = new Configuration();
        $configAuth->setAppKey($credentials['key']);
        $configAuth->setAppSid($credentials['id']);

        $this->pdfApi = new PdfApi(null, $configAuth);
     }

    public function __construct($config) {
        $this->config = $config;
        $this->_create_rest_api();
    }

    public function uploadFile($folder, $fileName) {
        $filePath = $folder . DIRECTORY_SEPARATOR . $fileName;
        $data = file_get_contents($filePath);
        $this->pdfApi->uploadFile($fileName, $data);
        echo "File '$fileName' successfully uploaded!\n";
    }

    public function uploadDocument() {
        $this->uploadFile($this->config['LOCAL_FOLDER'], $this->config['PDF_DOCUMENT_NAME']);
    }

    public function downloadResult() {
        $response = $this->pdfApi->downloadFile($this->config['PDF_DOCUMENT_NAME']);
        $filePath = $this->config['LOCAL_FOLDER'] . DIRECTORY_SEPARATOR . $this->config['LOCAL_RESULT_DOCUMENT_NAME'];
        file_put_contents($filePath, $response->body);
        echo "Downloaded: $filePath\n";
    }

    public function appenSignature() {
        $signature = new \Aspose\PDF\Model\Signature( array(
            'authority'=> $this->config['SIGNATURE_AUTHORITY'],
            'contact' => $this->config['SIGNATURE_CONTACT'],
            'date' => $this->config['SIGNATURE_DATE'],
            'form_field_name' => $this->config['SIGNATURE_FORM_FIELD'],
            'location' => $this->config['SIGNATURE_LOCATION'],
            'password' => $this->config['SIGNATURE_PASSWORD'],
            'rectangle' => $this->config['SIGNATURE_RECT'],
            'signature_path' => $this->config['SIGNATURE_PFX'],
            'signature_type' => \Aspose\PDF\Model\SignatureType::PKCS7,
            'visible' => TRUE )
        );

        $field = new \Aspose\PDF\Model\SignatureField( array(
            'page_index' => 1,
            'signature' => $signature,
            'partial_name' => 'sign1',
            'rect' => $this->config['SIGNATURE_RECT'])
        );

        $response = $this->pdfApi->postSignatureField(
            $this->config['PDF_DOCUMENT_NAME'],
            $field
        );

        if ($response->code === 200) {
            echo "appenSignature(): Signature '" . $this->config['SIGNATURE_CONTACT'] . "' successfully replaced.\n";
        } else {
            echo "appenSignature(): Failed to replace signature. Code: " . $response->code . "\n";
        }
    }
}

try {
    $signatures = new PdfSignatures($pdfApi, $configParams);
    $signatures->uploadFile($configParams['LOCAL_SIGNATURE_PATH'], $configParams['SIGNATURE_PFX']);
    $signatures->uploadDocument();
    $signatures->appenSignature();
    $signatures->downloadResult();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
