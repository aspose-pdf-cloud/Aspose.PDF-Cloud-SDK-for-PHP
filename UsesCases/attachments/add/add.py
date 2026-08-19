"""
    1. Import required libraries
    2. Define callback functiions for append new attachment into this Pdf file
    3. Initialize credentials for calling Pdf.Cloud.Python REST API functions
    4. Create Pdf.Cloud.Python REST API object
    5. Initialize new AttachmentInfo object
    6. Perform appending attachment into Pdf file using post_add_document_attachment() function
    
    All values of variables starting with "YOUR_****" should be replaced by real user values
"""

from asposepdfcloud.apis.pdf_api import PdfApi
from asposepdfcloud.models import AttachmentInfo
from asposepdfcloud.configuration import Configuration

def callback_add_attachment(response):
    print("Attachment successfully append: ", response)

app_key = "YOUR_APP_KEY"
app_secret = "YOUR_APP_SECRET"

config = Configuration()
config.api_key['api_key'] = app_key
config.api_key['app_sid'] = app_secret

api = PdfApi(api_client=config.api_client)

document_name = "YOUR_PDF_DOCUMENT.pdf"

new_attachment_file = "YOUR_LOCAL_ATTACHMENT_FILE_WITH_PATH"
new_attachment_mime = "YOUR_LOCAL_ATTACHMENT_FILE_MIME_TYPE"

attachment_info = AttachmentInfo(
    name=new_attachment_file,
    mime_type=new_attachment_mime
)

api.post_add_document_attachment(document_name, attachment_info, callback=callback_add_attachment)