#### Bookmarks
- **[Bookmarks/add/appendBoolmark.php](Bookmarks/add/appendBoolmark.php)** – Uploads a PDF, appends a new colored and formatted bookmark to the document, and downloads the modified file.
  ```bash
  php UsesCases/Bookmarks/add/appendBoolmark.php
  ```
- **[Bookmarks/get/getBookmarkByPathAndShow.php](Bookmarks/get/getBookmarkByPathAndShow.php)** – Uploads a PDF and retrieves the details of a specific bookmark using its path identifier.
  ```bash
  php UsesCases/Bookmarks/get/getBookmarkByPathAndShow.php
  ```
- **[Bookmarks/get/getBookmarksAndShow.php](Bookmarks/get/getBookmarksAndShow.php)** – Uploads a PDF and fetches the list of all bookmarks or bookmarks under a specified parent path.
  ```bash
  php UsesCases/Bookmarks/get/getBookmarksAndShow.php
  ```
- **[Bookmarks/remove/removeBookmark.php](Bookmarks/remove/removeBookmark.php)** – Uploads a PDF, deletes a bookmark by its specified path, and downloads the updated document.
  ```bash
  php UsesCases/Bookmarks/remove/removeBookmark.php
  ```

#### Compares
- **[Compares/comparesLaunch.php](Compares/comparesLaunch.php)** – Launches a PDF comparison process between two specified documents and downloads the result.
  ```bash
  php UsesCases/Compares/comparesLaunch.php
  ```
- *[Compares/comparesHelper.php](Compares/comparesHelper.php)* – Provides helper functions for file upload, download, and path management in PDF comparison tasks.

#### CompressDocument
- **[CompressDocument/compressPdf.php](CompressDocument/compressPdf.php)** – Uploads a PDF document, compresses it with specific optimization settings (images, fonts, streams), and downloads the smaller file.
  ```bash
  php UsesCases/CompressDocument/compressPdf.php
  ```

#### CreateDocument
- **[CreateDocument/createPdf.php](CreateDocument/createPdf.php)** – Creates a new multi-page PDF document with custom page dimensions, display properties, and document metadata.
  ```bash
  php UsesCases/CreateDocument/createPdf.php
  ```
- **[CreateDocument/createPdfSimple.php](CreateDocument/createPdfSimple.php)** – Creates a new, empty PDF document and downloads it to the local file system.
  ```bash
  php UsesCases/CreateDocument/createPdfSimple.php
  ```

#### EncryptDecrypt
- **[EncryptDecrypt/decryptDocument.php](EncryptDecrypt/decryptDocument.php)** – Uploads a password-protected PDF, decrypts it using a provided password, and downloads the unlocked document.
  ```bash
  php UsesCases/EncryptDecrypt/decryptDocument.php
  ```
- **[EncryptDecrypt/encryptDocument.php](EncryptDecrypt/encryptDocument.php)** – Uploads a PDF, encrypts it with specified user and owner passwords using an encryption algorithm, and downloads the secured document.
  ```bash
  php UsesCases/EncryptDecrypt/encryptDocument.php
  ```

#### HeaderFooter
- **[HeaderFooter/appendImageFooter.php](HeaderFooter/appendImageFooter.php)** – Uploads a PDF and an image, then appends the image as a background footer to all pages of the document.
  ```bash
  php UsesCases/HeaderFooter/appendImageFooter.php
  ```
- **[HeaderFooter/appendImageHeader.php](HeaderFooter/appendImageHeader.php)** – Uploads a PDF and an image, then appends the image as a background header to all pages of the document.
  ```bash
  php UsesCases/HeaderFooter/appendImageHeader.php
  ```
- **[HeaderFooter/appendTextFooter.php](HeaderFooter/appendTextFooter.php)** – Uploads a PDF and appends a centered text string as a footer to every page in the document.
  ```bash
  php UsesCases/HeaderFooter/appendTextFooter.php
  ```
- **[HeaderFooter/appendTextHeader.php](HeaderFooter/appendTextHeader.php)** – Uploads a PDF and appends a centered text string as a header to every page in the document.
  ```bash
  php UsesCases/HeaderFooter/appendTextHeader.php
  ```

#### Links
- **[Links/add/appendLink.php](Links/add/appendLink.php)** – Uploads a PDF and adds a new hyperlink annotation with a custom action and visual properties to a specified page.
  ```bash
  php UsesCases/Links/add/appendLink.php
  ```
- **[Links/get/getAllLinks.php](Links/get/getAllLinks.php)** – Uploads a PDF and retrieves the array of all link annotations present on a specific page.
  ```bash
  php UsesCases/Links/get/getAllLinks.php
  ```
