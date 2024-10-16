# AnnotationFlags
A set of flags specifying various characteristics of the annotation.

## Enum
Name | Type | Value | Description
------------ | ------------- | ------------- | -------------
**_DEFAULT** | **string** | 'Default' | Default value.
**_PRINT** | **string** | 'Print' | If set, print the annotation when the page is printed. If clear, never print the annotation, regardless of whether it is displayed on the screen. This can be useful, for example, for annotations representing interactive pushbuttons, which would serve no meaningful purpose on the printed page.
**HIDDEN** | **string** | 'Hidden' | If set, do not display or print the annotation or allow it to interact with the user, regardless of its annotation type or whether an annotation handler is available. In cases where screen space is limited, the ability to hide and show annotations selectively can be used in combination with appearance streams to display auxiliary pop-up information similar in function to online help systems.
**INVISIBLE** | **string** | 'Invisible' | If set, do not display the annotation if it does not belong to one of the standard annotation types and no annotation handler is available. If clear, display such an unknown annotation using an appearance stream specified by its appearance dictionary, if any.
**LOCKED_CONTENTS** | **string** | 'LockedContents' | If set, do not allow the contents of the annotation to be modified by the user. This flag does not restrict deletion of the annotation or changes to other annotation properties, such as position and size.
**LOCKED** | **string** | 'Locked' | If set, do not allow the annotation to be deleted or its properties (including position and size) to be modified by the user. However, this flag does not restrict changes to the annotation’s contents, such as the value of a form field.
**NO_ROTATE** | **string** | 'NoRotate' | If set, do not rotate the annotation’s appearance to match the rotation of the page. The upper-left corner of the annotation rectangle remains in a fixed location on the page, regardless of the page rotation.
**NO_VIEW** | **string** | 'NoView' | If set, do not display the annotation on the screen or allow it to interact with the user. The annotation may be printed (depending on the setting of the Print flag) but should be considered hidden for purposes of on-screen display and user interaction.
**NO_ZOOM** | **string** | 'NoZoom' | If set, do not scale the annotation’s appearance to match the magnification of the page. The location of the annotation on the page (defined by the upper-left corner of its annotation rectangle) remains fixed, regardless of the page magnification.
**READ_ONLY** | **string** | 'ReadOnly' | If set, do not allow the annotation to interact with the user. The annotation may be displayed or printed (depending on the settings of the NoView and Print flags) but should not respond to mouse clicks or change its appearance in response to mouse motions. This flag is ignored for widget annotations; its function is subsumed by the ReadOnly flag of the associated form field.
**TOGGLE_NO_VIEW** | **string** | 'ToggleNoView' | If set, invert the interpretation of the NoView flag for certain events. A typical use is to have an annotation that appears only when a mouse cursor is held over it.

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md) [[View Source]](../src/Aspose/PDF/Model/AnnotationFlags.php)

