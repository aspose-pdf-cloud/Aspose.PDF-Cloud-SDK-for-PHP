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
 * Paragraph Class 
 *
 * @category Class
 * @description Represents text paragraphs as multiline text object.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class Paragraph implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Paragraph';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'line_spacing' => '\Aspose\PDF\Model\LineSpacing',
        'wrap_mode' => '\Aspose\PDF\Model\WrapMode',
        'horizontal_alignment' => '\Aspose\PDF\Model\TextHorizontalAlignment',
        'left_margin' => 'double',
        'right_margin' => 'double',
        'top_margin' => 'double',
        'bottom_margin' => 'double',
        'rectangle' => '\Aspose\PDF\Model\Rectangle',
        'rotation' => 'double',
        'subsequent_lines_indent' => 'double',
        'vertical_alignment' => '\Aspose\PDF\Model\VerticalAlignment',
        'lines' => '\Aspose\PDF\Model\TextLine[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'line_spacing' => null,
        'wrap_mode' => null,
        'horizontal_alignment' => null,
        'left_margin' => 'double',
        'right_margin' => 'double',
        'top_margin' => 'double',
        'bottom_margin' => 'double',
        'rectangle' => null,
        'rotation' => 'double',
        'subsequent_lines_indent' => 'double',
        'vertical_alignment' => null,
        'lines' => null
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
        'line_spacing' => 'LineSpacing',
        'wrap_mode' => 'WrapMode',
        'horizontal_alignment' => 'HorizontalAlignment',
        'left_margin' => 'LeftMargin',
        'right_margin' => 'RightMargin',
        'top_margin' => 'TopMargin',
        'bottom_margin' => 'BottomMargin',
        'rectangle' => 'Rectangle',
        'rotation' => 'Rotation',
        'subsequent_lines_indent' => 'SubsequentLinesIndent',
        'vertical_alignment' => 'VerticalAlignment',
        'lines' => 'Lines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_spacing' => 'setLineSpacing',
        'wrap_mode' => 'setWrapMode',
        'horizontal_alignment' => 'setHorizontalAlignment',
        'left_margin' => 'setLeftMargin',
        'right_margin' => 'setRightMargin',
        'top_margin' => 'setTopMargin',
        'bottom_margin' => 'setBottomMargin',
        'rectangle' => 'setRectangle',
        'rotation' => 'setRotation',
        'subsequent_lines_indent' => 'setSubsequentLinesIndent',
        'vertical_alignment' => 'setVerticalAlignment',
        'lines' => 'setLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_spacing' => 'getLineSpacing',
        'wrap_mode' => 'getWrapMode',
        'horizontal_alignment' => 'getHorizontalAlignment',
        'left_margin' => 'getLeftMargin',
        'right_margin' => 'getRightMargin',
        'top_margin' => 'getTopMargin',
        'bottom_margin' => 'getBottomMargin',
        'rectangle' => 'getRectangle',
        'rotation' => 'getRotation',
        'subsequent_lines_indent' => 'getSubsequentLinesIndent',
        'vertical_alignment' => 'getVerticalAlignment',
        'lines' => 'getLines'
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
        $this->container['line_spacing'] = isset($data['line_spacing']) ? $data['line_spacing'] : null;
        $this->container['wrap_mode'] = isset($data['wrap_mode']) ? $data['wrap_mode'] : null;
        $this->container['horizontal_alignment'] = isset($data['horizontal_alignment']) ? $data['horizontal_alignment'] : null;
        $this->container['left_margin'] = isset($data['left_margin']) ? $data['left_margin'] : null;
        $this->container['right_margin'] = isset($data['right_margin']) ? $data['right_margin'] : null;
        $this->container['top_margin'] = isset($data['top_margin']) ? $data['top_margin'] : null;
        $this->container['bottom_margin'] = isset($data['bottom_margin']) ? $data['bottom_margin'] : null;
        $this->container['rectangle'] = isset($data['rectangle']) ? $data['rectangle'] : null;
        $this->container['rotation'] = isset($data['rotation']) ? $data['rotation'] : null;
        $this->container['subsequent_lines_indent'] = isset($data['subsequent_lines_indent']) ? $data['subsequent_lines_indent'] : null;
        $this->container['vertical_alignment'] = isset($data['vertical_alignment']) ? $data['vertical_alignment'] : null;
        $this->container['lines'] = isset($data['lines']) ? $data['lines'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
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

        if ($this->container['lines'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets line_spacing
     *
     * @return \Aspose\PDF\Model\LineSpacing
     */
    public function getLineSpacing()
    {
        return $this->container['line_spacing'];
    }

    /**
     * Sets line_spacing
     *
     * @param \Aspose\PDF\Model\LineSpacing $line_spacing Line spacing mode.
     *
     * @return $this
     */
    public function setLineSpacing($line_spacing)
    {
        $this->container['line_spacing'] = $line_spacing;

        return $this;
    }

    /**
     * Gets wrap_mode
     *
     * @return \Aspose\PDF\Model\WrapMode
     */
    public function getWrapMode()
    {
        return $this->container['wrap_mode'];
    }

    /**
     * Sets wrap_mode
     *
     * @param \Aspose\PDF\Model\WrapMode $wrap_mode Word wrap mode.
     *
     * @return $this
     */
    public function setWrapMode($wrap_mode)
    {
        $this->container['wrap_mode'] = $wrap_mode;

        return $this;
    }

    /**
     * Gets horizontal_alignment
     *
     * @return \Aspose\PDF\Model\TextHorizontalAlignment
     */
    public function getHorizontalAlignment()
    {
        return $this->container['horizontal_alignment'];
    }

    /**
     * Sets horizontal_alignment
     *
     * @param \Aspose\PDF\Model\TextHorizontalAlignment $horizontal_alignment Horizontal alignment for the text inside paragraph's rectangle.
     *
     * @return $this
     */
    public function setHorizontalAlignment($horizontal_alignment)
    {
        $this->container['horizontal_alignment'] = $horizontal_alignment;

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
     * @param double $left_margin Left margin.
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
     * @param double $right_margin Right margin.
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
     * @param double $top_margin Top margin.
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
     * @param double $bottom_margin Bottom margin.
     *
     * @return $this
     */
    public function setBottomMargin($bottom_margin)
    {
        $this->container['bottom_margin'] = $bottom_margin;

        return $this;
    }

    /**
     * Gets rectangle
     *
     * @return \Aspose\PDF\Model\Rectangle
     */
    public function getRectangle()
    {
        return $this->container['rectangle'];
    }

    /**
     * Sets rectangle
     *
     * @param \Aspose\PDF\Model\Rectangle $rectangle Rectangle of the paragraph.
     *
     * @return $this
     */
    public function setRectangle($rectangle)
    {
        $this->container['rectangle'] = $rectangle;

        return $this;
    }

    /**
     * Gets rotation
     *
     * @return double
     */
    public function getRotation()
    {
        return $this->container['rotation'];
    }

    /**
     * Sets rotation
     *
     * @param double $rotation Rotation angle in degrees.
     *
     * @return $this
     */
    public function setRotation($rotation)
    {
        $this->container['rotation'] = $rotation;

        return $this;
    }

    /**
     * Gets subsequent_lines_indent
     *
     * @return double
     */
    public function getSubsequentLinesIndent()
    {
        return $this->container['subsequent_lines_indent'];
    }

    /**
     * Sets subsequent_lines_indent
     *
     * @param double $subsequent_lines_indent Subsequent lines indent value.
     *
     * @return $this
     */
    public function setSubsequentLinesIndent($subsequent_lines_indent)
    {
        $this->container['subsequent_lines_indent'] = $subsequent_lines_indent;

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
     * @param \Aspose\PDF\Model\VerticalAlignment $vertical_alignment Vertical alignment for the text inside paragraph's rectangle
     *
     * @return $this
     */
    public function setVerticalAlignment($vertical_alignment)
    {
        $this->container['vertical_alignment'] = $vertical_alignment;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \Aspose\PDF\Model\TextLine[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \Aspose\PDF\Model\TextLine[] $lines An array of text lines.
     *
     * @return $this
     */
    public function setLines($lines)
    {
        $this->container['lines'] = $lines;

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


