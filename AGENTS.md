# Aspose.PDF Cloud SDK for PHP — Agent Analysis

> **Repository:** [aspose-pdf-cloud/aspose-pdf-cloud-php](https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php)  
> **Version:** 26.4.0 | **Package:** `aspose/pdf-sdk-php`  
> **License:** MIT | **PHP Version:** 7.4+  
> **API Version:** v3.0

---

## 1. Repository Overview

The **Aspose.PDF Cloud SDK for PHP** is a generated REST API client that wraps the Aspose.PDF Cloud API v3.0. It enables PHP applications to perform a wide range of PDF document processing operations — creation, manipulation, conversion, and rendering — entirely in the cloud.

The SDK follows a **namespaced PSR-4 structure** (`Aspose\PDF\`) with separate sub-namespaces for the API client, models, and supporting classes. All models reside in `src/Aspose/PDF/Model/`, the API surface is in `src/Aspose/PDF/Api/`, and supporting utilities are in `src/Aspose/PDF/`.

---

## 2. Architecture & Core Components

### 2.1 Package Structure

```
aspose-pdf-cloud-php/
├── src/Aspose/PDF/
│   ├── Api/
│   │   └── PdfApi.php          # PdfApi class — 1,500+ API methods (~4.8 MB)
│   ├── Model/
│   │   ├── AsposeResponse.php  # Base response type
│   │   ├── ModelInterface.php  # Model contract (swaggerTypes, attributeMap, valid)
│   │   └── {294 model files}   # One file per PDF concept
│   ├── ApiException.php        # Exception with response context
│   ├── Configuration.php       # Configuration with singleton pattern
│   ├── HeaderSelector.php      # Content negotiation (Accept/Content-Type)
│   └── ObjectSerializer.php    # Serialization/deserialization
├── tests/
│   └── Aspose/PDF/
│       └── PdfApiTest.php      # PHPUnit test class (~6,273 lines)
├── UsesCases/                  # Runnable domain-specific examples
│   ├── README.md               # Index of all use cases
│   ├── Bookmarks/
│   ├── Compares/
│   ├── CompressDocument/
│   ├── CreateDocument/
│   ├── EncryptDecrypt/
│   ├── HeaderFooter/
│   ├── Links/
│   ├── Pages/
│   ├── Signatures/
│   └── Tables/
├── settings/
│   └── credentials.json        # API credentials template
├── docs/                       # Markdown API documentation
├── composer.json               # Composer package definition
└── README.md                   # Usage examples and overview
```

### 2.2 Core Files

| File | Purpose |
|------|---------|
| **`src/Aspose/PDF/Api/PdfApi.php`** | `PdfApi` — the main API surface with all REST endpoint methods (1,500+ methods, ~4.8 MB) |
| **`src/Aspose/PDF/Configuration.php`** | `Configuration` class with getter/setter pattern for `clientId`, `clientSecret`, `host`, `selfHost`, `accessToken`, `userAgent`, `debug`. Singleton via `getDefaultConfiguration()` |
| **`src/Aspose/PDF/ApiException.php`** | `ApiException` extends `\Exception` with `responseBody`, `responseHeaders`, `responseObject` properties |
| **`src/Aspose/PDF/HeaderSelector.php`** | Content negotiation utility for selecting `Accept` and `Content-Type` headers |
| **`src/Aspose/PDF/ObjectSerializer.php`** | Serialization/deserialization of API request/response payloads (328 lines) |
| **`src/Aspose/PDF/Model/ModelInterface.php`** | Interface that all model classes implement, defining `swaggerTypes()`, `swaggerFormats()`, `attributeMap()`, `setters()`, `getters()`, `listInvalidProperties()`, `valid()` |

### 2.3 Key Architectural Decisions

- **Guzzle HTTP client**: The SDK uses `guzzlehttp/guzzle ^7.4` for all HTTP communication, making it easy to integrate with existing PHP projects that use Guzzle
- **Constructor injection**: `PdfApi` accepts optional `ClientInterface`, `Configuration`, and `HeaderSelector` parameters — defaults are created if omitted
- **Method chaining**: `Configuration` setters return `$this` for fluent configuration: `$config->setClientId('...')->setClientSecret('...')`

---

## 3. Data Model Organization

### 3.1 Model Files (294 files)

All models are in `src/Aspose/PDF/Model/`, organized by PDF concept. Each model implements `ModelInterface`:

| Category | Example Files |
|----------|---------------|
| **Annotations** | `Annotation.php`, `AnnotationInfo.php`, `AnnotationType.php`, `AnnotationFlags.php`, `AnnotationState.php`, `CaretAnnotation.php`, `CircleAnnotation.php`, `FileAttachmentAnnotation.php`, `FreeTextAnnotation.php`, `HighlightAnnotation.php`, `InkAnnotation.php`, `LineAnnotation.php`, `LinkAnnotation.php`, `MovieAnnotation.php`, `PolygonAnnotation.php`, `PolyLineAnnotation.php`, `PopupAnnotation.php`, `RedactionAnnotation.php`, `ScreenAnnotation.php`, `SoundAnnotation.php`, `SquareAnnotation.php`, `SquigglyAnnotation.php`, `StampAnnotation.php`, `StrikeOutAnnotation.php`, `TextAnnotation.php`, `UnderlineAnnotation.php` |
| **Form Fields** | `Field.php`, `FieldType.php`, `FormField.php`, `CheckBoxField.php`, `ComboBoxField.php`, `ListBoxField.php`, `RadioButtonField.php`, `TextBoxField.php`, `SignatureField.php`, `ChoiceField.php`, `RadioButtonOptionField.php` |
| **Document** | `Document.php`, `DocumentConfig.php`, `DocumentProperty.php`, `DocumentProperties.php`, `DisplayProperties.php`, `DocumentPrivilege.php`, `DocumentLayers.php`, `XmpMetadata.php` |
| **Pages** | `Page.php`, `Pages.php`, `PageLayout.php`, `PageMode.php`, `PageRange.php`, `PageWordCount.php`, `WordCount.php` |
| **Stamps** | `Stamp.php`, `StampBase.php`, `ImageStamp.php`, `TextStamp.php`, `PageNumberStamp.php`, `PdfPageStamp.php`, `ImageStampPageSpecified.php`, `TextStampPageSpecified.php`, `StampInfo.php`, `StampType.php`, `StampIcon.php` |
| **Headers/Footers** | `ImageHeader.php`, `ImageFooter.php`, `TextHeader.php`, `TextFooter.php` |
| **Tables** | `Table.php`, `TableBroken.php`, `Row.php`, `Cell.php`, `TableRecognized.php`, `RowRecognized.php`, `CellRecognized.php` |
| **Conversions** | `DocFormat.php`, `HtmlDocumentType.php`, `EpubRecognitionMode.php`, `ColorDepth.php`, `CompressionType.php`, `OutputFormat.php` |
| **Storage** | `FileVersion.php`, `FileVersions.php`, `FilesList.php`, `FilesUploadResult.php`, `DiscUsage.php`, `ObjectExist.php`, `StorageExist.php`, `StorageFile.php` |
| **Signatures** | `Signature.php`, `SignatureField.php`, `SignatureType.php`, `SignatureCustomAppearance.php`, `TimestampSettings.php`, `SignatureVerifyResponse.php` |
| **Primitives** | `Color.php`, `Point.php`, `Rectangle.php`, `Dash.php`, `Border.php`, `BorderInfo.php`, `MarginInfo.php`, `GraphInfo.php`, `Link.php`, `LinkElement.php`, `Position.php`, `Segment.php`, `TextState.php`, `TextStyle.php`, `TextLine.php`, `TextRect.php` |
| **Enums** | `AnnotationType.php`, `BorderStyle.php`, `BorderEffect.php`, `CapStyle.php`, `Direction.php`, `FontStyles.php`, `HorizontalAlignment.php`, `Justification.php`, `LineEnding.php`, `LineSpacing.php`, `CryptoAlgorithm.php`, `PermissionsFlags.php`, `ShapeType.php`, `WrapMode.php`, `StampType.php`, `FileIcon.php`, `SoundEncoding.php`, `SoundIcon.php` |

### 3.2 Response Type Naming Convention

- **Single entity:** `{Entity}Response` — e.g., `DocumentResponse`, `BookmarkResponse`, `CircleAnnotationResponse`
- **Collection:** `{Entity}sResponse` or `{Entity}esResponse` — e.g., `BookmarksResponse`, `CircleAnnotationsResponse`, `FieldsResponse`, `ImagesResponse`
- **Base:** `AsposeResponse` with `Code` (int) and `Status` (string)

### 3.3 Model Interface

All models implement `ModelInterface` which requires:

```php
public static function swaggerTypes();      // property → type mapping
public static function swaggerFormats();    // property → format mapping
public static function attributeMap();      // property → API key mapping
public static function setters();           // property → setter method
public static function getters();           // property → getter method
public function listInvalidProperties();    // validation
public function valid();                    // is valid
```

---

## 4. API Capabilities

### 4.1 Document Operations

| Method | Description |
|--------|-------------|
| `getDocument` | Read document info |
| `putCreateDocument` | Create empty document |
| `postCreateDocument` | Create document with config |
| `postOptimizeDocument` | Optimize document (compress images, remove unused objects, unembed fonts) |
| `postSplitDocument` | Split document into pages |
| `postSplitRangePdfDocument` | Split by page ranges |
| `postOrganizeDocument` | Reorder pages |
| `postOrganizeDocuments` | Organize pages from multiple documents |
| `postMergeDocuments` | Merge multiple documents |

### 4.2 Page Operations

| Method | Description |
|--------|-------------|
| `getPage` | Read page info |
| `postPage` | Add new page |
| `deletePage` | Delete page by number |
| `postMovePage` | Move page to new position |
| `postDocumentPagesRotate` | Rotate pages by angle |
| `postDocumentPagesResize` | Resize pages |
| `postDocumentPagesCrop` | Crop pages |
| `getPageConvertToTiff` / `putPageConvertToTiff` | Convert page to TIFF |
| `getPageConvertToJpeg` / `putPageConvertToJpeg` | Convert page to JPEG |
| `getPageConvertToPng` / `putPageConvertToPng` | Convert page to PNG |
| `getPageConvertToEmf` / `putPageConvertToEmf` | Convert page to EMF |
| `getPageConvertToBmp` / `putPageConvertToBmp` | Convert page to BMP |
| `getPageConvertToGif` / `putPageConvertToGif` | Convert page to GIF |
| `postPageImageStamps` | Add image stamp to page |
| `postPageTextStamps` | Add text stamp to page |
| `postPagePdfPageStamps` | Add PDF page stamp to page |
| `postPagePageNumberStamps` | Add page number stamp |

### 4.3 Annotations (15+ Types)

Each annotation type supports full CRUD operations:

| Operation | Pattern |
|-----------|---------|
| **Get all** | `getDocument{Type}Annotations(name, ...)` |
| **Get by page** | `getPage{Type}Annotations(name, pageNumber, ...)` |
| **Get by ID** | `get{Type}Annotation(name, annotationId, ...)` |
| **Create** | `postPage{Type}Annotations(name, pageNumber, annotation, ...)` |
| **Update** | `put{Type}Annotation(name, annotationId, annotation, ...)` |
| **Delete** | `deleteAnnotation(name, annotationId, ...)` |

Supported annotation types: Caret, Circle, FileAttachment, FreeText, Highlight, Ink, Line, Link, Movie, Polygon, PolyLine, Popup, Redaction, Screen, Sound, Square, Squiggly, Stamp, StrikeOut, Text, Underline.

### 4.4 Form Fields (8 Types)

| Field Type | Operations |
|------------|------------|
| CheckBox, ComboBox, ListBox, RadioButton, TextBox, Signature | Get document fields, get page fields, get by name, create, update, delete |
| General | `getFields`, `putUpdateFields`, `postFlattenDocument` |
| Import/Export | XML, FDF, XFDF formats (GET and PUT for each) |

### 4.5 Bookmarks

| Method | Description |
|--------|-------------|
| `getDocumentBookmarks` | Get bookmark tree |
| `getBookmarks` | Get bookmarks at path |
| `getBookmark` | Get single bookmark |
| `postBookmark` | Add bookmark |
| `putBookmark` | Update bookmark |
| `deleteBookmark` | Delete bookmark |
| `deleteDocumentBookmarks` | Delete all bookmarks |

### 4.6 Conversions

**PDF → Other formats:**
DOC, DOCX, EPUB, Excel (XLS/XLSX), HTML, MobiXML, PDF/A, PPTX, SVG, TEX, TIFF, XLS, XML, XPS, and more.

**Other formats → PDF:**
APS, BMP, EPUB, GIF, HTML, JPEG, Markdown, MHTML, PCL, PNG, PS, SVG, TeX, Web, XML, XPS, XSL FO, images.

**Pattern:** `get{Format}InStorageToPdf` / `put{Format}InStorageToPdf` for each source format.

### 4.7 Storage & File Management

| Method | Description |
|--------|-------------|
| `uploadFile` | Upload file to cloud storage |
| `downloadFile` | Download file from cloud storage |
| `copyFile` / `moveFile` / `deleteFile` | File operations |
| `createFolder` / `copyFolder` / `moveFolder` / `deleteFolder` | Folder operations |
| `getFilesList` | List files in folder |
| `getDiscUsage` | Get storage usage |
| `objectExists` / `storageExists` | Check existence |
| `getFileVersions` | List file versions |

### 4.8 Other Features

| Feature | Key Methods |
|---------|-------------|
| **Text** | `getText`, `getPageText`, `putAddText` |
| **Images** | `getImages`, `getImage`, `deleteImage`, `postInsertImage` |
| **Links** | `getPageLinkAnnotations`, `postPageLinkAnnotations`, `putLinkAnnotation`, `deleteLinkAnnotation` |
| **Stamps** | `getDocumentStamps`, `postPageTextStamps`, `postPageImageStamps`, `deleteStamp` |
| **Tables** | `getDocumentTables`, `postPageTables`, `putTable`, `deleteTable` |
| **Watermarks** | Via image stamps |
| **Headers/Footers** | Via text/image stamps |
| **Encryption** | `putEncryptDocument`, `putDecryptDocument`, `putChangePasswordDocument` |
| **Properties** | `getDocumentProperties`, `putSetProperty`, `deleteProperty` |
| **XMP Metadata** | `getXmpMetadataJson`, `getXmpMetadataXml`, `postXmpMetadata` |
| **Layers** | `getDocumentLayers`, `deleteDocumentLayer` |
| **Compare** | `postCompareDocument` |
| **Privileges** | `putPrivileges` |
| **OCR** | `putSearchableDocument` |

---

## 5. Testing Infrastructure

### 5.1 Test Base (`PdfApiTest.php`)

- Extends `PHPUnit\Framework\TestCase`
- Reads credentials from `settings/credentials.json`
- Uses `\Aspose\PDF\Configuration` with `setClientId()`, `setClientSecret()`, `setSelfHost()`, `setHost()`
- Instantiates `new PdfApi(null, $config)` in `setUp()`
- Provides `uploadFile($fileName, $subFolder)` helper for pre-uploading test files
- Supports both public cloud and self-hosted modes

### 5.2 Credentials Format (`settings/credentials.json`)

```json
{
    "client_secret": "YOUR_CLIENT_SECRET",
    "client_id": "YOUR_CLIENT_ID",
    "api_url": "https://api.aspose.cloud/v3.0",
    "self_host": false
}
```

### 5.3 Test Pattern

All tests follow a consistent pattern:

```php
public function testGetDocumentAnnotations()
{
    $name = 'PdfWithAnnotations.pdf';
    $pageNumber = 2;

    $this->uploadFile($name);

    $result = $this->pdfApi->getPageAnnotations($name, $pageNumber, null, $this->tempFolder);
    $this->assertInstanceOf(AsposeResponse::class, $result);
    $this->assertEquals(200, $result->getCode());
}
```

### 5.4 Running Tests

```bash
composer install
./vendor/bin/phpunit
```

---

## 6. Use Cases (`UsesCases/`)

The `UsesCases/` directory contains **domain-specific, runnable PHP examples** organized by domain.

### 6.1 Directory Structure

Each domain directory contains PHP files with standalone entry points:

```
UsesCases/{domain}/
├── add/                        # Group folder (optional)
│   └── somefile.php            # Individual files (optional)       
├── anotherfile.php             # Individual files (optional)
```

### 6.2 README.md Format

The `UsesCases/README.md` file serves as the **index and documentation** for all use case domains. It follows a strict format:

```markdown
#### {domain}
- **[{domain}/{path to main file}.php]({domain}/{path to main file}.php)** – Description of the main entry file containing top level statements.
  ```bash
  php UsesCases/{domain}/{path to main file}.php
  ```
- *[{domain}/{path to operation file}.php]({domain}/{path to operation file}.php)* – Description of the operation containing cloud method invocation.
```

**Formatting Rules:**

| Element | Rule |
|---------|------|
| **Section header** | `#### {domain}` — level-4 heading, PascalCase |
| **Main files** | Listed first, bold (`**`), includes `php` run command in a code block |
| **Operation files** | Listed after main files, italic (`*`), one per line |
| **File links** | Relative paths from `UsesCases/` directory |
| **Descriptions** | Present tense, action-oriented (e.g., "Adds", "Retrieves", "Deletes") |
| **Blank lines** | One blank line between sections |

### Example

```markdown
#### Bookmarks
- **[Bookmarks/add/appendBoolmark.php](Bookmarks/add/appendBoolmark.php)** – Uploads a PDF, appends a new colored and formatted bookmark to the document, and downloads the modified file.
  ```bash
  php UsesCases/Bookmarks/add/appendBoolmark.php
  ```
- **[Bookmarks/remove/removeBookmark.php](Bookmarks/remove/removeBookmark.php)** – Uploads a PDF, deletes a bookmark by its specified path, and downloads the updated document.
  ```bash
  php UsesCases/Bookmarks/remove/removeBookmark.php
  ```
```

### 6.3 File Inclusion/Exclusion Rules

When generating or updating `UsesCases/README.md`, the following rules determine which files are included:

#### Included Files

| File Pattern | Reason | Example |
|-------------|--------|---------|
| `*{main}.php` (main files) | PHP files that contains top level statements | `addDocumentSignature.php`, `replaceDocumentSignature.php` |
| `*{operation}.php` (operation files) | Individual domain operations contains only class declarations | `comparePdfDocuments.php` |

#### Excluded Files

| File Pattern | Reason | Example |
|-------------|--------|---------|
| **Non-`.php` files** | Only PHP source files are documented | `*.md`, `*.json`, `*.pdf` |
| `*.php` (helper files) | Shared utilities (API init, file upload/download) | `comparesHelper.php` |
| `*.php` (data files)| Test data files (Initialization of complex data) | `fields.php` |
| **Files outside `UsesCases/`** | README only covers the `UsesCases/` directory | Root-level `*.php` files |
| **Hidden files/directories** | Not user-facing | `.DS_Store`, `.gitkeep` |

#### Ordering Rules

1. **Domains** are listed in **alphabetical order** by directory name.
2. **Within a domain**, files are ordered as:
   - `{main}.php` (first, bold)
   - All remaining `*.php` files in **alphabetical order** (italic)

---

## 7. Design Patterns & Conventions

### 7.1 Code Generation

The SDK is **auto-generated** from the OpenAPI specification. Evidence:
- Consistent, repetitive method structure across all 1,500+ API methods
- Uniform `ModelInterface` implementation across all 294 model files
- Predictable naming patterns: `get{Entity}`, `post{Entity}`, `put{Entity}`, `delete{Entity}`

### 7.2 Key Conventions

| Convention | Description |
|------------|-------------|
| **PSR-4 namespace** | `Aspose\PDF\` → `src/Aspose/PDF/` |
| **Sub-namespaces** | `Aspose\PDF\Api\` for `PdfApi`, `Aspose\PDF\Model\` for models |
| **MIT license header** | Every PHP file starts with the same copyright block |
| **Return types** | API methods return the response model directly (e.g., `DocumentResponse::getCode()`) |
| **Error handling** | `ApiException` thrown on HTTP errors, extends `\Exception` with `responseBody`, `responseHeaders`, `responseObject` |
| **Self-host support** | `$config->setSelfHost(true)` + `$config->setHost('URL')` skips OAuth2 authentication |
| **Fluent configuration** | All `Configuration` setters return `$this` for method chaining |
| **Singleton config** | `Configuration::getDefaultConfiguration()` provides a shared instance |

### 7.3 Configuration Pattern

```php
// Public cloud
$config = new Configuration();
$config->setClientId('YOUR_CLIENT_ID');
$config->setClientSecret('YOUR_CLIENT_SECRET');

// Self-hosted
$config->setSelfHost(true);
$config->setHost('https://self-hosted-api.example.com');

// Instantiate API
$pdfApi = new PdfApi(null, $config);
```

### 7.4 Error Handling

```php
try {
    $result = $this->pdfApi->getPageAnnotations($name, $pageNumber, ...);
} catch (ApiException $e) {
    // $e->getResponseBody()   — raw response body
    // $e->getResponseHeaders() — HTTP response headers
    // $e->getResponseObject()  — deserialized error object
    echo "Error: " . $e->getMessage();
}
```

---

## 8. Dependencies & Build

### 8.1 Dependencies

| Dependency | Version | Purpose |
|------------|---------|---------|
| `php` | >=5.5 (recommended 7.4+) | Language runtime |
| `ext-curl` | * | HTTP transport |
| `ext-json` | * | JSON serialization |
| `ext-mbstring` | * | Multibyte string handling |
| `guzzlehttp/guzzle` | ^7.4 | HTTP client library |
| `phpunit/phpunit` | * (dev) | Unit testing |
| `squizlabs/php_codesniffer` | ~2.6 (dev) | Code style checking |

### 8.2 Installation

```bash
composer require aspose/pdf-sdk-php
```

### 8.3 Running Tests

```bash
composer install
./vendor/bin/phpunit
```

---

## 9. Documentation

The `docs/` directory contains **Markdown files** with API reference documentation:

- `PdfApi.md` — Full API method reference
- `{Model}.md` — One file per model type (e.g., `Document.md`, `Annotation.md`, `Bookmark.md`)
- `{Response}.md` — One file per response type (e.g., `DocumentResponse.md`, `AnnotationsResponse.md`)

---

