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
 * ImageFragment Class 
 *
 * @category Class
 * @description Represents Image Fragment DTO.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class ImageFragment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImageFragment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'image_file' => 'string',
        'fix_width' => 'double',
        'fix_height' => 'double',
        'horizontal_alignment' => '\Aspose\PDF\Model\HorizontalAlignment',
        'vertical_alignment' => '\Aspose\PDF\Model\VerticalAlignment',
        'image_scale' => 'double',
        'margin' => '\Aspose\PDF\Model\MarginInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'image_file' => null,
        'fix_width' => 'double',
        'fix_height' => 'double',
        'horizontal_alignment' => null,
        'vertical_alignment' => null,
        'image_scale' => 'double',
        'margin' => null
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
        'image_file' => 'ImageFile',
        'fix_width' => 'FixWidth',
        'fix_height' => 'FixHeight',
        'horizontal_alignment' => 'HorizontalAlignment',
        'vertical_alignment' => 'VerticalAlignment',
        'image_scale' => 'ImageScale',
        'margin' => 'Margin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image_file' => 'setImageFile',
        'fix_width' => 'setFixWidth',
        'fix_height' => 'setFixHeight',
        'horizontal_alignment' => 'setHorizontalAlignment',
        'vertical_alignment' => 'setVerticalAlignment',
        'image_scale' => 'setImageScale',
        'margin' => 'setMargin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image_file' => 'getImageFile',
        'fix_width' => 'getFixWidth',
        'fix_height' => 'getFixHeight',
        'horizontal_alignment' => 'getHorizontalAlignment',
        'vertical_alignment' => 'getVerticalAlignment',
        'image_scale' => 'getImageScale',
        'margin' => 'getMargin'
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
        $this->container['image_file'] = isset($data['image_file']) ? $data['image_file'] : null;
        $this->container['fix_width'] = isset($data['fix_width']) ? $data['fix_width'] : null;
        $this->container['fix_height'] = isset($data['fix_height']) ? $data['fix_height'] : null;
        $this->container['horizontal_alignment'] = isset($data['horizontal_alignment']) ? $data['horizontal_alignment'] : null;
        $this->container['vertical_alignment'] = isset($data['vertical_alignment']) ? $data['vertical_alignment'] : null;
        $this->container['image_scale'] = isset($data['image_scale']) ? $data['image_scale'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['image_file'] === null) {
            $invalidProperties[] = "'image_file' can't be null";
        }
        if ((strlen($this->container['image_file']) < 1)) {
            $invalidProperties[] = "invalid value for 'image_file', the character length must be bigger than or equal to 1.";
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

        if ($this->container['image_file'] === null) {
            return false;
        }
        if (strlen($this->container['image_file']) < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets image_file
     *
     * @return string
     */
    public function getImageFile()
    {
        return $this->container['image_file'];
    }

    /**
     * Sets image_file
     *
     * @param string $image_file Gets or sets full storage path of image.
     *
     * @return $this
     */
    public function setImageFile($image_file)
    {

        if ((strlen($image_file) < 1)) {
            throw new \InvalidArgumentException('invalid length for $image_file when calling ImageFragment., must be bigger than or equal to 1.');
        }

        $this->container['image_file'] = $image_file;

        return $this;
    }

    /**
     * Gets fix_width
     *
     * @return double
     */
    public function getFixWidth()
    {
        return $this->container['fix_width'];
    }

    /**
     * Sets fix_width
     *
     * @param double $fix_width Gets or sets fix width of the image.
     *
     * @return $this
     */
    public function setFixWidth($fix_width)
    {
        $this->container['fix_width'] = $fix_width;

        return $this;
    }

    /**
     * Gets fix_height
     *
     * @return double
     */
    public function getFixHeight()
    {
        return $this->container['fix_height'];
    }

    /**
     * Sets fix_height
     *
     * @param double $fix_height Gets or sets fix height of the image.
     *
     * @return $this
     */
    public function setFixHeight($fix_height)
    {
        $this->container['fix_height'] = $fix_height;

        return $this;
    }

    /**
     * Gets horizontal_alignment
     *
     * @return \Aspose\PDF\Model\HorizontalAlignment
     */
    public function getHorizontalAlignment()
    {
        return $this->container['horizontal_alignment'];
    }

    /**
     * Sets horizontal_alignment
     *
     * @param \Aspose\PDF\Model\HorizontalAlignment $horizontal_alignment Gets or sets horizontal alignment of the image.
     *
     * @return $this
     */
    public function setHorizontalAlignment($horizontal_alignment)
    {
        $this->container['horizontal_alignment'] = $horizontal_alignment;

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
     * @param \Aspose\PDF\Model\VerticalAlignment $vertical_alignment Gets or sets vertical alignment of the image.
     *
     * @return $this
     */
    public function setVerticalAlignment($vertical_alignment)
    {
        $this->container['vertical_alignment'] = $vertical_alignment;

        return $this;
    }

    /**
     * Gets image_scale
     *
     * @return double
     */
    public function getImageScale()
    {
        return $this->container['image_scale'];
    }

    /**
     * Sets image_scale
     *
     * @param double $image_scale Gets or sets ImageScale of the image.
     *
     * @return $this
     */
    public function setImageScale($image_scale)
    {
        $this->container['image_scale'] = $image_scale;

        return $this;
    }

    /**
     * Gets margin
     *
     * @return \Aspose\PDF\Model\MarginInfo
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     *
     * @param \Aspose\PDF\Model\MarginInfo $margin Gets or sets Margin of the image.
     *
     * @return $this
     */
    public function setMargin($margin)
    {
        $this->container['margin'] = $margin;

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