- **[Links/get/getLinkById.php](Links/get/getLinkById.php)** – Uploads a PDF and fetches the detailed properties of a single link annotation using its unique ID.
  ```bash
  php UsesCases/Links/get/getLinkById.php
  ```
- **[Links/remove/removeLink.php](Links/remove/removeLink.php)** – Uploads a PDF, deletes a hyperlink annotation by its unique ID, and downloads the updated document.
  ```bash
  php UsesCases/Links/remove/removeLink.php
  ```
- **[Links/replace/replaceFoundLink.php](Links/replace/replaceFoundLink.php)** – Uploads a PDF, finds a specific link by ID, replaces its target action/URL, and downloads the modified file.
  ```bash
  php UsesCases/Links/replace/replaceFoundLink.php
  ```

#### Pages
- **[Pages/add/addPage.php](Pages/add/addPage.php)** – Uploads a PDF document, appends a new blank page to it, and downloads the updated file.
  ```bash
  php UsesCases/Pages/add/addPage.php
  ```
- **[Pages/get/getPagesAndShow.php](Pages/get/getPagesAndShow.php)** – Uploads a PDF and displays information about all its pages as well as details for a specific page number.
  ```bash
  php UsesCases/Pages/get/getPagesAndShow.php
  ```
- **[Pages/move/movePage.php](Pages/move/movePage.php)** – Uploads a PDF, repositions a specified page to a new location within the document, and downloads the result.
  ```bash
  php UsesCases/Pages/move/movePage.php
  ```
- **[Pages/remove/removePage.php](Pages/remove/removePage.php)** – Uploads a PDF, deletes a specified page by its number, and downloads the document with the page removed.
  ```bash
  php UsesCases/Pages/remove/removePage.php
  ```
- **[Pages/stamp/pageAddImageStamp.php](Pages/stamp/pageAddImageStamp.php)** – Uploads a PDF and an image, then stamps the image onto a specified page with defined size and position.
  ```bash
  php UsesCases/Pages/stamp/pageAddImageStamp.php
  ```
- **[Pages/stamp/pageAddTextStamp.php](Pages/stamp/pageAddTextStamp.php)** – Uploads a PDF and adds a centered text stamp to a specified page.
  ```bash
  php UsesCases/Pages/stamp/pageAddTextStamp.php
  ```
- **[Pages/wordsCount/wordsCount.php](Pages/wordsCount/wordsCount.php)** – Uploads a PDF and calculates the number of words on each page, displaying the word count array.
  ```bash
  php UsesCases/Pages/wordsCount/wordsCount.php
  ```

#### Signatures
- **[Signatures/addDocumentSignature.php](Signatures/addDocumentSignature.php)** – Uploads a PDF and a digital certificate (PFX), then adds a new visible digital signature field to the document.
  ```bash
  php UsesCases/Signatures/addDocumentSignature.php
  ```
- **[Signatures/getDocumentSignatures.php](Signatures/getDocumentSignatures.php)** – Uploads a PDF and extracts information about all existing digital signature fields within the document.
  ```bash
  php UsesCases/Signatures/getDocumentSignatures.php
  ```
- **[Signatures/replaceDocumentSignature.php](Signatures/replaceDocumentSignature.php)** – Uploads a PDF and a new certificate, then replaces an existing digital signature field with a new signature.
  ```bash
  php UsesCases/Signatures/replaceDocumentSignature.php
  ```
- **[Signatures/verifySignature.php](Signatures/verifySignature.php)** – Uploads a signed PDF and verifies the validity of a specified digital signature.
  ```bash
  php UsesCases/Signatures/verifySignature.php
  ```

#### Tables
- **[Tables/add/appendTable.php](Tables/add/appendTable.php)** – Uploads a PDF and appends a new formatted table with a header and data rows to a specified page.
  ```bash
  php UsesCases/Tables/add/appendTable.php
  ```
- **[Tables/get/getTablesAndShow.php](Tables/get/getTablesAndShow.php)** – Uploads a PDF and retrieves the list of all tables or the detailed structure of a specific table by its ID.
  ```bash
  php UsesCases/Tables/get/getTablesAndShow.php
  ```
- **[Tables/remove/removeTables.php](Tables/remove/removeTables.php)** – Uploads a PDF and deletes a specific table by its ID or removes all tables from a specified page, then downloads the result.
  ```bash
  php UsesCases/Tables/remove/removeTables.php
  ```
- **[Tables/replace/replaceTable.php](Tables/replace/replaceTable.php)** – Uploads a PDF and replaces an existing table with a new, formatted table using the specified table ID.
  ```bash
  php UsesCases/Tables/replace/replaceTable.php
  ```