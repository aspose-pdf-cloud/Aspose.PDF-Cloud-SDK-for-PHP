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
 * RedactionAnnotation Class 
 *
 * @category Class
 * @description Provides RedactionAnnotation.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class RedactionAnnotation extends Annotation 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RedactionAnnotation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quad_point' => '\Aspose\PDF\Model\Point[]',
        'fill_color' => '\Aspose\PDF\Model\Color',
        'border_color' => '\Aspose\PDF\Model\Color',
        'overlay_text' => 'string',
        'repeat' => 'bool',
        'text_alignment' => '\Aspose\PDF\Model\HorizontalAlignment'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quad_point' => null,
        'fill_color' => null,
        'border_color' => null,
        'overlay_text' => null,
        'repeat' => null,
        'text_alignment' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'quad_point' => 'QuadPoint',
        'fill_color' => 'FillColor',
        'border_color' => 'BorderColor',
        'overlay_text' => 'OverlayText',
        'repeat' => 'Repeat',
        'text_alignment' => 'TextAlignment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quad_point' => 'setQuadPoint',
        'fill_color' => 'setFillColor',
        'border_color' => 'setBorderColor',
        'overlay_text' => 'setOverlayText',
        'repeat' => 'setRepeat',
        'text_alignment' => 'setTextAlignment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quad_point' => 'getQuadPoint',
        'fill_color' => 'getFillColor',
        'border_color' => 'getBorderColor',
        'overlay_text' => 'getOverlayText',
        'repeat' => 'getRepeat',
        'text_alignment' => 'getTextAlignment'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['quad_point'] = isset($data['quad_point']) ? $data['quad_point'] : null;
        $this->container['fill_color'] = isset($data['fill_color']) ? $data['fill_color'] : null;
        $this->container['border_color'] = isset($data['border_color']) ? $data['border_color'] : null;
        $this->container['overlay_text'] = isset($data['overlay_text']) ? $data['overlay_text'] : null;
        $this->container['repeat'] = isset($data['repeat']) ? $data['repeat'] : null;
        $this->container['text_alignment'] = isset($data['text_alignment']) ? $data['text_alignment'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
        if (!parent::valid()) {
            return false;
        }

        return true;
    }


    /**
     * Gets quad_point
     *
     * @return \Aspose\PDF\Model\Point[]
     */
    public function getQuadPoint()
    {
        return $this->container['quad_point'];
    }

    /**
     * Sets quad_point
     *
     * @param \Aspose\PDF\Model\Point[] $quad_point An array of 8xN numbers specifying the coordinates of content region that is intended to be removed.
     *
     * @return $this
     */
    public function setQuadPoint($quad_point)
    {
        $this->container['quad_point'] = $quad_point;

        return $this;
    }

    /**
     * Gets fill_color
     *
     * @return \Aspose\PDF\Model\Color
     */
    public function getFillColor()
    {
        return $this->container['fill_color'];
    }

    /**
     * Sets fill_color
     *
     * @param \Aspose\PDF\Model\Color $fill_color Gets or sets color to fill annotation.
     *
     * @return $this
     */
    public function setFillColor($fill_color)
    {
        $this->container['fill_color'] = $fill_color;

        return $this;
    }

    /**
     * Gets border_color
     *
     * @return \Aspose\PDF\Model\Color
     */
    public function getBorderColor()
    {
        return $this->container['border_color'];
    }

    /**
     * Sets border_color
     *
     * @param \Aspose\PDF\Model\Color $border_color Gets or sets color of border which is drawn when redaction is not active.
     *
     * @return $this
     */
    public function setBorderColor($border_color)
    {
        $this->container['border_color'] = $border_color;

        return $this;
    }

    /**
     * Gets overlay_text
     *
     * @return string
     */
    public function getOverlayText()
    {
        return $this->container['overlay_text'];
    }

    /**
     * Sets overlay_text
     *
     * @param string $overlay_text Text to print on redact annotation.
     *
     * @return $this
     */
    public function setOverlayText($overlay_text)
    {
        $this->container['overlay_text'] = $overlay_text;

        return $this;
    }

    /**
     * Gets repeat
     *
     * @return bool
     */
    public function getRepeat()
    {
        return $this->container['repeat'];
    }

    /**
     * Sets repeat
     *
     * @param bool $repeat If true overlay text will be repeated on the annotation.
     *
     * @return $this
     */
    public function setRepeat($repeat)
    {
        $this->container['repeat'] = $repeat;

        return $this;
    }

    /**
     * Gets text_alignment
     *
     * @return \Aspose\PDF\Model\HorizontalAlignment
     */
    public function getTextAlignment()
    {
        return $this->container['text_alignment'];
    }

    /**
     * Sets text_alignment
     *
     * @param \Aspose\PDF\Model\HorizontalAlignment $text_alignment Gets or sets. Alignment of Overlay Text.
     *
     * @return $this
     */
    public function setTextAlignment($text_alignment)
    {
        $this->container['text_alignment'] = $text_alignment;

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


