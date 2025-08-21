![](https://img.shields.io/badge/api-v3.0-lightgrey) ![Packagist Version](https://img.shields.io/packagist/v/aspose/pdf-sdk-php) ![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/aspose/pdf-sdk-php) [![GitHub license](https://img.shields.io/github/license/aspose-pdf-cloud/aspose-pdf-cloud-php)](https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php/blob/master/LICENSE)
# PHP REST API to Process PDF in Cloud
[Aspose.PDF Cloud](https://products.aspose.cloud/pdf) is a true REST API that enables you to perform a wide range of document processing operations including creation, manipulation, conversion and rendering of PDF documents in the cloud.

Our Cloud SDKs are wrappers around REST API in various programming languages, allowing you to process documents in language of your choice quickly and easily, gaining all benefits of strong types and IDE highlights. This repository contains new generation SDKs for Aspose.PDF Cloud and examples.

These SDKs are now fully supported. If you have any questions, see any bugs or have enhancement request, feel free to reach out to us at [Free Support Forums](https://forum.aspose.cloud/c/pdf).

Extract Text & Images of a PDF document online https://products.aspose.app/pdf/parser.

## PDF Processing Features
- Add PDF document's header & footer in text or image format.
- Add tables & stamps (text or image) to PDF documents.
- Append multiple PDF documents to an existing file.
- Work with PDF attachments, annotations, & form fields.
- Apply encryption or decryption to PDF documents & set a password.
- Delete all stamps & tables from a page or entire PDF document.
- Delete a specific stamp or table from the PDF document by its ID.
- Replace single or multiple instances of text on a PDF page or from the entire document.
- Extensive support for converting PDF documents to various other file formats.
- Extract various elements of PDF files & make PDF documents optimized.

## Read & Write PDF Formats
PDF, EPUB, HTML, TeX, SVG, XML, XPS, FDF, XFDF

## Save PDF As
XLS, XLSX, PPTX, DOC, DOCX, MobiXML, JPEG, EMF, PNG, BMP, GIF, TIFF, Text

## Read PDF Formats
MHT, PCL, PS, XSLFO, MD

## Enhancements in Version 25.8
- Implement document page resize functionality using the Pdf.Cloud API library.
- A new version of Aspose.PDF Cloud was prepared using the latest version of Aspose.PDF for .NET.

## Bugs fixed in Version 25.8
- Implement delete watermark from PDF document using the Pdf.Cloud API library.

## Requirements
PHP 7.4 and later.

## Unit Tests
Aspose PDF SDK includes a suite of unit tests within the "tests" subdirectory. These Unit Tests also serves as examples of how to use the Aspose PDF SDK.

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Get PDF Page Annotations in PHP

```php
	// Get your ClientId and ClientSecret from https://dashboard.aspose.cloud (free registration required).

	$config = new Configuration();
	$config->setAppSid('MY_CLIENT_ID');
	$config->setAppKey('MY_CLIENT_SECRET');

	$pdfApi = new PdfApi(null, $config);
	$name = 'PdfWithAnnotations.pdf';
	$pageNumber = 2;

	$response = $pdfApi->getPageAnnotations($name, $pageNumber, null, "tempFolder");
```

## SelfHost Aspose.PDF Cloud
Create **Configuration** object without **AppSid** and **AppKey**, with **SelfHost** set to `true` and with **Host** set to *url of SelfHost Aspose.PDF Cloud*:
```php
	$config->setSelfHost(true);
	$config->setHost('MY_SELF_HOST_URL');
```

## Licensing
All Aspose.PDF Cloud SDKs are licensed under [MIT License](LICENSE).
