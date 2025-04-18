# TextStampPageSpecified
Represents Pdf stamps.

*Inherited from [\Aspose\PDF\Model\TextStamp](TextStamp.md)*
## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**page_number** | **int** | Page number. | 
**text_alignment** | [**\Aspose\PDF\Model\HorizontalAlignment**](HorizontalAlignment.md) | Alignment of the text inside the stamp.<br />*Inherited from [\Aspose\PDF\Model\TextStamp](TextStamp.md)* | [optional]
**value** | **string** | Gets or sets string value which is used as stamp on the page.<br />*Inherited from [\Aspose\PDF\Model\TextStamp](TextStamp.md)* | [optional]
**text_state** | [**\Aspose\PDF\Model\TextState**](TextState.md) | Gets text properties of the stamp. See TextState for details.<br />*Inherited from [\Aspose\PDF\Model\TextStamp](TextStamp.md)* | [optional]
**vertical_alignment** | [**\Aspose\PDF\Model\VerticalAlignment**](VerticalAlignment.md) | Gets or sets vertical alignment of stamp on page.<br />*Inherited from [\Aspose\PDF\Model\TextStamp](TextStamp.md)* | [optional]
**bottom_margin** | **double** | Gets or sets bottom margin of stamp.<br />*Inherited from [\Aspose\PDF\Model\TextStamp](TextStamp.md)* | [optional]
**left_margin** | **double** | Gets or sets left margin of stamp.<br />*Inherited from [\Aspose\PDF\Model\TextStamp](TextStamp.md)* | [optional]
**top_margin** | **double** | Gets or sets top margin of stamp.<br />*Inherited from [\Aspose\PDF\Model\TextStamp](TextStamp.md)* | [optional]
**right_margin** | **double** | Gets or sets right margin of stamp.<br />*Inherited from [\Aspose\PDF\Model\TextStamp](TextStamp.md)* | [optional]
**background** | **bool** | Sets or gets a bool value that indicates the content is stamped as background. If the value is true, the stamp content is layed at the bottom. By defalt, the value is false, the stamp content is layed at the top.<br />*Inherited from [\Aspose\PDF\Model\StampBase](StampBase.md)* | [optional]
**horizontal_alignment** | [**\Aspose\PDF\Model\HorizontalAlignment**](HorizontalAlignment.md) | Gets or sets Horizontal alignment of stamp on the page. <br />*Inherited from [\Aspose\PDF\Model\StampBase](StampBase.md)* | [optional]
**opacity** | **double** | Gets or sets a value to indicate the stamp opacity. The value is from 0.0 to 1.0. By default the value is 1.0.<br />*Inherited from [\Aspose\PDF\Model\StampBase](StampBase.md)* | [optional]
**rotate** | [**\Aspose\PDF\Model\Rotation**](Rotation.md) | Sets or gets the rotation of stamp content according Rotation values. Note. This property is for set angles which are multiples of 90 degrees (0, 90, 180, 270 degrees). To set arbitrary angle use RotateAngle property. If angle set by ArbitraryAngle is not multiple of 90 then Rotate property returns Rotation.None.<br />*Inherited from [\Aspose\PDF\Model\StampBase](StampBase.md)* | [optional]
**rotate_angle** | **double** | Gets or sets rotate angle of stamp in degrees. This property allows to set arbitrary rotate angle. <br />*Inherited from [\Aspose\PDF\Model\StampBase](StampBase.md)* | [optional]
**x_indent** | **double** | Horizontal stamp coordinate, starting from the left.<br />*Inherited from [\Aspose\PDF\Model\StampBase](StampBase.md)* | [optional]
**y_indent** | **double** | Vertical stamp coordinate, starting from the bottom.<br />*Inherited from [\Aspose\PDF\Model\StampBase](StampBase.md)* | [optional]
**zoom** | **double** | Zooming factor of the stamp. Allows to scale stamp.<br />*Inherited from [\Aspose\PDF\Model\StampBase](StampBase.md)* | [optional]
**links** | [**\Aspose\PDF\Model\Link[]**](Link.md) | Link to the document.<br />*Inherited from [\Aspose\PDF\Model\LinkElement](LinkElement.md)* | [optional]

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md) [[View Source]](../src/Aspose/PDF/Model/TextStampPageSpecified.php)

