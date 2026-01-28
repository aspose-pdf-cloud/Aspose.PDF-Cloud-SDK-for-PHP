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
 * ImageTemplate Class 
 *
 * @category Class
 * @description Template of image.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class ImageTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ImageTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'image_path' => 'string',
        'image_src_type' => '\Aspose\PDF\Model\ImageSrcType',
        'left_margin' => 'double',
        'right_margin' => 'double',
        'top_margin' => 'double',
        'bottom_margin' => 'double',
        'page_width' => 'double',
        'page_height' => 'double',
        'margin_info' => '\Aspose\PDF\Model\MarginInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'image_path' => null,
        'image_src_type' => null,
        'left_margin' => 'double',
        'right_margin' => 'double',
        'top_margin' => 'double',
        'bottom_margin' => 'double',
        'page_width' => 'double',
        'page_height' => 'double',
        'margin_info' => null
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
        'image_path' => 'ImagePath',
        'image_src_type' => 'ImageSrcType',
        'left_margin' => 'LeftMargin',
        'right_margin' => 'RightMargin',
        'top_margin' => 'TopMargin',
        'bottom_margin' => 'BottomMargin',
        'page_width' => 'PageWidth',
        'page_height' => 'PageHeight',
        'margin_info' => 'MarginInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image_path' => 'setImagePath',
        'image_src_type' => 'setImageSrcType',
        'left_margin' => 'setLeftMargin',
        'right_margin' => 'setRightMargin',
        'top_margin' => 'setTopMargin',
        'bottom_margin' => 'setBottomMargin',
        'page_width' => 'setPageWidth',
        'page_height' => 'setPageHeight',
        'margin_info' => 'setMarginInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image_path' => 'getImagePath',
        'image_src_type' => 'getImageSrcType',
        'left_margin' => 'getLeftMargin',
        'right_margin' => 'getRightMargin',
        'top_margin' => 'getTopMargin',
        'bottom_margin' => 'getBottomMargin',
        'page_width' => 'getPageWidth',
        'page_height' => 'getPageHeight',
        'margin_info' => 'getMarginInfo'
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
        $this->container['image_path'] = isset($data['image_path']) ? $data['image_path'] : null;
        $this->container['image_src_type'] = isset($data['image_src_type']) ? $data['image_src_type'] : null;
        $this->container['left_margin'] = isset($data['left_margin']) ? $data['left_margin'] : null;
        $this->container['right_margin'] = isset($data['right_margin']) ? $data['right_margin'] : null;
        $this->container['top_margin'] = isset($data['top_margin']) ? $data['top_margin'] : null;
        $this->container['bottom_margin'] = isset($data['bottom_margin']) ? $data['bottom_margin'] : null;
        $this->container['page_width'] = isset($data['page_width']) ? $data['page_width'] : null;
        $this->container['page_height'] = isset($data['page_height']) ? $data['page_height'] : null;
        $this->container['margin_info'] = isset($data['margin_info']) ? $data['margin_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['image_path'] === null) {
            $invalidProperties[] = "'image_path' can't be null";
        }
        if ((strlen($this->container['image_path']) < 1)) {
            $invalidProperties[] = "invalid value for 'image_path', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['image_src_type'] === null) {
            $invalidProperties[] = "'image_src_type' can't be null";
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

        if ($this->container['image_path'] === null) {
            return false;
        }
        if (strlen($this->container['image_path']) < 1) {
            return false;
        }
        if ($this->container['image_src_type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets image_path
     *
     * @return string
     */
    public function getImagePath()
    {
        return $this->container['image_path'];
    }

    /**
     * Sets image_path
     *
     * @param string $image_path A path for image.
     *
     * @return $this
     */
    public function setImagePath($image_path)
    {

        if ((strlen($image_path) < 1)) {
            throw new \InvalidArgumentException('invalid length for $image_path when calling ImageTemplate., must be bigger than or equal to 1.');
        }

        $this->container['image_path'] = $image_path;

        return $this;
    }

    /**
     * Gets image_src_type
     *
     * @return \Aspose\PDF\Model\ImageSrcType
     */
    public function getImageSrcType()
    {
        return $this->container['image_src_type'];
    }

    /**
     * Sets image_src_type
     *
     * @param \Aspose\PDF\Model\ImageSrcType $image_src_type Image type.
     *
     * @return $this
     */
    public function setImageSrcType($image_src_type)
    {
        $this->container['image_src_type'] = $image_src_type;

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
     * @param double $left_margin left_margin
     *
     * @return $this
     */
    public function setLeftMargin($left_margin)
    {
        $this->container['left_margin'] = $left_margin;

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
     * @param double $right_margin right_margin
     *
     * @return $this
     */
    public function setRightMargin($right_margin)
    {
        $this->container['right_margin'] = $right_margin;

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
     * @param double $top_margin top_margin
     *
     * @return $this
     */
    public function setTopMargin($top_margin)
    {
        $this->container['top_margin'] = $top_margin;

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
     * @param double $bottom_margin bottom_margin
     *
     * @return $this
     */
    public function setBottomMargin($bottom_margin)
    {
        $this->container['bottom_margin'] = $bottom_margin;

        return $this;
    }

    /**
     * Gets page_width
     *
     * @return double
     */
    public function getPageWidth()
    {
        return $this->container['page_width'];
    }

    /**
     * Sets page_width
     *
     * @param double $page_width page_width
     *
     * @return $this
     */
    public function setPageWidth($page_width)
    {
        $this->container['page_width'] = $page_width;

        return $this;
    }

    /**
     * Gets page_height
     *
     * @return double
     */
    public function getPageHeight()
    {
        return $this->container['page_height'];
    }

    /**
     * Sets page_height
     *
     * @param double $page_height page_height
     *
     * @return $this
     */
    public function setPageHeight($page_height)
    {
        $this->container['page_height'] = $page_height;

        return $this;
    }

    /**
     * Gets margin_info
     *
     * @return \Aspose\PDF\Model\MarginInfo
     */
    public function getMarginInfo()
    {
        return $this->container['margin_info'];
    }

    /**
     * Sets margin_info
     *
     * @param \Aspose\PDF\Model\MarginInfo $margin_info margin_info
     *
     * @return $this
     */
    public function setMarginInfo($margin_info)
    {
        $this->container['margin_info'] = $margin_info;

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


