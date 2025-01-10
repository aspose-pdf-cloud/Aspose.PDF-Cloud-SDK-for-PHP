"""
    1. Load your Application Secret and Key from the JSON file or set credentials in another way
    2. Create an object to connect to the Pdf.Cloud API
    3. Initialize parameters (folders and Pdf document) for next actions
    4. Upload your Pdf document file
    5. Perform the retreiving image Id from Pdf document using get_images() function
    6. Perform the reading image from Pdf document using get_image() function and image Id value
    7. Parse response for upload image into temporary folder 
    8. Initialize second Pdf document for inserting uploaded image from first Pdf document
    9. Perform the retreiving image Id from second Pdf document using get_images() function
    10. Initialize parameters for replace image in second Pdf document
    11. Perform replacing image actiont using put_replace_image() function
    12. Check result and perform some actions with response object
    
    All values of variables starting with "YOUR_****" should be replaced by real user values
"""

import os
import json

import asposepdfcloud
from asposepdfcloud.apis.pdf_api import PdfApi

from urllib.parse import urlparse

def uploadFile(pdf_api, name, temp_folder, data_path):
    pdf_api.upload_file(temp_folder + '/' + name, data_path + name)


json_file = open('YOUR_APPLICATION_CREDENTIALS.json')

data = json.load(json_file)
            
pdf_api_client = asposepdfcloud.api_client.ApiClient(
    app_key=str(data.get('AppKey', '')),
    app_sid=str(data.get('AppSID', '')),
    host=str(data['ProductUri']),
    self_host=bool(data.get('SelfHost', False)),
)

api = PdfApi(pdf_api_client)

output_path = str(data['YOUR_OUTPUT_FOLDER'])
temp_folder = 'YOUR_TEMP_PDF_CLOUD_FOLDER'
    
file_name = 'YOUR_PDF_DOCUMENT.pdf'

uploadFile(api, file_name, temp_folder, output_path)

opts = {
   "folder" : temp_folder
}

page_number = 1
responseImages = api.get_images(file_name, page_number, **opts)

image_id = responseImages.images.list[0].id

responseImage = api.get_image(file_name, image_id, **opts)

print (responseImage)

file_name_link = responseImage.image.links[0].href

a = urlparse(file_name_link)
image_file_name = os.path.basename(a.path)

uploadFile(api, file_name_link, temp_folder)

file_name2 = 'YOUR_PDF_DOCUMENT_2.pdf'
page_number2 = 1

responseImages2 = api.get_images(file_name2, page_number2, **opts)
  
image_id2 = responseImages.images.list[0].id
opts = {
    "image_file_path" : temp_folder + '/' + image_file_name,
    "folder" : temp_folder
}

response = api.put_replace_image(file_name2, image_id2, **opts)

print (response)