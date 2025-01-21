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
 * Cell Class 
 *
 * @category Class
 * @description Represents a cell of the table&#39;s row.
 * @package  Aspose\PDF
 * @author   Aspose PDF Cloud
 * @link     https://github.com/aspose-pdf-cloud/aspose-pdf-cloud-php
 */

namespace Aspose\PDF\Model;

use \ArrayAccess;
use \Aspose\PDF\ObjectSerializer;

class Cell implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Cell';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_no_border' => 'bool',
        'margin' => '\Aspose\PDF\Model\MarginInfo',
        'border' => '\Aspose\PDF\Model\BorderInfo',
        'background_color' => '\Aspose\PDF\Model\Color',
        'background_image_file' => 'string',
        'background_image_storage_file' => 'string',
        'alignment' => '\Aspose\PDF\Model\HorizontalAlignment',
        'default_cell_text_state' => '\Aspose\PDF\Model\TextState',
        'paragraphs' => '\Aspose\PDF\Model\TextRect[]',
        'is_word_wrapped' => 'bool',
        'vertical_alignment' => '\Aspose\PDF\Model\VerticalAlignment',
        'col_span' => 'int',
        'row_span' => 'int',
        'width' => 'double',
        'html_fragment' => 'string',
        'images' => '\Aspose\PDF\Model\ImageFragment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_no_border' => null,
        'margin' => null,
        'border' => null,
        'background_color' => null,
        'background_image_file' => null,
        'background_image_storage_file' => null,
        'alignment' => null,
        'default_cell_text_state' => null,
        'paragraphs' => null,
        'is_word_wrapped' => null,
        'vertical_alignment' => null,
        'col_span' => 'int32',
        'row_span' => 'int32',
        'width' => 'double',
        'html_fragment' => null,
        'images' => null
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
        'is_no_border' => 'IsNoBorder',
        'margin' => 'Margin',
        'border' => 'Border',
        'background_color' => 'BackgroundColor',
        'background_image_file' => 'BackgroundImageFile',
        'background_image_storage_file' => 'BackgroundImageStorageFile',
        'alignment' => 'Alignment',
        'default_cell_text_state' => 'DefaultCellTextState',
        'paragraphs' => 'Paragraphs',
        'is_word_wrapped' => 'IsWordWrapped',
        'vertical_alignment' => 'VerticalAlignment',
        'col_span' => 'ColSpan',
        'row_span' => 'RowSpan',
        'width' => 'Width',
        'html_fragment' => 'HtmlFragment',
        'images' => 'Images'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_no_border' => 'setIsNoBorder',
        'margin' => 'setMargin',
        'border' => 'setBorder',
        'background_color' => 'setBackgroundColor',
        'background_image_file' => 'setBackgroundImageFile',
        'background_image_storage_file' => 'setBackgroundImageStorageFile',
        'alignment' => 'setAlignment',
        'default_cell_text_state' => 'setDefaultCellTextState',
        'paragraphs' => 'setParagraphs',
        'is_word_wrapped' => 'setIsWordWrapped',
        'vertical_alignment' => 'setVerticalAlignment',
        'col_span' => 'setColSpan',
        'row_span' => 'setRowSpan',
        'width' => 'setWidth',
        'html_fragment' => 'setHtmlFragment',
        'images' => 'setImages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_no_border' => 'getIsNoBorder',
        'margin' => 'getMargin',
        'border' => 'getBorder',
        'background_color' => 'getBackgroundColor',
        'background_image_file' => 'getBackgroundImageFile',
        'background_image_storage_file' => 'getBackgroundImageStorageFile',
        'alignment' => 'getAlignment',
        'default_cell_text_state' => 'getDefaultCellTextState',
        'paragraphs' => 'getParagraphs',
        'is_word_wrapped' => 'getIsWordWrapped',
        'vertical_alignment' => 'getVerticalAlignment',
        'col_span' => 'getColSpan',
        'row_span' => 'getRowSpan',
        'width' => 'getWidth',
        'html_fragment' => 'getHtmlFragment',
        'images' => 'getImages'
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
        $this->container['is_no_border'] = isset($data['is_no_border']) ? $data['is_no_border'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
        $this->container['border'] = isset($data['border']) ? $data['border'] : null;
        $this->container['background_color'] = isset($data['background_color']) ? $data['background_color'] : null;
        $this->container['background_image_file'] = isset($data['background_image_file']) ? $data['background_image_file'] : null;
        $this->container['background_image_storage_file'] = isset($data['background_image_storage_file']) ? $data['background_image_storage_file'] : null;
        $this->container['alignment'] = isset($data['alignment']) ? $data['alignment'] : null;
        $this->container['default_cell_text_state'] = isset($data['default_cell_text_state']) ? $data['default_cell_text_state'] : null;
        $this->container['paragraphs'] = isset($data['paragraphs']) ? $data['paragraphs'] : null;
        $this->container['is_word_wrapped'] = isset($data['is_word_wrapped']) ? $data['is_word_wrapped'] : null;
        $this->container['vertical_alignment'] = isset($data['vertical_alignment']) ? $data['vertical_alignment'] : null;
        $this->container['col_span'] = isset($data['col_span']) ? $data['col_span'] : null;
        $this->container['row_span'] = isset($data['row_span']) ? $data['row_span'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['html_fragment'] = isset($data['html_fragment']) ? $data['html_fragment'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets is_no_border
     *
     * @return bool
     */
    public function getIsNoBorder()
    {
        return $this->container['is_no_border'];
    }

    /**
     * Sets is_no_border
     *
     * @param bool $is_no_border Gets or sets the cell have border.
     *
     * @return $this
     */
    public function setIsNoBorder($is_no_border)
    {
        $this->container['is_no_border'] = $is_no_border;

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
     * @param \Aspose\PDF\Model\MarginInfo $margin Gets or sets the padding.
     *
     * @return $this
     */
    public function setMargin($margin)
    {
        $this->container['margin'] = $margin;

        return $this;
    }

    /**
     * Gets border
     *
     * @return \Aspose\PDF\Model\BorderInfo
     */
    public function getBorder()
    {
        return $this->container['border'];
    }

    /**
     * Sets border
     *
     * @param \Aspose\PDF\Model\BorderInfo $border Gets or sets the border.
     *
     * @return $this
     */
    public function setBorder($border)
    {
        $this->container['border'] = $border;

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
     * @param \Aspose\PDF\Model\Color $background_color Gets or sets the background color.
     *
     * @return $this
     */
    public function setBackgroundColor($background_color)
    {
        $this->container['background_color'] = $background_color;

        return $this;
    }

    /**
     * Gets background_image_file
     *
     * @return string
     */
    public function getBackgroundImageFile()
    {
        return $this->container['background_image_file'];
    }

    /**
     * Sets background_image_file
     *
     * @param string $background_image_file Gets or sets the background image file.
     *
     * @return $this
     */
    public function setBackgroundImageFile($background_image_file)
    {
        $this->container['background_image_file'] = $background_image_file;

        return $this;
    }

    /**
     * Gets background_image_storage_file
     *
     * @return string
     */
    public function getBackgroundImageStorageFile()
    {
        return $this->container['background_image_storage_file'];
    }

    /**
     * Sets background_image_storage_file
     *
     * @param string $background_image_storage_file Gets or sets path of the background image file from storage.
     *
     * @return $this
     */
    public function setBackgroundImageStorageFile($background_image_storage_file)
    {
        $this->container['background_image_storage_file'] = $background_image_storage_file;

        return $this;
    }

    /**
     * Gets alignment
     *
     * @return \Aspose\PDF\Model\HorizontalAlignment
     */
    public function getAlignment()
    {
        return $this->container['alignment'];
    }

    /**
     * Sets alignment
     *
     * @param \Aspose\PDF\Model\HorizontalAlignment $alignment Gets or sets the alignment.
     *
     * @return $this
     */
    public function setAlignment($alignment)
    {
        $this->container['alignment'] = $alignment;

        return $this;
    }

    /**
     * Gets default_cell_text_state
     *
     * @return \Aspose\PDF\Model\TextState
     */
    public function getDefaultCellTextState()
    {
        return $this->container['default_cell_text_state'];
    }

    /**
     * Sets default_cell_text_state
     *
     * @param \Aspose\PDF\Model\TextState $default_cell_text_state Gets or sets the default cell text state.
     *
     * @return $this
     */
    public function setDefaultCellTextState($default_cell_text_state)
    {
        $this->container['default_cell_text_state'] = $default_cell_text_state;

        return $this;
    }

    /**
     * Gets paragraphs
     *
     * @return \Aspose\PDF\Model\TextRect[]
     */
    public function getParagraphs()
    {
        return $this->container['paragraphs'];
    }

    /**
     * Sets paragraphs
     *
     * @param \Aspose\PDF\Model\TextRect[] $paragraphs Gets or sets the cell's formatted text.
     *
     * @return $this
     */
    public function setParagraphs($paragraphs)
    {
        $this->container['paragraphs'] = $paragraphs;

        return $this;
    }

    /**
     * Gets is_word_wrapped
     *
     * @return bool
     */
    public function getIsWordWrapped()
    {
        return $this->container['is_word_wrapped'];
    }

    /**
     * Sets is_word_wrapped
     *
     * @param bool $is_word_wrapped Gets or sets the cell's text word wrapped.
     *
     * @return $this
     */
    public function setIsWordWrapped($is_word_wrapped)
    {
        $this->container['is_word_wrapped'] = $is_word_wrapped;

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
     * @param \Aspose\PDF\Model\VerticalAlignment $vertical_alignment Gets or sets the vertical alignment.
     *
     * @return $this
     */
    public function setVerticalAlignment($vertical_alignment)
    {
        $this->container['vertical_alignment'] = $vertical_alignment;

        return $this;
    }

    /**
     * Gets col_span
     *
     * @return int
     */
    public function getColSpan()
    {
        return $this->container['col_span'];
    }

    /**
     * Sets col_span
     *
     * @param int $col_span Gets or sets the column span.
     *
     * @return $this
     */
    public function setColSpan($col_span)
    {
        $this->container['col_span'] = $col_span;

        return $this;
    }

    /**
     * Gets row_span
     *
     * @return int
     */
    public function getRowSpan()
    {
        return $this->container['row_span'];
    }

    /**
     * Sets row_span
     *
     * @param int $row_span Gets or sets the row span.
     *
     * @return $this
     */
    public function setRowSpan($row_span)
    {
        $this->container['row_span'] = $row_span;

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
     * @param double $width Gets or sets the column width.
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets html_fragment
     *
     * @return string
     */
    public function getHtmlFragment()
    {
        return $this->container['html_fragment'];
    }

    /**
     * Sets html_fragment
     *
     * @param string $html_fragment Gets or sets Html fragment.
     *
     * @return $this
     */
    public function setHtmlFragment($html_fragment)
    {
        $this->container['html_fragment'] = $html_fragment;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \Aspose\PDF\Model\ImageFragment[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Aspose\PDF\Model\ImageFragment[] $images Gets or sets ImageFragment list.
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

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


