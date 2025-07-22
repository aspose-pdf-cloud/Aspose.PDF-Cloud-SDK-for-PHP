<?php
/**
 *
 * Copyright (c) 2025 Aspose.PDF Cloud
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */


/**
 * SignatureCustomAppearance Class 
 *
 * @category Class
 * @description An abstract class which represents signature custom appearance object.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class SignatureCustomAppearance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SignatureCustomAppearance';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'font_family_name' => 'string',
        'font_size' => 'double',
        'rotation' => '\Aspose\PDF\Model\Rotation',
        'show_contact_info' => 'bool',
        'show_reason' => 'bool',
        'show_location' => 'bool',
        'contact_info_label' => 'string',
        'reason_label' => 'string',
        'location_label' => 'string',
        'digital_signed_label' => 'string',
        'date_signed_at_label' => 'string',
        'date_time_local_format' => 'string',
        'date_time_format' => 'string',
        'background_color' => '\Aspose\PDF\Model\Color',
        'foreground_color' => '\Aspose\PDF\Model\Color',
        'use_digital_subject_format' => 'bool',
        'digital_subject_format' => '\Aspose\PDF\Model\SignatureSubjectNameElements[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'font_family_name' => null,
        'font_size' => 'double',
        'rotation' => null,
        'show_contact_info' => null,
        'show_reason' => null,
        'show_location' => null,
        'contact_info_label' => null,
        'reason_label' => null,
        'location_label' => null,
        'digital_signed_label' => null,
        'date_signed_at_label' => null,
        'date_time_local_format' => null,
        'date_time_format' => null,
        'background_color' => null,
        'foreground_color' => null,
        'use_digital_subject_format' => null,
        'digital_subject_format' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'font_family_name' => 'FontFamilyName',
        'font_size' => 'FontSize',
        'rotation' => 'Rotation',
        'show_contact_info' => 'ShowContactInfo',
        'show_reason' => 'ShowReason',
        'show_location' => 'ShowLocation',
        'contact_info_label' => 'ContactInfoLabel',
        'reason_label' => 'ReasonLabel',
        'location_label' => 'LocationLabel',
        'digital_signed_label' => 'DigitalSignedLabel',
        'date_signed_at_label' => 'DateSignedAtLabel',
        'date_time_local_format' => 'DateTimeLocalFormat',
        'date_time_format' => 'DateTimeFormat',
        'background_color' => 'BackgroundColor',
        'foreground_color' => 'ForegroundColor',
        'use_digital_subject_format' => 'UseDigitalSubjectFormat',
        'digital_subject_format' => 'DigitalSubjectFormat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'font_family_name' => 'setFontFamilyName',
        'font_size' => 'setFontSize',
        'rotation' => 'setRotation',
        'show_contact_info' => 'setShowContactInfo',
        'show_reason' => 'setShowReason',
        'show_location' => 'setShowLocation',
        'contact_info_label' => 'setContactInfoLabel',
        'reason_label' => 'setReasonLabel',
        'location_label' => 'setLocationLabel',
        'digital_signed_label' => 'setDigitalSignedLabel',
        'date_signed_at_label' => 'setDateSignedAtLabel',
        'date_time_local_format' => 'setDateTimeLocalFormat',
        'date_time_format' => 'setDateTimeFormat',
        'background_color' => 'setBackgroundColor',
        'foreground_color' => 'setForegroundColor',
        'use_digital_subject_format' => 'setUseDigitalSubjectFormat',
        'digital_subject_format' => 'setDigitalSubjectFormat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'font_family_name' => 'getFontFamilyName',
        'font_size' => 'getFontSize',
        'rotation' => 'getRotation',
        'show_contact_info' => 'getShowContactInfo',
        'show_reason' => 'getShowReason',
        'show_location' => 'getShowLocation',
        'contact_info_label' => 'getContactInfoLabel',
        'reason_label' => 'getReasonLabel',
        'location_label' => 'getLocationLabel',
        'digital_signed_label' => 'getDigitalSignedLabel',
        'date_signed_at_label' => 'getDateSignedAtLabel',
        'date_time_local_format' => 'getDateTimeLocalFormat',
        'date_time_format' => 'getDateTimeFormat',
        'background_color' => 'getBackgroundColor',
        'foreground_color' => 'getForegroundColor',
        'use_digital_subject_format' => 'getUseDigitalSubjectFormat',
        'digital_subject_format' => 'getDigitalSubjectFormat'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['font_family_name'] = isset($data['font_family_name']) ? $data['font_family_name'] : null;
        $this->container['font_size'] = isset($data['font_size']) ? $data['font_size'] : null;
        $this->container['rotation'] = isset($data['rotation']) ? $data['rotation'] : null;
        $this->container['show_contact_info'] = isset($data['show_contact_info']) ? $data['show_contact_info'] : null;
        $this->container['show_reason'] = isset($data['show_reason']) ? $data['show_reason'] : null;
        $this->container['show_location'] = isset($data['show_location']) ? $data['show_location'] : null;
        $this->container['contact_info_label'] = isset($data['contact_info_label']) ? $data['contact_info_label'] : null;
        $this->container['reason_label'] = isset($data['reason_label']) ? $data['reason_label'] : null;
        $this->container['location_label'] = isset($data['location_label']) ? $data['location_label'] : null;
        $this->container['digital_signed_label'] = isset($data['digital_signed_label']) ? $data['digital_signed_label'] : null;
        $this->container['date_signed_at_label'] = isset($data['date_signed_at_label']) ? $data['date_signed_at_label'] : null;
        $this->container['date_time_local_format'] = isset($data['date_time_local_format']) ? $data['date_time_local_format'] : null;
        $this->container['date_time_format'] = isset($data['date_time_format']) ? $data['date_time_format'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['foreground_color'] = isset($data['foreground_color']) ? $data['foreground_color'] : null;
        $this->container['use_digital_subject_format'] = isset($data['use_digital_subject_format']) ? $data['use_digital_subject_format'] : null;
        $this->container['digital_subject_format'] = isset($data['digital_subject_format']) ? $data['digital_subject_format'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['rotation'] === null) {
            $invalidProperties[] = "'rotation' can't be null";
        }
        if ($this->container['show_contact_info'] === null) {
            $invalidProperties[] = "'show_contact_info' can't be null";
        }
        if ($this->container['show_reason'] === null) {
            $invalidProperties[] = "'show_reason' can't be null";
        }
        if ($this->container['show_location'] === null) {
            $invalidProperties[] = "'show_location' can't be null";
        }
        if ($this->container['use_digital_subject_format'] === null) {
            $invalidProperties[] = "'use_digital_subject_format' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['rotation'] === null) {
            return false;
        }
        if ($this->container['show_contact_info'] === null) {
            return false;
        }
        if ($this->container['show_reason'] === null) {
            return false;
        }
        if ($this->container['show_location'] === null) {
            return false;
        }
        if ($this->container['use_digital_subject_format'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets font_family_name
     *
     * @return string
     */
    public function getFontFamilyName()
    {
        return $this->container['font_family_name'];
    }

    /**
     * Sets font_family_name
     *
     * @param string $font_family_name Gets/sets font family name. It should be existed in the document. Default value: Arial.
     *
     * @return $this
     */
    public function setFontFamilyName($font_family_name)
    {
        $this->container['font_family_name'] = $font_family_name;

        return $this;
    }

    /**
     * Gets font_size
     *
     * @return double
     */
    public function getFontSize()
    {
        return $this->container['font_size'];
    }

    /**
     * Sets font_size
     *
     * @param double $font_size Gets/sets font size. Default value: 10.
     *
     * @return $this
     */
    public function setFontSize($font_size)
    {
        $this->container['font_size'] = $font_size;

        return $this;
    }

    /**
     * Gets rotation
     *
     * @return \Aspose\PDF\Model\Rotation
     */
    public function getRotation()
    {
        return $this->container['rotation'];
    }

    /**
     * Sets rotation
     *
     * @param \Aspose\PDF\Model\Rotation $rotation Gets or sets signature rotation.
     *
     * @return $this
     */
    public function setRotation($rotation)
    {
        $this->container['rotation'] = $rotation;

        return $this;
    }

    /**
     * Gets show_contact_info
     *
     * @return bool
     */
    public function getShowContactInfo()
    {
        return $this->container['show_contact_info'];
    }

    /**
     * Sets show_contact_info
     *
     * @param bool $show_contact_info Gets/sets contact info visibility. Default value: true.
     *
     * @return $this
     */
    public function setShowContactInfo($show_contact_info)
    {
        $this->container['show_contact_info'] = $show_contact_info;

        return $this;
    }

    /**
     * Gets show_reason
     *
     * @return bool
     */
    public function getShowReason()
    {
        return $this->container['show_reason'];
    }

    /**
     * Sets show_reason
     *
     * @param bool $show_reason Gets/sets reason visibility. Default value: true.
     *
     * @return $this
     */
    public function setShowReason($show_reason)
    {
        $this->container['show_reason'] = $show_reason;

        return $this;
    }

    /**
     * Gets show_location
     *
     * @return bool
     */
    public function getShowLocation()
    {
        return $this->container['show_location'];
    }

    /**
     * Sets show_location
     *
     * @param bool $show_location Gets/sets location visibility. Default value: true.
     *
     * @return $this
     */
    public function setShowLocation($show_location)
    {
        $this->container['show_location'] = $show_location;

        return $this;
    }

    /**
     * Gets contact_info_label
     *
     * @return string
     */
    public function getContactInfoLabel()
    {
        return $this->container['contact_info_label'];
    }

    /**
     * Sets contact_info_label
     *
     * @param string $contact_info_label Gets/sets contact info label. Default value: \"Contact\".
     *
     * @return $this
     */
    public function setContactInfoLabel($contact_info_label)
    {
        $this->container['contact_info_label'] = $contact_info_label;

        return $this;
    }

    /**
     * Gets reason_label
     *
     * @return string
     */
    public function getReasonLabel()
    {
        return $this->container['reason_label'];
    }

    /**
     * Sets reason_label
     *
     * @param string $reason_label Gets/sets reason label. Default value: \"Reason\".
     *
     * @return $this
     */
    public function setReasonLabel($reason_label)
    {
        $this->container['reason_label'] = $reason_label;

        return $this;
    }

    /**
     * Gets location_label
     *
     * @return string
     */
    public function getLocationLabel()
    {
        return $this->container['location_label'];
    }

    /**
     * Sets location_label
     *
     * @param string $location_label Gets/sets location label. Default value: \"Location\".
     *
     * @return $this
     */
    public function setLocationLabel($location_label)
    {
        $this->container['location_label'] = $location_label;

        return $this;
    }

    /**
     * Gets digital_signed_label
     *
     * @return string
     */
    public function getDigitalSignedLabel()
    {
        return $this->container['digital_signed_label'];
    }

    /**
     * Sets digital_signed_label
     *
     * @param string $digital_signed_label Gets/sets digital signed label. Default value: \"Digitally signed by\".
     *
     * @return $this
     */
    public function setDigitalSignedLabel($digital_signed_label)
    {
        $this->container['digital_signed_label'] = $digital_signed_label;

        return $this;
    }

    /**
     * Gets date_signed_at_label
     *
     * @return string
     */
    public function getDateSignedAtLabel()
    {
        return $this->container['date_signed_at_label'];
    }

    /**
     * Sets date_signed_at_label
     *
     * @param string $date_signed_at_label Gets/sets date signed label. Default value: \"Date\".
     *
     * @return $this
     */
    public function setDateSignedAtLabel($date_signed_at_label)
    {
        $this->container['date_signed_at_label'] = $date_signed_at_label;

        return $this;
    }

    /**
     * Gets date_time_local_format
     *
     * @return string
     */
    public function getDateTimeLocalFormat()
    {
        return $this->container['date_time_local_format'];
    }

    /**
     * Sets date_time_local_format
     *
     * @param string $date_time_local_format Gets/sets datetime local format. Default value: \"yyyy.MM.dd HH:mm:ss zzz\".
     *
     * @return $this
     */
    public function setDateTimeLocalFormat($date_time_local_format)
    {
        $this->container['date_time_local_format'] = $date_time_local_format;

        return $this;
    }

    /**
     * Gets date_time_format
     *
     * @return string
     */
    public function getDateTimeFormat()
    {
        return $this->container['date_time_format'];
    }

    /**
     * Sets date_time_format
     *
     * @param string $date_time_format Gets/sets datetime format. Default value: \"yyyy.MM.dd HH:mm:ss\".
     *
     * @return $this
     */
    public function setDateTimeFormat($date_time_format)
    {
        $this->container['date_time_format'] = $date_time_format;

        return $this;
    }

    /**
     * Gets background_color
     *
     * @return \Aspose\PDF\Model\Color
     */
    public function getBackgroundColor()
    {
        return $this->container['background_color'];
    }

    /**
     * Sets background_color
     *
     * @param \Aspose\PDF\Model\Color $background_color Gets/sets background color.
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets foreground_color
     *
     * @return \Aspose\PDF\Model\Color
     */
    public function getForegroundColor()
    {
        return $this->container['foreground_color'];
    }

    /**
     * Sets foreground_color
     *
     * @param \Aspose\PDF\Model\Color $foreground_color Gets/sets foreground color.
     *
     * @return $this
     */
    public function setForegroundColor($foreground_color)
    {
        $this->container['foreground_color'] = $foreground_color;

        return $this;
    }

    /**
     * Gets use_digital_subject_format
     *
     * @return bool
     */
    public function getUseDigitalSubjectFormat()
    {
        return $this->container['use_digital_subject_format'];
    }

    /**
     * Sets use_digital_subject_format
     *
     * @param bool $use_digital_subject_format Gets/sets subject format usage.
     *
     * @return $this
     */
    public function setUseDigitalSubjectFormat($use_digital_subject_format)
    {
        $this->container['use_digital_subject_format'] = $use_digital_subject_format;

        return $this;
    }

    /**
     * Gets digital_subject_format
     *
     * @return \Aspose\PDF\Model\SignatureSubjectNameElements[]
     */
    public function getDigitalSubjectFormat()
    {
        return $this->container['digital_subject_format'];
    }

    /**
     * Sets digital_subject_format
     *
     * @param \Aspose\PDF\Model\SignatureSubjectNameElements[] $digital_subject_format Gets/sets subject format.
     *
     * @return $this
     */
    public function setDigitalSubjectFormat($digital_subject_format)
    {
        $this->container['digital_subject_format'] = $digital_subject_format;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


