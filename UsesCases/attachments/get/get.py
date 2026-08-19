"""
    1. Import required libraries
    2. Define callback functiions for read attachments from Pdf file and append new attachment into this Pdf file
    3. Initialize credentials for calling Pdf.Cloud.Python REST API functions
    4. Create Pdf.Cloud.Python REST API object
    5. Initialize Pdf ile name and attachment index
    6. Perform reading attachments from Pdf file using get_document_attachment_by_index() function
    
    All values of variables starting with "YOUR_****" should be replaced by real user values
"""

from asposepdfcloud.apis.pdf_api import PdfApi
from asposepdfcloud.configuration import Configuration

def callback_get_attachment(response):
    print("Attachment received successfully : ", response)

app_key = "YOUR_APP_KEY"
app_secret = "YOUR_APP_SECRET"

config = Configuration()
config.api_key['api_key'] = app_key
config.api_key['app_sid'] = app_secret

api = PdfApi(api_client=config.api_client)

document_name = "YOUR_PDF_DOCUMENT.pdf"

attachment_index = "YOUR_ATTACHMENT_NUBER"

api.get_document_attachment_by_index(document_name, attachment_index, callback=callback_get_attachment)