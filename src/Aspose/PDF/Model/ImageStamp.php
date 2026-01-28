<?php
/**
 *
 * Copyright (c) 2026 Aspose.PDF Cloud
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
 * ImageStamp Class 
 *
 * @category Class
 * @description Represents Pdf stamps.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;
use \Aspose\PDF\ObjectSerializer;

class ImageStamp extends StampBase 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImageStamp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'file_name' => 'string',
        'width' => 'double',
        'height' => 'double',
        'vertical_alignment' => '\Aspose\PDF\Model\VerticalAlignment',
        'bottom_margin' => 'double',
        'left_margin' => 'double',
        'top_margin' => 'double',
        'right_margin' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'file_name' => null,
        'width' => 'double',
        'height' => 'double',
        'vertical_alignment' => null,
        'bottom_margin' => 'double',
        'left_margin' => 'double',
        'top_margin' => 'double',
        'right_margin' => 'double'
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
        'file_name' => 'FileName',
        'width' => 'Width',
        'height' => 'Height',
        'vertical_alignment' => 'VerticalAlignment',
        'bottom_margin' => 'BottomMargin',
        'left_margin' => 'LeftMargin',
        'top_margin' => 'TopMargin',
        'right_margin' => 'RightMargin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file_name' => 'setFileName',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'vertical_alignment' => 'setVerticalAlignment',
        'bottom_margin' => 'setBottomMargin',
        'left_margin' => 'setLeftMargin',
        'top_margin' => 'setTopMargin',
        'right_margin' => 'setRightMargin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file_name' => 'getFileName',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'vertical_alignment' => 'getVerticalAlignment',
        'bottom_margin' => 'getBottomMargin',
        'left_margin' => 'getLeftMargin',
        'top_margin' => 'getTopMargin',
        'right_margin' => 'getRightMargin'
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

        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['vertical_alignment'] = isset($data['vertical_alignment']) ? $data['vertical_alignment'] : null;
        $this->container['bottom_margin'] = isset($data['bottom_margin']) ? $data['bottom_margin'] : null;
        $this->container['left_margin'] = isset($data['left_margin']) ? $data['left_margin'] : null;
        $this->container['top_margin'] = isset($data['top_margin']) ? $data['top_margin'] : null;
        $this->container['right_margin'] = isset($data['right_margin']) ? $data['right_margin'] : null;
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
     * Gets file_name
     *
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     *
     * @param string $file_name Gets or sets the file name.
     *
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets width
     *
     * @return double
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param double $width Gets or sets image width. Setting this property allos to scal image horizontally.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return double
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param double $height Gets or sets image height. Setting this image allows to scale image vertically.
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets vertical_alignment
     *
     * @return \Aspose\PDF\Model\VerticalAlignment
     */
    public function getVerticalAlignment()
    {
        return $this->container['vertical_alignment'];
    }

    /**
     * Sets vertical_alignment
     *
     * @param \Aspose\PDF\Model\VerticalAlignment $vertical_alignment Gets or sets vertical alignment of stamp on page.
     *
     * @return $this
     */
    public function setVerticalAlignment($vertical_alignment)
    {
        $this->container['vertical_alignment'] = $vertical_alignment;

        return $this;
    }

    /**
     * Gets bottom_margin
     *
     * @return double
     */
    public function getBottomMargin()
    {
        return $this->container['bottom_margin'];
    }

    /**
     * Sets bottom_margin
     *
     * @param double $bottom_margin Gets or sets bottom margin of stamp.
     *
     * @return $this
     */
    public function setBottomMargin($bottom_margin)
    {
        $this->container['bottom_margin'] = $bottom_margin;

        return $this;
    }

    /**
     * Gets left_margin
     *
     * @return double
     */
    public function getLeftMargin()
    {
        return $this->container['left_margin'];
    }

    /**
     * Sets left_margin
     *
     * @param double $left_margin Gets or sets left margin of stamp.
     *
     * @return $this
     */
    public function setLeftMargin($left_margin)
    {
        $this->container['left_margin'] = $left_margin;

        return $this;
    }

    /**
     * Gets top_margin
     *
     * @return double
     */
    public function getTopMargin()
    {
        return $this->container['top_margin'];
    }

    /**
     * Sets top_margin
     *
     * @param double $top_margin Gets or sets top margin of stamp.
     *
     * @return $this
     */
    public function setTopMargin($top_margin)
    {
        $this->container['top_margin'] = $top_margin;

        return $this;
    }

    /**
     * Gets right_margin
     *
     * @return double
     */
    public function getRightMargin()
    {
        return $this->container['right_margin'];
    }

    /**
     * Sets right_margin
     *
     * @param double $right_margin Gets or sets right margin of stamp.
     *
     * @return $this
     */
    public function setRightMargin($right_margin)
    {
        $this->container['right_margin'] = $right_margin;

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


