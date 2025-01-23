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
 * Stamp Class 
 *
 * @category Class
 * @description Represents Pdf stamps.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class Stamp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Stamp';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => '\Aspose\PDF\Model\StampType',
        'background' => 'bool',
        'bottom_margin' => 'double',
        'horizontal_alignment' => '\Aspose\PDF\Model\HorizontalAlignment',
        'left_margin' => 'double',
        'opacity' => 'double',
        'right_margin' => 'double',
        'rotate' => '\Aspose\PDF\Model\Rotation',
        'rotate_angle' => 'double',
        'top_margin' => 'double',
        'vertical_alignment' => '\Aspose\PDF\Model\VerticalAlignment',
        'x_indent' => 'double',
        'y_indent' => 'double',
        'zoom' => 'double',
        'text_alignment' => '\Aspose\PDF\Model\HorizontalAlignment',
        'value' => 'string',
        'text_state' => '\Aspose\PDF\Model\TextState',
        'file_name' => 'string',
        'width' => 'double',
        'height' => 'double',
        'page_index' => 'int',
        'starting_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'background' => null,
        'bottom_margin' => 'double',
        'horizontal_alignment' => null,
        'left_margin' => 'double',
        'opacity' => 'double',
        'right_margin' => 'double',
        'rotate' => null,
        'rotate_angle' => 'double',
        'top_margin' => 'double',
        'vertical_alignment' => null,
        'x_indent' => 'double',
        'y_indent' => 'double',
        'zoom' => 'double',
        'text_alignment' => null,
        'value' => null,
        'text_state' => null,
        'file_name' => null,
        'width' => 'double',
        'height' => 'double',
        'page_index' => 'int32',
        'starting_number' => 'int32'
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
        'type' => 'Type',
        'background' => 'Background',
        'bottom_margin' => 'BottomMargin',
        'horizontal_alignment' => 'HorizontalAlignment',
        'left_margin' => 'LeftMargin',
        'opacity' => 'Opacity',
        'right_margin' => 'RightMargin',
        'rotate' => 'Rotate',
        'rotate_angle' => 'RotateAngle',
        'top_margin' => 'TopMargin',
        'vertical_alignment' => 'VerticalAlignment',
        'x_indent' => 'XIndent',
        'y_indent' => 'YIndent',
        'zoom' => 'Zoom',
        'text_alignment' => 'TextAlignment',
        'value' => 'Value',
        'text_state' => 'TextState',
        'file_name' => 'FileName',
        'width' => 'Width',
        'height' => 'Height',
        'page_index' => 'PageIndex',
        'starting_number' => 'StartingNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'background' => 'setBackground',
        'bottom_margin' => 'setBottomMargin',
        'horizontal_alignment' => 'setHorizontalAlignment',
        'left_margin' => 'setLeftMargin',
        'opacity' => 'setOpacity',
        'right_margin' => 'setRightMargin',
        'rotate' => 'setRotate',
        'rotate_angle' => 'setRotateAngle',
        'top_margin' => 'setTopMargin',
        'vertical_alignment' => 'setVerticalAlignment',
        'x_indent' => 'setXIndent',
        'y_indent' => 'setYIndent',
        'zoom' => 'setZoom',
        'text_alignment' => 'setTextAlignment',
        'value' => 'setValue',
        'text_state' => 'setTextState',
        'file_name' => 'setFileName',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'page_index' => 'setPageIndex',
        'starting_number' => 'setStartingNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'background' => 'getBackground',
        'bottom_margin' => 'getBottomMargin',
        'horizontal_alignment' => 'getHorizontalAlignment',
        'left_margin' => 'getLeftMargin',
        'opacity' => 'getOpacity',
        'right_margin' => 'getRightMargin',
        'rotate' => 'getRotate',
        'rotate_angle' => 'getRotateAngle',
        'top_margin' => 'getTopMargin',
        'vertical_alignment' => 'getVerticalAlignment',
        'x_indent' => 'getXIndent',
        'y_indent' => 'getYIndent',
        'zoom' => 'getZoom',
        'text_alignment' => 'getTextAlignment',
        'value' => 'getValue',
        'text_state' => 'getTextState',
        'file_name' => 'getFileName',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'page_index' => 'getPageIndex',
        'starting_number' => 'getStartingNumber'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['background'] = isset($data['background']) ? $data['background'] : null;
        $this->container['bottom_margin'] = isset($data['bottom_margin']) ? $data['bottom_margin'] : null;
        $this->container['horizontal_alignment'] = isset($data['horizontal_alignment']) ? $data['horizontal_alignment'] : null;
        $this->container['left_margin'] = isset($data['left_margin']) ? $data['left_margin'] : null;
        $this->container['opacity'] = isset($data['opacity']) ? $data['opacity'] : null;
        $this->container['right_margin'] = isset($data['right_margin']) ? $data['right_margin'] : null;
        $this->container['rotate'] = isset($data['rotate']) ? $data['rotate'] : null;
        $this->container['rotate_angle'] = isset($data['rotate_angle']) ? $data['rotate_angle'] : null;
        $this->container['top_margin'] = isset($data['top_margin']) ? $data['top_margin'] : null;
        $this->container['vertical_alignment'] = isset($data['vertical_alignment']) ? $data['vertical_alignment'] : null;
        $this->container['x_indent'] = isset($data['x_indent']) ? $data['x_indent'] : null;
        $this->container['y_indent'] = isset($data['y_indent']) ? $data['y_indent'] : null;
        $this->container['zoom'] = isset($data['zoom']) ? $data['zoom'] : null;
        $this->container['text_alignment'] = isset($data['text_alignment']) ? $data['text_alignment'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['text_state'] = isset($data['text_state']) ? $data['text_state'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['page_index'] = isset($data['page_index']) ? $data['page_index'] : null;
        $this->container['starting_number'] = isset($data['starting_number']) ? $data['starting_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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

        if ($this->container['type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets type
     *
     * @return \Aspose\PDF\Model\StampType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Aspose\PDF\Model\StampType $type Gets the stamp type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets background
     *
     * @return bool
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /**
     * Sets background
     *
     * @param bool $background Sets or gets a bool value that indicates the content is stamped as background. If the value is true, the stamp content is layed at the bottom. By defalt, the value is false, the stamp content is layed at the top.
     *
     * @return $this
     */
    public function setBackground($background)
    {
        $this->container['background'] = $background;

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
     * @param \Aspose\PDF\Model\HorizontalAlignment $horizontal_alignment Gets or sets Horizontal alignment of stamp on the page.
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
     * Gets opacity
     *
     * @return double
     */
    public function getOpacity()
    {
        return $this->container['opacity'];
    }

    /**
     * Sets opacity
     *
     * @param double $opacity Gets or sets a value to indicate the stamp opacity. The value is from 0.0 to 1.0. By default the value is 1.0.
     *
     * @return $this
     */
    public function setOpacity($opacity)
    {
        $this->container['opacity'] = $opacity;

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
     * Gets rotate
     *
     * @return \Aspose\PDF\Model\Rotation
     */
    public function getRotate()
    {
        return $this->container['rotate'];
    }

    /**
     * Sets rotate
     *
     * @param \Aspose\PDF\Model\Rotation $rotate Sets or gets the rotation of stamp content according Rotation values. Note. This property is for set angles which are multiples of 90 degrees (0, 90, 180, 270 degrees). To set arbitrary angle use RotateAngle property.  If angle set by ArbitraryAngle is not multiple of 90 then Rotate property returns Rotation.None.
     *
     * @return $this
     */
    public function setRotate($rotate)
    {
        $this->container['rotate'] = $rotate;

        return $this;
    }

    /**
     * Gets rotate_angle
     *
     * @return double
     */
    public function getRotateAngle()
    {
        return $this->container['rotate_angle'];
    }

    /**
     * Sets rotate_angle
     *
     * @param double $rotate_angle Gets or sets rotate angle of stamp in degrees. This property allows to set arbitrary rotate angle.
     *
     * @return $this
     */
    public function setRotateAngle($rotate_angle)
    {
        $this->container['rotate_angle'] = $rotate_angle;

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
     * Gets x_indent
     *
     * @return double
     */
    public function getXIndent()
    {
        return $this->container['x_indent'];
    }

    /**
     * Sets x_indent
     *
     * @param double $x_indent Horizontal stamp coordinate, starting from the left.
     *
     * @return $this
     */
    public function setXIndent($x_indent)
    {
        $this->container['x_indent'] = $x_indent;

        return $this;
    }

    /**
     * Gets y_indent
     *
     * @return double
     */
    public function getYIndent()
    {
        return $this->container['y_indent'];
    }

    /**
     * Sets y_indent
     *
     * @param double $y_indent Vertical stamp coordinate, starting from the bottom.
     *
     * @return $this
     */
    public function setYIndent($y_indent)
    {
        $this->container['y_indent'] = $y_indent;

        return $this;
    }

    /**
     * Gets zoom
     *
     * @return double
     */
    public function getZoom()
    {
        return $this->container['zoom'];
    }

    /**
     * Sets zoom
     *
     * @param double $zoom Zooming factor of the stamp. Allows to scale stamp.
     *
     * @return $this
     */
    public function setZoom($zoom)
    {
        $this->container['zoom'] = $zoom;

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
     * @param \Aspose\PDF\Model\HorizontalAlignment $text_alignment Alignment of the text inside the stamp.
     *
     * @return $this
     */
    public function setTextAlignment($text_alignment)
    {
        $this->container['text_alignment'] = $text_alignment;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value Gets or sets string value which is used as stamp on the page.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets text_state
     *
     * @return \Aspose\PDF\Model\TextState
     */
    public function getTextState()
    {
        return $this->container['text_state'];
    }

    /**
     * Sets text_state
     *
     * @param \Aspose\PDF\Model\TextState $text_state Gets text properties of the stamp. See TextState for details.
     *
     * @return $this
     */
    public function setTextState($text_state)
    {
        $this->container['text_state'] = $text_state;

        return $this;
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
     * Gets page_index
     *
     * @return int
     */
    public function getPageIndex()
    {
        return $this->container['page_index'];
    }

    /**
     * Sets page_index
     *
     * @param int $page_index Gets or sets the index of the page.
     *
     * @return $this
     */
    public function setPageIndex($page_index)
    {
        $this->container['page_index'] = $page_index;

        return $this;
    }

    /**
     * Gets starting_number
     *
     * @return int
     */
    public function getStartingNumber()
    {
        return $this->container['starting_number'];
    }

    /**
     * Sets starting_number
     *
     * @param int $starting_number Gets or sets value of the number of starting page. Other pages will be numbered starting from this value.
     *
     * @return $this
     */
    public function setStartingNumber($starting_number)
    {
        $this->container['starting_number'] = $starting_number;

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


